<?php
	 $dbServername = "localhost";
         $dbUsername = "root";
          $dbPassword = "";
           $dbName = "adminaccount";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn ){
    die("Connection failed :" . mysqli_connect_error() );

    
}	
	session_start();
	if(!$_SESSION['m_un']){
		header('Location:index.php');
		die();
	}
?>

<!DOCTYPE html>
<html>
		<link rel="stylesheet" type="text/css" href="css/Astyle.css">	
		<meta http-equiv="Cache-Control" content="no-store"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>OneBaranggay</title>
</head>
<body>
		<div id= "Acontainer">
			<div class = "header">
				<div id="mySidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  
				  <a class = "navlink" href="#">News</a>
				  <a class = "navlink" href="#">Officials</a>
				  <a class = "navlink" href="#">Staff</a>
				  <a class = "navlink" href="#">Residents</a>
				  <a class = "navlink" href="#">Transactions</a>
				  <a class = "navlink" href="#">Complaints</a>
				 
				  <a class = "navlink" href = "../index.php">Sign Out</a>
				</div>

				<span class = "Menuw" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

				<div class="logo"></div>
					<div class="headername">
						<h1 class="headernahame">BRGY. MANSILINGAN</h1>
					</div>
			</div>
			<div class = "content">
				<div class = "contentupper">
						<h1>DASHBOARD</h1>
				</div>
				<div class = "contentlower">
					<div class = "dashcontent">
					<div class = "dashleft">NEWS</div>
					<div class = "dashright">THUMBNAIL</div>
				</div>
				<div class = "dashcontent">
					<div class = "dashleft">Officials</div>
					<div class = "dashright">THUMBNAIL</div>
				</div>
				<div class = "dashcontent">
					<div class = "dashleft">Staff</div>
					<div class = "dashright">THUMBNAIL</div>
				</div>
				<div class = "dashcontent">
					<div class = "dashleft">Residents</div>
					<div class = "dashright">THUMBNAIL</div>
				</div>
				<div class = "dashcontent">
					<div class = "dashleft">Transactions</div>
					<div class = "dashright">THUMBNAIL</div>
				</div>
				<div class = "dashcontent">
					<div class = "dashleft">Complaints</div>
					<div class = "dashright">THUMBNAIL</div>
				</div>
				</div>
			</div>
			<div class = "footer">
				<h3>email us at : theonicolasclarito6@gmail.com</h3>
			</div>
		</div>

		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			}
		</script>
</body>
</html>