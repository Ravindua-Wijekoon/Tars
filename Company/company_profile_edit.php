<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
                                <h1>AR Communications</h1>
                                <h3>Telecommunications compan</h3>
                                <h6>intern@arcomms.com</h6>

                                <h5>About us</h5>
                                <div class="bio">Our company provides a wide range of communication services, including
                                    voice,
                                    video, and messaging solutions, as well as data and internet connectivity. Whether
                                    you need to make a call, send a text, or attend a virtual meeting, we have the tools
                                    and resources to keep you connected.</div>
                                <br><br>
                                <h5>Links</h5>
                                <span><b>LinkedIn |</b> <span>github.com/blakelively</span></span><br>
                                <span><b>Twitte |</b> <span>gitlabs.com/blakelively</span></span>

                            </div>

                        </div>
                    </div>

                    <div class="section2">
                        <div class="button-sec">

                        </div>
                        <form action="">
                            <div class="edit-sec">
                                <div class="div2">
                                    <label>Company Name</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB">
                                    </div>

                                </div>

                                <div class="div2">
                                    <label>Company Type</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB">
                                    </div>

                                </div>

                                <div class="div2">
                                    <label>Location</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB">
                                    </div>

                                </div>

                                <div class="div2">
                                    <label>Email Address</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB">
                                    </div>

                                </div>

                                <div class="div3">
                                    <label>About</label>
                                    <div class="input-full">
                                        <textarea class="edit-input" rows="8">Get old data from DB</textarea>
                                    </div>
                                </div>

                                <div class="div2">
                                    <label>LinkedIn</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB">
                                    </div>

                                </div>
                                <div class="div2">
                                    <label>Twitter</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB">
                                    </div>

                                </div>
                            </div>
                        </form>
                        <div class="button-sec2">
                            <div>Save</div>
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