<?php include("HRheader.php"); ?>
<?php
  include_once('controller/connect.php');
  
  $dbs = new database();
  $db=$dbs->connection();
  $TotalEmp =mysqli_query($db,"select count(EmployeeId) as emp from employee where RoleId !='1' AND RoleId != '2' ");
  $TotalEmploId = mysqli_fetch_assoc($TotalEmp);
  $dept = mysqli_query($db,"select count(Positinid) as dept from position");
  $tdept = mysqli_fetch_assoc($dept);
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item" title="Home"><a href="index.php">Home</a></li>
</ol>
<!--four-grids here-->
		<div class="row" style="">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="HRemp_view.php">
									<div class="icon">
										<i class="glyphicon glyphicon-user" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>Total Employee</h3>
										<h4><?php echo(isset($TotalEmploId['emp']))?$TotalEmploId['emp']:"";?></h4>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="HRdept.php">
									<div class="icon">
										<i class="glyphicon glyphicon-th-large" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>Departments</h3>
										<h4><?php echo(isset($tdept['dept']))?$tdept['dept']:"";?></h4>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="HRrecruit_view.php">
									<div class="icon">
										<i class="glyphicon glyphicon-registration-mark" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>Recruitment</h3>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="HRnotice.php">
									<div class="icon">
										<i class="glyphicon glyphicon-bullhorn" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>Notice</h3>
									</div>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="HRhelp_desk.php">
									<div class="icon">
										<i class="glyphicon glyphicon-modal-window" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>HelpDesk</h3>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="HRcalendar.php">
									<div class="icon">
										<i class="glyphicon glyphicon-calendar" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>Calendar</h3>
									</div>
								</a>
							</div>
						</div>
					</div>
<?php include("HRfooter.php"); ?>