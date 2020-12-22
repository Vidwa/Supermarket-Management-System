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
		<h2>CUSTOMER</h2>
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
    <form method="post" action="customer.php">
    
    
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

			<div class="head"><header><u>CUSTOMER DETAILS</u></header></div>

			<span style="padding-left:55px">Customer ID : 
				<span style="padding-left:25px"><input type="text" name="customerid" value="<?php echo $customerid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Customer Name : 
				<span style="padding-left:0px"><input type="text" name="customername" value="<?php echo $customername; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Address : 
				<span style="padding-left:63px"><input type="text" name="cusaddress" value="<?php echo $cusaddress; ?>"></span>
				<br><br/>
			</span>
			
			<span style="padding-left:45px">Contact No : 
				<span style="padding-left:38px"><input type="text" name="cuscontactno" value="<?php echo $cuscontactno; ?>"></span>
				<br><br/>
			</span>
			

			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="cusinsert" class="btn">INSERT</button><br/>
				<button type="submit" name="cusdelete" class="btn">DELETE</button><br/>
				<button type="submit" name="cusview" class="btn">VIEW</button><br/>
				<button type="submit" name="cusclear" class="btn">CLEAR</button><br/>
				<button type="submit" name="cusupdate" class="btn">UPDATE</button><br/>
			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
