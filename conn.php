<?php
  $db = "CBRAdb1.db";
  try {
    $connection = new PDO("sqlite:" . $db);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
		echo "PHP connection error: ".$e->getMessage();
	}
	
$conn = null;
?>
