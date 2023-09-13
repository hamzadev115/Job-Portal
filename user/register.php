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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .hero {
        height: 100%;
        width: 100%;
        background: transparent;
        background-position: center;
        background-size: cover;


    }

    .form-box {
        width: 500px;
        position: relative;
        margin: 6% auto;
        background: #fff;
        padding: 5px;
        box-shadow: 0 0 20px 1px #EEEE;
    }

    .button-box {
        width: 265px;
        margin: 35px auto;
        position: relative;
        box-shadow: 0 0 20px 1px #51be81;
        border-radius: 30px !important;
    }

    .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        border: none;
        background: transparent;
        outline: none;
        position: relative;
    }

    #btn {
        top: 0;
        left: 0;
        position: absolute;
        height: 100%;
        width: 130px;
        background: linear-gradient(to right, #51be81, #51be81);
        border-radius: 30px;
        transition: .5s;
    }

    .field-gorup {
        width: 480px;
        position: relative;

    }

    .in2 {
        width: 96%;
        outline: 0;
        border: 1px solid #999999;
        border-radius: 20px;
        padding: 11px;
        padding-left: 60px;
        background: transparent;
        color: #999999;
        margin-left: 14px;

        opacity: 0.5;
    }

    .in3 {
        width: 96%;
        outline: 0;
        border: 1px solid #51be81;
        border-radius: 20px;
        padding: 11px;
        padding-left: 0px;
        background: #51be81;
        color: white;
        margin-left: 14px;
        margin-bottom: 20px;


    }

    .icon {
        position: absolute;
        left: 0;
        top: 0;
        width: 30px;
        height: 100px;
        display: flex;
        margin-top: 9px;
        margin-left: 30px;
        color: #51be81;
        font-size: 1.6rem;
    }

    form {
        display: none;
    }

    form.active {
        display: block;
    }

    form h2 {
        margin-top: 0;
    }



    #login-form p {
        font-size: 17px;
        text-transform: uppercase;
        margin-bottom: 20px;

    }

    #register-form p {
        font-size: 17px;
        text-transform: uppercase;
        margin-bottom: 20px;

    }

    .already a {
        color: #999999;
        text-decoration: none;

    }
    </style>
</head>

<body>


    <!-- header Code include here -->
    <?php

use LDAP\Result;

 include('header.php')  ?>
    <!-- header Code end here -->


    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Create Your Account Here</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="hero">
            <div class="form-box">
            <div class="button-box">
                    <div id="btn"></div>
                  <button id="login-btn" class="active toggle-btn">Job Seeker</button> 
 

                    <button id="register-btn" class="toggle-btn">Employer</button>
                </div>
                <form id="login-form" method="post">
                    <center><u style="color: #51be81;">
                            <p style="color: #51be81;">Job Seeker</p>
                        </u></center>

                    <div class="field-gorup">
                        <input type="text" autocomplete="off" name="na" class="in2" placeholder="Enter User Name">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="field-gorup" style="margin-top:20px;">
                        <input type="text" autocomplete="off" name="em" required class="in2" placeholder="Enter Email">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-envelope" style="font-size:20px" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="field-gorup" style="margin-top:20px;">
                        <input type="password" autocomplete="off" name="pa" required class="in2" placeholder="Enter Password">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="field-gorup" style="margin-top:20px;">
                        <input type="password" autocomplete="off" required name="re" class="in2" placeholder="Retype Password">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-unlock" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="field-gorup" style="margin-top:30px;">
                        <input type="submit" name="register" class="in3" value="Register">

                    </div>
                    <center>
                        <ul class="already mb-3">
                            <a href="login.php">Already have an Account</a>
                        </ul>
                    </center>
                </form>
                <?php

