<?php require 'header.php' ?>
<?php require 'backend/config.php' ?>
<?php require 'backend/userLogin.php' ?>

<?php $passkey = false;
$userExist = false;
$username = getUsernameFromCookie();
if ($username) {
	$userExist = true;
} ?>


<div class="content-auth">
	<?php require 'header-main.php'; ?>
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<?php
			 if (!$userExist) {
			?>
			<form class="login" action="backend/userLogin.php" method="post">
				<h2>Login</h2>
				<hr>
				<section>
					<label for="user">Username</label></br>
					<input type="textbox" name="username" placeholder=""><br/>
				</section>
				<section>
					<label for="password">Password</label></br>
					<input type="password" name="password" placeholder=""><br/>
				</section>
				<input type="submit" name="submit" value="login" class="submit-auth">
			</form>
			<?php } else { ?>
				 <form class="login">
					 <h2>Username</h2>
					 <hr>
					 <section>
						 <p style="padding-bottom: 20px;"><?php echo $username; ?></p>
					 </section>
				 </form>
			<?php }?>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6">
			<form class="register" action="backend/insertUser.php" method="post">
				<h2>Register</h2>
				<hr>
				<section>
					<label for="user">Username</label></br>
					<input type="textbox" name="username" placeholder=""><br/>
				</section>
				<section>
					<label for="password">Password</label></br>
					<input type="password" name="password" placeholder=""><br/>
				</section>
				<section>
					<label for="email">Email Address</label></br>
					<input type="email" name="email" placeholder=""><br/>
				</section>
				<input type="submit" name="submit" value="login" class="submit-auth">
			</form>
		</div>
	</div>
</div>



<?php require 'footer.php'; ?>
