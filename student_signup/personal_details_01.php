<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../lib/style/sign_up_02.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

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
        <a type="button" href="student_signup.php" class="btn-back mt-4">Back</a>
      </div>
    </div>
    <div class="right-box2">
      <div style="width: 100%">
        <div class="text-02"><b>Personal Details</b></div>
        <br />
        <form action="">
          <div class="textboxsec2">
            <div class="tag">Full name</div>
            <div class="input-box2">
              <input class="textbox2" type="text" />
            </div>
            <div class="tag">Name with initials</div>
            <div class="input-box2">
              <input class="textbox2" type="text" />
            </div>
            <div class="tag">Date of birth</div>
            <div class="input-box3" style="margin-right: 40%">
              <input class="textbox2" type="date" />
            </div>
            <div class="tag">Address</div>
            <div class="input-box2">
              <input class="textbox2" type="text" />
            </div>
            <div class="tag">City/Town</div>
            <div class="input-box3">
              <input class="textbox2" type="text" />
            </div>
            <div class="tag2">ZIP Code</div>
            <div class="input-box3">
              <input class="textbox2" type="text" />
            </div>
          </div>
          <div class="btn-sec">
            <div class="btn-box">
              <input type="submit" class="normalButtons01" value="Next" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
