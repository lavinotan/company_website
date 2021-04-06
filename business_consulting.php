<!DOCTYPE html>
<html lang="en">
<!-- 
	author: Lavino Wei-Chung Chen
	date: 2019/11/25
-->
	<head>
		<title>Group Century Industry Co Ltd - Business Consulting</title>
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
		<h1>Business Consulting</h1>
	</div>
	
	<div class="content businessconsulting_content">
			
		<div class="businessconsulting_left">
			<div>
			<h1>We tailor our services to meet <br /> your needs</h1>
			</div>
			
			<div class="">
				
				<div>
					<h2>International Trading</h2>
					<p>Import and export consultation, process management, and logistic and warehousing assistance.</p>
				</div>
			</div>

			<div>
				
				<div>
					<h2>Product Development</h2>
					<p>Product consultation and advice for marketing, sales, and design.</p>
				</div>
			</div>

			<div>
				
				<div>
					<h2>Business collaboration</h2>
					<p>Overseas business unit set up, business development and cooperation, and strategic planning.</p>
				</div>
			</div>
		</div>
		
		<div class="businessconsulting_right">
			<img src="images/businessconsulting_1.jpg" alt="Business Consulting" />
		</div>		
	</div>
	
	<div class="content businessconsulting_top">
		<hr>
		<h2><a href="contact_us.php">Contact Us</a> for more details and customized services for more opportunities</h2>
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