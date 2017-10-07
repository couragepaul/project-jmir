<?php include 'db.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="beautifier.css">
  	<link rel="stylesheet" href="style.php" media="screen">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="heading">
		<p><a href="index.php"><span class="add_info">ADD INFORMATION</span></a> | <a href="listing.php"><span class="list_info">LISTING PAGE</span></a>
		</p>
	</div>

	<div class="list_page">
       
       <?php 

       		$sql = "SELECT id, name, phoneNum, province_id, postal_code, salary FROM users";
			$result = mysqli_query($conn , $sql);

       		if (mysqli_num_rows($result) > 0) 
			{
				echo "<table class='mytable'>";
				echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>Province</th>";
				echo "<th>Telephone</th>";
				echo "<th>Postal Code</th>";
				echo "<th>Salary</th>";
				echo "<tr>";
				

				while($row = mysqli_fetch_assoc($result))
   			 	{ 
   			 		echo "<tr>";

   			 		echo "<td>" .  $row["name"] . "</td>";
   			 		echo "<td>" .  $row["province_id"] . "</td>";
   			 		echo "<td>" .  $row["phoneNum"] . "</td>";
   			 		echo "<td>" .  $row["postal_code"] . "</td>";
   			 		echo "<td>" .  $row["salary"] . "</td>";
   			 		echo "</tr>\n";
   					
   				 }
   				 echo "</table>";
			}
			else {
    				echo "0 results found";
		 		}

       ?>
		
	</div>


</body>
</html>

