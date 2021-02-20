<html>
<head>
    <title>Banking System</title>
   
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:#8cbed6;
	}
	body
	{
		text-align:center;
	}
	body{
		background-image:url("images/b6.png");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
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
  .primary_btn {
	width: 250px;
    height:50px;
    display: inline-block;
    background: transparent;
    font-weight:bold;
    padding-left:50px;
    color:white;
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 48px;
    border: 2px solid #E0FFFF;
    border-radius: 20px;
    outline: none !important;
    box-shadow: none !important;
    text-align: center;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 300ms linear 0s; }
    .primary_btn:hover {
     background:#E0FFFF;
	 color: #000;
	 font-weight:bold;
     }
    .primary_btn.yellow_btn {
    background: #fdbb00 !important;
    border: 1px solid #fdbb00 !important;
    color: #000000; }
    .primary_btn.yellow_btn:hover {
      background: transparent !important; 
	}
    
	.section{
		padding-left:780px;
		padding-top:180px;
	}
	
	</style>
</head>
<body >

	<div class="header">
       <br>
    <ul>
        <li><a href="index.php">Home</a></li>
		<li><a href="getdetail.php">View User </a></li>
		<li><a href="transfer.php">Money Transfer</a></li>
		<li><a href="transaction.php">All Transaction</a></li>
	</ul> 
	    
       <h1 style=" font-family:MONOTYPE CORSIVA; font-size:65px;color:#E0FFFF; margin-top:15px; margin-left:-130px">&nbsp;&nbsp;&nbsp; Online Banking System </h1>
    </div>
        <div class="section">
            <table>
                
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" type="button"  href="getdetail.php">View users</button>
                </a>

               
                </tr>

                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn"  type="button">Money Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" type="button">All Transaction</button>
               </a>

            </table>
		</div>
	           
</body>
</html>