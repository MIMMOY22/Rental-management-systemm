<?php
include("../model/cusdb.php");
$nameErr="" ;
$mailErr="" ;
$phnErr="" ;
$nidErr="" ;
$nationErr="" ;
$dobErr="" ;
$picErr="";
$genErr="" ;
$addErr="" ;
$passErr="";
$cpassErr="";

if(isset($_REQUEST["name"]))
{
    $name= $_REQUEST["name"];
    $cusdb= new CusDB();
		$conobj= $cusdb->openCon();
		$result=$cusdb->getUserInfo("cusreg",$name,$conobj);
		//$fatch=mysqli_fetch_array($result);
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
            $password=$row['Password'];
	        $cpassword=$row['ConfirmPassword'];
		}
		}
}

if(isset($_REQUEST['update']))
{
	$name=$_REQUEST['uname'];
	$email=$_REQUEST['uemail'];
	$phn=$_REQUEST['uphn'];
    $nid=$_REQUEST['unid'];	
    $nation=$_REQUEST['ucountry'];
    $dob=$_REQUEST['udob'];
	$pic=$_FILES['upic']['tmp_name'];
    //$gender=$_REQUEST['ugender'];
    $address=$_REQUEST['uadd'];
	$password=$_REQUEST['upass'];
	$cpassword=$_REQUEST['urepass'];
	$hasError=0;


    //Name
    if(empty($name))
    {
        $nameErr = "<html><font color='red'>*Name required</font></html>";
        $hasError=1;
    }
    else
    {
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name))
        {
            $nameErr = "<html><font color='red'>*Only letter and white space allowed</font></html>";
            $hasError=1;
        }
        elseif(strlen($name)<=2)
        {
            $nameErr = "<html><font color='red'>*Name must have atleast 3 charecter</font></html>";
            $hasError=1;	
        }
        else{
            echo"";
        }

    }


    //Email
    if($email=="")
    {
        $mailErr = "<html><font color='red'>*Email is required</font></html>";
        $hasError=1;
    }
    else
    {
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (!preg_match ($pattern, $email))
        {  
            $mailErr = "<html><font color='red'>*Invalid Email!</font></html>";  
            $hasError=1;
        }
        else
        {
            // $fileData=file_get_contents("../data/jsondata.json");
            $phpObj=json_decode($fileData);
            foreach ((array)$phpObj as $value) 
            {
                if($value->email==$_REQUEST['uemail'])
                {
                    $mailErr = "<html><font color='red'>*Email already exist  </font></html>";
                    $hasError=1;
                }
            }

        }
    }

    //Mobile
    if(empty($phn))
    {
        $phnErr = "<html><font color='red'>*Number required</font></html>";
        $hasError=1;
    }


    //NID
    if(empty($nid))
    {
        $nidErr = "<html><font color='red'>*NID required</font></html>";
        $hasError=1;
    }
    else
    {
            
        if(!preg_match('/^[0-9]{10}+$/', $nid)) 
        {
            $nidErr = "<html><font color='red'>*Invalid NID Number!</font></html>";
            $hasError=1;
        } 
        else 
        {
            // $fileData=file_get_contents("../data/jsondata.json");
            $phpObj=json_decode($fileData);
            foreach ((array)$phpObj as $value) 
            {
                if($value->nid==$_REQUEST['unid'])
                {
                    $nidErr = "<html><font color='red'>*NID already exist </font></html>";
                    $hasError=1;
                }
            }
            
        }
    }


    //Nationality
    if($nation=="")
    {
        $nationErr = "<html><font color='red'>*Country required</font></html>";
        $hasError=1;
    }



    //Date of Birth
    if(empty($dob))
    {
    $dobErr = "<html><font color='red'>*Date of birth required</font></html>";
    $hasError=1;
    }
    else
    {
        $bday = new DateTime($dob);
        $today = new DateTime(date('m.d.y'));
        if($bday>$today)
        {
            $dobErr = "<html><font color='red'>*Invalid Date of birth!</font></html>";
            $hasError=1;
        }

    }


    //Photo
    if(!empty($pic))
	{
		
	
		
			$file="../upload/".$_FILES['upic']['name'];
			move_uploaded_file($_FILES['upic']['tmp_name'],$file);	
			
	}



    //Gender
    if(isset($_REQUEST["ugender"]))
    {
        
        echo "";
    }
    else
    {
        $genErr = "<html><font color='red'>*Gender required</font></html>";
        $hasError=1;
    }




    //Address
    if($_REQUEST['uadd']=="")
    {
        $addErr = "<html><font color='red'>*Address required</font></html>";
        $hasError=1;
    }
    else
    {
        $address=$_REQUEST['uadd'];
        
    }


    //Password
    if($password!="") 
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if(strlen($password) < 8)
        {
            $passErr = "<html><font color='red'>*Password must contain 8 letters</font></html>";
            $hasError=1;
        }
        elseif(!$uppercase) 
        {
            $passErr = "<html><font color='red'>*Password must include one uppercase letter</font></html>";
            $hasError=1;
        }
        elseif(!$lowercase)
        {
            $passErr = "<html><font color='red'>*Password must include one lowercase letter</font></html>";
            $hasError=1;
        }
        elseif(!$number)
        {
            $passErr = "<html><font color='red'>*Password must include one number</font></html>";
            $hasError=1;
        }
        elseif(!$specialChars)
        {
            $passErr = "<html><font color='red'>*Password must include one specialChars letter</font></html>";
            $hasError=1;
        }
        else
		{
			echo "";
			
		}

    }
    else
    {
        $passErr = "<html><font color='red'>*Password required</font></html>";
        $hasError=1;
    }

    //Confirm-Password
    if($cpassword!="")
    {
        if($password!=$cpassword)
        {
            $cpassErr = "<html><font color='red'>*Password and Confirm password must be same</font></html>";
            $hasError=1;
        }
    }
    else
    {
        $cpassErr = "<html><font color='red'>*Confirm password required</font></html>";
        $hasError=1;
    }


    //
    if($hasError==0)
    {
        $cusdb = new CusDB();
        $conobj= $cusdb->openCon();
        $result=$cusdb->updateInfo("cusreg",$_REQUEST["name"],$_REQUEST["uemail"],
        $_REQUEST["uphn"],$_REQUEST["unid"],$_REQUEST["ucountry"],$_REQUEST["udob"],
        "../upload/".$_FILES['upic']['name'],$_REQUEST["ugender"],$_REQUEST["uadd"],
        $_REQUEST["upass"],$_REQUEST["urepass"],$conobj);
        if($result==TRUE)
            {
                echo "Successfull";
                header("Location: ../view/Dashboard.php");
            }
        else
            {
                echo "Error".$conobj->error;
            }
 
        
    }
}

?>