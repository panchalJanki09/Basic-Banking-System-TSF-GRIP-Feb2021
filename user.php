<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		.nav-li a:hover:not(.active) {
		
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:1px solid;
			border-collapse:collapse;
			}
		th{
			font-size:30px;
			padding:18px;
		}
		
		td{
			font-size:28px;
			color: green;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
				font-family:MONOTYPE CORSIVA;
		}
		th,td{
			border-collapse:collapse;
			border:1px groove;
		}
		body{
			background-image:url("images/b9.png");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
			background: white;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		.btn {
			background-color:black;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
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
	
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Amount</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="glow-on-hover"> Transfer To</button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="buttons">
		<a href="ministatement.php">
		<button class="glow-on-hover">Mini Statement</button>
		</a>
	</div>
               


    </body>
</html>