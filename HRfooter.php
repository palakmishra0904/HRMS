<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->

<!--inner block end here-->
<!--copy rights start here-->
<div style="margin-top: -20px;" class="copyrights">
	 <p>All Rights Reserved © <?= date("Y") ?> Human Resource Management System </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="HRhome.php"><i class="fa fa-tachometer"></i> <span>Dashboard	</span><div class="clearfix"></div></a></li>

										<li><a href="#"><i class="fa fa-user"></i><span>Employee</span><span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
											<ul>
												<li><a href="HRemp_add.php">Add Employee</a></li>
												<li><a href="HRemp_view.php">Employee View</a></li>
											</ul>
										</li>

										<li><a href="#"><i class="fa fa-list-alt"></i><span>Recruitment</span><span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
											<ul>
												<li><a href="HRrecruit_add.php">Recruitment add</a></li>
												<li><a href="HRrecruit_view.php">Recruitment View</a></li>
											</ul>
										</li>

										
							        	<li id="menu-academico" ><a href="HRchng_password.php"><i class="fa fa-cogs"></i><span>Change Password</span></a>
									 	</li>

										<!-- <li><a href="#"><i class="fa fa-list"></i><span>Master List</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										  	<ul>
												<li><a href="city.php">City</a></li>
												<li><a href="state.php">State</a></li>
												<li><a href="country.php">Country</a></li>
												<li><a href="position.php">Position</a></li>
											</ul>
										</li> -->
										
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>