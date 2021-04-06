<!DOCTYPE html>
<html lang="en">
<!-- 
	author: Lavino Wei-Chung Chen
	date: 2019/11/25
-->
	<head>
		<title>Group Century Industry Co Ltd - Trading Service</title>
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
		<h1>Trading Services</h1>
	</div>
	
	<div class="content">

	<div class="trading_row">
		<h1>Looking for products?<br />
		We customize your need and requirements <br />in the most efficient timing</h1>
		
		<br />
		
		<p>We can help you find all types of products you need with decent price and quality, <br />and deliver them in time for your business.</p>

		<p>Primarily, we import and export products between Asia and Europe. You can find products from us which are made in Asia, such as China, Vietnam, the Philippines, or Taiwan.</p>
	</div>
	
	<div class="trading_row">
		<table class="trading_table">
		<tr>
			<td class="table_cell">
			<img src="images/trading_photo1.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Rubber or Plastic Products</h3>
				<p>All types of rubber or plastic products</p>
				</div>
			</td>
			<td class="table_cell">
			<img src="images/trading_photo2.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3 >Stationary</h3>
				<p>Office supplies, writing implements, school supplies, etc.</p>
				</div>
			</td>
			<td class="table_cell">
			<img src="images/trading_photo3.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Department Store Goods</h3>
				<p>Sport goods, furnishings, pet products, miscellaneous Items, etc.</p>
				</div>
			</td>
		</tr>
		<tr>
			<td class="table_cell">
			<img src="images/trading_photo4.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Toys</h3>
				<p>All types of toys for kids, teenagers, pets, etc.</p>
				</div>
			</td>
			<td class="table_cell">
			<img src="images/trading_photo5.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Gifts & Souvenirs</h3>
				<p>All types of souvenirs, gifts, cards, decorations, etc.</p>
				</div>
			</td>
			
			<td class="table_cell">
			<img src="images/trading_photo6.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Home Hardware</h3>
				<p>Gardening, toiletries, hardware equipment, etc.</p>
				</div>
			</td>
			
		</tr>
		<tr>
			<td class="table_cell">
			<img src="images/trading_photo7.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>General Household Items</h3>
				<p>Cleaning equipment, towels, bathroom supplies, etc.</p>
				</div>
			</td>
			
			<td class="table_cell">
			<img src="images/trading_photo8.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Cloth, Garment & Apparels</h3>
				<p>All types of apparels and footware for kids, children, women, men, etc.</p>
				</div>
			</td>
			
			<td class="table_cell">
			<img src="images/trading_photo9.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Automobile Supplies & Accessories</h3>
				<p>Autmobile hardware, equipment, repair parts, etc.</p>
				</div>
			</td>
			
			
		</tr>
		<tr>
			<td class="table_cell">
			<img src="images/trading_photo10.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>LED Lights</h3>
				<p>All types of LED light goods</p>
				</div>
			</td>
			
			<td class="table_cell">
			<img src="images/trading_photo11.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Kitchenware</h3>
				<p>Cooking tools, equipment, utensils, dishes, etc.</p>
				</div>
			</td>
			
			<td class="table_cell">
			<img src="images/trading_photo12.jpg" alt="product sample" />
				<div class="tablecell_text">
				<h3>Wine, Coffee & Tea</h3>
				<p>Packed grocery goods, wine, coffee, tea, etc.</p>
				</div>
			</td>
		</tr>
		</table>	
	</div>
	
	<div class="trading_row">
		<hr>
		<h2>See our <a href="products.php">Samples and Products gallery</a> or <a href="contact_us.php">Contact Us</a> for details and business opportunity</h2>	
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