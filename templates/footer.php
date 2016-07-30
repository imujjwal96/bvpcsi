<!-- Footer of the Page -->
<?php
				$page = $_SERVER["PHP_SELF"];
			
				$footer_color_theme = "";
				//echo $page;
				$temp = "/bvpcsi master/bvpcsi/public_html";
				if(strcmp($page, $temp."/index.php") == 0){
				 $footer_color_theme = "footer-color-home";
				 }
				if(strcmp($page,$temp."/council.php") == 0){
				 $footer_color_theme = "footer-color-council"; 
				 }
				if(strcmp($page, $temp."/gallery.php") == 0){
				 $footer_color_theme = "footer-color-gallery";
				 }
				if(strcmp($page, $temp."/events.php") == 0){
				 $footer_color_theme = "footer-color-events";
				 }
				if(strcmp($page, $temp."/login.php") == 0){
				 $footer_color_theme = "footer-color-login";
				 }
				if(strcmp($page, $temp."/contactus.php") == 0){
				 $footer_color_theme = "footer-color-contactus";
				 }
				
?>
<div class="container-fluid text-col <?php echo $footer_color_theme;?>">
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
	<div class="col-md-6 text-box" style="color: #FFF">
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
	
	<div class="row text-box" >
	<button type="button" class="input_btn_new" data-toggle="modal" data-target=".bd-example-modal-sm">Fb Feed</button>
	</div>
	
	</div>
	</div>
	
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
	<div class="fb-page" data-width="500" data-height="400" data-href="https://www.facebook.com/bvcoecsi" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bvcoecsi" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bvcoecsi">BVP CSI</a></blockquote></div>
	

    </div>
  </div>
</div>



	<div class="container-fluid footer" style="background-color: #fff;">
	<div class="row">
	
	<a href="http://www.bvpcsi.in"><img src="img/bvpcsilogo-black.png" style="height:10vh" /></a>
	<span style="float: right;padding: 20px 0px;">Made with <i class="fa fa-heart" aria-hidden="true" style="color: #FF2D50"></i> by <a href = "https://github.com/imujjwal96/bvpcsi/graphs/contributors" target="_blank">Team</a></span>
	</div>
	</div>

	<script src="Scripts/jquery-2.1.4.min.js"></script>
	<script src="Scripts/bootstrap.min.js"></script>
	<!-- TimeLine -->
	<script src="Scripts/main.js"></script> <!-- Resource jQuery -->
	<!-- /Timeline -->
	<script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	
	<script>
		$(document).ready(function() {
			$(".fancybox").fancybox({
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		}); 
	</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=1662670077349303";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<script>
	var map;
	function initMap() {
		var styles = [
			{
				stylers: [
					{ hue: '#3fbf90' },
					{ saturation: 50 }
				]
			},{
				featureType: 'road',
				elementType: 'geometry',
				stylers: [
					{ lightness: 100 },
					{ visibility: 'simplified' }
				]
			},{
				featureType: 'road',
				elementType: 'labels',
				stylers: [
					{ visibility: 'off' }
				]
			}
		];

		// Create a new StyledMapType object, passing it the array of styles,
		// as well as the name to be displayed on the map type control.
		var styledMap = new google.maps.StyledMapType(styles,
			{name: "Styled Map"});

		// Create a map object, and include the MapTypeId to add
		// to the map type control.
		var mapOptions = {
			zoom: 18,
			scrollwheel: false,
			center: new google.maps.LatLng(28.675913, 77.1131908),
			mapTypeControlOptions: {
				mapTypeIds: ['roadmap', 'map_style']
			}
		};
		var map = new google.maps.Map(document.getElementById('map'),
			mapOptions);

		var marker = new google.maps.Marker({
			map: map,
			position: {lat: 28.675913, lng: 77.1131908},
		});

		//Associate the styled map with the MapTypeId and set it to display.
		map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');



	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZNe-9BMn0bLUuEjJCM3eSghJapBdnYvA&callback=initMap"
		async defer></script>

<script>
$('.message a').click(function(e){
	e.preventDefault();
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</body>
</html>
