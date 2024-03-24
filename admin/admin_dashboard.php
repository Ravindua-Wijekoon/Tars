
<?php


$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tars_db';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$sql = "SELECT COUNT(*) AS total_students FROM student_info_temp";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $total_students = $row['total_students'];
} else {
    $total_students = 0;
}

mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../lib/style/admin_dash.css" />
</head>

<body>
    <!-- =============== Left ================ -->
    <div class="container">
        <div class="left-box">
            <img src="../images/logo01.png" alt="">
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
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

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <a href="../admin/admin_approved_students.php" class="none">
                    <div class="card">
                        <div>

                            <div class="cardName">Approved <br>Students</div>
                            <div class="numbers">05</div>

                        </div>
                        <div>
                            <img src="../images/icon _user_.png" alt="">
                        </div>
                    </div>
                </a>

                <a href="../admin/admin_approved_companies.php" class="none">
                    <div class="card">
                        <div>
                            <div class="cardName">Approved <br>Companies</div>
                            <div class="numbers">05</div>
                        </div>

                        <div>
                            <img src="../images/icon _tick circle_.png" alt="">
                        </div>
                    </div>
                </a>

                <a href="../admin/admin_student_req_list.php" class="none">
                    <div class="card">
                        <div>
                            <div class="cardName">Request Student<br>Approvals</div>
                            <div class="numbers"><?php echo $total_students; ?></div>
                        </div>

                        <div>
                            <img src="../images/briefcase.png" alt="">
                        </div>
                    </div>
                </a>

                <a href="../admin/admin_company_req_list.php" class="none">
                    <div class="card">
                        <div>
                            <div class="cardName">Request Company<br>Approvals</div>
                            <div class="numbers">08</div>
                        </div>

                        <div>
                            <img src="../images/briefcase.png" alt="">
                        </div>
                    </div>
                </a>

                <div class="bt-height"></div>
            </div>

            <!-- =========== Scripts =========
            <script src="assets/js/main.js"></script> -->

        </div>
    </div>
</body>

</html>