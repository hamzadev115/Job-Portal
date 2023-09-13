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
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $massage=$_POST['massage'];
    
    if($name==""){

    }
    if($email==""){

    }
    if($subject==""){

    }
    if($massage==""){

    }
                            
                              else
                              {
                      $query="UPDATE `contactus` SET `name`='$name',`email`='$email',`subject`='$subject',`massage`='$massage' WHERE id='$id'";
                  $run=mysqli_query($conect,$query);
                  if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:view-contactus.php");
                   
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
                                                $query="SELECT * FROM `contactus` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                   $id=$row['id'];
                                                   $name=$row['name'];
                                                   $email=$row['email'];
                                                   $sub=$row['subject'];
                                                   $massage=$row['massage'];

                                                    }}
                                                ?>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-10 offset-lg-1">
                                <div class="card">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="card-header">
                                            <h4>Update Contact Us</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" value="<?php echo $name ?>" class="form-control" required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Email</label>
                                                <input class="form-control" value="<?php echo $email ?>" name="email" required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Subject</label>
                                                <input class="form-control" value="<?php echo $sub ?>"  name="subject"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Massage</label>
                                                <textarea class="form-control"  name="massage" id="" cols="30"
                                                    rows="10"><?php echo $massage ?></textarea>
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