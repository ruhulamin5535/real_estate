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
	<link rel="stylesheet" href="css/style.css"/>
		
	
	<link rel="stylesheet" type="text/css" href="Styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="styles/properties.css">



	

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
                                  
                                  <li><a href="realestate.php">realestate solution</a></li>
                                  
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
    $loc=$c=$pf=$pf1=$a=$a1=$tc=$tc1='';

    $conditions = "";
    if (isset($_POST['loc']) && $_POST['loc']) {
    	$conditions.= "countryid=".$_POST['loc']." AND ";
    }

    if (isset($_POST['city']) && $_POST['city']) {
    	$conditions.= "stateid=".$_POST['city']." AND ";
    }

    if (isset($_POST['p_feature']) && $_POST['p_feature']) {
    	$conditions.= "p_feature=".$_POST['p_feature']." AND ";
    }

    if (isset($_POST['p_feature1']) && $_POST['p_feature1']) {
    	$conditions.= "p_feature1=".$_POST['p_feature1']." AND ";
    }
    if (isset($_POST['price_min_value']) && $_POST['price_min_value'] && $_POST['price_max_value']) {
    	$conditions.= "rent_amount BETWEEN ".$_POST['price_min_value']." AND ".$_POST['price_max_value']." AND ";
    }
    if (isset($_POST['area_min_value']) && $_POST['area_min_value'] && $_POST['area_max_value']) {
    	$conditions.= "area BETWEEN ".$_POST['area_min_value']." AND ".$_POST['area_max_value']." AND ";
    }


    $conditions.= " 1";


    
     

    /*if(($_POST['loc']) && $_POST['loc']) || isset($_POST['city']) || isset($_POST['p_feature']) || isset($_POST['p_feature1']) || isset($_POST['price_min_value']) || isset($_POST['price_max_value']) || isset($_POST['area_min_value']) || isset($_POST['area_max_value']) )
    {

       $loc=$_POST['loc'];
        $c=$_POST['city'];
        $pf=$_POST['p_feature'];
        $pf1=$_POST['p_feature1'];
        $a=$_POST['area_min_value'];
        $a1=$_POST['area_max_value'];
        $tc=$_POST['price_min_value'];
        $tc1=$_POST['price_max_value'];

          $q="SELECT * FROM  rent_search WHERE  countryid ='".$loc."' OR  stateid ='".$c."' OR p_feature ='".$pf."'
            OR p_feature1 ='".$pf1."' OR rent_amount BETWEEN  '".$tc."' AND  '".$tc1."' OR area BETWEEN 
            '".$a."' AND  '".$a1."' OR status='1'  ORDER BY flat_id DESC";
       
         
    }
    else
    {
    	$q="SELECT * FROM rent_search where status ='1' ORDER BY flat_id DESC";
    }*/

    	$q="SELECT * FROM rent_search where status ='1' AND ".$conditions." ORDER BY flat_id DESC";

   
  
   
   
    
    ?>

	
	<section class="page-section categories-page">
		<br><br>
		<h2 align="center">All Properties</h2>
						<br><br>
		<div class="container">
			<div class="row">

				<?php
				// $q="SELECT * FROM rent_search where status ='1' ORDER BY flat_id DESC";
						$r = $conn->query($q);
						
						while($x= mysqli_fetch_array($r, MYSQLI_ASSOC))
						{


							?>
							<div class='col-md-4' style="height:300px;">
								<form action='ssingle-list_rent.php?action=add&id=<?php echo $x['flat_id']; ?>' method="post">
								<div class='sale-notic'>FOR rent</div>
									<div class='propertie-info text-white' style="background-image:url('<?php echo $x['image'] ?>');height:270px">
									<div class='info-warp'>
										<p><i class='fa fa-map-marker'></i><?php echo $x['location'] ?></p>

									</div>
									<button class='price' type='submit'><?php echo "TK. ".$x['rent_amount'] ?></button>
									</div>
									
									</form>
							</div>
				<?php
						}
				?>
			</div>
		</div>
		
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
	
<script src="plugins/parallax-js-master/parallax.min.js"></script>

</body>
</html>