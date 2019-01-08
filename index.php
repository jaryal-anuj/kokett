<?php
require_once 'core/init.php';

?>

</html><!DOCTYPE html>
	<head>
		<link rel="stylesheet" href="./home.css">
		<?php require_once 'template/partials/head.php'; ?>
		<!-- Language -->
		<script type="text/javascript">
			var arrLang = {
				'de' : {
					'home' : 'HOME',
					'frisoerin' : 'FÜR FRISÖRIN',
					'haarschnitt' : 'HAARSCHNITT', 
					'einloggen' : 'EINLOGGEN | REGISTRIEREN'
				},
				'en' : {
					'home' : 'HOME',
					'frisoerin' : 'FÜR FRISÖRIN',
					'haarschnitt' : 'HAARSCHNITT', 
					'einloggen' : 'EINLOGGEN | REGISTRIEREN'
				},
				'fr' : {
					'home' : 'HOME',
					'frisoerin' : 'COIFFEUSE',
					'haarschnitt' : 'NOS MODELES', 
					'einloggen' : 'CONNEXION | INSCRIPTION'
				},
			};
			
			$(function(){
				$('.translate').click(function(){
					var lang = $(this).attr('id');
					
					$('.lang').each(function(index, element){
						$(this).text(arrLang[lang][$(this).attr('key')]);
					});
				});
			});
			
		</script>
		
	</head>
	
	<body>
		<header>
			<div class="container">
				<div class="logo">
					<img src="img022.jpg">
				
				</div>
				
				<?php require_once 'template/partials/navbar.php'; ?>
			
			</div>	
			
			<div class="main_slogan">
				<h1 id="slogan_titel">Erwecken Sie Ihre Frisur</h1>
				<h4> Faire Preise * Mobile und flexible Frisörinnen</h4>
			
			</div>
			
			
			<div class="main_search">
				<h1 id="search_titel">Frisörin finden</h1>
				
				<div class="modal-body">
					<form>
					<!--	<div class="form-group">
							 <label for="inputBookingDay">An welchem Tag</label> 
							<input class="form-control" placeholder="Beliebiges Datum" type="date" id="inputBookingDay">
						</div>	-->
										
						<div class="form-group">
							<!-- <label for="inputBookingCut">Welche Frisur</label> -->
							<select class="form-control">
								<option value="0" selected>Frisur auswählen</option>
								<option value="1">Ethnik</option>
								<option value="2">&nbsp;&nbsp;&nbsp;&nbsp;Tissage</option>
								<option value="3">&nbsp;&nbsp;&nbsp;&nbsp;Cornrows/Nattes collées</option>
								<option value="4">&nbsp;&nbsp;&nbsp;&nbsp;Bantu knots</option>
								<option value="5">&nbsp;&nbsp;&nbsp;&nbsp;Locks</option>
								<option value="6">&nbsp;&nbsp;&nbsp;&nbsp;Vanille(twists)</option>
								<option value="7">&nbsp;&nbsp;&nbsp;&nbsp;Braids</option>
								<option value="8">Hair Cut</option>
								<option value="9">&nbsp;&nbsp;&nbsp;&nbsp;Lang</option>
								<option value="10">&nbsp;&nbsp;&nbsp;&nbsp;Kurz</option>
								<option value="11">&nbsp;&nbsp;&nbsp;&nbsp;Mittel Lang</option>
								<option value="12">&nbsp;&nbsp;&nbsp;&nbsp;Bob</option>
								<option value="13">Haare färben</option>
								<option value="14">Event-Haarschnitte</option>
								<option value="15">Andere</option>											
							</select>
						</div>
					
						<div class="form-group">
							<!-- <label for="inputBookingPlace">Wo soll das stattfinden</label> -->
								<select class="form-control">
									<option value="0" selected>Wo soll das stattfinden</option>
									<option value="1">Bei Ihnen zu Hause</option>
									<option value="2">Bei der Frisörin</option>
									<option value="3">Im Frisörsalon</option>
								</select>
						</div>
																				
						<div class="form-group">
							<!-- <label for="inputBookingYourPlace">Dein Ort</label>  -->
								<input class="form-control" placeholder="Aktueller Standort" type="text" 								id="inputBookingYourPlace">
						</div>
						
						<div class="form-group">
							<!-- <label for="inputBookingYourPlace">Sprache</label> -->
								<select class="form-control">
									<option value="0" selected>Sprache der Frisörin auswählen</option>
									<option value="1">Deutsche</option>
									<option value="2">Französisch</option>
									<option value="3">Englisch</option>
									<option value="3">Türkçe</option>
									<option value="3">hrvatski</option>
									<option value="3">polski</option>
									<option value="3">Potuguês</option>
									<option value="3">Español</option>
									<option value="3">Italiano</option>
									<option value="3">العربية</option>
									<option value="3">русский</option>
								</select>
						</div>
						
					</form>
				</div> 
																
								
				<!-- Buttons für den Popover für Frisur	-->
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary btn_search">Suchen</button>
				</div>								
						
		  	</div>				
			
		</header>
		
		
		<!-- Section für Informationen-->
		<section id="infos_block">
			<div class="infos_container">			
				<!-- Block 1. Vorteil -->
				<div id="block_infos1">
					<div class="vorteil_title">
						<h3>Warum Kokett?</h3>
					</div>
					<div class="text_vorteil">
						<h5>Kokett vous permet, de manière simple et sécurisée, de mettre votre espace disponible en location, qu'il s'agisse d'une chambre ou d'un logement entier. Vous complétez ainsi vos revenus et vous rencontrez des voyageurs du monde entier à la recherche d'un logement unique.
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 

						</h5>
					</div>							
				</div>
			
				<!-- Block 2. Vorteil -->
				<div id="block_infos2">
					<div class="vorteil_title">
						<h3>Wir begleiten Sie </h3>
					</div>
					<div class="text_vorteil">
						<h5>Kokett vous permet, de manière simple et sécurisée, de mettre votre espace disponible en location, qu'il s'agisse d'une chambre ou d'un logement entier. Vous complétez ainsi vos revenus et vous rencontrez des voyageurs du monde entier à la recherche d'un logement unique.
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 

						</h5>
					</div>
				</div>
			
				<!-- Block 3. Vorteil -->
				<div id="block_infos3">
					<div class="text_vorteil_title">
						<h3>Frisörin bei Kokett</h3>
					</div>
					<div class="text_vorteil">
						<h5>Kokett vous permet, de manière simple et sécurisée, de mettre votre espace disponible en location, qu'il s'agisse d'une chambre ou d'un logement entier. Vous complétez ainsi vos revenus et vous rencontrez des voyageurs du monde entier à la recherche d'un logement unique.
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 

						 </h5>
					</div>			
				</div>	

			</div>
			
			<div id="infos_line">
			
			</div>
			
		</section>
		
			
		<!-- Wie funktioniert kokett -->
		<section class="function_process">
			<div id="infos_process">
				<h1>Frisörin finden: Wie funktioniert Kokett?</h1>
			</div>
			
			<div id="block_process1">
				<div id="text_process1">
					<h4>1. Frisörin suchen</h4>
					<h5>
						Kokettvous permet, de manière simple et sécurisée, de mettre votre espace disponible en location, qu'il s'agisse d'une chambre ou d'un logement entier. Vous complétez ainsi vos revenus et vous rencontrez des voyageurs du monde entier à la recherche d'un logement unique.
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   
						
						
					</h5>
				</div>
				
				<div id="process_img1">
					<img class="process_img" src="img003.jpg">
				</div>
				
			</div>
			
			
			<div id="block_process2">
				<div id="process_img2">
					<img class="process_img" src="img004.jpg">
				</div>
				
				<div id="text_process2">
					<h4>2. Frisörin kontaktieren</h4>			
					<h5>Kokettvous permet, de manière simple et sécurisée, de mettre votre espace disponible en location, qu'il s'agisse d'une chambre ou d'un logement entier. Vous complétez ainsi vos revenus et vous rencontrez des voyageurs du monde entier à la recherche d'un logement unique.
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

					</h5>
				</div> 
			
				
			</div>
			
			<div id="block_process3">

				<div id="text_process3">
					<h4>3. Sich bequem behandeln lassen</h4>			
					<h5>Kokettvous permet, de manière simple et sécurisée, de mettre votre espace disponible en location, qu'il s'agisse d'une chambre ou d'un logement entier. Vous complétez ainsi vos revenus et vous rencontrez des voyageurs du monde entier à la recherche d'un logement unique.
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.   

					</h5>
				</div> 
			
				<div id="process_img3">
					<img class="process_img" src="img005.jpg">
				</div>
						
			</div>
			
		</section>
		
		<!-- Direkte Registrierung -->
		<section id="block_register">
			<div id="image_register">
				<img id="img_direct_register" src="img006.jpg" >
			</div>
			<div id="register_commentar">
				<h3>Magst du Anderen zu frisieren? </h3> 
				<h1></h1>
				<h1></h1>
				<h5> Dann registiere dich und wird ein Teil der Kokett Community</h5> 
				<h1></h1>
				<h1></h1>
				<button type="submit" class="btn btn-primary btn_register" onclick="location.href='/dregister.html'" >Registrieren</button>
			</div>
			
		</section>

		
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
	


			
			
			
			
			
			
			
			
			