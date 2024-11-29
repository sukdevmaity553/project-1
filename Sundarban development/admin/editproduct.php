<?php session_start(); 
if(!isset($_SESSION['admin_name'])){
    header("location:index.php");
}
$con=mysqli_connect("localhost","root","","phpgist");
$id=$_GET['eid'];
$sel="SELECT * FROM project WHERE id='$id'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Blank</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <style>
        .ck-content{
            height: 230px;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("admin_ins/sidebar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("admin_ins/top.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Product</h1>
<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
            <p>Category</p>
        <select name="cat">
                            <option value="">__Select Category__</option>
                            <option <?php if($row['category']=="Photo Frame"){echo "selected";} ?> value="Photo Frame">Photo Frame</option>
                            <option <?php if($row['category']=="Handmade Jewellery"){echo "selected";} ?> value="Handmade Jewellery">Handmade Jewellery</option>
                            <option <?php if($row['category']=="Embroidery"){echo "selected";} ?> value="Embroidery">Embroidery</option>
                            <option <?php if($row['category']=="Handbag maker"){echo "selected";} ?> value="Handbag maker">Handbag maker</option>
                            <option <?php if($row['category']=="Candle making"){echo "selected";} ?> value="Candle making">Candle making</option>
                            <option <?php if($row['category']=="Beauty products"){echo "selected";} ?> value="Beauty products ">Beauty products </option>
                            <option <?php if($row['category']=="Headbands"){echo "selected";} ?> value="Headbands">Headbands</option>
                            <option <?php if($row['category']=="Coasters"){echo "selected";} ?> value="Coasters">Coasters</option>
                            <option <?php if($row['category']=="Candles"){echo "selected";} ?> value="Candles">Candles</option>
                            <option <?php if($row['category']=="Pottery"){echo "selected";} ?> value="Pottery">Pottery</option>
                            <option <?php if($row['category']=="Paper flowers"){echo "selected";} ?> value="Paper flowers">Paper flowers</option>
                            <option <?php if($row['category']=="Art prints"){echo "selected";} ?> value="Art prints">Art prints</option>

</select>
<p>Product Name:</p>
<input type="text" name="pname" value="<?php echo $row['name'] ?>"/>
<p>Product Image:</p>
<input type="file" name="pimg"/> 
<p><img width="100px" src="prod_img/<?php echo $row['image'] ?>" /></p>                         
<p>Product Price:</p>
<input type="text" name="pprice" value="<?php echo $row['price']; ?>" />
<p>Product Description:</p>
<textarea name="pdes" id="editor"><?php echo $row['description']; ?></textarea>
<script>
ClassicEditor
        .create( document.querySelector( '#editor' ) );
       
</script>
<p><input type="submit" name="save" value="Add Product"/></p>
</form>
</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("admin_ins/footer.php"); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
  

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>