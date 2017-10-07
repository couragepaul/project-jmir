
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
			echo "<p class='accepted' style = 'text-align: center; border:5px; margin-left:20%; margin-right: 20%;margin-top:1%;padding-top:0.5%;padding-bottom:0.5%;color:white;background-color:#429bf4;'> Your data is saved. Go to listing page to see.<br></p>";	
			
		} 		
		else {
				echo "<p class='not_accepted'>User NOT Added<br></p>";
				echo mysqli_error ($conn);
		}
	?>

	<div class="data_page">
		<?php echo "<span class='data'>Name</span> " , "   " , " : " ,$_POST['name']  ;?><br>
		<?php echo "<span class='data'>Province</span>  " , "  " , " : " ,  $_POST['province'];?><br> 
		<?php echo "<span class='data'>Telephone</span>  " , "  " , " : " ,$_POST['phoneNum'] ;?><br>
		<?php echo "<span class='data'>Postal Code</span>  " , "   " , " : " ,  $_POST['postalCode'];?><br>
		<?php echo "<span class='data'>Salary </span>" , "  " , " : ", $_POST['salary'];?>
	</div>
</body>
</html>