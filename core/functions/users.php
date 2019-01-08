<?php
function email_exists($email) {
	global $conn;

	$sql = "SELECT id FROM users WHERE email='{$email}'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		return true;
	}

	return false;
}
?>