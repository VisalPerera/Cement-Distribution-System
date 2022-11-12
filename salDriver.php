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
	$sqldrvloyeeList = "SELECT * FROM driver";
	$resultdrvloyeeList = $conn->query($sqldrvloyeeList);
	if ($resultdrvloyeeList->num_rows >0){
		echo "<form action = 'x.php' method = 'post'>
		<Select name = 'saldrv'>
				<option value = 0>driver Name</option>";
				
		while($rowdrvloyeeList = $resultdrvloyeeList->fetch_assoc()){
			$drvloyeeName = $rowdrvloyeeList['name'];
			$drvid = $rowdrvloyeeList['id'];
			echo "<option value = $drvid>$drvloyeeName</option>";
		}
	}
	echo "</Select>
<input type = 'text' name = 'salary' placeholder = 'Salary'><br><br>
<input type = 'submit' name = 'paydrv' value = 'Pay'>
<br><br><br>
</form>";
?>
<?php
	$month = date("Y-m");
	$sql = "SELECT * FROM saldriver where month = '$month'";
	$result = $conn->query($sql);
	if ($result->num_rows >0){
		echo "<table border = '1'>
		<tr><th>Name</th><th>Salary</th><th>Date</th></tr>";
		while($row = $result->fetch_assoc()){
			$drvid = $row['id'];
			$drvsalary = $row['price'];
			$drvdate = $row['date'];
			$sqlc = "SELECT * FROM driver where id = $drvid";
			$resultc = $conn->query($sqlc);
			if ($resultc->num_rows >0){
				while($rowc = $resultc->fetch_assoc()){
					$drvname = $rowc['name'];
				}
			}
			echo "<tr><td>{$drvname}</td><td>{$drvsalary}</td><td>{$drvdate}</td></tr>";
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
