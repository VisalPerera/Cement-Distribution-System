<?php
include('database.php');//link the database php file
?>
<?php
include('head.php');//link the header php file
?>
<html>
<head>
<style>
*{margin:0;padding:0;}

body{
	background:rgba(0,0,0,0.4)url("img/salary.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
}
input{outline:none;font-size:20px;color:#fff;padding:1.5%;width:46%;margin-bottom:2px;}

input[type=text]{background:#ccc;border:2px solid #000; color:#000;}

input[type=submit]{border:none;border:2px solid #fff;margin-top:20px;cursor:pointer;
background:#005960;width:100%;}

form{width:50%;}

select{
	width:50%;padding:2%;font-size:18px;outline:none;margin-right:20px;
	background:#ccc;color:#000;
}

::-webkit-input-placeholder{color:#000;}

.copyright{background:#000;height:48px;margin-top:20px;}

.copyright h4{float:right;line-height:41px;margin-right:15px;font-size:18px;color:#fff;}

.copyright h3{float:left;line-height:41px;margin-left:35%;font-size:20px;color:#fff;}

table{width: 50%;}
th{background: #000;color: #fff;text-align: center;}
th,td{padding: 1%;}
td{background: #fff;color: #000;text-align: center;}

</style>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>

<br><br><br><br>
<center>
<?php
	$sqlEmployeeList = "SELECT * FROM employee";
	$resultEmployeeList = $conn->query($sqlEmployeeList);
	if ($resultEmployeeList->num_rows >0){
		echo "<form action = 'x.php' method = 'post'>
		<Select name = 'sal'>
				<option value = 0>Employee Name</option>";
				
		while($rowEmployeeList = $resultEmployeeList->fetch_assoc()){
			$EmployeeName = $rowEmployeeList['name'];
			$Employeeid = $rowEmployeeList['id'];
			echo "<option value = $Employeeid>$EmployeeName</option>";
		}
	}
	echo "</Select>
<input type = 'text' name = 'salary' placeholder = 'Salary'><br><br>
<input type = 'submit' name = 'payemp' value = 'Pay'>
<br><br><br>
</form>";
?>
<?php
	$month = date("Y-m");
	$sql = "SELECT * FROM salemployee where month = '$month'";
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		echo "<table border = '1'>
		<tr><th>Name</th><th>Salary</th><th>Date</th></tr>";
		while($row = $result->fetch_assoc()){
			$empid = $row['id'];
			$empsalary = $row['price'];
			$empdate = $row['date'];
			$sqlc = "SELECT * FROM employee where id = $empid";
			$resultc = $conn->query($sqlc);
			if ($resultc->num_rows >0){
				while($rowc = $resultc->fetch_assoc()){
					$empname = $rowc['name'];
				}
			}
			echo "<tr><td>{$empname}</td><td>{$empsalary}</td><td>{$empdate}</td></tr>";
		}
		echo "</table>";
	}
?>
<br>
<br>
<br>
<br>
<br>
<br><br><br><br><br><br><br>
<div class = 'copyright'>
	<h3> &#169 2021 T K V Enterprises</h3>
	<h4>No 58 , Colombo Rd , Pothuhara</h4>
	<h4>077 186 5633 | </h4>
</div>
