<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>UMP Vehicle Service Centre</title>
	<link rel="shortcut icon" type="image/x-icon" href="admin/images/aec.ico" />
	
	<link href="admin/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="admin/css/DT_bootstrap.css">
	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

<link href="admin/css/style.css" media="screen" rel="stylesheet" type="text/css" />
	
<script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</script>
</head>

<body>
<?php include('navfixed.php');?>

<div class="container-fluid">
      <div class="row-fluid">
	<div class="span2">
          <div class="well sidebar-nav">
                     <ul class="nav nav-list">
			<li>
			 <div class="hero-unit-clock">
			<form name="clock">
			<font color="white"><br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
            <li><a href="home.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li>             
			<li><a href="profile.php"><i class="icon-user icon-2x"></i> Profile </a></li>
			<li><a href="service.php"><i class="icon-list-alt icon-2x"></i>Service</a></li>
			<li class="active"><a href="bookuser.php"><i class="icon-calendar icon-2x"></i>Booking</a></li>

				</ul>                               
          </div><!--/.well -->
        </div><!--/span-->
	<div class="span10">
	<div class="contentheader">
			<i class="icon-dashboard"></i> Booking
			</div>
			<ul class="breadcrumb">
			<li><a href="home.php">Dashboard</a></li> /
			<li class="active">Booking</li>
			</ul>

<div class="clearfix"></div>
</div>
</div>
</div>
<a href="viewbook.php"><Button type="submit" class="btn btn-info" style="float:right; width:200px; height:35px;" /><i class="icon-plus-sign icon-large"></i> View Booking</button></a><br><br>
<div class="forms">
<?php
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysqli_connect("localhost", "root", "");
			// Selecting Database
			$db = mysqli_select_db($connection, "umpservice");
			// Storing Session
			$user_check=$_SESSION['login_user'];
			// SQL Query To Fetch Complete Information Of User
			$ses_sql=mysqli_query($connection, "select * from client where username='$user_check'");
			$row = mysqli_fetch_assoc($ses_sql);
			$login_session =$row['username'];
?>

<form class="bookuser" action="savebook.php" method="post">
<center><h4><i class="icon-edit icon-large"></i>Booking</h4></center>
<hr>
<div id="ac">
<input type="hidden" name="memi" value="<?php echo $id; ?>" />
<span>Name : <input type="text" style="width:290px; height:20px; float:right;" name="name" value="<?php echo $row['name']; ?>" /></span>
<span>Department : <input type="text" style="width:290px; height:20px; float:right;" name="depart" value="<?php echo $row['depart']; ?>" /></span>
<span>Matric ID : <input type="text" style="width:290px; height:20px; float:right;" name="clientID" value="<?php echo $row['clientID']; ?>" /></span>
<span>licence Plate : <input type="text" style="width:290px; height:20px; float:right;" name="licencePlate" value="<?php echo $row['licencePlate']; ?>" /></span>

<span>Date : <input type="date" style="width:290px; height:20px; float:right;" name="date" Required/><br></span>
<span>Time : <select name="time"  style="width:305px; height:30px; float:right;">
					<option value="1000">10:00AM</option>
					<option value="1030">10:30AM</option>
					<option value="1100">11:00AM</option>
					<option value="1130">11:30AM</option>
					<option value="1200">12:00PM</option>
					<option value="1230">12:30PM</option>
					<option value="1300">1:00PM</option>
					<option value="1330">1:30PM</option>
					<option value="1400">2:00PM</option>
					<option value="1430">2:30PM</option>
					<option value="1500">3:00PM</option>
					<option value="1530">3:30PM</option>
					<option value="1600">4:00PM</option> 
					<option value="1630">4:30PM</option>
					<option value="1700">5:00PM</option>
					<option value="1730">5:30PM</option>
					<option value="1800">6:00PM</option>
				</select><br></span>
<span>Service : <select id = "packagecost" name="service"  style="width:305px; height:30px; float:right;">
					<option>...</option>
					<option>Full Service (RM540)</option>
					<option>Intermediate Service (RM380)</option>
					<option>Normal Service (RM160)</option>
				</select><br></span>
<span> 
		<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
		<tr><th>A LA CARTE</th>
			<th>Cost</th></tr>
		</thead>
			<tbody>
			<?php
                // Include / load file dbase.php
                include "admin/dbase.php";

                // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
                $sql = $db->prepare("SELECT * FROM alacarte ");
                $sql->execute(); 
				
                while ($row = $sql->fetch()) { // Ambil semua data dari hasil eksekusi $sql
                ?>
			<tr class="record">
				<td><input type="checkbox" name="alacarte[]" value="<?php echo $row['alacarte']; ?> - RM<?php echo $row['cost']; ?>" /><?php echo $row['alacarte']; ?></td>
				<td><a name="cost"> RM<?php echo $row['cost']; ?></a></td>
				
			</tbody>
			<?php
				}
			?>
			
		</table></span>

<div style="float:right; margin-right:10px;">

<button class="btn btn-success btn-block btn-large" style="width:267px;" onclick="myFunction()"><i class="icon icon-save icon-large"></i> Save Changes</button>
<script type="text/javascript">
	function myFunction() {
		
		var cost = document.getElementById
		
		alert("The total price is ");
	}
}
</script>

</div>
</div>
</form></div>


<?php

?>

</div>
</div>
</div>
</body>
</html>