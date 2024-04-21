<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
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

                <li>
                    <a href="./student_application.php">
                        <span class="nav-icon">
                            <ion-icon name="document-text-outline"></ion-icon>
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
                    Companies
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

            <div class="search-sec">
                <div class="search-bar">
                    <label>
                        <input type="text" placeholder="Search by Title or Company">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="search-button">
                    Search
                </div>

            </div>

            <!-- ========================= Cards ==================== -->

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

                $sql2 = "SELECT * FROM company_info";
                $stmt2 = $con->prepare($sql2);
                $stmt2->execute();
                $result2 = $stmt2->get_result();




                if ($result2 && mysqli_num_rows($result2) > 0) {
                    while ($row = mysqli_fetch_assoc($result2)) {

                    
                        echo '<a class="com-none company-card" href="./student_companies_profile.php?email=' . urlencode($row['email']) . '">';
                        echo '<img src="../images/Group 105.png" alt="">';
                        echo '<div class="company-name">';
                        echo ''. $row['name'] .'';
                        echo '</div>';
                        echo '<div class="company-type">';
                        echo ''. $row['about'] .'';
                        echo '</div>';
                        
                    
                    
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