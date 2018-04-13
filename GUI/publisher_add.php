
<?php
    $mysqli = new mysqli("localhost", "root", "", "bookstore");

    $Publisher_Name = $_POST['PublisherName'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $ZIP = $_POST['ZIP'];
    


	$result = $mysqli->query("SELECT MAX(CAST(Publisher_ID AS DECIMAL)) as Publisher_ID FROM publisher");
    if ($result->num_rows > 0) 
	{
    	// output data of each row
    	while($row = $result->fetch_assoc()) 
    	{
    		if (isset($row['Publisher_ID']))
    		{
    			$Publisher_ID = $row['Publisher_ID'];
    		}
    		else
    		{
    			$Publisher_ID = 0;
    		}
     	}
	}
	$Publisher_ID = $Publisher_ID + 1;

	$result = $mysqli->query("INSERT into publisher (Publisher_ID, Publisher_Name, Street, City, State, ZIP) VALUES ('$Publisher_ID','$Publisher_Name', '$Street','$City','$State','$ZIP')");

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