<?php
include "../control/myads_process.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title></title>

  <link rel="stylesheet" href="../css/products.css">
</head>

<body >
<div id="body">
<?php
if($result->num_rows > 0)
{
  
    while($row=$result->fetch_assoc()){

        echo "<div class='card'>";
        echo "<img src='".$row["File"]."' alt=".$row["Tittle"]." width='100px' height='100px' />";
        
        echo " <h1 class='title'>".$row["Category"]."</h1> ";
        echo " <p>".$row["Tittle"]."</p>";
        echo " <p>". "Description: ".$row["Description"]."</p>";
        echo " <p class='price'>". "Price: ".$row["Rent"]."</p>";
        echo " <p><button>Rent</button></p>";
    
    // <!-- // echo "<a class='btn danger' href='deletead.php?email=".$row["Email"]."'>Delete</a>"; -->
        echo "</div>";
       
}
  
}
else
{
    echo "no data available";
}
?>
</div>
</body>
</html>