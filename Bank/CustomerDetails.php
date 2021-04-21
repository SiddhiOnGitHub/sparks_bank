<?php 
include 'navbar.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
 <div class = "main-div">
 <h1> Customer list </h1>
 <hr>
    <div class = "center-div">
        <div class = "table-responsive">
            <table>
              <thread>
              <tr>
                  <th> ID </th>
                  <th> NAME </th>
                  <th> EMAIL </th>
                  <th> ACCNO </th>
                  <th> OPERATION </th>
              <?php 
 
              include 'config.php';

               $selectquery = " SELECT * FROM `createuser` ";

               $query = mysqli_query($conn , $selectquery);
               $nums = mysqli_num_rows($query);

              while($res = mysqli_fetch_array($query)){
              ?>
              <tr> 
                 <td><?php echo $res['id']; ?></td>
                 <td><?php echo $res['name']; ?></td>
                 <td><?php echo $res['email']; ?></td>
                 <td><?php echo $res['accno']; ?></td>

                 <td><button onclick="location.href='FundTransfer.php'" type="button" class="btn btn-success">Transfer</button></td>
                </tr>

                <?php
               }
               ?>
                
               </thread>
           </table>

 </div>
</div>
 </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>