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
		<h2>PRODUCTS</h2>
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
    <form method="post" action="products.php">
    
    
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

			<div class="head"><header><u>PRODUCT DETAILS</u></header></div>

			<span style="padding-left:55px">Product Code : <input type="text" name="productcode" value="<?php echo $productcode; ?>"><br><br/>
			</span>
			<span style="padding-left:45px">Product Name : <input type="text" name="productname" value="<?php echo $productname; ?>"><br><br/>
			</span>
			<span style="padding-left:45px">Category : 
			
				<select name="List">
		  			<option value="Frozen Food">Frozen Food</option>
		  			<option value="Sanitory Items">Sanitory Items</option>
		  			<option value="Grocery">Grocery</option>
		  			<option value="Baby Items">Baby Items</option>
		  			<option value="Stationary">Stationary</option>
				</select><br><br/>
			</span>

			<span style="padding-left:45px">Supplier ID : <input type="text" name="supid" value="<?php echo $supid; ?>"><br><br/>
			</span>
			
			<span style="padding-left:45px">Company : 
			      
				<select name="List1">
	
		  			<option value="Munchee">Munchee</option>
		  			<option value="Maliban">Maliban</option>
		  			<option value="Uniliver">Uniliver</option>
		  			<option value="Hemas">Hemas</option>
		  			<option value="Freeland">Freeland</option>
		  			<option value="Vijaya">Vijaya</option>
				</select><br><br/>
			</span>

			
			<span style="padding-left:45px">Quantity Type : 
			
				<select name="List2">
		  			<option value="Nos">NOS</option>
		  			<option value="Lit">Lit</option>
		  			<option value="Kg">Kg</option>
				</select><br><br/>
			</span>
			
			<span style="padding-left:45px">Quantity : <input type="text" name="quantity" value="<?php echo $quantity; ?>"><br><br/>
			</span>
			<span style="padding-left:45px">Cost : <input type="text" name="cost" value="<?php echo $cost; ?>"><br><br/>
			</span>
			<span style="padding-left:45px">Unit Price : <input type="text" name="unitprice" value="<?php echo $unitprice; ?>"><br><br/>
			</span>
			
			</div>
		</div>
		<div class="column right">
	  		
				<button type="submit" name="proinsert" class="btn">INSERT</button><br/>
				<button type="submit" name="prodelete" class="btn">DELETE</button><br/>
				<button type="submit" name="proview"  class="btn">VIEW</button><br/>
				<button type="submit" name="proclear" class="btn">CLEAR</button><br/>
				<button type="submit" name="proupdate" class="btn">UPDATE</button><br/>
			
		</div>

		</div>
	</div>
    
</form>
</body>
</html>
