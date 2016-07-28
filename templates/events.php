<!-- Content Wrapper Start -->
<div class="container-fluid text-col" style="background-color: #ff4242;">
	<div class="row">
	<div class="col-md-6 text-box" style="color: #fff">	
	<h1><?= $title; ?></h1>
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
				<a href="#portfolioModal'. $i .'" class="portfolio-link cd-read-more" data-toggle="modal">Read more</a>
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
			$i++;
		}
	?>
								
		</section> <!-- cd-timeline -->
		<!-- Content Wrapper ends -->

<?php
	$i = 1;
	foreach ($events as $event) {
		$startdate = date_separator($event["start_datetime"]);
		$enddate = date_separator($event["end_datetime"]);


		echo '<div class="portfolio-modal modal fade" id="portfolioModal' . $i . '" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl">
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
										<h2>' . $event["event_name"] . '</h2>
										<img class="img-responsive img-centered" src="img/'. slash_string($event["event_name"])  .'.jpg" alt="">
										<p>
											' . $event["description"] . '
										</p>
										<p>
										<ul class="list-inline">
											<li>Date: ';
												if (date_compare($startdate, $enddate)) {
													echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"];
												}
												else {
													echo $startdate["day"] . ' '. $startdate["month"] . ' ' . $startdate["year"] .  ' - ' . $enddate["day"] . ' '. $enddate["month"] . ' ' . $enddate["year"] ;
												}
		echo 								'</li>
											<li><a href = "'. $event["fb_link"] .'" target="_blank">Facebook Page</a></li>
										</ul>
										<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>';
		$i++;
	}
?>