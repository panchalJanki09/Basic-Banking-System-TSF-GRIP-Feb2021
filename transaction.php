<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select * from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="button.css">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-image:url("images/b9.png");
			
			background-repeat: no-repeat;
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:1px solid;
			border-collapse:collapse;
			background-color:white;
			}
		th{
			
			font-size:26px;
			padding:16px;
			color:blue;
		}
		
		td{
			text-align:center;
			font-size:26px;
			color:green;
			font-family:MONOTYPE CORSIVA;
			padding: 10px 20px 10px 22px;
			font-color:#F75D59;
			font-weight:bold;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
				font-family:MONOTYPE CORSIVA;
		}
		th,td{
			border-collapse:collapse;
			border:1px groove;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:black;
			text-align:center;
		}
		.btn {
			background-color:black;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}

		.btn:hover {
			background-color:green;
		}
		  .header{
	height:130px;
	margin:auto;
   }
  ul{
	float:right;
	list-style:none;
	margin-top:40px;
	margin-right:30px;
   }
  ul li{
    display:inline-block;
   }
   ul li a{
	text-decoration:none;
	color:white;
	padding:10px 15px;
	margin:10px 15px 0px 0px;
	border:2px solid #fff;
	transition:0.6s ease;
   }
   ul li a:hover{
	font-weight:1000px;
	border-color:black;
	background:#E0FFFF;
	color: #000;
	font-weight:bold;   }
	</style>
	</head>
	<body>
	<div class="header">
       <br>
    <ul>
        <li><a href="index.php">Home</a></li>
		<li><a href="getdetail.php">View User </a></li>
		<li><a href="transfer.php">Money Transfer</a></li>
		<li><a href="transaction.php">All Transaction</a></li>
	</ul> 
	</div>
		<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
	</a>
	</ul><br><br><br><br><br><br>
		
		<table class="flat-table-1">
			<tr>
				<th>sender</th>
				<th>recevier</th>
				<th>amount</th>
			</tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons">
				<button class="glow-on-hover" type="submit" name="name">BACK</button>
			</div>
		</form>
		
	</body>
</html>