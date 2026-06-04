@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper dark-bg-three">
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
		<header class="theme-main-menu menu-style-six white-vr sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index" class="d-flex align-items-center">
								<img src="{{ URL::asset('assets/images/logo/logo_08.svg')}}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li>
									<a href="login" class="login-btn-four fw-500 d-flex align-items-center tran3s"><img src="{{ URL::asset('assets/images/icon/icon_26.svg')}}" alt="" class="me-2"> <span>Login</span></a>
                                </li>
								<li class="d-none d-md-inline-block ms-4">
                                    <div class="dropdown">
                                        <a class="btn-thirteen dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Download
                                        </a>
                                      
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<li><a class="dropdown-item" href="#">For Windows</a></li>
											<li><a class="dropdown-item" href="#">For iOS</a></li>
											<li><a class="dropdown-item" href="#">For Mobile</a></li>
                                        </ul>
                                    </div>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2 ms-lg-5">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse ms-lg-5" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index" class="d-block"><img src="{{ URL::asset('assets/images/logo/logo_08.svg')}}" alt=""></a></div></li>
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
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!-- 
		=============================================
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-three z-1 position-relative">
			<div class="wrapper text-center position-relative z-1 pt-200 xl-pt-150 pb-120 xl-pb-100 lg-pb-80">
                <div class="container">
                    <h2>Our <span>project</span></h2>
                    <ul class="style-none d-flex align-items-center justify-content-center">
                        <li><a href="index-5">Home</a></li>
                        <li>/</li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
		</div>
		<!-- /.inner-banner-three -->



	
		<!--
		=====================================================
			Project Section Five
		=====================================================
		-->
		<div class="project-section-five mt-80 lg-mt-40">
			<div class="container">
                <div id="isotop-gallery-wrapper" class="grid-2column xl">
                    <div class="grid-sizer"></div>
                    <div class="isotop-item application brand mt-80 lg-mt-40">
                        <div class="project-block-three position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_61.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <div class="position-relative d-flex justify-content-between align-items-start pt-35">
                                <div class="pe-3">
                                    <ul class="style-none d-flex">
                                        <li>PRINT</li>
                                        <li>DESIGN</li>
                                    </ul>
                                    <h6>Poster — Product Branding</h6>
                                </div>
                                <img src="{{ URL::asset('assets/images/icon/icon_93.svg')}}" alt="" class="mt-2 ms-auto">
                                <a href="project-details" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- /.project-block-three -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item design mt-80 lg-mt-40">
                        <div class="project-block-three position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_62.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <div class="position-relative d-flex justify-content-between align-items-start pt-35">
                                <div class="pe-3">
                                    <ul class="style-none d-flex">
                                        <li>Mobile</li>
                                        <li>UI/UX</li>
                                    </ul>
                                    <h6>UI — Banner Exploration</h6>
                                </div>
                                <img src="{{ URL::asset('assets/images/icon/icon_93.svg')}}" alt="" class="mt-2 ms-auto">
                                <a href="project-details" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- /.project-block-three -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item market dev mt-80 lg-mt-40">
                        <div class="project-block-three position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_63.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <div class="position-relative d-flex justify-content-between align-items-start pt-35">
                                <div class="pe-3">
                                    <ul class="style-none d-flex">
                                        <li>Branding</li>
                                        <li>UI/UX</li>
                                    </ul>
                                    <h6>Mockup — Calendar Design</h6>
                                </div>
                                <img src="{{ URL::asset('assets/images/icon/icon_93.svg')}}" alt="" class="mt-2 ms-auto">
                                <a href="project-details" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- /.project-block-three -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item market brand mt-80 lg-mt-40">
                        <div class="project-block-three position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_64.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <div class="position-relative d-flex justify-content-between align-items-start pt-35">
                                <div class="pe-3">
                                    <ul class="style-none d-flex">
                                        <li>BANNER</li>
                                        <li>WEB DESIGN</li>
                                    </ul>
                                    <h6>Poster — Product Branding</h6>
                                </div>
                                <img src="{{ URL::asset('assets/images/icon/icon_93.svg')}}" alt="" class="mt-2 ms-auto">
                                <a href="project-details" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- /.project-block-three -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item design mt-80 lg-mt-40">
                        <div class="project-block-three position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_66.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <div class="position-relative d-flex justify-content-between align-items-start pt-35">
                                <div class="pe-3">
                                    <ul class="style-none d-flex">
                                        <li>Mobile</li>
                                        <li>UI/UX</li>
                                    </ul>
                                    <h6>App — The power of communication</h6>
                                </div>
                                <img src="{{ URL::asset('assets/images/icon/icon_93.svg')}}" alt="" class="mt-2 ms-auto">
                                <a href="project-details" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- /.project-block-three -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item application dev mt-80 lg-mt-40">
                        <div class="project-block-three position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_65.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <div class="position-relative d-flex justify-content-between align-items-start pt-35">
                                <div class="pe-3">
                                    <ul class="style-none d-flex">
                                        <li>PRINT</li>
                                        <li>DESIGN</li>
                                    </ul>
                                    <h6>Mockup — Calendar Design</h6>
                                </div>
                                <img src="{{ URL::asset('assets/images/icon/icon_93.svg')}}" alt="" class="mt-2 ms-auto">
                                <a href="project-details" class="stretched-link"></a>
                            </div>
                        </div>
                        <!-- /.project-block-three -->
                    </div>
                    <!-- /.isotop-item -->
                    
                </div>
                <!-- /#isotop-gallery-wrapper -->
			</div>
		</div>
		<!-- /.project-section-five -->


		
		<!--
		=====================================================
			Fancy Banner Five
		=====================================================
		-->
		<div class="fancy-banner-five position-relative z-1 mt-150 lg-mt-80">
			<div class="wrapper position-relative z-1 pt-110 lg-pt-80 pb-120 lg-pb-80">
				<div class="container">
					<div class="row">
						<div class="col-xl-10 col-lg-9 m-auto text-center">
							<div class="title-eight">
								<h2 class="text-white"><span>300k+ </span> clients have our piku.Try it now!</h2>
							</div>
							<!-- /.title-eight -->
							<p class="text-white fs-28 font-manrope pe-xxl-4 mt-30 mb-55">Try it risk free — we don’t charge cancellation fees.</p>
							<a href="#" class="btn-thirteen">Let’s Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-five -->


	


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
								<form action="#" class="position-relative style-two">
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
        <!-- isotop -->
		<script  src="assets/vendor/isotope.pkgd.min.js"></script>
@endsection