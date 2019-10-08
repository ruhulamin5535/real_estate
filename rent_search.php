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

	<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/properties.css">
<link rel="stylesheet" type="text/css" href="styles/properties_responsive.css">


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">

				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="index.php"><img src="images/property.jpg" alt=""></a>
						</div>
						<nav class="main_nav">
							<ul>
								   <li><a href="#">blog</a></li>
                                  <li><a href="normalHomeSale.php">new project</a></li>
                                  <li><a href="#">payment </a></li>
                                  <li><a href="realestate.php">realestate solution</a></li>
                                  <li><a href="#">property list</a></li>
							</ul>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
	</header>

	

	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/properties.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<!-- <div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Search results</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index.htmo">Home</a></li>
									<li>Search Results</li>
								</ul>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>


	<!-- Hero section end -->
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
	<!-- Filter form section -->
	<!-- <div class="filter-search">
		<div class="container">
			<form class="filter-form" method="post" action="normalHomeSale.php">
			<h2>Search by Location</h2>
			<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;City</h4>
			
			
				<select name="loc">
										<option value="All" selected>All</option>
					<?php 
					while($p1=mysqli_fetch_array($r1, MYSQLI_ASSOC))
					{
						echo "<option value='".$p1['location']."'>".$p1['location']."</option>";
					}
					?>
				</select>
				<select name="city">
					<option value="All" selected>All</option>
					<?php 
					while($p2=mysqli_fetch_array($r2, MYSQLI_ASSOC))
					{
						echo "<option value='".$p2['city']."'>".$p2['city']."</option>";
					}
					?>
				</select>
				<button class="site-btn fs-submit" type="submit">SEARCH</button>
			</form>
		</div>
	</div> -->
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
								<div class='sale-notic'>FOR rent</div>
									<div class='propertie-info text-white' style="background-image:url('<?php echo $x['image'] ?>');height:270px">
									<div class='info-warp'>
										<p><i class='fa fa-map-marker'></i><?php echo $x['location'] ?></p>

									</div>
									<button class='price' type='submit'><?php echo "Rs. ".$x['rent_amount'] ?></button>
									</div>
									
									</form>
							</div>
				<?php
						}
				?>
			</div>
		</div>
		<!-- <br><br>
		<h2 align="center">Your Properties</h2>
		<br><br>
		<div class="container">
		<div class="row">
				<?php
						$ab="select * from flat natural join sale where uid=".$_SESSION['id']."";
						$r1 = $conn->query($ab);
						while($y=mysqli_fetch_array($r1, MYSQLI_ASSOC))
						{
							?>
							<div class='col-md-4' style="height:300px;">
								<form action='single-list_sale.php?action=add&id=<?php echo $y['flat_id']; ?>' method="post">
								<div class='sale-notic'>FOR Sale</div>
								
									<div class='propertie-info text-white' style="background-image:url('<?php echo $y['image'] ?>');height:270px">
									<div class='info-warp'>
										<p><i class='fa fa-map-marker'></i><?php echo $y['location'] ?></p>
									</div>
									<button class='price' type='submit'><?php echo "Rs. ".$y['totalcost'] ?></button>
									</div>

									</form>
							</div>

				<?php
						}
				?>
			</div>
		</div> -->
	</section>

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
									<li><a href="properties.php">Properties</a></li>
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

	<!-- Footer section end -->                               
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>