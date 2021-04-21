<?php 
include 'navbar.php'
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="TransferDetail.css">
    <title>Transfer Details </title>
</head>
<body>
<div class = "main-div">
 <h1> Transfer Details </h1>
 <hr>
    <div class = "center-div">
        <div class = "table-responsive">
            <table>
              <thread>
              <tr>
                  <th> ID </th>
                  <th> SENDER'S NAME </th>
                  <th> SENDER'S ACC No. </th>
                  <th> RECEIVER'S NAME  </th>
                  <th> RECEIVER'S ACC No. </th>
                  <th> AMOUNT </th>
                  <th> MODE OF PAYMENT  </th>
                  <th> DATE AND TIME </th>
                  
              <?php 
 
              include 'config.php';

               $selquery = " SELECT * FROM `fundtransfer` ";

               $transquery = mysqli_query($conn , $selquery);
               $nums = mysqli_num_rows($transquery);

              while($result = mysqli_fetch_array($transquery)){
              ?>
              <tr> 
                 <td><?php echo $result['id']; ?></td>
                 <td><?php echo $result['sendname']; ?></td>
                 <td><?php echo $result['sendaccno']; ?></td>
                 <td><?php echo $result['receivername']; ?></td>
                 <td><?php echo $result['receiveraccno']; ?></td>
                 <td><?php echo $result['amount']; ?></td>
                 <td><?php echo $result['mode']; ?></td>
                 <td><?php echo $result['date']; ?></td>


                 
                </tr>

                <?php
               }
               ?>
                
               </thread>
           </table>

 </div>
</div>
 </div>
    
    


         <footer  class = "text-center  mt-5 py-2">
        <p>-<b>Made by Siddhi Prabhakar Paradhi </b> <br>(The Sparks Foundation)</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>