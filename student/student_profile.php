<?php

session_start();

$uocindex = $_SESSION['id'];

//echo $uocindex;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                    <a href="../Student/student_dashboard.php">
                        <span class="nav-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../Student/student_search_job.php">
                        <span class="nav-icon">
                            <ion-icon name="search-outline"></ion-icon>
                        </span>
                        <span class="title">Search Job</span>
                    </a>
                </li>

                <li>
                    <a href="../Student/student_companies.php">
                        <span class="nav-icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Companies</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="./student_application.php">
                        <span class="nav-icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Application</span>
                    </a>
                </li> -->

                <!-- <li>
                    <a href="#">
                        <span class="nav-icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li> -->

                <li>
                    <a href="./student_profile.php">
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
                    <!-- <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label> -->
                </div>

                <div class="sec-1">
                    <div class="messages">
                        <!-- <img src="../images/messages.png" alt="" /> -->
                    </div>
                    <div class="notification">
                        <!-- <img src="../images/notification.png" alt="" /> -->
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
                                <img src="../images/profile_photos/customer02.jpg" alt="">
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

                            $sql = "SELECT * FROM student_info WHERE uocindex = ?";
                            $stmt = $con->prepare($sql);
                            $stmt->bind_param('s', $uocindex);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result && mysqli_num_rows($result) > 0) {
                                $row = $result->fetch_assoc();

                                echo '<div class="info">';
                                echo '<h3>' . $row['fullname'] . '</h3>';
                                echo '<h6>' . $row['email'] . '</h6>';
                                echo '<h5>Bio</h5>';
                                echo '<div class="bio">' . $row['bio'] . '</div>';
                                echo '<br><br>';
                                echo '<h5>Links</h5>';
                                echo '<span><b>Github |</b> <span>' . $row['github'] . '</span></span><br>';
                                echo '<span><b>LinkedIn |</b> <span>' . $row['linkedin'] . '</span></span><br>';
                                echo '<span><b>Twitter |</b> <span>' . $row['portfolio'] . '</span></span>';
                                echo '</div>';




                            } else {
                                echo "<tr><td colspan='4'>No students found.</td></tr>";
                            }

                            ?>
                            <!-- <div class="button-sec3">
                                <a href="mailto:ravinduwijekoon123@gmail.com" class="none">
                                    <div>Send Email</div>
                                </a>
                            </div> -->

                        </div>
                    </div>

                    <div class="sd-form">

                        <div class="section2">
                            <a href="./student_profile_edit.php" class="none">
                                <div class="button-sec">
                                    <div>Edit</div>
                                </div>
                            </a>

                            <?php


                        $DATABASE_HOST = 'localhost';
                        $DATABASE_USER = 'root';
                        $DATABASE_PASS = '';
                        $DATABASE_NAME = 'tars_db';

                        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                        if (mysqli_connect_errno()) {
                            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                        }

                        $sql1 = "SELECT * FROM education_info WHERE std_id = ?";
                        $stmt_edu = $con->prepare($sql1);
                        $stmt_edu->bind_param('s', $uocindex);
                        $stmt_edu->execute();
                        $result_edu = $stmt_edu->get_result();

                        $sql2 = "SELECT * FROM experience_info WHERE std_id = ?";
                        $stmt_exp = $con->prepare($sql2);
                        $stmt_exp->bind_param('s', $uocindex);
                        $stmt_exp->execute();
                        $result_exp = $stmt_exp->get_result();

                        $sql3 = "SELECT * FROM skill_info WHERE std_id = ?";
                        $stmt_skill = $con->prepare($sql3);
                        $stmt_skill->bind_param('s', $uocindex);
                        $stmt_skill->execute();
                        $result_skill = $stmt_skill->get_result();

                        $sql4 = "SELECT * FROM language_info WHERE std_id = ?";
                        $stmt_lan = $con->prepare($sql4);
                        $stmt_lan->bind_param('s', $uocindex);
                        $stmt_lan->execute();
                        $result_lan = $stmt_lan->get_result();

                        echo '<div class="qual">';
                        echo '<h3>Education</h3>';

                        if ($result_edu && mysqli_num_rows($result_edu) > 0) {
                            while ($row = mysqli_fetch_assoc($result_edu)) {



                                echo '<div>' . $row['institution'] . '</div>';
                            }

                        } else {
                            echo "<tr><td colspan='4'>No students found.</td></tr>";
                        }
                        echo '<h3>Experience</h3>';
                        if ($result_exp && mysqli_num_rows($result_exp) > 0) {
                            while ($row = mysqli_fetch_assoc($result_exp)) {


                                echo '<div>' . $row['experience'] . '</div>';
                            }

                        } else {
                            echo "<tr><td colspan='4'>No students found.</td></tr>";
                        }

                        echo '<h3>Skills</h3>';
                        if ($result_skill && mysqli_num_rows($result_skill) > 0) {
                            while ($row = mysqli_fetch_assoc($result_skill)) {


                                echo '<div>' . $row['skill'] . '</div>';
                            }

                        } else {
                            echo "<tr><td colspan='4'>No students found.</td></tr>";
                        }

                        echo '<h3>Languages</h3>';
                        if ($result_lan && mysqli_num_rows($result_lan) > 0) {
                            while ($row = mysqli_fetch_assoc($result_lan)) {


                                echo '<div>' . $row['language'] . '</div>';
                            }

                        } else {
                            echo "<tr><td colspan='4'>No students found.</td></tr>";
                        }

                        $sql5 = "SELECT * FROM student_info WHERE uocindex = ?";
                        $stmt_under = $con->prepare($sql5);
                        $stmt_under->bind_param('s', $uocindex);
                        $stmt_under->execute();
                        $result_under = $stmt_under->get_result();

                        if ($result_under && mysqli_num_rows($result_under) > 0) {
                            $row = $result_under->fetch_assoc();


                            echo '<h3>Birthday</h3>';
                            echo '<div>' . $row['dob'] . '</div>';
                            echo '<h3>Address</h3>';
                            echo '<div>' . $row['address'] . '</div>';

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

    </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../lib/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>