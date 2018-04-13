
<?php
    $mysqli = new mysqli("localhost", "root", "", "bookstore");

	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$User_ID = $_POST['E-mailID'];
    $Designation = $_POST['designation'];
    $Salary = $_POST['Salary'];
    $Date_of_Joining = $_POST['dateofjoining'];
	$Date_of_Birth = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $ZIP = $_POST['ZIP'];
    $Warehouse_ID = $_POST['WarehouseID'];
    


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

	$result = $mysqli->query("INSERT into employee (User_ID, Salary, Designation, Date_of_Joining, DOB, Gender, First_Name, Last_Name, Street, City, State, ZIP, Warehouse_ID) VALUES ('$User_ID', '$Salary', '$Designation', '$Date_of_Joining', '$Date_of_Birth', '$Gender', '$first_name', '$last_name', '$Street', '$City', '$State', '$ZIP', '$Warehouse_ID')");

	if ($result)
	{
		echo "<script>alert('Sucessfully added.');
				window.location = 'index.php';</script>";
	}
	else
	{
		#echo "<script>alert('Failed.');
		#		window.location = 'index.php';</script>";
	}
	
	
?>