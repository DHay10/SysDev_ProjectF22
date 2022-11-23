<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign In</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <div class='container mt-5'>
            <div class="row d-flex justify-content-center">
                <h3 class="text-center mb-4">Sign In</h3>
                <form action="">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control w-100" id="username" placeholder="" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control w-100" id="password" placeholder="" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center text-md-right">
                        <button type="submit" class="btn btn-dark w-50">Sign In</button>
                    </div>
                </form>
                <small class="text-center mb-4">Don't Have an Account Yet? <a href="/User/register">Register</a></small>
                
                <div class="text-center text-md-right">
                    <a class="btn btn-dark" href="/Admin/login" role="button">Admin Login</a>
                </div>
            </div>
        </div>

        <!-- <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-3">
                <h2 class="text-center mb-4 text-primary">Login Form</h2>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control border border-primary" id="exampleInputPassword1">
                    </div>
                    <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>
                <div class="mt-3">
                    <p class="mb-0  text-center">Don't have an account? <a href="signup.html"
                            class="text-primary fw-bold">Sign
                            Up</a></p>
                </div>
            </div>
        </div> -->
    </body>
</html>