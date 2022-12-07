<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title></title>
</head>
<body>
  
<?php include 'app\views\includes\adminHeader.php'; ?>
<?php include 'app\views\includes\message.php'; ?>


<center><h3>View customers messages</h3></center>
<center><table id="example" class="table table-striped" style="width:50%"></center>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date Sent</th>
                <th>Delete message</th>
                <th>Reply to message</th>
            </tr>
        </thead>
        <tbody>
        <?php  foreach ($data as $item) {
            if(empty($data)){
                echo "No products Found";

            }
            else{
					echo 
                    "<tr>
					<td>$item->fName</td>
					<td>$item->lName</td>
					<td>$item->email</td>
					<td>$item->phone</td>
					<td>$item->content</td>
					<td>$item->dateSent</td>
                    <td><button onclick =window.location.href='/Admin/delete/$item->message_id/'; type='button' class='btn btn-danger'>Delete</button></td>
                    <td><type='button' class='btn btn-primary'>Reply</button></td>
                    </tr>";
                }
            }
				?>
           
        </tbody>
        
    </table>

      
    </body>
</html>
							