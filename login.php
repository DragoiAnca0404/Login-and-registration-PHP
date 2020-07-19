<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

  <title>Inregistrare</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
</head>
<body>

                    
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" />
  	</div>
  	<div class="input-group">
  		<label>Parola</label>
  		<input type="password" name="password"/>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Nu esti inca membru? <a href="register.php">Sign up</a>
  	</p>
  </form>
  
   
</body>
</html>