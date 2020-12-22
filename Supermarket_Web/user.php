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
        background-image: url("1024px-ASDA_in_Keighley.jpg");
    } 
 
    </style>
	<div class="header">
		<h2>USER</h2>
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
    <form method="post" action="product.php">
    
    
	<div class="input-group">
	
  		<div class="column left">
	  		<div class="input-group">
				<button type="submit" name="product" formaction="login.php" class="btn">PRODUCT</button><br/>
			    <button type="submit" name="Supplier" formaction="login.php" class="btn">SUPPLIER</button><br/>
		        <button type="submit" name="Customer" formaction="login.php" class="btn">CUSTOMER</button><br/>
				<button type="submit" name="Employee" formaction="login.php" class="btn">EMPLOYEE</button><br/>
				<button type="submit" name="Sales" formaction="login.php" class="btn">SALES</button><br/>
				<button type="submit" name="Purchase" formaction="login.php" class="btn">PURCHASE</button><br/>
				<button type="submit" name="user" formaction="login.php" class="btn">USER</button><br/>
				<button type="submit" name="logout" formaction="login.php" class="btn">LOG OUT</button><br/>
			</div>
		</div>
		<div class="column middle">
			<div class="input-groupNew">

			<div class="head"><header><u>USER DETAILS</u></header></div><br/>

			<span style="padding-left:75px">User ID : 
				<span style="padding-left:36px"><input type="text" name="customerid" value="<?php echo $customerid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:65px">Username : 
				<span style="padding-left:20px"><input type="text" name="customername" value="<?php echo $customername; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:65px">Password : 
				<span style="padding-left:24px"><input type="text" name="customeraddress" value="<?php echo $customeraddress; ?>"></span>
				<br><br/>
			</span>
			
			
			

			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="cusinsert" formaction="login.php" class="btn">INSERT</button><br/>
				<button type="submit" name="cusdelete" formaction="login.php" class="btn">DELETE</button><br/>
				<button type="submit" name="cusview" formaction="login.php" class="btn">VIEW</button><br/>
				<button type="submit" name="cusclear" formaction="login.php" class="btn">CLEAR</button><br/>
			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
