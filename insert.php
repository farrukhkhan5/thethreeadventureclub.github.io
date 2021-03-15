<?php include('con2.php')?>
<?php
     if(isset($_POST['done'])){
    	$fname = $_POST['fname'];
    	$lname = $_POST['lname'];
    	$fathername = $_POST['fathername'];
    	$idcard = $_POST['idcard'];
    	$email = $_POST['email'];
    	$sql = " INSERT INTO form (fname, lname, fathername, idcard, email) VALUES ('$fname', '$lname','$fathername','$idcard','$email') ";
    	$query = mysqli_query($conn,$sql);
    	$_SESSION['message'] = "Record has been saved";
        $_SESSION['msg_type'] = "success";
        header("location:insert.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
	  <title>Insert Data InTo Database</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="style.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php 
   if(isset($_SESSION['message'])): ?>
      <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php
           echo $_SESSION['message'];
          unset($_SESSION['message']);
        ?>  
      </div>
   <?php endif ?>
	
<form action="insert.php" method="POST">
<div class="container"> 
	<div class="col-lg-6 m-auto">
	 <div class="form-group">
		<label>First Name:</label>
		  <input type="text" name="fname" class="form-control" placeholder="Enter Your Name" required="  required">
	       </div>
	       <div class="form-group">
		<label>Last Name:</label>
		  <input type="text" name="lname" class="form-control" placeholder="Enter Your First Name" required="  required">
	       </div>
	       <div class="form-group">
		<label>Father Name:</label>
		  <input type="text" name="fathername" class="form-control" placeholder="Enter Your Father Name" required="  required">
	       </div>
	       <div class="form-group">
		<label>CNIC No:</label>
		  <input type="text" name="idcard" class="form-control" placeholder="Enter Your Card Number" required="  required">
	       </div>
	       <div class="form-group">
		<label>Email:</label><br>
		  <input type="email" id="email" name="email" placeholder="Enter your Email"  required="  required">
	       </div>
	           <div class="form-group">
	         	<button class="btn btn-primary" type="submit" name="done">Save</button>
	         </div>
         </div>
       </div>
     </form>
 </body>
</html>