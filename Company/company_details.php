<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../lib/style/company_details.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Company Details</title>
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
    <div class="right-box2">
        <div style="width: 100%">
            <div class="text-02"><b>Company Details</b></div>
            <br />
            <form method="post">
                <div class="textboxsec">
                    <div class="tag">Company Name</div>
                    <div class="input-box">
                        <input class="textbox" type="text" placeholder="Company Name" required />
                    </div>

                    <div class="tag">Company Type</div>
                    <div class="input-box">
                        <input class="textbox" type="text" placeholder="IT company / software company" required />
                    </div>

                    <div class="tag">Location</div>
                    <div class="input-box">
                        <input class="textbox" type="text" placeholder="Company Location" required />
                    </div>

                    <div class="tag">Email Address</div>
                    <div class="input-box">
                        <input class="textbox" type="text" placeholder="Company Email" required />
                    </div>

                    <div class="tag">About</div>
                    <div class="input-box">
                        <textarea class="textbox2" rows="8" required>
                        </textarea>
                    </div>

                    <div class="tag">LinkedIn Link</div>
                    <div class="input-box">
                        <input class="textbox" type="text" placeholder="Link" required />
                    </div>

                    <div class="tag">Twitter Link</div>
                    <div class="input-box">
                        <input class="textbox" type="text" placeholder="Link" required />
                    </div>

                    <div class="btn-sec">
                        <div class="btn-box">
                            <input type="submit" class="normalButtons01" value="Create" />
                        </div>
                    </div>

                </div>



            </form>
        </div>
    </div>
</body>

</html>