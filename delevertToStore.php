<?php
session_start();
?>
<?php
include('database.php');
?>
<?php
include('head.php');
?>
<html>
<head>
<link rel = 'stylesheet' type = 'text/css' href = 'css/bootstrap.min.css'>
<style>
*{margin:0;padding:0;}

body{
	background:rgba(0,0,0,0.4)url("img/store.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}
.custorder form{margin-top:20px;width:100%;}

.custorder input{
	cursor:pointer;
	width:50%;
	outline:none;
	border:none;
	font-size:20px;
	color:#fff;
	background:#223a5e;
	padding:1%;
}
input[type=text]{background:#fff;color:#000;width:25%;padding:0.8%;}
	
.custorder select{width:25%;padding:1%;outline:none;cursor:pointer;}

h1{color:#fff;}

.copyright{background:#000;height:48px;margin-top:45.7px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}
</style>
<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<center>
<br><br><br><br><br><br>
<div class = 'custorder'>
	<h1>Dristribute to Store</h1>
	<form action = 'delevertToStore.php' method = 'post'>
	<select name = 'hrdwarename'>
		<option value = '0'>Select Store</option>
		<option value = '1'>Store 1</option>
		<option value = '2'>Store 2</option>
		<option value = '3'>Store 3</option>
		<option value = '4'>Store 4</option>
		<option value = '5'>Store 5</option>
	</select>

	<input type = 'text' name = 'order' placeholder = 'Enter Number'>
	<br><br><br><br>
	<input type = 'submit' name = 'custorder' Value = 'Delevery Orders to Stores'>
	</form>
	</div>
<br><br><br><br>

<?php
$date = date("Y-m-d");

$sqlourstore = "SELECT * FROM ourstore";//select outshore data from database
$resultourstore = $conn->query($sqlourstore);
if ($resultourstore->num_rows >0){
	while($rowourstore = $resultourstore->fetch_assoc()){
		$qtyourstore = $rowourstore['qty'];
	}
}

if(isset($_POST['custorder'])){
	$month = date("Y-m");
	$date = date("Y-m-d");
	$hrdwarename = $_POST['hrdwarename'];
	$order = $_POST['order'];
	
	$sqlPrice = "SELECT * FROM price";
	$resultPrice = $conn->query($sqlPrice);
	if ($resultPrice->num_rows >0){
		while($rowPrice = $resultPrice->fetch_assoc()){
			$buyPrice = $rowPrice['buy'];
			$salePrice = $rowPrice['sale'];
		}
	}
	
	$price = $order * $salePrice;
	$income = ($salePrice - $buyPrice) * $order;
	
	$sqli = "insert into payment(shopid,qty,saleprice,total,income,date,month) values($hrdwarename,$order,$salePrice,$price,$income,'$date','$month')";
	if($conn->query($sqli) === TRUE){
		$qty = $qtyourstore - $order;
		$sqlu = "UPDATE ourstore set qty=$qty,date='$date'";
		if($conn->query($sqlu) === TRUE){
			
		}
	}
	
}
?>
<br>
<br>
<br>
<br>
<br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>