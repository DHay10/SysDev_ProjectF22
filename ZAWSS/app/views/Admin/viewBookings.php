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
<?php include 'app\views\includes\adminHeader.php'; ?>
<?php include 'app\views\includes\message.php'; ?>


	<div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Client Bookings</h2>

            <form action="" method="get">
            <div class="row">
                <div class="col-sm-3">
                    <input type="text" name="search" class="form-control" placeholder="Search by client name">
                </div>
                <div class="col-sm-2">
                    <select class="form-control" name="status">
                        <option value="">Filter by status</option>
                        <option value="Pending">Pending</option>
                        <option value="In progress">In progress</option>
                        <option value="Paid">Paid</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>

                <div class="col-sm-2">
                <input type="date" name="date" value="<?php if (!empty($_GET['date'])) {
                    echo $_GET['date'];
                } ?>" class="form-control">
                </div>



                <div class="col-sm-1">
                   <button type="submit" class="btn btn-warning" name="filter">Go</button>
                </div>
            </div>

        </form>



            
            <div class="row mb-4">
                    <table class='table'>
					    <thead>
						    <tr>
							      <th scope='col'>Booking Id</th>
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
							$type_name;
							$destination_country;
							$destination_city;
							$client_fname;
							$client_lname;
							echo "<tr>
							<td>$item->book_id</td>
							<td>$item->flight_date</td>
							<td>$item->return_date</td>
							<td>$item->nbAdults</td>
							<td>$item->nbChildren</td>
							<td>$item->nbInfants</td>
							";

							foreach ($data['types'] as $item2) {
								if($item2->type_id == $item->type_id )
								$type_name = $item2->name;
						}
							
							foreach ($data['destinations'] as $item2) {
								if($item2->destination_id == $item->destination_id ){
									$destination_country = $item2->country;
									$destination_city = $item2->city;
								}
							}
								

							foreach ($data['clients'] as $item3) {
								if($item3->client_id == $item->client_id ){
									$client_fname = $item3->fName;
									$client_lname = $item3->lName;
								}
							}
						
					echo "  <td>$type_name</td>
							<td>$destination_city, $destination_country</td>
							<td>$client_fname $client_lname</td>
							<td>$item->status</td>

		                 
						";

					
				}
				?>
					</div>

				</div>
					  
					  
					  </body>


					  
					  </html>
							
							
						     
						      							
            
    