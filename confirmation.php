
<?php include 'db.php';?>

<?php 
$name=$_POST['name'];
$province=$_POST['province'];
$phone=$_POST['phoneNum'];
$postalCode=$_POST['postalCode'];
$salary=$_POST['salary'];

//Execute the query
 

mysqli_query($conn,"INSERT INTO users (id,name,phoneNum,postalCode,salary)
				VALUES('1',$name,'$phone','$postalCode','$salary')");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="beautifier.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="heading">
		<p><span class="add_info">ADD INFORMATION</span> | <span class="list_info">LISTING PAGE</span></p>
	</div>

	<?php
		if(mysqli_affected_rows($conn) > 0){
			echo "<p class='accepted'>Your data is saved. Go to listing page to see.<br></p>";
		} 		
		else {
				echo "<p class='not_accepted'>User NOT Added<br></p>";
				echo mysqli_error ($conn);
		}
	?>

	<div class="data_page">

		<?php echo "Name  : " , $_POST['name']  ;?><br>
		<!-- <?php echo "Province : " , $_POST['province'];?> <br> -->
		<?php echo "Telephone : " , $_POST['phoneNum'] ;?><br>
		<?php echo "Postal Code : " , $_POST['postalCode'];?><br>
		<?php echo "Salary :" , $_POST['salary'];?>
	</div>
</body>
</html>