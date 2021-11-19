<?php 

$host="localhost";
$user="root";
$password="";
$db="Login";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " V-ați autentificat cu succes";
        exit();
    }
    else{
        echo " Ați introdus o parolă incorectă";
        exit();
    }
        
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Logarea</title>
	<link rel="stylesheet" a href="css\stylelogin.css">
</head>
<body>
	<div class="container">
		<form>
			<div class="form-input">
				<input type="text" name="text" placeholder="Introduceți loginul"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>