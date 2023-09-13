<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:login.php");
}
?>
<?php
$msg='';
$id=$_GET['id'];



include('connection.php');
if(isset($_POST['submit'])){
    $img="../user/assets/img/catagories/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],$img);
    $cname=$_POST['cname'];
    $tjobs=$_POST['tjobs'];
    
    
    if($img==""){

    }
    else if($cname==""){

    }
    else if($tjobs==""){

    }
                            
                              else
                              {
                      $query="UPDATE `add-categories` SET `img`='$img',`cname`='$cname',`tjobs`='$tjobs'  WHERE id='$id'";
                  $run=mysqli_query($conect,$query);
                  if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:view-categories.php");
                   
                  }
                              }

                          }
?>
<!DOCTYPE html>
<html lang="en">


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

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

            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                    <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `add-categories` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                   $id=$row['id'];
                                                   $img=$row['img'];
                                                   $cname=$row['cname'];
                                                   $tjobs=$row['tjobs'];
                                                

                                                    }}
                                                ?>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-10 offset-lg-1">
                                <div class="card">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h4>Update Categories</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="cname" value="<?php echo $cname ?>" class="form-control" required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Email</label>
                                                <input class="form-control" value="<?php echo $tjobs ?>" name="tjobs" required="">
                                            </div>
                                            <div class="form-group mb-2">
                                            <label>Image</label>
                        <input type="file" name="img" class="form-control" required="">
                         <img src="<?php echo $img ?>" style='width: 20%;margin-top: 20px;'> 
                                            </div>
                                          


                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn" style="background-color: red;color:white" type="submit"
                                                name="submit">Update</button>
                                        </div>

                                    </form>
                                    <a href="logout.php">
                                        <input type="submit"
                                            style="width: 70px;height: 35px; margin-left: 1rem;margin-bottom: 10px; background-color:green;color:white"
                                            class="btn" value="Logout">

                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </section>
            </div>



        </div>
    </div>
    </div>
</body>

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