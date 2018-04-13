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
            <tr><h2>Most Preferred Binding Type</h2>
                <th scope="col">Binding Type</th>
               
            </tr>
<?php
			    $mysqli = new mysqli("localhost", "root", "", "bookstore");
            
            
                $sqlquery = $mysqli->query("Select Binding_Type as B from  (
            Select COUNT(Binding_Type) as T,Binding_Type 
            From Books 
            where Binding_Type='Hardcover' or Binding_Type='Paperback'
            Group by Binding_Type
            Order By T desc) as countb
            where T = (
            select max(T) from  (
                    Select COUNT(Binding_Type) as T,Binding_Type 
                    From Books 
                    where Binding_Type='Hardcover' or Binding_Type='Paperback'
                    Group by Binding_Type
                    Order By T desc)as countB);");
            
				$row = mysqli_fetch_assoc($sqlquery);
                do 
                {
                echo "<tr><td>".$row["B"]."</td></tr>";
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


