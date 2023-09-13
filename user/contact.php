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
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="contact" class="section">
        <div class="contact-form">
            <div class="container">
                <div class="row contact-form-area">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="contact-block">
                            <h2>Contact Form</h2>
                            <form  method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" class="form-control" id="name" name="na"
                                                placeholder="Name" required="" data-error="Please enter your name">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" placeholder="Email" id="email" class="form-control"
                                                name="em" required="" data-error="Please enter your email">
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" autocomplete="off" placeholder="Subject" id="msg_subject"
                                                class="form-control" name="su" required=""
                                                data-error="Please enter your subject">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="ma" id="message"
                                                placeholder="Your Message" rows="5" data-error="Write your message"
                                                ></textarea>
                                           
                                        </div>
                                        <button type="submit"  name="submit" class="btn btn-common btn-search">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <?php

include('connection.php');
if(isset($_POST['submit'])){
    
    $na=$_POST['na'];
    $em=$_POST['em'];
    $su=$_POST['su'];
    $ma=$_POST['ma'];
    
    if($na==""){

    }
    if($em==""){

    }
    if($su==""){

    }
    if($ma==""){

    }
   
else {
 $query="INSERT INTO `contactus`(`name`, `email`, `subject`, `massage`) VALUES ('$na','$em','$su','$ma')";
 $result=mysqli_query($conect,$query);
if(!$result){
    echo "data not inserted";
}
else
{
  echo "<div class='alert alert-success mt-3 ' style='margin-left:40px;margin-right:50px'  > Your Massage is Submitted</div>";
}

}

}

?>




                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="contact-right-area wow fadeIn">
                            <h2>Contact Address</h2>
                            <div class="contact-info">
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="lni-map-marker"></i>
                                    </div>
                                    <p>Main Office: NO.22-23 Street Name- City,Country <br> Customer Center: NO.130-45
                                        Streen Name- City, Country</p>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <p><a href="/cdn-cgi/l/email-protection#5b333e3737341b2f343675383436">Customer
                                            Support: <span class="__cf_email__"
                                                data-cfemail="d5bcbbb3ba95b8b4bcb9fbb6bab8">[email&#160;protected]</span>
                                            Technical Support: </a></p>
                                    <p><a
                                            href="/cdn-cgi/l/email-protection#aedac1c3ddcfdbc2c0c7cbdceec9c3cfc7c280cdc1c3"><span
                                                class="__cf_email__"
                                                data-cfemail="3b484e4b4b54494f7b565a525715585456">[email&#160;protected]</span></a>
                                    </p>
                                </div>
                                <div class="single-contact">
                                    <div class="contact-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <p><a href="#">Main Office: +880 123 456 789</a></p>
                                    <p><a href="#">Customer Supprort: +880 123 456 789</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="conatiner-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004080.414077152!2d-104.65693512785852!3d37.27559283318413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1530855407925"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- footer Code include here -->
    <?php include('footer.php')  ?>
    <!-- footer Code end here -->

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
            "window['__CF$cv$params']={r:'7cc3d22e98f5563b',m:'ZDXqeHa2xBxHbQIniPAHtNYXeEyaFzFK7.N2xOSfti0-1684913298-0-AZjoApDlaTb8VIZDyQ0jstYazbLcDb71aCp0q8bXJLZC',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
        data-cf-beacon='{"rayId":"7cc3d22e98f5563b","version":"2023.4.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>