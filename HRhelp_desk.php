<?php include('HRheader.php') ?>
<?php
//error_reporting(0);
   include_once('controller/connect.php');
$dbs = new database();
$db=$dbs->connection();
 
 $Statusl = "Pending";
 $helpdesk = mysqli_query($db,"select * from helpdesk where TicketStatus='$Statusl'");
 if(isset($_GET['id']))
 {
   $acceptid = $_GET['id'];
   $accept = "Accept";
   mysqli_query($db,"update helpdesk set TicketStatus='$accept' where ticketId='$acceptid'");
   echo "<script>window.location='adminhelp.php';</script>";
 }
 else if(isset($_GET['msg']))
 {
   $deniedid = $_GET['msg'];
   $denied = "Denied";
   mysqli_query($db,"update helpdesk set TicketStatus='$denied' where Detail_Id='$deniedid'");
   echo "<script>window.location='adminhelp.php';</script>";
 }

?>
<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item"><a href="HRhome.php">Home</a><i class="fa fa-angle-right"></i>HelpDesk<i class="fa fa-angle-right"></i>Raised Ticket</li>
</ol>
<form method="POST">
<div class="validation-form">
  <h2>Raised Ticket</h2>
  <div class="row" style="color: white; margin-right: 0; margin-left: 0;">
    <div style="background: #202a29; text-align: center;" class="col-md-1 control-label">
            <h5>ID</h5>
        </div>
        <div style="background: #202a29; text-align: center;" class="col-md-1 control-label">
            <h5>Emp ID</h5>
        </div>
        <div style="background: #202a29; text-align: center;" class="col-md-1 control-label">
            <h5>Name</h5>
        </div>
        <div style="background: #202a29; text-align: center;" class="col-md-2 control-label">
            <h5>Title</h5>
        </div>
        <div style="background: #202a29; text-align: center;" class="col-md-2 control-label">
            <h5>Category</h5>
        </div>
        <div style="background: #202a29; text-align: center;" class="col-md-1 control-label">
            <h5>Priority</h5>
        </div>
        <div style="background: #202a29; text-align: center;" class="col-md-2 control-label">
            <h5>Date</h5>
        </div>
        <div style="background: #202a29; text-align: center;" class="col-md-2 control-label">
            <h5>Description</h5>
        </div>
    </div>
  
<?php $i=1; while($row = mysqli_fetch_assoc($helpdesk)) {
      $empid = $row['Empid'];
      $name = mysqli_query($db,"select * from employee where EmployeeId='$empid'");
      $empname=mysqli_fetch_assoc($name);
      $namem = ucfirst($empname['FirstName'])."&nbsp;".ucfirst($empname['LastName']);
      $typen = $row['category'];
      $typeid = mysqli_query($db,"select * from type_of_ticket where TicketId='$typen'");
      $typename = mysqli_fetch_assoc($typeid);
      $typem = $row['priority'];
      $typeId = mysqli_query($db,"select * from tye_of_priority where Pid='$typem'");
      $typePname = mysqli_fetch_assoc($typeId);

      ?>
    <div class="row" style="margin-right: 0; margin-top: 10px; margin-left: 0;">
      <div class="col-md-1" style="text-align: center;"><?php $i=$i; echo $i; $i++;?></div>
      <div class="col-md-1" style="text-align: center;"><?php echo (isset($row['Empid']))?$row['Empid']:"";?></div>
      <div class="col-md-1"><?php echo (isset($namem))?$namem:"";?></div>
      <div class="col-md-2" style="text-align: center;"><?php echo (isset($row['title']))?$row['title']:"";?></div>
      <div class="col-md-2" style="text-align: center;"><?php echo ucfirst((isset($typename['Type_of_Ticket']))?$typename['Type_of_Ticket']:"");?></div>
      <div class="col-md-1" style="text-align: center;"><?php echo ucfirst((isset($typePname['Type_of_Priority']))?$typePname['Type_of_Priority']:"");?></div>
      <div class="col-md-2" style="text-align: center;"><?php echo (isset($row['date']))?$row['date']:"";?></div>
      <div class="col-md-2" ><?php echo ucfirst((isset($row['des_issue']))?$row['des_issue']:"");?></div>
    
      <?php }?>    
</div>


<?php include('HRfooter.php') ?>