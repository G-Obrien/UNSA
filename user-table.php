<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/contac-mail.css">
    <title>unsa-user table</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoCondensed:400,700">
</head>
<body>

<form action="user-table.php" method="post" class="formk">
<p>THE FOLLOWING USERS ARE REGISTERED</p>    
<h5>..Please Click Buttons to Perform task..</h5>
    <button name="user-btn">VIEW USERS</button>
    <button name="back-btn"> GO BACK</button>
    <br><br>
<table class="tabo">
<tr>
<td class="tab">User ID</td><td class="tab">Username</td><td class="tab">User email</td><td class="tab">Registration Date</td>
</tr>
<?php
/*  These codes will get the user from the table users in the unsa database... only signed-up users.. */

if (isset($_POST['user-btn'])) {
require 'DATABASE-CONN/dbh-conn.php';

if ($conn->connect_error) {
  die("Failed to connect!..".$conn->connection_error);
}
$sql = "SELECT u_id, usa_name, user_email, reg_date FROM users";
$results = $conn->query($sql);

if ($results->num_rows > 0) {
    while ($row = $results-> fetch_assoc()) {
       echo"<tr><td>" .$row['u_id'] ."</td><td>" .$row['usa_name'] ."</td><td>" .$row['user_email'] ."</td><td>" .$row['reg_date'] ."</td></tr>";
      
    }
    echo"</table>";
     echo" <a href='user-table.php'><button>HIDE USERS' TABLE</button></a>";
}
else{
    echo"No Results form table!.";
}
}
elseif (isset($_POST['back-btn'])) {
header("Location: register.php..");

}
?>
</table>
</form>


<?php
include 'footer.php';
?>
</body>
</html>