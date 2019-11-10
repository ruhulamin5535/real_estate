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
<script>
    function getState(val) {
        $.ajax({
        type: "POST",
        url: "get_state.php",
        data:'countryid='+val,
        success: function(data){
            $("#state-list").html(data);
            $(".nice-select").hide();
            $("#state-list").show();
            $("#country-list").show();
            $("#bedrooms").show();
            $("#bathrooms").show();
            $("#area").show();
            $("#totalcost").show();
        }
        });
    }
    </script>


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
                                
                                <li><a href="#">property management</a>
                                    <ul class="dropdown">
                                        <li><a href="realestate.php">realestate </a></li>
                                        
                                        
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
                        <form action="sell_search.php" method="post" id="advanceSearch">
                            <div class="row">

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control"  name="loc" id="country-list" onChange="getState(this.value);">
                                            <option value="0">Location</option>
                                              <?php
                                                $sql1="SELECT * FROM country";
                                                 $results=$conn->query($sql1); 
                                                while($rs=$results->fetch_assoc()) { 
                                                ?>
                                                <option value="<?php echo $rs["countryid"]; ?>"><?php echo $rs["location"]; ?></option>
                                                <?php
                                                }
                                                ?> 
                                        </select>
                                    </div>
                                </div>

                               
                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                       <select class="form-control"  name="city" id="state-list">
                                            <option value="0">city</option>
                                         
                                        </select>
                                    </div>
                                </div>

                              
                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" name="p_feature" id="bedrooms">
                                             <option value="0">Bedrooms</option>
                                              <option>4</option>
                                               <option>6</option>
                                                <option>8</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-xl-2">
                                    <div class="form-group">
                                        <select class="form-control" name="p_feature1" id="bathrooms">
                                            <option value="0">Bathrooms</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                              
 
                              
                                    <!-- Space Range -->
                                    <div class="slider-range">
                                        <label>price </label>
                                        <div data-min="1000" data-max="100000000" data-unit=" T.K" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="1000" data-value-max="100000000">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">1000tk - 100000000tk</div>
                                        <input type="hidden" class="range-min-value" name="price_min_value">
                                        <input type="hidden" class="range-max-value" name="price_max_value">
                                        
                                    </div>
                                     
                                    
                                    <!-- Distance price -->
                                    <div class="slider-range">
                                       <br><br> <label>area </label><br><br>
                                        <div data-min="600" data-max="4200" data-unit=" sq.ft" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="600" data-value-max="4200">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">600sq.ft. - 4200sq.ft.</div>
                                        <input type="hidden" class="range-min-value" name="area_min_value">
                                        <input type="hidden" class="range-max-value" name="area_max_value">
                                        
                                    </div>
                                   
                                     
                                      

                             

                                <div class="col-12 d-flex justify-content-between align-items-end">
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



<script src="plugins/parallax-js-master/parallax.min.js"></script>

  

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