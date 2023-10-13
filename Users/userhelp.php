<?php include('userheader.php') ?>
<?php

include_once('../controller/connect.php');
$dbs = new database();
$db=$dbs->connection();

$empid = $_SESSION['User']['EmployeeId'];
  $sql = mysqli_query($db,"select * from type_of_ticket ");
  $sql1 = mysqli_query($db,"select * from tye_of_priority ");
  if(isset($_POST['Apply']))
  {
    $priority = $_POST['prioritystatus'];
    $ticket = $_POST['ticketstatus'];
    $title = $_POST['title'];
    $des_issue = $_POST['des_issue'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $ticketstatus = "Pending";
    /*date formate*/
    $date = str_replace('/', '-', $startdate);
    $startd = date('Y-m-d', strtotime($date));
    $datee = str_replace('/', '-', $enddate);
    $endd = date('Y-m-d', strtotime($datee));
    /*end date formate*/

    //mysqli_query($db,"insert into helpdesk values(null,'$empid','$title', '$ticket','$priority', '$des_issue','$startd','$ticketstatus')");
    mysqli_query($db, "insert into `helpdesk` values(null, '$empid', '$title', '$ticket', '$priority', '$des_issue', '$date', '$ticketstatus')");
    echo "<script>window.location='userhelp.php';</script>";
  }
?>
<div class="s-12 l-10">
               <h1>Raise Ticket</h1><hr>
               <div class="clearfix"></div>
               </div>
               <div class="s-12 l-6">
                 	<form action="" method="post">
                  <label>Title</label>
					    <input type="text" name="title" placeholder="Title" required="" autocomplete="off">
					    <label>Ticket Category</label>
					    <select id="country" name="ticketstatus" title="Select Ticket" required="">
					    	<option value="">-- Select Category --</option>
                <?php while($row = mysqli_fetch_assoc($sql)) { ?>
                  <option value="<?php echo $row['TicketId']; ?>"><?php echo ucfirst($row['Type_of_Ticket']);?></option>
                <?php } ?>
					    </select>
              <label>Priority</label>
					    <select id="country" name="prioritystatus" title="Select Leave" required="">
					    	<option value="">-- Select Priority --</option>
                <?php while($row = mysqli_fetch_assoc($sql1)) { ?>
                  <option value="<?php echo $row['Pid']; ?>"><?php echo ucfirst($row['Type_of_Priority']);?></option>
                <?php } ?>
					    </select>
              <label>Description</label>
					    <input type="text" name="des_issue" placeholder="Describe" required="" autocomplete="off">
					    
					    <label>Date</label>
					    <input type="text" name="startdate" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" autocomplete="off" placeholder="Start Date" title="Start Date" required="">
					    
					    <input type="submit" name="Apply" title="Submit" value="Submit">
				  	</form>
               </div>
               
<?php include('userfooter.php') ?>

<script type="text/javascript">
  
$('#EndDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d',
  minDate:'2015/01/01', // yesterday is minimum date
  maxDate:'2030/01/01' // and tommorow is maximum date calendar
});

$('#StartDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'d/m/Y',
  formatDate:'Y/m/d',
  minDate:'2015/01/01', // yesterday is minimum date
  maxDate:'2030/01/01' // and tommorow is maximum date calendar
});

</script>