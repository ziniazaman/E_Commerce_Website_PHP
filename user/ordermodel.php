<?php
session_start();
if(!isset($_SESSION['sess_user']) || $_SESSION['sess_user']!='user')
{
	header("location:../login.php");
}
else{
	
	include ('db.php');
	$user=$_SESSION['sess_user'];
?>
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
							
							<td><h3>Please Select The Orders Day</h3></td>
								<ul>
									<li><a class="a02" href="day.php?day_name=saturday">Saturday</a></li>
									<li><a class="a02" href="day.php?day_name=sunday">Sunday</a></li>
									<li><a class="a02" href="day.php?day_name=monday">Monday</a></li>
									<li><a class="a02" href="day.php?day_name=tuesday">Tuesday</a></li>
									<li><a class="a02" href="day.php?day_name=wednesday">Wednesday</a></li>
									<li><a class="a02" href="day.php?day_name=thursday">Thursday</a></li>
									<li><a class="a02" href="day.php?day_name=friday">Friday</a></li>
								</ul>
			</ul> 
			
			</div>
			<div class="main-menu-right">
			<ul>
			
				<li> <a href="home_user.php">Home:</a> </li>
				<li> <a href="user_profile.php">Profile:</a> </li>
				<li> <a href="logout.php">Log out</a> </li>
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

<?php
}
?>