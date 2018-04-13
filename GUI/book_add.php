
<?php
    $mysqli = new mysqli("localhost", "root", "", "bookstore");

	$ISBN = $_POST['ISBN'];
    $Name = $_POST['Name'];
	$Author = $_POST['Author'];
    $Edition = $_POST['Edition'];
    $Type = $_POST['Type'];
    $Genre = $_POST['Genre'];
	$Binding_Type = $_POST['BindingType'];
    $Buying_Price = $_POST['BuyingPrice'];
    


#$result = $mysqli->query("SELECT MAX(CAST(id_no AS DECIMAL)) as id_no FROM user_accounts");
#if ($result->num_rows > 0) 
#{
// output data of each row
#while($row = $result->fetch_assoc()) 
#{
#		if (isset($row['id_no']))
 #   		{
  #  			$id_no = $row['id_no'];
   # 		}
#		else
#		{
#			$id_no = 0;
 #   		}
  #   }
	#}	$id_no = $id_no + 1;

	$result = $mysqli->query("INSERT into books (ISBN, Name, Author, Edition, Type, Genre, Binding_Type, Buying_Price) VALUES ('$ISBN', '$Name', '$Author', '$Edition', '$Type', '$Genre', '$Binding_Type', '$Buying_Price')");

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