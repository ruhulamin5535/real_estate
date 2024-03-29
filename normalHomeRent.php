<!DOCTYPE html>
<html lang="en">
<head>
	<title>HOUSING-CO</title>
	<meta charset="UTF-8">
	<meta name="description" content="HOUSING-CO">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


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

</head>
<body>

	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info ">
							<h3>DashBoard</h3>
						</div>
					</div>
					<div class="col-lg-6 text-lg-right header-top-right">
						<div class="top-social">
							
							<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
							<a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
						
							
						</div>
						<div class="user-panel">
							<a href="logout.php"><?php session_start(); echo $_SESSION['username']."  ";?><i class="fa fa-user-circle-o"></i>Logout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="img/logo1.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
                            <li><a href="normalHomeSale.php">FOR SALE</a></li>
                            <li><a href="normalHomeRent.php">FOR RENT</a></li>
							
						
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container hero-text text-white">
			<h2>List your building on our website</h2>
			<a href="addprojectrent.php" class="site-btn">Add Now</a>
			<a href="show_rent.php" class="site-btn">Show</a>
			<a href="rent_property.php" class="site-btn">rent property</a>
			<a href="rent_information.php" class="site-btn">rent property statistics</a>
			
		</div>
	</section>

	<!-- Hero section end -->
	<?php 
    include('indexDB.php');
    $loc=$c=$pf=$pf1=$a=$a1=$tc=$tc1='';
    
    $q="SELECT * FROM rent_search ORDER BY flat_id DESC;";

    if(isset($_POST['loc']) && isset($_POST['city']) )
    {

       $loc=$_POST['loc'];
        $c=$_POST['city'];
       
            $q="SELECT * FROM rent_search WHERE countryid ='".$loc."' AND  stateid ='".$c."'  ORDER BY flat_id DESC";
       

         
    }
  
   
   
    
    ?>


	<!-- Filter form section -->
	<div class="filter-search">
		<div class="container">
			<form class="filter-form" method="post" action="normalHomeRent.php">
			<h2>Search by Location</h2>
			<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;City</h4>
			
			
				<select name="loc" name="loc" id="country-list" onChange="getState(this.value);">
										<option value="All" selected>All</option>
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
				<select name="city"  id="state-list">
					<option value="All" selected>All</option>
					
				</select>
				<button class="site-btn fs-submit" type="submit">SEARCH</button>
			</form>
		</div>
	</div>
	<!-- page -->
	<section class="page-section categories-page">
		<br><br>
		<h2 align="center">All Properties</h2>
						<br><br>
		<div class="container">
			<div class="row">

				<?php
						$r = $conn->query($q);
						while($x=mysqli_fetch_array($r, MYSQLI_ASSOC))
						{
							?>
							<div class='col-md-4' style="height:300px;">
								<form action='single-list_rent.php?action=add&id=<?php echo $x['flat_id']; ?>' method="post">
								<div class='sale-notic'>FOR Rent</div>
									<div class='propertie-info text-white' style="background-image:url('<?php echo $x['image'] ?>');height:270px">
									<div class='info-warp'>
										<p><i class='fa fa-map-marker'></i><?php echo $x['location'] ?></p>
									</div>
									<button class='price' type='submit'><?php echo "Tk. ".$x['rent_amount'] ?></button>
									</div>
									</form>
							</div>
				<?php
						}
				?>
			</div>
		</div>
		
			
	</section>
	
	
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-widget">
					<img src="img/logo1.png" alt="">
					<p>We provide you with the best services which is best for your family and which suits your pocket.</p>
					<div class="social">
						
						<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
							<a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
							
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="contact-widget">
						<h5 class="fw-title">CONTACT US</h5>
						<p><i class="fa fa-map-marker"></i>You can contact us here......  </p>
						<p><i class="fa fa-phone"></i>Number</p>
						<p><i class="fa fa-envelope"></i>info.housing-co@gmail.com</p>
						<p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 footer-widget">
					<div class="double-menu-widget">
						<h5 class="fw-title">POPULAR PLACES</h5>
						<ul>
							<li><a href="">Mumbai</a></li>
							<li><a href="">Delhi</a></li>
							<li><a href="">Chennai</a></li>
							<li><a href="">Kolkata</a></li>
							<li><a href="">Banglore</a></li>
						</ul>
						<ul>
							<li><a href="">Chandigarh</a></li>
							<li><a href="">Pune</a></li>
							<li><a href="">Jaipur</a></li>
							<li><a href="">Kochi</a></li>
							<li><a href="">Ooty</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6  footer-widget">
					<div class="newslatter-widget">
						<h5 class="fw-title">NEWSLETTER</h5>
						<p>Subscribe your email to get the latest news and new offer also discount</p>
						<form class="footer-newslatter-form">
							<input type="text" placeholder="Email address">
							<button><i class="fa fa-send"></i></button>
						</form>
					</div>
				</div>
			</div>
			
		</div>
	</footer>
	<!-- Footer section end -->                               
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>