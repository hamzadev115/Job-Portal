
<?php
                        include('connection.php');
                        if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$fathername=$_POST['fathername'];
$cnic=$_POST['cnic'];
$fathercnic=$_POST['fathercnic'];
$religion=$_POST['religion'];
$status=$_POST['status'];
$dob=$_POST['dob'];
$dcity=$_POST['dcity'];
$pcode=$_POST['pcode'];
$paddress=$_POST['paddress'];
$tname=$_POST['tname'];
$province=$_POST['province'];
$g1=$_POST['g1'];
$py1=$_POST['py1'];
$tm1=$_POST['tm1'];
$obtainm1=$_POST['obtainm1'];
$iname1=$_POST['iname1'];
$bn1=$_POST['bn1'];
$rn1=$_POST['rn1'];
$mp1=$_POST['mp1'];
$group2=$_POST['group2'];
$py2=$_POST['py2'];
$tm2=$_POST['tm2'];
$obtainm2=$_POST['obtainm2'];
$iname2=$_POST['iname2'];
$bn2=$_POST['bn2'];
$rn2=$_POST['rn2'];
$mp2=$_POST['mp2'];
$group3=$_POST['group3'];
$py3=$_POST['py3'];
$tm3=$_POST['tm3'];
$obtainm3=$_POST['obtainm3'];
$iname3=$_POST['iname3'];
$bn3=$_POST['bn3'];
$rn3=$_POST['rn3'];
$mp3=$_POST['mp3'];

$cv="./assets/resume/".$_FILES['cv']['name'];
move_uploaded_file($_FILES['cv']['tmp_name'],$cv);
if($fname==""){

}
else{

    $query="INSERT INTO `applyjob`(`fname`, `lname`, `faname`, `cnic`, `facnic`, `religion`, `mstatus`, `dob`, `dcity`, `pcode`, `address`, `tehsil`, `pname`, `g1`, `py1`, `tm1`, `ob1`, `iname1`, `bname1`, `rn1`, `mp1`, `g2`, `py2`, `tm2`, `ob2`, `iname2`, `bname2`, `rn2`, `mp2`, `g3`, `py3`, `tm3`, `ob3`, `iname3`, `bname3`, `rn3`, `mp3`, `resume`) 
    VALUES ('$fname','$lname','$fathername','$cnic','$fathercnic','$religion','$status','$dob','$dcity','$pcode','$paddress','$tname','$province','$g1','$py1','$tm1','$obtainm1','$iname1','$bn1','$rn1','$mp1','$group2','$py2','$tm2','$obtainm2','$iname2','$bn2','$rn2','$mp2','$group3','$py3','$tm3','$obtainm3','$iname3','$obtainm3','$rn3','$mp3','$cv')";
    $result=mysqli_query($conect,$query);
    if (!$result) {
        echo "data not inserted"; 
      }
     else
      {
        header("Location:user-profile.php");
      } 
}

                        }
                        ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Employement-Express</title>
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.png' />


    <link rel="stylesheet"
        href="assets/css/A.bootstrap.min.css%20line-icons.css%20owl.carousel.min.css%20owl.theme.default.css%20slicknav.min.css%20animate.css%20summernote.css%2CMcc.yiDw6M1ox2.css.pagespeed.cf.eqTfAxm-vg.css">
    <link rel="stylesheet"
        href="assets/css/A.main.css%20responsive.css%2CMcc.KlRZ5R48t-.css.pagespeed.cf.v1wuBUF-8Y.css">
</head>

