
<?php
    $mysqli = new mysqli("localhost", "root", "", "bookstore");

	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
	$User_ID = $_POST['E-mailID'];
	$Date_of_Birth = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $ZIP = $_POST['ZIP'];
    


	$result = $mysqli->query("INSERT into customer (User_ID, DOB, Gender, First_Name, Last_Name, Street, City, State, ZIP) VALUES ('$User_ID', '$Date_of_Birth', '$Gender', '$first_name','$last_name','$Street','$City','$State','$ZIP')");

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