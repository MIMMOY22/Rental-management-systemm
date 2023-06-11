<?php
include "../model/cusdb.php";
session_start();
if(!empty($_SESSION['uname']))
{
	header("Location:../view/Dashboard.php");
}
$nameErr="";
$mailErr="";
$passErr="";
$loginErr="";
$email="";
$password="";
$name="";
if(isset($_REQUEST['Login']))
{
	$name=$_REQUEST['uname'];
	$password=$_REQUEST['upass'];

	$match=0;
	if($name=="")
	{
		$nameErr = "<html><font color='red'>*Username required</font></html>";
	}
	else
	{
		
		if (!preg_match ("/^[a-zA-Z-' ]*$/", $name))
		{  
	    	$nameErr = "<html><font color='red'>*Invalid username!</font></html>"; 
		}
	}
	if($password=="")
	{
		$passErr = "<html><font color='red'>*Invalid Password</font></html>";
	}
	else
	{
		if($password!="") 
		{
			$uppercase = preg_match('@[A-Z]@', $password);
			$lowercase = preg_match('@[a-z]@', $password);
			$number    = preg_match('@[0-9]@', $password);
			$specialChars = preg_match('@[^\w]@', $password);

			if(strlen($password) < 8)
			{
				$passErr = "<html><font color='red'>*Password must contain 8 letters</font></html>";
			}
			elseif(!$uppercase) 
			{
				$passErr = "<html><font color='red'>*Password must include one uppercase letter</font></html>";
			}
			elseif(!$lowercase)
			{
				$passErr = "<html><font color='red'>*Password must include one lowercase letter</font></html>";
			}
			elseif(!$number)
			{
				$passErr = "<html><font color='red'>*Password must include one number</font></html>";
			}
			elseif(!$specialChars)
			{
				$passErr = "<html><font color='red'>*Password must include one specialChars letter</font></html>";
			}
			else
			{
				$loginErr = "<html><font color='red'>*UsernameEmail or Password dosen't match</font></html>";	
			}
		}	
	}
	if($name!="" && $password!="")
	{
		if(isset($_POST['remember']))
		{
		setcookie("uname",$name,time()+3600);
		setcookie("upass",$password,time()+3600);
		}
		else
		{
		setcookie("uname","");
		setcookie("upass","");
		}

        $cusdb= new CusDB();
		$conobj=$cusdb->openCon();
		$result=$cusdb->checkUser("cusreg",$_REQUEST["uname"],$_REQUEST["upass"],$conobj);
		if($result->num_rows>0)
		{
			$_SESSION["uname"]=$_REQUEST["uname"];
			header("Location:../view/Dashboard.php");
		}

		//  $fileData=file_get_contents("../data/jsondata.json");
		//  $phpObj=json_decode($fileData);
		//  foreach ($phpObj as $value) 
		//  {
		// 	if($value->name==$_REQUEST['uname'] && $value->password==$_REQUEST['upass'])
		// 	{
		// 		$match=1;

		// 		if(isset($_POST['remember']))
		// 		{
		// 		setcookie("uname",$name,time()+3600);
		// 		setcookie("upass",$password,time()+3600);
		// 		}
		// 		else
		// 		{
		// 		setcookie("uname","");
		// 		setcookie("upass","");
		// 		}

		// 		$_SESSION['uname']=$value->name;
		// 		header("Location: ../view/CusProfile.php");
			}
			
			
		 }
    

?>