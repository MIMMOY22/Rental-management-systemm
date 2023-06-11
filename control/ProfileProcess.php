<?php 
include "../model/cusdb.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location: ../view/CustomerLog.php");
}

	 $cusdb= new CusDB();
	 $conobj= $cusdb->openCon();
	$result=$cusdb->getUserInfo("cusreg",$_SESSION['uname'],$conobj);
	if($result->num_rows >0)
	{
	 while($row=$result->fetch_assoc())
		{
			 $name=$row["Username"];
			 $email=$row["Email"];
			 $phn=$row["PhoneNumber"];
			 $nid=$row["NID"];
			 $nation=$row["Nationality"];
			 $dob=$row["DateofBirth"];
			 $pic=$row["Picture"];
			 $gender=$row["Gender"];
			 $address=$row["Address"];

			 
		}
	}
	// $fileData=file_get_contents("../data/jsondata.json");
	// $phpObj=json_decode($fileData);
	// foreach ($phpObj as $value) 
	// {
	// 	if($_SESSION['uname']==$value->name)
	// 	{
	// 		$name=$value->name;
	// 		$email=$value->email;
	// 		$phone=$value->phone;
	// 		$dob=$value->dob;	
	// 		$gender=$value->gender;
	// 		$nid=$value->nid;
    //         $nationality=$value->nationality;
	// 		$address=$value->address;
    //     }
		
	// }


?>