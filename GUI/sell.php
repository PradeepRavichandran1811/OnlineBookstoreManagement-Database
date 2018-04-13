 
<!DOCTYPE html>
<html>
<head>
	<title>Online Bookstore Management System</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="jumbotron">
        <table class="table">
            <tr>
                <th scope="col">SELLER NAME</th>
            </tr>
<?php
			    $mysqli = new mysqli("localhost", "root", "", "bookstore");
            
                $Genre = $_POST['Genre'];
                
                $sqlquery = $mysqli->query("Select Seller_Name as S From (Select COUNT(ISBN) as I,Seller_Name From ((Buys Inner join Books on Buys.ISBN=Books.ISBN ) INNER JOIN Sells on Buys.ISBN=Sells.ISBN)Inner JOIN Seller on Sells.Seller_ID=Seller.Seller_ID Where Genre='$Genre' Group by Seller_Name) where I = (select MAX(I) From  (Select COUNT(ISBN) as I,Seller_Name From ((Buys Inner join Books on Buys.ISBN=Books.ISBN ) INNER JOIN Sells on Buys.ISBN=Sells.ISBN)Inner JOIN Seller on Sells.Seller_ID=Seller.Seller_ID Where Genre='$Genre' Group by Seller_Name));");
            
				$row = mysqli_fetch_assoc($sqlquery);
                do 
                {
                echo "<tr><td>".$row["S"]."</tr>";
                }while($row = mysqli_fetch_assoc($sqlquery))
            ?>
            
</table>

	</div>
</div>

</body>


<script
  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
