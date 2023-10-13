<?php include('header.php'); ?>
<?php
//conecting to the username
$servername = "localhost";
$username = "root";
$password = "";
$database = "hrm_db";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "SELECT * FROM recruitment";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
?>
<link rel="stylesheet" type="text/css" href="../css/table-style.css" />
<!-- <link rel="stylesheet" type="text/css" href="css/basictable.css" /> -->
<script type="text/javascript" src="../js/jquery.basictable.min.js"></script>
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
    <li class="breadcrumb-item"><a href="Home.php">Home</a><i class="fa fa-angle-right"></i>Recruitment</li>
</ol>
<div class="validation-system" style="margin-top: 0;">	
<div class="validation-form">
 	<div>
		<div class="w3l-table-info">
		<h2>Recruitment</h2>
		<h4>To apply for the following Job Application kindly mail your resume on <b>hr@spiinfotec.com</b></h4>
		<table id="table">
		<thead>
			<tr>
				<th style="text-transform: capitalize; text-align: center">Job Id</th>
				<th style="text-transform: capitalize; text-align: center;">Position</th>
				<th style="text-transform: capitalize; text-align: center;">Experience</th>
				<th style="text-transform: capitalize; text-align: center;">Skills</th>
				<th style="text-transform: capitalize; text-align: center;">Details</th>
			</tr>
		</thead>
		<tbody>
		<?php while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
			<td style="text-align: center; text-transform: capitalize;"><?php echo $Sno =  $row['Sno']; ?></td>
			<td style = "text-align: center; text-transform: capitalize;"><?php echo $position =  $row['position']; ?></td>
			<td style = "text-align: center; text-transform: capitalize;"><?php echo $experience =  $row['experience']; ?></td>
			<td style = "text-align: center;"><?php  echo $skills=  $row['skills']; ?></td>
			<td style="text-align: left;"><?php echo $des = $row['des']; ?></td>
			</tr>
		<?php }?>
		</tbody>
		</table>
		</div>  
	</div>
 </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<?php include('footer.php'); ?>



<!--image Popup-->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<!--End image Popup -->