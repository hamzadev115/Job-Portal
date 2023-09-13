<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:login.php");
}
?>
<?php $msg='';
if (isset($_GET['msg'])) {
  $msg=$_GET['msg'];
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- datatables.html  21 Nov 2019 03:55:21 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Employement-Express</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />
    <style>
        .dataTables_filter{
            display: none;
        }
        .dataTables_length{
            display: none;
        }
       
    </style>
</head>

<body>
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

    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>View New Posted Jobs </h4>
                                    </div>
                                    <?php
                  if ($msg=='') {
                    
                  }
                  else{
                      echo "<div class='alert alert-success ml-5 mr-5'>Data Deleted <b>Successfully</b></div>";
                  }  
                   ?>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover" id="save-stage"
                                                style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th style=" padding-left:30px">#id</th>
                                                        <th>Image</th>
                                                        <th>Job Title</th>
                                                        <th>Company Name</th>
                                                        <th>Location</th>
                                                        <th>Open Job</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `add-companies` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                   $id=$row['id'];
                                                   $img=$row['img1'];
                                                   $jtitle=$row['jtitle'];
                                                   $cname=$row['cname'];
                                                   $location=$row['location'];
                                                   $category=$row['vaccanicies'];
                                                  

                                                
                                                ?>

                                                    <tr>
                                                        <td style="padding-left: 40px;"><?php echo $id; ?></td>
                                                        <td><?php echo $img; ?></td>
                                                        <td><?php echo $jtitle; ?></td>
                                                        <td><?php echo $cname; ?></td>
                                                        <td><?php echo $location; ?></td>
                                                        <td><?php echo $category; ?></td>
                                                       



                                                        <td><a href="delete-tcompany.php?id= <?php echo $id ?>"><button style="background-color:red;color:white" class="btn  btn-sm ">Delete</button></a>
                                                        <a href="delete-subcribe.php?id= <?php echo $id ?>"><button style="background-color:green;color:white" class="btn  btn-sm ">Update</button></a>

                                                        </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                }
                                                 ?>


                                                </tbody>
                                            </table>
                                            <a href="logout.php">
                                                <input type="submit"
                                                    style="width: 80px;height: 35px; margin-left: 1rem;margin-bottom: 10px; margin-top: 2rem; background-color:green;color:white"
                                                    class="btn    " value="Logout">

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               
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


<!-- datatables.html  21 Nov 2019 03:55:25 GMT -->

</html>