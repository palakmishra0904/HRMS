<?php include('userheader.php'); ?>
<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $present = $_POST['present'];
    $leave = $_POST['leave'];
    $date = $_POST['date'];
}
//conneting to username
$servername = "localhost";
$username = "root";
$password = "";
$database = "hrm_db";

$conn = mysqli_connect($servername, $username, $password, $database);

//insert data into database
$sql = "INSERT INTO `attendance` (`Date`, `AttendanceStatus`) VALUES ('$date', '');";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html>
<head></head>
<body>


<div class="s-12 l-10">
               <h1>Attendance</h1><hr>
               <div class="clearfix"></div>
               </div>
               <div class="s-12 l-6">
                 	<form action="attendance.php" method="post">
					    
              <label>Date</label>
					    <input type = "date" name = "date"><br>
              <input type = "radio" name = "present"> Present <br>
              <input type = "radio" name = "leave"> Leave
              <input type = "submit" name = "submit">
					    
				  	</form>
               </div>

</body>
</html>