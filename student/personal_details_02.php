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
            <a type="button" href="personal_details_01.php" class="btn-back mt-4">Back</a>
        </div>
    </div>
    <div class="right-box3">
        <div style="width: 100%">
            <div class="text-02"><b>Qualification Details</b></div>
            <br />
            <form action="" method="post">
                <div class="textboxsec2">
                <div class="tag">Education</div>
                <div class="input-box4">
                    <input class="textbox2" type="text" placeholder="Institution" name="institution_edu" id="institute_edu" />
                </div>
                <div></div>
                <div class="input-box5">
                    <input class="textbox2" type="text" placeholder="Start" name="start_edu" id="startYear_edu" />
                </div>
                <div class="input-box5">
                    <input class="textbox2" type="text" placeholder="End" name="end_edu" id="endYear_edu" />
                </div>
                <button class="plus" onclick="addEducation()">
                    <img src="../images/plus.svg" alt="" />
                </button>

                <div id="educationList"></div>

                <script>
                    let education = [];

                    function addEducation() {
                        let institute = document.getElementById("institute_edu").value;
                        let startYear = document.getElementById("startYear_edu").value;
                        let endYear = document.getElementById("endYear_edu").value;
                        let newItem = { key: education.length + 1, institute: institute, startYear: startYear, endYear: endYear };
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
                                <div>
                                    <p>Institute: ${item.institute}</p>
                                    <p>Start Year: ${item.startYear}</p>
                                    <p>End Year: ${item.endYear}</p>
                                    <button onclick="removeEducation(${item.key})">Remove</button>
                                </div>
                            `;
                            list.appendChild(div);
                        });
                    }
                </script>


                  

                    <div class="tag">Experience</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" placeholder="Institution" name="institution_exp" />
                    </div>
                    <div class="input-box5">
                        <input class="textbox2" type="text" placeholder="Start" name="start_exp" />
                    </div>
                    <div class="input-box5">
                        <input class="textbox2" type="text" placeholder="End" name="end_exp" />
                    </div>
                    <button class="plus">
                        <img src="../images/plus.svg" alt="" />
                    </button>

                    <div class="preview">
                        <!-- <div>Test
                            <a href="#">
                                <img src="../images/circle-xmark-regular.png" alt="">
                            </a>
                        </div> -->
                    </div>

                    <div class="tag">Skills</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" name="skills" />
                    </div>
                    <button class="plus">
                        <img src="../images/plus.svg" alt="" />
                    </button>
                    <div style="width: 20%"></div>

                    <div class="preview">
                        <!-- <div>Test
                            <a href="#">
                                <img src="../images/circle-xmark-regular.png" alt="">
                            </a>
                        </div> -->

                    </div>

                    <div class="tag">Languages</div>
                    <div class="input-box4">
                        <input class="textbox2" type="text" name="language" />
                    </div>
                    <button class="plus">
                        <img src="../images/plus.svg" alt="" />
                    </button>

                    <div style="width: 20%"></div>

                    <div class="preview">
                        <!-- <div>Test
                            <a href="#">
                                <img src="../images/circle-xmark-regular.png" alt="">
                            </a>
                        </div> -->

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