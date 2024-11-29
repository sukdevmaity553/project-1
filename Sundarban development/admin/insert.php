<?php
$con=mysqli_connect("localhost","root","","phpgist");
if(isset($_POST['save'])){
$n=$con->real_escape_string($_POST['pname']);
$cat=$_POST['cat'];
$p=$_POST['pprice'];
$d=$_POST['pdes'];
$buf=$_FILES['pimg']['tmp_name'];
$fn=$_FILES['pimg']['name'];
move_uploaded_file($buf,'prod_img/'.$fn);

$ins="INSERT INTO project SET name='$n',image='$fn',price='$p',description='$d',category='$cat' ";
$con->query($ins);
?>
<h1>Name:=<?php echo $n ?></h1>
<h1>Price:=<?php echo $p ?></h1>
<h1>Description:=<?php echo $d ?></h1>
<h1>Category:=<?php echo $cat ?></h1>

<?php }else{
    echo "403 access denied";
} ?>