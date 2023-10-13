<?php include('header.php');?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hrm_db";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
?>
<?php
$sql = "SELECT * FROM recruitment";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
if(isset($_POST['close']))
{
    echo "<script>window.location='recruitview.php';</script>";
}
else if(isset($_POST['delete']))
{
    echo "<script>window.location='recruitview.php?empid=$empid';</script>";
}
else if(isset($_POST['edit']))
{
    echo "<script>window.location='recruitadd.php?empid=$empid';</script>";	
}


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
<ol class="breadcrumb" style="margin: 10px 0px ! important;">
<li class="breadcrumb-item"><a href="Home.php">Home</a><i class="fa fa-angle-right"></i>Recruitment View</li>
</ol>
<form method="post">
<div class="validation-form" style="margin-top: 0;">
<div class="row">
    <div class="col-md-4">
        <table>
        <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td style="text-align: right;"><b>Job Id</b> &nbsp;::</td>
                    <td><?php echo $Sno =  $row['Sno']; ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td style="text-align: right;"><b>Position</b> &nbsp;::</td>
                    <td><?php echo $position =  $row['position']; ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td style="text-align: right;"><b>Experience</b> &nbsp;::</td>
                    <td><?php echo $experience =  $row['experience']; ?></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td style="text-align: right;"><b>Skills Required</b> &nbsp;::</td>
                    <td><?php echo $skills =  $row['skills']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-6">
        <table>
            <tbody>
                <tr>
                    <td style="text-align: right; width: 150px;"><b>Description</b> &nbsp;::</td>
                    <td><?php echo $des =  $row['des']; ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>
<div class="clearfix"></div>
<div class="row" style="text-align: center; margin-top: 2%;">
    <div class="col-md-12 form-group">
        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
        <button type="submit" name="delete" class="btn btn-default">Delete</button>
        <button type="submit" name="close" class="btn btn-primary">Close</button>
    </div>
</div>
</div>
<?php include('footer.php');?>