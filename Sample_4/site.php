<?php session_start(); 
$data =  $_SESSION['data'];
$sum = 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ShopNow- About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>
    <!-- Start Top Nav -->
     <nav class="navbar navbar-expand-lg navbar-light shadow">
           <div class="container d-flex justify-content-between align-items-center">

               <a class="navbar-brand text-success logo h1 align-self-center" href="index.php">
                   ShopNow
               </a>


               <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                   <div class="flex-fill">
                       <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                           <li class="nav-item">
                               <a class="nav-link" href="index.php">Home</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="site.php">About</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="product.php">Products</a>
                           </li>


                       </ul>
                   </div>                
               </div>
           </div>
       </nav>

    <!-- Close Top Nav -->


    <!-- Header -->
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>About Us</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/about-hero.svg" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Services</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    Lorem ipsum dolor sit amet.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Delivery Services</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Promotion</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <h1>Check Out</h1>
            <br>
            <?php 
            if($data[0][1]>0)
            {
                $row =  $data[0];
                $mul = $row[1] * $row[3];
                $sum+=$mul;
                echo "<h3> $row[2] : $row[1] * $row[3] =  $mul  </h3>";
            }
                ?>
            
            <?php if($data[1][1]>0)
            {
                
                $row =  $data[1];
                $mul = $row[1] * $row[3];
                $sum+=$mul;
                echo "<h3> $row[2] : $row[1] * $row[3] =  $mul  </h3>";
            }
                ?>
            <?php if($data[2][1]>0)
            {
                
                $row =  $data[2];
                $mul = $row[1] * $row[3];
                $sum+=$mul;
                echo "<h3> $row[2] : $row[1] * $row[3] =  $mul  </h3>";
            }
                ?>
            <?php if($data[3][1]>0)
            {
                
                $row =  $data[3];
                $mul = $row[1] * $row[3];
                $sum+=$mul;
                echo "<h3> $row[2] : $row[1] * $row[3] =  $mul  </h3>";
            }
                ?>
            <?php if($data[4][1]>0)
            {
                
                $row =  $data[4];
                $mul = $row[1] * $row[3];
                $sum+=$mul;
                echo "<h3> $row[2] : $row[1] * $row[3] =  $mul  </h3>";
            }
                ?>
            
            <?php if($data[5][1]>0)
            {
                
                $row =  $data[5];
                $mul = $row[1] * $row[3];
                $sum+=$mul;
                echo "<h3> $row[2] : $row[1] * $row[3] =  $mul  </h3>";
            }
            
                ?>
            <h2>Total : <?php echo "$sum"; ?> </h2>
            
            <a href="clear_data.php">
                <button class="btn btn-outline-success"> Check Out Here </button>
            </a> 
        </div>
    </section>
    
    <!-- End Section -->

    <!-- Start Brands -->
    <!--End Brands-->


    <!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">ShopNow</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                                    123 Sample Street
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340"> 123-456-789 </a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com"> sample@gmail.com </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="single_product.php?id=1" >White Shoes</a></li>
                        <li><a class="text-decoration-none"  href="single_product.php?id=2"  >Perfume</a></li>
                        <li><a class="text-decoration-none" href="single_product.php?id=3"  >Glasses</a></li>
                        <li><a class="text-decoration-none" href="single_product.php?id=4" >Football Shoes</a></li>
                        <li><a class="text-decoration-none" href="single_product.php?id=5" >Watch</a></li>
                        <li><a class="text-decoration-none" href="single_product.php?id=6" >Lamp</a></li>
            
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="index.php">Home</a></li>
                        <li><a class="text-decoration-none" href="site.php">About</a></li>
                        <li><a class="text-decoration-none" href="product.php">Products</a></li>          
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-100 bg-black py-3">
            <div class="container">
                
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>