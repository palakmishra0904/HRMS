<?php include('userheader.php'); ?>
<?php
//conecting to the username
$servername = "localhost";
$username = "root";
$password = "";
$database = "hrm_db";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM notice";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
?>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<div class="s-12 l-10">
<h1 style="color: #858282;">Notice</h1><hr>
 <div class="clearfix"></div>

 <div class="validation-system" style="margin-top: 0;">	
<div class="validation-form">
<div>
		<div class="w3l-table-info">
		<table id="table">
		<thead>
			<tr>
				<th style="text-transform: capitalize; text-align: center">Sno</th>
				<th style="text-transform: capitalize; text-align: center;">Date</th>
				<th style="text-transform: capitalize; text-align: center;">Notice</th>
			</tr>
		</thead>
		<tbody>
		<?php while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
			<td style="text-align: center; font-size:20px;"><?php echo $sno =  $row['sno']; ?></td>
			<td style = "text-align: center; font-size:20px; width: 150px;"><?php echo $date=  $row['date']; ?></td>
			<td style = "text-align: left; font-size:20px;"><?php echo $notice=  $row['notice']; ?></td>
			</tr>
		<?php }?>
		</tbody>
		</table>
		</div>  
	</div>
 </div>
</div>

<?php include('userfooter.php'); ?>