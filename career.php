<?php
require('admin/db/config.php');
// Sanitize and collect form data
$post = htmlspecialchars(trim($_POST['post'] ?? ''), ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars(trim($_POST['subject'] ?? ''), ENT_QUOTES, 'UTF-8');
$title = htmlspecialchars(trim($_POST['title'] ?? ''), ENT_QUOTES, 'UTF-8');
$name = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$address = htmlspecialchars(trim($_POST['address'] ?? ''), ENT_QUOTES, 'UTF-8');
$mobile = preg_replace('/[^0-9]/', '', $_POST['mobile'] ?? '');
$alternateMobile = preg_replace('/[^0-9]/', '', $_POST['alternateMobile'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
$dob = htmlspecialchars(trim($_POST['dob'] ?? ''), ENT_QUOTES, 'UTF-8');
$maritalStatus = htmlspecialchars(trim($_POST['maritalStatus'] ?? ''), ENT_QUOTES, 'UTF-8');
$spouseName = htmlspecialchars(trim($_POST['spouseName'] ?? ''), ENT_QUOTES, 'UTF-8');
$kids = (int)($_POST['kids'] ?? 0);
$spouseOccupation = htmlspecialchars(trim($_POST['spouseOccupation'] ?? ''), ENT_QUOTES, 'UTF-8');
$languages = htmlspecialchars(trim($_POST['languages'] ?? ''), ENT_QUOTES, 'UTF-8');

// Handle file uploads
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Resume file
$resumeFile = null;
if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
    $resumeExtension = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
    $resumeFile = uniqid() . '.' . $resumeExtension;
    move_uploaded_file($_FILES['resume']['tmp_name'], $uploadDir . $resumeFile);
}

// Photo file
$photoFile = null;
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
    $photoExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $photoFile = uniqid() . '.' . $photoExtension;
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir . $photoFile);
}

// Salary slip file
$salarySlipFile = null;
if (isset($_FILES['salarySlip']) && $_FILES['salarySlip']['error'] === UPLOAD_ERR_OK) {
    $salarySlipExtension = pathinfo($_FILES['salarySlip']['name'], PATHINFO_EXTENSION);
    $salarySlipFile = uniqid() . '.' . $salarySlipExtension;
    move_uploaded_file($_FILES['salarySlip']['tmp_name'], $uploadDir . $salarySlipFile);
}

// SQL Query to insert into personal_details
$queryPersonal = "INSERT INTO personal_details 
(post, subject, title, name, address, mobile, alternate_mobile, email, dob, marital_status, spouse_name, kids, spouse_occupation, languages, resume_file, photo_file, salary_slip_file) 
VALUES 
(:post, :subject, :title, :name, :address, :mobile, :alternate_mobile, :email, :dob, :marital_status, :spouse_name, :kids, :spouse_occupation, :languages, :resume_file, :photo_file, :salary_slip_file)";

$stmtPersonal = $pdo->prepare($queryPersonal);

// Insert into personal_details
$stmtPersonal->execute([
    ':post' => $post,
    ':subject' => $subject,
    ':title' => $title,
    ':name' => $name,
    ':address' => $address,
    ':mobile' => $mobile,
    ':alternate_mobile' => $alternateMobile,
    ':email' => $email,
    ':dob' => $dob,
    ':marital_status' => $maritalStatus,
    ':spouse_name' => $spouseName,
    ':kids' => $kids,
    ':spouse_occupation' => $spouseOccupation,
    ':languages' => $languages,
    ':resume_file' => $resumeFile,
    ':photo_file' => $photoFile,
    ':salary_slip_file' => $salarySlipFile,
]);

$personalId = $pdo->lastInsertId(); // Get the last inserted ID for foreign key

// Insert Education Details
$educationQuery = "INSERT INTO education_details (user_id, exam_passed, medium, year, marks, board_college, subjects, mode_of_study) 
VALUES 
(:user_id, :exam_passed, :medium, :year, :marks, :board_college, :subjects, :mode_of_study)";

$stmtEducation = $pdo->prepare($educationQuery);

foreach ($_POST['education'] as $education) {
    $stmtEducation->execute([
        ':user_id' => $personalId,
        ':exam_passed' => htmlspecialchars(trim($education['exam_passed']), ENT_QUOTES, 'UTF-8'),
        ':medium' => htmlspecialchars(trim($education['medium']), ENT_QUOTES, 'UTF-8'),
        ':year' => htmlspecialchars(trim($education['year']), ENT_QUOTES, 'UTF-8'),
        ':marks' => htmlspecialchars(trim($education['marks']), ENT_QUOTES, 'UTF-8'),
        ':board_college' => htmlspecialchars(trim($education['board_college']), ENT_QUOTES, 'UTF-8'),
        ':subjects' => htmlspecialchars(trim($education['subjects']), ENT_QUOTES, 'UTF-8'),
        ':mode_of_study' => htmlspecialchars(trim($education['mode_of_study']), ENT_QUOTES, 'UTF-8'),
    ]);
}

