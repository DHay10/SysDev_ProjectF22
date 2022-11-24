<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        
        <div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Register</h2>
            <form id="register-form" name="register-form" action="">
                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" placeholder="" required>
                            <label for="username">Username</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="firstName" placeholder="" required>
                            <label for="firstName">First Name</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="lastName" placeholder="" required>
                            <label for="lastName">Last Name</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="phone" placeholder="" required>
                            <label for="phone">Phone</label>
                            <div id="phoneHelp" class="form-text">I.e. (XXX)XXX-XXXX</div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="" required>
                            <label for="email">Email</label>
                            <div id="emailHelp" class="form-text">example@example.com</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="" minlength="8" required>
                            <label for="phone">Password</label>
                            <div id="passwordHelp" class="form-text">At least 8 characters</div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="passwordConf" placeholder="" required>
                            <label for="passwordConf">Password Confirmation</label>
                            <div id="passwordConfHelp" class="form-text">Re-enter your Password</div>
                        </div>
                    </div>
                </div>

                <div class="text-center text-md-right">
                    <button type="submit" class="btn btn-dark w-50">Sign In</button>
                </div>

                <div class="text-center text-md-right">
                    <small>Already have an Account? <a href="/User/login">Log In</a></small>
                </div>
            </form>
        </div>
    </body>
</html>