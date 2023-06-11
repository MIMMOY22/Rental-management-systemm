<?php
class CusDB{

function openCon()
{
$conn = new mysqli("localhost","root","","rms");
return $conn;
}

function insertData($tablename, $name,$email,$phn,$nid,$nation,$dob,$pic,
$gender,$address,$password,$cpassword,$conn)
{
    $sql="INSERT INTO $tablename (Username,Email,PhoneNumber,NID,Nationality,
    DateofBirth,Picture,Gender,Address,Password,ConfirmPassword)
    VALUES ('$name','$email','$phn','$nid','$nation','$dob','$pic',
    '$gender','$address','$password','$cpassword')";
    $result=$conn->query($sql);
    return $result;
}

function checkUser($tablename,$name,$password,$conn)
{
    $sql="SELECT * FROM $tablename WHERE Username='$name' AND 
          password='$password'";
          $result=$conn->query($sql);
          return $result;
}
function getUserInfo($tablename,$name,$conn)
    {
         $sql="SELECT * FROM $tablename WHERE Username='$name'";
         $result=$conn->query($sql);
         return $result;
    }
    function updateInfo($tablename,$uname,$uemail,$uphone,$unid,$nation,$udob,$upic,$ugender,$address,$upass,$ucpass,$conn)
	{
		$sql="UPDATE $tablename SET Email='$uemail',PhoneNumber='$uphone',NID='$unid',Nationality='$nation',
        DateofBirth='$udob',Picture='$upic',Gender='$ugender',Address='$address',Password='$upass',
        ConfirmPassword='$ucpass' WHERE Username='$uname'";
		$result=$conn->query($sql);
		return $result;	
	}

}


?>