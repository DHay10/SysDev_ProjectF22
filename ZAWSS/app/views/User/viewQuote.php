<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
<?php include 'app\views\includes\userHeader.php'; ?>


	<div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Your Bookings</h2>
            
            <div class="row mb-4">
                        <table class='table'>
						  <thead>
						    <tr>
						      <th scope='col'>Flight date</th>
						      <th scope='col'>Return date</th>
						      <th scope='col'>Number of Adults</th>
						      <th scope='col'>Number of Children</th>
						      <th scope='col'>Number of Infants</th>
						      <th scope='col'>Type</th>
							  <th scope='col'>Destination</th>
							  <th scope='col'>Client Name</th>
							  <th scope="col">Status</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php  foreach ($data['bookings'] as $item) {
							
					echo "<tr>
					<td>$item->flight_date</td>
					<td>$item->return_date</td>
					<td>$item->nbAdults</td>
					<td>$item->nbChildren</td>
					<td>$item->nbInfants</td>
					<td>$item->name</td>
					<td>$item->country, $item->city</td>
					<td>$_SESSION[fName] $_SESSION[lName]</td>
					<td>$item->status</td>
					";

									}
				?>

					</div>
				</div>  
  </body>
 </html>
