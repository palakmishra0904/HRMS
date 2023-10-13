<?php include('userheader.php'); ?>
<style>
	.dash-summary{
	display: flex;
	justify-content:space-between;
	width: auto;
	}
	.dash-panel {
		border: 1px solid #f0efef;
		width: 100%;
		padding: 1.5em 1em;
		box-shadow: 2px 2px 7px #c8c8c8;
	}

	.dash-panel h3{
		width: 200px; 
		text-align: center;
		font-size: 1.5em;
	}

</style>
               <div class="s-12 l-10">
               <h2>Home</h2><hr>
               <div class="clearfix"></div>
               </div>

				<div class="s-12 dash-summary">
					<a href="taskrequest.php">
                 	<div class="dash-panel" style="background-color: #7FFFD4">
					<h3>Task Box</h3>
					</div></a>
                 </div>

				<div class="s-12 dash-summary">
					<a href="userrecruit.php">
                 	<div class="dash-panel" style="background-color: #68effd">
					<h3>Recruitment</h3>
					</div></a>
                 </div>
			
               <div class="s-12 dash-summary">
				    <a href = "leavestatus.php">
                 	<div class="dash-panel" style="background-color: #7FFFD4">
						<h3>Leave</h3>
					</div></a>
				</div>

				<div class="s-12 dash-summary">
				    <a href = "usernotice.php">
                 	<div class="dash-panel" style="background-color: #68effd">
						<h3>Notice</h3>
					</div></a>
				</div>

				<div class="s-12 dash-summary">
				    <a href = "userhelp.php">
                 	<div class="dash-panel"style="background-color: #7FFFD4">
						<h3>Help Desk</h3>
					</div></a>
				</div>

				<div class="s-12 dash-summary">
				    <a href = "usercalendar.php">
                 	<div class="dash-panel" style="background-color: #68effd">
						<h3>Calendar</h3>
					</div></a>
				</div>


<?php include('userfooter.php'); ?>