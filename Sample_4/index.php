<?php  
session_start();
                $connection = mysqli_connect("localhost","root","","product_table");
                
                $sql = "SELECT * FROM product_table";
                $result = $connection ->query($sql);
                $row = $result->fetch_all();
           
 $data = $_SESSION['data'];
 ?>
        
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ShopNow - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>

<body>

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



    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Products</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur tempora ipsam id ullam? Laboriosam, dolorum, veritatis officiis fuga odio vitae sequi voluptatibus ducimus eos atque iusto. Officiis id quasi accusamus?

                </p>
            </div>
        </div>
        
        
        <div class="row">
        
            <?php foreach ($row as $value): ?>        
        
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="single_product.php?id=<?php echo $value['0'] ?>"><img src="Covers/<?php echo $value[2]  ?>" class="rounded-circle img-fluid border" ></a>
                <h2 class="h5 text-center mt-3 mb-3"><?php echo $value[1]  ?> </h2>
            </div>
        
             <?php endforeach; ?>
        </div>
        
        
            
        </div>
        

    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    
    <!-- End Featured Product -->


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
