<?php
  session_start();
  if (!isset($_SESSION["username"])) {
    header('location: /bookstore/index.html');

  }else {


    $login_session = $_SESSION['username'];

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Drinks</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="images2/logo.png" alt="">
                                    </a>

                                </div>

                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="/restaurant/index.html#about">About us</a></li>
                                    <li class="active"><a href="/restaurant/members.html">Members</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                    <li>
                                      <div class="search-container">
                                      <form action="/action_page.php">
                                        <input type="text" placeholder="Search.." name="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                      </form>
                                    </div>
                                    </li>
                                    <li>
                                      <div class="login-container">
                                          <form action = "/restaurant/include/logout.php">
                                          <button type="submit">Logout</button>
                                        </form>
                                      </div>
                                    </li>
                                </ul>
                                <ul>
                                  <div class="ok" style="float: right;color: #e75b1e;padding-right: 1%; padding-left: 40%; position:sticky;" >
                                      <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

                                  </div>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>

            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
<!--                    <div class="banner-text">
                       <div class="banner-cell">
                            <h1>Dinner with us  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Accidental appearances </h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem nonummy nibh euismod</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Book my Table</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->



    <!-- end special-menu -->

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Products
					</h2>
                        <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                    </div>
                    <div class="tab-menu" >
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>White Wines</h2>

                            </div>
                            <div class="tab-title-menu">
                                <h2>Red Wines</h2>

                            </div>
                            <div class="tab-title-menu">
                                <h2>Coolers</h2>

                            </div>
                            <div class="tab-title-menu">
                                <h2>Wines Glases</h2>

                            </div>
                        </div>
                        <div class="slider slider-single" height="500px">
                            <div style="height=500px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/wine_white1.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Yarra Yering</h3>
                                            <p>
                                                A fruit salad of aromas: crisp green apple and tangy pineapple.
                                            </p>
                                        </div>
                                        <span class="offer-price">$8.5</span>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/wine_white2.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Mision</h3>
                                            <p>
                                                Complex yet refreshing with melona and delicate floral notes, expresses terroir.
                                            </p>
                                        </div>
                                        <span class="offer-price"><a>$10</a></span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/wine_white3.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Domain Tariquet Classic</h3>
                                            <p>
                                                Tariquet is most famous for their Armagnac, but their still wines are equally as impressive.
                                            </p>
                                        </div>
                                        <span class="offer-price"><a>$135</a></span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/red_wine1.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Rumbalara</h3>
                                            <p>
                                                This light semi sweet red wine is produced from Shiraz;Cabernet and Merlot grapes.
                                            </p>
                                        </div>
                                        <span class="offer-price">$15</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/red_wine2.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Yarra Yering Red Wine</h3>
                                            <p>
                                                Fruit power and dark berry fruits and some sage adding a background herbal lift.
                                            </p>
                                        </div>
                                        <span class="offer-price">$65</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/red_wine3.jpg" alt="" class="img-responsive">
                                        <div>
                                            <h3>Viña Bujanda</h3>
                                            <p>
                                                A nice mixed case for a Spanish Red wines lover from Rioja
                                            </p>
                                        </div>
                                        <span class="offer-price">$125</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/cooler1.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>8 Bottle Wine Cooler Fridge</h3>
                                            <p>
                                                This temperature controlled wine fridge holds eight wine bottles.
                                            </p>
                                        </div>
                                        <span class="offer-price">$200</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/cooler2.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>Single wine cooler</h3>
                                            <p>
                                                The classic, elegant wine cooler from Rosendahl’s Grand Cru range.
                                            </p>
                                        </div>
                                        <span class="offer-price">$75</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/cooler3.bmp" alt="" class="img-responsive">
                                        <div>
                                            <h3>Freezable Wine Cooler Bag - Grey</h3>
                                            <p>
                                                Wine cooler bag to carry your favourite drink to your favourite BYO restaurant.
                                            </p>
                                        </div>
                                        <span class="offer-price">$25</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/glass1.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>Red Wine Glass</h3>
                                            <p>
                                                Red wine glasses are easily identified by their bowl shape.
                                            </p>
                                        </div>
                                        <span class="offer-price">$7.5</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/glass2.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>White Wine Glass</h3>
                                            <p>
                                                White wine glassware can be distinguished from red wine glassware primarily.
                                            </p>
                                        </div>
                                        <span class="offer-price">$9.5</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="panel-pricing offer-item">
                                        <img src="images2/glass3.png" alt="" class="img-responsive">
                                        <div>
                                            <h3>Sparkling Wine Glass</h3>
                                            <p>
                                                One of the most easily identified types of wine glassware is the champagne glass.
                                            </p>
                                        </div>
                                        <span class="offer-price">$5.5</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->


    <div id="footer" class="footer-main">

        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="images2/logo.png" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>New Menu</h3>
                                <ul>
                                    <li><a href="#">Italian Bomba Sandwich</a></li>
                                    <li><a href="#">Double Dose of Pork Belly</a></li>
                                    <li><a href="#">Spicy Thai Noodles</a></li>
                                    <li><a href="#">Triple Truffle Trotters</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									+91 80005 89080
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">support@foodfunday.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Thursday </p>
                                        <span> 11:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Friday - Saturday </p>
                                        <span>  11:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2017 Food Funday is powered by <a href="#" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

<!--    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
<!--        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>
