<?php
session_start();

$uocindex = $_SESSION['id'];
//echo $uocindex;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="../lib/style/student_dash.css">

</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <span class="icon">
                            <img src="../images/logo.png" alt="">
                        </span>
                        <span class="title">Tars</span>
                    </a>
                </li>

                <li>
                    <a href="../Student/student_dashboard.php">
                        <span class="nav-icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="../Student/student_search_job.php">
                        <span class="nav-icon">
                            <ion-icon name="search-outline"></ion-icon>
                        </span>
                        <span class="title">Search Job</span>
                    </a>
                </li>

                <li>
                    <a href="../Student/student_companies.php">
                        <span class="nav-icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Companies</span>
                    </a>
                </li>

                <li>
                    <a href="./student_application.php">
                        <span class="nav-icon">
                            <ion-icon name="document-text-outline"></ion-icon>
                        </span>
                        <span class="title">Application</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                        <span class="nav-icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li> -->

                <li>
                    <a href="./student_profile.php">
                        <span class="nav-icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="topic">
                    Profile
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="sec-1">
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
                        <img src="../images/profile_photos/customer02.jpg" alt="">
                    </div>

                </div>
            </div>
            <div class="marg">
                <div class="card-sec2">

                    <div class="section1">
                        <div class="profile-card">
                            <div class="profile-pic">
                                <img src="../images/profile_photos/customer02.jpg" alt="">
                            </div>
                            <div class="info">
                                <h1>Blake Lively</h1>
                                <h5>Software Developer</h5>
                                <h6>blakelively@gmail.com</h6>

                                <h5>Bio</h5>
                                <div class="bio">I am a Software Developer with critical thinking skills and also
                                    creative
                                    skills.</div>
                                <br><br>
                                <h5>Links</h5>
                                <span class="links"><b>Github |</b> <span>github.com/blakelively</span></span><br>
                                <span class="links"><b>LinkedIn |</b> <span>
                                        linkedin.com/in//blakelively</span></span><br>
                                <span class="links"><b>Portfolio |</b> <span>twitter.com/blakelively</span></span>

                            </div>

                        </div>
                    </div>

                    <form action="../lib/php/student_profile_edit_02.php" method="post">

                    <div class="section2">
                        <div class="button-sec">

                        </div>
                        
                            <div class="edit-sec">
                                <div class="div2">
                                    <label>Full Name</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB" name="fullname">
                                    </div>

                                </div>

                                <div class="div2">
                                    <label>Address</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB" name="address">
                                    </div>

                                </div>

                                <div class="div1">
                                    <label>City/Town</label>
                                    <div>
                                        <input class="edit-input" type="text" value="Get old data from DB" name="city">
                                    </div>
                                </div>
                                <div class="div1">
                                    <label>Date of Birth</label>
                                    <div>
                                        <input class="edit-input" type="date" value="Get old data from DB" name="dob">
                                    </div>

                                </div>
                                <div class="div1">
                                    <label>Email</label>
                                    <div>
                                        <input class="edit-input" type="text" value="Get old data from DB" name="email">
                                    </div>
                                </div>
                                <div class="div1">

                                </div>

                                <div class="div2">
                                    <label>Education</label><br>
                                    <div>
                                        <input class="edit-input" id='institute_edu' name="institution_edu" type="text" value="Get old data from DB to below">
                                    </div>
                                    <div class="short">
                                        <input class="edit-input" id='startYear_edu' name="start_edu" type="date">
                                    </div>
                                    <div class="short">
                                        <input class="edit-input" id='endYear_edu' name="end_edu" type="date">
                                    </div>
                                    <div class="plus" onclick="addEducation('education');">
                                        <img src="../images/plus.svg" alt="" />
                                    </div>
                                </div>
                                <div class="preview" id="educationList">
                                    
                                </div>
                                <div class="div2">
                                    <label>Experience</label><br>
                                    <div>
                                        <input class="edit-input" type="text" id='institution_exp' name="institution_exp" value="Get old data from DB to below">
                                    </div>
                                    <div class="short">
                                        <input class="edit-input" id='start_exp' name="start_exp" type="date" placeholder="Get">
                                    </div>
                                    <div class="short">
                                        <input class="edit-input" id='end_exp' name="end_exp" type="date" placeholder="Get">
                                    </div>
                                    <div class="plus" onclick="addEducation('experience');">
                                        <img src="../images/plus.svg" alt="" />
                                    </div>

                                </div>


                                <div class="preview" id="experienceList">
                                   
                                </div>


                                <div class="div2">
                                    <label>Skills</label><br>
                                    <div>
                                        <input class="edit-input" type="text" id="skillstudent" name="skills" placeholder="Get old data from DB">
                                    </div>

                                    <div class="plus" onclick="addEducation('skill');">
                                        <img src="../images/plus.svg" alt="" />
                                    </div>

                                </div>

                                <div class="preview" id="skillList">
                                    
                                </div>

                                <div class="div2">
                                    <label>Language</label><br>
                                    <div>
                                        <input class="edit-input" type="text" id="languagesstu" name="language" placeholder="Get old data from DB">
                                    </div>

                                    <div class="plus" onclick="addEducation('languagestu');">
                                        <img src="../images/plus.svg" alt="" />
                                    </div>

                                </div>

                                <div class="preview" id="langaugeList">
                                    
                                </div>

                                

                                <div class="div2">
                                    <label>GitHub</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB" name="github">
                                    </div>

                                </div>
                                <div class="div2">
                                    <label>LinkedIn</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB" name="link">
                                    </div>

                                </div>
                                <div class="div2">
                                    <label>Portfolio</label>
                                    <div class="input-full">
                                        <input class="edit-input" type="text" value="Get old data from DB" name="port">
                                    </div>

                                </div>

                                <input type="hidden" id="educationData" name="educationData" />
                                <input type="hidden" id="experienceData" name="experienceData" />
                                <input type="hidden" id="langauesData" name="langauesData" />
                                <input type="hidden" id="skillsData" name="skillsData" />
                        

                            </div>
                        
                        <button class="button-sec2" type="submit">
                            <div>Save</div>
                        </button>

                        </form>

                    </div>
                </div>


            </div>

        </div>
    </div>

    <script>
        let education = [];
        let experiences = [];
        let skills = [];
        let languages = [];

        function prepareEducationData(type) {

            if (type == 'education') {
                let educationData = JSON.stringify(education);
                let inputF = document.getElementById("educationData");
                inputF.setAttribute('value', educationData);
            } else if (type == 'experience') {
                let experienceData = JSON.stringify(experiences);
                let inputF = document.getElementById("experienceData");
                inputF.setAttribute('value', experienceData);
            } else if (type == 'skill') {
                let skillsData = JSON.stringify(skills);
                let inputF = document.getElementById("skillsData");
                inputF.setAttribute('value', skillsData);
            } else if (type == 'languagestu') {
                let langauesData = JSON.stringify(languages);
                let inputF = document.getElementById("langauesData");
                inputF.setAttribute('value', langauesData);
            }

        }

        function addEducation(type) {
            //alert('ds')
            if (type == 'education') {
                let institute = document.getElementById("institute_edu").value;
                let startYear = document.getElementById("startYear_edu").value;
                let endYear = document.getElementById("endYear_edu").value;
                //debugger
                let newItem = {
                    key: education.length + 1,
                    institute: institute,
                    startYear: startYear,
                    endYear: endYear
                };
                education.push(newItem);
            } else if (type == 'experience') {
                let experience = document.getElementById("institution_exp").value;
                let startYearEx = document.getElementById("start_exp").value;
                let endYearEx = document.getElementById("end_exp").value;
                //debugger
                let newItem = {
                    key: experiences.length + 1,
                    experience: experience,
                    startYearEx: startYearEx,
                    endYearEx: endYearEx
                };
                experiences.push(newItem);
            } else if (type == 'skill') {
                let skillstu = document.getElementById("skillstudent").value;
                //debugger
                let newItem = {
                    key: skills.length + 1,
                    skillstu: skillstu
                };
                skills.push(newItem);
            } else if (type == 'languagestu') {
                let languagestudent = document.getElementById("languagesstu").value;
                //debugger
                let newItem = {
                    key: languages.length + 1,
                    languagestudent: languagestudent
                };
                languages.push(newItem);
            }

            displayEducation(type);
            prepareEducationData(type);
        }

        function removeEducation(key, type) {
            if (type == 'education') {
                education = education.filter(item => item.key !== key);
            } else if (type == 'experience') {
                experiences = experiences.filter(item => item.key !== key);
            } else if (type == 'skill') {
                skills = skills.filter(item => item.key !== key);
            } else if (type == 'languagestu') {
                languages = languages.filter(item => item.key !== key);
            }

            displayEducation(type);
            prepareEducationData(type);
        }

        function displayEducation(type) {
            let list;
            if (type == 'education') {
                list = document.getElementById("educationList");
                list.innerHTML = "";
                education.forEach(item => {
                    let div = document.createElement("div");
                    div.innerHTML = `
                <label> ${item.institute}</label>
                <div onclick="removeEducation(${item.key},'education')">
                    <img src="../images/circle-xmark-regular.png" alt="">
                </div>
                
                `;
                    list.appendChild(div);
                });
            } else if (type == 'experience') {
                list = document.getElementById("experienceList");
                list.innerHTML = "";
                experiences.forEach(item => {
                    let div = document.createElement("div");
                    div.innerHTML = `
                <label> ${item.experience}</label>
                <div onclick="removeEducation(${item.key},'experience')">
                    <img src="../images/circle-xmark-regular.png" alt="">
                </div>
                
                `;
                    list.appendChild(div);
                });
            } else if (type == 'skill') {
                list = document.getElementById("skillList");
                list.innerHTML = "";
                skills.forEach(item => {
                    let div = document.createElement("div");
                    div.innerHTML = `
                <label> ${item.skillstu}</label>
                <div onclick="removeEducation(${item.key},'skill')">
                    <img src="../images/circle-xmark-regular.png" alt="">
                </div>
                
                `;
                    list.appendChild(div);
                });
            } else if (type == 'languagestu') {
                list = document.getElementById("langaugeList");
                list.innerHTML = "";
                languages.forEach(item => {
                    let div = document.createElement("div");
                    div.innerHTML = `
                <label> ${item.languagestudent}</label>
                <div onclick="removeEducation(${item.key},'languagestu')">
                    <img src="../images/circle-xmark-regular.png" alt="">
                </div>
                
                `;
                    list.appendChild(div);
                });
            }





        }
    </script>

    <!-- =========== Scripts =========  -->
    <script src="../lib/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
</body>

</html>