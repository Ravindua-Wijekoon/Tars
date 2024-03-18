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

if (empty($_POST['username']) || empty($_POST['password'])) {
    echo '<script>alert("Please fill both the username and password fields!");</script>';
    exit();
}


if ($stmt = $con->prepare('SELECT id, password FROM student WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome to User dashboard ' . $_SESSION['name'] . '!';
            exit();
        } else {
            echo 'Incorrect username and/or password!';
            exit();
        }
    }

    $stmt->close();
}


if ($stmt = $con->prepare('SELECT id, password FROM company WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome to Company dashboard ' . $_SESSION['name'] . '!';
            exit();
        } else {
            echo 'Incorrect username and/or password!';
            exit();
        }
    }

    $stmt->close();
}


if ($stmt = $con->prepare('SELECT id, password FROM admintars WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome to Admin Dashboard ' . $_SESSION['name'] . '!';
            exit();
        } else {
            echo 'Incorrect username and/or password!';
            exit();
        }
    } else {
        echo 'Incorrect username and/or password!';
        exit();
    }

    $stmt->close();
}


echo 'Incorrect username and/or password!';
?>
