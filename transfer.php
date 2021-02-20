<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-image:url("images/b9.png");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		background-color:white;
		display:inline-block;
		padding:50px;
		border:2px ridge;
		font-size:17pt;
		font-family:MONOTYPE CORSIVA;
		color:green;
		font-weight:bold;
	}
	.ho{
		padding-top:50px;
	}
	
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		font-size:17px;
		font-weight:bold;
		background:#7BCCB5;
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
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Janu"){
				 var arr=["Vishu","Pratham","Palak","Pooja","Het","Ravija","Krishiv","Heena","Vivan"];
				 }
				 else if(a==="Vishu"){
					var arr=["Janu","Pratham","Palak","Pooja","Het","Ravija","Krishiv","Heena","Vivan"];
				}
				else if(a==="Pratham"){
					var arr=["Janu","Vishu","Palak","Pooja","Het","Ravija","Krishiv","Heena","Vivan"];
				}
				else if(a==="Palak"){
					var arr=["Janu","Vishu","Pratham","Pooja","Het","Ravija","Krishiv","Heena","Vivan"];
				 }
				 else if(a==="Pooja"){
					var arr=["Janu","Vishu","Pratham","Palak","Het","Ravija","Krishiv","Heena","Vivan"];
				 }
				 else if(a==="Het"){
					var arr=["Janu","Vishu","Pratham","Palak","Pooja","Ravija","Krishiv","Heena","Vivan"];
				 }
				 else if(a==="Ravija"){
					var arr=["Janu","Vishu","Pratham","Palak","Pooja","Het","Krishiv","Heena","Vivan"];
				 }
				 else if(a==="Krishiv"){
					var arr=["Janu","Vishu","Pratham","Palak","Pooja","Het","Ravija","Heena","Vivan"];
				 }
				 else if(a==="Heena"){
					var arr=["Janu","Vishu","Pratham","Palak","Pooja","Het","Ravija","Krishiv","Vivan"];
				 }
				 else if(a==="Vivan"){
				 var arr=["Janu","Vishu","Pratham","Palak","Pooja","Het","Ravija","Krishiv","Heena"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
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
	<h1 style=" font-family:MONOTYPE CORSIVA;color:black; margin-top:5px; margin-left:80px;font-size:75px">Transfer Money</h1><br>
	</div>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Customer Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size:17pt;font-family:MONOTYPE CORSIVA;color:'#F70D1A'; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Janu">Janu</option>
			<option value="Vishu">Vishu</option>
			<option value="Pratham">Pratham</option>
			<option value="Palak">Palak</option>
			<option value="Pooja">Pooja</option>
			<option value="Het">Het</option>
			<option value="Ravija">Ravija</option>
			<option value="Heena">Heena</option>
			<option value="Krishiv">Krishiv</option>
			<option value="Vivan">Vivan</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size:17pt;font-family:MONOTYPE CORSIVA; color:'#F70D1A';height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size:17pt;font-family:MONOTYPE CORSIVA; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
	  <input class="button" onMouseOver="this.style.color='black'"onMouseOut="this.style.color='#F70D1A'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="glow-on-hover">HOME</button>
	</a>
</div>
</body>
</html>