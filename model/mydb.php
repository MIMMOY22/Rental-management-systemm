

<?php
class MyDB{

    function openCon(){
        $conn = new mysqli("localhost", "root", "", "rms");
        return $conn;

    }

    function getAllUsersAds($tablename, $conn)
{
    $sql="SELECT * FROM $tablename";
    $result = $conn->query($sql);
    return $result;
}

function deleteAd($tablename, $conn, $email)
{
    $sql= "DELETE FROM $tablename WHERE email = '$email' ";
    $result=$conn->query($sql);
    return $result;
    
}












    
}

?>