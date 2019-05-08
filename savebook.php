<?php
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'umpservice'; 
$tbl_name       = 'booking'; // Table name 

$connection = mysqli_connect("$db_host", "$db_user", "$db_pass")or die("cannot connect"); 
mysqli_select_db($connection, "$db_database")or die("cannot select DB");

	$name = $_POST['name'];
	$clientID = $_POST['clientID'];
	$licencePlate = $_POST['licencePlate'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$service = $_POST['service'];
	$alacarte = $_POST['alacarte'];
	
	// Loop through the array of checked box values ... 
$chk=""; 
$flag=0; 
foreach($alacarte as $entry){ 
$chk .= $entry.","; 
$flag=1; 
} 
if($flag==1){ 
$chk=rtrim($chk); 
} 

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(name,clientID,licencePlate,date,time,service,alacarte) VALUES ('$name','$clientID','$licencePlate','$date','$time','$service','$chk')";
$result=mysqli_query($connection, $sql); 

// if successfully insert data into database, displays message "Successful". 
if($result){ 
echo "Successful"; 
echo "<BR>"; 
header("location: bookuser.php");
} 

else { 
echo "ERROR"; 
} 
?> 
