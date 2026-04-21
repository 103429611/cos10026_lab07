
<?php
	function sanitise_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$firstname = sanitise_input($_POST["firstname"]);
		$lastname = sanitise_input($_POST["lastname"]);
		$age = sanitise_input($_POST["age"]);
		$booking = isset($_POST["booking"]) ? $_POST["booking"] : [];
		$booking_string = implode(", ", $booking);
		$species = sanitise_input($_POST["species"]);
		$food = sanitise_input($_POST["food"]);
		$date = sanitise_input($_POST["bookday"]);
		$partysize = sanitise_input($_POST["partysize"]);

		echo "<h1>Rohirrim Tour Booking Confirmation</h2><br>";
		echo "<p>Welcome $firstname $lastname !</p>";
		echo "<p> You are now booked on the  $booking_string package</p>";
		echo "<p>Species: $species</p>";
		echo "<p>Age: $age</p>";
		echo "<p>Meal Preference: $food</p>";
		echo "<p>Number of travelllers: $partysize</p>";
		echo "<p>For date: $date</p>";
		echo "<h2>We look forward to seeing you and hope you enjoy your stay</h2>";

		
	}
?>


<!-- 		