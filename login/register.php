<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>AgriConsult Registration</title>
  <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
  <div class="header">
	<div style="display: flex;justify-content: space-between;align-items: center;padding: 10px 15px;border-bottom: 1px solid #ccc;" >
  		<h2 style="margin: 0;font-size: 1.5rem;font-family: Arial, sans-serif;">Register</h2>
  		<button class="close-btn" style="background: none;border: 5px;font-size: 1.5rem;cursor: pointer;line-height: 1;background-color: #034329;width:30px;border-radius: 5px;" onclick="window.location.href='http://localhost/AgriConsult/Home.php'">×</button>
	</div>
  	<h2></h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Login</a>
  	</p>
  </form>
</body>
</html>