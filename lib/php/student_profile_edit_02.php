<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tars_db';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$uocindex = $_SESSION['id'];

//echo $uocindex;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$fullname = $_POST['fullname'];
$address = $_POST['address'];
$city = $_POST['city'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$github = $_POST['github'];
$link = $_POST['link'];
$port = $_POST['port'];

if ($stmt = $con->prepare('UPDATE student_info SET fullname=?, dob=?, address=?, email=?, city=?, github=?, linkedin=?, portfolio=? WHERE uocindex=?')) {
    $stmt->bind_param('sssssssss', $fullname, $dob, $address, $email, $city, $github, $link, $port, $uocindex);
    $stmt->execute();
    echo 'Successfully updated';
} else {
    echo 'Could not prepare statement!';
}

//step 1  :insert initial data of students in student main table

//step 2 :get latest student key

//step 3:fetch education array data

//step 4:check the lengt of of education array in if condition, education array eka for loop ekakata aragena
// education[i]['institute']
// insert query eka gahanna ona for loop eka atule




    //var_dump($_POST);
    //echo $_POST['educationData'];

    //exit(0)
    //Education
    //echo $_POST['educationData'];
    $educationData = $_POST['educationData'];
    $educationArray = json_decode($educationData, true);
    $stmts = $con->prepare("INSERT INTO education_info (institution, sdate, edate, std_id) VALUES (?, ?, ?, ?)");

    $stmts->bind_param("ssss", $institute, $startYear, $endYear, $uocindex);
    echo $uocindex;
    foreach ($educationArray as $edu) {

        $institute = $edu['institute'];
        $startYear = $edu['startYear'];
        $endYear = $edu['endYear'];

        $stmts->execute();

    }
    $stmts->close();
    echo "Education records inserted successfully";

    //Experience

    $experienceData = $_POST['experienceData'];
    $experienceArray = json_decode($experienceData, true);
    $stmtp = $con->prepare("INSERT INTO experience_info (experience, sdate, edate, std_id) VALUES (?, ?, ?, ?)");

    $stmtp->bind_param("ssss", $experience, $startYearex, $endYearex, $uocindex);
    echo $uocindex;
    foreach ($experienceArray as $exp) {

        $experience = $exp['experience'];
        $startYearex = $exp['startYearEx'];
        $endYearex = $exp['endYearEx'];

        $stmtp->execute();

    }
    $stmtp->close();
    echo "Education records inserted successfully";

    //skills

    $skillsData = $_POST['skillsData'];
    $skillsArray = json_decode($skillsData, true);
    $stmtq = $con->prepare("INSERT INTO skill_info (skill, std_id) VALUES (?, ?)");

    $stmtq->bind_param("ss", $skillstu, $uocindex);
    echo $uocindex;
    foreach ($skillsArray as $exd) {

        $skillstu = $exd['skillstu'];

        $stmtq->execute();

    }
    $stmtq->close();
    echo "Education records inserted successfully";

    //languages

    $langauesData = $_POST['langauesData'];
    $languageArray = json_decode($langauesData, true);
    $stmtm = $con->prepare("INSERT INTO language_info (language, std_id) VALUES (?, ?)");

    $stmtm->bind_param("ss", $languagestudent, $uocindex);
    echo $uocindex;
    foreach ($languageArray as $exo) {

        $languagestudent = $exo['languagestudent'];

        $stmtm->execute();

    }
    $stmtm->close();
    echo "Education records inserted successfully";


    header("location: ../../student/student_profile.php");





} else {

    echo 'form submission failure!';
}
















$con->close();
?>