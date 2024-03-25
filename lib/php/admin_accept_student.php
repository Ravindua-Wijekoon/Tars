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

    // Retrieve student data from the temporary table
    $sql_select_temp = "SELECT * FROM student_info_temp WHERE uocindex = ?";
    $stmt_select_temp = $con->prepare($sql_select_temp);
    $stmt_select_temp->bind_param('s', $uocindex);
    $stmt_select_temp->execute();
    $result_temp = $stmt_select_temp->get_result();

    // Check if student data is found in the temporary table
    if ($result_temp && $result_temp->num_rows > 0) {
        // Fetch student details
        $student_temp = $result_temp->fetch_assoc();

        // Insert student data into the original table
        $sql_insert = "INSERT INTO student_info (uocindex, email, password, fullname, nameinitials, bio, dob, address, city, zipcode, github, linkedin, portfolio) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = $con->prepare($sql_insert);
        $stmt_insert->bind_param('sssssssssssss', $student_temp['uocindex'], $student_temp['email'], $student_temp['password'], $student_temp['fullname'], $student_temp['nameinitials'], 
        $student_temp['bio'], $student_temp['dob'], $student_temp['address'], $student_temp['city'], $student_temp['zipcode'], $student_temp['github'], $student_temp['linkedin'], $student_temp['portfolio']);
        $stmt_insert->execute();

        // Check if insertion is successful
        if ($stmt_insert->affected_rows > 0) {
            // Delete the row from the temporary table
            $sql_delete_temp = "DELETE FROM student_info_temp WHERE uocindex = ?";
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




    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $sql_select_temp_edu = "SELECT * FROM education_info_temp WHERE std_id = ?";
    $stmt_select_temp_edu = $con->prepare($sql_select_temp_edu);
    $stmt_select_temp_edu->bind_param('s', $uocindex);
    $stmt_select_temp_edu->execute();
    $result_temp_edu = $stmt_select_temp_edu->get_result();
    
    // Check if student data is found in the temporary table
    if ($result_temp_edu && $result_temp_edu->num_rows > 0) {
        // Use a loop to insert each row into the original table
        while ($student_temp_edu = $result_temp_edu->fetch_assoc()) {
            // Insert student data into the original table
            $sql_insert_edu = "INSERT INTO education_info (institution, sdate, edate, std_id) VALUES (?, ?, ?, ?)";
            $stmt_insert_edu = $con->prepare($sql_insert_edu);
            $stmt_insert_edu->bind_param('ssss', $student_temp_edu['institution'], $student_temp_edu['sdate'], $student_temp_edu['edate'], $student_temp_edu['std_id']);
            $stmt_insert_edu->execute();
    
            // Check if insertion is successful
            if ($stmt_insert_edu->affected_rows > 0) {
                // Delete the row from the temporary table
                $sql_delete_temp_edu = "DELETE FROM education_info_temp WHERE std_id = ?";
                $stmt_delete_temp_edu = $con->prepare($sql_delete_temp_edu);
                $stmt_delete_temp_edu->bind_param('s', $uocindex);
                $stmt_delete_temp_edu->execute();
    
                if ($stmt_delete_temp_edu->affected_rows > 0) {
                    // If deletion is successful, continue to the next iteration
                    continue;
                } else {
                    echo "Error deleting student from temporary table.";
                    break; // Exit the loop if deletion fails
                }
            } else {
                echo "Error inserting student into original table.";
                break; // Exit the loop if insertion fails
            }
        }
    
        
    } else {
        echo "No student found in temporary table with the provided ID.";
    }
    $stmt_select_temp_edu->close();
    $stmt_insert_edu->close();
    $stmt_delete_temp_edu->close();


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$sql_select_temp_exp = "SELECT * FROM experience_info_temp WHERE std_id = ?";
$stmt_select_temp_exp = $con->prepare($sql_select_temp_exp);
$stmt_select_temp_exp->bind_param('s', $uocindex);
$stmt_select_temp_exp->execute();
$result_temp_exp = $stmt_select_temp_exp->get_result();

// Check if student data is found in the temporary table
if ($result_temp_exp && $result_temp_exp->num_rows > 0) {
    // Use a loop to insert each row into the original table
    while ($student_temp_exp = $result_temp_exp->fetch_assoc()) {
        // Insert student data into the original table
        $sql_insert_exp = "INSERT INTO experience_info (experience, sdate, edate, std_id) VALUES (?, ?, ?, ?)";
        $stmt_insert_exp = $con->prepare($sql_insert_exp);
        $stmt_insert_exp->bind_param('ssss', $student_temp_exp['experience'], $student_temp_exp['sdate'], $student_temp_exp['edate'], $student_temp_exp['std_id']);
        $stmt_insert_exp->execute();

        // Check if insertion is successfxp
        if ($stmt_insert_exp->affected_rows > 0) {
            // Delete the row from the temporary table
            $sql_delete_temp_exp = "DELETE FROM experience_info_temp WHERE std_id = ?";
            $stmt_delete_temp_exp = $con->prepare($sql_delete_temp_exp);
            $stmt_delete_temp_exp->bind_param('s', $uocindex);
            $stmt_delete_temp_exp->execute();

            if ($stmt_delete_temp_exp->affected_rows > 0) {
                // If deletion is successful, continue to the next iteration
                continue;
            } else {
                echo "Error deleting student from temporary table.";
                break; // Exit the loop if deletion fails
            }
        } else {
            echo "Error inserting student into original table.";
            break; // Exit the loop if insertion fails
        }
    }

    // If all insertions are successful, redirect to some page or do further processing
    header('Location: ../../admin/admin_student_req_list.php');
    exit();
} else {
    echo "No student found in temporary table with the provided ID.";
}
$stmt_select_temp_exp->close();
$stmt_insert_exp->close();
$stmt_delete_temp_exp->close();





    mysqli_close($con);
} else {
    echo "No uocindex provided.";
}




?>