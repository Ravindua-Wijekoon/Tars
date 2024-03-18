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

                <li>
                    <a href="#">
                        <span class="nav-icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Application</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="nav-icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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
            <div class="cardBox">
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

            </div>

            <!-- ================ Company list ================= -->
            <div class="grid-container">
                <div class="item1">
                    <span class="title">Featured Companies</span>
                    <div class="card-sec">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                        <div class="c-card">
                            <img src="../images/Group 105.png" alt="">
                            <span>Apple Inc.</span>
                            <span class="int-no">5 Internships</span>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <!-- ================ Internship list ================= -->

                <div class="item2">
                    <span class="title">Recommended Internships</span>
                    <div class="int-sec">
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            ?>
                        <div class="int-card">
                            <img src="../images/Group 105.png" alt="">
                            <div class="text1">
                                <span>UI/UX Designer</span>
                                <span>Dribbble Holdings Ltd.</span>
                                <span>LKR 50,000 - LKR 80,000</span>
                            </div>
                        </div>
                        <?php
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