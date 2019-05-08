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
    <link href="admin/css/bootstrap-responsive.css" rel="stylesheet">

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
			<li class="active"><a href="service.php"><i class="icon-list-alt icon-2x"></i>Service</a></li>
			<li><a href="bookuser.php"><i class="icon-calendar icon-2x"></i>Booking</a></li>	
				</ul>                               
          </div><!--/.well -->
        </div><!--/span-->
		
		<div class="span10">
		<div class="contentheader">
			<i class="icon-list-alt"></i>  Service
			</div>
			<ul class="breadcrumb">
			<li><a href="home.php">Dashboard</a></li> /
			<li  class="active">Service Details</li>
			</ul>

      <div class="form">
		<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
		<tr><th>Full Service</th></tr>
		</thead>
			<tbody>

				<tr class="record">
				<td>Engine Oil & Filter Change</td></tr>
				<tr class="record">
				<td>Tire Rotation</td></tr>
				<tr class="record">
				<td>Replace Engine Air Filter</td></tr>
				<tr class="record">
				<td>Replace A/C Cabin Filter</td></tr>
				<tr class="record">
				<td>Battery System Service Clean Protect and Test Voltage</td></tr>
				<tr class="record">
				<td>Complete Fuel System Service Throttle Body, Injectors & Valves</td></tr>
				<tr class="record">
				<td>Lubricate Chassis Bushes and Boots</td></tr>
				<tr class="record">
				<td>Lubricate door locks, latches & hinges</td></tr>
				<tr class="record">
				<td>Lubricate weather strips and seals</td></tr>
				<tr class="record">
				<td>Lubricate Propeller Shaft U Joints (If equipped)</td></tr>
				<tr class="record">
				<td>Clean and adjust Rear Brakes</td></tr>
				<tr class="record">
				<td>Re-torque Chassis Boits & Fasteners</td></tr>
				<tr class="record">
				<td>Re-torque Drive Shaft Bolts</td></tr>
				<tr class="record">
				<td>Adjust all tyre pressure</td></tr>
				<tr class="record">
				<td>Top of all fluids</td></tr>
				<tr class="record">
				<td>On-Board Health Check</td></tr>
				<tr class="record">
				<td>Wheel alignment check (if need adjust)</td></tr>
				<tr class="record">
				<td>Drivability check</td></tr>
				<tr class="record">
				<td>Multi Point Inspection</td></tr>
				<tr class="record">
				<td>Steam Clean Engine Compartment</td></tr>
				<tr class="record">
				<td>Labour charges</td></tr>
				<tr class="record">
				<th style="float:right">PACKAGE PRICE RM1540</th></tr>
			</tbody>
		</table>
	</div>
	
	<div class="form">
		<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
		<tr><th>Intermediate Service</th></tr>
		</thead>
			<tbody>
				<tr class="record">
				<td>Engine Oil & Filter Change</td></tr>
				<tr class="record">
				<td>Tire Rotation</td></tr>
				<tr class="record">
				<td>Replace Engine Air Filter</td></tr>
				<tr class="record">
				<td>Replace A/C Cabin Filter</td></tr>
				<tr class="record">
				<td>Re-torque Chassis Boits & Fasteners</td></tr>
				<tr class="record">
				<td>Re-torque Drive Shaft Bolts</td></tr>
				<tr class="record">
				<td>Clean and adjust Rear Brakes</td></tr>
				<tr class="record">
				<td>Adjust Tire Pressure</td></tr>
				<tr class="record">
				<td>Battery Test & Service Terminals</td></tr>
				<tr class="record">
				<td>Top of all fluids</td></tr>
				<tr class="record">
				<td>On-Board Health Check</td></tr>
				<tr class="record">
				<td>Lubricate Chassis Bushes and Boots</td></tr>
				<tr class="record">
				<td>Drivability check</td></tr>
				<tr class="record">
				<td>Labour charges</td></tr>
				<tr class="record">
				<td>Inspect / Adjust Following items: (Additional if replacement is needed)<br><br>
				brake lining/drums and pads<br>
				A/C cabin filter<br>
				Fuel line, fuel tank or hoses<br>
				Multipoint inspection</td></tr>
				<tr class="record">
				<th style="float:right">PACKAGE PRICE RM840</th></tr>
			</tbody>
		</table>
	</div>

	
    <div class="form">
		<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
		<tr><th>Service</th></tr>
		</thead>
			<tbody>
				<tr class="record">
				<td>Engine Oil & Filter Change</td></tr>
				<tr class="record">
				<td>Tire Rotation</td></tr>
				<tr class="record">
				<td>Replace Engine Air Filter</td></tr>
				<tr class="record">
				<td>Replace A/C Cabin Filter</td></tr>
				<tr class="record">
				<td>Test Battery</td></tr>
				<tr class="record">
				<td>Inspect brake linings</td></tr>
				<tr class="record">
				<td>Top of all fluids</td></tr>
				<tr class="record">
				<td>Multipoint Inspection</td></tr>
				<tr class="record">
				<td>Adjust Tire Pressure</td></tr>
				<tr class="record">
				<td>Reset Maintenance Required Warning Indicator</td></tr>
				<tr class="record">
				<td>Labour charges</td></tr>
				<tr class="record">
				<th style="float:right">PACKAGE PRICE RM590</th></tr>
			</tbody>

		</table>
	</div>
	
	<div class="form" method=""  action="">
		<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
		<tr><th>A LA CARTE</th>
		<th>PRICE (RM)</th></tr>
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
				<td><?php echo $row['alacarte']; ?></td>
				<td><?php echo $row['cost']; ?></td>
			</tr>	
			</tbody>
			<?php
				}
			?>
		</table>
	</div>

</div> 
</div>
</div>
</div>

</script>
</body> 
</html>