// Insert Experience Details
$experienceQuery = "INSERT INTO work_experience (user_id, institution_name, from_date, to_date, nature_of_work) 
VALUES 
(:user_id, :institution_name, :from_date, :to_date, :nature_of_work)";

$stmtExperience = $pdo->prepare($experienceQuery);

foreach ($_POST['experience'] as $experience) {
    $stmtExperience->execute([
        ':user_id' => $personalId,
        ':institution_name' => htmlspecialchars(trim($experience['institution_name']), ENT_QUOTES, 'UTF-8'),
        ':from_date' => htmlspecialchars(trim($experience['from_date']), ENT_QUOTES, 'UTF-8'),
        ':to_date' => htmlspecialchars(trim($experience['to_date']), ENT_QUOTES, 'UTF-8'),
        ':nature_of_work' => htmlspecialchars(trim($experience['nature_of_work']), ENT_QUOTES, 'UTF-8'),
    ]);
}

// Handle any other necessary table inserts similarly

echo "Application submitted successfully!";
?>

<!Doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from themephi.net/template/eduan/eduan/index-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 05:10:10 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Career | Rungta Public School</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.ico">

        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
<style>
    .form-title {
      background-color: #990000;
      color: #fff;
      padding: 10px;
      text-align: center;
      margin-bottom: 20px;
      border-radius: 5px;
    }
    .btn-submit {
      background-color: #990000;
      color: #fff;
      border: none;
    }
    .btn-submit:hover {
      background-color: #b30000;
    }
    .form-control,
    .form-select {
      border-radius: 5px;
    }
