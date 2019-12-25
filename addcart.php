<?php
require("includes/dbcon.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO `cart`( `user_id`, `item_id`, `stats`) VALUES('$item_id',' $user_id')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: bg.php');
}
?>  