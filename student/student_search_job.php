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
                    Search Job
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
                        <a class="none" href="../login/login.php">Logout</a>
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

                $DATABASE_HOST = 'localhost';
                $DATABASE_USER = 'root';
                $DATABASE_PASS = '';
                $DATABASE_NAME = 'tars_db';

                $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                if (mysqli_connect_errno()) {
                    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                }

                $sql2 = "SELECT * FROM company_post_job";
                $stmt2 = $con->prepare($sql2);
                $stmt2->execute();
                $result2 = $stmt2->get_result();




                if ($result2 && mysqli_num_rows($result2) > 0) {
                    while ($row = mysqli_fetch_assoc($result2)) {

                        $email = $row['email'];
                        $name = $row['title'];
                        $des = $row['description'];
                        $loc = $row['location'];
                        $type = $row['type'];
                        $quali = $row['qualification'];


                        $sql3 = "SELECT * FROM company_info WHERE email = ?";
                        $stmt3 = $con->prepare($sql3);
                        $stmt3->bind_param('s', $email);
                        $stmt3->execute();
                        $result3 = $stmt3->get_result();
                        $row3 = $result3->fetch_assoc();

                        echo '<div class="job-card" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">';
                        echo '<div class="sec">';
                        echo '<span class="card-name">';

                        echo '' . $row3['name'] . '<br>';
                        echo '<span class="card-topic">' . $name . '</span>';
                        echo '</span>';
                        echo '<div class="image">';
                        echo '<img src="../images/Group 105.png" alt="">';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="price-tag"><h5>Experience</h5>' . $quali . '</div><br>';
                        echo '<div class="about">' . $des . '</div>';
                        echo '<div class="lable-bar">';
                        echo '<div>' . $type . '</div>';
                        echo '<div class="none">' . $loc . '</div>';
                        echo '</div>';
                        echo '</div>';

                        /////////////////////////////////////////
                
                        echo '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">';
                        echo '<div class="modal-dialog ">';
                        echo '<div class=" modal-content">';
                        echo '<div class="md-div1">';
                        echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                        echo '</div>';
                        echo '<div class="md-div2">';
                        echo '<div class="mt-title" id="staticBackdropLabel">' . $name . '</div>';
                        echo '<h6>' . $row3['name'] . '</h6>';
                        echo '<div class="md-price"><h5>Experience</h5>' . $quali . '</div>';
                        echo '</div>';
                        echo '<div class="md-div3">' . $des . '</div>';
                        echo '<div class="md-lable-bar">';
                        echo '<div>' . $type . '</div>';
                        echo '<div>' . $loc . '</div>';
                        echo '</div>';
                        echo '<div class="md-div4">';
                        echo '<button type="button" class="md-button" data-bs-dismiss="modal">Close</button>';
                        echo '<a class="md-button md-none" type="button" href="mailto:' . $row3['com_email'] . '">Apply</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
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