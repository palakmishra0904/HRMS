<?php include('HRheader.php'); ?>
<?php 
include_once('controller/connect.php');
  $dbs = new database();
  $db=$dbs->connection();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $position = $_POST['position']; }
  
  $sql = "SELECT * FROM position";
  $result = mysqli_query($db, $sql);
  ?>
<html>
<body>
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<!-- <link rel="stylesheet" type="text/css" href="css/basictable.css" /> -->
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
<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item"><a href="HRhome.php">Home</a><i class="fa fa-angle-right"></i>Department</li>
</ol>
<table id="table">
		<thead>
			<tr>
      <th style="text-transform: capitalize; text-align: cenetr;">Sno</th>
      <th style="text-transform: capitalize; text-align: cenetr;">Department</th>
		</tr>
		</thead>
		<tbody>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td style="font-size: 15px;"><?php echo $pid =  $row['PositinId']; ?></td>
        <td style="font-size: 15px;"><?php echo $name =  $row['Name']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
  </table>
    </body>
    </html>
<?php include('HRfooter.php'); ?>