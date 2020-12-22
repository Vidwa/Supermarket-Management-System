
<!DOCTYPE html>
<html>
<head>
   <title>Inventory System</title>
   
   <style>
   	 *{
	margin: 10px;
	padding: 0px;
}
body{
	font-size: 120%;
	background: #F8F8FF;
	
}

.header{
	width: 95%;
	margin: 50px auto 0px;
	color: white;
	background: #5F9EA0;
	text-align: center;
	border: 1px solid #B0C4DE;
    border-bottom: none; 
	border-radius: 10px 10px 0px 0px;
	padding: 20px;
}

.btn{
	padding: 10px;
	font-size:15px;
	color:white;
	width: 20%;
	background: #5F9EA0;
	border:none;
	border-radius: 5px;
}

.input-group{
	margin: 10px 0px 10px 0px;
}

.input-group label{
	
	display:block;
	text-align:left;
	margin:3px;
}

.input-group input{
	height: 30px;
	width:60%;
	padding:5px 10px;
	font-size:16px;
	border-radius: 5px;
	border: 1px solid gray;
}
   </style>
</head>
<body>
	<style>
    body {
        background-image: url("blerje-1.jpg");
    } 
 
    </style>
	<div class="header">
		<h2>Inventory System</h2>
	</div>
    <form method="post" action="index.php">
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
    </form>
</body>
</html>
