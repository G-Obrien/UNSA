<?php 
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="CSS/home.css">
	<link rel="stylesheet" href="css/slider.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>unsa-services</title>
</head>
<body>

<div class="switch">
  

  <?php
  /* Using the Switch Statements  */

  $service = 20;
  switch ($service) {
      case 20:
         echo "Twenty is the number";
          break;
      
       case 10:
         echo "Ten is the number";
          break;
            case 30:
         echo "Thirty is the number";
          break;
  }
  ?>

<?php
include 'footer.php';
?>
</body>
</html>