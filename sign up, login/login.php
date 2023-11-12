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

    <title>Login</title>
</head>

<body>
    <div class="left-box">
        <div class="text-box">
            <div class="title">New here?</div>
            <div class="text-01">
                Please log in with your <br />
                personal details
            </div>
            <a type="button" href="user_type.html" class="btn-back mt-4">Back</a>
        </div>
    </div>
    <div class="right-box">
        <div class="main-div">
            <div class="text-02"><b>Login to your account</b></div>
            <br />
            <div class="icon-set mt-2 mb-3">
                <img class="me-4" src="../images/google-icon.png" alt="">
                <img class="" src="../images/linkedin-icon.png" alt="">
            </div>
            <div class="text-03 mb-4">or use your email to Login</div>
            <form action="">
                <div class="textboxsec">

                    <div class="input-box1">
                        <img class="profimage" src="../images/profile.png" alt="" />
                        <input class="textbox" type="text" placeholder="Username" />
                    </div>
                    <div class="input-box1">
                        <img class="profimage" src="../images/pass.png" alt="" />
                        <input class="textbox" type="password" placeholder="Password" />
                    </div>

                </div>
                <div class="btn-sec">
                    <div class="btn-box">
                        <input type="submit" class="normalButtons01" value="SignUp" />
                    </div>
                </div>
                <div class="text-03 mb-2 mt-4">
                    <a href="#" class="none">
                        <b>Forgot your password?</b>
                    </a>
                </div>
                <div class="text-03 mb-4 ">
                    Already have an account? 
                    <a href="user_type.html" class="none">
                        <b>Login</b>
                    </a>
                </div>
            </form>
        </div>
</body>

</html>