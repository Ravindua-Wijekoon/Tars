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
    <title>Student Dashboard</title>
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
                    Dashboard
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

            <!-- ======================= Cards ================== -->
            <!-- <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="cardName">Applied</div>
                        <div class="numbers">20</div>

                    </div>

                    <div class="image">
                        <img src="../images/briefcase.png" alt="">
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="cardName">Interviews</div>
                        <div class="numbers">10</div>

                    </div>

                    <div class="image">
                        <img src="../images/calendar.png" alt="">
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="cardName">Messages</div>
                        <div class="numbers">08</div>

                    </div>

                    <div class="image">
                        <img src="../images/messagetext1.png" alt="">
                    </div>
                </div>

            </div> -->

            <!-- ================ Company list ================= -->
            <div class="grid-container">
                <div class="item1">
                    <span class="title">Featured Companies</span>
                    <div class="card-sec">

                        <?php

                        $DATABASE_HOST = 'localhost';
                        $DATABASE_USER = 'root';
                        $DATABASE_PASS = '';
                        $DATABASE_NAME = 'tars_db';

                        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                        if (mysqli_connect_errno()) {
                            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM company_info ORDER BY id DESC LIMIT 3";
                        $stmt = $con->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->get_result();




                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {

                                $email = $row['email'];


                                $sql1 = "SELECT COUNT(*) AS email_count FROM company_post_job WHERE email = ?";
                                $stmt1 = $con->prepare($sql1);
                                $stmt1->bind_param('s', $email);
                                $stmt1->execute();
                                $result1 = $stmt1->get_result();
                                $row1 = $result1->fetch_assoc();
                                $email_count = $row1['email_count'];

                                echo '<div class="c-card">';
                                echo '<img src="../images/Group 105.png" alt="" >';
                                echo '<span>' . $row['name'] . '</span>';
                                echo '<span class="int-no">' . $email_count . ' Internships</span>';
                                echo '</div>';
                            }

                        } else {
                            echo "<tr><td colspan='4'>No students found.</td></tr>";
                        }

                        ?>
                    </div>

                </div>

                <!-- ================ Internship list ================= -->

                <div class="item2">
                    <span class="title">Recommended Internships</span>
                    <div class="int-sec">

                        <?php

                        $DATABASE_HOST = 'localhost';
                        $DATABASE_USER = 'root';
                        $DATABASE_PASS = '';
                        $DATABASE_NAME = 'tars_db';

                        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                        if (mysqli_connect_errno()) {
                            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                        }

                        $sql2 = "SELECT * FROM company_info ORDER BY id DESC LIMIT 3";
                        $stmt2 = $con->prepare($sql2);
                        $stmt2->execute();
                        $result2 = $stmt2->get_result();




                        if ($result2 && mysqli_num_rows($result2) > 0) {
                            while ($row = mysqli_fetch_assoc($result2)) {

                                $email = $row['email'];
                                $name = $row['name'];


                                $sql3 = "SELECT title FROM company_post_job WHERE email = ?";
                                $stmt3 = $con->prepare($sql3);
                                $stmt3->bind_param('s', $email);
                                $stmt3->execute();
                                $result3 = $stmt3->get_result();
                                $row3 = $result3->fetch_assoc();

                                echo '<div class="int-card">';
                                echo '<img src="../images/Group 105.png" alt="">';
                                echo '<div class="text1">';
                                echo '<span class="text2" >' . $row3['title'] . '</span>';
                                echo '<span>' . $name . '</span>';
                                echo '</div>';
                                echo '</div>';

                                /////////////////////////////////////////
                        
                            }

                        } else {
                            echo "<tr><td colspan='4'>No students found.</td></tr>";
                        }

                        ?>

                    </div>
                </div>
                <div class="item3">
                    <span class="title">Recent Activities</span>
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