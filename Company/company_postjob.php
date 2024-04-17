
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
    <title>Post Job</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../lib/style/company_dash.css">
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
                    Post Job
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox2">
                <a href="../lib/php/job_post_03.php" class="none">
                    <div class="card2">
                        <img src="../images/plus.svg" alt="" />
                        <h6>Add New Intern</h6>
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

                $sql = "SELECT * FROM company_post_job WHERE email = ?";
                $stmt = $con->prepare($sql);
                $stmt->bind_param('s', $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        echo "<div class='card3'>";
                        echo "<h2>". $row['title'] ."</h2>";
                        echo "<h4>". $row['description'] ."</h4>";
                        echo "<div class='type'>". $row['type'] ."</div>";
                        echo "<h6>Applied</h6>";
                        echo "<h5>14</h5>";
                        echo "</div>";


                    }
                } else {
                    echo "<tr><td colspan='4'>No students found.</td></tr>";
                }

                ?>

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