<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/bar/bar.css"/>
	<link rel="stylesheet" type="text/css" href="css/dark/dark.css"/>
	<link rel="stylesheet" type="text/css" href="css/default/default.css"/>
	<link rel="stylesheet" type="text/css" href="css/light/light.css"/>
	<link rel="stylesheet" type="text/css" href="css/nivo-slider.css"/>
	
    <title>       
    </title>
	
</head>
	
<body>

<div class="main">
		<div class="header">
			<img src="images/shop.jpg" alt="header image can not found"/>
		</div>
		<div class="main-menu">
			<ul>
				<li> <a href="index.php">Home:</a> </li>
				<li> <a href="">Fashion & Life-Style: </a> </li>
				<li> <a href="ordersystem.php">Product: </a></li>
				<li> <a href="login.php">Login:</a> </li>
				<li> <a href="registation.php">Register:</a> </li>
				<li> <a href="contact-us.php">Contact Us:</a> </li>
			</ul>
		</div>
		<div class="slider" align="center">
				<u><h1>Package List:</h1></u>
		
			
					<?php 
							include ('db.php');
							$query=mysql_query("SELECT * FROM package order by package_id ");
								while($row=mysql_fetch_array($query))
						{		
					?>		
						<table  >
							<tr align="center">
							   <td><img  style="height:316px; width:900px; border-radius:4px;" src="uploads/<?php echo $row['img'];?>"</img></td>
							</tr>
							<tr>
								 <td>
								 Name:<?php echo $row['package_name'];?></br>
								 Price:<?php echo $row['package_price'];?>tk</br>
								 <a href="login.php">ORDER</a>
								 </td>
							</tr>
							<br>
						</table>
					
					<?php
						}
					?>	
            <div>					
	<div class="footer">
			<p>&copy;zinia shopping</p>
	</div>
	
</div>				

</body>
</html>


