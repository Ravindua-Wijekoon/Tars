<?php

if(isset($_GET['uocindex'])) {
    // Get the uocindex from the URL
    $uocindex = $_GET['uocindex'];

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

   
    $sql_delete_temp = "DELETE FROM student_info_temp WHERE uocindex = ?";
    $stmt_delete_temp = $con->prepare($sql_delete_temp);
    $stmt_delete_temp->bind_param('s', $uocindex);
    $stmt_delete_temp->execute();

    $sql_delete_temp_edu = "DELETE FROM education_info_temp WHERE std_id = ?";
    $stmt_delete_temp_edu = $con->prepare($sql_delete_temp_edu);
    $stmt_delete_temp_edu->bind_param('s', $uocindex);
    $stmt_delete_temp_edu->execute();

    $sql_delete_temp_lan = "DELETE FROM language_info_temp WHERE std_id = ?";
    $stmt_delete_temp_lan = $con->prepare($sql_delete_temp_lan);
    $stmt_delete_temp_lan->bind_param('s', $uocindex);
    $stmt_delete_temp_lan->execute();

    $sql_delete_temp_skill = "DELETE FROM skill_info_temp WHERE std_id = ?";
    $stmt_delete_temp_skill = $con->prepare($sql_delete_temp_skill);
    $stmt_delete_temp_skill->bind_param('s', $uocindex);
    $stmt_delete_temp_skill->execute();

    $sql_delete_temp_exp = "DELETE FROM experience_info_temp WHERE std_id = ?";
    $stmt_delete_temp_exp = $con->prepare($sql_delete_temp_exp);
    $stmt_delete_temp_exp->bind_param('s', $uocindex);
    $stmt_delete_temp_exp->execute();


    header('Location: ../../admin/admin_company_req_list.php');
    exit();

    mysqli_close($con);
} else {
    echo "No email provided.";
}


?>