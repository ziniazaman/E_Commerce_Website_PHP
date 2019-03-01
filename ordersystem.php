
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bar/bar.css"/>
	<link rel="stylesheet" type="text/css" href="css/dark/dark.css"/>
	<link rel="stylesheet" type="text/css" href="css/default/default.css"/>
	<link rel="stylesheet" type="text/css" href="css/light/light.css"/>
	<link rel="stylesheet" type="text/css" href="css/nivo-slider.css"/>
</head>
<body> 
       <div class="main">
		<div class="header">
			<img src="images/shop.jpg" alt="header image can not found"/>
		</div>
	<div class="main-menu">
		<div class="main-menu-left">
		<ul>
			<td><h3>Please Select The Orders Product:</h3></td>
								<ul>
								
									<li><a class="a02" href="product.php?product_name=shari">Shari</a></li>
									<li><a class="a02" href="product.php?product_name=jewellery">Jewellery</a></li>
									<li><a class="a02" href="product.php?product_name=Tops">tops</a></li>
									<li><a class="a02" href="product.php?product_name=Bags">bags</a></li>
									<li><a class="a02" href="product.php?product_name=Shoes">shoes</a></li>
									
								</ul> 
		</ul> 
		</div>
		<div class="main-menu-right">
			
			<ul>
							
			
				<li> <a href="index.php">Home:</a> </li>
				<li> <a href="package.php">Fashion & Life-Style: </a> </li>
				<li> <a href="login.php">Login:</a> </li>
				<li> <a href="registation.php">Register:</a> </li>
				<li> <a href="contact-us.php">Contact Us:</a> </li>
				</ul>

			
			</div>
	</div>
			<div class="slider">
			<div class="slider1">
				<div class="slider-wrapper theme-light">
					<div class="nivoSlider" id="slider">
						
						<img src="images/abcde.jpg" alt="" title="This site developed by zim"/>
						<img src="images/ashari1.jpg" alt=""/>
						<img src="images/ashari2.jpg" alt="" title="#htmlcaption"/>
						<img src="images/btops1.jpg" alt=""/>
						<img src="images/btops2.jpg" alt=""/>
						<img src="images/cgohona1.jpg" alt=""/>
						<img src="images/cgohona2.jpg" alt=""/>
						<img src="images/dbag1.jpg" alt=""/>
						<img src="images/dbag2.jpg" alt=""/>
						<img src="images/eshoe1.jpg" alt=""/>
						<img src="images/eshoe2.jpg" alt=""/>
						
					</div>
			</div>
					<div class="nivo-html-caption" id="htmlcaption">
						<p>This is html caption. This is <a href="http://w3schools.com">link</a></p>
					</div>
				</div>
				<!--<img src="images/slider.jpg" alt="slider image can not found" />-->
			</div>
			
			
		
		
		
		<div class="footer">
				<p>&copy;zinia shopping</p>
		</div>
	</div>
	
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
		</script>
</body>
</html>

