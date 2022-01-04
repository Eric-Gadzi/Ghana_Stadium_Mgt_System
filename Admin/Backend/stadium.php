<?php
	
	require_once 'db_connection.php';


	$stadium_name = null;
	$capacity = null;
	$stadium_type;
	$club_associated;
	$location;
	$email;
	$contact;
 	$stadium_id;
 	$date_built;

 	
 	function createNewStadium($stadium_name, $capacity, $stadium_type, $club_associated, $location, $email, $contact, $year_built){

 		$conn = $GLOBALS['conn'];

 		$sql = "INSERT INTO `stadium`( `stadium_name`, `stadium_type`, `capacity`, `Club_associated_with`, `ghgps_code`, `year_built`, `contact`, `email`) VALUES ('$stadium_name','$stadium_type','$capacity','$club_associated','$location','$year_built','$contact','$email')";

 		$result = $conn->query($sql);

 		if($result){
 			$GLOBALS['stadium_name'] = $stadium_name;
			$GLOBALS['capacity'] = $capacity;
			$GLOBALS['stadium_type'] = $stadium_type;
			$GLOBALS['club_associated'] = $club_associated;
			$GLOBALS['club_associated'] = $location;
			$GLOBALS['email'] = $email;
			$GLOBALS['contact'] = $contact;
			$GLOBALS['date_built'] = $year_built;
 			$GLOBALS['stadium_id'] = $conn->insert_id;

 			echo "
 			<script>
 				alert('new stadium inserted successfully!');
 			</script>
 			";
 		}
 		else{
 			echo "
 			<script>
 				alert('ERROR!!! Could not insert stadium');
 			</script>
 			";
 		}
 	}


// This function gets the data for a particular stadium using the stadium id;
 	function getStadiumInfoById($id){
 		$conn = $GLOBALS['conn'];

 		$sql = "SELECT `Stadium_id`, `stadium_name`, `stadium_type`, `capacity`, `Club_associated_with`, `ghgps_code`, `year_built`, `contact`, `email` FROM `stadium` WHERE Stadium_id= '$id'";
 	
 		$result = $conn->query($sql);

 		if($result->num_rows > 0){
 			while($row = $result->fetch_Assoc()){
 				$GLOBALS['stadium_name'] = $row['stadium_name'];
 				$GLOBALS['stadium_type'] = $row['stadium_type'];
 				$GLOBALS['capacity'] = $row['capacity'];
 				$GLOBALS['club_associated'] = $row['Club_associated_with'];
 				$GLOBALS['location'] = $row['ghgps_code'];
 				$GLOBALS['date_built'] = $row['year_built'];
 				$GLOBALS['contact'] = $row['contact'];
 				$GLOBALS['email'] = $row['email'];
 				$GLOBALS['stadium_id'] = $row['Stadium_id'];
 			}
 		}else{
 			echo "
 				<script>
 					alert('Error!! requested data does not exit');
 				</script>
 			";
 			echo '<h1>'.$conn->error.'</h1>';
 		}

 	}


// This function gets the data for a particular stadium using the stadium name;
 	function getStadiumInfoByName($stadiumName){
 		$conn = $GLOBALS['conn'];
 		$stadiumName = strtolower($stadiumName);
 		$sql = "SELECT `Stadium_id`, `stadium_name`, `stadium_type`, `capacity`, `Club_associated_with`, `ghgps_code`, `year_built`, `contact`, `email` FROM `stadium` WHERE lower(stadium_name) LIKE '$stadiumName%'";
 	
 		$result = $conn->query($sql);

 		if($result->num_rows === 1){
 			while($row = $result->fetch_Assoc()){
 				$GLOBALS['stadium_name'] = $row['stadium_name'];
 				$GLOBALS['stadium_type'] = $row['stadium_type'];
 				$GLOBALS['capacity'] = $row['capacity'];
 				$GLOBALS['club_associated'] = $row['Club_associated_with'];
 				$GLOBALS['location'] = $row['ghgps_code'];
 				$GLOBALS['date_built'] = $row['year_built'];
 				$GLOBALS['contact'] = $row['contact'];
 				$GLOBALS['email'] = $row['email'];
 				$GLOBALS['stadium_id'] = $row['Stadium_id'];
 		}
 		}
 		else if($result->num_rows > 1){
 			return $result;
 		}
 		else{
 			echo "
 				<script>
 					alert('Error!! requested data does not exit');
 				</script>
 			";
 			echo '<h1>'.$conn->error.'</h1>';
 		}

 	}

 	
 	

 	


	



?>