
<?php
    $mysqli = new mysqli("localhost", "root", "", "bookstore");

	$Warehouse_ID = $_POST['WarehouseID'];
    $Rent = $_POST['Rent'];
	$Location = $_POST['Location'];
    

	#$result = $mysqli->query("SELECT MAX(CAST(id_no AS DECIMAL)) as id_no FROM user_accounts");
	#if ($result->num_rows > 0) 
	#{
    	// output data of each row
    #	while($row = $result->fetch_assoc()) 
    #	{
    #		if (isset($row['id_no']))
    #		{
    #			$id_no = $row['id_no'];
    #		}
    #		else
    #		{
    #			$id_no = 0;
    #		}
    # 	}
	#}
	#$id_no = $id_no + 1;

	$result = $mysqli->query("INSERT into warehouse (Warehouse_ID, Rent, Location) VALUES ('$Warehouse_ID', '$Rent', '$Location')");

	if ($result)
	{
		echo "<script>alert('Sucessfully added.');
				window.location = 'index.php';</script>";
	}
	else
	{
		echo "<script>alert('Failed.');
				window.location = 'index.php';</script>";
	}
	
	
?>