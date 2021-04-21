<?php 
include 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fund Transfer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="FundTransfer.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	
    
</head>

<script type ="text/javascript">
	 function alertclick(){
		swal({
        title: "Are you sure?",
        text: "Do you want to proceed with the transaction?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
       if (willDelete) {
    swal("Transaction Successful!", {
      icon: "success",
    });
  } else {
    swal("Transaction Unsuccesful!");
  }
});
	 }
	 </script>
<body>

<?php 
include 'navbar.php'
?>

<?php  
  if(isset($_POST['submit'])){
	$sendname = $_POST['sendname'];
    $sendaccno = $_POST['sendaccno'];
    $receivername = $_POST['receivername'];
    $receiveraccno = $_POST['receiveraccno'];
    $amount = $_POST['amount'];
    $mode = $_POST['mode'];
    
    $resquery = "INSERT INTO `fundtransfer`(`sendname`, `sendaccno`, `receivername`, `receiveraccno`, `amount`, `mode`) VALUES ('$sendname','$sendaccno','$receivername','$receiveraccno','$amount','$mode')";
    $funddata = mysqli_query($conn,$resquery);
	if($funddata){
		echo '<script type = "text/javascript">alertclick();</script>';
	}
}
  
?>
<div class= "main-div">
<h1>Transfer Funds</h1>
<hr>

<div class="container">
   
    <div class="title"></div>
    <div class="content">
      <form action="FundTransfer.php" method ="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Sender's Name</span>
            <input type="text" name = "sendname" placeholder ="Enter Sender's Name" required>
          </div>
          <div class="input-box">
            <span class="details">Receiver's Name</span>
            <input type="text" name ="receivername"placeholder="Enter Receiver's Name " required>
          </div>
          <div class="input-box">
            <span class="details">Sender's Account Number.</span>
            <input type="text"name ="sendaccno" placeholder="Enter Sender's Account no." required>
          </div>
          <div class="input-box">
            <span class="details">Receiver's Account Number.</span>
            <input type="text"name="receiveraccno" placeholder="Enter Receiver's Account no." required>
          </div>
          <div class="input-box">
            <span class="details">Amount</span>
            <input type="text" name = "amount" placeholder="Enter Amount" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Amount</span>
            <input type="text"  placeholder="Confirm your Amount" required>
          </div>
        </div>
        <div class="mode-details">
          <input type="radio" name="mode" value ="Credit" id="dot-1">
          <input type="radio" name="mode" value ="Debit" id="dot-2">
          
          <span class="mode-title">Mode of Payment</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gen"  value = "Credit">Credit</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gen" value = "Debit">Debit</span>
          </label>
          <div class="input-box">
            <input type="text" placeholder="CVV" required>
          </div>
          <div class="input-box">
            <input type="text" placeholder="Date of Expiry(MM/YY)" required>
          </div>
         
          </div>
        </div>
        <div class="button">
          <input type ="submit" name = "submit" value="Transfer">
        </div>
      </form>
    </div>
  </div>


  

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>

    
