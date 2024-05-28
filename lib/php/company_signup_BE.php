<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tars_db';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
    exit('Please fill all the fields!');
}

if ($_POST['password'] !== $_POST['confirm_password']) {
    exit('Passwords do not match!');
}

if ($stmt = $con->prepare('SELECT id FROM company_info_temp WHERE email = ?')) {
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo 'Email exists, please choose another!';
    } else {
        if ($stmt = $con->prepare('INSERT INTO company_info_temp (email, password) VALUES (?, ?)')) {
            $stmt->bind_param('ss', $_POST['email'], $_POST['password']);
            $stmt->execute();
            echo 'You have successfully registered, you can now login!';

            $_SESSION['email'] = $_POST['email'];

            header("Location: ../../company/company_details.php");
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
