@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper dark-bg-two">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="{{ URL::asset('assets/images/loader.svg')}}" alt="" class="m-auto d-block"> <span></span></div>
				<div class="txt-loading">
					<span data-text-preloader="P" class="letters-loading">
						P
					</span>
					<span data-text-preloader="I" class="letters-loading">
						I
					</span>
					<span data-text-preloader="K" class="letters-loading">
						K
					</span>
					<span data-text-preloader="U" class="letters-loading">
						U
					</span>
				</div>
			</div>
		</div>


		
		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-two sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index" class="d-flex align-items-center">
								<img src="{{ URL::asset('assets/images/logo/logo_02.svg')}}" alt="">
							</a>
						</div>
						<!-- logo -->
                        <div class="order-lg-2 me-auto ms-xxl-5 ps-5 d-none d-md-inline-block">
                            <p class="m0 fs-20 font-manrope fw-500">Call <a href="#" class="fw-600 text-white">+757 699-4478</a></p>
                        </div>
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li>
									<a href="login" class="login-btn-one fw-bold font-manrope tran3s"><i class="fa-regular fa-lock"></i> <span>Login</span></a>
                                </li>
								<li class="d-none d-md-inline-block ms-4">
                                    <a href="pricing-v1" class="btn-three">Free Trials</a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2 me-lg-auto">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index" class="d-block"><img src="{{ URL::asset('assets/images/logo/logo_02.svg')}}" alt=""></a></div></li>
									<li class="nav-item dropdown mega-dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Home
										</a>
										<ul class="dropdown-menu">
											<li class="pe-3 ps-3">
												<div class="row gx-3">
													<div class="col-lg-3">
														<a href="index" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home01.jpg')}}" alt="" class="w-100"></div>
															<span>Payment Service</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-2" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home02.jpg')}}" alt="" class="w-100"></div>
															<span>AI Writer</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-3" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home03.jpg')}}" alt="" class="w-100"></div>
															<span>Website Builder</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-4" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home04.jpg')}}" alt="" class="w-100"></div>
															<span>CRM</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-5" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home05.jpg')}}" alt="" class="w-100"></div>
															<span>Project Management </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-6" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home06.jpg')}}" alt="" class="w-100"></div>
															<span>Mobile App Landing</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-7" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home07.jpg')}}" alt="" class="w-100"></div>
															<span>Digital Agency</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-8" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home08.jpg')}}" alt="" class="w-100"></div>
															<span>Help Desk</span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-9" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home09.jpg')}}" alt="" class="w-100"></div>
															<span>Web Hosting </span>
														</a>
													</div>
													<div class="col-lg-3">
														<a href="index-10" class="home-item w-100">
															<div class="img-item"><img src="{{ URL::asset('assets/images/menu/home10.jpg')}}" alt="" class="w-100"></div>
															<span>Cyber Security</span>
														</a>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li class="nav-item dropdown mega-dropdown-sm">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Pages
										</a>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Essential</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="about-us-v1" class="dropdown-item"><span>About Us-1</span></a></li>
															<li><a href="about-us-v2" class="dropdown-item"><span>About Us-2</span></a></li>
															<li><a href="about-us-v3" class="dropdown-item"><span>About Us-3</span></a></li>
															<li><a href="team-v1" class="dropdown-item"><span>Team-1</span></a></li>
															<li><a href="team-v2" class="dropdown-item"><span>Team-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Features</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="service-v1" class="dropdown-item"><span>Service-1</span></a></li>
															<li><a href="service-v2" class="dropdown-item"><span>Service-2</span></a></li>
															<li><a href="service-v3" class="dropdown-item"><span>Service-3</span></a></li>
															<li><a href="service-details" class="dropdown-item"><span>Service Details</span></a></li>
															<li><a href="pricing-v1" class="dropdown-item"><span>Pricing-1</span></a></li>
															<li><a href="pricing-v2" class="dropdown-item"><span>Pricing-2</span></a></li>
															
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Others</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="faq-v1" class="dropdown-item"><span>FAQ-1</span></a></li>
															<li><a href="faq-v2" class="dropdown-item"><span>FAQ-2</span></a></li>
															<li><a href="login" class="dropdown-item"><span>Login</span></a></li>
															<li><a href="signup" class="dropdown-item"><span>Sign Up</span></a></li>
															<li><a href="404" class="dropdown-item"><span>404 Error</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
						            </li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Project
										</a>
										<ul class="dropdown-menu">
											<li><a href="project-v1" class="dropdown-item"><span>Project-1</span></a></li>
											<li><a href="project-v2" class="dropdown-item"><span>Project-2</span></a></li>
											<li><a href="project-v3" class="dropdown-item"><span>Project-3</span></a></li>
											<li><a href="project-v4" class="dropdown-item"><span>Project-4</span></a></li>
											<li><a href="project-v5" class="dropdown-item"><span>Project-5</span></a></li>
											<li><a href="project-v6" class="dropdown-item"><span>Project-6</span></a></li>
											<li><a href="project-details" class="dropdown-item"><span>Project Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a>
										<ul class="dropdown-menu">
											<li><a href="blog-v1" class="dropdown-item"><span>Blog Full Width</span></a></li>
											<li><a href="blog-v2" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog-v3" class="dropdown-item"><span>Blog 2 column</span></a></li>
											<li><a href="blog-details" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Contact
										</a>
										<ul class="dropdown-menu">
											<li><a href="contact-v1" class="dropdown-item"><span>Contact Us-1</span></a></li>
											<li><a href="contact-v2" class="dropdown-item"><span>Contact Us-2</span></a></li>
										</ul>
									</li>
									<li class="d-md-none ps-3 pe-3 mt-20">
										<a href="pricing-v1" class="btn-three w-100">Free Trials</a>
									</li>
									<li class="d-md-none ps-3 pe-3 mt-20">
										<p class="m0 fs-20 font-manrope text-center fw-500">Call <a href="#" class="fw-600 text-white">+757 699-4478</a></p>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!--
		=====================================================
			Team Section One
		=====================================================
		-->
		<div class="team-section-one position-relative z-1 mt-225 xl-mt-200 lg-mt-150 pb-150 lg-pb-80">
			<div class="container">
				<div class="position-relative">
					<div class="title-two text-center mb-30 lg-mb-10">
						<h2>Our Talented Team</h2>
					</div>

					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_28.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>Owner & Founder</span>
									<h5>Mark Fernando</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_29.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>Engineer</span>
									<h5>Jubayer Al Hasan</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_30.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>Manager</span>
									<h5>Muhibbur Rashid</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_31.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>HR Admin</span>
									<h5>Elina Gomez</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_80.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>Manager</span>
									<h5>Muhibbur Rashid</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_81.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>HR Admin</span>
									<h5>Elina Gomez</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_82.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>Engineer</span>
									<h5>Jubayer Al Hasan</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="team-block mt-45">
								<img src="{{ URL::asset('assets/images/media/img_83.jpg')}}" alt="" class="w-100">
								<div class="text">
									<span>Owner & Founder</span>
									<h5>Mark Fernando</h5>
									<a href="#" class="stretched-link"></a>
								</div>
							</div>
							<!-- /.team-block -->
						</div>
					</div>
					<div class="position-relative text-center mt-80 lg-mt-50">
						<div class="row">
							<div class="col-lg-8 m-auto">
								<h2 class="font-manrope mb-40">Join us & shine the world with your skill</h2>
							</div>
						</div>
						<a href="#" class="btn-twenty">Join Now!!</a>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/shape/shape_91.svg')}}" alt="" class="shapes shape_02">
		</div>
		<!-- /.team-section-one -->



		
		<!--
		=====================================================
			Fancy Banner Two
		=====================================================
		-->
		<div class="fancy-banner-two pt-120 lg-pt-80 pb-150 xl-pb-120 lg-pb-80 position-relative z-1">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 col-lg-7 m-auto text-center">
						<h2>700k+ Customers have our Piku. Try it Now!</h2>
						<a href="#" class="btn-six">Claim 10k Words</a>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/shape/shape_20.svg')}}" alt="" class="shapes shape_01">
			<img src="{{ URL::asset('assets/images/shape/shape_21.svg')}}" alt="" class="shapes shape_02">
		</div>


	


		<!--
		=====================================================
			Footer Three
		=====================================================
		-->
		<div class="footer-three">
			<div class="container">
				<div class="position-relative">
					<div class="row">
						<div class="col-xxl-5 col-lg-4 me-auto">
							<div class="footer-intro mb-30 me-xxl-5 pe-xxl-4">
								<h3>Subscribe to our <span>newsletter.</span></h3>
								<form action="#" class="position-relative">
									<input type="email" placeholder="Your email address">
									<button class="tran3s"><img src="{{ URL::asset('assets/images/icon/icon_17.svg')}}" alt="" class="me-auto"></button>
								</form>
							</div>
						</div>
						<div class="col-lg-2 col-6">
							<div class="footer-nav mb-40">
								<ul class="footer-nav-link style-none">
									<li><a href="about-us-v1">About </a></li>
									<li><a href="project-v2">Work Gallery</a></li>
									<li><a href="pricing-v2">Pricing</a></li>
									<li><a href="blog-v2">Blog</a></li>
									<li><a href="contact-v2">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6">
							<div class="footer-nav mb-40">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1">Faq’s</a></li>
									<li><a href="faq-v2">Privacy Policy</a></li>
									<li><a href="faq-v1">Terms</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xxl-2 col-lg-3">
							<div class="footer-contact mb-20">
								<p class="fw-500">210 Wallent Street, California, Main OC, USA</p>
								<a href="#" class="tel fw-500 tran3s">(+91) 0187 34 377</a>
								<ul class="style-none d-flex align-items-center social-icon">
									<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="container">
				<div class="bottom-footer">
					<div class="d-md-flex align-items-center justify-content-between">
						<div class="d-flex justify-content-center align-items-center sm-mb-20">
							<ul class="style-none d-flex justify-content-center">
								<li><a href="faq-v2">Demo .</a></li>
								<li><a href="faq-v2">Partners .</a></li>
								<li><a href="blog-v2">Careers</a></li>
							</ul>
						</div>
						<p class="copyright-text text-center m0"><span>@2026 Piku inc.</span> All Right Reserved</p>
					</div>
				</div>
			</div>
		</div> <!-- /.footer-three -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>


		@endsection

		@section('js')
		@endsection