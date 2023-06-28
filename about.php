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
    <link rel="icon" href="img/favicon(3).png">
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

.btnbaru{
position: absolute;
bottom: 113px;
left: 120px;
width: 150px;
height: 50px;
border: 2px solid #44A6F1;
box-sizing: border-box;
border-radius: 25px;
cursor: pointer;
font-weight: 400;
background: #FFFFFF;
text-align: center;
font-size: 18px;
font-family: Montserrat;
line-height: 44px;
align-items: center;
text-align: center;
}

.btnbaru:hover {
    font-family: Montserrat;
    font-size: 18px;
    font-weight: 400;
    color: white;
   
    background-color: #44A6F1;
    position: absolute;
    bottom: 113px;
    left: 120px;
    width: 150px;
    height: 50px;
    border-radius: 25px;
    cursor: pointer;
    line-height: 44px;
    align-items: center;
    text-align: center;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}


.btnsatu{
position: absolute;
bottom: 113px;
left: 370px;
width: 150px;
height: 50px;
border: 2px solid #44A6F1;
box-sizing: border-box;
border-radius: 25px;
cursor: pointer;
font-weight: 400;
background: #FFFFFF;
text-align: center;
font-size: 18px;
line-height: 44px;
align-items: center;
text-align: center; 
}

.btnsatu:hover {
    font-family: Montserrat;
    font-size: 18px;
    font-weight: 400;
    color: white;
   
    background-color: #44A6F1;
    position: absolute;
    bottom: 113px;
    left: 370px;
    width: 150px;
    height: 50px;
    border-radius: 25px;
    cursor: pointer;
    line-height: 44px;
    align-items: center;
    text-align: center;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}

.btndua{
position: absolute;
bottom: 113px;
left: 620px;
width: 150px;
height: 50px;
border: 2px solid #44A6F1;
box-sizing: border-box;
border-radius: 25px;
cursor: pointer;
font-weight: 400;
background: #FFFFFF;
text-align: center;
font-size: 18px;
line-height: 44px;
align-items: center;
text-align: center; 
}

.btndua:hover {
    font-family: Montserrat;
    font-size: 18px;
    font-weight: 400;
    color: white;
    
    background-color: #44A6F1;
    position: absolute;
    bottom: 113px;
    left: 620px;
    width: 150px;
    height: 50px;
    border-radius: 25px;
    cursor: pointer;
    line-height: 44px;
    align-items: center;
    text-align: center;
    -webkit-transition: all 0.5s;
    transition: all 0.5s;
}

.btntiga{
position: absolute;
bottom: 113px;
left: 870px;
width: 150px;
height: 50px;
border: 2px solid #44A6F1;
box-sizing: border-box;
border-radius: 25px;
cursor: pointer;
font-weight: 400;
background: #FFFFFF;
text-align: center;
font-size: 18px;
line-height: 44px;
align-items: center;
text-align: center; 
}

.btntiga:hover {
    font-family: Montserrat;
    font-size: 18px;
    font-weight: 400;
    color: white;
    background-color: #44A6F1;
    position: absolute;
    bottom: 113px;
    left: 870px;
    width: 150px;
    height: 50px;
    border-radius: 25px;
    cursor: pointer;
    line-height: 44px;
    align-items: center;
    text-align: center;
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
                            <h2>Want to search nearby pharmacy?</h2>
                        </div>

                    </div><br><br><br><br>
                    <div class="regerv_btn">
                            <a href="ethical.php" class="btnbaru">Ethical</a>
                    </div>
                    <div class="regerv_btn">
                            <a href="generic.php" class="btnsatu">Generic</a>
                    </div>
                    <div class="regerv_btn">
                            <a href="rawmaterials.php" class="btndua">Raw materials</a>
                    </div>
                    <div class="regerv_btn">
                            <a href="otcherbal.php" class="btntiga">OTC & Herbal</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::doctor_part start::-->
    <section class="doctor_part single_page_doctor_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                               <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                               <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                               <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="img/apotek/apotekk24.png" alt="doctor">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"> <i class="ti-facebook"></i> </a></li>
                                    <li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
                                    <li><a href="#"> <i class="ti-instagram"></i> </a></li>
                                    <li><a href="#"> <i class="ti-skype"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>APOTEK K 24</h3>
                                <p>PHARMACY</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::doctor_part end::-->

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Our Depertment</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Apotek K24</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Kimia Farma</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>Google Maps</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>MEPHARMA</h4>
                                            <p>Darkness multiply rule Which from without life creature blessed
                                                give moveth moveth seas make day which divided our have.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!-- footer part start-->
    <footer class="footer-area">
    

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MEPHARMA </i> by <a href="index.php" target="_blank">Medicine Pharmacy</a>
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