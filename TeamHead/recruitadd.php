<?php include('header.php'); ?>

<?php
error_reporting(0);
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Sno = $_POST['Sno'];
    $position = $_POST['position'];
    $experience = $_POST['experience'];
    $skills = $_POST['skills'];
    $des = $_POST['des'];
}
//conneting to username
$servername = "localhost";
$username = "root";
$password = "";
$database = "hrm_db";

$conn = mysqli_connect($servername, $username, $password, $database);

//insert data into database
$sql = "INSERT INTO `recruitment` (`Sno`, `position`, `experience`, `skills`, `des`) VALUES ('$Sno', '$position', '$experience', '$skills', '$des')";
$result = mysqli_query($conn, $sql);
?>


<ol class="breadcrumb" style="margin: 10px 0px ! important;">
    <li class="breadcrumb-item"><a href="Home.php">Home</a><i class="fa fa-angle-right"></i>Recruitment<i class="fa fa-angle-right"></i> Recruitment Add</li>
</ol>
<!--grid-->
 	<div class="validation-system" style="margin-top: 0;">
 		
 		<div class="validation-form">
 	<!---->
        <form method="POST" action="recruitadd.php">

        <div class="vali-form-group">
          <div class="col-md-4 control-label">
              <label class="control-label">Job Id</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="number" name="Sno" class="form-control" placeholder=" Job Id " required="">
              </div>
            </div>
       
        <div class="vali-form-group">
          <div class="col-md-4 control-label">
              <label class="control-label">Position</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" name="position" class="form-control" placeholder=" Position " required="">
              </div>
            </div>

            <div class="vali-form-group">
          <div class="col-md-4 control-label">
              <label class="control-label">Experience</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" name="experience" class="form-control" placeholder="Experience" required="">
              </div>
            </div>

            <div class="vali-form-group">
          <div class="col-md-4 control-label">
              <label class="control-label">Skills required</label>
              <div class="input-group">             
                  <span class="input-group-addon">
              <i class="fa fa-user" aria-hidden="true"></i>
              </span>
              <input type="text" name="skills" class="form-control" placeholder="Skills" required="">
              </div>
            </div>

            <div class="vali-form-group">
          <div class="col-md-4 control-label">
              <label class="control-label">Description</label>
              <div class="input-group">             
              <input type="text" name="des" class="form-control" placeholder="Description" required="" style="width:725px;">
              </div>
            </div>
            
            <div class="col-md-12 form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
              <input type="text" name="imagefilename" hidden="" value="<?php echo(isset($editemp['ImageName']))?$editemp['ImageName']:''; ?>">
            </div>
          <div class="clearfix"> </div>
        </form>
 	<!---->
 </div>
</div>
<script>
function passwordeyes() {
    var x = document.getElementById("Psw").type;
    if(x=="password")
      document.getElementById("Psw").type="text";
    else
      document.getElementById("Psw").type="password";
}

</script>
<script>
var OneStepBack;
function nmac(val,e){
  if(e.keyCode!=8)
  {
    if(val.length==2)
      document.getElementById("mac").value = val+"-";
    if(val.length==5)
      document.getElementById("mac").value = val+"-";
    if(val.length==8)
      document.getElementById("mac").value = val+"-";
      if(val.length==11)
      document.getElementById("mac").value = val+"-";
      if(val.length==14)
      {
        document.getElementById("mac").value = val+"-";   
      }
  }
}

function nmac1(val,e){
if(e.keyCode==32){
return false;
}

  if(e.keyCode!=8){

    if(val.length==2)
      document.getElementById("mac").value = val+"-";
    if(val.length==5)
      document.getElementById("mac").value = val+"-";
    if(val.length==8)
      document.getElementById("mac").value = val+"-";
      if(val.length==11)
      document.getElementById("mac").value = val+"-";
      if(val.length==14){
      document.getElementById("mac").value = val+"-";   
    }

    if(val.length==17){
        return false;
    }
  } 
}
</script>
<script>
  contrychange();
  function contrychange()
  {
    var selectedstateid = "<?php echo $StateId; ?>";
    var selectedstateid = parseInt(selectedstateid);

    var selectedcountry = $('#contryid').val();
    $.get("controller/getstatecity.php?Type=s&ci="+selectedcountry+"&ss="+selectedstateid,function(data,status){
        $("#stateid").html(data);
    });
    statechange(selectedstateid);
  }
  function statechange(si)
  {

    var selectedstate = $('#stateid').val();
    if(si!=undefined)
      selectedstate=si;

    var selectedcityid = "<?php echo $CityId; ?>";
    selectedcityid = parseInt(selectedcityid);
    
    $.get("controller/getstatecity.php?Type=c&si="+selectedstate+"&sc="+selectedcityid,function(data,status){
      $("#cityid").html(data);
    });
  }
</script>

<script>
  
  var birthdate = $('#Birthdate').val();
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1;
    var yy = today.getFullYear();
    var tdate = yy+"/"+mm+"/"+dd;

$('#Birthdate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  //minDate:'-1980/01/01', // yesterday is minimum date
  maxDate: tdate // and tommorow is maximum date calendar
});

$('#JoinDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  //minDate:'-1980/01/01', // yesterday is minimum date
  //maxDate: tdate // and tommorow is maximum date calendar
});

$('#LeaveDate').datetimepicker({
  yearOffset:0,
  lang:'ch',
  timepicker:false,
  format:'Y/m/d',
  formatDate:'Y/m/d',
  //minDate:'-1980/01/01', // yesterday is minimum date
  //maxDate: tdate // and tommorow is maximum date calendar
});

</script>
<?php include('footer.php'); ?>