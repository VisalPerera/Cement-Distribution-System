<?php
include('database.php');//link the database php file
?>
<?php
include('head.php');//link the header php file
?>
<html>
<head>
<link rel = 'stylesheet' type = 'text/css' href = 'css/bootstrap.min.css'>
<style>
*{margin:0;padding:0;}

body{
	background:rgba(0,0,0,0.3)url("img/newdore.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}
form{margin-top:50px;width:80%;}

input{outline:none;font-size:20px;color:#fff;padding:1%;width:48%;margin-bottom:15px;}

input[type=text]{background:transparent;border:none;border:2px solid #fff; color:#fff;}

input[type=submit]{
	border:none;border:2px solid #fff;margin-top:20px;cursor:pointer;
	background:#005960;width:100%;
}

select{
	width:48%;padding:1.2%;font-size:18px;outline:none;background:transparent;color:#fff;
	border:2px solid #fff;
}
h1{color:#fff;}

::-webkit-input-placeholder{color:#fff;}

.copyright{margin-top:9.7px;background:#000;height:48px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}
</style>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>

<br><br><br>
<center>
<h1>Register New Employee or Driver</h1>
<br><br>
<form action = "regEmployee.php" method = "post">
<input type = "text" name = "nic" placeholder = 'NIC' style = "float:left;">
<input type = "text" name = "name" placeholder = 'Name' style = "float:right;"><br><br><br>
<input type = "text" name = "phone" placeholder = 'Phone Number' style = "float:left;">

<Select name = 'job' style = "float:right;">
<option value = 'job'>Select Job</option>
<option value = 'driver'>Driver</option>
<option value = 'employee'>Employee</option>
</Select>
<br><br><br>
<input type = "submit" name = "signup" value = "Register">
</form>

<?php
if(isset($_POST['signup'])){
	$nic = $_POST['nic'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$job = $_POST['job'];
	
	if($job == "driver"){
		$sqli = "insert into driver(nic,name,phone) values('$nic','$name',$phone)";
		if($conn->query($sqli) === TRUE){
			header('location:homepage.php');
		}
	}
	else{
		$sqli = "insert into employee(nic,name,phone) values('$nic','$name',$phone)";
		if($conn->query($sqli) === TRUE){
			header('location:homepage.php');
		}
	}
}

?>
<br>
<br>
<br>
<br>
<br><br><br><br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>