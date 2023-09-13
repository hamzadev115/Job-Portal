<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Emplyement-Express</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <!-- navbar Start -->
            <?php
    include('navbar.php');
  ?>
            <!-- navbar end -->

            <!-- Sidebar Start -->
            <?php
    include('sidenav.php');
  ?>
            <!-- Sidebar end -->


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-10 offset-lg-1">
                                <div class="card">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h4>Add Categories</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" autocomplete="off" name="img" class="form-control" required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Category Name</label>
                                                <input class="form-control" autocomplete="off" placeholder="Category Name " name="cname"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Total Jobs</label>
                                                <input class="form-control" autocomplete="off" placeholder="Total Jobs" name="tjobs"
                                                    required="">
                                            </div>
                                         

                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn" style="background-color: red;color:white" type="submit"
                                                name="submit">Submit</button>
                                        </div>

                                    </form>
                                    <?php
 include('connection.php');
if(isset($_POST['submit'])){
    $img="../user/assets/img/catagories/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],$img);
    $cname=$_POST['cname'];
    $tjobs=$_POST['tjobs'];
    
    
    if($img==""){

    }
    if($cname==""){

    }
    if($tjobs==""){

    }
   
else {
 $query="INSERT INTO `add-categories`(`img`, `cname`, `tjobs`) VALUES ('$img','$cname','$tjobs')";
 $result=mysqli_query($conect,$query);
if(!$result){
    echo "data not inserted";
}
else
{
  echo "<div class='alert alert-success mt-3 ' style='margin-left:40px;margin-right:50px'  > Your Massage is Submitted</div>";
}

}

}

?>
                                    <a href="logout.php">
                                        <input type="submit"
                                            style="width: 70px;height: 35px; margin-left: 1rem;margin-bottom: 10px; background-color:green;color:white"
                                            class="btn" value="Logout">

                                    </a>
                                </div>
                            </div>
                </section>
            </div>
        </div>
        <!-- General JS Scripts -->
        <script src="assets/js/app.min.js"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <!-- Template JS File -->
        <script src="assets/js/scripts.js"></script>
        <!-- Custom JS File -->
        <script src="assets/js/custom.js"></script>
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html>