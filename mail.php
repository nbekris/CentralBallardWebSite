<?php
$msg = filter_input(INPUT_POST, 'email');

if (isset($_POST['mailBtn']) && !empty($_POST['mailBtn'])) {
	$to = "nikobekris@gmail.com";
	$subject = "Email List";

	mail($to, $subject, $msg);
	echo "Email Sent, you are now on the CBRA email list   ";
	}
?>
<html lang="en">
<head>
<input type="button" value="Click here to go back to main CBRA page" onclick="window.location.href='http://nbekris.icoolshow.net/Test/CBRAtest/index.php'"/>
</head>
</html>