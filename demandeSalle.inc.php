<?php //PHP ADODB document - made with PHAkt 3.7.1?>
<div role="main" class="main">

				<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyload" data-bg-src="img/fd_header_in.jpg" style="background-size: cover; background-position: center;">
					<div class="container pb-5 my-3">
						<div class="row mb-4">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="font-weight-bold text-color-white text-10"><?php echo $NomPage; ?></h1>
							</div>
						</div>
					</div>
					<div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
							<polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "/>
							<polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "/>
						</svg>
					</div>
				</section>

				<section class="section section-height-3 bg-light border-0 pt-4 m-0 lazyload" data-bg-src="img/demos/business-consulting-3/backgrounds/background-6.jpg" style="background-size: 100%; background-repeat: no-repeat;">
					<div class="container">

					<div class="row py-4">
						<div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">

							<div class="offset-anchor" id="contact-sent"></div>

							<?php
							if (isset($arrResult)) {
								if($arrResult['response'] == 'success') {
								?>
								<div class="alert alert-success">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
								<?php
								} else if($arrResult['response'] == 'error') {
								?>
								<div class="alert alert-danger">
									<strong>Error!</strong> There was an error sending your message.
									<span class="font-size-xs mt-2 d-block"><?php echo $arrResult['errorMessage'];?></span>
								</div>
								<?php
								}
							}
							?>

							<h2 class="font-weight-bold text-7 mt-2 mb-0">Renseignez le formulaire ci-dessous </h2>
							<p class="mb-4">N'hésitez pas à demander des détails, en nous contactant !</p>

							<form id="contactFormAdvanced" action="<?php echo basename($_SERVER['PHP_SELF']); ?>#contact-sent" method="POST" enctype="multipart/form-data">
							<input type="hidden" value="true" name="emailSent" id="emailSent">
							<div class="featured-box featured-box-primary text-start mt-0">
								<div class="box-content">
									<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Vos coordonnées</h4>
										<div class="row">
											<div class="form-group col-md-12">
												<label class="form-label mb-1 text-2">Identifiez vous !</label>
												<select data-msg-required="Please enter the subject." class="form-control text-3 h-auto py-2" name="subject" id="subject" required>
													<option value="">- Sélectionner -</option>
													<option value="Un particulier">Un particulier</option>
													<option value="Une association">Une association</option>
													<option value="Une entreprise">Une entreprise</option>
													<option value="Autre">Autre ...</option>
												</select>
											</div>
										</div>
										<div class="row">
											
											<div class="form-group col-md-12">
												<p class="mb-2">Civilité </p>
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio1" value="Homme"> Homme
													</label>
												</div>
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="radios" data-msg-required="Please select at least one option." id="inlineRadio2" value="Femme"> Femme
													</label>
												</div>
												
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-6">
												<label class="form-label mb-1 text-2">Nom</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" id="name" required>
											</div>
											<div class="form-group col-md-6">
												<label class="form-label mb-1 text-2">Prénoms</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="surname" id="surname" required>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-6">
												<label class="form-label mb-1 text-2">Téléphone</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="Telephone" id="Telephone" required>
											</div>
											<div class="form-group col-md-6">
												<label class="form-label mb-1 text-2">Adresse Email </label>
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" id="email" required>
											</div>
										</div>
									</div>
								</div>
							<div class="featured-box featured-box-primary text-start mt-0">
								<div class="box-content">
									<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Votre réservation</h4>
									<div class="row">
										<div class="form-group col-md-12">
											<label class="form-label mb-1 text-2">Nom de l'organisme</label>
											<input type="text" value="" data-msg-required="Please enter your organisme name." maxlength="100" class="form-control text-3 h-auto py-2" name="organisme" id="organisme" required>
										</div>
									</div>
									<div class="row">
												<div class="col-lg-12">
													<label for="createAccount-1">Sélectionner votre/vos salle(s) !</label>
													<div class="custom-checkbox-1">
														<input id="createAccount-1" type="checkbox" name="Gymnase" value="Le Gymnase" />
														<label for="createAccount-1">Le Gymnase</label>
													</div>
													<div class="custom-checkbox-1">
														<input id="createAccount-2" type="checkbox" name="Polyvalente" value="Salle Polyvalente" />
														<label for="createAccount-2">Salle Polyvalente</label>
													</div>
													<div class="custom-checkbox-1">
														<input id="createAccount-3" type="checkbox" name="Multimédia" value="Salle Multimédia" />
														<label for="createAccount-3">Salle Multimédia</label>
													</div>
													<div class="custom-checkbox-1">
														<input id="createAccount-4" type="checkbox" name="Bibliothèque" value="La Bibliothèque" />
														<label for="createAccount-4">La Bibliothèque</label>
													</div>
													<div class="custom-checkbox-1">
														<input id="createAccount-5" type="checkbox" name="SalleClasse" value="Salle de classe" />
														<label for="createAccount-5">Salle de classe</label>
													</div>
													<div class="custom-checkbox-1">
														<input id="createAccount-6" type="checkbox" name="Parking" value="Le Parking" />
														<label for="createAccount-6">Le Parking</label>
													</div>
												</div>
												
											</div>
									<br />
									<div class="row">
	
										<div class="form-group col-md-8">
											<label class="form-label mb-1 text-2">Objet de la réservation</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="objet" id="objet" required>
										</div>
										<div class="form-group col-md-4">
											<label class="form-label mb-1 text-2">Nombre de participants</label>
											<input type="number" class="form-control h-auto py-2" name="nombre" value="" required />
										</div>
									</div>
									<div class="row">
										
										<div class="form-group col-md-12">
											<p class="mb-2">Entrée payante ? </p>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="radio" name="entree" data-msg-required="Please select at least one option." id="inlineRadio1" value="oui"> oui
												</label>
											</div>
											<div class="form-check form-check-inline">
												<label class="form-check-label">
													<input class="form-check-input" type="radio" name="entree" data-msg-required="Please select at least one option." id="inlineRadio2" value="non"> non
												</label>
											</div>
											
										</div>
									</div>
									</div>
								</div>
							<div class="featured-box featured-box-primary text-start mt-0">
								<div class="box-content">
									<h4 class="color-primary font-weight-semibold text-4 text-uppercase mb-3">Vos dates</h4>
										<div class="row">
											<div class="form-group col-md-6">
												<label class="form-label mb-1 text-2">début de réservation</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="debutreservation" id="debutreservation" required>
											</div>
											<div class="form-group col-md-6">
												<p class="mb-2">Heure de début de réservation </p>
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="h-debut" data-msg-required="Please select at least one option." id="inlineRadio1" value="Matin"> Matin
													</label>
												</div>
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="h-debut" data-msg-required="Please select at least one option." id="inlineRadio2" value="apres midi"> apres midi
													</label>
												</div>

											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-6">
												<label class="form-label mb-1 text-2">Fin de la réservation</label>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="debutreservation" id="debutreservation" required>
											</div>
											<div class="form-group col-md-6">
												<p class="mb-2">Heure de fin de réservation</p>
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="f-debut" data-msg-required="Please select at least one option." id="inlineRadio1" value="Matin"> Matin
													</label>
												</div>
												<div class="form-check form-check-inline">
													<label class="form-check-label">
														<input class="form-check-input" type="radio" name="f-debut" data-msg-required="Please select at least one option." id="inlineRadio2" value="apres midi"> apres midi
													</label>
												</div>

											</div>
										</div>
										<div class="row">
											<div class="form-group col-md-12">
												<label class="form-label mb-1 text-2">Autres dates susceptibles de vous convenir</label>
												<input type="text" value="" data-msg-required="Please enter anoter date." maxlength="100" class="form-control text-3 h-auto py-2" name="adate" id="adate" required>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-lg-12">
													<label for="createAccount-1"><a href="#" target="_blank">Consulter le règlement intérieur</a></label>
													<div class="custom-checkbox-1">
														<input id="createAccount-1" type="checkbox" name="createAccount" value="Le Gymnase" />
														<label for="createAccount-1">Je m'engage à respecter les règlements d'utilisation des salles *</label>
													</div>
							  </div>
							  <div class=" col-lg-3"><br />
									<input type="submit" value="ENVOYER" class="btn btn-primary btn-modern" >
								</div>
							</form>

						</div>
						<div class="col-lg-5">

							<div class="overflow-hidden mb-1">
								<h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Voir <strong>nos salles</strong></h4>
							</div>
							
							<div class="overflow-hidden mb-3">
								<p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">N'hésitez pas à nous contacter pour un rendez-vous, afin d'apprécier au mieux, et faire un choix correspondant effectivement à vos besoins.</p>
							</div>
							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
								<div class="row lightbox mt-4 mb-0 pb-0" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
									<div class="col-md-4 mb-4 mb-md-2">
										<a class="img-thumbnail p-0 border-0 d-block" href="img/office/our-office-1.jpg" data-plugin-options="{'type':'image'}">
											<img class="img-fluid" src="img/office/our-office-1.jpg" alt="Office">
										</a>
									</div>
									<div class="col-md-4 mb-4 mb-md-2">
										<a class="img-thumbnail p-0 border-0 d-block" href="img/office/our-office-2.jpg" data-plugin-options="{'type':'image'}">
											<img class="img-fluid" src="img/office/our-office-2.jpg" alt="Office">
										</a>
									</div>
									<div class="col-md-4 mb-4 mb-md-2">
										<a class="img-thumbnail p-0 border-0 d-block" href="img/office/our-office-3.jpg" data-plugin-options="{'type':'image'}">
											<img class="img-fluid" src="img/office/our-office-3.jpg" alt="Office">
										</a>
									</div>

									<div class="col-md-4 mb-4 mb-md-2">
										<a class="img-thumbnail p-0 border-0 d-block" href="img/office/our-office-1.jpg" data-plugin-options="{'type':'image'}">
											<img class="img-fluid" src="img/office/our-office-1.jpg" alt="Office">
										</a>
									</div>
									<div class="col-md-4 mb-4 mb-md-2">
										<a class="img-thumbnail p-0 border-0 d-block" href="img/office/our-office-2.jpg" data-plugin-options="{'type':'image'}">
											<img class="img-fluid" src="img/office/our-office-2.jpg" alt="Office">
										</a>
									</div>
									<div class="col-md-4 mb-4 mb-md-2">
										<a class="img-thumbnail p-0 border-0 d-block" href="img/office/our-office-3.jpg" data-plugin-options="{'type':'image'}">
											<img class="img-fluid" src="img/office/our-office-3.jpg" alt="Office">
										</a>
									</div>
									
									
								</div>
							</div>

							<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
								<h4 class="text-primary pt-5">Nous <strong>trouver !</strong></h4>
								<ul class="list list-icons list-icons-style-3 mt-2">
									<li><i class="fas fa-map-marker-alt top-6"></i> Situé sur l'espace de l'ancien bidonville "Whashitown", derriere le lycée technique d'Abidjan-Cocody.</li>
									<li><i class="fas fa-phone top-6"></i> <strong>Phone :</strong> (+225) 27 22 22 27 06 / 27 22 22 27 07</li>
									<li><i class="fas fa-envelope top-6"></i> <strong>E-mail :</strong> <a href="mailto:reservation@cscticao.ci">reservation@cscticao.ci</a></li>
								</ul>
								<h4 class="text-primary pt-5">Heures de <strong>reception</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Lundi - Vendredi : 07h30 à 17h00</li>
									<li><i class="far fa-clock top-6"></i> Samedi : 09h00 à 13h00</li>
									<li><i class="far fa-clock top-6"></i> Dimanche : fermée</li>
								</ul>
							</div>

						</div>

					</div>

				</div>
				</section>
				
				<?php include('Startups.inc.php'); ?>

			</div>
