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


	<div class='container mb-4'>
            <h2 class="h1-responsive font-weight-bold text-center my-4">Client Bookings</h2>
            
            <div class="row mb-4">
                <?php
                    
                    foreach ($data['bookings'] as $item) {
                        echo "

                        <table class='table'>
						  <thead>
						    <tr>
						      <th scope='col'>Booking Id</th>
						      <th scope='col'>Client Id</th>
						      <th scope='col'>Destination Id</th>
						      <th scope='col'>Flight date</th>
						      <th scope='col'>Return date</th>
						      <th scope='col'>Number of Adults</th>
						      <th scope='col'>Number of Children</th>
						      <th scope='col'>Number of Infants</th>
						      <th scope='col'>Type</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>$item->book_id</td>
						      <td>$item->client_id</td>
						      <td>$item->destination_id</td>
						      <td>$item->flight_date</td>
						      <td>$item->return_date</td>
						      <td>$item->nbAdults</td>
						      <td>$item->nbChildren</td>
						      <td>$item->nbInfants</td>
							";
							 }
							
						      foreach($data['types'] as $item2){
						      	 echo "
						      	 <td>$item2->name</td>
						      							    
						  </tbody>
						</table>

						
						<select id="category_id" class="form-control" name="category_id" required>
                            <!-- Find which category to add -->

                            <?php foreach ($data as $category) {   ?>
                            
                            <option value="<?= $category->category_id?>"> <?=$category->category_name?> </option>
                            <?php } ?>


                        </select>

							
							";



 } 
                   
                    

                ?>
                
                <script>
                    file = "" + "<?= $data->product_image ?>"
                    if (file != "") {
                        document.getElementById("product_img_preview").src = "/images/" + file;
                    }
                </script>
            
            </div>

        </div>


</body>
</html>