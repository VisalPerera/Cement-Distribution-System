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
	width:100%;
	height:80vh;
	background:rgba(0,0,0,0.6)url("img/monthly.jpg");
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;
	background-blend-mode:darken;
	height:100vh;
}
h2{color:#fff;}

.lnkbtn{margin-top:4%;width: 60%;}
table{width:80%;margin-top:5%;}
th{background: #000;color: #fff;text-align: center;}
th,td{padding: 1%;width:20%;}
td{background: #fff;color: #000;text-align: center;}
select{width:20%;padding:1%;margin-top:10px;border-radius:4px;font-size:20px;outline:none;}
input{width:20%;padding:1%;background:#900;margin-top:10px;border-radius:4px;
font-size:20px;outline:none;border:none;color:#fff;cursor:pointer;}
</style>
<title>Welcome</title>
</head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<body>
<center>
<form action = 'income.php' method = 'post'>
<select name = 'y'>
<option value = <?php echo date("Y");?>><?php echo date("Y");?></option>
</select>
<select name = 'm'>
<option value = <?php echo date("m");?>><?php echo date("F");?></option>
<option value = '01'>January</option>
<option value = '02'>February</option>
<option value = '03'>March</option>
<option value = '04'>April</option>
<option value = '05'>May</option>
<option value = '06'>June</option>
<option value = '07'>July</option>
<option value = '08'>August</option>
<option value = '09'>September</option>
<option value = '10'>Octomber</option>
<option value = '11'>November</option>
<option value = '12'>December</option>
</select>
<input type = 'submit' name = 'searchincome' value = 'Search Income'>
</form>
<?php
if(isset($_POST['searchincome'])){  /*function of checking if is it click the search income*/
	$y = $_POST['y']; /*by form data year and month has been assign to a variable*/
	$m = $_POST['m']; /*creating the month by asigned variables*/
	$month = $y . '-' . $m; /*dispaly the two variables*/
	echo "<table border = 1>
		<tr><th>Store Name</th><th>Income From One Cement</th><th>No of Cement Packs</th><th>Date</th><th>Income</th></tr>"; 
	$sql = "SELECT SUM(income) as sum,SUM(qty) as qty,shopid,date FROM payment WHERE month = '$month' GROUP BY date,shopid"; 
	$result = $conn->query($sql); /*sql query has been wriiten to get the income and the qty date*/
	if ($result->num_rows >0){ /*checking the num rows are greater than 0*/
		while($row = $result->fetch_assoc()){ /* store data while assign them in $result*/
			$sum = $row['sum'];
			$qty = $row['qty'];
			$id = $row['shopid'];
			$date = $row['date'];
			if ($sum == 0 or $qty == 0){ /*condition to check sum and quantity wheter it equal to the 0 */
				$oneincome = 0;
			}
			else{
				$oneincome = $sum / $qty;
			}
			$sqlstoreName = "SELECT storename FROM store where storeid = $id" ;
			$resultstoreName = $conn->query($sqlstoreName);
			if ($resultstoreName->num_rows >0){
				while($rowstoreName = $resultstoreName->fetch_assoc()){
					$namestoreName = $rowstoreName['storename'];
					echo "<td>{$namestoreName}</td><td>Rs. {$oneincome}/=</td><td>{$qty}</td><td>{$date}</td><td>Rs. {$sum}/=</td></tr>";
				}
			}
		
		}
	}
	
	$sqlc = "SELECT SUM(income) as sum,SUM(qty) as qty,date FROM customerpayment WHERE month = '$month' GROUP BY date";
	$resultc = $conn->query($sqlc);
	if ($resultc->num_rows >0){
		while($rowc = $resultc->fetch_assoc()){
			$sumc = $rowc['sum'];
			$qtyc = $rowc['qty'];
			$datec = $rowc['date'];
			if ($sumc == 0 or $qtyc == 0){
				$oneincomec = 0;
			}
			else{
				$oneincomec = $sumc / $qtyc;
			}
			echo "<td>Any Customer</td><td>Rs. {$oneincomec}/=</td><td>{$qtyc}</td><td>{$datec}</td><td>Rs. {$sumc}/=</td></tr>";
		}
	}
}
?>
