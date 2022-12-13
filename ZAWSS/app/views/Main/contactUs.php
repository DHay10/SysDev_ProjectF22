<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\message.php'; ?>

        <div class="container mb-4">
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-4">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>

            <form id="contact-form" name="contact-form" action="" method="POST">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="fName" name="fName" placeholder="First Name" value="<?= isset($_SESSION['client_id']) ? $_SESSION['fName'] : ""?>" required>
                            <label for="fName">First Name</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="lName" name="lName" placeholder="Last Name" value="<?= isset($_SESSION['client_id']) ? $_SESSION['lName'] : ""?>"  required>
                            <label for="lName">Last Name</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" placeholder="Email" value="<?= isset($_SESSION['client_id']) ? $_SESSION['email'] : ""?>" required>
                            <label for="email">Email</label>
                            <div id="emailHelp" class="form-text">example@example.com</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  maxlength="13" value="<?= isset($_SESSION['client_id']) ? $_SESSION['phone'] : ""?>" required>
                            <label for="phone">Phone</label>
                            <div id="phoneHelp" class="form-text">I.e. XXX-XXX-XXXX</div>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="form-floating mb-0">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                            <label for="subject">Subject</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="form-floating mt-2">
                            <textarea class="form-control"  name="content" placeholder="Content" style="height: 20em" required></textarea>
                            <label for="content">Your message</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col text-center">
                        <button class="btn btn-dark w-50" type="submit" name="action">Send</a>
                    </div>
                </div>

            </form>

        </div>

        <?php include 'app\views\includes\userFooter.php'; ?>
    </body>
</html>