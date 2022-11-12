<?php
session_start();
?>
<?php
include('database.php');
?>

<html>
<head>
<link rel = 'stylesheet' type = 'text/css' href = 'css/bootstrap.min.css'>
<style>
*{margin:0;padding:0;}

body{
	background:rgba(0,0,0,0.5)url("img/login.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}

h1{color:#fff;text-align:center;}

input{outline:none;font-size:22px;color:#fff;padding:2%;width:100%;margin-bottom:15px;}

input[type=text]{background:transparent;border:none;border:2px solid #fff; color:#fff;}
input[type=password]{background:transparent;border:none;border:2px solid #fff; color:#fff;}

input[type=submit]{border:none;border:2px solid #fff;margin-top:20px;cursor:pointer;
background:#00f;width:100%;}

button{width:23%;padding:0.5%;background:#990000;color:#fff;
font-size:18px;border:none;border:2px solid #fff;cursor:pointer;}

form{width:23%;}

p{text-align:left; color:#fff;}

a{color:#fff; text-decoration:none;}
</style>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>

<br><br><br><h1>Login</h1><br>
<center>
<form action = "index.php" method = "post">
<p>Username</p>
<input type = "text" name = "user"><br><br>
<p>Password</p>
<input type = "Password" name = "password"><br><br>
<input type = "submit" name = "login" value = "Login">
</form>
<a href = "register.php"><button>Sign up</button></a><br><br>
<a href = "frgt_Pwd/forget.php">Forget Password</a>

<?php 
if(isset($_POST['login'])){ /*function of login*/
	$user = $_POST['user'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM register WHERE user = '$user' and password = '$password' limit 1";
	$result = $conn->query($sql);
	if ($result->num_rows == 1){ /*checkeing the num rows are greater than 0*/
		$_SESSION['user'] = $user;   /*condition of checking username or password is correct*/
		$_SESSION['password'] = $password;
		header('location:homepage.php');
	}
}

?>
