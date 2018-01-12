<?php
include ('conn.php');

/* Issues Loading SQL statements */
$sqlstmnt = "SELECT title FROM Issues WHERE issueID = 1";
$sqlstmnt1 = "SELECT textField FROM Issues WHERE issueID = 1";

$sqlstmnt2 = "SELECT title FROM Issues WHERE issueID = 2";
$sqlstmnt3 = "SELECT textField FROM Issues WHERE issueID = 2";

$sqlstmnt4 = "SELECT title FROM Issues WHERE issueID = 3";
$sqlstmnt5 = "SELECT textField FROM Issues WHERE issueID = 3";

/* Event Loading SQL statements */
$sqlstmnt6 = "SELECT eventTitle FROM Events WHERE eventID = 1";
$sqlstmnt7 = "SELECT startDate FROM Events WHERE eventID = 1";
$sqlstmnt8 = "SELECT endDate FROM Events WHERE eventID = 1";
$sqlstmnt9 = "SELECT locationName FROM Events WHERE eventID = 1";
$sqlstmnt10 = "SELECT locationAddress FROM Events WHERE eventID = 1";
$sqlstmnt11 = "SELECT locationCoordinates FROM Events WHERE eventID = 1";
$sqlstmnt12 = "SELECT description FROM Events WHERE eventID = 1";

$sqlstmnt13 = "SELECT eventTitle FROM Events WHERE eventID = 2";
$sqlstmnt14 = "SELECT startDate FROM Events WHERE eventID = 2";
$sqlstmnt15 = "SELECT endDate FROM Events WHERE eventID = 2";
$sqlstmnt16 = "SELECT locationName FROM Events WHERE eventID = 2";
$sqlstmnt17 = "SELECT locationAddress FROM Events WHERE eventID = 2";
$sqlstmnt18 = "SELECT locationCoordinates FROM Events WHERE eventID = 2";
$sqlstmnt19 = "SELECT description FROM Events WHERE eventID = 2";

/*
function postData() {
	try {
		$statement= $connection->prepare($sqlstmnt);
		$statement->execute();
		
	}
}
*/
try {
	$statement = $connection->prepare($sqlstmnt);
	$statement->execute();
	$title = $statement->fetchColumn();
	
	$statement=$connection->prepare($sqlstmnt1);
	$statement->execute();
	$text = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt2);
	$statement->execute();
	$title2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt3);
	$statement->execute();
	$text2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt4);
	$statement->execute();
	$title3 = $statement->fetchColumn();

	$statement = $connection->prepare($sqlstmnt5);
	$statement->execute();
	$text3 = $statement->fetchColumn();
	
	/*Event Post ID 1 */
	$statement = $connection->prepare($sqlstmnt6);
	$statement->execute();
	$eventTitle = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt7);
	$statement->execute();
	$startDate = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt8);
	$statement->execute();
	$endDate = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt9);
	$statement->execute();
	$locationName = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt10);
	$statement->execute();
	$locationAddress = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt11);
	$statement->execute();
	$locationCoordinates = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt12);
	$statement->execute();
	$eventDescription = $statement->fetchColumn();
	
	/*Event Post ID 2 */
	$statement = $connection->prepare($sqlstmnt13);
	$statement->execute();
	$eventTitle2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt14);
	$statement->execute();
	$startDate2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt15);
	$statement->execute();
	$endDate2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt16);
	$statement->execute();
	$locationName2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt17);
	$statement->execute();
	$locationAddress2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt18);
	$statement->execute();
	$locationCoordinates2 = $statement->fetchColumn();
	
	$statement = $connection->prepare($sqlstmnt19);
	$statement->execute();
	$eventDescription2 = $statement->fetchColumn();
	
	$connection = NULL;
	} catch (PDOException $e) {
		echo "PHP Save error: ".$e->getMessage();
	}
?>
