<!DOCTYPE html>
<html lang="en">
<!-- 
	author: Lavino Wei-Chung Chen
	date: 2019/11/25
-->
	<head>
		<title>Group Century Industry Co Ltd - Partnership</title>
		<meta charset="utf-8" />
		<link type="text/css" rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="images/logo.JPG" type="image/jpg" sizes="16x16">	
	</head>
	<body>
	
	<?php
	include ("includes/page_top.php");
	?>
	
	<?php
	include ("includes/navigation.php");
	?>
	
	<div class="header">
		<div>
		<img class="header_backgroundimage" src="images/worldmapwithtaipeibackground_2.jpg" alt="Company Office">
		</div>
		<h1>Partnership</h1>
	</div>
	<div class="content">
		
		<div class="partnership_top">
			<h1>Our Business Partners</h1>
			
			<br />
			
			<p>Group Century Industry Co. Ltd. has built strong relationship with our clients and business partners over the 30 year business professions. We support our business partners with overseas business collaboration development, product development, and trading services.</p>

			<p><a href="trading.php" target="_blank">Find more about our services</a></p> 

			<p>Our business partners over the world are very pleased and satisfied with our collaboration, demonstrating the win-win success of Company co ltd in the following countries:</p>

			<p>Australia, Canada, China, Estonia, France, Germany, Hong Kong, Ireland, Italy, North Korea, Taiwan, UK, USA, and Vietnam.</p>
		</div>

		<div class="partnership_middle">
			<div class="partnership_box">
				<img src="images/parternships/tti.jpg" alt="Trade Table Industry" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/royalcountyproducts.jpg" alt="Royal County Products" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/magiclights.jpg" alt="Magic Lights" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/editionsdutonnerre.jpg" alt="Editions Du Tonnerre" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/brandart.jpg" alt="Brand Art" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/carole.jpg" alt="Carole Souvenirs" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/perfect.jpg" alt="Perfekt Au" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/pbi.jpg" alt="PBI" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/legiuliette.jpg" alt="Le Giuliette" />
			</div>
			<div class="partnership_box">
				<img src="images/parternships/mccauley.jpg" alt="McCauley" />
			</div>
			
		</div>
		
		<hr>
		
		<div class="partnership_bottom" >
		<h2><a href="contact_us.php">Contact Us</a> for more details and partnership opportunities</h2>
		</div>
				

	</div>
	
	<?php
	include ("includes/sitemap_footer.php");
	?>
	
	<script>
			window.onscroll = function() {myFunction()};

			var navigation_bar = document.getElementById("navigation");
			var sticky = navigation_bar.offsetTop;

			function myFunction() {
				if (window.pageYOffset > sticky) {
					navigation_bar.classList.add("sticky");
				} else {
					navigation_bar.classList.remove("sticky");
				}
			}
	</script>
		
	</body>
</html>