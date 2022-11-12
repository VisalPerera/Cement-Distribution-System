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
<style>
*{margin:0;padding:0;}

body{
	background:rgba(0,0,0,0.5)url("img/company.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}

.ordfrmcc form{text-align:center;margin-top:90px;width:100%;}

.ordfrmcc input{
	cursor:pointer;width:30%;outline:none;border:none;
	font-size:20px;color:#fff;background:#223a5e;padding:1%;
}
input[type=text]{background:#fff;color:#000;}

h1{color:#fff;text-align:center;}

.copyright{background:#000;height:48px;margin-top:20px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}

</style>
<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<br><br><br><br>
<div class = 'ordfrmcc'>
	<h1>Order From Cement Company</h1>
	<form action = 'ordFrmCmtCompany.php' method = 'post'>
	<input type = 'text' name = 'ordfrmccval' placeholder = 'Enter Number'>
	
	<br><br>
	<input type = 'submit' name = 'ordfrmcc' Value = 'Buy'>
</div>
<br><br><br><br><br>
<?php
$date = date("Y-m-d");

$sqlourstore = "SELECT * FROM ourstore";
$resultourstore = $conn->query($sqlourstore);
if ($resultourstore->num_rows >0){
	while($rowourstore = $resultourstore->fetch_assoc()){
		$qtyourstore = $rowourstore['qty'];
	}
}

if(isset($_POST['ordfrmcc'])){
	$ordfrmccval = $_POST['ordfrmccval'];
	$qty = $qtyourstore + $ordfrmccval;
	$sqlu = "UPDATE ourstore set qty=$qty,date='$date'";
	if($conn->query($sqlu) === TRUE){

	}
}
?>
<br>
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