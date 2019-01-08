<?php
require_once 'core/init.php';

if(isset($_SESSION['is_login']) && $_SESSION['is_login'] ) {
	header('location:'.base_url());
}

if(isset($_POST['submit']) && !empty($_POST['submit'])) {


	if(empty(trim($_POST['name']))) {
		$errors['name'][]= "Name is required";
	}else if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
		$errors['name'][]= "Only letters and white space allowed";
	}

	if(empty(trim($_POST['surname']))) {
		$errors['surname'][]= "Surname is required";
	}else if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
		$errors['surname'][]= "Only letters and white space allowed";
	}

	if(empty(trim($_POST['email']))) {
		$errors['email'][]= "Email is required";
	}else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errors['email'][]= "Invalid email format";
	}else if (email_exists($_POST['email'])) {
		$errors['email'][]= "Email already exists";
	}

	if(empty(trim($_POST['password']))) {
		$errors['password'][]= "Password is required";
	}else if(strlen($_POST['password']) < 6 || strlen($_POST['password']) > 20 ) {
		$errors['password'][]= "Password should be between 6 and 20 characters";
	}

	if( $_POST['password'] !== $_POST['confirm_password']) {
		$errors['confirm_password'][]= "Confirm password should match password";
	}

	if(empty($errors)) {
		$register_data = array(
			'name'=>xss_clean($_POST['name']),
			'surname' => xss_clean($_POST['surname']),
			'email'=>xss_clean($_POST['email']),
			'password'=>password_hash($_POST['password'],PASSWORD_BCRYPT),
			'created_at'=>date('Y-m-d H:i:s'),
			'updated_at'=>date('Y-m-d H:i:s'),

		);


		$fields = '`'.implode("`,`",array_keys($register_data)).'`';
		$values = "'".implode("','", array_values($register_data))."'";
		$sql = "INSERT INTO users ($fields) VALUES ($values)";

		if ($conn->query($sql) === TRUE) {

			set_flashdata('success_msg','Register_successfully!Please login to continue');

		    header('location:'.base_url().'einloggen.php');
		    exit;
		} else {
			set_flashdata('error_msg','Somthing went wrong');
		   // echo "Error: " . $sql . "<br>" . $conn->error;
		}


	}else{
		//dd($errors);
	}
}
?>

</html><!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="./register.css">
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
									
				<div class="row">	
				
					<div class="col-md-5 login_left">
					<?php require_once 'template/partials/flash_message.php'; ?>	
					<h1 class="text-center"> ICH BIN NEU BEI KOKETT </h1>
					<form id="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						<div>
						<label class="label control-label">Vorname*</label>
						<div class="input-group <?php echo has_error('name') ? 'has-error' : '' ; ?>">	
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="name" name="name" class="form-control" placeholder="Vorname" value="<?php echo old_value('name'); ?>" required>
							
						</div>
						<?php if(has_error('name') ){ ?>	
							<div class="error clear-fix">
								<?php echo get_error('name');?>
							</div>
							<?php } ?>
						</div>
					<div>
						<label class="label control-label">Nachname*</label>
						<div class="input-group <?php echo has_error('surname') ? 'has-error' : '' ; ?>">	
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="name" name="surname" class="form-control" placeholder="Nachname" required value="<?php echo old_value('surname'); ?>" >						
					</div>
					<?php if(has_error('surname') ){ ?>	
							<div class="error clear-fix">
								<?php echo get_error('surname');?>
							</div>
					<?php } ?>
					</div>
					<div>
					<label class="label control-label">Passwort*</label>
					<div class="input-group <?php echo has_error('password') ? 'has-error' : '' ; ?>">	
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="password" class="form-control" placeholder="Passwort" required >						
					</div>
					<?php if(has_error('password') ){ ?>	
							<div class="error clear-fix">
								<?php echo get_error('password');?>
							</div>
					<?php } ?>
					</div>
					<div>
					<label class="label control-label">Passwort wiederholen*</label>
					<div class="input-group <?php echo has_error('confirm_password') ? 'has-error' : '' ; ?>">	
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="confirm_password" class="form-control" placeholder="Passwort" required >						
					</div>
					<?php if(has_error('confirm_password') ){ ?>	
							<div class="error clear-fix">
								<?php echo get_error('confirm_password');?>
							</div>
					<?php } ?>
					</div>
					<div>
					<label class="label control-label">E-Mail*</label>
					<div class="input-group <?php echo has_error('email') ? 'has-error' : '' ; ?>">	
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="email" class="form-control" placeholder="E-Mail"  required value="<?php echo old_value('email'); ?>" >						
					</div>
					<?php if(has_error('email') ){ ?>	
							<div class="error clear-fix">
								<?php echo get_error('email');?>
							</div>
							<?php } ?>
					</div>
					<div class="check-agb" >
						<input type="checkbox" id="agb" name="AGB"  required=""> 
						<label for="agb" class="text-agb">Ich habe die AGB gelesen und stimme zu</label>
						<div class="error agb-error">
						</div>
					</div>
												
					<button type="submit" class="btn btn-primary" name="submit" value="submit"> NEU ANMELDEN </button>
					

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
		<script type="text/javascript">
			
			$('#register-form').submit(function(){
				$('.agb-error').html("");
				if(!$('#agb').is(':checked')) {
					$('.agb-error').html("Please accept term and conditions.");
					return false;
				}
				return true;
			})
		</script>
		
	</body>
	


			
			
			
			
			
			
			
			
			