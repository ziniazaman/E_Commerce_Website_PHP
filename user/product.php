<?php
session_start();
if(!isset($_SESSION["sess_user"]) || $_SESSION['sess_user']!='user')
{
	header("location:index.php");
} 
else{
	
	include ('db.php');
	$user=$_SESSION['sess_user'];
	
	//echo "<br/>".$user."<br/>".$fname;
	//$query=mysql_query("SELECT * FROM registration where username='".$user."'" );
	
	
?>
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
		<div class="main-menu-left">
			<ul>
			<td><h3>Please Select The Orders Product:</h3></td>
								<ul>
								
									<li><a class="a02" href="product.php?product_name=Shari">Shari</a></li>
									<li><a class="a02" href="product.php?product_name=Jewellery">Jewellery</a></li>
									<li><a class="a02" href="product.php?product_name=Tops">Tops</a></li>
									<li><a class="a02" href="product.php?product_name=Bags">Bags</a></li>
									<li><a class="a02" href="product.php?product_name=Shoes">Shoes</a></li>
									
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
		<div class="slider" align="center">
		<h1><u>Package List:</u></h1>
			
					<?php 
						include ('db.php');
						$product_name=$_GET['product_name'];
						
						$query=mysql_query("SELECT * FROM package JOIN product ON package.package_id=product.package_id where product.product_name='".$product_name."'");		
							while($row=mysql_fetch_array($query))
							{
					?>
					
							
							<table >
								<tr >
								<td>
								   <img style="width:900px; height:316px;" src="../uploads/<?php echo $row['img'];?>"></img>
								</td>
								</tr>
								<tr>
								 <td>
								 Name:<?php echo $row['package_name'];?></br>
							
								 Price:<a href=""><?php echo $row['package_price'];?>tk</a></br>
							     <a href="show_package.php?package_id=<?php echo $row['package_id'];?>&product_name=<?php echo $row['product_name'];?>">ORDER</a>
								 </td>
							</tr>							<br>
						</table>
					
					<?php
						}
					?>
		<div class="footer">
			<p>&copy;zinia shopping</p>
		</div>
		</div>
<script>        
  	function getPackageName(pname){
  	 $.ajax({
          url: "show_package3.php?product_name=<?php echo $product_name;?>",
          type: "get",
          data: {package_id:pname},
          success: function(msg) {
             $('#myModal').html(msg);
             alert(""+msg);

          }
      });
  }	
</script>

</body>
</html>

<?php
}
?>
<script>
function showAlert()
{
	alert("You have to order before Available Time");
	window.location.href='product.php?product_name=<?php echo $product_name; ?>';
}
</script>