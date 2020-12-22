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
		<h2>SALES</h2>
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
    <form method="post" action="sales.php">
    
    
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

			<div class="head"><header><u>SALES DETAILS</u></header></div>

			<span style="padding-left:55px">Sales ID : 
				<span style="padding-left:25px"><input type="text" name="salesid" value="<?php echo $salesid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Customer ID  : 
				<span style="padding-left:0px"><input type="text" name="scustomerid" value="<?php echo $scustomerid; ?>"></span>
				<br><br/>
			</span>
            <span style="padding-left:45px">Product ID : 
				<span style="padding-left:53px"><input type="text" name="sproductid" value="<?php echo $sproductid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Unit Price : 
				<span style="padding-left:72px"><input type="text" name="sunitprice" value="<?php echo $sunitprice; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Qnty : 
				<span style="padding-left:30px"><input type="text" name="sqnty" value="<?php echo $sqnty; ?>"></span>
				<br><br/>
			</span>

			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="salinsert"  class="btn">INSERT</button><br/>
				<button type="submit" name="salview"  class="btn">VIEW</button><br/>
				<button type="submit" name="salclear"  class="btn">CLEAR</button><br/>
			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
