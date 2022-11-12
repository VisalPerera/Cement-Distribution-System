<?php
include('database.php');
?>
<?php
//Change Price
if(isset($_POST['change'])){
	
	$buy = $_POST['buy'];
	$sale = $_POST['sale'];
	
	$sqlu = "UPDATE price set buy=$buy,sale='$sale'";
	if($conn->query($sqlu) === TRUE){
		header('location:changeprice.php');
	}
}


if(isset($_POST['payemp'])){
	
	$date = date("Y-m-d");
	$month = date("Y-m");
	$salid = $_POST['sal'];
	$salary = $_POST['salary'];
	
	$sqlu = "INSERT INTO salemployee values($salid,$salary,'$date','$month')";
		if($conn->query($sqlu) === TRUE){
			header('location:salEmployee.php');
		}
}

if(isset($_POST['paydrv'])){
	
	$date = date("Y-m-d");
	$month = date("Y-m");
	$salid = $_POST['saldrv'];
	$salary = $_POST['salary'];
	
	$sqlu = "INSERT INTO saldriver values($salid,$salary,'$date','$month')";
		if($conn->query($sqlu) === TRUE){
			header('location:salDriver.php');
		}
}
?>