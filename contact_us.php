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
		
		<h1>Contact Us</h1>
		
	</div>
	
	<div class="content contactus_top">
		<div class="contactus_wrap1">
			<div class="contactus_row">
				<h3>Address:</h3>
				<p>P.O. Box 20-31 Hsin Tien Taipei, Taiwan</p>				
			</div>
			<div class="contactus_row">
				<h3>Phone:</h3>
				<p>+886-932-918-821</p>				
			</div>
			<div class="contactus_row">
				<h3>Fax:</h3>
				<p>+886-2-2918-4626</p>
			</div>
			<div class="contactus_row">
				<h3>Email:</h3>
				<p>groupcentury@gmail.com</p>
			</div>
		</div>

	</div>

	<div class="content contactus_bottom">
	
		<div id="google_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2613.2837042957085!2d121.5413563676094!3d24.981467521963726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346801f9408c0863%3A0xb8dabcb2612b9c36!2sDapinglin%20Station!5e0!3m2!1sen!2sca!4v1573335904000!5m2!1sen!2sca" ></iframe>
		</div>
		
		<div class="contactus_form">
			
			<fieldset>
			<form action="formmail.php" method="post">
				<div class="form_name">
					<div class="form_nameRow">
						<label class="form_label" for="firstname">First Name</label>
						<span class="form_star">*</span>
						<br />
						<input class="form_textinput inputName" type="text" placeholder="First Name" name="firstname" id="firstname"/>
					</div>
					<div class="form_nameRow form_nameRow2">
						<label class="form_label" for="lastname">Last Name</label>
						<span class="form_star">*</span>
						<br />
						<input class="form_textinput inputName" type="text" placeholder="Last Name" name="lastname" id="lastname"/>
						
					</div>
				</div>			
				
				<br />
				
				<label class="form_label" for="email">Email</label>
				<span class="form_star">*</span>
				<input class="form_textinput" type="text" placeholder="Email Address" name="email" id="email"/>
				
				<br />
				
				<label class="form_label" for="subject">Subject</label>
				<input class="form_textinput" type="text" placeholder="Subject" name="subject" id="subject" />
				
				<br />
				
				<label class="form_label" for="message">Message</label>
				<textarea placeholder="Please write us your message" name="message" id="message"></textarea>
				
				<br />
				
				<input class="submit_button" type="submit" value="Submit" />
			
				<input type="hidden" name="recipient" value="lavinotw@hotmail.com" />
			</form>
			</fieldset>
			
			
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
	
	<!-- function myMap() {
			var mapProp= {
			center:new google.maps.LatLng(51.508742,-0.120850),
			zoom:5,
			};
			var map = new google.maps.Map(document.getElementById("google_map"),mapProp);
			} 
			<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> 
			-->

	
	
		
	</body>
</html>