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
            <form action="">
                <div class="main-appbox">
                    <div class="appbox1">
                        <h2>Add Internship Details</h2>

                        <label class="label2 ">Add Internship Title</label>
                        <div class="outer-box">
                            <input type="text" class="normal">
                        </div>

                        <label class="label2 ">Add Internship Title</label>
                        <div class="outer-box2">
                            <textarea class="normal2" rows="10">
                        </textarea>
                        </div>

                        <label class="label2 ">Location</label>
                        <div class="outer-box">
                            <input type="text" class="normal">
                        </div>
                        <label class="label2 ">Expected Qualifications</label>
                        <div class="outer-box">
                            <input type="text" class="normal">
                        </div>
                        <label class="label2 ">Internship Type</label>
                        <div class="outer-box3">
                            <div>
                                <input type="radio" value="Remote" name="type">
                                <label>Remote</label>
                            </div>

                            <div>
                                <input type="radio" value="Onsite" name="type">
                                <label>Onsite</label>
                            </div>


                        </div>

                    </div>
                    <div class="appbox2">
                        <a href="./company_postjob.php" class="none">
                            <div class="button">
                                Cancel
                            </div>
                        </a>
                        <div class="button">
                            Publish
                        </div>
                    </div>
                </div>
            </form>





        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../lib/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>