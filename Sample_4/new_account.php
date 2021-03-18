<?php
session_start();

                ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>ShowNow - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />



</head>





<body>
    <!-- Start Top Nav -->
<body>

    <nav class="navbar navbar-expand-lg navbar-light shadow">
           <div class="container d-flex justify-content-between align-items-center">

               
               <a class="navbar-brand text-success logo h1 align-self-center" href="index.php" style="margin-left: 11em">
                   ShopNow
               </a>
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


    <!-- Start Content Page -->
    
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center" >
            <h1>Login Form</h1>
            <form method="get" action="register_data.php" class="form-control" >
                
                <diV>
                    <label for="name">Name</label> <input class="form-control" type="text" name="name" required=""  >
                    <label for="password">Password</label> <input class="form-control" type="password" name="password" required="" >
                    
                    

                </diV>
                <div>
                    
                    <label for="email">Email</label> <input class="form-control" type="email" name="email" required="" >
                                        <input class="btn btn-outline-primary my-3" type="submit">
                    
                </div>
            </form>
            
                
        </div>
        
    </div>

    

    <!-- Start Map -->
    <!-- Ena Map -->

    <!-- Start Contact -->
    
    <!-- End Contact -->


    <!-- Start Footer -->

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