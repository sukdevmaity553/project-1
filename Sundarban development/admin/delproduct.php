<?php 
$con=mysqli_connect("localhost","root","","phpgist");

$id=$_GET['did'];

$d="DELETE FROM project WHERE id='".$id."'";
if($con->query($d)){
    header("location:listproduct.php");
};
?>