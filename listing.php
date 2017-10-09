<?php include 'db.php';?>

<?php

	$limit = 30;  
		if (isset($_GET["page"])) 
		{
 			$page  = $_GET["page"]; 
 		} 
 		else 
 		{ 
 			$page=1; 
 		};

	$start_from = ($page-1) * $limit;  
  
	$sql = "SELECT * FROM users LIMIT " . $start_from . ", " . $limit;  
	$rs_result = mysql_query ($sql);
?>

<!DOCTYPE html>
<html Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="beautifier.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="heading">
		<p><a href="index.php"><span class="add_info">ADD INFORMATION</span></a> | <a href="listing.php"><span class="list_info">LISTING PAGE</span></a>
		</p>
	</div>

	<div class="list_page">
       
       <?php 

       		$sql = "SELECT id, name, phoneNum, province_id, postal_code, salary FROM users LIMIT " . $start_from . ", " . $limit; 
			$result = mysqli_query($conn , $sql);

       		if (mysqli_num_rows($result) > 0) 
			{
				echo "<table class='mytable'>";
				echo "<tr>";
				echo "<th class='lheader'>Name</th>";
				echo "<th class='lheader'>Province</th>";
				echo "<th class='lheader'>Telephone</th>";
				echo "<th class='lheader'>Postal Code</th>";
				echo "<th class='lheader'>Salary</th>";
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

	<?php  
		 
		$rs_result = mysqli_query($conn, "SELECT COUNT(id) FROM users" );  
		$row = mysqli_fetch_row($rs_result);  
		$total_records = $row[0];  
		$total_pages = ceil($total_records / $limit);  
		$pagLink = "<div class='pagination'>";  
		
		echo $total_records;

		for ($i=1; $i<=$total_pages; $i++) {  
            $pagLink .= "<a href='listing.php?page=".$i."' style='padding-right:15px;'>".$i."</a>";  
		};  
		echo $pagLink . "</div>";  
	?>


</body>
</html>

