<div class="container-fluid text-col" style="background-color: #3fbf90;">
	<div class="row">
	    <div class="col-md-6 text-box" style="color: #fff">
	        <h1><?= $title ?></h1>
        </div>
	    <div class="col-md-6 text-box" style="color: #fff">
	        <h3>We are pretty active in hosting events and encouraging students to participate in those events</h3>
	    </div>
	</div>
</div>
<div class="container-fluid text-col" style="">
	<div class="col-md-6" style="margin-bottom:30px;">
		<div id="map" style="height: 400px"></div>
	</div>
	<div class="col-md-6">
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
					<textarea class="form-control"  rows="8" placeholder="Message" name="message"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-9">
					<input type="submit" name="submit" value="Send Message" class="btn btn-primary" />
				</div>
			</div>
		</form>
	</div>
</div>