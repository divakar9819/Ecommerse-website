<?php
  include("header.php");
?>
<!doctype>
<!DOCTYPE html>
<html>
<head>
	<meta http-equlv="X-UA-Compatable" content="IE-edge"/>
	<meta name="viewport" content="width-device-width"/>
	<title>home</title>
	<meta http-equlv="Content-type" content="text/html;charset-iso-8859-1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet"  href="css/style.css"/>
</head>
<body>

  <div class="container-fluid">
  	<div class="container-fluid" style="background-color: black;color: white;height: 100px">
     <div class="container " >
     	<h2 class="text-white" align="center"> E-Commerse</h2>

     </div>
  	</div>
  	<div class="container" style="">
  	<h1><font face="Bradley Hand ITC">My Shop</font></h1>
  </div>


  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
    <a href="" class="navbar-brand">E-Commerse</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#mynav" >
      <span class="navbar-toggler-icon"></span>
      
    </button>
    <div class="collapse navbar-collapse" id="mynav">
      <ul class="navbar nav text-center ml-auto">
        <li class="nav-item">

          <a href="bg.php" class="nav-link" style="color: white"><span><i class="fa fa-home fa-2x">Home</i></span></a>
          
        </li>
        <li class="nav-item">
          <a href="aboutus.php" class="nav-link" style="color: white">About</a>
          
        </li>

        <li class="nav-item">
          <a href="contact.php" class="nav-link" style="color: white">Contact</a>
          
        </li>

        <li class="nav-item">
          <a href="help.php" class="nav-link" style="color: white">Help</a>
          
        </li>

        <li class="nav-item">
          <a href="cart.php" class="nav-link" style="color: white"><span><i class="fa fa-shopping-cart fa-2x"></i>Cart</span></a>
          
        </li>

        <li class="nav-item">
          <a href="logout.php" class="nav-link" style="color: white"><span>Logout</span></a>
          
        </li>
    
  </ul>
</div>
  
</nav>
  

      <div class="container">
       	<div class="col-sm-2" style="background-color: black;color: white">
       		<h1 align="center">Brand</h1>
       		<center>
       		<a href="dell.php" class="nav-link text-white"><p>Dell</p></a><br>
       		<a href="hp.php" class="nav-link text-white"><p>HP</p></a><br>
       		<a href="can.php"class="nav-link text-white"><p>Cannon</p></a><br>
       		<a href="sam.php"class="nav-link text-white"><p>Samsong</p></a><br>
       	    </center>
       		<h1 align="center">Catagary</h1>
       		<center>
            <a href=""class="nav-link text-white"><p>Laptop</p></a><br>
       		<a href=""class="nav-link text-white"><p>Mobile</p></a><br>
       		<a href=""class="nav-link text-white"><p>Camara</p></a><br>
       		<a href=""class="nav-link text-white"><p>Game</p></a><br>
       	</center>
       	</div>

       
       	<div class="col-sm-10">
       		<?php
       		  $con=mysqli_connect("localhost","root","","ecom");
       		  $my="SELECT * FROM `product` limit 0,6";
       		  $result=mysqli_query($con,$my);
       		  while($row=mysqli_fetch_array($result))
       		  {
       		  	
       		  	$id=$row['id'];
       		  	$Name=$row['Name'];
       		  	$image=$row['img'];
       		  	$brand=$row['brand'];

       		  ?>
       		   
               <div class="col-sm-4">
               <?php	echo"<img src='addimin/c/$image' width='250'height='180'>"?><br>
<br>       
              
             <center>
             	<?php echo$brand?><br>
               <?php echo$Name?>
               <a href="b.php ?id=<?php echo$row['id']?>" class="btn btn-primary btn-block" >Buy Now</a>
               </center>
           </div>

       		  <?php
       		  }
       		?>

       	
       </div>
   </div>
</div>


       <div class="container" style="background-color: silver">
       	<div class="col-sm-12" align="center">
       		<p>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000</p>
       	</div>
       	
       </div>

                    

                  
  
</body>
</html>
          
      
  