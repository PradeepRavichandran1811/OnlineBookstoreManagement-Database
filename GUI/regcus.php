 
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
            <tr><h2>Customers who have bought the most number of Books</h2>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
            </tr>
<?php
			    $mysqli = new mysqli("localhost", "root", "", "bookstore");
            
            
                $sqlquery = $mysqli->query("Select First_Name as FN,Last_Name as LN From(Select Count(ISBN) as U,User_ID, First_Name, Last_Name From Buys NATURAL JOIN Customer Group By User_ID,First_Name, Last_Name Order By U desc) as Countisbn
                where U = (select MAX(U) as MAXVAL from  
                (Select COUNT(ISBN) as U,User_ID
                 From Buys 
                 Group by User_ID
                 Order By U desc) as countISBN);");
            
				$row = mysqli_fetch_assoc($sqlquery);
                do 
                {
                echo "<tr><td>".$row["FN"]."</td><td>".$row["LN"]."</td></tr>";
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
