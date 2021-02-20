<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
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
		  color:blue;
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
			border:1px solid ;
			border-collapse:collapse;
			background:white;
			}
		th{
			color:blue;
			font-family:MONOTYPE CORSIVA;
			font-size:30px;
			padding:16px;
		}
		
		td{
			font-size:30px;
			color:green ;
			font-family:MONOTYPE CORSIVA;
			padding: 10px 20px 10px 22px;
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
			margin-top:-20px;
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
	border-color:black;
	background:#E0FFFF;
	color: #000;
	font-weight:bold;
   }
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
		<ul class="nav-ul"">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
	</a>
	</ul><br><br><br>
		<h2><?php echo "Mini Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Customer</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons">
			<br><button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			
			</div>
		</form>
		
	</body>
</html>