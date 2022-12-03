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


<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date Sent</th>
            </tr>
        </thead>
        <tbody>
        <?php  foreach ($data as $item) {

					echo 
                    "<tr>
					<td>$item->fName</td>
					<td>$item->lName</td>
					<td>$item->email</td>
					<td>$item->phone</td>
					<td>$item->content</td>
					<td>$item->dateSent</td>
                    </tr>";
                }
				?>
           
        </tbody>
        
    </table>

      
    </body>
					  </html>
							