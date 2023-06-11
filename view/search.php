<?php 
	session_start();
	if(empty($_SESSION['uname']))
	{
		header("Location: ../view/CustomerLog.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/search.css">
	<script src="../js/MyScript.js"></script>
</head>
<body>
	<div id="container">
		<p>Rental info:</p>
		<div id="search-div">
		<input list="ads-list" id="text" name="search" placeholder="Search.." onkeyup="fetchAds()">
		<datalist id="ads-list">
			<option value="bus">
			<option value="truck">
			<option value="bike">
			<option value="flat">
			<option value="car">
		</datalist>
		<p id="print"></p>
		</div>
	</div>
</body>
</html>




