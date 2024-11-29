<?php session_start(); 
if(!isset($_SESSION['admin_name'])){
    header("location:index.php");
}

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
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <p>Category</p>
                        <select name="cat">
                        <option value="">All Categories</option>
						<option value="Honey">Honey</option>
						<option value="Fish and Seafood">Fish and Seafood</option>
						<option value="Timber and Wood Products ">Timber and Wood Products</option>
						<option value="Nipa Palm Products">Nipa Palm Products</option>
						<option value="Medicinal Plants">Medicinal Plants</option>
						<option value="Agricultural Products">Agricultural Products</option>
						<option value="Processed Seafood">Processed Seafood</option>
						<option value="Honey-Based Products">Honey-Based Products</option>
						<option value="Wood and Bamboo Products">Wood and Bamboo Products</option>
						<option value="Handicrafts">Handicrafts</option>
						<option value="Nipa Palm Derivatives">Nipa Palm Derivatives</option>
                        </select>
                        <p>Product Name:</p>
                        <input type="text" name="pname"/>
                        <p>Product Image:</p>
                        <input type="file" name="pimg"/>                          
                        <p>Product Price:</p>
                        <input type="text" name="pprice"/>
                        <p>Product Description:</p>
                        <textarea name="pdes" id="editor"></textarea>
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