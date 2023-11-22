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
            <img src="../images/logo01.png" alt="">
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main p-2">
            <div class="topbar">
                <div class="title">
                    Student
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

            <div class="second-bar">
                <div>All</div>
                <div>Pending</div>
                <div>Aprved</div>
            </div>

            <div>

                <table class="table">
                    <thead>
                        <tr class="head my-3">
                            <th>ID</th>
                            <th>Student</th>
                            <th>Department</th>
                            <th>Company</th>
                            <th>Contact</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            ?>
                            <tr>
                                <td>2021T01250</td>
                                <td>Blake Lively</td>
                                <td>ICT</td>
                                <td>N/A</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <?php
                        }
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