<?php
$con=mysqli_connect("localhost","root","","phpgist");
if(isset($_POST['save'])){
$n=$con->real_escape_string($_POST['pname']);
$cat=$_POST['cat'];
$p=$_POST['pprice'];
$d=$_POST['pdes'];
$id=$_POST['id'];

if(isset($_FILES['pimg']['name']) && $_FILES['pimg']['name']!=""){

$buf=$_FILES['pimg']['tmp_name'];
$fn=time().$_FILES['pimg']['name'];
move_uploaded_file($buf,'prod_img/'.$fn);

$up="UPDATE  project SET name='$n',image='$fn',price='$p',description='$d',category='$cat' WHERE id='$id'";
}else{
    $up="UPDATE  project SET name='$n',price='$p',description='$d',category='$cat' WHERE id='$id'";
}
if($con->query($up)){
    header("location:listproduct.php");
}
}else{
    echo "403 forbidden";
}
?>
