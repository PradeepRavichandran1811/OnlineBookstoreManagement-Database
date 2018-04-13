 <!DOCTYPE html>
<html>
<head>
	<title>Online Bookstore Management System</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="jumbotron">
	<h1 style="text-align: center;">Table view</h1>
	<h2 style="text-align: center;">Table Name: <?php echo $_GET['button']; ?></h2>
	<table class="table">
	<thead>
		<tr>
			<?php
			    $mysqli = new mysqli("localhost", "root", "", "bookstore");

			    $viewtable = $_GET['button'];


				$sqlquery = "SELECT * from $viewtable";

				$sqlcolumns = "SHOW COLUMNS from $viewtable";
				$columns = array();

				$result = $mysqli->query($sqlquery) or die($mysqli->error);
				$result_columns = $mysqli->query($sqlcolumns) or die($mysqli->error);

		    	while($row = $result_columns->fetch_assoc()) 
		    	{
		 			echo "<th>".$row['Field']."</th>";
		 			array_push($columns, $row['Field']);

		        	
		    	}
			?>
			
		</tr>
	</thead>
	<tbody>
	<?php
		    	while($row = $result->fetch_assoc()) 
		    	{
		    		echo "<tr>";
		    		foreach ($columns as $val) {
		 			echo "<td>".$row[$val]."</td>";
		    		}
		    		echo "</tr>";
		        	
		    	}
	?>
	</tbody>
		
	</table>


	</div>
</div>

</body>


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>