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
                    <h2>Our <span>Pricing</span></h2>
                    <ul class="style-none d-flex align-items-center justify-content-center">
                        <li><a href="index-5">Home</a></li>
                        <li>/</li>
                        <li>Pricing</li>
                    </ul>
                </div>
            </div>
		</div>
		<!-- /.inner-banner-three -->



	
		<!--
		=====================================================
			Pricing Section Four
		=====================================================
		-->
		<div class="pricing-section-four position-relative z-1 mt-150 lg-mt-80">
			<div class="container">
				<div class="row">
                    <div class="col-xxl-9 col-xl-8 col-lg-7 m-auto">
                        <div class="title-four text-center">
							<div class="text-uppercase mb-10">Pricing</div>
                            <h2 class="fw-bold">All-inclusive great options pick your  Plan</h2>
                        </div>
                    </div>
                </div>
				<div class="mt-60 lg-mt-40">
					<nav class="pricing-nav-three d-flex justify-content-center mb-35">
						<div class="nav nav-tabs justify-content-between" role="tablist">
							<a class="nav-link active" id="monthly-tab" data-bs-toggle="tab" data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="true"></a>
							<a class="nav-link" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly" type="button" role="tab" aria-controls="yearly" aria-selected="false"></a>
						</div>
					</nav>
				</div>
				
				<div class="tab-content mt-30 lg-mt-10">
					<div class="tab-pane show active fade" id="monthly" role="tabpanel" aria-labelledby="buy-tab" tabindex="0">
						<div class="row gx-xxl-5">
							<div class="col-lg-4 d-flex">
								<div class="pr-column w-100 mt-30" style="border-color: #20E8C4;">
									<div class="pr-header mb-30">
										<div class="d-flex align-items-center">
                                            <div class="price">$7</div>
                                            <div class="info1">Save ~20% when billed yearly</div>
                                        </div>
                                        <div class="plane-name">Personal</div>
                                        <p class="info2">Available for single person</p>
									</div>
									<!-- /.pr-header -->
                                    <a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_32.svg')}}" alt=""></span></a>
									<ul class="style-none package-feature mt-60 lg-mt-50">
										<li>Web Design</li>
										<li>Front-End Coding</li>
										<li>Mobile App Development</li>
									</ul>
									<img src="{{ URL::asset('assets/images/shape/shape_48.svg')}}" alt="" class="shapes shape">
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4 d-flex">
								<div class="pr-column w-100 mt-30" style="border-color: #FFC736;">
									<div class="pr-header mb-30">
										<div class="d-flex align-items-center">
                                            <div class="price">$49</div>
                                            <div class="info1">Save ~20% when billed yearly</div>
                                        </div>
                                        <div class="plane-name">Team, Startup</div>
                                        <p class="info2">Available team seat up to 10</p>
									</div>
									<!-- /.pr-header -->
                                    <a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_32.svg')}}" alt=""></span></a>
									<ul class="style-none package-feature mt-60 lg-mt-50">
										<li>Web Design</li>
										<li>Front-End Coding</li>
										<li>Mobile App Development</li>
										<li>Programming</li>
										<li>Ai Pilot</li>
									</ul>
									<img src="{{ URL::asset('assets/images/shape/shape_49.svg')}}" alt="" class="shapes shape">
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4 d-flex">
								<div class="pr-column w-100 mt-30" style="border-color: #FF56BB;">
									<div class="pr-header mb-30">
										<div class="d-flex align-items-center">
                                            <div class="price">$99</div>
                                            <div class="info1">Save ~20% when billed yearly</div>
                                        </div>
                                        <div class="plane-name">Enterprise</div>
                                        <p class="info2">Available team seat up to 10</p>
									</div>
									<!-- /.pr-header -->
                                    <a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_32.svg')}}" alt=""></span></a>
									<ul class="style-none package-feature mt-60 lg-mt-50">
										<li>Web Design</li>
										<li>Front-End Coding</li>
										<li>Mobile App Development</li>
										<li>Programming</li>
										<li>Ai Pilot</li>
										<li>Expert Support</li>
									</ul>
									<img src="{{ URL::asset('assets/images/shape/shape_50.svg')}}" alt="" class="shapes shape">
								</div>
								<!-- /.pr-column -->
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="rent-tab" tabindex="0">
						<div class="row gx-xxl-5">
							<div class="col-lg-4 d-flex">
								<div class="pr-column w-100 mt-30" style="border-color: #20E8C4;">
									<div class="pr-header mb-30">
										<div class="d-flex align-items-center">
                                            <div class="price">$107</div>
                                            <div class="info1">Save ~20% when billed yearly</div>
                                        </div>
                                        <div class="plane-name">Personal</div>
                                        <p class="info2">Available for single person</p>
									</div>
									<!-- /.pr-header -->
                                    <a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_32.svg')}}" alt=""></span></a>
									<ul class="style-none package-feature mt-60 lg-mt-50">
										<li>Web Design</li>
										<li>Front-End Coding</li>
										<li>Mobile App Development</li>
									</ul>
									<img src="{{ URL::asset('assets/images/shape/shape_48.svg')}}" alt="" class="shapes shape">
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4 d-flex">
								<div class="pr-column w-100 mt-30" style="border-color: #FFC736;">
									<div class="pr-header mb-30">
										<div class="d-flex align-items-center">
                                            <div class="price">$449</div>
                                            <div class="info1">Save ~20% when billed yearly</div>
                                        </div>
                                        <div class="plane-name">Team, Startup</div>
                                        <p class="info2">Available team seat up to 10</p>
									</div>
									<!-- /.pr-header -->
                                    <a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_32.svg')}}" alt=""></span></a>
									<ul class="style-none package-feature mt-60 lg-mt-50">
										<li>Web Design</li>
										<li>Front-End Coding</li>
										<li>Mobile App Development</li>
										<li>Programming</li>
										<li>Ai Pilot</li>
									</ul>
									<img src="{{ URL::asset('assets/images/shape/shape_49.svg')}}" alt="" class="shapes shape">
								</div>
								<!-- /.pr-column -->
							</div>
							<div class="col-lg-4 d-flex">
								<div class="pr-column w-100 mt-30" style="border-color: #FF56BB;">
									<div class="pr-header mb-30">
										<div class="d-flex align-items-center">
                                            <div class="price">$990</div>
                                            <div class="info1">Save ~20% when billed yearly</div>
                                        </div>
                                        <div class="plane-name">Enterprise</div>
                                        <p class="info2">Available team seat up to 10</p>
									</div>
									<!-- /.pr-header -->
                                    <a href="#" class="btn-eleven w-100 d-flex justify-content-between align-items-center">Start Free Trial<span class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_32.svg')}}" alt=""></span></a>
									<ul class="style-none package-feature mt-60 lg-mt-50">
										<li>Web Design</li>
										<li>Front-End Coding</li>
										<li>Mobile App Development</li>
										<li>Programming</li>
										<li>Ai Pilot</li>
										<li>Expert Support</li>
									</ul>
									<img src="{{ URL::asset('assets/images/shape/shape_50.svg')}}" alt="" class="shapes shape">
								</div>
								<!-- /.pr-column -->
							</div>
						</div>
					</div>
				</div>
				<!-- /.tab-content -->
			</div>

		</div>
		<!-- /.pricing-section-four -->



        <!--
		=====================================================
			Pricing Section Two
		=====================================================
		-->
		<div class="pricing-section-two position-relative z-1 mt-170 xl-mt-150 lg-mt-80 pt-140 lg-pt-80 pb-150 xl-pb-120 lg-pb-80">
			<div class="container">
				<div class="row">
					<div class="col-xxl-9 col-lg-8 m-auto">
						<div class="title-four text-center mb-50 lg-mb-30">
							<h2 class="text-white">All-inclusive great options pick your  Plan</h2>
						</div>
						<p class="fs-24 text-white text-center mb-40 lg-mb-10">Try Team plan features for 14 days · No credit card required</p>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="pr-table-wrapper position-relative z-1 mt-40" style="background-image: url(assets/images/assets/bg_06.png);">
					<div class="row">
						<div class="col-lg-3 ms-auto">
							<div class="price">$89.00</div>
							<p class="fs-22 text-dark">Individual Plan</p>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-7">
							<ul class="style-none mt-20">
								<li>Designing Style</li>
								<li>Budget Minimization</li>
								<li>Venue Booking</li>
								<li>Caterers & Desserts</li>
								<li>Photography</li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-5 text-center">
							<a href="#" class="btn-seven style-two text-uppercase mt-40">Choose Plan</a>
							<strong class="fs-20 fw-bold d-block text-dark text-uppercase mt-20">15% OFF</strong>
							<p class="fs-20 text-dark">Full Payment</p>
						</div>
					</div>
					<img src="{{ URL::asset('assets/images/shape/shape_36.svg')}}" alt="" class="shapes shape_01">
				</div>
				<!-- /.pr-table-wrapper -->

				<div class="pr-table-wrapper position-relative z-1 mt-40" style="background-image: url(assets/images/assets/bg_07.png);">
					<div class="row">
						<div class="col-lg-3 ms-auto">
							<div class="price">$69.00</div>
							<p class="fs-22 text-dark">Team Plan</p>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-7">
							<ul class="style-none mt-20">
								<li>Designing Style</li>
								<li>Budget Minimization</li>
								<li>Venue Booking</li>
								<li>Caterers & Desserts</li>
								<li>Photography</li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-5 text-center">
							<a href="#" class="btn-seven style-two text-uppercase mt-40">Choose Plan</a>
							<strong class="fs-20 fw-bold d-block text-dark text-uppercase mt-20">13% OFF</strong>
							<p class="fs-20 text-dark">Full Payment</p>
						</div>
					</div>
					<img src="{{ URL::asset('assets/images/shape/shape_37.svg')}}" alt="" class="shapes shape_01">
				</div>
				<!-- /.pr-table-wrapper -->

				<div class="pr-table-wrapper position-relative z-1 mt-40" style="background-image: url(assets/images/assets/bg_08.png);">
					<div class="row">
						<div class="col-lg-3 ms-auto">
							<div class="price">$129.00</div>
							<p class="fs-22 text-dark">Business Plan</p>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-7">
							<ul class="style-none mt-20">
								<li>Designing Style</li>
								<li>Budget Minimization</li>
								<li>Venue Booking</li>
								<li>Caterers & Desserts</li>
								<li>Photography</li>
							</ul>
						</div>
						<div class="col-lg-3 col-sm-5 text-center">
							<a href="#" class="btn-seven style-two text-uppercase mt-40">Choose Plan</a>
							<strong class="fs-20 fw-bold d-block text-dark text-uppercase mt-20">20% OFF</strong>
							<p class="fs-20 text-dark">Full Payment</p>
						</div>
					</div>
					<img src="{{ URL::asset('assets/images/shape/shape_38.svg')}}" alt="" class="shapes shape_01">
				</div>
				<!-- /.pr-table-wrapper -->
			</div>
		</div>
		<!-- /.pricing-section-two -->



        <!--
		=====================================================
			FAQ Section Three
		=====================================================
		-->
		<div class="faq-section-three position-relative mt-150 lg-mt-80">
			<div class="container">
				<div class="row">
                    <div class="col-lg-5">
                        <div class="title-four">
							<div class="text-uppercase mb-10">FAQ</div>
                            <h2 class="fw-bold">Questions & Answers</h2>
                        </div>
						<p class="fs-22 pe-xxl-5 mt-40 md-mt-10 mb-40">Find your answers here. if you don’t find it here, please contact us.</p>
						<a href="contact-v2" class="btn-eleven style-two">Contact us</a>
                    </div>
					<div class="col-lg-7">
						<div class="accordion accordion-style-two bg-transparent p0 shadow-none ms-xl-4 md-mt-40" id="accordionFour">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneA" aria-expanded="false" aria-controls="collapseOneA">
										What is web hosting?
									</button>
								  </h2>
								  <div id="collapseOneA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								  </div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwoA">
										How do you weigh different criteria in your process?
									</button>
								</h2>
								<div id="collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeA" aria-expanded="true" aria-controls="collapseThreeA">
										What can I use to build my website?
									</button>
								</h2>
								<div id="collapseThreeA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourA" aria-expanded="true" aria-controls="collapseFourA">
										I have running plan, How can I change or switch it?
									</button>
								</h2>
								<div id="collapseFourA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveA" aria-expanded="true" aria-controls="collapseFiveA">
										How can I accept credit cards online?
									</button>
								</h2>
								<div id="collapseFiveA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore eligendi dolores animi quas blanditiis iusto mollitia quasi, ipsa numquam quaerat.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>

			</div>
		</div>
		<!-- /.faq-section-three -->



		
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