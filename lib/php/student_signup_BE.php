<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tars_db';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
    exit('Please fill all the fields!');
}

if ($_POST['password'] !== $_POST['confirm_password']) {
    exit('Passwords do not match!');
}

if ($stmt = $con->prepare('SELECT id FROM student WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo 'Username exists, please choose another!';
    } else {
        if ($stmt = $con->prepare('INSERT INTO student (username, password) VALUES (?, ?)')) {
            $stmt->bind_param('ss', $_POST['username'], $_POST['password']);
            $stmt->execute();
            echo 'You have successfully registered, you can now login!';

            header("Location: ../../student_signup/personal_details_01.php");
            exit;

        } else {
            echo 'Could not prepare statement!';
        }
    }

    $stmt->close();
} else {
    echo 'Could not prepare statement!';
}

$con->close();
?>
