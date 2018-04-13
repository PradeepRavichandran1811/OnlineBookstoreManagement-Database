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
                <h2>Type of Book Preferred the most by Customers</h2>
                <th scope="col">Book Type</th>
                
            </tr>
<?php
			    $mysqli = new mysqli("localhost", "root", "", "bookstore");

                $sqlquery = $mysqli->query("Select Type as T from  (Select COUNT(Type) as Total,Type 
            		                                                From Books 
            		                                                Group by Type
            		                                                Order By Total desc) as counttype
                                          where Total = (select max(Total) from  (Select COUNT(Type) as Total,Type 
                    					                                          From Books 
                    					                                          Group by Type
                    					                                          Order By Total desc)as counttype);");
				$row = mysqli_fetch_assoc($sqlquery);
                
                do 
                {
                echo "<tr><td>".$row["T"]."</td></tr>";
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
