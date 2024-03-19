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
            <form action="../lib/php/personal_details_02_BE.php" method="post">
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
                    <div class="plus" onclick="addEducation()">
                        <img src="../images/plus.svg" alt="" />
                    </div>

                    <!-- aaaaaaaaaaaaaaaaa -->
                    <div class="preview" id="educationList">

                    </div>

                    <script>
                        let education = [];

                        function addEducation() {
                            //alert('ds')

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
                            displayEducation();
                        }

                        function removeEducation(key) {
                            education = education.filter(item => item.key !== key);
                            displayEducation();
                        }

                        function displayEducation() {
                            let list = document.getElementById("educationList");
                            list.innerHTML = "";
                            education.forEach(item => {
                                let div = document.createElement("div");
                                div.innerHTML = `
                            <label> ${item.institute}</label>
                            <div onclick="removeEducation(${item.key})">
                                <img src="../images/circle-xmark-regular.png" alt="">
                            </div>
                            
                            `;
                                list.appendChild(div);
                            });
                        }
                    </script>



                    <div class="tag">Experience</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" placeholder="Experience" name="institution_exp" />
                    </div>
                    <div class="input-box5">
                        <input class="textbox2" type="date" placeholder="Start" name="start_exp" />
                    </div>
                    <div class="input-box5">
                        <input class="textbox2" type="date" placeholder="End" name="end_exp" />
                    </div>
                    <div class="plus">
                        <img src="../images/plus.svg" alt="" />
                    </div>

                    <!--<div class="preview">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                            <div>
                                <label>Test</label>
                                <div>
                                    <img src="../images/circle-xmark-regular.png" alt="">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>-->

                    <div class="tag">Skills</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" name="skills" placeholder="Skills" />
                    </div>
                    <div class="plus">
                        <img src="../images/plus.svg" alt="" />
                    </div>
                    <div style="width: 20%"></div>

                    <!--<div class="preview">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                            <div>
                                <label>Test</label>
                                <div>
                                    <img src="../images/circle-xmark-regular.png" alt="">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>-->

                    <div class="tag">Languages</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" name="language" placeholder="Language" />
                    </div>
                    <div class="plus">
                        <img src="../images/plus.svg" alt="" />
                    </div>

                    <div style="width: 20%"></div>

                    <!--<div class="preview">
                        <?php
                        for ($i = 0; $i < 3; $i++) {
                            ?>
                            <div>
                                <label>Test</label>
                                <div>
                                    <img src="../images/circle-xmark-regular.png" alt="">
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>-->

                    <div class="tag">GitHub Link</div>
                    <div class="input-box6">
                        <input class="textbox2" type="text" name="language" />
                    </div>

                    <div class="tag">LinkedIn Link</div>
                    <div class="input-box6">
                        <input class="textbox2" type="text" name="language" />
                    </div>

                    <div class="tag">Portfolio Link</div>
                    <div class="input-box6">
                        <input class="textbox2" type="text" name="language" />
                    </div>

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
</body>

</html>