<?php include('HRheader.php')?>
<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $notice = $_POST['notice'];
}
//conneting to username
$servername = "localhost";
$username = "root";
$password = "";
$database = "hrm_db";

$conn = mysqli_connect($servername, $username, $password, $database);

//insert data into database
$sql = "INSERT INTO `notice` (`notice`) VALUES ('$notice');";
$result = mysqli_query($conn, $sql);

$sql = "SELECT * FROM notice";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
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
    <li class="breadcrumb-item"><a href="HRhome.php">Home</a><i class="fa fa-angle-right"></i>Notice</li>
</ol>
<div class="validation-system" style="margin-top: 0;">	
<div class="validation-form">
 	<div>
		<div class="w3l-table-info">
    <h2>Notice</h2>
<form action="notice.php" method="post">

<div class="vali-form-group">
            <div class="col-md-4 control-label">
              <label class="control-label">Date</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              </span>
              <input type="date" name="date" class="form-control" placeholder="Date" required="">
              </div>
            </div>
<br><br><br><br>
<div class="vali-form-group">
            <div class="col-md-4 control-label">
              <label class="control-label">Notice</label>
              <div class="input-group">             
              <input type="text" name="notice" class="form-control" placeholder="Notice" required="" style="width: 750px;">
              </div>
            </div>

            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
              <input type="text" name="imagefilename" hidden="" value="<?php echo(isset($editemp['ImageName']))?$editemp['ImageName']:''; ?>">
            </div>
          <div class="clearfix"> </div>
</form>

		<br>
		<table id="table">
		<thead>
			<tr>
      <th style="text-transform: capitalize; text-align: cenetr;">Sno</th>
      <th style="text-transform: capitalize; text-align: cenetr;">Date</th>
			<th style="text-transform: capitalize; text-align: cenetr;">Notice</th>
			</tr>
		</thead>
		<tbody>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
    
      <tr>
        <td style="font-size: 15px;"><?php echo $sno =  $row['sno']; ?></td>
        <td style="font-size: 15px;"><?php echo $date =  $row['date']; ?></td>
        <td style="font-size: 15px;"><?php echo $notice =  $row['notice']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
  </table>

</body>
</html>
<?php include('HRfooter.php')?>