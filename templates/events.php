<!-- Content Wrapper Start -->
<div class="container-fluid text-col" style="background-color: #ff4242;">
	<div class="row">
	<div class="col-md-6 text-box" style="color: #fff">	
	<h1>Technical & Cultural Events</h1>
	</div>
	<div class="col-md-6 text-box" style="color: #fff">
	<h3>We are pretty active in hosting events and encouraging students to participate in those events</h3>
	</div>
	</div>
	</div>
		<section id="cd-timeline" class="cd-container">
	<?php
		$i = 1;
		foreach ($events as $event) {
			$startdate = date_separator($event["start_datetime"]);
			$enddate = date_separator($event["end_datetime"]);
				echo '	<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="img/settings_icon.png" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2>' . $event["event_name"] . '</h2>
				<p>' . $event["description"] . '</p>
				<a href="#0" class="cd-read-more">Read more</a>
				<span class="cd-date">';
				if (date_compare($startdate, $enddate)) {
					echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"];
				}
				else {
					echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"] .  ' - ' . $enddate["day"] . ' '. $enddate["month"] . ' ' . $enddate["year"] ;
				}
				echo '</span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->';
			}
			?>	
								
		</section> <!-- cd-timeline -->
		<!-- Content Wrapper ends -->
