<!DOCTYPE html>

<html lang="en">
    <head>
        <title>Add Destinations</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\adminHeader.php'; ?>
        <?php include 'app\views\includes\message.php'; ?>

        <div class='container mb-4'>

            <h2 class="h1-responsive font-weight-bold text-center mt-4">Add Destinations</h2>
            <p class="h4 text-muted text-center mb-4">You can add the destination here</p>

            <form id="booking-form" name="booking-form" action="" method="post">
                

                <div class="row mb-3">

                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="country" id="country" placeholder="Country" required>
                            <label for="country">Country</label>
                        </div>
                            </br>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                            <label for="city">City</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 text-center">
                    <div class="col">
                        <button name="action" type="submit" class="btn btn-dark w-50">Submit</button>
                    </div>
                </div>

            </form>

        </div>

    </body>
</html>
