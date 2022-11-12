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
	background:rgba(0,0,0,0.4)url("img/customer.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}
.corder form{margin-top:30px;width:100%;}

.corder input{
	cursor:pointer;width:50%;outline:none;border:none;font-size:20px;color:#fff;
	background:#223a5e;padding:1%;
}

input[type=text]{background:#fff;color:#000;}

h1{color:#fff;}

.copyright{background:#000;height:48px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}

</style>
<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<center>
<br><br><br><br><br>
<div class = 'corder'>
	<h1>Delevery to Customers</h1>
	<br>
	<form action = 'delevertToCustomer.php' method = 'post'>
	
	<input type = 'text' name = 'corderval' placeholder = 'Enter Number'>
	<br><br>
	<input type = 'submit' name = 'corder' Value = 'Order Complete'>
	</form>
</div>
<br><br><br><br><br><br><br>
<?php
$date = date("Y-m-d");

$sqlourstore = "SELECT * FROM ourstore";//select ourstore data from database
$resultourstore = $conn->query($sqlourstore);
if ($resultourstore->num_rows >0){
	while($rowourstore = $resultourstore->fetch_assoc()){
		$qtyourstore = $rowourstore['qty'];
	}
}

if(isset($_POST['corder'])){
	$month = date("Y-m");
	$date = date("Y-m-d");
	$corderval = $_POST['corderval'];
	
	$sqlPrice = "SELECT * FROM price"; /* store the cement qty price and sales price*/
	$resultPrice = $conn->query($sqlPrice);
	if ($resultPrice->num_rows >0){
		while($rowPrice = $resultPrice->fetch_assoc()){
			$buyPrice = $rowPrice['buy'];
			$salePrice = $rowPrice['sale'];
		}
	}
	
	$price = $corderval * $salePrice;
	$income = ($salePrice - $buyPrice) * $corderval;
	
	$sqli = "insert into customerpayment(qty,saleprice,total,income,date,month) values($corderval,$salePrice,$price,$income,'$date','$month')";
	if($conn->query($sqli) === TRUE){ /*checking cement decreasing*/
		$qty = $qtyourstore - $corderval;
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