include('connection.php');
if(isset($_POST['register'])){
$na=$_POST['na'];
$em=$_POST['em'];
$pa=$_POST['pa'];
$re=$_POST['re'];

if($na==""){

}
elseif($em==""){
    
}
elseif($pa==""){
    
}
elseif($re==""){
    
}
else{
    if($pa==$re){
        $query="INSERT INTO `user-register`(`name`, `email`, `password`, `retype-password`) VALUES ('$na','$em','$pa','$re')";
        $result=mysqli_query($conect,$query);
        if(!$result){
        echo("Data Not Inserted");
        }
        else
        {
            echo "<script>window.location.href='user-profile.php';</script>";        } 
    }
    else{
        echo "<div class='alert alert-success mt-3 ' style='margin-left:10px;margin-right:10px'  > Your Password is not Same</div>";

    }
    
}


}

?>


<form id="register-form" method="post"> 
                    <center><u>
                            <p>Employer</p>
                        </u></center>
                    <div class="field-gorup">
                        <input type="text" autocomplete="off" required name="na1" class="in2" placeholder="Enter Organization Name">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="field-gorup"  style="margin-top:20px;">
                        <input type="text" autocomplete="off" required name="em1" class="in2" placeholder="Enter Organization Email">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-envelope" style="font-size:20px" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="field-gorup" style="margin-top:20px;">
                        <input type="text" autocomplete="off" required name="url" class="in2" placeholder="Enter Organization URL">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-globe" style="font-size:23px" aria-hidden="true"></i>
                        </div>

                    </div>
                    <div class="field-gorup" style="margin-top:25px;">
                        <input type="password" autocomplete="off" required name="pa1" class="in2" placeholder="Enter Password">
                        <div class="icon"  style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="field-gorup" style="margin-top:25px;">
                        <input type="password" autocomplete="off" required name="re1" class="in2" placeholder="Retype Password">
                        <div class="icon" style="border-right:1px solid #51be81;height:30px">
                            <i class="fa fa-unlock" aria-hidden="true"></i>
                        </div>
                    </div>

                    <div class="field-gorup" style="margin-top:30px;">
                        <input type="submit"  name="submit" class="in3" value="Register">

                    </div>

                    <center>
                        <ul class="already mb-3">
                            <a href="login.php">Already have an Account</a>
                        </ul>
                    </center>

                </form>
                <?php ?>
                <?php

include('connection.php');
if(isset($_POST['submit'])){
$na1=$_POST['na1'];
$em1=$_POST['em1'];
$url=$_POST['url'];
$pa1=$_POST['pa1'];
$re1=$_POST['re1'];

if($na1==""){

}
elseif($em1==""){
    
}
elseif($pa1==""){
    
}
elseif($url==""){
    
}
elseif($re1==""){
    
}

else{
    if($pa1==$re1){
        $query="INSERT INTO `company-register`(`name`, `email`, `url`, `password`, `retype-password`) VALUES ('$na1','$em1','$url','$pa1','$re1')";
        $result=mysqli_query($conect,$query);
        if(!$result){
        echo("Data Not Inserted");
        }
        else
        {
 echo "<script>window.location.href='employe-profile.php';</script>";        } 
    }
    else{
        echo "<div class='alert alert-success mt-3 ' style='margin-left:10px;margin-right:10px'  > Your Password is not Same</div>";

    }
    
}


}

?>

            </div>

        </div>
    </section>





    <!-- footer Code include here -->
    <?php include('footer.php')  ?>
    <!-- footer Code end here -->


    <script>
    const loginBtn = document.getElementById('login-btn');
    const registerBtn = document.getElementById('register-btn');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    loginBtn.addEventListener('click', function() {
        loginBtn.classList.add('active');
        registerBtn.classList.remove('active');
        loginForm.classList.add('active');
        registerForm.classList.remove('active');
    });

    registerBtn.addEventListener('click', function() {
        registerBtn.classList.add('active');
        loginBtn.classList.remove('active');
        registerForm.classList.add('active');
        loginForm.classList.remove('active');
    });
    </script>

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
            "window['__CF$cv$params']={r:'7cc3d480dfa04d63',m:'Qhfp9s2.Nqro4NbFh5jF5a8TF5.Zcs29dkFgrUA1cV8-1684913393-0-AWCQ7g2WiHQnNqsOmgs5/Jr8Qz3FH4QHU1yUaPqtp8h7',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
        data-cf-beacon='{"rayId":"7cc3d480dfa04d63","version":"2023.4.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>