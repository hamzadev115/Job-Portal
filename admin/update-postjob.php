<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:login.php");
}
?>
<?php
$msg='';
$id=$_GET['id'];



include("connection.php");
if(isset($_POST['submit'])){
    $jtitle=$_POST['jtitle'];
    $cname=$_POST['cname'];
    $location=$_POST['location'];
    $category=$_POST['category'];
    $time=$_POST['time'];
    $postdate=$_POST['postdate'];
    $closedate=$_POST['closedate'];
    $description=$_POST['description'];
    $need=$_POST['need'];
    $website=$_POST['website'];
    $howapply=$_POST['howapply'];
    $salary=$_POST['salary'];
    $map=$_POST['map'];
    $image="../user/assets/img/jobs/".$_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
    if($jtitle==""){

    }
    elseif($image==""){

    }
 
                            
                              else
                              {
                      $query="UPDATE `postjob` SET `jtitle`='$jtitle',`cname`='$cname',`location`='$location',`category`='$category',`time`='$time',`postdate`='$postdate',`closedate`='$closedate',`description`='$description',`need`='$need',`website`='$website',`howapply`='$howapply',`salary`='$salary',`map`='$map',`img`='$image' WHERE id='$id'";
                  $run=mysqli_query($conect,$query);
                  if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:view-postedjob.php");
                   
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
                                                   $query="SELECT * FROM `postjob` WHERE 1";
                                                   $run=mysqli_query($conect,$query);
                                                   if(mysqli_num_rows($run)>0){
                                                       while($row=mysqli_fetch_array($run)){
                                                      $id=$row['id'];
                                                      $jtitle=$row['jtitle'];
                                                      $cname=$row['cname'];
                                                      $location=$row['location'];
                                                      $category=$row['category'];
                                                      $time=$row['time'];
                                                      $postdate=$row['postdate'];
                                                      $closedate=$row['closedate'];
                                                      $description=$row['description'];
                                                      $need=$row['need'];
                                                      $website=$row['website'];
                                                      $howapply=$row['howapply'];
                                                      $salary=$row['salary'];
                                                      $map=$row['map'];
                                                      $image=$row['img'];

                                                    }}
                                                ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-10 offset-lg-1">
                                <div class="card">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h4>Update Poted Jobs</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Job Title</label>
                                                <input type="text" name="jtitle" value="<?php echo $jtitle ?>"
                                                    class="form-control" required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Company Name</label>
                                                <input class="form-control" value="<?php echo $cname ?>" name="cname"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Location</label>
                                                <input class="form-control" value="<?php echo $location ?>" name="location"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Category</label>
                                                <input class="form-control" value="<?php echo $category ?>" name="catagory"
                                                    required="">
                                            </div>

                                            <div class="form-group mb-2">
                                                <label>Time</label>
                                                <input class="form-control" value="<?php echo $time ?>" name="time"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Post Date</label>
                                                <input class="form-control" value="<?php echo $postdate ?>" name="postdate"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Closing Date</label>
                                                <input class="form-control" value="<?php echo $closedate ?>" name="closedate"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Description</label>
                                                <textarea class="form-control" name="description" id="" cols="30"
                                                    rows="10"><?php echo $description ?></textarea>

                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Need For Jobs</label>
                                                <textarea class="form-control" name="need" id="" cols="30"
                                                    rows="10"><?php echo $need ?></textarea>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Website Link</label>
                                                <input class="form-control" value="<?php echo $website ?>" name="website"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>How to Apply</label>
                                                <input class="form-control" value="<?php echo $howapply ?>" name="howapply"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Salary</label>
                                                <input class="form-control" value="<?php echo $salary ?>" name="salary"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Map URL</label>
                                                <input class="form-control" value="<?php echo $map ?>" name="map"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control" required="">
                                                <img src="<?php echo $image ?>" style='width: 10%;margin-top: 20px;border:1px solid #eeeeee;padding: 10px;'> 
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