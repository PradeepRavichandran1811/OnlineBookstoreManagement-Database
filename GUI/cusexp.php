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
                <h2>Customer's Expenditure between Febraury and May of 2017</h2>
                <th scope="col">User_ID</th>
                <th scope="col">Total Price</th>
            </tr>
<?php
			    $mysqli = new mysqli("localhost", "root", "", "bookstore");

                $sqlquery = $mysqli->query("Select User_ID as U,Sum(Price) as TotPrice From Buys WHERE Buying_Date BETWEEN '2017/02/01' AND '2017/05/01' GROUP BY User_ID WITH ROLLUP;");
				$row = mysqli_fetch_assoc($sqlquery);
                
                do 
                {
                echo "<tr><td>".$row["U"]."</td><td>".$row["TotPrice"]."</td></tr>";
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
