<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Students</title>
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
                    Request
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
            <div class="main-div">
                <div class="sub-div">

                    <?php

if(isset($_GET['email'])) {
    
    $email = $_GET['email'];

    
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'tars_db';

    
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    
    $sql = "SELECT * FROM company_info_temp WHERE email = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($result && $result->num_rows > 0) {
        
        $student = $result->fetch_assoc();

        
        echo "<div class='qual'>";
        echo "<h5>Company Name</h5>";
        echo "<span>".$student['name']."</span>";
        echo "<h5>Company Type</h5>";
        echo "<span>". $student['type'] ."</span>";
        echo "<h5>Emai Address</h5>";
        echo "<span>". $student['com_email'] ."</span>";
        echo "<h5>Location</h5>";
        echo "<span>". $student['location'] ."</span>";
        echo "</div>";
    } else {
        echo "<p>No student found with the provided ID.</p>";
    }

    
    $stmt->close();
    mysqli_close($con);
} else {
    echo "<p>No uocindex provided.</p>";
}
?>

                    <div class="button-sec">
                        <div class="accept" onclick="acceptStudent('<?php echo $student['email']; ?>')">Accept</div>
                        <div class="reject">Reject</div>
                    </div>
                </div>

                <script>
                function acceptStudent(email) {

                    window.location.href = '../lib/php/admin_accept_company.php?email=' + email;
                }
                </script>

            </div>



            <!-- =========== Scripts =========
            <script src="assets/js/main.js"></script> -->

        </div>
    </div>
</body>

</html>