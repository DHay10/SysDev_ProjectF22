<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Booking Page</title>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        
        <h1>Book Your Travel</h1>
        <p>You can send this form to inquire for a quote from our company, it will take around 1 to 2 weeks for a reply</p>

        <form id="book_form" action="">
            <!-- Destinations needs to be implemented via PHP & JS -->
            <div class="form_group">
                <label for="destination">Destination</label>
                <select class="form-control" id="destination" name="destination">
                    <option value=""></option>
                    <option value="canada_mtl">Montreal, QC, CA</option>
                    <option value="test">test</option>
                    <option value="test1">test1</option>
                </select>
            </div>

            <!-- Minimum Date needs to be added via JS -->
            <div class="form-group">
                <label for="departure_date">Departing Date</label>
                <input type="date" class="form-control" id="departure_date" aria-describedby="dateHelp" name="departure_date"  required>
                <small id="dateHelp" class="form-text text-muted">Note: Submitted dates may not be accurate to the actually booking, it is an approximation</small>
            </div>

            <div class="form-group">
                <label for="return_date">Returning Date</label>
                <input type="date" class="form-control" id="return_date" name="return_date"  required>
            </div>

            <!-- Need to add minimum & Age Specification -->
            <div class="form-group">
                <label for="nb_adults">Number of Adults (&gt18)</label>
                <input type="number" class="form-control" name="nb_adults" id="nb_adults" value="0" min="0" required>
            </div>

            <div class="form-group">
            <label for="nb_children">Number of Children (12-18)</label>
            <input type="number" class="form-control" name="nb_children" id="nb_children" value="0" min="0" required>
            </div>

            <div class="form-group">
                <label for="nb_infants">Number of Infants (&lt12)</label>
                <input type="number" class="form-control" name="nb_infants" id="nb_infants" value="0" min="0" required>
            </div>

            <!-- Types needs to be implemented via PHP & JS -->
            <div class="form_group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type">
                    <option value=""></option>
                    <option value="student">Student</option>
                    <option value="elderly">Elderly</option>
                </select>
            </div>
            <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-warning"value="Reset Form">
            </div>
        </form>

    </body>
</html>