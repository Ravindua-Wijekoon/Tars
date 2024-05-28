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

    // Retrieve student data from the temporary table
    $sql_select_temp = "SELECT * FROM company_info_temp WHERE email = ?";
    $stmt_select_temp = $con->prepare($sql_select_temp);
    $stmt_select_temp->bind_param('s', $uocindex);
    $stmt_select_temp->execute();
    $result_temp = $stmt_select_temp->get_result();

    // Check if student data is found in the temporary table
    if ($result_temp && $result_temp->num_rows > 0) {
        // Fetch student details
        $student_temp = $result_temp->fetch_assoc();

        // Insert student data into the original table
        $sql_insert = "INSERT INTO company_info (email, password, name, type, location, com_email, about, linkedin, twitter) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $con->prepare($sql_insert);
        $stmt_insert->bind_param('sssssssss', $student_temp['email'], $student_temp['password'], $student_temp['name'], $student_temp['type'], $student_temp['location'], 
        $student_temp['com_email'], $student_temp['about'], $student_temp['linkedin'], $student_temp['twitter']);
        $stmt_insert->execute();

        // Check if insertion is successful
        if ($stmt_insert->affected_rows > 0) {
            // Delete the row from the temporary table
            $sql_delete_temp = "DELETE FROM company_info_temp WHERE email = ?";
            $stmt_delete_temp = $con->prepare($sql_delete_temp);
            $stmt_delete_temp->bind_param('s', $uocindex);
            $stmt_delete_temp->execute();

            
        } else {
            echo "Error inserting student into original table.";
        }
    } else {
        echo "No student found in temporary table with the provided ID.";
    }
    $stmt_select_temp->close();
    $stmt_insert->close();
    $stmt_delete_temp->close();

    header('Location: ../../admin/admin_company_req_list.php');
    exit();

    mysqli_close($con);
} else {
    echo "No uocindex provided.";
}




?>