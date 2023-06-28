<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MEPHARMA</title>
    <link rel="icon" href="img/logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>


<style>
    .huruf{
     line-height: 44px;
     width: 80px;
     height: 40px;
     border: 2px solid #44A6F1;
     box-sizing: border-box;
     border-radius: 25px;
     cursor: pointer;
     font-weight: 400;
     background: none;
     line-height: 34px;
     align-items: center;
     text-align: center;

    } 

     .huruf:hover {

    font-family: Montserrat;
    font-weight: 400;
    color: white;
    background-color: #44A6F1;
    cursor: pointer;
    align-items: center;
    text-align: center;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;

    } 
</style>


<style>
body
* {
  box-sizing: border-box;
  
}


.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  top: 70px;
  align-content: center;
  right: 560px;
  border: 0px solid #f1f1f1;
  z-index: 9;
  outline: none;
}


.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
  border-radius: 25px;
}

.form-container input[type=text], .form-container input[type=password], .form-container input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  border-radius: 25px;
  font-family: Montserrat;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  border-radius: 25px;
  font-family: Montserrat;
}

.form-container .btn {
   background-color: #44A6F1;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100px;
  margin-bottom:10px;
  opacity: 0.8;
  border-radius: 25px;
  font-family: Montserrat;
}

.form-container .btnregis {
  background-color: #2DE3A6;
  color: white;
  font-color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 130px;
  margin-bottom:10px;
  opacity: 0.8;
  border-radius: 25px;
  font-family: Montserrat;
  : white;
}


.form-container .cancel {
  background-color: red;
  border-radius: 25px;
  font-family: Montserrat;
}


.form-container .btn:hover, .open-button:hover, .btnregis:hover{
  opacity: 1;
  border-radius: 25px;
}

.button1 {
    font-family: Montserrat;
    font-size: 16px;
    font-weight: 400;
    color: white;
    border: none;
    background-color: #aa0247;
    position: absolute;
    bottom: 113px;
    right: 100px;
    width: 210px;
    height: 47px;
    border-radius: 25px;
    cursor: pointer;
}
.button1:hover {
    font-family: Montserrat;
    font-size: 16px;
    font-weight: 400;
    color: #AA0247;
    border: none;
    background-color: #FFFFFF;
    position: absolute;
    bottom:  113px;
    right: 42px;
    width: 210px;
    height: 47px;
    border-radius: 25px;
    cursor: pointer;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}
.button2 {
    font-family: Montserrat;
    font-size: 16px;
    font-weight: 400;
    color: white;
    border: none;
    background-color: #aa0247;
    position: absolute;
    bottom: 113px;
    right:300px;
    width: 210px;
    height: 47px;
    border-radius: 25px;
    cursor: pointer;
}
.button2:hover {
    font-family: Montserrat;
    font-size: 16px;
    font-weight: 400;
    color: #AA0247;
    border: none;
    background-color: #FFFFFF;
    position: absolute;
    bottom: 113px;
    right: 300px;
    width: 210px;
    height: 47px;
    border-radius: 25px;
    cursor: pointer;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;

}
</style>


<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="doctor.php">Medicine</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">Drugstore</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="transaksi.php">Transaction</a>
                                </li>
                            </ul>
                        </div>
                        <?php
                            if(!isset($_SESSION["username"])){
                                echo "<a class='huruf' href='login.php'>Login</a>";
                            } else {
                                echo "<a class='huruf' href='hapus_session.php'>Logout</a>";
                            }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Transaction</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    

    
    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"> <img src="img/logo.png" alt="#"> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Department</a></li>
                            <li><a href="#"> Online payment</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Department</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Explore</h4>
                        <ul>
                            <li><a href="#">In the community</a></li>
                            <li><a href="#">IU health foundation</a></li>
                            <li><a href="#">Family support </a></li>
                            <li><a href="#">Business solution</a></li>
                            <li><a href="#">Community clinic</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Lights were season</a></li>
                            <li><a href="#"> Their is let wherein</a></li>
                            <li><a href="#">which given over</a></li>
                            <li><a href="#">Without given She</a></li>
                            <li><a href="#">Isn two signs think</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-6 single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Seed good winged wherein which night multiply
                            midst does not fruitful</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase"> <i class="ti-angle-right"></i>
                                </button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>