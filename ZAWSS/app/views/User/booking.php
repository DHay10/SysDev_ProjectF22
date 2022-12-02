<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <?php include 'app\views\includes\message.php'; ?>

        <div class='container mb-4'>
            <!-- Header -->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Book Your Travel</h2>
            <p class="h4 text-muted text-center">You can send this form to inquire for a quote from our company, it will take around 1 to 2 weeks for a reply</p>
            <!-- Form -->
            <form id="booking-form" name="booking-form" action="" method="post">
                <!-- Destination -->
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <select class="form-control" name="destination">
                                <option value=""></option>
                                <?php 
                                foreach ($data as $item) {
                                    echo "<option value=$item->destination_id>$item->country, $item->city</option>";
                                }
                                ?>
                            </select>
                            <label for="destination">Destination</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Departing Date -->
                    <div class="col">
                        <div class="form-floating">
                            <input type="date" class="form-control" aria-describedby="dateHelp" name="departure_date" required>
                            <small id="dateHelp" class="form-text text-muted">Note: Submitted dates may not be accurate to the actually booking, it is an approximation</small>
                            <label for="departure_date">Departing Date</label>
                        </div>
                    </div>
                    <!-- Return Date -->
                    <div class="col">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="return_date" name="return_date" required>
                            <label for="return_date">Returning Date</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Nb of Adults -->
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="nb_adults" id="nb_adults" value="0" min="0" required>
                            <label for="nb_adults">Number of Adults (&gt18)</label>
                        </div>
                    </div>
                    <!-- Nb of Children -->
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="nb_children" id="nb_children" value="0" min="0" required>
                            <label for="nb_children">Number of Children (12-18)</label>
                        </div>
                    </div>
                    <!-- Nb of Infants -->
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="nb_infants" id="nb_infants" value="0" min="0" required>
                            <label for="nb_infants">Number of Infants (&lt12)</label>
                        </div>
                    </div>
                </div>
                <!-- Type -->
                <div class="row mb-3">
                    <div class="col">
                        <div class="form-floating">
                            <select class="form-control" id="type" name="type">
                                <option value=""></option>
                                <?php foreach ($data2 as $item) {

                                    echo "<option value=$item->type_id>$item->name</option>";
                                }
                                ?>
                            </select>
                            <label for="type">Type</label>
                        </div>
                    </div>
                </div>
                <!-- Buttons -->
                <div class="row">
                    <div class="col d-grid">
                        <button name="action" type="submit" class="btn btn-dark">Submit</button>
                    </div>

                    <div class="col d-grid">
                        <button name="reset" type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </div>
            </form>
        </div>

        <?php include 'app\views\includes\userFooter.php'; ?>

    </body>
</html>