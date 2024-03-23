<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Companies</title>
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
                    Approved Company
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
                            <th>Name</th>
                            <th>Sector</th>
                            <th>Location</th>
                            <th>Contact</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                            ?>
                        <tr>
                            <td>CMP#0001</td>
                            <td>CodeGen International</td>
                            <td>Technology Company</td>
                            <td>London, England.</td>
                            <td>
                                <a href="mailto:ravinduwijekoon123@gmail.com" class="none">
                                    <img src="../images/email icon.png" alt="" class="contact-icon">
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="../images/circle-xmark-regular.png" alt="" class="contact-icon">
                                </a>

                            </td>
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