<?php
	include_once('db.php');
	
	$Cname = $_POST['Cname'];
	$Ccontact = $_POST['Ccontact'];
	$Ccomplaint = $_POST['Ccomplaint'];
	
if (mysqli_query($conn,"INSERT INTO divulgoTable VALUES ('$Cname', '$Ccontact','$Ccomplaint')"))
echo "success";
else
echo "failed";
?>