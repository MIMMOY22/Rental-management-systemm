<?php
include "../control/ProfileProcess.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>

<body>

<div>


<div class="card">
  <img src="<?php echo $pic ;?>" alt="<?php echo $name; ?>" style="width:100%">

  <h1><?php echo $name; ?></h1>

  <p class="title"><?php echo $nation;?><br>
  					<?php echo $gender; ?><br>
  			Stay in <?php echo $address;?><br>
  			Contact:<?php echo $email; ?><br>
					<?php echo $phn; ?><br>
  			NID:    <?php echo $nid ?><br>
  			Date of Birth:<?php echo $dob; ?>
  </p>
  
  <p><a href="EditCusProfile.php?name=<?php echo $name;?>"><button>Edit Profile</button></a></p>
</div>

<div>
		<p id="footer">Copyright &copy <?php echo date("Y"); ?>. ALL Rights Reserved</p>
</div>

</div>
</body>
</html>