<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>AgriConsult Login</title>
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
<div class="header">
	<div style="display: flex;justify-content: space-between;align-items: center;padding: 10px 15px;border-bottom: 1px solid #ccc;" >
  		<h2 style="margin: 0;font-size: 1.5rem;font-family: Arial, sans-serif;">Login</h2>
  		<button class="close-btn" style="background: none;border: 5px;font-size: 1.5rem;cursor: pointer;line-height: 1;background-color: #034329;width:30px;border-radius: 5px;" onclick="window.location.href='http://localhost/AgriConsult/Home.php'">×</button>
	</div>
  	
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>