</style>

        </head>
     
    <body>
       <!-- sidebar-information-area-start -->
       <div class="sidebar-info side-info">
        <?php
        require_once('sidebar.php');
        ?>
    </div>
            <div class="sidebar-menu-wrapper fix">
                <div class="mobile-menu"></div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
        <!-- sidebar-information-area-end -->

        <!-- header area start -->
        <header>
        <?php
        require('inc/menu.php');
        ?>
    </header>
        <!-- header area end -->
        <main>
            <!-- banner area start -->
            <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/breadcrumb-bg.jpg">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Career</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Career</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <div class="container mt-4">
    <div class="form-title">
      <h6>Application Form</h6>
    </div>
    <form>
      <!-- Basic Information -->
      <div class="row mb-3">
        <div class="col-md-6 col-sm-12">
        <label for="post">Post:</label>
        <input type="text" name="post" id="post"  required>
        </div>
        <div class="col-md-6 col-sm-12">
          <label for="subject" class="form-label">Subject</label>
          <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
      
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="title" class="form-label">Title</label>
        <select class="form-select" id="maritalStatus" name="title" required>
            <option value="">Select</option>
            <option value="Mr">Mr.</option>
            <option value="Ms">Ms.</option>
            <option value="Mrs">Mrs.</option>
          </select>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="address" class="form-label">Residential Address</label>
        <input class="form-control" id="address" name="address" rows="2" required></input>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
          <label for="mobile" class="form-label">Mobile No.</label>
          <input type="text" class="form-control" name="mobile" id="mobile" required>
        </div>
        <div class="col-md-6 col-sm-12 mb-3 mt-3">
          <label for="alternateMobile" class="form-label">Alternate Mobile No.</label>
          <input type="text" class="form-control" name="alternateMobile" id="alternateMobile">
        </div>

        <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="email" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" name="dob" id="dob" required>
        </div>
        <div class="col-md-6 col-sm-12 mb-3 mt-3">
          <label for="maritalStatus" class="form-label">Marital Status</label>
          <select class="form-select" id="maritalStatus" name="maritalStatus" required>
            <option value="">Select</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
          </select>
        </div>
        <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="spouseName" class="form-label">Spouse's Name</label>
        <input type="text" class="form-control" name="spouseName" id="spouseName">
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="kids" class="form-label">No. of Kids</label>
        <input type="number" class="form-control" name="kids" id="kids">
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="spouseOccupation" class="form-label">Spouse's Occupation</label>
        <input type="text" class="form-control" name="spouseOccupation" id="spouseOccupation">
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="languages" class="form-label">Knowledge of Foreign Languages</label>
        <input class="form-control" id="languages" name="languages" rows="2"></input>
      </div>
      
      <!-- Education -->
      <div class="mb-3">
        <h5>Education Details</h5>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Exam Passed (highest qualification first)</th>
              <th>Medium</th>
              <th>Year</th>
              <th>Marks%</th>
              <th>Board/College/University</th>
              <th>Subjects</th>
              <th>Mode of Study</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name="exam_passed"   class="form-control" required></td>
              <td><select class="form-select" id="medium" name="" required>
            <option value="">Select</option>
            <option value="English">English</option>
            <option value="Hindi">Hindi</option>
            <option value="Other">Other</option>
          </select></td>
              <td><input type="text" name="year" class="form-control" required></td>
              <td><input type="text" name="marks_percentage" class="form-control" required></td>
              <td><input type="text" name="board_college_university" class="form-control" required></td>
              <td><input type="text" name="subjects"  class="form-control" required></td>
              <td><select class="form-select" name="mode_of_study" id="maritalStatus" required>
            <option value="">Select</option>
            <option value="Regular">Regular</option>
            <option value="Distance">Distance</option>
            <option value="Private">Private</option>
          </select></td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Work Experience -->
      <div class="col-md-12 col-sm-12 mb-3 mt-3">
        <h5>Experience Details</h5>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name of the Institution (latest first)</th>
              <th>From (Month-Year)</th>
              <th>To (Month-Year)</th>
              <th>Subject & Classes taught / Nature of work experience</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <td><input type="text" class="form-control" required></td>
              <td><input type="text" class="form-control" required></td>
              <td><input type="text" class="form-control" required></td>
              <td><input type="text" class="form-control" required></td>
            </tr>
            <tr>
            <td><input type="text" class="form-control" required></td>
              <td><input type="text" class="form-control" required></td>
              <td><input type="text" class="form-control" required></td>
              <td><input type="text" class="form-control" required></td>
            </tr>
          </tbody>
        </table>
        
      </div>
      <h5>Total Experience (in years)</h5>
      <div class="col-md-6 col-sm-12 mb-3 ">
        <label for="teaching" class="form-label">Teaching</label>
        <input class="form-control" id="teaching" rows="2"></input>
      </div>
      <div class="col-md-6 col-sm-12 mb-3">
        <label for="admin" class="form-label">Admin</label>
        <input class="form-control" id="admin" rows="2"></input>
      </div>
      <div class="col-md-12 col-sm-12 mb-3 mt-3">
        <label for="teaching" class="form-label">Achievement in Sports & Games</label>
        <textarea class="form-control" id="teaching" rows="2"></textarea>
      </div>
      <div class="col-md-12 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">
        Achievement in Co-curricular Activities (e.g. debate, drama, dance, music etc.)</label>
        <textarea class="form-control" id="admin" rows="2"></textarea>
      </div>
      <div class="col-md-12 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Any other Achievement</label>
        <textarea class="form-control" id="admin" rows="2"></textarea>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Salary Scale (Rs.) </label>
        <input class="form-control" id="admin" rows="2"></input>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Allowances</label>
        <input class="form-control" id="admin" rows="2"></input>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Gross Salary (Rs.) </label>
        <input class="form-control" id="admin" rows="2"></input>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Perks</label>
        <input class="form-control" id="admin" rows="2"></input>
      </div>
      <div class="col-md-12 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Basic (Rs.) </label>
        <input class="form-control" id="admin" rows="2"></input>
      </div>
      <br>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Upload Resume (Upload File)</label>
        <input class="form-control" id="admin" type="file"></input>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Upload Photo</label>
        <input class="form-control" id="admin" rows="2" type="file"></input>
      </div>
      <div class="col-md-6 col-sm-12 mb-3 mt-3">
        <label for="admin" class="form-label">Upload Salary Slip</label>
        <input class="form-control" id="admin" rows="2" type="file"></input>
      </div>
      </div>
     <!-- Submit Button -->
     <div class="text-center">
        <button type="submit" class="btn btn-submit">Submit Now</button>
      </div>
    </form>

        <!-- cta area start -->
 <div class="h6_cta-area pt-120">
            <div class="container">
                <?php
                require('inc/cta.php');
                ?>
            </div>
        </div>
        <!-- cta area end -->

    </main>
    <a id="scrollUpBtn" title="Go to top"><i class="fas fa-arrow-up"></i></a>
    <!-- footer area start -->
    <footer class="h6_footer-area">
        <div class="footer-top pt-200 pb-30">
            <?php
            require('inc/footer.php');
            ?>
        </div>
        <div class="admission_apply">
            <span>
                <a href="">
                    <img src="assets/img/applynow.webp" alt="">
                </a>
            </span>
        </div>
    </footer>
    <!-- footer area end -->

		<!-- JS here -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/jquery.meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/jquery.scrollUp.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/jquery.bxslider.min.js"></script>
        <script src="assets/js/main.js"></script>
        
    </body>
</html>