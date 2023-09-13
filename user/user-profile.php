<?php
session_start();
if (!isset($_SESSION['id'])) {
  header("Location:login.php");
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
        href="assets/css/A.bootstrap.min.css%20line-icons.css%20owl.carousel.min.css%20owl.theme.default.css%20slicknav.min.css%20animate.css%2CMcc.aaycDhdeGt.css.pagespeed.cf.fuP4qR28_S.css">
    <link rel="stylesheet"
        href="assets/css/A.main.css%20responsive.css%2CMcc.KlRZ5R48t-.css.pagespeed.cf.v1wuBUF-8Y.css">
    <style>
    #color-style-switcher {
        display: none !important;
    }
    </style>
</head>

<body>

    <header id="home" class="hero-area">

       <!-- Navbar code is include here -->
    <?php include('header.php') ?>
    <!-- Navbar code end -->

    </header>


    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Resume</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="right-sideabr">
                        <h4>Manage Account</h4>
                        <ul class="list-item">
                            <li><a class="active" href="user-profile.php">My Resume</a></li>
                            <li><a href="user-application.php" >Manage Applications</a></li>
                            
                            <li><a href="logout.php">Sing Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="inner-box my-resume">
                        
                        <?php
                                                include('connection.php');
                                               
                                                $query="SELECT * FROM `applyjob` WHERE id=15  ";
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
                                                <div class="author-resume">
                            <div class="author-info">
                                <h3><?php echo "$fname " ,"$lname"?></h3>
                                <p class="sub-title">Father Name : <?php echo $faname ?></p>
                                <p class="sub-title">CNIC : <?php echo $cnic ?></p>
                                <p><span class="address"><i class="lni-map-marker"></i><?php echo $address ?></span>
                                    <span><i class="ti-phone"></i><?php echo "/ $tehsil" ?></span></p>
                                
                            </div>
                        </div>
                        <div class="about-me item">
                            <h3>About Me</h3>
                            <p class="sub-title " >Religion : <?php echo $religion ?></p>
                            <p class="sub-title " >DOB : <?php echo $dob ?></p>
                            <p class="sub-title" >Marital Status : <?php echo $mstatus ?></p>
                            <p class="sub-title" >Address : <?php echo $address ?></p>
                            <p class="sub-title " >Domicile City : <?php echo $dcity ?></p>
                        </div>
                        
                        <div class="education item">
                            <h3>Education</h3>
                            <h4>Bachelors</h4>
                            <p>Institute Name : <?php echo $iname3 ?></p>
                            <span class="date">Registration No :<?php echo $bname3 ?></span>
                            <p>Total Marks : <?php echo $tm1 ?></p>
                            <p>Total Marks : <?php echo $ob2 ?></p>
                            <br>
                            <h4>Intermidiate</h4>
                            <p>Institute Name : <?php echo $iname2 ?></p>
                            <span class="date">Registration No :<?php echo $rn2 ?></span>
                            <p>Total Marks : <?php echo $tm2 ?></p>
                            <p>Total Marks : <?php echo $ob2 ?></p>
                            <br>
                            <h4>Bachelors</h4>
                            <p>Institute Name : <?php echo $iname1 ?></p>
                            <span class="date">Registration No : <?php echo $rn1 ?></span>
                            <p>Total CGP : <?php echo $tm3 ?></p>
                            <p>Total CGP : <?php echo $ob3 ?></p>
                            <br>
                        </div>
                    </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>

<!-- Footer Section code is Include here -->
<?php include('footer.php') ?>
    <!-- Footer Section code is End here -->


    <a href="#" class="back-to-top">
        <i class="lni-arrow-up"></i>
    </a>

   


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
        src="assets/js/owl.carousel.min.js%20jquery.slicknav.js%20jquery.counterup.min.js%20waypoints.min.js%20form-validator.min.js%20contact-form-script.js%20main.js.pagespeed.jc.bS-VD5r2Mm.js">
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
    <script>
    eval(mod_pagespeed_LfD_kCtJPc);
    </script>
    <script>
    (function() {
        var js =
            "window['__CF$cv$params']={r:'7cc3d20a6fc4563b',m:'.DVYL1hPfANYrt4gu0ixe68U483tx00Ktx6iRF2kQMo-1684913292-0-ATLssebDoBzenHA/jX5VnIcqDY3lU0EiNoFBW0ZInKxP',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
        data-cf-beacon='{"rayId":"7cc3d20a6fc4563b","version":"2023.4.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>