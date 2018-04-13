
<?php
    $mysqli = new mysqli("localhost", "root", "", "bookstore");

    $Seller_Name = $_POST['SellerName'];
    $SSN = $_POST['SSN'];
	$Phone = $_POST['Phone'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $ZIP = $_POST['ZIP'];
    


	$result = $mysqli->query("SELECT MAX(CAST(Seller_ID AS DECIMAL)) as Seller_ID FROM seller");
    if ($result->num_rows > 0) 
	{
    	// output data of each row
    	while($row = $result->fetch_assoc()) 
    	{
    		if (isset($row['Seller_ID']))
    		{
    			$Seller_ID = $row['Seller_ID'];
    		}
    		else
    		{
    			$Seller_ID = 0;
    		}
     	}
	}
	$Seller_ID = $Seller_ID + 1;

	$result = $mysqli->query("INSERT into seller (Seller_ID, Seller_Name, SSN, Phone, Street, City, State, ZIP) VALUES ('$Seller_ID','$Seller_Name', '$SSN', '$Phone', '$Street','$City','$State','$ZIP')");

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