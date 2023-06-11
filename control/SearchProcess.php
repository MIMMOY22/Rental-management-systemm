<?php
include ("../model/searchdb.php");

$name=$_REQUEST["text"];

$mydb= new searchAds();
$conobj=$mydb->openCon();
$result=$mydb->searchAllAds("myad", $name,$conobj);
if($result->num_rows > 0)
{
    while($row=$result->fetch_assoc())
    {
        $tc=$row["Tittle"];
        $tn=$row["Description"];
        $r=$row["Rent"];
        
        echo "Title: " .$tc."<br>" ."About: " .$tn."<br>"."Price: " .$r;
    }
}
else
{
    echo "no data found";
}


?>