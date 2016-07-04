<!-- Content Wrapper Start -->
	<div class="container-fluid text-col" style="background-color: #ff4242;">
		<div class="row">
			<div class="col-md-6 text-box" style="color: #fff">	
				<h1>Technical &amp; Cultural Events</h1>
			</div>
			<div class="col-md-6 text-box" style="color: #fff">
				<h3>We are pretty active in hosting events and encouraging students to participate in those events</h3>
			</div>
		</div>
	</div>
	<?php
		$i = 1;
		foreach ($events as $event) {
			$startdate = date_separator($event["start_datetime"]);
			$enddate = date_separator($event["end_datetime"]);
			if ($i % 2 != 0) {
				echo '<div class="container-fluid event_col" style="background-color: #fff;">
						<div class="row">
							<div class="col-md-6 col-md-push-6 event_col " style="">
								<div class="event_showcase_image" style="background-image: url(' . $event["cover"] . ');"></div>
							</div>
							<div class="col-md-6 col-md-pull-6 event_col event_showcase_text " style="">	
								<h1 class="title">' . $event["event_name"] . '</h1>
								<h4 class="desc">' . $event["description"] . '</h4>
								<h3 class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>';
				if (date_compare($startdate, $enddate)) {
					echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"] .  '</h3>';
				}
				else {
					echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"] .  ' - ' . $enddate["day"] . ' '. $enddate["month"] . ' ' . $enddate["year"] .'</h3>';
				}
				echo '		</div>
						</div>
					</div>';
			}
			else {
				echo '<div class="container-fluid" style="background-color: #fff;">
						<div class="row">
							<div class="col-md-6 event_col " style="">
								<div class="event_showcase_image" style="background-image: url(' . $event["cover"] . ');"></div>
							</div>
							<div class="col-md-6 event_col event_showcase_text" style="">	
							<h1 class="title">' . $event["event_name"] . '</h1>
							<h4 class="desc"' . $event["description"] . '</h4>
							<h3 class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>';
				if (date_compare($startdate, $enddate)) {
					echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"] .  '</h3>';
				}
				else {
					echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"] .  ' - ' . $enddate["day"] . ' '. $enddate["month"] . ' ' . $enddate["year"] .'</h3>';
				}
				echo '		</div>
						</div>
					</div>';
			}
			$i++;
    	}
	?>	