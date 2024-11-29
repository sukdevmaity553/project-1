<?php 
$con=mysqli_connect("localhost","root","","phpgist");

$id=$_GET['did'];

$d="DELETE FROM masterorder WHERE order_id='".$id."'";
if($con->query($d)){
    header("location:vieworder.php");
};
?>