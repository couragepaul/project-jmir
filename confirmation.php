
<?php include 'db.php';?>

<?php 
$name=$_POST['name'];
$province=$_POST['province'];
$phone=$_POST['phoneNum'];
$postalCode=$_POST['postalCode'];
$salary=$_POST['salary'];

//Execute the query
mysqli_query($conn,"INSERT INTO users ( name , phoneNum , province_id  , postal_code , salary)
			VALUES('$name' , '$phone' , '$province' ,'$postalCode','$salary')");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="beautifier.css">  	
  	<link rel="stylesheet" href="style.php" media="screen">
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-messages.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="heading">
		<p><a href="index.php"><span class="add_info">ADD INFORMATION</span></a> | <a href="listing.php"><span class="list_info">LISTING PAGE</span></a></p>
	</div>

	<?php

		
		if(mysqli_affected_rows($conn) > 0){
			echo "<p class='accepted' style = 'text-align: center; border:5px; margin-left:27.5%; margin-right: 28.5%;margin-top:1%;padding-top:0.5%;padding-bottom:0.5%;color:white;background-color:#429bf4;'> Your data is saved. Go to listing page to see.<br></p>";	
			
		} 		
		else {
				echo "<p class='not_accepted'>User NOT Added<br></p>";
				echo mysqli_error ($conn);
		}
	?>

	<div class="data_page">
		<?php 
			echo "<table>";
			echo "<tr style='padding-bottom: 35px;'>";
			echo "<th style='text-align: left; color:black; padding-top: 35px;'>Name</th>";
			echo "<td style='padding-right: 35px; padding-left: 12px; padding-top: 35px; color:black;'>:</td>";
			echo "<td style='padding-top: 35px;'>". $_POST['name'] . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<th style='text-align: left; color:black; padding-top: 15px;'>Province</th>";
			echo "<td style='padding-right: 35px; padding-left: 12px; padding-top: 15px; color:black;'>:</td>";
			echo "<td style='padding-top: 15px;'>". $_POST['province'] . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<th style='text-align: left; color:black; padding-top: 15px;'>Telephone</th>";
			echo "<td style='padding-right: 35px; padding-left: 12px; padding-top: 15px; color:black;'>:</td>";
			echo "<td style='padding-top: 15px;'>". $_POST['phoneNum'] . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<th style='text-align: left; color:black; padding-top: 15px;'>Postal Code</th>";
			echo "<td style='padding-right: 35px; padding-left: 12px; padding-top: 15px; color:black;'>:</td>";
			echo "<td style='padding-top: 15px;'>". $_POST['postalCode'] . "</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<th style='text-align: left; color:black; padding-top: 15px;'>Salary</th>";
			echo "<td style='padding-right: 35px; padding-left: 12px; padding-top: 15px; color:black;'>:</td>";
			echo "<td style='padding-top: 15px;'>". $_POST['salary'] . "</td>";
			echo "</tr>";
		?>
	</div>

		
</body>
</html>