


<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/apple-icon.jpg">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="dropdownstyle.css"> 


</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="">
                Extravagant
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="welcome.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                            </div>
                    </div>

                    <div class="dropdown">
                      <button class="dropbtn"> <?php echo $_SESSION['username']?> </button>
                      <div class="dropdown-content">
                      <a href="logout.php">logout</a>
                      
                      </div>
                    </div>

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



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="background:url(./assets/img/aa.webp) top left; height:700px">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row" style="margin-top:145px;margin-left:20px">
                        
                        <div class="col-lg-8 mb-0 d-flex align-items-center">
                            <div class="text-align-center" style="color:white;">
                                <h1 class="h1"><b> Hello <?php echo strtoupper ($_SESSION['username']) ?> <br> Extravagant</b> eCommerce Store</h1>
                              
                                <p style="font-family: sans-serif; font-size: 23px">
                                    
                                    Welcome to Extravagant Online eCommerce store, where you can buy Gaming Accessories,
                                    Mouse, Keyboards and Headphones at best prices in Pakistan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container">
                    <div class="row" style="margin-top:200px;margin-left:30px">
                        
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left" style="color:white;">
                                <h1 class="h1">Why Us?  </h1>
                                <p style="font-family: sans-serif; font-size:23px;">
                                 Your number one source for all things related to Computer & Tech World. 
                                 We are dedicated to giving you the very best & quality Computer 
                                  & Tech Products
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
     
            <div class="carousel-item">
                <div class="container">
                    <div class="row" style="margin-top:190px;margin-left:30px">
                       
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left" style="color:white;">
                                <h1 class="h1"> Customer Support </h1>
                                <p style="font-family: sans-serif; font-size:23px;">
                                    We hope you enjoy our products as much as we enjoy offering them to you.
                                    If you have any questions or comments, please don't hesitate to contact 
                                    us on our Facebook Page or WhatsApp us.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

<!-- End Banner Hero -->

    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Top Category</h1>
                <p>
                    These category products are worth sold products. Check it <br /> out below:
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/re.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Keyboard</h5>
                <p class="text-center"><a href="shop.php" target="_blank" class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/m2.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Mouse</h2>
                <p class="text-center"><a href="shop.php" target="_blank" class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/h2.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Headphone</h2>
                <p class="text-center"><a class="btn btn-success" href="shop.php" target="_blank">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p> </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.php">
                            <img src="./assets/img/fhead.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$15.99</li>
                            </ul>
                            <a href="shop-single.php" class="h2 text-decoration-none text-dark">Piranha 2145
                            Gaming Headset </a>
                            <p class="card-text">
                                True-to-life audio quality with superior clarity and bass.
                                Adjustable, noise-filtering microphone.
                                </p>
                           </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="eweadn+gx50+gaming+keyboard+rgb+backlit.php">
                            <img src="./assets/img/fkb.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$12.99</li>
                            </ul>
                            <a href="eweadn+gx50+gaming+keyboard+rgb+backlit.php" class="h2 text-decoration-none text-dark">Eweadn GX50 Gaming
                            Keyboard</a>
                            <p class="card-text">
                                The mechanical axis of the body is no different, meanscomfort rebound quickly.
                                It has 19 keys with no breakthrough. It also comes withColorful Rainbow Backlights.
                            </p>
                          </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="techno+2.4g+wireless+usb+receiver.php">
                            <img src="./assets/img/fmouse.jpg" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$5.99</li>
                            </ul>
                            <a href="techno+2.4g+wireless+usb+receiver.php" class="h2 text-decoration-none text-dark">Techno 2.4G
                            Wireless Gaming Optical Mouse</a>
                            <p class="card-text">
                                Wireless transmission, Portable and lightweight, Power switch to save power,
                                With 6 Keys, including Scroll Wheel,Page Forward and Page Backward buttons
                                for easy Internet Surfing.
                                </p>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Extravagant</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            Bilal Town, Islamabad
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:303-051-8382">+92 303 0518382</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="#">ha.ali8382@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="shop_next.php">Gaming Accessories</a></li>
                        <li><a class="text-decoration-none" href="shop.php">Keyboard</a></li>
                        <li><a class="text-decoration-none" href="shop_next.php">Mouse</a></li>
                        <li><a class="text-decoration-none" href="shop_next.php">Headphones</a></li>
                        <li><a class="text-decoration-none" href="shop.php">GamePad</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="">Home</a></li>
                        <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                        <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://web.facebook.com/Extravagant11"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; Extravagant Store
                            | Designed by <a rel="sponsored" href="#">Hazrat Ali</a>
                        </p>
                    </div>
                </div>
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