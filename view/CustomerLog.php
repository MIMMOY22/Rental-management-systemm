<?php 
include "../Control/LogProcess.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Login </title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
<?php include "Header.php";?>

<div class=container>
<form id="form" method="POST">
	<div class="center">
</div>
<h4>SIGN IN</h4>

	<p id="massage"><small><?php echo $loginErr;?></small></p>
       <small><?php echo $nameErr;?></small></p>
       <small><?php echo $passErr;?></small></p>

	<input type="text" id="input-field" name="uname"
            value="<?php if(isset($_COOKIE["uname"])){echo $_COOKIE["uname"];}?>"
            size="25" placeholder="Enter Name"><br>
	

    <input type="password" id="input-field" name="upass"
            value="<?php if(isset($_COOKIE["upass"])){echo $_COOKIE["upass"];}?>"
            size="25" placeholder="Enter Password"><br>
    
	
	<div>
	<small><input type="checkbox" name="remember" value="">Remember Me</small>
	<input type="submit" class="button" name="Login" value="Login">
	</div>

	<small><label>Don't have an account?<a href="CustomerReg.php"><?php echo " "?> Sign Up</a></label></small>
</form>
</div>
<?php include "Footer.php"?>
</body>
</html>

