<?php

session_start();
error_reporting(0);

include("db/config.php");

if (!isset($_SESSION["login_user"]))
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // username and password sent from form
        $myusername = mysqli_real_escape_string($db, $_POST['username']);
        $mypassword = mysqli_real_escape_string($db, $_POST['password']);
        $mypassword = md5($mypassword);
        
        $sql = "SELECT * FROM admin WHERE username = '$myusername' and password = '$mypassword' and status=1";
        $result = mysqli_query($db, $sql);
        $adminData=mysqli_fetch_row($result);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['active'];
        
        // Storing google recaptcha response
        // in $recaptcha variable
        $recaptcha = $_POST['g-recaptcha-response'];
        
        $query2 = "SELECT secret_key FROM google_captcha";
        $result2 = mysqli_query($db, $query2);
        
        if ($result2) 
        {
            $row2 = mysqli_fetch_assoc($result2);
            $secret_key = $row2['secret_key'];
        } else 
        {
            // Handle error if query execution fails
            echo "Error: " . mysqli_error($db);
        }
        
        // Hitting request to the URL, Google will
        // respond with success or error scenario
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
            . $secret_key . '&response=' . $recaptcha;
            
            // Making request to verify captcha
            $response = file_get_contents($url);
            
            // Response return by google is in
            // JSON format, so we have to parse
            // that json
            $response = json_decode($response);
            
            // Checking, if response is true or not
            if ($response->success == true) 
            {
                $msg = "Google reCAPTACHA verified";
            } 
            else 
            {
                $msg = "Error in Google reCAPTACHA";
            }
            $count = mysqli_num_rows($result);
            
            // If result matched $myusername and $mypassword, table row must be 1 row
            if ($count == 1) 
            {
                $_SESSION['login_user'] = $myusername;
                $_SESSION['login_user_id'] = $adminData[9];
                
                /*?>setcookie('password',$myusername,time() + (86400 * 7));<?php */
                
                $_SESSION['id'] = session_id(); // hold the user id in session
                $uip = $_SERVER['REMOTE_ADDR']; // get the user ip
                date_default_timezone_set('Asia/Kolkata');
                $action = date('Y-m-d H:i:s A'); // query for inser user log in to data base
                
                mysqli_query($db, "insert into user_logs(user_id,username,user_ip,login_time) values('" . $_SESSION['id'] . "','" . $_SESSION['login_user'] . "','$uip','$action')");
                
                session_regenerate_id(true);
                $st = 1;
                
                $st = base64_encode($st);
                header("location: dashboard.php?loginin=$st");
            } 
            else 
            {
                $error = " ! Your Username or Password is invalid";
                $status = 1;
            }
    }
    
    $query = "SELECT * FROM login_settings";
    $settingsResult = mysqli_query($db, $query);
    $settings = mysqli_fetch_assoc($settingsResult);
    
    $logoPath = $settings['backend_panel_logo'];
    $helpdeskNumber = $settings['helpdesk_no'];
    
    // Function to delete old records
    function deleteOldRecords($db) {
        // Set timezone to match your requirement
        date_default_timezone_set('Asia/Kolkata');
        
        // Calculate the date 15 days ago
        $dateLimit = date('Y-m-d H:i:s', strtotime('-15 days'));
        
        // Construct the DELETE query with interpolated date limit
        $deleteQuery = "DELETE FROM user_logs WHERE login_time < '$dateLimit'";
        
        mysqli_query($db, $deleteQuery);
    }
    deleteOldRecords($db);
    
}
else
{
    header("location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>Welcome to Admin Panel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="#" />

    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/style.css">
    <script language="javascript" type="text/javascript">window.history.forward();</script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
</head>
<body>
	<div class="auth-wrapper align-items-stretch aut-bg-img">
    	<div class="flex-grow-1">
        	<div class="h-100 d-md-flex align-items-center auth-side-img"></div>
        	<div class="auth-side-form">
        		<form action="" method="post">
        			<div class=" auth-content" style="background-color:#f8f7f2;">
                    	<img src="<?php echo $logoPath; ?>" alt="" class="img-fluid">
                    	<hr />
                    	<h3 class="mb-4 f-w-400">Sign in</h3>
                    	<?php if (isset($status)) 
                    	{
                            echo " <div class='alert alert-danger alert-dismissible fade show' role='alert' style='font-size:16px;' id='successMessage'>
                                   <strong><i class=' feather  icon icon-info'></i>Error!</strong> $error.
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span>
                                    </button>
                                    </div> ";
                        }
                        ?>
                    	<div class="input-group mb-3">
                        	<div class="input-group-prepend">
                            	<span class="input-group-text" style="background-color:#990000;color:#fff;"><i class="feather icon-mail"></i></span>
                            </div>
                        	<input type="text" class="form-control" placeholder="Username" name="username" required
                            oninvalid="this.setCustomValidity('Please Enter Username')" oninput="setCustomValidity('')" style="border-color:#990000">
                    	</div>
                    	<div class="input-group mb-4">
                        	<div class="input-group-prepend">
                            	<span class="input-group-text"  style="background-color:#990000;color:#fff;"><i class="feather icon-lock"></i></span>
                        	</div>
                        	<input type="password" class="form-control" placeholder="Password" name="password" required
                            oninvalid="this.setCustomValidity('Please Enter Password')" oninput="setCustomValidity('')" style="border-color:#990000">
                    	</div>
                    	<?php
                            include 'db/config.php';
                            $query3 = "SELECT site_key FROM google_captcha";
                            $result3 = mysqli_query($db, $query3);
                    
                            if ($result3) {
                                $row3 = mysqli_fetch_assoc($result3);
                                $site_Key = $row3['site_key'];
                            } 
                            else 
                            {
                                echo "Error: " . mysqli_error($db);
                            }
                        ?>
                    	<div class="form-group">
                        	<div class="g-recaptcha" data-sitekey="<?php echo $site_Key;?>"
                            	data-callback="callback" style="border:none;" align="center">
                        	</div>
                    	</div>
                    	<button type="submit" class="btn btn-secondary " name="submit" id="submit" disabled>
                        	<i class="feather icon-save lg"></i>&nbsp;Sign In
                    	</button>
            	</form>
            	<div class="text-center">
            		<br/> 
            		<br/>
              		<hr/ style="border-color:#003399">
            		<p style="color:#000;">HelpDesk/Helpline No: <?php echo $helpdeskNumber; ?></p>
            	</div>
        	</div>
    	</div>
	</div>
	<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/js/plugins/bootstrap.min.js"></script>
	<script src="assets/js/waves.min.js"></script>
	<script>
		$(document).ready(function() {
    		$("#successMessage").delay(5000).slideUp(300);
		});
	</script>
	<script type="text/javascript">
		function callback() {
    		const submitButton = document.getElementById("submit");
    		submitButton.removeAttribute("disabled");
		}
	</script>
</body>
</html>