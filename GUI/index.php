<!DOCTYPE html>
<html>
<head>
	<title>Online Bookstore Management System</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.style_input{
			width: 300px;
			margin: 0;

		}
	</style>

</head>
<body>
<div class="container">
	<div class="jumbotron">

	<h1 style="text-align: center;">Online Bookstore Management System</h1>
	<h2 style="text-align: center;">Home Page</h2>
	<form action="view.php">
		<button name="button" value="customer" class="btn btn-success"> View all Customers</button>
		<button name="button" value="employee" class="btn btn-success"> View all Employees</button>
		<button name="button" value="books" class="btn btn-success"> View all Books</button>
		<button name="button" value="publisher" class="btn btn-success"> View all Publishers</button>
		<button name="button" value="seller" class="btn btn-success"> View all Sellers</button>
		<button name="button" value="warehouse" class="btn btn-success"> View all Warehouses</button>
        <button name="button" value="buys" class="btn btn-success"> View all Orders</button>

	</form>
    <h2 style="text-align: center;">Generate Reports</h2>
    <div> 
        <form action="highest.php" style="float:left">
		  <button name="button" value="employee" class="btn btn-success"> Employee with Highest Salary</button>
	   </form>
        <form action="interzip.html" style="margin-left:0.2cm; float:left">
		  <button name="button" value="employee" class="btn btn-success"> Particular Genre Preference</button>
	   </form>
        <form action="interware.html" style="margin-left:0.2cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Book Availability</button>
	   </form>
        <form action="type.php" style="margin-left:0.2cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Preferred Type of Book</button>
	   </form>
        <form action="cusexp.php" style="margin-left:0.2cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Rollup of Customer's Expenditure</button>
	   </form>
        <form action="top5.php" style="margin-top:0.4cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Top 5 Best Selling Books</button>
	   </form>
        <form action="regcus.php" style="margin-left:0.5cm; margin-top:0.4cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Regular Customers</button>
	   </form>
        <form action="purgenre.php" style="margin-left:0.5cm; margin-top:0.4cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Most Purchased Genre</button>
	   </form>
         <form action="state.php" style="margin-left:0.5cm; margin-top:0.4cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Most Spending State</button>
	   </form>
        <form action="bind.php" style="margin-left:0.5cm; margin-top:0.4cm; float:left">
		  <button name="button" value="employee" class="btn btn-success">Most Preferred Binding Type</button>
	   </form>
	</div>
		<div style="margin-top:3cm">
		<h2 style="text-align: center;" >Add a new Customer</h2>
		<form method="post" action="customer_add.php">
			<div class="row">
				<div class="col-xs-6" align="right"><p> First Name:</p></div>
				<div class="col-xs-6"><input type="text" name="first_name" class="form-control style_input"></div>
			</div>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Last Name:</p></div>
				<div class="col-xs-6"><input type="text" name="last_name" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> E-mail ID:</p></div>
				<div class="col-xs-6"><input type="email" name="E-mailID" class="form-control style_input"></div>
			</div>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Date of Birth:</p></div>
				<div class="col-xs-6"><input type="date" name="DOB" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Gender:</p></div>
				<div class="col-xs-6"><input type="text" name="Gender" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Street Address:</p></div>
				<div class="col-xs-6"><input type="text" name="Street" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> City:</p></div>
				<div class="col-xs-6"><input type="text" name="City" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> State:</p></div>
                <select name="State">
                <option value="">Select..</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                </select>	
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> ZIP:</p></div>
				<div class="col-xs-6"><input type="text" pattern="[0-9]{5}" name="ZIP" placeholder="00000" class="form-control style_input"></div>
			</div>
			<div>
                <div class="col-xs-6" align="right"></div>
                <button class="btn btn-success" type="submit">Add</button>
                <button class="btn btn-success" type="reset">Reset</button>
            </div>
		</form>

		<form method = "post" action="employee_add.php" >
			<h2 style="text-align: center;">Add a new Employee</h2>
			<div class="row">
				<div class="col-xs-6" align="right"><p> First Name:</p></div>
				<div class="col-xs-6"><input type="text" name="first_name" class="form-control style_input"></div>
			</div>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Last Name:</p></div>
				<div class="col-xs-6"><input type="text" name="last_name" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> E-mail ID:</p></div>
				<div class="col-xs-6"><input type="email" name="E-mailID" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Designation:</p></div>
				<div class="col-xs-6"><input type="text" name="designation" class="form-control style_input"></div>
			</div>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Salary:</p></div>
				<div class="col-xs-6"><input type="number" name="Salary" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Date of Joining:</p></div>
				<div class="col-xs-6"><input type="date" name="dateofjoining" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Date of Birth:</p></div>
				<div class="col-xs-6"><input type="date" name="DOB" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Gender:</p></div>
				<div class="col-xs-6"><input type="text" name="Gender" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Street Address:</p></div>
				<div class="col-xs-6"><input type="text" name="Street" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> City:</p></div>
				<div class="col-xs-6"><input type="text" name="City" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> State:</p></div>
                <select name="State">
                <option value="">Select..</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                </select>	
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> ZIP: </p></div>
				<div class="col-xs-6"><input type="text" pattern="[0-9]{5}" name="ZIP" placeholder="00000" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Warehouse ID:</p></div>
				<div class="col-xs-6"><input type="number" name="WarehouseID" class="form-control style_input"></div>
			</div>
            <div>
                <div class="col-xs-6" align="right"></div>
                <button class="btn btn-success" type="submit">Add</button>
                <button class="btn btn-success" button type="reset">Reset</button>
            </div>
			
		</form>
        
        <form method = "post" action="book_add.php" >
			<h2 style="text-align: center;">Add a new Book</h2>
			<div class="row">
				<div class="col-xs-6" align="right"><p> ISBN:</p></div>
				<div class="col-xs-6"><input type="text" name="ISBN" class="form-control style_input"></div>
			</div>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Name:</p></div>
				<div class="col-xs-6"><input type="text" name="Name" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Author:</p></div>
				<div class="col-xs-6"><input type="text" name="Author" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Edition:</p></div>
				<div class="col-xs-6"><input type="text" name="Edition" class="form-control style_input"></div>
			</div>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Type:</p></div>
				<select name="Type"><option value="New"> New </option><option value="Used"> Used </option><option value="E-book"> E-book </option></select>
            </div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Genre:</p></div>
				<div class="col-xs-6"><input type="text" name="Genre" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Binding Type:</p></div>
				<select name="BindingType"><option value="Hardcover"> Hardcover </option><option value="Paperback"> Paperback </option><option value="Other"> Other (E-book) </option></select>
            </div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Buying Price:</p></div>
				<div class="col-xs-6"><input type="number" name="BuyingPrice" class="form-control style_input"></div>
			</div>
            <div>
                <div class="col-xs-6" align="right"></div>
                <button class="btn btn-success" type="submit">Add</button>
                <button class="btn btn-success" type="reset">Reset</button>
            </div>
			
		</form>
        
        <form method = "post" action="warehouse_add.php" >
			<h2 style="text-align: center;">Add a new Warehouse</h2>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Warehouse ID:</p></div>
				<div class="col-xs-6"><input type="number" name="WarehouseID" class="form-control style_input"></div>
			</div>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Rent:</p></div>
				<div class="col-xs-6"><input type="number" name="Rent" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Location:</p></div>
				<div class="col-xs-6"><input type="text" name="Location" class="form-control style_input"></div>
			</div>
            <div>
                <div class="col-xs-6" align="right"></div>
                <button class="btn btn-success" type="submit">Add</button>
                <button class="btn btn-success" type="reset">Reset</button>
            </div>
        </form>
            
        <form method = "post" action="seller_add.php" >
			<h2 style="text-align: center;">Add a new Seller</h2>
			
			<div class="row">
				<div class="col-xs-6" align="right"><p> Seller Name:</p></div>
				<div class="col-xs-6"><input type="text" name="SellerName" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> SSN:</p></div>
				<div class="col-xs-6"><input type="number" class="form-control" name="SSN" placeholder="000-00-0000" maxlength="12"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Phone:</p></div>
				<div class="col-xs-6"><input type="tel" name="Phone" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Street Address:</p></div>
				<div class="col-xs-6"><input type="text" name="Street" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> City:</p></div>
				<div class="col-xs-6"><input type="text" name="City" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> State:</p></div>
                <select name="State">
                <option value="">Select..</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                </select>	
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> ZIP: </p></div>
				<div class="col-xs-6"><input type="text" pattern="[0-9]{5}" name="ZIP" placeholder="00000" class="form-control style_input"></div>
			</div>
            <div>
                <div class="col-xs-6" align="right"></div>
                <button class="btn btn-success" type="submit">Add</button>
                <button class="btn btn-success" type="reset">Reset</button>
            </div>
        </form>
        <form method = "post" action="publisher_add.php" >
			<h2 style="text-align: center;">Add a new Publisher</h2>
			<div class="row">
				<div class="col-xs-6" align="right"><p> Publisher Name:</p></div>
				<div class="col-xs-6"><input type="text" name="PublisherName" class="form-control style_input" ></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> Street Address:</p></div>
				<div class="col-xs-6"><input type="text" name="Street" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> City:</p></div>
				<div class="col-xs-6"><input type="text" name="City" class="form-control style_input"></div>
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> State:</p></div>
                <select name="State">
                <option value="">Select..</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
                </select>	
			</div>
            <div class="row">
				<div class="col-xs-6" align="right"><p> ZIP: </p></div>
				<div class="col-xs-6"><input type="text" pattern="[0-9]{5}" name="ZIP" placeholder="00000" class="form-control style_input"></div>
			</div>
            <div>
                <div class="col-xs-6" align="right"></div>
                <button class="btn btn-success" type="submit">Add</button>
                <button class="btn btn-success" type="reset">Reset</button>
            </div>
        </form>



		</div>
	</div>
</div>

</body>

<!-- Latest compiled and minified JavaScript -->

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>