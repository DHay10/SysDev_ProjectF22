<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <title>View Messages</title>
    </head>

    <body>
        <?php include 'app\views\includes\adminHeader.php'; ?>
        <?php include 'app\views\includes\message.php'; ?>

        <div class="container text-center mt-4">
            <h3>View Customers Messages</h3>
            <table id="example" class="table table-striped text-center" style="width:100%">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date Sent</th>
                        <th>Delete message</th>
                    </tr>
                </thead>

                <tbody>
                    <?php  
                        if (empty($data)) {
                            echo "<h4>No Messages Found</h4>";
                        } else {
                            foreach ($data as $item) {
                                echo "
                                <tr>
                                <td>$item->fName</td>
                                <td>$item->lName</td>
                                <td>$item->email</td>
                                <td>$item->phone</td>
                                <td>$item->content</td>
                                <td>$item->dateSent</td>
                                <td><button onclick=window.location.href='/Admin/deleteMessage/$item->message_id/'; type='button' class='btn btn-danger'>Delete</button></td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

    </body>

</html>
			