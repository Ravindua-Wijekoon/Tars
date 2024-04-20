<?php

session_start();

$user_id = $_SESSION['id'];



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../lib/style/student_dash.css">

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <span class="icon">
                            <img src="../images/logo.png" alt="">
                        </span>
                        <span class="title">Tars</span>
                    </a>
                </li>

                <li>
                    <a href="./company_dashboard.php">
                        <span class="nav-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="./company_postjob.php">
                        <span class="nav-icon">
                            <ion-icon name="search-outline"></ion-icon>
                        </span>
                        <span class="title">Post Job</span>
                    </a>
                </li>

                <li>
                    <a href="./company_applications.php">
                        <span class="nav-icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Application</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                        <span class="nav-icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li> -->

                <li>
                    <a href="./company_profile.php">
                        <span class="nav-icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="topic">
                    Profile
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="sec-1">
                    <div class="messages">
                        <img src="../images/messages.png" alt="" />
                    </div>
                    <div class="notification">
                        <img src="../images/notification.png" alt="" />
                    </div>
                    <div class="logout">
                        <a class="none" href="#">Logout</a>
                    </div>

                    <div class="user">
                        <img src="../images/profile_photos/customer02.jpg" alt="">
                    </div>

                </div>
            </div>
            <div class="marg">
                <div class="card-sec2">

                    <div class="section1">
                        <div class="profile-card">
                            <div class="profile-pic">
                                <img src="../images/Group 105.png" alt="">
                            </div>
                               <?php


                                $DATABASE_HOST = 'localhost';
                                $DATABASE_USER = 'root';
                                $DATABASE_PASS = '';
                                $DATABASE_NAME = 'tars_db';

                                $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                                if (mysqli_connect_errno()) {
                                    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                                }
                                
                                $sql = "SELECT * FROM company_info WHERE email = ?";
                                $stmt = $con->prepare($sql);
                                $stmt->bind_param('s', $user_id);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result && mysqli_num_rows($result) > 0) {
                                    $row = $result->fetch_assoc();

                                    echo '<div class="info">';
                                    echo '<h1>' . $row['name'] . '</h1>';
                                    echo '<h3>' . $row['type'] . '</h3>';
                                    echo '<h6>' . $row['com_email'] . '</h6>';
                                    echo '<h5>About us</h5>';
                                    echo '<div class="bio">' . $row['about'] . '</div>';
                                    echo '<br><br>';
                                    echo '<h5>Links</h5>';
                                    echo '<span><b>LinkedIn |</b> <span>' . $row['linkedin'] . '</span></span><br>';
                                    echo '<span><b>Twitter |</b> <span>' . $row['twitter'] . '</span></span>';
                                    echo '</div>';




                                } else {
                                    echo "<tr><td colspan='4'>No students found.</td></tr>";
                                }
                                
                                ?>
                            

                        </div>
                    </div>

                    <div class="section2">
                        <div class="button-sec">
                            <a href="./company_profile_edit.php" class="none">
                                <div>Edit</div>
                            </a>

                        </div>
                        <?php


                                $DATABASE_HOST = 'localhost';
                                $DATABASE_USER = 'root';
                                $DATABASE_PASS = '';
                                $DATABASE_NAME = 'tars_db';

                                $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                                if (mysqli_connect_errno()) {
                                    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                                }
                                
                                $sql = "SELECT * FROM company_info WHERE email = ?";
                                $stmt = $con->prepare($sql);
                                $stmt->bind_param('s', $user_id);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result && mysqli_num_rows($result) > 0) {
                                    $row = $result->fetch_assoc();

                                    echo '<div class="qual">';
                                    echo '<h3>Location</h3>';
                                    echo '<div>' . $row['location'] . '<div>';
                                    echo '</div>';




                                } else {
                                    echo "<tr><td colspan='4'>No students found.</td></tr>";
                                }
                                
                                ?>

                    </div>
                </div>


            </div>

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../lib/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>