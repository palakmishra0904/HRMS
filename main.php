<?php
	$result ="";
	if(isset($_GET['msg']))
	{
		$result=$_GET['msg'];
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Login Page - HRM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<style>
	body{
		padding: 20px;
		background-color: #d800c8;
		background-image: linear-gradient(160deg, #d800c8 0%, #094e46d4 100%);
	}
	.main-head h1, h2, h3{
		margin: 40px;
		text-align: center;
		color: #fff;
	}
	.main-links{
		background-color: #fff;
		border: #fff;
		width: 180px;
		padding: 20px;
		text-align: center;
		padding: 25px;
		position: relative;
		left: 650px;
	}
	.main-links a{
		color : #d800c8;
		font-size: 20px;
	}
	.main-links a:hover{
		font-size: 25px;
	}
</style>
</head> 
<body>
			
	<div class="main-head">
		<h1> SPI Infotech</h1>
		<h2>Human Resource Management System</h2>
		<h3>Login</h3>
	<div class="main-links">
		<a href="HRindex.php">HR Login</a>
	</div><br><br>
	<div class="main-links">
		<a href="team_head/index.php">Team Head</a>
	</div><br><br>
	<div class="main-links">
		<a href="user/index.php">Employee</a>
	</div>
	
	<div class="footer">
	<p>Human Resource Managemant System. All Rights Reserved &copy; <?= date("Y") ?> </p>
	</div>
	</div>
	
	<script>
function passwordeyes(_this) {
    var x = document.getElementById("Psw").type;
    if(x=="password"){
      document.getElementById("Psw").type="text";
	  _this.setAttribute('class', "fa fa-eye")
    }else{
      document.getElementById("Psw").type="password";
	  _this.setAttribute('class', "fa fa-eye-slash")
	}
}
</script>
</body>
</html>

<?php
	/*current computer name get */
	//$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	//echo $hostname;

		/*check to which op system*/
		/*if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    		echo 'This is a server using Windows!';
		} else {
   			 echo 'This is a server not using Windows!';
		}*/

		/*get to mac Address in windows system*/
		//--ob_start();
		//Get the ipconfig details using system commond
		//--system('ipconfig /all');
		 
		// Capture the output into a variable
		//--$mycom=ob_get_contents();
		// Clean (erase) the output buffer
		//--ob_clean();
		 
		//--$findme = "Physical";
		//Search the "Physical" | Find the position of Physical text
		//--$pmac = strpos($mycom, $findme);
		 
		// Get Physical Address
		//--$mac=substr($mycom,($pmac+36),17);
		//Display Mac Address
		//--echo $mac;

		/* End mac system code*/

	/* get current computer mac address */
	//echo substr(exec('getmac'),0,17);
	
	//echo substr("<br>40-8D-5C-B1-B7-7D \Device\Tcpip_{BF6495D7-04E6-4599-99B0-FA6656B57D35}", 0,17)
?>