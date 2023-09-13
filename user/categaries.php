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
<form action="browse-categories.php" method="POST">
<section class="browse-catagories section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Browse by Catagories</h2>
                <p>As the world's #1 job site, with over 200 million unique visitors every month from over 60 different
                    countries</p>
            </div>
            <div class="row">
            <?php
                                                include('connection.php');
                                                $query="SELECT * FROM `add-categories` WHERE 1";
                                                $run=mysqli_query($conect,$query);
                                                if(mysqli_num_rows($run)>0){
                                                    while($row=mysqli_fetch_array($run)){
                                                        $id=$row['id'];
                                                   $img=$row['img'];
                                                   $cname=$row['cname'];
                                                   $tjobs=$row['tjobs'];
                                                   

                                                
                                                ?>
<div class="col-lg-3 col-md-12 col-xs-12">
                    <a href="browse-categories.php" class="img-box">
                        <div class="img-box-content">
                            <h4><?php echo $cname ?></h4>
                            <span><?php echo $tjobs ?></span>
                        </div>
                        <div class="img-box-background">
                            <img class="img-fluid" src="<?php echo $img ?>" alt="">
                        </div>
                
                </div></a> 
              
            
            <?php
                                                    }}
            ?>
            </div>
        </div>
    </section>
    </form>

   
    <script>
    eval(mod_pagespeed_InpbBTYwHt);
    </script>
    <script>
    eval(mod_pagespeed_gIM$J3j2sR);
    </script>
    <script>
    eval(mod_pagespeed_4FaVC46jxj);
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
</body>
</html>