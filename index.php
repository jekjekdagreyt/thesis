<?php
	
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbAdmin = "adminaccount";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbAdmin);

if(!$conn ){
	die("Connection failed :" . mysqli_connect_error() );
}


?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>Baranggay Mansilingan</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<meta http-equiv="Cache-Control" content="no-store"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
		<div id="main-container">
				<div class="header">
					<div class="logo"></div>
					<div class="headername">
						<h1 class="headernahame">BRGY. MANSILINGAN</h1>
					</div>
				</div>
				<div class="body">
					<div class = "login">
						<div class = "loginheader">
							<h1 class="loginheadername">LOGIN</h1>
						</div>
						<div class = "loginbody">
							<form action="login.php" method= "post"> 
								<h3 class = "loginformname">  Username </h3>
								<input type="text" name="user" id ="user" class="loginform" placeholder="Username..." required="">
								<h3 class = "loginformname"> Password </h3>
								<input type="password" name="pass" id ="pass" class="loginform" placeholder="Password..." required=""><br><br><br><br>
							
								<input type="submit" class="loginbutton" value = "Login">
								
							</form>
						</div>
				</form>
					</div>
					
				</div>
				<div class="footer">
					

				</div>
		</div>
		
</body>
</html>