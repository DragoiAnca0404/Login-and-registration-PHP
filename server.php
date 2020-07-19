<?php
//connect to the database
$username = "";
$email = "";
$errors=array();


$db=mysqli_connect('localhost','root','','inregistrare');//

if(isset($_POST['inregistrare'])){
    $username=mysql_real_escape_string($_POST['username']);
    $email=mysql_real_escape_string($_POST['email']);
    $parola1=mysql_real_escape_string($_POST['parola1']);
    $parola2=mysql_real_escape_string($_POST['parola2']);
    
    if(empty($username)){
        array_push($errors,"Numele de utilizator este necesar.");//adauga eroare in vector
    }
     if(empty($email)){
        array_push($errors,"Email-ul este necesar.");//adauga eroare in vector
    }
     if(empty($parola1)){
        array_push($errors,"Parola este necesar.");//adauga eroare in vector
    }
    
    if($parola1!=$parola2){
        array_push($errors,"Cele doua parole nu se potrivesc.Te rugam sa verifici!");
    }
    //daca nu exista erori vom salva in baza de date
    
    if(count($errors)==0){
        $password=md5($parola1);
        $sql="INSERT INTO users(username,email,parola) 
        VALUES('$username','$email','$password')";  
        mysqli_query($db, $sql);
        $_SESSION['username']=$username;
        $_SESSION['success']="Te-ai logat!";
        header('location:index.php');
    }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "E nevoie de usename");
  }
  if (empty($password)) {
  	array_push($errors, "E nevoie de parola.");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND parola='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == true) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Te-ai logat";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Gresit parola sau username");
  	}
  }
}
?>