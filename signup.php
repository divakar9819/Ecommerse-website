<?php
include("header.php");
session_start();
if(isset($_SESSION['uname']))
{
	header("location:index.php");
}
?>


<div class="container bg-dark text-white" style="height: 150px" >
	<h1 align="center">Welcome To Our SHOP</h1>
	<h3 align="right" >
	<a href="logout.php" class="text-white nav-link " >Logout</a></h3>
</div>
         <div class="container" >
         	
         		<div class="col-md-6">
         			<div style="background: #00ffff ;padding-top: 5px;margin-top: 20px" >
         		<h2 align="center" >Login</h2>
             <form action="signup.php" method="post">
         		<div class="form-group">
         		     <label><i class="fa fa-envelope-o"></i>Email</label>
         		     <input type="email" name="email" required="true" class="form-control">
         	         </div>

         	         <div class="form-group">
         		     <label><i class="fa fa-lock"></i>Password</label>
         		     <input type="password" name="passw" required="true" class="form-control">
         		     <div align="center" style="margin-top: 10px">
         		     <input type="submit" name="submit" value="submit" class="btn btn-primary">
         		 </div>
         		     <h2>Do not have account<a href="login.php" class="btn btn-danger"><span class="badge badge-danger">SignUp</span></a></h2>
         	         </div>
         	     </form>
         	</div>
         </div>
     </div>

     <?php
     if(isset($_POST['submit']))
     {
     	include("dbcon.php");
     	$email=$_POST['email'];
        $password=$_POST['passw'];
     	$result="SELECT * FROM `user` WHERE email_id='$email' AND password='$password'";
     	$run=mysqli_query($con,$result);
     	$row=mysqli_num_rows($run);
     	if($row==1)
     	{
     		$data=mysqli_fetch_assoc($run);
     		$id=$data['id'];
     		session_start();
     		$_SESSION['uname']=$id;
     		header("location:index.php");
     	}
     	else
     	{
     		?>
             <script type="text/javascript">alert("Incorect username or password");</script>
     		<?php
     	}
     }

     ?>
