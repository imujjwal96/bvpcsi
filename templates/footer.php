<!-- Footer of the Page -->
<?php
				$page = $_SERVER["PHP_SELF"];
			
				$footer_color_theme = "";
				
				if(strcmp($page, "/index.php") == 0){
				 $footer_color_theme = "footer-color-home";
				 }
				if(strcmp($page, "/council.php") == 0){
				 $footer_color_theme = "footer-color-council"; 
				 }
				if(strcmp($page, "/gallery.php") == 0){
				 $footer_color_theme = "footer-color-gallery";
				 }
				if(strcmp($page, "/events.php") == 0){
				 $footer_color_theme = "footer-color-events";
				 }
				if(strcmp($page, "/login.php") == 0){
				 $footer_color_theme = "footer-color-home";
				 }
				
?>
<div class="container-fluid text-col <?php echo $footer_color_theme?>" style="">
	<div class="col-md-6">
		<div class="fb-page" data-width="500" data-height="300" data-href="https://www.facebook.com/bvcoecsi" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bvcoecsi" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bvcoecsi">BVP CSI</a></blockquote></div>
	</div>
	<div class="col-md-6">
		<h1 style="font-size: 30px; padding-bottom: 10px">Contact Us</h1>
		<form role="form" class="form-horizontal" action="contact.php" method="POST">
			<div class="form-group">
				<div class="col-md-9 ">
					<input placeholder="Name" name="name" class="form-control" id="name" required="" type="text">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 ">
					<input placeholder="Email-Address" name="email" class="form-control" id="email" required="" type="mail">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9 ">
					<input placeholder="Phone Number" name="phone" class="form-control" id="phone" required="" type="text">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9">
					<textarea class="form-control" placeholder="Message" name="message"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9">
					<input type="submit" name="submit" value="Send Message" class="btn btn-primary" />
				</div>
			</div>
		</form>


		<div class="row">
			<div class="col-md-6  text-box" style="color: #FFF">
				<h5>Connect Us</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 connect-box" style="color: #FFF">
				<a href="https://www.facebook.com/bvcoecsi" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
				<a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				<a href="https://github.com/imujjwal96/bvpcsi/" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
			</div>
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
					{ hue: '#00ffe6' },
					{ saturation: -20 }
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

</body>
</html>
