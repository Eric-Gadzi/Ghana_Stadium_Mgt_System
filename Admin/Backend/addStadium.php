<?php
	
	require_once 'stadium.php';


	if(isset($_GET['submit'])){
		$stadium_name = $_GET['stadium_name'];
		$capacity = $_GET['capacity'];
		$email = $_GET['email'];
		$contact = $_GET['number'];
		$stadium_type = $_GET['stadium_type'];
		$club_associated = $_GET['club_associated'];
		$location = $_GET['town'].", ".$_GET['region'];
 		$date_built = $_GET['date'];
 		createNewStadium($stadium_name, $capacity, $stadium_type, $club_associated, $location, $email, $contact, $date_built);
		 echo " <script> 
		 	window.location.href= '../Frontend/Dashboard.php';
		 		</script>

		 ";

	}
	
	die();
	// header("Location: ../Frontend/Dashboard.php");




?>