<!doctype html>
<html lang="en">

<head>
    <title>IQAC - Registration Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        @import url("https://fonts.googleapis.com/css?family=Lato|Montserrat");
        * {
        margin: 0;
        padding: 0;
        }

        body {
        font-family: "Lato", "Montserrat", sans-serif;
        }

        .form {
        -webkit-box-shadow: 5px 5px 10px gray;
                box-shadow: 5px 5px 10px gray;
        border-radius: 10px;
        overflow-wrap: break-word;
        overflow: auto;
        word-wrap: break-word;
        -webkit-hyphens: auto;
            -ms-hyphens: auto;
                hyphens: auto;
        }

        .form .col-md-4 {
        background-image: -webkit-gradient(linear, left top, left bottom, from(#2e3192), to(#1bffff));
        background-image: linear-gradient(#2e3192, #1bffff);
        }

        @media (max-width: 768px) {
        .form .col-md-4 p {
            font-size: 30px;
        }
        label {
            font-size: 15px;
        }
        }

    </style>
</head>

<body style="background-color: rgb(185, 185, 185);">

    <!-- <p class="display-4 text-center">Application CUM Registration Form</p> -->

    <div class="form row m-4 bg-white">

        <div class="col-md-4">
            <p class="display-4 text-center text-white" style="margin-top: 100px;">Application CUM Registration Form</p>

        </div>
        <div class="col-md-8 p-4">
            <?php if(isset($_GET['error'])){
                if($_GET['error'] == 1){ ?>
                    <div class="alert alert-danger text-center">
                        <h4>Some error ocurred</h4>
                    </div>
                <?php }else { ?>
                    <div class="alert alert-success text-center">
                        <h4>Registration Successful</h4>
                    </div>
                <?php }
                } ?>
            <form action="application-submit.php" method="post">
                <fieldset disabled>
                    <div class="form-group">
                        <label for="programme-name">Name of the Programme</label>
                        <input type="text" class="form-control disabled" name="programme-name" id="programme-name"
                            value="Contemporary Business Environment">
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="full-name">Name of Applicant</label>
                    <input type="text" class="form-control" name="full-name" id="full-name" required>
                </div>
                <div class="form-group">
                    <label for="univ-name">Organization/Institute/University Name</label>
                    <input type="text" class="form-control" name="univ-name" id="univ-name" required>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" name="designation" id="designation" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mob-no">Mobile no.</label>
                            <input type="text" class="form-control" name="mob-no" id="mob-no" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="alert alert-success" role="alert">
                    <span class="font-weight-bold"> <u>Registration fees:</u> </span><br>
                    <i class="fas fa-rupee-sign p-1"></i>
                    3,500, if paid upto 31 <sup>st</sup> October, 2018 <br>
                    <i class="fas fa-rupee-sign p-1"></i>
                    4,000, if paid between 1 <sup>st</sup> November, 2018 - 15 <sup>th</sup> November, 2018
                </div>

                <div class="alert alert-warning" role="alert">
                    <p class="font-weight-bold"><u> Note:</u> </p>
                    <p>The form is accessible online on PGDAV College and University of Delhi website (under events
                        section) with the following link.</p>

                </div>

                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </form>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
</body>

</html>