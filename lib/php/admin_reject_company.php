<?php

if(isset($_GET['email'])) {
    // Get the uocindex from the URL
    $uocindex = $_GET['email'];

    // Database connection details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'tars_db';

    // Connect to the database
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if (mysqli_connect_errno()) {
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

   
    $sql_delete_temp = "DELETE FROM company_info_temp WHERE email = ?";
    $stmt_delete_temp = $con->prepare($sql_delete_temp);
    $stmt_delete_temp->bind_param('s', $uocindex);
    $stmt_delete_temp->execute();


    header('Location: ../../admin/admin_company_req_list.php');
    exit();

    mysqli_close($con);
} else {
    echo "No email provided.";
}


?>