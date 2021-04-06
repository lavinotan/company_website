<!DOCTYPE html>
<html lang="en">
<!-- 
	author: Lavino Wei-Chung Chen
	date: 2019/11/25
-->
	<head>
		<title>Group Century Industry Co Ltd - About Us</title>
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
		<h1>About Us</h1>
	</div>
	
	<div class="content aboutus_top">
	<div class="aboutus_wrap1">
		<div class="aboutus_intro1">
			<img src="images/logo.JPG" alt="World Map with Location Marks" />
		</div>
		<div class="aboutus_intro2">
			<h2>Group Century Industry</h2>
		
			<p>Founded in Taipei, Taiwan in 1991, Group Century Industry Co. Ltd. has been providing excellent, international trading and business consultation services for customers around the world. In 2001, Group Century Industry expanded its business and marketing services, by collaborating and co-founding Trade Table Co. Ltd. in Hongzhou, China.</p>

			<p>With more than 30 year professional business practice, we have served our clients, suppliers, and established business partnerships in the following countries:</p>
		</div>
	</div>
	
	<div class="aboutus_wrap2">
		<img src="images/wordmapwithcountryincolourselected.png" alt="World Map with Location Marks" />
	</div>
			
	<div class="aboutus_wrap3">
		<div class="aboutus_wrap3_row">
			<ul>
				<li>Australia</li>
				<li>Canada</li>
				<li>China</li>
				<li>Estonia</li>
				<li>France</li>
				<li>Germany</li>
				<li>Hong Kong</li>
			</ul>	
		</div>
		<div class="aboutus_wrap3_row">
			<ul>
				<li>Ireland</li>
				<li>Italy</li>
				<li>North Korea</li>
				<li>Taiwan</li>
				<li>UK</li>
				<li>USA</li>
				<li>Vietnam</li>
			</ul>
		</div>
	</div>	
	</div>
	
	<div class="aboutus_middle">
	<div class="aboutus_wrap4">
		<p>We can help you find all types of products you need with decent price and quality in the most efficient timing, and deliver them in time for your business. 

		<p>For importing and exporting services, we are well-experienced with customized designing and providing products including toys, gifts, LED lights, automobile parts, apparels, souvenirs, general household items, home hardware, cloth, garment, decoration items, kitchenware, wine, coffee, and miscellaneous items, etc.</p>

		<p>Serving with efficiency, honest and integrity, Group Century Industry is reliable and can be your top-rated business partnership to your success.</p>
	</div>
	</div>

	
	<div class="content aboutus_bottom">
		<div class="aboutus_wrap5_image">
			<img src="images/ceo_photo.jpg" alt="CEO Photo" />
		</div>
		
		<div class="aboutus_wrap5_text">
			<h2>CEO & Founder</h2>
			<p>Principal and founder of international trading companies in Hong Kong, Taiwan, and China, trading diverse products between Asia, America, and Europe.</p>

			<p>Executive managing director of logistic companies in Hong Kong and China.</p>

			<p>Non-executive director of business and investment consulting firms in Italy, Ireland, Vietnam, Hong Kong, Taiwan, and China.</p>

			<p>35-year international trading experience in directorship capacity with solid accomplishments in various product design and marketing, product development, strategic planning, business development, sales and logistics, and customer services.</p>
		
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