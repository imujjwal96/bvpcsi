<div class="container-fluid text-col" style="background-color: #884a7b;">
	<div class="row">
	    <div class="col-md-6 text-box" style="color: #fff">
	        <h1><?= $title ?></h1>
        </div>
	    <div class="col-md-6 text-box" style="color: #fff">
	        <h3>Get Resources of our workshops and events by signing in to our portal</h3>
	    </div>
	</div>
</div>
<div class="container-fluid text-col" style="">
	<div class="row">
	    <div class="col-md-6" style="color: #aaa">
			<div class="login-page">
				<div class="form login-box">
					<h4>Login With</h4><br>
					<br>
					<a href="https://www.facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					<a href="https://www.plus.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
				</div>
			</div>
        </div>
	    <div class="col-md-6" style="color: #aaa">
		   <div class="login-page">
				<div class="form">
					<h4><?= $err;?></h4>
					<h4>Login With Email</h4><br>
					<form class="register-form" method="POST" action="register.php">
					  <input type="text" placeholder="Name" name="name"/>
					  <input type="email" placeholder="Email Address" name="email"/>
					  <input type="password" placeholder="Password" name="password"/>
					  <button type="submit" name="signup">SignUp</button>
					  <p class="message">Already registered? <a href="#">Sign In</a></p>
					</form>
					<form class="login-form" method="POST" action="login.php">
					  <input type="email" placeholder="Email Address" name="email"/>
					  <input type="password" placeholder="Password" name="password"/>
					  <button type="submit" name="login">Login</button>
					  <p class="message">Not registered? <a href="#">Create an account</a></p>
					</form>
				</div>
			</div>
	    </div>
	</div>
</div>