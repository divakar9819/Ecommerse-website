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
  <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src=js/bootstrap.js></script>
  <div class="container-fluid">
    <div class="container-fluid" style="background-color: black;color: white">
     <div class="container " >
      <h1 align="center">Welcome</h1>
     </div>
    </div>
    <div class="container" style="">
    <h1><font face="Bradley Hand ITC">My Shop</font></h1>
  </div>

    <div class="container" style="background-color: blue; color:white">
      <div class="row">
        <div class="col-sm-12">
          <nav class="navbar">
               <div class="navbar-header">
                <button type="button" class="navbar-toggle"data-toggle="collapse data-target="#mynavbar>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    
                </button>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav ">
                   <li><a href="index.php">Home</a></li> 
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contect</a></li> 
                    <li><a href="">Help</a></li>
                </ul>
                </div>
        
            </nav>
        </div>
        </div>
    </div>

       <div class="container">
        <div class="col-sm-2" style="background-color: black;color: white">
          <h1 align="center">Brand</h1>
          <center>
          <a href="dell.php"><p>Dell</p></a><br>
          <a href="hp.php"><p>HP</p></a><br>
          <a href=""><p>Cannon</p></a><br>
          <a href="sam.php"><p>Samsong</p></a><br>
            </center>
          <h1 align="center">Catagery</h1>
          <center>
            <a href=""><p>Laptop</p></a><br>
          <a href=""><p>Mobile</p></a><br>
          <a href=""><p>Camara</p></a><br>
          <a href=""><p>Game</p></a><br>
        </center>
        </div>
       
       
        <div class="col-sm-10">
          <?php
          $m1='Sumsang';
            $con=mysqli_connect("localhost","root","","ecom");
            $my="SELECT * FROM `product`WHERE brand like '%$m1%'";
            $result=mysqli_query($con,$my);
            while($row=mysqli_fetch_array($result))
            {
              
              $id=$row['id'];
              $Name=$row['Name'];
              $image=$row['img'];
              $brand=$row['brand'];

            ?>
             
               <div class="col-sm-4">
               <?php  echo"<img src='addimin/c/$image' width='150'height='250'>"?><br>
<br>       
              
            
              <?php echo$brand?><br>
               <?php echo$Name?><br>
               <a href="b.php?id=<?php echo $id; ?>" class="btn btn-primary">Buy Now</a>
               
           </div>

            <?php
            }
          ?>

        </div>
      </div>
    </div>
  </body>
  </html>