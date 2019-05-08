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
			<li><a href="bookuser.php">Booking</a></li> /
			<li class="active">Booking Details</li>
			</ul>
			
			<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
			<th>Client</th>
			<th>Matric ID</th>
			<th>Date</th>
			<th>Time</th>
			<th>Service</th>
			<th>A la carte</th>
		</tr>
	</thead>
	<tbody>
		
			<?php
                // Include / load file dbase.php
                include "admin/dbase.php";

                // Buat query untuk menampilkan data siswa sesuai limit yang ditentukan
                $sql = $db->prepare("SELECT * FROM booking");
                $sql->execute(); 
				
                while ($row = $sql->fetch()) { // Ambil semua data dari hasil eksekusi $sql
                ?>
			<tr class="record">
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['clientID']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['time']; ?></td>
				<td><?php echo $row['service']; ?></td>
				<td><?php echo $row['alacarte']; ?></td>
			</tr>
			<?php
				}
			?>
		
	</tbody>
	
</table>
<div class="clearfix"></div>
</div>
</div>
</div>

</body>
</html>