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


    <!-- Navbar code is include here -->
    <?php include('header.php') ?>
    <!-- Navbar code end -->

    <div class="page-header">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 ">
                    <div class="inner-header">
                        <h3>Find Job</h3>
                    </div>
                    <div class="job-search-form bg-cyan job-featured-search">
                        <form method="post" action="search-job.php">
                            <div class="row justify-content-center">
                                
                                <div class="col-lg-8 col-md-5 col-xs-12">
                                    <div class="form-group">
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select name="search">
                                                    <option  value="none">Select Catagory</option>
                                                   <?php
    include('connection.php');
    $query="SELECT * FROM `add-categories` WHERE 1";
    $run=mysqli_query($conect,$query);
    if(mysqli_num_rows($run)>0){
        while($row=mysqli_fetch_array($run)){
            $id=$row['id'];
      $cname=$row['cname'];
     
    ?>
<option><?php echo $cname ?></option>
   
<?php
                                                    }}
            ?>
                                                </select>
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-1 col-md-1 col-xs-12">
                                    <button type="submit" name="submit" value="search" class="button"><i class="lni-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="featured" class="section bg-cyan">
        <div class="container">
            <div class="row">
                <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `postjob` WHERE 1 ";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                        $id=$row['id'];
                                                   $jobtitle=$row['jtitle'];
                                                   $companyname=$row['cname'];
                                                   $location=$row['location'];
                                                   $category=$row['category'];
                                                   $time=$row['time'];
                                                   $postdate=$row['postdate'];
                                                   $closedate=$row['closedate'];
                                                   $description=$row['description'];
                                                   $need=$row['need'];
                                                   $websitelink=$row['website'];
                                                   $howtoapply=$row['howapply'];
                                                   $salary=$row['salary'];
                                                   $maplink=$row['map'];
                                                   $image=$row['img'];


                                                
                                                ?>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="job-featured">
                        <div class="icon">
                            <img src="<?php echo $image ?>" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="jobsdetail.php?id=<?php echo $row['id'] ?>"><?php echo $jobtitle ?></a></h3>
                            <p class="brand"><?php echo $companyname ?></p>
                            <div class="tags">
                                <span><i class="lni-map-marker"></i> <?php echo $location ?></span>
                                <span><i class="lni-user"></i><?php echo $postdate ?></span>
                            </div>
                            <span class="full-time"><?php echo $time ?></span>
                        </div>
                    </div>
                </div>
                <?php
                                                    }
                                                }
                ?>
                <div class="col-12 text-center mt-4">
                    <a href="browsejob.php" class="btn btn-common">Browse All Jobs</a>
                </div>
            </div>
        </div>
    </section>


    <section id="job-listings" class="section">
        <div class="container">
            <div class="row">
               

                        <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `postjob` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                        $id=$row['id'];
                                                   $jobtitle=$row['jtitle'];
                                                   $companyname=$row['cname'];
                                                   $location=$row['location'];
                                                   $category=$row['category'];
                                                   $time=$row['time'];
                                                   $postdate=$row['postdate'];
                                                   $closedate=$row['closedate'];
                                                   $description=$row['description'];
                                                   $need=$row['need'];
                                                   $websitelink=$row['website'];
                                                   $howtoapply=$row['howapply'];
                                                   $salary=$row['salary'];
                                                   $maplink=$row['map'];
                                                   $image=$row['img'];


                                                
                                                ?>
                                                 <div class="col-lg-12 col-md-12 col-xs-12">
                    <a class="job-listings" href="jobsdetail.php?id=<?php echo $row['id'] ?>">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-12">

                                <div class="job-company-logo">
                                    <img src="<?php echo $image ?>" alt="">
                                </div>
                                <div class="job-details">
                                    <h3><?php echo $jobtitle ?></h3>
                                    <span class="company-neme">
                                        <?php echo $companyname ?>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-center">
                                <span class="btn-open">
                                    <?php echo $time ?>
                                </span>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                <div class="location">
                                    <i class="lni-map-marker"></i> <?php echo $location ?>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                <span class="btn-full-time"><?php echo $closedate ?></span>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-12 text-right">
                                <span class="btn-apply">Apply Now</span>
                            </div>
                        </div>
                    </a>
                    
                </div>
                <?php
                                                    }}
                  ?>
            </div>
        </div>
    </section>


    <!-- Footer Section code is Include here -->
    <?php include('footer.php') ?>
    <!-- Footer Section code is End here -->

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
            "window['__CF$cv$params']={r:'7cc3d20019fc563b',m:'t4ds15t4lVRZNO8p39llIpPB1zR6M4Sx9lDnOMJwiSg-1684913290-0-AbfFpjTBaIFkUKeIcnwUIDdya7pBVRnbK6eNrqbwHCvQ',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
        data-cf-beacon='{"rayId":"7cc3d20019fc563b","version":"2023.4.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>