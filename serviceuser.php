<!DOCTYPE html>
<html>
<head>
	<title>UMP Vehicle Service Centre</title>
	<link rel="shortcut icon" type="image/x-icon" href="admin/images/aec.ico" />
	
	<link href="admin/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="admin/css/DT_bootstrap.css">
	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin/css/slideshow.css">
	
    <link href="admin/css/bootstrap-responsive.css" rel="stylesheet">

<link href="admin/css/style.css" media="screen" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">

          <a class="brand" href="#"><b>UMP Service Centre</b></a>
         <div class="nav-collapse collapse">
            <ul class="nav pull-right">
				<li><b style="font-size:40px; color:#fff;">|</b></li>
				<li><a href="user.php">Home</a></li>
				<li><b style="font-size:40px; color:#fff;">|</b></li>
				<li class="active"><a href="serviceuser.php">Service</a></li>
				<li><b style="font-size:40px; color:#fff;">|</b></li>
				<li><a href="login.php">Login/Sign Up</a></li>
				<li style="width:150px;"><b style="font-size:40px; color:#fff;">|</b></li>
				<li> <b style="color:#fff; font-size:22px;"> <i class="icon-calendar icon-small"></i>
								<?php
								$Today = date('y:m:d',mktime());
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>

				</b></li><li><b style="font-size:40px; color:#fff;">|</b></li>
				<li><a href="index.php">Admin</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<!--<a href="index.php">Admin</a>-->
<header><div id="slideshow">
      <figure>
        <img src="admin/images/UMP.jpg" alt="">
        <figcaption>Established on 1st February 2008, that led by a group called the Automotive Focus Group which consists of FKM staff. In June 2009, AEC has moved 
		to UMP Pekan and is fully operational until now. </figcaption>
      </figure>
	  
      <figure>
        <img src="admin/images/AEC.jpg" alt="">
        <figcaption>AOTOMOTIVE ENGINEERING CENTRE (AEC) provide maintenance services for university vehicles, staffs and UMP students at reasonable rate.</figcaption>
      </figure>
	  
	  <figure>
        <img src="admin/images/Car.jpg" alt="">
		</figure>
	  <figure>
        <img src="admin/images/facebook.png" alt="">
		<figcaption>Make your reservation at UMP Car Service Centre now.</figcaption>
		</figure>
	  <script src="admin/js/slideshow.js"></script>
    </div></header>

 <div class="form">
		<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
		<tr><th>FULL SERVICE</th></tr>
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
		<tr><th>INTERMEDIATE SERVICE</th></tr>
		</thead>
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

	
    <div class="form" method=""  action="">
		<table class="table" id="resultTable" data-responsive="table" style="text-align: left;">
		<thead>
		<tr><th>NORMAL SERVICE</th></tr>
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
		<th>PRICE (RM)</th>
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
</body> 
</html>