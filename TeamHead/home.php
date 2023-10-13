<?php include('header.php'); ?>
<?php
  include_once('controller/connect.php');
  
  $dbs = new database();
  $db=$dbs->connection();
  $TotalEmp =mysqli_query($db,"select count(EmployeeId) as emp from employee where RoleId !='1' and RoleId !='2' ");
  $TotalEmploId = mysqli_fetch_assoc($TotalEmp);
  $pandingleave = mysqli_query($db,"select count(LeaveStatus) as pleave from leavedetails where LeaveStatus='Pending'");
  $tpandingleave = mysqli_fetch_assoc($pandingleave);
?>

<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item" title="Home"><a href="index.php">Home</a></li>
</ol>
<!--four-grids here-->
		<div class="row" style="">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="employeeview.php">
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
								<a href="leaverequest.php">
									<div class="icon">
										<i class="glyphicon glyphicon-plane" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>Leave Request</h3>
										<h4><?php echo(isset($tpandingleave['pleave']))?$tpandingleave['pleave']:"";?></h4>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="taskview.php">
									<div class="icon">
										<i class="glyphicon glyphicon-tasks" aria-hidden="true" style="color:#000;"></i>
									</div>
									<div class="four-text" style="color:#000;">
										<h3>Task Box</h3>
									</div>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="panel panel-default bg-light dash-summary">
							<div class="panel-body" style="border: solid #004d99;">
								<a href="recruitview.php">
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
								<a href="notice.php">
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
								<a href="adminhelp.php">
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
								<a href="calendar.php">
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
					
					
					
<!--//four-grids here-->


  
<?php include('footer.php'); ?>

