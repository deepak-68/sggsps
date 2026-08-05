<?php
$adminID= $_SESSION['login_user_id'];
$adminPermissionQuery = "SELECT nm.title FROM admin_permissions ap
inner join navigation_menus nm on ap.navigation_menu_id = nm.id where ap.admin_id='" . $adminID . "' ";
$adminPermissionResult = mysqli_query($db, $adminPermissionQuery);

$permissions=[];
while ($item = mysqli_fetch_row($adminPermissionResult)) {
    array_push($permissions,$item[0]);
}
?>
    <nav class="pcoded-navbar menupos-fixed menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">
                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard.php" class="nav-link " style="background:#990000; color:#fff;"><span
                                class="pcoded-micon"><i class="feather icon-home"></i></span><span
                                class="">Dashboard</span></a>
                    </li>
                   
                    <?php
                    //  if ((in_array('Add New Category', $permissions)) || (in_array('All Categories', $permissions)) || (in_array('Add Parent Category', $permissions)) || (in_array('All Parent Category', $permissions))  || (in_array('All', $permissions)))
                    //   {
                        ?>
                    <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-edit"></i></span><span class="pcoded-mtext">Categories</span></a> -->
                        <ul class="pcoded-submenu">
                        <?php 
                        //   if ((in_array('Add New Category', $permissions)) || (in_array('All', $permissions))) {
                        //         echo "<li><a href='add-category.php'>Add New Category</a></li>";
                        //         }
                        //         if ((in_array('All Categories', $permissions)) || (in_array('All', $permissions))) {
                        //         echo "<li><a href='manage-category.php'>All Categories</a></li>";
                        //         }
                        //         if ((in_array('Add Parent Category', $permissions)) || (in_array('All', $permissions))) {
                        //         echo "<li><a href='add-parent-category.php'>Add Parent Category</a></li>";
                        //         }
                        //         if ((in_array('All Parent Category', $permissions)) || (in_array('All', $permissions))) {
                        //         echo "<li><a href='manage-parent-category.php'>All Parent Category</a></li>";
                        //         }
                        ?>
                        </ul>
                    </li>
                    <?php 
                // } 
                ?>




                    
                    <?php 
                    // if ((in_array('Add New Page', $permissions)) || (in_array('All Pages', $permissions)) || (in_array('All', $permissions))) {
                        ?>
                    <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-file-plus"></i></span><span
                                class="pcoded-mtext">Pages</span></a> -->
                        <ul class="pcoded-submenu">
                            <?php
                            //  if ((in_array('Add New Page', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-page.php'>Add New Page</a></li>";
                            //     }
                            //     if ((in_array('All Pages', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-page.php'>All Pages</a></li>";
                            //     }
                            ?>                             
                        </ul>
                    </li>
                    <?php 
                // }
                 ?>

                    <?php 
                    // if ((in_array('Add menu items', $permissions)) || (in_array('All menu', $permissions)) || (in_array('Add sub menu', $permissions)) || (in_array('All sub menu', $permissions)) || (in_array('All', $permissions))) {
                        ?>
                    <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span class="pcoded-mtext">Menus</span></a> -->
                        <ul class="pcoded-submenu">
                        <?php 
                        // if ((in_array('Add menu items', $permissions)) || (in_array('All', $permissions))) {
                            //   echo "<li><a href='add-menu.php'>Add menu items</a></li>";
                            //   } 
                            //   if ((in_array('All menu', $permissions)) || (in_array('All', $permissions))) {
                            //   echo "<li><a href='manage-menu.php'>All menu</a></li>";
                            //   }
                            //   if ((in_array('Add sub menu', $permissions)) || (in_array('All', $permissions))) {
                            //   echo "<li><a href='add-sub-menu.php'>Add sub menu</a></li>";
                            //   }
                            //   if ((in_array('All sub menu', $permissions)) || (in_array('All', $permissions))) {
                            //   echo "<li><a href='manage-sub-menu.php'>All sub menu</a></li>";
                            //   }
                         ?>    
                        </ul>
                    </li>
					<?php 
                // } 
                ?>
                    <?php if ((in_array('Add New Event', $permissions)) || (in_array('All Events', $permissions)) || (in_array('All', $permissions))) {?>	
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-briefcase"></i></span><span class="pcoded-mtext">Events
                            </span></a>
                        <ul class="pcoded-submenu">
							
							<?php if ((in_array('Add New Event', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-event.php'>Add New Event</a></li>";
							    }
                                if ((in_array('All Events', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-event.php'>All Events</a></li>";
                                }
                            ?> 
                        </ul>
                    </li>
					<?php } ?>

                    <?php if ((in_array('Add Notice Board', $permissions)) || (in_array('All Notices', $permissions)) || (in_array('All', $permissions))) {?>	
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-briefcase"></i></span><span class="pcoded-mtext">Notice Board
                            </span></a>
                        <ul class="pcoded-submenu">
							
							<?php if ((in_array('Add New Notice', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-notice-board.php'>Add New Event</a></li>";
							    }
                                if ((in_array('All Notices', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-notice-board.php'>All Notices</a></li>";
                                }
                            ?> 
                        </ul>
                    </li>
					<?php } ?>
                    <?php if ((in_array('Add Spotlight', $permissions)) || (in_array('All Spotlights', $permissions)) || (in_array('All', $permissions))) {?>	
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-briefcase"></i></span><span class="pcoded-mtext">Spotlights
                            </span></a>
                        <ul class="pcoded-submenu">
							
							<?php if ((in_array('Add Spotlight', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-spotlight.php'>Add New Spotlight</a></li>";
							    }
                                if ((in_array('All Spotlight', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-spotlight.php'>All Spotlights</a></li>";
                                }
                            ?> 
                        </ul>
                    </li>
					<?php } ?>





                      
					<?php if ((in_array('Add Image Slider', $permissions)) || (in_array('All Slider', $permissions)) || (in_array('All', $permissions))) {?>	
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-image"></i></span><span class="pcoded-mtext">Image Slider
                            </span></a>
                        <ul class="pcoded-submenu">
							
							<?php if ((in_array('Add Image Slider', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-slider.php'>Add Image Slider</a></li>";
							    }
                                if ((in_array('All Slider', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-slider.php'>All Slider</a></li>";
                                }
                            ?> 
                        </ul>
                    </li>
					<?php } ?>

                    <?php if ((in_array('Add New News & Achievements', $permissions)) || (in_array('All News & Achievements', $permissions)) || (in_array('All', $permissions))) {?>	
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-briefcase"></i></span><span class="pcoded-mtext">News & Achievements
                            </span></a>
                        <ul class="pcoded-submenu">
							
							<?php if ((in_array('Add New News & Achievements', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-news-achiev.php'>Add News & Achievements</a></li>";
							    }
                                if ((in_array('All News & Achievements', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-news-achiev.php'>All News & Achievements</a></li>";
                                }
                            ?> 
                        </ul>
                    </li>
					<?php } ?>

                   

                  


                    <?php if ((in_array('Add New Syllabus', $permissions)) || (in_array('All Syllabus', $permissions)) || (in_array('All', $permissions))) {?>
       				<li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-book"></i></span><span class="pcoded-mtext">Syllabus</span></a>
                        <ul class="pcoded-submenu">
							<?php if ((in_array('Add New Syllabus', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-syllabus.php'>Add New Syllabus</a></li>";
							    }
                                if ((in_array('All Syllabus', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-syllabus.php'>All Syllabus</a></li>";
                                }
                            ?>
                        </ul>
                    </li>
					<?php } ?>

                    <?php if ((in_array('Add New FAQ', $permissions)) || (in_array('All Syllabus', $permissions)) || (in_array('All', $permissions))) {?>
       				<li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-help-circle"></i>
                        </span><span class="pcoded-mtext">FAQ's</span></a>
                        <ul class="pcoded-submenu">
							<?php if ((in_array('Add New FAQ', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-faq.php'>Add New FAQ</a></li>";
							    }
                                if ((in_array('All Syllabus', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-faq.php'>All FAQ's</a></li>";
                                }
                            ?>
                        </ul>
                    </li>
					<?php } ?>
                    <?php if ((in_array('Pop Up Image', $permissions))|| (in_array('All', $permissions))
                     ) {
                    ?>
               		 <li class="nav-item">
                    	<a href="popupimage.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="">Popup Image</span></a>
                	</li>
                	<?php } ?>

					<?php 
                    // if ((in_array('Add New Video', $permissions)) || (in_array('All Videos', $permissions)) || (in_array('All', $permissions))) {
                        ?>
       				<li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-video"></i></span><span class="pcoded-mtext">Video</span></a> -->
                        <ul class="pcoded-submenu">
							<?php 
                            // if ((in_array('Add New Video', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-video.php'>Add New Video</a></li>";
							//     }
                            //     if ((in_array('All Videos', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-videos.php'>All Videos</a></li>";
                            //     }
                            ?>
                        </ul>
                    </li>
					<?php 
                // } 
                ?>
                 
					<?php 
                    // if ((in_array('Add Services', $permissions)) || (in_array('All Services', $permissions)) || (in_array('All', $permissions))) {
                        ?>	
                    <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-briefcase"></i></span><span class="pcoded-mtext">Services
                            </span></a> -->
                        <ul class="pcoded-submenu">
							
							<?php 
                            // if ((in_array('Add Services', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-services.php'>Add Services</a></li>";
							//     }
                            //     if ((in_array('All Services', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-services.php'>All Services</a></li>";
                            //     }
                            ?> 
                        </ul>
                    </li>
					<?php
                //  } 
                 ?>

                

                    <?php if ((in_array('Newsletter-Subscribed', $permissions))|| (in_array('All', $permissions))
                     ) {
                    ?>
               		 <li class="nav-item">
                    	<a href="newsletter.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="">Newsletter</span></a>
                	</li>
                	<?php } ?>

                    <?php if ((in_array('Contact-us', $permissions))|| (in_array('All', $permissions))
                     ) {
                    ?>
               		 <li class="nav-item">
                    	<a href="contact-us.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="">Contact Us</span></a>
                	</li>
                	<?php } ?>

					
					<?php 
                    // if ((in_array('Add Team Member', $permissions)) || (in_array('All Team Members', $permissions)) || (in_array('All', $permissions))) {
                        ?>	
                    <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-user-check"></i></span><span class="pcoded-mtext">Team
                            </span></a> -->
                        <ul class="pcoded-submenu">
							
							<?php
                            //  if ((in_array('Add Team Member', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-team-member.php'>Add Team Member</a></li>";
							//     }
                            //     if ((in_array('All Team Members', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-team-member.php'>All Team Members</a></li>";
                            //     }
                            ?> 
                        </ul>
                    </li>
					<?php 
                    // }
                     ?>
					
					<?php 
                    // if ((in_array('Add Study Material', $permissions)) || (in_array('All Study Material', $permissions)) || (in_array('All', $permissions))) {
                        ?>	
                    <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-book"></i></span><span class="pcoded-mtext">Study Material
                            </span></a> -->
                        <ul class="pcoded-submenu">
							
							<?php
                            //  if ((in_array('Add Study Material', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-study-material.php'>Add Study Material</a></li>";
							//     }
                            //     if ((in_array('All Study Material', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-study-material.php'>All Study Material</a></li>";
                            //     }
                            ?> 
                        </ul>
                    </li>
					<?php
                //  } 
                 ?>
			
					<?php if ((in_array('Add Testimonials', $permissions)) || (in_array('All Testimonials', $permissions)) || (in_array('All', $permissions))) {?>
					<li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-users"></i></span><span class="pcoded-mtext">Testimonials
                            </span></a>
                        <ul class="pcoded-submenu">
							<?php if ((in_array('Add Testimonials', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-testimonials.php'>Add Testimonial</a></li>";
							    } 
                                if ((in_array('All Testimonials', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-testimonials.php'>All Testimonials</a></li>";
                                }
                            ?> 
                       </ul>
                    </li>
                    <?php } ?>
                    
     				<?php 
                    // if ((in_array('Add New Post', $permissions)) || (in_array('All Posts', $permissions)) || (in_array('All', $permissions))) 
                    // {
                        ?>
                    
                      <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-box"></i></span><span class="pcoded-mtext">Posts</span></a> -->
                        <ul class="pcoded-submenu">
						    <?php 
                            // if ((in_array('Add New Post', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-post.php'>Add New Post</a></li>";
						    //     }
                            //     if ((in_array('All Posts', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-post.php'>All Posts</a></li>";
                            //     }
                            ?> 
                        </ul>
                    </li>
                    <?php
                    //  }
                     ?>
                    
                    
                    <?php 
                    // if ((in_array('Add New Media', $permissions)) || (in_array('All Media', $permissions)) || (in_array('All', $permissions))) {
                        ?>
       				<li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-camera"></i></span><span class="pcoded-mtext">Media Library</span></a> -->
                        <ul class="pcoded-submenu">
							<?php 
                            // if ((in_array('Add New Media', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-media.php'>Add New Media</a></li>";
							//     }
                            //     if ((in_array('All Media', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-media.php'>All Media</a></li>";
                            //     }
                            ?>
                        </ul>
                    </li>
					<?php 
                // }
                 ?>
					
									
     				<?php if ((in_array('Add New Admin User', $permissions)) || (in_array('All Admin Users', $permissions)) || (in_array('All', $permissions))) {?>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-users"></i></span><span class="pcoded-mtext">Admin Users</span></a>
                        <ul class="pcoded-submenu">
							<?php if ((in_array('Add New Admin User', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-user.php'>Add New Admin User</a></li>";
							    }
                                if ((in_array('All Admin Users', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-user.php'>All Admin Users</a></li>";
                                }
                            ?>
                        </ul>
                    </li>
                    <?php } ?>
					
     				<?php 
                    // if ((in_array('Add New Client', $permissions)) || (in_array('All Clients', $permissions)) || (in_array('All', $permissions))) {
                        ?>
                    <li class="nav-item pcoded-hasmenu">
                        <!-- <a href="#" class="nav-link "><span class="pcoded-micon"><i 
            				class="feather icon-user"></i></span><span class="">Clients</span></a> -->
            				<ul class="pcoded-submenu">
            				<?php
                            //  if ((in_array('Add New Client', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='add-client.php'>Add New Client</a></li>";
            			    //  	}
                            //     if ((in_array('All Clients', $permissions)) || (in_array('All', $permissions))) {
                            //     echo "<li><a href='manage-client.php'>All Clients</a></li>";
                            //     }
                            ?>
							</ul>
                    </li>
                     <?php
                    //  } 
                     ?>
                     
     				<?php
     			// 	if ((in_array('Contact form leads', $permissions)) || (in_array('Other Leads', $permissions)) || (in_array('All', $permissions))) {
     				?>
                    <li class="nav-item pcoded-hasmenu">
                        <!--<a href="#" class="nav-link "><span class="pcoded-micon"><i-->
                        <!--    class="feather icon-globe"></i></span><span class="">Leads</span></a>-->
 				           <ul class="pcoded-submenu">
 				           <?php 
 				           //if ((in_array('Contact form leads', $permissions)) || (in_array('All', $permissions))) {
                //                 echo "<li><a href='contact-leads.php'>Contact form leads</a></li>";
 				           //     }
                                // if ((in_array('Other Leads', $permissions)) || (in_array('All', $permissions))) {
                                // echo "<li><a href='other-leads.php'>Other Leads</a></li>";
                                // }
                            ?>
						   </ul>
                    </li>
                    <?php 
                    // } 
                    ?>
                    
                    
                  
                    

     				<?php if ((in_array('General Settings', $permissions)) || (in_array('Website Settings', $permissions)) || (in_array('System Settings', $permissions)) || (in_array('Financial Settings', $permissions)) || (in_array('All', $permissions))) {?>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-settings"></i></span><span class="pcoded-mtext">Settings
                            </span></a>
                        <ul class="pcoded-submenu">
                            
                            <?php if ((in_array('General Settings', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='profile.php'>General Settings</a></li>";
                                }
                                if ((in_array('Website Settings', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='company-settings.php'>Website Settings</a></li>";
                                }
                                if ((in_array('System Settings', $permissions)) || (in_array('All', $permissions))) {
                                    echo "<li><a href='system-settings.php'>System Settings</a></li>";
                                }
                                if ((in_array('Financial Settings', $permissions)) || (in_array('All', $permissions))) {
                                    echo "<li><a href='financial-settings.php'>Financial Settings</a></li>";
                                }
                            ?>
                        </ul>
                    </li>
                    <?php } ?>
                	
                	<?php if ((in_array('Add Statistics', $permissions)) || (in_array('All Statistics', $permissions)) || (in_array('All', $permissions))) {?>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i
                            class="feather icon-bar-chart-2"></i></span><span class="">Statistics</span></a>
 				           <ul class="pcoded-submenu">
 				           <?php if ((in_array('Add Statistics', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='add-statistics.php'>Add Statistics</a></li>";
 				                }
                                if ((in_array('All Statistics', $permissions)) || (in_array('All', $permissions))) {
                                echo "<li><a href='manage-statistics.php'>All Statistics</a></li>";
                                }
                            ?>
						   </ul>
                    </li>
                    <?php } ?>
                    
                    <?php if ((in_array('Registered Users', $permissions))|| (in_array('All', $permissions))
                     ) {
                    ?>
               		 <li class="nav-item">
                    	<a href="registered-users.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="">Registered Users</span></a>
                	</li>
                	<?php } ?>
                    
                    <?php if ((in_array('Logs Reports', $permissions))|| (in_array('All', $permissions))
                     ) {
                    ?>
               		 <li class="nav-item">
                    	<a href="reports.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="">Logs Reports</span></a>
                	</li>
                	<?php } ?>

                     <?php if ((in_array('Backup And Recovery', $permissions))|| (in_array('All', $permissions))
                     ) {
                    ?>
               		 <li class="nav-item">
                    	<a href="backup-recovery.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-globe"></i></span><span class="">Backup And Recovery</span></a>
                	</li>
                	<?php } ?>

                     <?php if ((in_array('Change Password', $permissions))|| (in_array('All', $permissions))
                     ) {
                    ?>
               		 <li class="nav-item">
                    	<a href="changepass.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="">Change Password</span></a>
                	</li>
                	<?php } ?>

                    <li class="nav-item">
                        <a href="logout.php" class="nav-link " style="background:#003399; color:#fff;"><span
                                class="pcoded-micon"><i class="feather icon-power"></i></span><span class="">Log
                                out</span></a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>