<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   <link rel="stylesheet" type="text/css" href="productstyle.css">
</head>
<body>
	<style>
    body {
        background-image: url("blerje-1.jpg");
    } 
 
    </style>
	<div class="header">
		<h2>EMPLOYEE</h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['SUCCESS'])): ?>
			<div class="error sucess">
				<h3>
					<?php 
                       echo $_SESSION['SUCCESS'];
                       unset($_SESSION['SUCCESS']);
					?>
				</h3>
			</div>
		<?php endif ?>
	</div>
    <form method="post" action="employee.php">
    
    
	<div class="input-group">
	
  		<div class="column left">
	  		<div class="input-group">
				<button type="submit" name="product" formaction="products.php" class="btn">PRODUCT</button><br/>
	            <button type="submit" name="supplier" formaction="supplier.php" class="btn">SUPPLIER</button><br/>
                <button type="submit" name="customer" formaction="customer.php" class="btn">CUSTOMER</button><br/>
		        <button type="submit" name="employee" formaction="employee.php" class="btn">EMPLOYEE</button><br/>
		        <button type="submit" name="sales" formaction="sales.php" class="btn">SALES</button><br/>
		        <button type="submit" name="purchase" formaction="purchase.php" class="btn">PURCHASE</button><br/>
		        <button type="submit" name="user" formaction="login.php" class="btn">USER</button><br/>
				<button type="submit" name="logout" formaction="login.php" class="btn">LOG OUT</button><br/>
			</div>
		</div>
		<div class="column middle">
			<div class="input-groupNew">

			<div class="head"><header><u>EMPLOYEE DETAILS</u></header></div>

			<span style="padding-left:55px">Employee ID : 
				<span style="padding-left:25px"><input type="text" name="employeeid" value="<?php echo $employeeid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Employee Name : 
				<span style="padding-left:0px"><input type="text" name="employeename" value="<?php echo $employeename; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Gender :
			<span style="padding-left:70px">
		
				<input type="radio" name="empgender" value="Male">Male
				<input type="radio" name="empgender" value="Female">Female
				<br><br/>
			</span>
			<span style="padding-left:45px">Address : 
				<span style="padding-left:66px"><input type="text" name="empaddress" value="<?php echo $empaddress; ?>"></span>
				<br><br/>
			</span>
			
			<span style="padding-left:45px">Contact No : 
				<span style="padding-left:41px"><input type="text" name="empconno" value="<?php echo $empconno; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">DOB : 
				<span style="padding-left:89px"><input type="text" name="empdob" value="<?php echo $empdob; ?>"></span>
				<br><br/>
			</span>

			<span style="padding-left:45px">Type : 
			    <span style="padding-left:92px">  
				<select name="jobtype">
		  			<option value="Cashier">Cashier</option>
		  			<option value="Helper">Helper</option>
		  			<option value="Manager">Manager</option>
		  			<option value="Superviser">Superviser</option>
		  			
				</select></span><br><br/>
			</span>

			<span style="padding-left:45px">Salary : 
				<span style="padding-left:84px"><input type="text" name="empsalary" value="<?php echo $empsalary; ?>"></span>
				<br><br/>
			</span>

			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="empinsert" formaction="new.php" class="btn">INSERT</button><br/>
				<button type="submit" name="empdelete"  class="btn">DELETE</button><br/>
				<button type="submit" name="empview"  class="btn">VIEW</button><br/>
				<button type="submit" name="empclear" class="btn">CLEAR</button><br/>
				<button type="submit" name="empupdate" class="btn">UPDATE</button><br/>

			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>