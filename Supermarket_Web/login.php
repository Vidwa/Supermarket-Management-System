<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   <title>Inventory System</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
    <style>
     body {
        background-image: url("blerje-1.jpg");
        background-size: cover;

     } 
    
    </style>
</div>
	
		
	
        <form method="post" action="login.php">
    	<!--display validation errors here-->
       	
			<div class="input-group">
				<h1>Login</h1>
				<?php include('errors.php'); ?>
				<label><h4>Username</h4></label>
				<div class="align"><input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>"></div>
				
			
				<label><h4>Password</h4></label>
				<div class="align"><input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"></div>
				
				<div class="btn">
				<button type="submit" name="login" class="btn">LOGIN</button>
				</div>
			</div>
		</form>
	

</body>
</html>
