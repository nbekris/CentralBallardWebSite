<?php
include ('conn.php');

	$title = filter_input(INPUT_POST, 'title');
	$textBody = filter_input(INPUT_POST, 'textBody');
	
	$eventTitle = filter_input(INPUT_POST, 'eventTitle');
	$startDate = filter_input(INPUT_POST, 'startDate');
	$endDate = filter_input(INPUT_POST, 'endDate');
	$locationName = filter_input(INPUT_POST, 'locationName');
	$locationAddress = filter_input(INPUT_POST, 'locationAddress');
	$locationCoordinates = filter_input(INPUT_POST, 'locationCoordinates');
	$eventDescription = filter_input(INPUT_POST, 'eventDescription');
	
	$id = $_POST['id'];
	 
	 /* Issues SQL Prepared Statements **/
	$sqlstmnt = "UPDATE Issues SET title ='$title' WHERE issueID='$id'";
	$sqlstmnt2 = "UPDATE Issues SET textField ='$textBody' WHERE issueID='$id'";
	
	/*Event SQL Prepared Statements **/
	$sqlstmnt3 = "UPDATE Events SET eventTitle = '$eventTitle' WHERE eventID='$id'";
	$sqlstmnt4 = "UPDATE Events SET startDate = '$startDate', endDate = '$endDate' WHERE eventID='$id'";
	$sqlstmnt5 = "UPDATE Events SET locationName ='$locationName', locationAddress = '$locationAddress', locationCoordinates = '$locationCoordinates' WHERE eventID='$id'";
	$sqlstmnt6 = "UPDATE Events SET description = '$eventDescription' WHERE eventID='$id'";
	$sqlstmnt7 = "UPDATE Events SET eventTitle = '$eventTitle', startDate = '$startDate', endDate = '$endDate', locationName = '$locationName', locationAddress = '$locationAddress', locationCoordinates = '$locationCoordinates', description = '$eventDescription' WHERE eventID='$id'";
	
	
	
	/* Issues Save if Block (checks to see if buttons on admin page are pressed before saving data) **/
	if (isset($_POST['titleBtn']) && !empty($_POST['titleBtn'])) {
		try {
			$statement = $connection->prepare($sqlstmnt);
			$statement->execute();
			
			$connection = NULL;
			} catch (PDOException $e) {
					echo "PHP Save error: ".$e->getMessage();
			}
			echo " Title data saved!   ";
	}
	elseif (isset($_POST['textBtn']) && !empty($_POST['textBtn'])) {
		try {
			$statement = $connection->prepare($sqlstmnt2);
			$statement->execute();
			
			$connection = NULL;
			} catch (PDOException $e) {
					echo "PHP Save error: ".$e->getMessage();
			}
			echo " Text data saved!   ";
	}
	/* Event Save if Block (checks to see if buttons on admin page are pressed before saving data) **/
	if (isset($_POST['eventTitleBtn']) && !empty($_POST['eventTitleBtn'])) {
		try {
			$statement = $connection->prepare($sqlstmnt3);
			$statement->execute();
			
			$connection = NULL;
			} catch (PDOExecption $e) {
				echo "PHP Save error: ".$e->getMessage();
			}
			echo " Event Title Saved!    ";
	}
	elseif (isset($_POST['dateBtn']) && !empty($_POST['dateBtn'])) {
		try {
			$statement = $connection->prepare($sqlstmnt4);
			$statement->execute();
			
			$connection = NULL;
			} catch (PDOExecption $e) {
				echo "PHP Save error: ".$e->getMessage();
			}
			echo " Event Date Saved!    ";
	}
	elseif (isset($_POST['locationBtn']) && !empty($_POST['locationBtn'])) {
		try {
			$statement = $connection->prepare($sqlstmnt5);
			$statement->execute();
			
			$connection = NULL;
			} catch (PDOExecption $e) {
				echo "PHP Save error: ".$e->getMessage();
			}
			echo " Event Location Saved!    ";
	}
	elseif (isset($_POST['descriptionBtn']) && !empty($_POST['descriptionBtn'])) {
		try {
			$statement = $connection->prepare($sqlstmnt6);
			$statement->execute();
			
			$connection = NULL;
			} catch (PDOExecption $e) {
				echo "PHP Save error: ".$e->getMessage();
			}
			echo " Event Description Saved!    ";
	}
	elseif (isset($_POST['eventBtn']) && !empty($_POST['eventBtn'])) {
		try {
			$statement = $connection->prepare($sqlstmnt7);
			$statement->execute();
			
			$connection = NULL;
			} catch (PDOException $e) {
				echo "PHP Save error: ".$e->getMEssage();
			}
			echo " All Event Data has been Saved!    ";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<input type="button" value="Click here to go back to Admin page" onclick="window.location.href='http://nbekris.icoolshow.net/Test/CBRAtest/admin.php'"/>
</head>
</html>