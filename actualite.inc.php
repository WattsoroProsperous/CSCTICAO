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

				<div class="container py-4">

					<div class="row">
						<div class="col-lg-3 order-lg-2">
							<aside class="sidebar">
								<form action="page-search-results.html" method="get">
									<div class="input-group mb-3 pb-1">
										<input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
										<button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
									</div>
								</form>
								<h5 class="font-weight-semi-bold pt-4">Catégories</h5>
								<ul class="nav nav-list flex-column mb-5">
									<li class="nav-item"><a class="nav-link" href="#">Sport (3)</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Culture (2)</a></li>
									<li class="nav-item"><a class="nav-link" href="#">TIC (1)</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Autres (1)</a></li>
								</ul>
								<div class="tabs tabs-dark mb-4 pb-2">
									<ul class="nav nav-tabs">
										<li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popular</a></li>
										<li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recent</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="index.php?cs=Lect">
																<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="index.php?cs=Lect">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2022
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="index.php?cs=Lect">
																<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="index.php?cs=Lect">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2022
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="index.php?cs=Lect">
																<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="index.php?cs=Lect">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Nov 10, 2022
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="index.php?cs=Lect">
																<img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="index.php?cs=Lect">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2022
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="index.php?cs=Lect">
																<img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="index.php?cs=Lect">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Nov 10, 2022
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail img-thumbnail-no-borders d-block">
															<a href="index.php?cs=Lect">
																<img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="index.php?cs=Lect">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Nov 10, 2022
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<h5 class="font-weight-semi-bold">Derniers Twittes</h5>
								<div id="tweet" class="twitter mb-4" data-plugin-tweets data-plugin-options="{'username': 'cscticao', 'count': 2}">
									<p>Please wait...</p>
								</div>
							</aside>
						</div>
						<div class="col-lg-9 order-lg-1">
							<div class="blog-posts">

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Inauguration du Centre Ivoiro-Coréen Alassane OUATTARA</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Arbre de noel pour les enfants de la commune d'Attécoubé</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Inauguration du Centre Ivoiro-Coréen Alassane OUATTARA</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Arbre de noel pour les enfants de la commune d'Attécoubé</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Inauguration du Centre Ivoiro-Coréen Alassane OUATTARA</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Arbre de noel pour les enfants de la commune d'Attécoubé</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Inauguration du Centre Ivoiro-Coréen Alassane OUATTARA</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<article class="post post-medium">
									<div class="row mb-3">
										<div class="col-lg-5">
											<div class="post-image">
												<a href="index.php?cs=Lect">
													<img src="img/blog/medium/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
												</a>
											</div>
										</div>
										<div class="col-lg-7">
											<div class="post-content">
												<h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2"><a href="index.php?cs=Lect">Arbre de noel pour les enfants de la commune d'Attécoubé</a></h2>
												<p class="mb-0">Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col">
											<div class="post-meta">
												<span><i class="far fa-calendar-alt"></i> January 10, 2022 </span>
												<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
												<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
												<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
												<span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="index.php?cs=Lect" class="btn btn-xs btn-light text-1 text-uppercase">Lire plus</a></span>
											</div>
										</div>
									</div>
								</article>

								<ul class="pagination float-end">
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>

							</div>
						</div>
					</div>

				</div>
				<?php include('Startups.inc.php'); ?>

			</div>
