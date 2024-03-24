<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../lib/style/sign_up_02.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Student Details</title>
</head>

<body>
    <div class="left-box">
        <div class="text-box">
            <div class="title">
                Tell us <br />
                about you
            </div>
            <div class="text-01">
                Fill in your details so we can <br />
                get to know you!
            </div>
            <a type="button" href="#home" class="btn-back mt-4">Back</a>
        </div>
    </div>
    <div class="right-box3">
        <div style="width: 100%">
            <div class="text-02"><b>Qualification Details</b></div>
            <br />
            <!-- <form action="../lib/php/personal_details_02_BE.php" method="post"> -->
                <div class="textboxsec2">
                    <div class="tag">Education</div>
                    <div class="input-box4">
                        <input class="textbox2" id='institute_edu' type="text" placeholder="Institution"
                            name="institution_edu" />
                    </div>
                    <div></div>
                    <div class="input-box5">
                        <input class="textbox2" id='startYear_edu' type="date" placeholder="Start" name="start_edu" />
                    </div>
                    <div class="input-box5">
                        <input class="textbox2" id='endYear_edu' type="date" placeholder="End" name="end_edu" />
                    </div>
                    <div class="plus" onclick="addEducation('education');">
                        <img src="../images/plus.svg" alt="" />
                    </div>
                    <div class="preview" id="educationList"> </div>



                    <div class="tag">Experience</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" id='institution_exp' placeholder="Experience" name="institution_exp" />
                    </div>
                    <div class="input-box5">
                        <input class="textbox2" type="date" id='start_exp' placeholder="Start" name="start_exp" />
                    </div>
                    <div class="input-box5">
                        <input class="textbox2" type="date" id='end_exp' placeholder="End" name="end_exp" />
                    </div>
                    <div class="plus" onclick="addEducation('experience');">
                        <img src="../images/plus.svg" alt="" />
                    </div>

                    <div class="preview" id="experienceList"> </div>


                    
                    <div class="tag">Skills</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" id="skillstudent" name="skills" placeholder="Skills" />
                    </div>
                    <div class="plus" onclick="addEducation('skill');">
                        <img src="../images/plus.svg" alt="" />
                    </div>
                    <div style="width: 20%"></div>
                    <div class="preview" id="skillList"> </div>

                    <div class="tag">Languages</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" id="languagesstu" name="language" placeholder="Language" />
                    </div>
                    <div class="plus" onclick="addEducation('languagestu');">
                        <img src="../images/plus.svg" alt="" />
                    </div>

                    <div style="width: 20%"></div>
                    <div class="preview" id="langaugeList"> </div>
                </div>
                    <form action="../lib/php/personal_details_02_BE.php" method="post">
                        <input type="hidden" id="educationData" name="educationData" />
                        <input type="hidden" id="experienceData" name="experienceData" />
                        <input type="hidden" id="langauesData" name="langauesData" />
                        <input type="hidden" id="skillsData" name="skillsData" />
                        <div class="tag">GitHub Link</div>
                        <div class="input-box6">
                            <input class="textbox2" type="text" name="github" />
                        </div>

                        <div class="tag">LinkedIn Link</div>
                        <div class="input-box6">
                            <input class="textbox2" type="text" name="linkedin" />
                        </div>

                        <div class="tag">Portfolio Link</div>
                        <div class="input-box6">
                            <input class="textbox2" type="text" name="portfolio" />
                        </div>

                
                        <div class="btn-sec">
                            <div class="btn-box">
                                <input type="submit" class="normalButtons01" value="Done" />
                            </div>
                        </div>
                        <div style="height:20px;"></div>
                    </form>
        </div>
    </div>
    <script>
        let education = [];
        let experiences = [];
        let skills = [];
        let languages = [];

        function prepareEducationData(type) {

            if(type=='education'){
                let educationData = JSON.stringify(education);
                let inputF = document.getElementById("educationData");
                inputF.setAttribute('value', educationData);
            }else if(type=='experience'){
                let experienceData = JSON.stringify(experiences);
                let inputF = document.getElementById("experienceData");
                inputF.setAttribute('value', experienceData);
            }else if(type=='skill'){
                let skillsData = JSON.stringify(skills);
                let inputF = document.getElementById("skillsData");
                inputF.setAttribute('value', skillsData);
            }else if(type=='languagestu'){
                let langauesData = JSON.stringify(languages);
                let inputF = document.getElementById("langauesData");
                inputF.setAttribute('value', langauesData);
            }
                
            }

        function addEducation(type) {
            //alert('ds')
            if(type=='education'){
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
            }else if(type=='experience')
            {
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
            }else if(type=='skill')
            {
                let skillstu = document.getElementById("skillstudent").value;
                //debugger
                let newItem = {
                    key: skills.length + 1,
                    skillstu: skillstu
                };
                skills.push(newItem);
            }else if(type=='languagestu')
            {
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

        function removeEducation(key,type) {
            if(type=='education'){
                education = education.filter(item => item.key !== key);
            }else if(type=='experience'){
                experiences = experiences.filter(item => item.key !== key);
            }else if(type=='skill'){
                skills = skills.filter(item => item.key !== key);
            }else if(type=='languagestu'){
                languages = languages.filter(item => item.key !== key);
            }
            
            displayEducation(type);
            prepareEducationData(type);
        }

        function displayEducation(type) {
            let list ;
            if(type=='education'){
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
            }else if(type=='experience'){
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
            }else if(type=='skill'){
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
            }else if(type=='languagestu'){
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
</body>

</html>