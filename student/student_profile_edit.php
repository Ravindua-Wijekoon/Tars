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
                                <img src="../images/profile_photos/customer02.jpg" alt="">
                            </div>
                            <div class="info">
                                <h1>Blake Lively</h1>
                                <h5>Software Developer</h5>
                                <h6>blakelively@gmail.com</h6>

                                <h5>Bio</h5>
                                <span>I am a Software Developer with critical thinking skills and also creative
                                    skills.</span>
                                <br><br>
                                <h5>Links</h5>
                                <span class="links"><b>Github |</b> <span>github.com/blakelively</span></span><br>
                                <span class="links"><b>Gitlabs |</b> <span>gitlabs.com/blakelively</span></span><br>
                                <span class="links"><b>LinkedIn |</b> <span>
                                        linkedin.com/in//blakelively</span></span><br>
                                <span class="links"><b>Twitter |</b> <span>twitter.com/blakelively</span></span>

                            </div>

                        </div>
                    </div>

                    <div class="section2">
                        <div class="button-sec">
                            <div>About</div>
                            <div>Edit</div>
                        </div>
                        <div class="edit-sec">
                            <div class="div1">
                                <label>First Name</label><br>
                                <div>
                                    <input class="edit-input" type="text" placeholder="Get old data from DB">
                                </div>

                            </div>
                            <div class="div1">
                                <label>Last Name</label><br>
                                <div>
                                    <input class="edit-input" type="text" placeholder="Get old data from DB">
                                </div>
                            </div>
                            <div class="div1">
                                <label>City/Town</label><br>
                                <div>
                                    <input class="edit-input" type="text" placeholder="Get old data from DB">
                                </div>
                            </div>
                            <div class="div1">
                                <label>Experience</label><br>
                                <div>
                                    <input class="edit-input" type="text" placeholder="Get old data from DB">
                                </div>
                                <button class="plus">
                                    <img src="../images/plus.svg" alt="" />
                                </button>
                            </div>
                            <div class="div1">
                                <label>Email</label><br>
                                <div>
                                    <input class="edit-input" type="text" placeholder="Get old data from DB">
                                </div>
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