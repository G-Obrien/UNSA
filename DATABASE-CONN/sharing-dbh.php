<?php

if (isset($_POST['submit-post'])) {
require 'dbh-conn.php';

$userMail = $_POST['mail'];
$School = $_POST['school'];
$Story = $_POST['subject'];
$Message = $_POST['message'];
$Attatch = $_POST['upload'];


if ( empty($userMail) || empty($School) || empty($Story) || empty($Message)) {
	header("location: ../community.php? Empty=Space");
	exit();
}

elseif ($Attatch > 10000) {
		header("location: ../community.php? Attatchment=Too-Big");
	exit();
}
else{
		//We then add post values into the .
	$sql = "INSERT INTO community_chat (Usermail, School, Post_Title, Post_Message, Attatchment
) VALUES (?, ?, ?, ?, ?)";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {

	header("location: ../community.php? Error=Connection");
	exit();
}
else{
	mysqli_stmt_bind_param($stmt, "sssss", $userMail, $School, $Story, $Message, $Attatch);
	mysqli_stmt_execute($stmt);
  header("location: ../community.php? Post=Success");
	exit();
}
    }
mysqli_stmt_close($stmt);
 mysqli_close($conn);
  } 

elseif (isset($_POST['show-post'])) {
require '../community.php';

}
?>