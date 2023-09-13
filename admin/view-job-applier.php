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
    .dataTables_filter {
        display: none;
    }

    .dataTables_length {
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
                                        <h4>View Job Applier</h4>
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
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Father Name</th>
                                                        <th>Cnic</th>
                                                        <th>Father Cnic</th>
                                                        <th>Religion</th>
                                                        <th> Marital Status</th>
                                                        <th>DOB</th>
                                                        <th>Domicile City</th>
                                                        <th>Postal Code</th>
                                                        <th>Address</th>
                                                        <th>Tehsil</th>
                                                        <th>Province</th>
                                                        <th>Matric Group</th>
                                                        <th>Passing year</th>
                                                        <th>Total Marks</th>
                                                        <th>Obtain Marks</th>
                                                        <th>Institute</th>
                                                        <th>Board</th>
                                                        <th>Roll No</th>
                                                        <th>Percentage</th>
                                                        <th>Inter Group</th>
                                                        <th>Passing year</th>
                                                        <th>Total Marks</th>
                                                        <th>Obtain Marks</th>
                                                        <th>Institute</th>
                                                        <th>Board</th>
                                                        <th>Roll No</th>
                                                        <th>Percentage</th>
                                                        <th>Bachelor Group</th>
                                                        <th>Passing year</th>
                                                        <th>Total Marks</th>
                                                        <th>Obtain Marks</th>
                                                        <th>Institute</th>
                                                        <th>Board</th>
                                                        <th>Roll No</th>
                                                        <th>Percentage</th>
                                                        <th>Resume</th>

                                                        <th>Action</th>

                                                    </tr>

                                                </thead>

                                                <tbody>
                                                    <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `applyjob` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                   $id=$row['id'];
                                                   $fname=$row['fname'];
                                                   $lname=$row['lname'];
                                                   $faname=$row['faname'];
                                                   $cnic=$row['cnic'];
                                                   $facnic=$row['facnic'];
                                                   $religion=$row['religion'];
                                                   $mstatus=$row['mstatus'];
                                                   $dob=$row['dob'];
                                                   $dcity=$row['dcity'];
                                                   $pcode=$row['pcode'];
                                                   $address=$row['address'];
                                                   $tehsil=$row['tehsil'];
                                                   $pname=$row['pname'];
                                                   $g1=$row['g1'];
                                                   $py1=$row['py1'];
                                                   $tm1=$row['tm1'];
                                                   $ob1=$row['ob1'];
                                                   $iname1=$row['iname1'];
                                                   $bname1=$row['bname1'];
                                                   $rn1=$row['rn1'];
                                                   $mp1=$row['mp1'];
                                                   $g2=$row['g2'];
                                                   $py2=$row['py2'];
                                                   $tm2=$row['tm2'];
                                                   $ob2=$row['ob2'];
                                                   $iname2=$row['iname2'];
                                                   $bname2=$row['bname2'];
                                                   $rn2=$row['rn2'];
                                                   $mp2=$row['mp2'];
                                                   $g3=$row['g3'];
                                                   $py3=$row['py3'];
                                                   $tm3=$row['tm3'];
                                                   $ob3=$row['ob3'];
                                                   $iname3=$row['iname3'];
                                                   $bname3=$row['bname3'];
                                                   $rn3=$row['rn3'];
                                                   $mp3=$row['mp3'];
                                                   $cv=$row['resume'];
                                                   
                                                  

                                                
                                                ?>

                                                    <tr>
                                                        <td style="padding-left: 40px;"><?php echo $id; ?></td>
                                                        <td><?php echo $fname; ?></td>
                                                        <td><?php echo $lname; ?></td>
                                                        <td><?php echo $faname; ?></td>
                                                        <td><?php echo $cnic; ?></td>
                                                        <td><?php echo $facnic; ?></td>
                                                        <td><?php echo $religion; ?></td>
                                                        <td><?php echo $mstatus; ?></td>
                                                        <td><?php echo $dob; ?></td>
                                                        <td><?php echo $dcity; ?></td>
                                                        <td><?php echo $pcode; ?></td>
                                                        <td><?php echo $address; ?></td>
                                                        <td><?php echo $tehsil; ?></td>
                                                        <td><?php echo $pname; ?></td>
                                                        <td><?php echo $g1; ?></td>
                                                        <td><?php echo $py1; ?></td>
                                                        <td><?php echo $tm1; ?></td>
                                                        <td><?php echo $ob1; ?></td>
                                                        <td><?php echo $iname1; ?></td>
                                                        <td><?php echo $bname1; ?></td>
                                                        <td><?php echo $rn1; ?></td>
                                                        <td><?php echo $mp1; ?></td>
                                                        <td><?php echo $g2; ?></td>
                                                        <td><?php echo $py2; ?></td>
                                                        <td><?php echo $tm2; ?></td>
                                                        <td><?php echo $ob2; ?></td>
                                                        <td><?php echo $iname2; ?></td>
                                                        <td><?php echo $bname2; ?></td>
                                                        <td><?php echo $rn2; ?></td>
                                                        <td><?php echo $mp2; ?></td>
                                                        <td><?php echo $g3; ?></td>
                                                        <td><?php echo $py3; ?></td>
                                                        <td><?php echo $tm3; ?></td>
                                                        <td><?php echo $ob3; ?></td>
                                                        <td><?php echo $iname3; ?></td>
                                                        <td><?php echo $bname3; ?></td>
                                                        <td><?php echo $rn3; ?></td>
                                                        <td><?php echo $mp3; ?></td>
                                                        <td><?php echo $cv; ?> </td>







                                                        <td><a href="delete-japplier.php?id= <?php echo $id ?>"><button
                                                                    style="background-color:red;color:white"
                                                                    class="btn  btn-sm ">Delete</button></a>
                                                                    <a href="ubdate-japplier.php?id= <?php echo $id ?>"><button
                                                                    style="background-color:green;color:white"
                                                                    class="btn  btn-sm ">Update</button></a>
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