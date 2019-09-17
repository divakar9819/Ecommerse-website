<?php
include("header.php");
?>


<div class="container bg-dark text-white" style="height: 150px" >
	<h1 align="center">Welcome To Our SHOP</h1>
	<h3 align="right" >
	<a href="logout.php" class="text-white nav-link " >Logout</a></h3>
</div>
         <div class="container" >
         	
         		<div class="col-md-6">
         			<div style="background: #00ffff ;padding-top: 5px;margin-top: 20px" >
         		<h2 align="center" >SignUp</h2>
         		<form action="login.php" method="post">
         			 <div class="form-group">
         		     <label><i class="fa fa-user"></i>Name</label>
         		     <input type="text" name="name" required="true" class="form-control">
         	         </div>

         	         <div class="form-group">
         		     <label><i class="fa fa-envelope-o"></i>Email</label>
         		     <input type="email" name="email" required="true" class="form-control">
         	         </div>

         	         <div class="form-group">
         		     <label><i class="fa fa-lock"></i>Password</label>
         		     <input type="password" name="passw" required="true" class="form-control">
         	         </div>

         	         <div class="form-group">
         		     <label><i class="fa fa-address-card"></i>Address</label>
         		     <input type="text" name="address" required="true" class="form-control">
         	         </div>

         	         <input type="submit" name="submit" value="submit" class="btn btn-primary" align="center">

         	
         </form>
         	</div>
		 </div>



		 <?php
           if(isset($_POST['submit']))
           {
           	include("dbcon.php");
           	$name=$_POST['name'];
           	$email=$_POST['email'];
           	$passw=$_POST['passw'];
           	$address=$_POST['address'];
           	$result="INSERT INTO `user`( `Name`, `email_id`, `password`, `address`) VALUES('$name','$email','$passw','$address')";
           	$run=mysqli_query($con,$result);
           	if($run==true)
           	{
           		header("location:index.php");
           	}
           	else
           	{
           		echo"error";
           	}
           }
		 ?>