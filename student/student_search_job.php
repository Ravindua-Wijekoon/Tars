<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Job</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../lib/style/student_dash.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container1">
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
                    Search Job
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

            <!-- <div class="lable-bar">
                <div>Software Engineer</div>
                <div>Marketing</div>
                <div>UI/UX Designer</div>
                <div>Web Developer</div>
            </div> -->

            <!-- ========================= Cards ==================== -->

            <div class="job-card-sec">
                <?php
                for ($i = 0; $i < 23; $i++) {
                    ?>
                    <div class="job-card" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <div class="sec">
                            <span class="card-name">
                                Dribbble Holdings Ltd. <br>
                                <span class="card-topic">UI/UX Designer</span>
                            </span>
                            <div class="image">
                                <img src="../images/Group 105.png" alt="">
                            </div>

                        </div>

                        <div class="price-tag">LKR 50,000 - LKR 80,000</div><br>
                        <div class="about">UI/UX Designer of Dribbble Holdings Ltd. is a job that challenges the creativity
                            of a person.
                            Dribbble Holdings Ltd. is known for the quality products among customers. The goal of the job is
                            to
                            design efficient UI/UX designs to the web developers.
                        </div>
                        <div class="lable-bar">
                            <div>Online</div>
                            <div class="none">Los Angeles, USA</div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog ">
                            <div class=" modal-content">
                                <div class="md-div1">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="md-div2">
                                    <div class="mt-title" id="staticBackdropLabel">UI/UX Designer</div>
                                    <h6>Dribbble Holdings Ltd.</h6>

                                    <div class="md-price">LKR 50,000 - LKR 80,000</div>
                                </div>
                                <div class="md-div3">
                                    UI/UX Designer of Dribbble Holdings Ltd. is a job that challenges the creativity
                                    of a person.
                                    Dribbble Holdings Ltd. is known for the quality products among customers. The goal of
                                    the job is
                                    to
                                    design efficient UI/UX designs to the web developers.
                                </div>
                                <div class="md-lable-bar">
                                    <div>Online</div>
                                    <div>Los Angeles, USA</div>
                                </div>
                                <div class="md-div4">
                                    <button type="button" class="md-button" data-bs-dismiss="modal">Close</button>
                                    <a class="md-button md-none" type="button"
                                        href="mailto:ravinduwijekoon123@gmail.com">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                }
                ?>
            </div>

        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../lib/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>