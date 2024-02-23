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
					<div class="container py-4">
						<div class="row box-shadow-4 mx-3 mx-xl-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
							<div class="col-lg-6 px-0">
								<div class="bg-light h-100">
									<div class="d-flex flex-column justify-content-center p-5 h-100 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
										<div class="pb-5 mb-4 mt-5 mt-lg-0">
											<div class="d-flex flex-column flex-md-row align-items-center justify-content-center pe-lg-4">
												<img width="105" height="105" src="img/demos/business-consulting-3/icons/map-pin.svg" alt="Location" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mb-4 mb-md-0'}" style="width: 105px;" />
												<div class="text-center text-md-start ps-md-3">
													<h2 class="font-weight-semibold text-6 mb-1">CSCTICAO</h2>
													<p class="text-3-5 mb-0">Derrière le Lycée Technique,<br>
													  sur l'espace de l'ancien bidonville &quot;Washinton&quot; <br>
													  Abidjan 08 BP 2277</p>
												</div>
											</div>
										</div>
										<div class="row justify-content-center mb-5 mb-lg-0">
											<div class="col-auto text-center ms-xl-auto mb-4 mb-xl-0">
												<h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">RECEPTION</h3>
												<div class="d-flex">
													<img width="25" height="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
													<a href="tel:8001234567" class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-6 ms-2">+1234567890 </a>												</div>
											</div>
											<div class="col-auto text-center me-xl-auto">
												<h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">RESERVATION</h3>
												<div class="d-flex">
													<img width="25" height="25" src="img/demos/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
													<a href="tel:8001234567" class="text-color-dark text-color-hover-primary font-weight-semibold text-decoration-none text-6 ms-2">+1234567890 </a>												</div>
											</div>
											<div class="col-auto text-center pt-4 mt-5">
												<h3 class="font-weight-semibold text-color-primary text-3-5 mb-0">Nous écrire </h3>
												<div class="d-flex">
													<img width="25" height="25" src="img/demos/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}" />
													<a href="mailto:information@cscticao.ci" class="text-color-dark text-color-hover-primary text-decoration-underline font-weight-semibold text-5-5 wb-all ms-2">information@cscticao.ci</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 px-0">
								<div class="bg-dark h-100">
									<div class="text-center text-md-start p-5 h-100 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
										<h2 class="text-color-light font-weight-medium mb-4 mt-5 mt-lg-0">Nous écrire pour en savoir plus sur nos services</h2>
										<p class="text-3-5 font-weight-medium mb-4">Nous sommes à votre écoute, de 8h à 17h. Nous vous garantissons une réponse en moins de 24h, les jours ouvrables. </p>
										<form class="contact-form form-style-4 form-placeholders-light form-errors-light mb-5 mb-lg-0" action="php/contact-form.php" method="POST">
											<div class="contact-form-success alert alert-success d-none mt-4">
												<strong>Success!</strong> Your message has been sent to us.											</div>

											<div class="contact-form-error alert alert-danger d-none mt-4">
												<strong>Error!</strong> There was an error sending your message.
												<span class="mail-error-message text-1 d-block"></span>											</div>

											<div class="row">
												<div class="form-group col">
													<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="name" placeholder="* Nom et prénoms" required>
												</div>
											</div>
											<div class="row">
												<div class="form-group col">
													<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="email" placeholder="* Adresse E-mail" required>
												</div>
											</div>
											<div class="row mb-4">
												<div class="form-group col">
													<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="message" placeholder="* Message" required></textarea>
												</div>
											</div>
											<div class="row">
												<div class="form-group col">
													<button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-loading-text="Loading..." data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
														<span>Envoyer le message !</span>													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps2" class="google-map m-0" style="height: 500px;"></div>

			</div>
