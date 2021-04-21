<?php 
include 'config.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title> Login Page  </title> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="Create_user.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<script type ="text/javascript">
	 function sweetalertclick(){
		swal("Welcome!", "You are succesfully logged in!", "success");
	 }
	 </script>
<body>
  <?php 
  include 'navbar.php'
  ?>

  <?php  
  if(isset($_POST['subm'])){
	$name = $_POST['name'];
    $email = $_POST['email'];
	$accno = $_POST['accno'];
    $query = "INSERT INTO `createuser`(`name`, `email`, `accno`) VALUES ('$name','$email', '$accno')";
    $data = mysqli_query($conn,$query);
	if($data){
		echo '<script type = "text/javascript">sweetalertclick();</script>';
	}
}
  
?>
	<div class="loginbox">
		<img src ="loginavatar2.jpg" class = "avatar">
			<div class ="col-lg-12 px-2 pt-2">
			<h1 class="font-weight-bold py3"> Login</h1>
				<h5>Add your Information!</h5>
				<form action = "Create_user.php" method ="POST">
                <div class ="form-row">
						<div class = "col-lg-10">
							<label for="inputName4"></label>
                                <input type="text" name ="name" class="form-control" id="inputName4"  placeholder="Enter Your Name" required>
                        </div>
                 </div>
				 <div class = "form-row">
						<div class = "col-lg-10">
							<label for="inputEmail4"></label>
                                 <input type="text" name ="email" class="form-control" id="inputEmail4"  placeholder="Email" required>
						</div>
				 </div>
				 
				  <div class = "form-row">
						<div class = "col-lg-10">
							<label for="inputAccNo"></label>
                                 <input type="text" name ="accno" class="form-control" id="inputAccno"  placeholder="Account No." required>
						</div>
				 </div> 
								
				<div class ="form-row">
					<div class = "col-lg-10">
					<button type ="submit" name ="subm" class="btn btn-success mt-3 mb-3">login</button>	
					</div>
				</div> 
				
            </div>
	</div>
         
        <footer class="text-center text-color-white mt-5 py-2">
        <p>-<b>Made by Siddhi Prabhakar Paradhi </b> <br>(The Sparks Foundation)</p>
      </footer>
</div>

        <scrip src="https://code.jquery.com/jquery-3.5.1.min.js"></scrip>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></scrip>
</body>
</html>










