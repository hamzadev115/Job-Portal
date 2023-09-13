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
       header("Location:employe-profile.php");
                   
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
                        <h3>Post A Job</h3>
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
                    <?php
                                                   include('connection.php');
                                                   $id=$_GET['id'];
                                                   $query="SELECT * FROM `postjob` WHERE id='$id'";
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
                        <h3 class="job-title">Post a new Job</h3>
                        <form class="form-ad" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label">Job Title</label>
                                <input type="text" autocomplete="off"  value="<?php echo $jtitle ?>" name="jtitle" class="form-control" placeholder="Write job title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Company</label>
                                <input type="text" autocomplete="off"  value="<?php echo $cname ?>" name="cname" class="form-control" placeholder="Write company name">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Location <span>(optional)</span></label>
                                <input type="text"  value="<?php echo $location ?>" autocomplete="off" name="location" class="form-control" placeholder="e.g.Lahore">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Category</label>
                                <div class="search-category-container">
<label class="styled-select">

<select name="catagory" class="dropdown-product selectpicker"><option> <?php echo $category ?></option>
    <?php
    include('connection.php');
    $query="SELECT * FROM `add-categories` WHERE 1";
    $run=mysqli_query($conect,$query);
    if(mysqli_num_rows($run)>0){
        while($row=mysqli_fetch_array($run)){
            $id=$row['id'];
      $companyname=$row['cname'];
     
    ?>
<option value="<?php echo $companyname ?>" ><?php echo $companyname ?></option>
   
<?php
                                                    }}
            ?>
</select>
</label>
</div>

            
                            </div>
                            <div class="form-group">
                                <label class="control-label">Time</label>
                                <div class="search-category-container">
                                    <label class="styled-select">
<select name="time" class="dropdown-product selectpicker">
<option> <?php echo $time ?></option>
<option>Full Time</option>
<option>Part Time</option>
<option>Night Shift</option>

</select>
</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Post Date </label>
                                <input name="postdate"  value="<?php echo $postdate ?>" autocomplete="off" type="Date" class="form-control" placeholder="Post Date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Closing Date </label>
                                <input name="closedate"  value="<?php echo $closedate ?>" autocomplete="off" type="Date" class="form-control" placeholder="Closing Date">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description</label>
                                <textarea name="description"  class="form-control" placeholder="Description"  id="" > <?php echo $description ?> </textarea>

                            </div>
                           
                            <div class="form-group">
                                <label class="control-label">Needs For Jobs</label>
                                <textarea name="need"  autocomplete="off" class="form-control" placeholder="Need For Jobs" name="" id="" > <?php echo $need ?> </textarea>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label">website </label>
                                <input name="website"  value="<?php echo $website ?>" autocomplete="off" type="text" class="form-control" placeholder="website link">
                            </div>
                         
                            <div class="form-group">
                                <label class="control-label">How to Apply</label>
                                <input name="howapply"  value="<?php echo $howapply ?>" autocomplete="off" type="text" class="form-control" placeholder="How to Apply">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Salary </label>
                                <input name="salary"  value="<?php echo $salary ?>" autocomplete="off" type="text" class="form-control" placeholder="Salary">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Map URL</label>
                                <input name="map"  value="<?php echo $map ?>" autocomplete="off" type="text" class="form-control" placeholder="Map URL">
                            </div>
                         
                            <div class="custom-file mb-4 mt-2">
                                <input type="file" name="img"  class="custom-file-input"  id="validatedCustomFile" >

                                <label    class="custom-file-label form-control " style="height:35px;padding-top:5px " for="validatedCustomFile">Choose
                                    image...</label>
                                    <img class="mt-3 mb-5" style="padding-bottom:100px;width:10%" src=" <?php echo $image ?>" alt="">
                        
                            </div>
                            <input type="submit" name="submit" class="btn btn-common" value="Update" >
                            
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