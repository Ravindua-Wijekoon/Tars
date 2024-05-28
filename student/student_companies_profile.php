<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
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
                    Companies
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



            <div class="marg">
                <?php
                if (isset($_GET['email'])) {
                    $emailget = $_GET['email'];
                    //echo "Email: " . $email;
                } else {
                    echo "Email parameter is missing.";
                }

                $DATABASE_HOST = 'localhost';
                $DATABASE_USER = 'root';
                $DATABASE_PASS = '';
                $DATABASE_NAME = 'tars_db';

                $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                if (mysqli_connect_errno()) {
                    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                }

                // Query to fetch company information
                $sql2 = "SELECT * FROM company_info WHERE email = ?";
                $stmt2 = $con->prepare($sql2);
                $stmt2->bind_param('s', $emailget);
                $stmt2->execute();
                $result2 = $stmt2->get_result();

                if ($result2 && mysqli_num_rows($result2) > 0) {
                    $row1 = mysqli_fetch_assoc($result2);

                    echo '<div class="company-det">';
                    echo '<img src="../images/Group 105.png" alt="comp logo">';
                    echo '<div class="comp-name">';
                    echo '<h1>' . $row1['name'] . '</h1>';
                    echo '<h3>HQ: ' . $row1['location'] . '</h3>';
                    echo '</div>';
                    echo '<div class="comp-about">';
                    echo '<h4>About Company</h4>';
                    echo '<h6>' . $row1['about'] . '</h6>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo "<tr><td colspan='4'>No company found for the provided email.</td></tr>";
                }
                ?>

                <h2>Internships</h2>

                <div class="intern-sec">


                    <?php



                    // Query to fetch job postings for the company
                    $sql3 = "SELECT * FROM company_post_job WHERE email = ?";
                    $stmt3 = $con->prepare($sql3);
                    $stmt3->bind_param('s', $emailget);
                    $stmt3->execute();
                    $result3 = $stmt3->get_result();

                    if ($result3 && mysqli_num_rows($result3) > 0) {
                        while ($row = mysqli_fetch_assoc($result3)) {
                            // Query to fetch company information again to get 'contact_email'
                            $sql5 = "SELECT * FROM company_info WHERE email = ?";
                            $stmt5 = $con->prepare($sql5);
                            $stmt5->bind_param('s', $emailget);
                            $stmt5->execute();
                            $result5 = $stmt5->get_result();
                            $row5 = mysqli_fetch_assoc($result5); // Fetch the row
                    
                            echo '<div class="intern-card">';
                            echo '<div class="int-name">';
                            echo '<h3>' . $row['title'] . '</h3><br>';
                            echo '<h4>' . $row['location'] . '</h4>';
                            echo '</div>';
                            echo '<div class="int-button">';
                            echo '<button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Details</button>';
                            echo '<a class="md-none" type="button" href="mailto:' . $row5['com_email'] . '">Apply</a>';
                            echo '</div>';
                            echo '</div>';




                            //////////////////////////////////////////////////////////
                    
                            echo '<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">';
                            echo '<div class="modal-dialog">';
                            echo '<div class="modal-content">';
                            echo '<div class="md-div1">';
                            echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                            echo '</div>';
                            echo '<div class="md-div2">';
                            echo '<div class="mt-title" id="staticBackdropLabel">' . $row['title'] . '</div>';
                            echo '<h6>' . $row5['name'] . '</h6>';
                            //echo '<div class="md-price">LKR 50,000 - LKR 80,000</div>';
                            echo '</div>';
                            echo '<div class="md-div3">' . $row['description'] . '</div>';
                            echo '<div class="md-lable-bar">';
                            echo '<div>' . $row['type'] . '</div>';
                            echo '<div>' . $row['location'] . '</div>';
                            echo '</div>';
                            echo '<div class="md-div4">';
                            echo '<button type="button" class="md-button" data-bs-dismiss="modal">Close</button>';
                            echo '<a class="md-button md-none" type="button" href="mailto:' . $row5['com_email'] . '">Apply</a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';

                        }
                    } else {
                        echo "<tr><td colspan='4'>No job postings found for the company.</td></tr>";
                    }
                    ?>





                    <!-- Modal -->


                </div>
            </div>
        </div>

    </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../lib/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>