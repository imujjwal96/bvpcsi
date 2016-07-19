<!-- Footer of the Page -->
<?php
				$page = $_SERVER["PHP_SELF"];
				$footer_color_theme = "";
				if(strcmp($page, "/bvpcsi/public_html/index.php") == 0){
				 $footer_color_theme = "footer-color-home";
				 }
				if(strcmp($page, "/bvpcsi/public_html/council.php") == 0){
				 $footer_color_theme = "footer-color-council"; 
				 }
				if(strcmp($page, "/bvpcsi/public_html/gallery.php") == 0){
				 $footer_color_theme = "footer-color-gallery";
				 }
				if(strcmp($page, "/bvpcsi/public_html/events.php") == 0){
				 $footer_color_theme = "footer-color-events";
				 }
				if(strcmp($page, "/bvpcsi/public_html/login.php") == 0){
				 $footer_color_theme = "footer-color-home";
				 }
				
?>
<div class="container-fluid text-col <?php echo $footer_color_theme?>" style="">
	<div class="col-md-6">
	<div class="row">
	<div class="col-md-6  text-box" style="color: #FFF">
	<h5>EMAIL SIGN UP</h5>
	</div>
	</div>
	<div class="row">
	<div class="col-md-8 text-box" style="color: #FFF; ">
	<h4 style="font-weight:100;">Get the latest news, events and schedules for workshops from the team.</h4>
	</div>
	</div>
	<div class="row">
	<div class="col-md-6 input-box" style="color: #FFF; ">
	<input class="input_text_new" type="text" name="email" placeholder="Enter your Email Address"></input>
	</div>
	<div class="col-md-6 input-box" style="color: #FFF; ">
	<input class="input_btn_new" type="button" name="signup" value="SIGN UP"/>
	</div>
	</div>
	</div>
	<div class="col-md-6">
	<div class="row">
	<div class="col-md-6  text-box" style="color: #FFF">
	<h5>Connect Us</h5>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12 connect-box" style="color: #FFF">
	<a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
	<a href="https://www.plus.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	<a href="https://www.github.com"><i class="fa fa-github" aria-hidden="true"></i></a>
	</div>	
	</div>
	</div>
	</div>

	<div class="container-fluid footer" style="background-color: #fff;">
	<div class="row">
	
	<a href="https://www.bvpcsi.in"><img src="img/bvpcsilogo-black.png" style="height:10vh" /></a>
	<span style="float: right;padding: 20px 0px;">Made with <i class="fa fa-heart" aria-hidden="true" style="color: #FF2D50"></i> by Team</span>
	</div>
	</div>

	<script src="Scripts/jquery-2.1.4.min.js"></script>
	<!-- TimeLine -->
	<script src="Scripts/main.js"></script> <!-- Resource jQuery -->
	<!-- /Timeline -->
	<script src="Scripts/bootstrap.min.js"></script>
</body>
</html>
