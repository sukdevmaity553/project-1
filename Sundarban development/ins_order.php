<?php
$con=mysqli_connect("localhost","root","","phpgist");
if(isset($_POST['save'])){
$pid=$_POST['pid'];
$pn=$_POST['pname'];
$pp=$_POST['pprice'];
$n=$_POST['name'];
$ph=$_POST['phone'];
$add=$_POST['address'];
$ins="INSERT INTO masterorder SET pid='$pid',pname='$pn',pprice='$pp',cname='$n',cphone='$ph',caddress='$add'";
$con->query($ins);

?>
<h1>Product ID:<?php echo $pid ?></h1>
<h1>Product Name:<?php echo $pn ?></h1>
<h1>Product Price:<?php echo $pp ?></h1>
<h1>Name:<?php echo $n ?></h1>
<h1>Phone:<?php echo $ph ?></h1>
<h1>Address:<?php echo $add ?></h1>
<?php } ?>