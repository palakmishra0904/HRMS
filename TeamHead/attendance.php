<?php include('header.php'); ?>
<?php
	include_once('controller/connect.php');
	
	$dbs = new database();
	$db=$dbs->connection();

	$page="";
	if(isset($_GET['search']))
	{
		$SearchName = $_GET['search'];
		$RecordeLimit = 10;
		$search = mysqli_query($db,"select count(EmpId) as total from employee where RoleId !='1' and (FirstName like '%".$SearchName."%' or MiddleName like '%".$SearchName."%' or LastName like '%".$SearchName."%' or EmployeeId like '%".$SearchName."%')");
		
		$SName = mysqli_fetch_array($search);
		
		$number_of_row =ceil($SName['total']/10); 
		if(isset($_GET['bn']) &&intval($_GET['bn']) <= $number_of_row && intval($_GET['bn'] !=0))
		{

			$Skip = (intval($_GET["bn"]) * $RecordeLimit) - $RecordeLimit;

			$sql = mysqli_query($db,"select * from employee where RoleId !='1' and (FirstName like '%".$SearchName."%' or MiddleName like '%".$SearchName."%' or LastName like '%".$SearchName."%' or EmployeeId like '%".$SearchName."%') LIMIT $Skip,$RecordeLimit ");
		}
		else
		{
			$sql = mysqli_query($db,"select * from employee where RoleId !='1' and (FirstName like '%".$SearchName."%' or MiddleName like '%".$SearchName."%' or LastName like '%".$SearchName."%' or EmployeeId like '%".$SearchName."%') LIMIT $RecordeLimit");
			
		}

		for($i=0;$i<$number_of_row;$i++)
		{
			$d = $i+1;
			if(isset($_GET["search"]))
			{
				$page .= "<a href='?search=$SearchName&bn=$d'>$d</a>&nbsp &nbsp &nbsp";
			}
			else
			{
				$page .= "<a href='?bn=$d'>$d</a>&nbsp &nbsp &nbsp";
			}					            
		} 
	}
	else if(isset($_GET['empid']))
	{
		$empid = $_GET['empid'];
		mysqli_query($db,"delete from employee where EmpId='$empid'");
		echo "<script>window.location='employeeview.php';</script>";
	}
	else
	{
		$RecordeLimit = 10;
		$search = mysqli_query($db,"select count(EmpId) as total from employee ");
		$SName = mysqli_fetch_array($search);
		
		$number_of_row =ceil($SName['total']/10);
		if(isset($_GET['bn']) && intval($_GET['bn']) <= $number_of_row && intval($_GET['bn'] != 0 ))
		{
			$Skip = (intval($_GET["bn"]) * $RecordeLimit) - $RecordeLimit;
			$sql = mysqli_query($db,"select * from employee where RoleId !='1' LIMIT $Skip,$RecordeLimit");
		}
		else
		{
			$sql = mysqli_query($db,"select * from employee where RoleId !='1' LIMIT $RecordeLimit");
		}

		for($i=0;$i<$number_of_row;$i++)
		{
			$d = $i+1;
		    $page .= "<a href='?bn=$d'>$d</a>&nbsp &nbsp &nbsp";
		}
	}
?>
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
    <li class="breadcrumb-item"><a href="Home.php">Home</a><i class="fa fa-angle-right"></i>Attendance</li>
</ol>

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