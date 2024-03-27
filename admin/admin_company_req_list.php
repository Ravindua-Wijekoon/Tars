<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Company</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../lib/style/admin_stu.css" />

    <!-- =========== Bootstrap ============ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- =============== Left ================ -->
    <div>
        <div class="left-box">
            <a href="./admin_dashboard.php">
                <img src="../images/logo01.png" alt="">
            </a>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main p-2">
            <div class="topbar">
                <div class="title">
                    Request Approvals
                </div>
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
                    <img src="../images/profile_photos/customer02.jpg" alt="" />
                </div>
            </div>

            <!-- <div class="second-bar">
                <div>All</div>
                <div>Pending</div>
                <div>Aprved</div>
            </div> -->

            <div>

                <table class="table">
                    <thead>
                        <tr class="head my-3">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Sector</th>
                            <th>Location</th>
                            <th>Contact</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $DATABASE_HOST = 'localhost';
                        $DATABASE_USER = 'root';
                        $DATABASE_PASS = '';
                        $DATABASE_NAME = 'tars_db';

                        $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                        if (mysqli_connect_errno()) {
                            exit('Failed to connect to MySQL: ' . mysqli_connect_error());
                        }

                        $sql = "SELECT * FROM company_info_temp";
                        $result = mysqli_query($con, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td> <a class='none' style='color: black;' href='admin_req_company_details.php?email=" . $row['email'] . "'>" . $row['email'] . "</a></td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['type'] . "</td>";
                                echo "<td>" . $row['location']. "</td>";
                                echo "<td><a href='mailto:" . $row['com_email'] . "' class='none'><img src='../images/email icon.png' alt='' class='contact-icon'></a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No students found.</td></tr>";
                        }

                        mysqli_close($con);
                        ?>

                    </tbody>
                </table>
            </div>



            <!-- =========== Scripts =========
            <script src="assets/js/main.js"></script> -->

        </div>
    </div>
</body>

</html>