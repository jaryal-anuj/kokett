<?php
require_once 'core/init.php';

if(isset($_SESSION['is_login']) && $_SESSION['is_login'] ) {
	header('location:'.base_url());
}
if(isset($_POST['submit']) && !empty($_POST['submit'])) {


	if(empty(trim($_POST['email']))) {
		$errors['email'][]= "Email is required";
	}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'][]= "Invalid email format";
	}

	if(empty(trim($_POST['password']))) {
		$errors['password'][]= "Password is required";
	}else if(strlen($_POST['password']) < 6 || strlen($_POST['password']) > 20 ) {
		$errors['password'][]= "Password should be between 6 and 20 characters";
	}

	if(empty($errors)) {
		$email = xss_clean($_POST['email']);
		$password = xss_clean($_POST['password']);

		$sql = "SELECT * FROM users WHERE email='".$email."'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    // output data of each row
		    $user = $result->fetch_assoc();

		    if(password_verify($password, $user['password'])){
			    $_SESSION['is_login'] = true;
			    $_SESSION['user_id'] = $user['id'];
			    $_SESSION['name'] = $user['name']." ".$user['surname'];
			    header('location:'.base_url());
			}else{
				set_flashdata('error_msg','Password does not match!');

			}
		} else {
		    set_flashdata('error_msg','No user found!');
		}


	}else{
		//dd($errors);
	}
}

?>
</html><!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="./einloggen.css">
		<?php require_once 'template/partials/head.php'; ?>
	</head>
	
	<body>
		<header>
			<div class="container">
				<div class="logo">
					<img src="img022.jpg">				
				</div>
				
				<?php require_once 'template/partials/navbar.php'; ?>		
			</div>	
									
		</header>
		
		
		<!-- Section -->				
			<div class="infos_container">		
									
				<div class="row" id="loginPopover">	
				
					<div class="col-md-5 login_left" style="padding-top: 10px;">
						<?php require_once 'template/partials/flash_message.php'; ?>

						<h1 class="text-center"> ICH HABE BEREITS EIN KOKETT-KONTO </h1>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
							<div>
							<label class="label control-label">E-Mail Adresse*</label>
							<div class="input-group <?php echo has_error('email') ? 'has-error' : '' ; ?>" >	
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="text" name="email" class="form-control" placeholder="E-Mail" required value="<?php echo old_value('email'); ?>" >						
							</div>
							<?php if(has_error('email') ){ ?>	
							<div class="error clear-fix">
								<?php echo get_error('email');?>
							</div>
							<?php } ?>
							</div>
							<div>
							<label class="label control-label">Passwort*</label>
							<div class="input-group <?php echo has_error('password') ? 'has-error' : '' ; ?>">	
								<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
								<input type="password" name="password" class="form-control" required placeholder="Passwort" >						
							</div>
							<?php if(has_error('password') ){ ?>	
								<div class="error clear-fix">
									<?php echo get_error('password');?>
								</div>
							<?php } ?>
							</div>
								
							<div class="row">	
								<div class="col-md-6">	
									<input type="checkbox"><small>Anmelden bleiben</small>
								</div>
								<div class="col-md-6">	
									<a href="#"><p class="text-right">Passwort vergessen?</p></a>
								</div>
							</div>
													
							<button type="submit" class="btn btn-primary" name="submit" value="submit"> EINLOGGEN </button>

						</form>
						
					</div> <!-- cl-md-5-->
					
					<!--
					<div class="col-md-5 login_right">	
						<h1 class="text-center"> ICH BIN NEU BEI KOKETT </h1>
						<form action="validation.php" method="post" >
							<label class="label control-label">Vorname*</label>
							<div class="input-group">	
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="name" name="lastname" class="form-control" placeholder="Vorname" required>						
							</div>
							
							<label class="label control-label">Nachname*</label>
							<div class="input-group">	
								<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
								<input type="name" name="firstname" class="form-control" placeholder="Nachname" required >						
							</div>
							
						<label class="label control-label">Passwort*</label>
						<div class="input-group">	
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="Passwort" name="Passwort" class="form-control" placeholder="Passwort" required >						
						</div>
						
						<label class="label control-label">Passwort wiederholen*</label>
						<div class="input-group">	
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="Passwort" name="Passwort" class="form-control" placeholder="Passwort" required >						
						</div>
						
						<label class="label control-label">E-Mail*</label>
						<div class="input-group">	
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="mail" class="form-control" placeholder="E-Mail"  required >						
						</div>
													
							<button type="submit" class="btn btn-primary"> NEU ANMELDEN </button>

						</form>
												
					</div> <!-- cl-md-5-->
				
					</div> <!--lrow-->	
		
				
			</div>	<!--infos container-->
		
		
	
		<!-- Footer -->
		<footer>
			
			<!-- Block Contact -->
			<div id="block_service">
				<div class="logo-footer">
					<img src="img022.jpg">				
				</div>
				<div class="slogan-text">
					<p id="slogan-text">ERWECKEN SIE IHRE FRISUR !</p>	
				</div>
				<div class="contact">
					<p id="contact-text">KONTAKTIEREN SIE UNS FÜR MEHR INFORMATIONEN</p>	
				</div>
				<div class="contact-mail">
					<p id="contact-mail-text">contact@kokett.net</p>	
				</div>
				
			</div>
			
			
			<!-- Block Network -->
			<div id="block_network">
				<h4>Folgen Sie uns auf</h4>
				<img class="block_network_img" src="img011.jpg" >
				<img class="block_network_img" src="img012.jpg" >
				<img class="block_network_img" src="img013.jpg" >
						
			</div>
			
			<!-- Block Firme -->
			<div id="block_law">
				<h4>Unternehmen</h4>
				<ul class="block_law_nav">
				<li><a href="file:///Users/koukissa/Desktop/Projekte/Projekt%20-%20Webseite/web/u%CC%88ber_uns.html">Über uns</a></li>
				<li><a href="index.html1">Datenschutzerklärung</a></li>
				<li><a href="index.html1">Impressum</a></li>
			</ul>
			</div>
			
			
		</footer>
		
		
	</body>
	


			
			
			
			
			
			
			
			
			