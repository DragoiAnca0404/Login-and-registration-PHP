<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>User registration system using PHP and MYSQL</title>
    <link rel="stylesheet" media="all" href="C:\xampp\htdocs\constanta\php\style2.css ?v=<?php echo time(); ?>">

</head>
<body>
<div class="header">
<h2>Register</h2>
</div>

<form method="post" action="register.php">
<?php include('errors.php');?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username" value="<?php echo $username; ?>"/>
</div>

<div class="input-group">
<label>Email</label>
<input type="text" name="email"value="<?php echo $email; ?>"/>
</div>
<div class="input-group">
<label>Parola</label>
<input type="password" name="parola1"/>
</div>
<div class="input-group">
<label>Confirma Parola</label>
<input type="password" name="parola2"/>
</div>
<div class="input-group">
<button type="submit" name="inregistrare" class="btn">Inregistrare</button>
</div>
<p>Deja esti membru? <a href="C:\xampp\htdocs\constanta\Html\login.html">Sign in</a> </p>
</form>

</div>
</body>
</html>