<body>


    <!-- header code include here -->
    <?php include('header.php') ?>
    <!-- header code end here -->


    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Apply For Job</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-xs-12">
                    <div class="post-job box">
                        <h3 style="font-size: 20px; font-weight:600" class="job-title">Personal Information</h3>
                        <form method="POST" enctype="multipart/form-data" class="form-ad">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <input type="text" autocomplete="off" name="fname" class="form-control" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" autocomplete="off" name="lname" class="form-control" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Father Name</label>
                                        <input type="text" autocomplete="off" name="fathername" class="form-control" placeholder="Enter Your Father Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label"> Cnic</label>
                                        <input type="text" autocomplete="off" name="cnic" class="form-control" placeholder="Enter Your CNIC">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Father CNIC</label>
                                        <input type="text" autocomplete="off" name="fathercnic" class="form-control" placeholder="Enter Your Father CNIC">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Religon</label>
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select name="religion" class="dropdown-product selectpicker">
                                                    <option>Religion</option>
                                                    <option>Muslim</option>
                                                    <option>NON MUSLIM</option>

                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Marital Status</label>
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select name="status" class="dropdown-product selectpicker">
                                                    <option>Marital Status</option>
                                                    <option>Married</option>
                                                    <option>Unmarried</option>

                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Date of Birth</label>
                                        <input type="date"  name="dob" class="form-control" placeholder="Enter Your Father Name">
                                    </div>
                                </div>
                                
                            </div>

                            <h3 style="font-size: 20px; font-weight:600" class="job-title mt-5">Address Information</h3>
                        <form class="form-ad">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Domicile City</label>
                                        <input type="text" autocomplete="off" name="dcity" class="form-control" placeholder="Enter Your Domicile City">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Postal Code</label>
                                        <input type="text" autocomplete="off" name="pcode" class="form-control" placeholder="Enter Your Postal Code">
                                    </div>
                                </div>
                            </div>

                                    <div class="form-group">
                                        <label class="control-label">Permanent Address</label>
                                        <input type="text" autocomplete="off" name="paddress" class="form-control" placeholder="Enter Your Permanent Address">
                                    </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Tehsil Name</label>
                                        <input type="text" autocomplete="off" name="tname" class="form-control" placeholder="Enter Your Tehsil">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Province</label>
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select name="province" class="dropdown-product selectpicker">
                                                    <option>Province Name</option>
                                                    <option>Punjab</option>
                                                    <option>Sindh</option>
                                                    <option>Balochistan</option>
                                                    <option>KPK</option>

                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            





                            <h3 style="font-size: 20px; font-weight:600" class="job-title mt-5">Educatinal Information</h3>
                            <h3 style="font-size: 20px; font-weight:500" class="job-title mt-5">Matric</h3>
                            <form class="form-ad">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label class="control-label">Group</label>
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select name="g1" class="dropdown-product selectpicker">
                                                    <option>Science</option>
                                                    <option>ARTS</option>
                                        
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Pssing Year</label>
                                        <input type="text"  autocomplete="off" name="py1" class="form-control" placeholder="Passing Year">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Total Marks</label>
                                        <input type="text" autocomplete="off" name="tm1" class="form-control" placeholder="Total Marks">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Obtain Marks</label>
                                        <input type="text" autocomplete="off" name="obtainm1" class="form-control" placeholder="Obtain Marks">
                                    </div>
                                </div>
                            </div>

                                    <div class="form-group">
                                        <label class="control-label">Institute Name</label>
                                        <input type="text" autocomplete="off" name="iname1" class="form-control" placeholder="Enter Your Instiute Name">
                                    </div>

                                    <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label class="control-label"> Board Name</label>
                                        <input type="text" autocomplete="off" name="bn1" class="form-control" placeholder="Enter Board Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Roll Number</label>
                                        <input type="text" autocomplete="off" name="rn1" class="form-control" placeholder="Enter Roll No">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label"> Marks Percentage</label>
                                        <input type="text" autocomplete="off" name="mp1" class="form-control" placeholder=" Enter Marks Percentage">
                                    </div>
                                </div>
                               

                                
                            </div>


                            <h3 style="font-size: 20px; font-weight:500" class="job-title mt-5">Intermediate</h3>
                            <form class="form-ad">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label class="control-label">Group</label>
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select name="group2" class="dropdown-product selectpicker">
                                                    <option>Science</option>
                                                    <option>ARTS</option>
                                        
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Pssing Year</label>
                                        <input type="text" autocomplete="off" name="py2" class="form-control" placeholder="Passing Year">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Total Marks</label>
                                        <input type="text" autocomplete="off" name="tm2" class="form-control" placeholder="Total Marks">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Obtain Marks</label>
                                        <input type="text" autocomplete="off" name="obtainm2" class="form-control" placeholder="Obtain Marks">
                                    </div>
                                </div>
                            </div>

                                    <div class="form-group">
                                        <label class="control-label">Institute Name</label>
                                        <input type="text" autocomplete="off" name="iname2" class="form-control" placeholder="Enter Your Instiute Name">
                                    </div>

                                    <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label class="control-label"> Board Name</label>
                                        <input type="text" autocomplete="off" name="bn2" class="form-control" placeholder="Enter Board Name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Roll Number</label>
                                        <input type="text" autocomplete="off" name="rn2" class="form-control" placeholder="Enter Roll No">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label"> Marks Percentage</label>
                                        <input type="text" autocomplete="off" name="mp2" class="form-control" placeholder=" Enter Marks Percentage">
                                    </div>
                                </div>
                                    </div>

                                    <h3 style="font-size: 20px; font-weight:500" class="job-title mt-5">Bachelors</h3>
                            <form class="form-ad">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label class="control-label">Group</label>
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select name="group3" class="dropdown-product selectpicker">
                                                    <option>Science</option>
                                                    <option>ARTS</option>
                                        
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Pssing Year</label>
                                        <input type="text" autocomplete="off" name="py3" class="form-control" placeholder="Passing Year">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Total Marks/CGP</label>
                                        <input type="text" autocomplete="off" name="tm3" class="form-control" placeholder="Total Marks">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Obtain Marks/CGP</label>
                                        <input type="text" autocomplete="off" name="obtainm3" class="form-control" placeholder="Obtain Marks">
                                    </div>
                                </div>
                            </div>

                                    <div class="form-group">
                                        <label class="control-label">Institute Name</label>
                                        <input type="text" autocomplete="off" name="iname3" class="form-control" placeholder="Enter Your Instiute Name">
                                    </div>

                                    <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="form-group">
                                        <label class="control-label">Registration No</label>
                                        <input type="text" autocomplete="off" name="bn3" class="form-control" placeholder="Enter Registration No">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Roll Number</label>
                                        <input type="text" autocomplete="off" name="rn3" class="form-control" placeholder="Enter Roll No">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">  Percentage</label>
                                        <input type="text" autocomplete="off" name="mp3" class="form-control" placeholder=" Enter Marks Percentage">
                                    </div>
                                </div>
                          
                                





                            <h3 style="font-size: 20px; font-weight:500" class="job-title mt-5">Submit Your CV</h3>


                            <div class="custom-file mb-4 mt-1">
                                <input type="file" name="cv"  class="custom-file-input"  id="validatedCustomFile" >
                                <label    class="custom-file-label form-control" style="height:35px;padding-top:5px" for="validatedCustomFile">Choose
                                    file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                            <input type="submit" name="submit" class="btn btn-common" value="Submit your job" >

                        </form>

     


                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer code include here -->
    <?php include('footer.php') ?>
    <!-- footer code end here -->


    <script src="assets/js/jquery-min.js.pagespeed.jm.BnirE05kB4.js"></script>
    <script src="assets/js/popper.min.js%20bootstrap.min.js%20color-switcher.js.pagespeed.jc.7E4RbgVtAo.js"></script>
    <script>
    eval(mod_pagespeed_InpbBTYwHt);
    </script>
    <script>
    eval(mod_pagespeed_gIM$J3j2sR);
    </script>
    <script>
    eval(mod_pagespeed_4FaVC46jxj);
    </script>
    <script
        src="assets/js/owl.carousel.min.js%20jquery.slicknav.js%20jquery.counterup.min.js%20waypoints.min.js%20form-validator.min.js%20contact-form-script.js.pagespeed.jc.vRoumgJI2c.js">
    </script>
    <script>
    eval(mod_pagespeed_K5A1v5sVzq);
    </script>
    <script>
    eval(mod_pagespeed_MyfmzX4w$S);
    </script>
    <script>
    eval(mod_pagespeed_TJW$XqopPF);
    </script>
    <script>
    eval(mod_pagespeed_lcciB7$x3S);
    </script>
    <script>
    eval(mod_pagespeed_N2Uk46qKbO);
    </script>
    <script>
    eval(mod_pagespeed__$qPrp0sjt);
    </script>
    <script src="assets/js/summernote.js.pagespeed.jm.KNLg9W_Jfz.js"></script>
    <script>
    (function($) {
        "use strict";
        var $main_window = $(window);
        $main_window.on("load", function() {
            $("#preloader").fadeOut("slow");
        });
        $main_window.on("scroll", function() {
            if ($(this).scrollTop() > 250) {
                $(".back-to-top").fadeIn(200);
            } else {
                $(".back-to-top").fadeOut(200);
            }
        });
        $(".back-to-top").on("click", function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });
        var logo_path = $('.mobile-menu').data('logo');
        $('#main-navbar').slicknav({
            appendTo: '.mobile-menu',
            removeClasses: false,
            label: '',
            closedSymbol: '<i class="lni-chevron-right"><i/>',
            openedSymbol: '<i class="lni-chevron-down"><i/>',
            brand: '<a href="index.html"><img src="' + logo_path +
                '" class="img-responsive" alt="logo"></a>'
        });
        $main_window.on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                $(".scrolling-navbar").addClass("top-nav-collapse");
            } else {
                $(".scrolling-navbar").removeClass("top-nav-collapse");
            }
        });
        if ($(".fact-count").length > 0) {
            $(".counter").counterUp({
                delay: 10,
                time: 500
            });
        }
        var testiOwl = $("#testimonials");
        testiOwl.owlCarousel({
            autoplay: true,
            margin: 30,
            dots: true,
            autoplayHoverPause: true,
            nav: false,
            loop: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                991: {
                    items: 1
                }
            }
        });
        var newproducts = $("#new-products");
        newproducts.owlCarousel({
            autoplay: true,
            nav: true,
            autoplayHoverPause: true,
            smartSpeed: 350,
            dots: false,
            margin: 30,
            loop: true,
            navText: ['<i class="lni-chevron-left"></i>', '<i class="lni-chevron-right"></i>'],
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                },
                575: {
                    items: 2,
                },
                991: {
                    items: 3,
                }
            }
        });
    })(jQuery);
    </script>
    <script>
    $('#summernote').summernote({
        height: 250,
        minHeight: null,
        maxHeight: null,
        focus: false
    });
    </script>
    <script>
    (function() {
        var js =
            "window['__CF$cv$params']={r:'7cc3d25d6da5563b',m:'ax7eyXiXySNT82y1TXtySoaN9ziRmKcRIlADaRci4CY-1684913305-0-AcSKyFnBpuAWy3xii9OK0jKBZkJO3xz5JPmMWO523Z8R',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.nonce = '';
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }
        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function() {};
            document.onreadystatechange = function(e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();
    </script>
    <script defer="" src="../../beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816"
        integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw=="
        data-cf-beacon='{"rayId":"7cc3d25d6da5563b","version":"2023.4.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>