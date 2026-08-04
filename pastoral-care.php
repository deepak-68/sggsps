<!Doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pastoral Care | Shri Guru Gobind Singh Public School</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- sidebar-information-area-start -->
    <div class="sidebar-info side-info">
        <?php
        require_once('sidebar.php');
        ?>
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
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area bg-default" data-background="assets/img/breadcrumb/pastrol.png">
            <img src="assets/img/breadcrumb/shape-1.png" alt="" class="breadcrumb-shape">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Pastrol Care</h2>
                            <div class="breadcrumb-list">
                                <a href="index.php">Home</a>
                                <span>Pastrol Care</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->
        <section class="about-area pt-80 pb-90">
            <div class="container">
                <div class="row">
                    <!-- Sidebar -->
                    <?php
                    require_once('facilities-sidebar.php');
                    ?>
                    <!-- Content Area -->
                    <main class="col-md-9 col-lg-9 list-content">

                        <h5>Pastoral Care</h5>
                        <div class="container my-5 ">
                            <!-- Buttons to trigger each modal -->
                            <div class="d-flex flex-wrap gap-2">
                                 <h4>TBA</h4>
                                <!-- <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal1">Daily Schedule for Boarders</a>
                                <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal2">Saturday Schedule for Boarders</a> -->
                                <!-- <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal3">Sunday & Holiday Schedule for Boarders</a>
                                <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal4">Boarding Houses</a>
                                <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal5">Communication</a>
                                <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal6">Food Policy</a>
                                <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal7">Spiritual & Religious Life</a>
                                <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal8">Emotional Support</a>
                                <a type="button" class="theme-btn theme-btn-6" data-bs-toggle="modal" data-bs-target="#modal9">House Masters & Dames</a> -->
                            </div>
                        </div>

                        <!-- Modals -->
                        <!-- You can copy the structure below and adjust the ID and content for each modal -->
                        <!-- <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal1Label">Daily Schedule for Boarders:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bodered border-danger table-striped">
                                            <h6 style=" color:#990000;">Weekday Schedule</h6>
                                            <thead>

                                                <th>S.No.</th>
                                                <th>Activity</th>
                                                <th>Time</th>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Wake-up bell & Freshening up</td>
                                                    <td>05:30 - 05:45 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jogging/ Yoga/ Gym</td>
                                                    <td>05:45 - 06:15 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Shower & change into school uniform</td>
                                                    <td>06:15 - 07:00 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Milk time</td>
                                                    <td>07:10 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Home room</td>
                                                    <td>07:30 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Assembly/ House Meet</td>
                                                    <td>07:35 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Lesson I</td>
                                                    <td>07:55 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Lesson II</td>
                                                    <td>08:35 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Breakfast</td>
                                                    <td>09:15 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Lesson III</td>
                                                    <td>09:35 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Lesson IV</td>
                                                    <td>10:10 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Lesson V</td>
                                                    <td>10:50 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Recess</td>
                                                    <td>11:30 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Lesson VI</td>
                                                    <td>11:40 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>Lesson VII</td>
                                                    <td>12:20 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>Lesson VIII</td>
                                                    <td>12:55 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>School gets over</td>
                                                    <td>01:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>18</td>
                                                    <td>Buses Depart for Day Scholars</td>
                                                    <td>01:40 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>19</td>
                                                    <td>Lunch for Boarders</td>
                                                    <td>01:45 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>20</td>
                                                    <td>Rest</td>
                                                    <td>02:15 - 03:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>21</td>
                                                    <td>Supervised Study</td>
                                                    <td>03:30 - 05:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>22</td>
                                                    <td>Tea & Snacks</td>
                                                    <td>05:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td>Change into sports kit for Sports & Games</td>
                                                    <td>05:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>24</td>
                                                    <td>Wash/shower</td>
                                                    <td>06:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>25</td>
                                                    <td>Fall in for roll call</td>
                                                    <td>07:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>26</td>
                                                    <td>Supervised Prep Hours</td>
                                                    <td>07:00 - 08:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>27</td>
                                                    <td>Dinner</td>
                                                    <td>08:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>28</td>
                                                    <td>TV time / House chores/preparation/self study</td>
                                                    <td>09:00 p.m.</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Repeat similar structure for Modals 2 to 10 -->
                        <!-- <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal2Label">Saturday Schedule for Boarders:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bodered border-danger table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No.</th>
                                                    <th>Activity</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Wake-up bell & Freshening up</td>
                                                    <td>6:00 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jogging/ Yoga/ Gym</td>
                                                    <td>06:00 - 06:35 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Shower & change into school uniform</td>
                                                    <td>06:30 - 07:00 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Milk time</td>
                                                    <td>07:10 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Buses Arrive & Home room</td>
                                                    <td>07:30 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Weekly Test</td>
                                                    <td>07:40 to 8:40 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Recess</td>
                                                    <td>08:40 to 08:55 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Activity/ Sports Block At School</td>
                                                    <td>09:00 to 12:00 Noon</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Buses Depart For Day Scholars</td>
                                                    <td>12:10 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Lunch For Boarders</td>
                                                    <td>01:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Rest Personal Work/Leisure</td>
                                                    <td>02:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Tea & Snacks</td>
                                                    <td>05:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Games & sports</td>
                                                    <td>05:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Evening prep</td>
                                                    <td>07:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>Dinner</td>
                                                    <td>08:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>TV/Preparation VIII</td>
                                                    <td>09:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Lights Out</td>
                                                    <td>10:00 p.m.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 3 -->
                        <!-- <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal3Label">Sunday & Holiday Schedule for Boarders</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bodered border-danger table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No.</th>
                                                    <th>Activity</th>
                                                    <th>Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Wake-up bell & Freshening up</td>
                                                    <td>6:00 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Jogging/ Yoga/ Gym</td>
                                                    <td>06:00 - 06:35 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Shower & change into school uniform</td>
                                                    <td>06:30 - 07:00 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Milk time</td>
                                                    <td>07:10 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Buses Arrive & Home room</td>
                                                    <td>07:30 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Weekly Test</td>
                                                    <td>07:40 to 8:40 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Recess</td>
                                                    <td>08:40 to 08:55 a.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Activity/ Sports Block At School</td>
                                                    <td>09:00 to 12:00 Noon</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Buses Depart For Day Scholars</td>
                                                    <td>12:10 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Lunch For Boarders</td>
                                                    <td>01:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>Rest Personal Work/Leisure</td>
                                                    <td>02:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>Tea & Snacks</td>
                                                    <td>05:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>13</td>
                                                    <td>Games & sports</td>
                                                    <td>05:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>14</td>
                                                    <td>Evening prep</td>
                                                    <td>07:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>15</td>
                                                    <td>Dinner</td>
                                                    <td>08:30 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>16</td>
                                                    <td>TV/Preparation VIII</td>
                                                    <td>09:00 p.m.</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td>Lights Out</td>
                                                    <td>10:00 p.m.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 4 -->
                        <!-- <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modal4Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal3Label">Boarding Houses</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p align="justify">At SGGS, we provide a safe, secure, caring, and stress-free environment, which will make our boarders feel that they are in a home away from home. There is a separate boarding house for Boys and Girls with AC accommodation from Grade VI onwards. Two to four students share a room which has an attached washroom.</p>
                                        <p align="justify">Students follow a set routine in the morning and evening. After-school hours are used for learning with academic support from teachers who are available on campus. Boarders can look forward to the entire range of sporting activities like basketball, football, cricket, badminton, table tennis, horse riding and athletics along with other activities like music, dance, art & craft.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 5 -->
                        <!-- <div class="modal fade" id="modal5" tabindex="-1" aria-labelledby="modal5Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal3Label">Communication</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p align="justify">Parents are advised to contact the school office or write to the Head of School directly on any issue pertaining to their child. They can certainly meet the Head of School on prior appointment.</p>

                                        <ul align="justify">
                                            <li><i class="fa-regular fa-circle-dot" style="color: #990000;"></i> Boarders will be allowed to meet the Parents / Guardians only on the days specified in the calendar.</li>
                                            <li><i class="fa-regular fa-circle-dot" style="color: #990000;"></i> No visitors are allowed in the academic area / hostels / dining hall.</li>
                                            <li><i class="fa-regular fa-circle-dot" style="color: #990000;"></i> Kindly adhere to this as other students / residential staff members are put to unease when visitors enter these areas.</li>
                                            <li><i class="fa-regular fa-circle-dot" style="color: #990000;"></i> Parents may contact the school Departments on the following nos:</li>
                                        </ul>
                                        <ol align="justify">
                                            <li>Reception & Office: 0788 – 666 0600</li>
                                            <li>Boy's House Parent: 9229344418</li>
                                            <li>Girl's House Parent: 9229155516</li>
                                            <li>Parents are also encouraged to write to: <strong> info@rungtapublicschool.ac.in </strong>for any concern.</li>
                                            <li>You may also write to : <strong>principal@rungtapublicschool.ac.in</strong></li>
                                        </ol>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 6 -->
                        <!-- <div class="modal fade" id="modal6" tabindex="-1" aria-labelledby="modal6Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal3Label">Food Policy</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5>Vegeterian:</h5>
                                        <p align="justify">SGGS is a Pure Veg. campus. The Food Policy of our school makes it easier for students to make wise food and beverage choices while in school. The Food Committee comprises representative from Students, Residence staff and Mess Manager who meet once a week and plan the menu in consultation with the Nutritionist.</p>
                                        <p align="justify">The foods and beverages served in our school include a wide selection of in-season vegetables and fruit, whole grains, and lower fat choices ensuring:</p>
                                        <ol align="justify">
                                            <li>Healthy & Safe Food</li>
                                            <li>Support student health and learning</li>
                                            <li>Support the health messages learned in the classroom</li>
                                            <li>Make Healthy food and beverage choices easy</li>
                                            <li>Parents are requested not to send out-side food/ snacks / grubs etc.</li>
                                        </ol>
                                        <h5>Non-Vegeterian:</h5>
                                        <p align="justify">There are separate boarding houses for NRI and Foreign students to cater to the taste of Non-Vegetarian/ Vegetarian/ Continental/ Thai/ Chinese cuisine.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 7 -->
                        <!-- <div class="modal fade" id="modal7" tabindex="-1" aria-labelledby="modal7Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal3Label">Spiritual & Religious Life</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p align="justify">A student has the freedom to worship according to their denomination and faith only in his/ her room. Being an educational institution certain religious festivals/ occasions are celebrated in its traditional forms to develop awareness and respect for different faith/ religion. Students are not allowed to fast.</p>
                                        <p align="justify">Students may be permitted to visit worship places during their major festivals.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 8 -->
                        <!-- <div class="modal fade" id="modal8" tabindex="-1" aria-labelledby="modal8Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal8Label">Emotional Support:</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p align="justify">The Boarding facility at SGGS will not only provide academic support but also takes care of the child’s social, emotional and spiritual needs. The House Parents and the staff on the campus take special care of the Boarders. They are not just working, they are committed to the cause of the child.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 9 -->
                        <!-- <div class="modal fade" id="modal9" tabindex="-1" aria-labelledby="modal9Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal9Label">House Masters</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p align="justify">Both Boys and Girls Hostel have a separate House Parent who provides support and personalized attention to each student and helps in maintaining discipline.</p>
                                        <p align="justify">Their top priority is to know the children individually. The house-parents regularly inspect the rooms and common areas, to ensure each child maintains neatness and personal hygiene. Very importantly, house-parents provide a nurturing environment for children, and work closely with children that need extra support. They also keep in touch with parents via email or telephonically, providing regular updates about their children’s welfare. To help house- parents carry out their duties, they are ably supported by Admn. and a housekeeping team.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Modal 10 -->
                        <!-- <div class="modal fade" id="modal10" tabindex="-1" aria-labelledby="modal10Label" aria-hidden="true"> -->
                        <!-- <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal10Label"><a href="https://rungtapublicschool.ac.in/pastoral/menu_school_hostel.pdf">Mess Menu</a></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div> -->
                                <!-- <div class="modal-body">
                This is the content for Modal 3.
            </div> -->
                                <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div> -->
                                <!-- </div>
                            </div>
                        </div> -->

                                <!-- Continue creating additional modals up to Modal 10 with unique IDs -->
        </section>

        <!-- cta area start -->
        <div class="h6_cta-area ">
            <div class="container">
                <?php include('inc/cta.php'); ?>
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