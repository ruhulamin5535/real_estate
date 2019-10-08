<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <!--  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

    <!-- Title  --> 
    <title>bproperty</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.php"><img src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">payment</a></li>
                                <li><a href="#">property management</a>
                                    <ul class="dropdown">
                                        <li><a href="realestate.php">realestate </a></li>
                                        <li><a href="#">property </a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="newproject.php">new project</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>

                            
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your home</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your dream house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(img/bg-img/hero3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->
   <?php 
    include('indexDB.php');
    $loc=$c=$pf=$pf1=$a=$tc='';
    $x1="select  location from flat";
    $x2="select  rent_amount from rent";
    $x3="select  city from flat";
    $x4="select  p_feature from flat";
    $x5="select  p_feature1 from flat";
    $x6="select  area from flat";
    $q="select * from view_rent order by flat_id desc";
    if(isset($_POST['loc']) && isset($_POST['city'])|| isset($_POST['p_feature']) ||isset($_POST['p_feature1']) || isset($_POST['area']) || isset($_POST['rent_amount']) )
    {
        $loc=$_POST['loc'];
        $c=$_POST['city'];
        $pf=$_POST['p_feature'];
        $pf1=$_POST['p_feature1'];
        $a=$_POST['area'];
        $tc=$_POST['rent_amount'];
        if($loc=='All' && $c=='All'|| $pf=='All' || $pf1=='All' || $a=='All' || $tc=='All' )
        {
            $q="select * from view_rent order by flat_id desc";
        }
        if($loc=='All' && $c!='All' || $pf!=='All' || $pf1!=='All'|| $a!=='All' || $tc!=='All' )
        {
            $q="select * from view_rent where city='$c' order by flat_id desc";
        }
        if($loc!='All')
        {
            $x2="select city from view_rent where location='$loc'";
            $q="select * from view_rent where location='$loc' order by flat_id desc";
        }
    }
    $r1=$conn->query($x1);
    $r2=$conn->query($x2);
    $r3=$conn->query($x3);
    $r4=$conn->query($x4);
    $r5=$conn->query($x5);
    $r6=$conn->query($x6);
    
    ?>
    <!-- ##### Advance Search Area Start ##### -->
   <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p><a href="rent.php">rent </a></p>
                        </div>

                        <!-- Search Form -->
                        <form action="rent_search.php" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control"  name="loc" id="catagories">
                                            <option>Location</option>
                                           <?php 
                    while($p1=mysqli_fetch_array($r1, MYSQLI_ASSOC))
                    {
                        echo "<option value='".$p1['location']."'>".$p1['location']."</option>";
                    }
                    ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>price</option>
                                            <option>any</option>
                                            <option>250000</option>
                                            <option>300000</option>
                                            <option>400000</option>
                                            <option>450000</option>
                                            <option>500000</option>
                                            <option>550000</option>
                                            <option>600000</option>
                                            <option>620000</option>
                                            <option>700000</option>
                                        </select>
                                    </div>
                                </div> -->

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                       <select class="form-control"  name="city" id="catagories">
                                            <option>city</option>
                                          <?php 
                    while($p2=mysqli_fetch_array($r3, MYSQLI_ASSOC))
                    {
                        echo "<option value='".$p2['city']."'>".$p2['city']."</option>";
                    }
                    ?>
                                        </select>
                                    </div>
                                </div>

                              
                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" name="p_feature" id="bedrooms">
                                            <option>Bedrooms</option>
                                            <?php 
                    while($p3=mysqli_fetch_array($r4, MYSQLI_ASSOC))
                    {
                        echo "<option value='".$p3['p_feature']."'>".$p3['p_feature']."</option>";
                    }
                    ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" name="p_feature1" id="bathrooms">
                                            <option>Bathrooms</option>
                                            <?php 
                    while($p4=mysqli_fetch_array($r5, MYSQLI_ASSOC))
                    {
                        echo "<option value='".$p4['p_feature1']."'>".$p4['p_feature1']."</option>";
                    }
                    ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" name="area" id="bathrooms">
                                            <option>area</option>
                                            <?php 
                    while($p5=mysqli_fetch_array($r6, MYSQLI_ASSOC))
                    {
                        echo "<option value='".$p5['area']."'>".$p5['area']."</option>";
                    }
                    ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" name="rent_amount" id="bathrooms">
                                            <option>rent_amount</option>
                                            <?php 
                    while($p6=mysqli_fetch_array($r2, MYSQLI_ASSOC))
                    {
                        echo "<option value='".$p6['rent_amount']."'>".$p6['rent_amount']."</option>";
                    }
                    ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- <div class="col-12 col-md-8 col-lg-12 col-xl-5 d-flex"> -->
                                    <!-- Space Range -->
                                    <!-- <div class="slider-range">
                                        <div data-min="600" data-max="4200" data-unit=" sq. ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="600" data-value-max="4200">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">600 sq. ft - 4200 sq. ft</div>
                                    </div> -->

                                    <!-- Distance price -->
                                   <!--  <div class="slider-range">
                                        <div data-min="10000" data-max="10000000" data-unit=" tk" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10000" data-value-max="10000000">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">10000 tk - 10000000 tk</div>
                                    </div>
                                </div> -->

                               <!--  <div class="col-12 search-form-second-steps">
                                    <div class="row">

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="types">
                                                    <option>All Types</option>
                                                    <option>Apartment <span>(30)</span></option>
                                                    <option>Land <span>(69)</span></option>
                                                    <option>Villas <span>(103)</span></option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="catagories2">
                                                    <option>All Catagories</option>
                                                    <option>Apartment</option>
                                                    <option>Bar</option>
                                                    <option>Farm</option>
                                                    <option>House</option>
                                                    <option>Store</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions">
                                                    <option>All Actions</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4 col-lg-3">
                                            <div class="form-group">
                                                <select class="form-control" id="city2">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="Actions3">
                                                    <option>All Actions</option>
                                                    <option>Sales</option>
                                                    <option>Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city3">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <select class="form-control" id="city5">
                                                    <option>All City</option>
                                                    <option>City 1</option>
                                                    <option>City 2</option>
                                                    <option>City 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between align-items-end"> -->
                                    <!-- More Filter -->
                                    <!-- <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div> -->
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

    <footer class="footer">
        
        <div class="footer_bar">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
                            <div class="cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://ruhul55.blogspot.com/" target="_blank">Ruhul</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
                            <div class="footer_nav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About us</a></li>
                                    <li><a href="project.php">Properties</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>

    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>