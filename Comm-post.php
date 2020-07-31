<?php 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="CSS/home.css">
	<link rel="stylesheet" href="css/comm.css">
    <link rel="stylesheet" href="CSS/contac-mail.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Communnity Post</title>
</head>
<body>
<div class="for-view">

 
<table class="tabo1">
<h2>The table Shows UNSA Community Chat Records and Postings.</h2>
<form action="comm-post.php" method="post" class="no-bg">
<button type="submit" name="show-post2">VIEW POST</button>
</form>
<tr>
<td class="tab">Post No:</td><td class="tab">Usermail</td><td class="tab">School/College</td><td class="tab">Title of Post</td><td class="tab">Post Message</td><td class="tab">Attatchments</td><td class="tab">Date & Time</td>
</tr>

<br><br>
  
<?php
/* Fetch data from database */

if (isset($_POST['show-post2'])) {
require 'DATABASE-CONN/dbh-conn.php';
if ($conn->connect_error) {
  die("Failed to connect!..".$conn->connection_error);
}
$sql = "SELECT Post_NO, usermail, School, Post_Title, Post_Message, Attatchment, Date_Time FROM community_chat";
$results = $conn->query($sql);

if ($results->num_rows > 0) {

    while ($row = $results-> fetch_assoc()) {
       echo"<tr><td>" .$row['Post_NO'] ."</td><td>" .$row['usermail'] ."</td><td>" .$row['School'] ."</td><td>" .$row['Post_Title'] ."</td><td>" .$row['Post_Message'] ."</td><td>" .$row['Attatchment'] ."</td><td>" .$row['Date_Time'] ."</td></tr>";
    }
    echo"</table>";
}
else{
    echo"No Results form table!.";
    exit();
 }

}
   

?>

</table>
<br><br>
 </div>
<?php
include 'footer.php';
?>
</body>
</html>

