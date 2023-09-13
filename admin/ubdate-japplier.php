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
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$faname=$_POST['faname'];
$cnic=$_POST['cnic'];
$facnic=$_POST['facnic'];
$religion=$_POST['religion'];
$mstatus=$_POST['mstatus'];
$dob=$_POST['dob'];
$dcity=$_POST['dcity'];
$pcode=$_POST['pcode'];
$address=$_POST['address'];
$tehsil=$_POST['tehsil'];
$pname=$_POST['pname'];

$g1=$_POST['g1'];
$py1=$_POST['py1'];
$tm1=$_POST['tm1'];
$ob1=$_POST['ob1'];
$iname1=$_POST['iname1'];
$bname1=$_POST['bname1'];
$rn1=$_POST['rn1'];
$mp1=$_POST['mp1'];

$g2=$_POST['g2'];
$py2=$_POST['py2'];
$tm2=$_POST['tm2'];
$ob2=$_POST['ob2'];
$iname2=$_POST['iname2'];
$bname2=$_POST['bname2'];
$rn2=$_POST['rn2'];
$mp2=$_POST['mp2'];

$g3=$_POST['g3'];
$py3=$_POST['py3'];
$tm3=$_POST['tm3'];
$ob3=$_POST['ob3'];
$iname3=$_POST['iname3'];
$bname3=$_POST['bname3'];
$rn3=$_POST['rn3'];
$mp3=$_POST['mp3'];

$cv1="../user/assets/img/".$_FILES['cv1']['name'];
move_uploaded_file($_FILES['cv1']['tmp_name'],$cv1);
if($fname==""){

}
   
                            
                              else
                              {
                      $query="UPDATE `applyjob` SET `fname`='$fname',`lname`='$lname',`faname`='$faname',`cnic`='$cnic',`facnic`='$facnic',`religion`='$religion',`mstatus`='$mstatus',`dob`='$dob',`dcity`='$dcity',`pcode`='$pcode',`address`='$address',`tehsil`='$tehsil',`pname`='$pname',`g1`='$g1',`py1`='$py1',`tm1`='$tm1',`ob1`='$ob1',`iname1`='$iname1',`bname1`='$bname1',`rn1`='$rn1',`mp1`='$mp1',`g2`='$g2',`py2`='$py2',`tm2`='$tm2',`ob2`='$ob2',`iname2`='$iname2',`bname2`='$bname2',`rn2`='$rn2',`mp2`='$mp2',`g3`='$g3',`py3`='$py3',`tm3`='$tm3',`ob3`='$ob3',`iname3`='$iname3',`bname3`='$bname3',`rn3`='$rn3',`mp3`='$mp3',`resume`='$cv1' WHERE id='$id'";
                  $run=mysqli_query($conect,$query);
                  if (!$run) {
      echo "<script>alert('Data Not Inserted')</script>";
    }
    else{
      $msg=1;
       header("Location:view-job-applier.php");
                   
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
                                                <label>First Name</label>
                                                <input type="text" name="fname" value="<?php echo $fname ?>"
                                                    class="form-control" required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Last Name</label>
                                                <input class="form-control" value="<?php echo $lname ?>" name="lname"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Father Name</label>
                                                <input class="form-control" value="<?php echo $faname ?>" name="faname"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Cnic</label>
                                                <input class="form-control" value="<?php echo $cnic ?>" name="cnic"
                                                    required="">
                                            </div>

                                            <div class="form-group mb-2">
                                                <label>Father Cnic</label>
                                                <input class="form-control" value="<?php echo $facnic ?>" name="facnic"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Religion</label>
                                                <input class="form-control" value="<?php echo $religion ?>" name="religion"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Marital Status</label>
                                                <input class="form-control" value="<?php echo $mstatus ?>" name="mstatus"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>DOB</label>
                                                <input class="form-control" value="<?php echo $dob ?>" name="dob"
                                                    required="">

                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Domicile City</label>
                                                <input class="form-control" value="<?php echo $dcity ?>" name="dcity"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Postal Code</label>
                                                <input class="form-control" value="<?php echo $pcode ?>" name="pcode"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Address</label>
                                                <input class="form-control" value="<?php echo $address ?>" name="address"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Tehsil</label>
                                                <input class="form-control" value="<?php echo $tehsil ?>" name="tehsil"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Province</label>
                                                <input class="form-control" value="<?php echo $pname ?>" name="pname"
                                                    required="">
                                            </div>

                                            <div class="form-group mb-2">
                                                <label>Matric Group</label>
                                                <input class="form-control" value="<?php echo $g1 ?>" name="g1"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Passing year</label>
                                                <input class="form-control" value="<?php echo $py1 ?>" name="py1"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Total Marks</label>
                                                <input class="form-control" value="<?php echo $tm1 ?>" name="tm1"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Obtain Marks</label>
                                                <input class="form-control" value="<?php echo $ob1 ?>" name="ob1"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Institute</label>
                                                <input class="form-control" value="<?php echo $iname1 ?>" name="iname1"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Board</label>
                                                <input class="form-control" value="<?php echo $bname1 ?>" name="bname1"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Roll No</label>
                                                <input class="form-control" value="<?php echo $rn1 ?>" name="rn1"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Percentage</label>
                                                <input class="form-control" value="<?php echo $mp1 ?>" name="mp1"
                                                    required="">
                                            </div>


                                            <div class="form-group mb-2">
                                                <label>Inter Group</label>
                                                <input class="form-control" value="<?php echo $g2 ?>" name="g2"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Passing year</label>
                                                <input class="form-control" value="<?php echo $py2 ?>" name="py2"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Total Marks</label>
                                                <input class="form-control" value="<?php echo $tm2 ?>" name="tm2"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Obtain Marks</label>
                                                <input class="form-control" value="<?php echo $ob2 ?>" name="ob2"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Institute</label>
                                                <input class="form-control" value="<?php echo $iname2 ?>" name="iname2"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Board</label>
                                                <input class="form-control" value="<?php echo $bname2 ?>" name="bname2"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Roll No</label>
                                                <input class="form-control" value="<?php echo $rn2 ?>" name="rn2"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Percentage</label>
                                                <input class="form-control" value="<?php echo $mp2 ?>" name="mp2"
                                                    required="">
                                            </div>




                                            <div class="form-group mb-2">
                                                <label>Bachelor Group</label>
                                                <input class="form-control" value="<?php echo $g3 ?>" name="g3"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Passing year</label>
                                                <input class="form-control" value="<?php echo $py3 ?>" name="py3"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Total Marks</label>
                                                <input class="form-control" value="<?php echo $tm3 ?>" name="tm3"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Obtain Marks</label>
                                                <input class="form-control" value="<?php echo $ob3 ?>" name="ob3"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Institute</label>
                                                <input class="form-control" value="<?php echo $iname3 ?>" name="iname3"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Board</label>
                                                <input class="form-control" value="<?php echo $bname3 ?>" name="bname3"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Roll No</label>
                                                <input class="form-control" value="<?php echo $rn3 ?>" name="rn3"
                                                    required="">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Percentage</label>
                                                <input class="form-control" value="<?php echo $mp3 ?>" name="mp3"
                                                    required="">
                                            </div>




                                            <div class="form-group mb-2">
                                                <label>CV</label>
                                                <input type="file" name="cv1" class="form-control" required="">
                                               
                                                <!-- <object src="" style='width: 30%;margin-top: 50px;border:1px solid #eeeeee;padding: 10px;'>  -->
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