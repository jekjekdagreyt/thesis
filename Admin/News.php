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
<head>
	<title></title>
</head>
<body>
		NEWS
</body>
</html>