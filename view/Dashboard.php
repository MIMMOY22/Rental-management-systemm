<?php
include "../control/ProfileProcess.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>

  <link rel="stylesheet" href="../css/dashboard.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
<script src="../js/profilejquery.js"></script>
 
<div id="header">

  <div class="header">
        <a href="HomePage.php"><h2 class="u-name">Rent <b>World</b></a> </h2>
  </div>

    <div id="search">
      <!-- <div>
      <input id="text" type="text" name="search" placeholder="Search..">
    </div> -->
    <div id="logout">
      <a href="../control/LogoutProcess.php" >Logout</a>
    </div>
  </div>

</div>
  <div class="main-body">
      <div class="">
        <nav class="side-bar">
          <div class="user-p">
           <a href="CusProfile.php"> <img src="<?php echo $pic;?>">
            <h4><?php echo $name; ?></h4></a>
          </div>

          <ul>
            <li>
              <a id="js-div1" href="#products.php">
                
                <span>Available for Rents</span>
              </a>
            </li>
            <li>
              <a id="js-div2" href="#CusProfile.php">
                
                <span>View Profile</span>
              </a>
            </li>
            <li>
              <a id="js-div3" href="#">
                
                <span>Card</span>
              </a>
            </li>

            <li>
              <a id="js-div5" href="#">
               
                <span>Search</span>
              </a>
            </li>
            <li>
              <a id="js-div4" href="#search.php">
                
                <span>Contact Us</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div id="bodyarea-div">
            <h3> Choose from left side bar </h3>
            <p id="tips">
                    
            </p>
      </div>

  </div>
</body>

</html>