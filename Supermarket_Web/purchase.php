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
		<h2>PURCHASE</h2>
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
    <form method="post" action="purchase.php">
    
    
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

			<div class="head"><header><u>PURCHASE DETAILS</u></header></div>

			<span style="padding-left:55px">Purchase ID : 
				<span style="padding-left:25px"><input type="text" name="purchaseid" value="<?php echo $purchaseid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Supplier ID  : 
				<span style="padding-left:0px"><input type="text" name="psupplierid" value="<?php echo $psupplierid; ?>"></span>
				<br><br/>
			</span>
            <span style="padding-left:45px">Product ID : 
				<span style="padding-left:53px"><input type="text" name="pproductid" value="<?php echo $pproductid; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Unit Price : 
				<span style="padding-left:72px"><input type="text" name="punitprice" value="<?php echo $punitprice; ?>"></span>
				<br><br/>
			</span>
			<span style="padding-left:45px">Qnty : 
				<span style="padding-left:30px"><input type="text" name="pqnty" value="<?php echo $pqnty; ?>"></span>
				<br><br/>
			</span>

			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="purinsert"  class="btn">INSERT</button><br/>
				<button type="submit" name="purview"  class="btn">VIEW</button><br/>
				<button type="submit" name="purclear"  class="btn">CLEAR</button><br/>
			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
