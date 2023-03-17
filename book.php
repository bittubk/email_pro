
<!DOCTYPE html> 
<html> 
<head> 
	<title>Event Reservation - Coffee Shop</title> 
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>
<form action="https://formsubmit.co/bittukumarj2580@gmail.com" method="POST" >

	
	<h1>Event Reservation - Coffee Shop</h1> 
	
		
		<!-- <div class="form-group">  -->
			<label for="name">Full Name:</label> 
			<input type="text" id="name" name="name" required> 
		<!-- </div>  -->
		<!-- <div class="form-group">  -->
			<label for="email">Email:</label> 
			<input type="email" id="email" name="email" required> 
		<!-- </div>  -->
		<!-- <div class="form-group">  -->
			<label for="ph_no">Phone no:</label> 
			<input type="text" id="ph_no" name="ph_no" pattern="^[0-9]{10,15}$"  maxlength="10"  required> 
		<!-- <div>  -->
		<!-- <div class="form-group">  -->
			<label for="date">Event Date:</label> 
			<input type="date" id="date" name="date" min="<?php 
			// Set the default time zone to your preferred time zone
			date_default_timezone_set('Asia/Kolkata');
			
			// Get the current date in the format YYYY-MM-DD
			$current_date = date('Y-m-d');
			
			echo $current_date;
			
			
			?>"required> 
		<!-- </div>  -->
		<!-- <div class="form-group">  -->
			<label for="time">Event Time:</label> 
			<input type="time" id="time" name="time" required> 
		<!-- </div>  -->
		<!-- <div class="form-group">  -->
			<label for="location">Location</label> 
			<input type="address" id="location" name="location" required> 
		<!-- </div>  -->
		<!-- <div class="form-group">  -->
			<label for="e_type">Event Type:</label> 
			<select id="e_type" name="e_type" required> 
				<option value="">--Select Event Type--</option> 
				<option value="Birthday Party">Birthday Party</option> 
				<option value="Business Meeting">Business Meeting</option> 
				<!-- <option value="Networking Event">Networking Event</option>  -->
				<option value="Social Gathering">Social Gathering</option> 
				<option value="Wedding Reception">Wedding Reception</option> 
			</select> 
		<!-- </div>  -->
		<!-- <div class="form-group">  -->
			<label for="count">Number of Guests:</label> 
			<input type="number" id="count" name="count" min="1" required> 
		<!-- </div>  -->
		<!-- <div class="form-group">  -->
			<button type="submit" name="submit" value="submit"><B>submit</B></button>
			 <!-- <?php
			 include("succ.php
			 ");
			 ?> -->
		<!-- </div>  -->
	<!-- </form>  -->
		<!-- </form> -->
    <script src="main.js"></script>

	</body>
</html>
