<?php
class searchAds
{
	function openCon()
	{
		$conn = new mysqli("localhost","root","","rms");
		return $conn;
	}
	function searchAllAds($tablename,$name,$conn)
	{
		$sql="SELECT * FROM $tablename WHERE Category='$name'";
		$result=$conn->query($sql);
		return $result;
	}
	
}
?>