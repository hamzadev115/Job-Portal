<?php session_start();?>
<!DOCTYPE html>
<html lang="en">


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Employement-Express</title>
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
    
    <!-- Navbar Include -->
<?php include('navbar.php') ?>

<!-- sidenav Include -->
<?php include('sidenav.php') ?>

     
      <!-- Main Content -->
      <div class="main-content">
        <section class="section" style=" width: 800px; margin-top:20px;margin-left:50px">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-10 offset-lg-1">
                <div class="card">
                  <form action="#" method="POST" >
                    <div class="card-header">
                      <h4>Login</h4>
                    </div>
                    <div class="card-body">
                     
                      
                      <div class="form-group">
                        <label>Email</label>
                        <input type="emial" autocomplete="off" name="email" class="form-control" required="">
                      </div>
                     
                      
                      <div class="form-group mb-0">
                        <label>Password</label>
                           <input type="password" autocomplete="off" name="password" class="form-control" required="">
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type="submit" name="submitt">Submit</button>
                    </div>
                  </form>
                  <?php
                          include 'connection.php';
                          if (isset($_POST['submitt'])) {
                
                        
                              
                            
                             $email=$_POST['email'];
                            $password=$_POST['password'];
                          
                               $query="SELECT * FROM `admin-panel-access` WHERE email='".$email."' and password='".$password."'";
               $run=mysqli_query($conect,$query);
                      if (mysqli_num_rows($run)>0) {
                
                $_SESSION['id']=1;
                echo "<script>window.location.href='index.php';</script>";
                  }
              else{
                echo "Invalid Login Details";
              }
            }
           ?>
                
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