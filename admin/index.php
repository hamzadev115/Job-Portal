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
    <title>Empoyment-Express</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png'>
</head>

<body>
    <!-- Navbar Include -->
    <?php include('navbar.php') ?>

    <!-- sidenav Include -->
    <?php include('sidenav.php') ?>




    <div style="margin-top: 100px; width: 1000px; margin-left:250px" class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>New Rigisterd User</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style=" padding-left:30px">#id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Retype Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `user-register` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                   $id=$row['id'];
                                                   $name=$row['name'];
                                                   $email=$row['email'];
                                                   $pass=$row['password'];
                                                   $retype=$row['retype-password'];

                                                
                                                ?>

                                <tr>
                                    <td style="padding-left: 40px;"><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $pass; ?></td>
                                    <td><?php echo $retype; ?></td>



                                    <td><a href="view-register.php?id= <?php echo $id ?>"><button style="background-color:green;color:white"
                                                class="btn  btn-sm ">Details</button></a>
                                              
                                    </td>
                                </tr>
                                <?php
                                                    }
                                                }
                                                 ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px; width: 1000px; margin-left:250px" class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>New Rigisterd Companies</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style=" padding-left:30px">#id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>URL</th>
                                    <th>Password</th>
                                    <th>Retype Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `company-register` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                   $id=$row['id'];
                                                   $name=$row['name'];
                                                   $email=$row['email'];
                                                   $url=$row['url'];
                                                   $pass=$row['password'];
                                                   $retype=$row['retype-password'];

                                                
                                                ?>

                                <tr>
                                    <td style="padding-left: 40px;"><?php echo $id; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $url; ?></td>
                                    <td><?php echo $pass; ?></td>
                                    <td><?php echo $retype; ?></td>



                                    <td><a href="view-company-register.php"><button style="background-color:green;color:white"
                                                class="btn  btn-sm ">Details</button></a>
                                    </td>
                                </tr>
                                <?php
                                                    }
                                                }
                                                 ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/datatables/datatables.min.js"></script>
    <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/datatables.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>