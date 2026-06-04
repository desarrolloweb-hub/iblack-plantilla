@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper dark-bg p-30">
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
		<header class="theme-main-menu menu-style-one">
			<div class="inner-content bg-wrapper bg-one border-20">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index" class="d-flex align-items-center">
								<img src="{{ URL::asset('assets/images/logo/logo_01.svg')}}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-md-inline-block ms-3">
                                    <a href="login" class="btn-one">Let’s Started</a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index" class="d-block"><img src="{{ URL::asset('assets/images/logo/logo_01.svg')}}" alt=""></a></div></li>
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
										<a href="login" class="btn-one w-100">Let’s Started</a>
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
			Hero Banner
		============================================== 
		-->
		<div class="hero-banner-one bg-one border-30 z-1 pt-120 lg-pt-80 pb-100 lg-pb-70 mt-30 lg-mt-20 position-relative">
			<div class="container position-relative">
				<div class="row">
					<div class="col-lg-7 col-md-7">
						<p class="fs-24 fw-500 text-white mb-10 wow fadeInUp">Apply Now!</p>
						<h1 class="hero-heading wow fadeInUp">Global Transfers <span class="d-inline-block position-relative">Quick <img src="{{ URL::asset('assets/images/shape/shape_01.svg')}}" alt="" class="d-inline-block"></span>Savings</h1>
						<div class="row">
							<div class="col-xxl-8 col-lg-10">
								<p class="fs-24 pt-25 pb-30 lg-pb-20 xs-pb-10 wow fadeInUp" data-wow-delay="0.1s">Piku delivered blazing performance, fast striking word solution</p>
							</div>
						</div>
						<ul class="style-none d-flex align-items-center flex-wrap">
							<li class="mt-10"><a href="#" class="btn-one me-4">Let’s Started</a></li>
							<li class="mt-10"><a href="#" class="btn-two xl">Apply Now</a></li>
						</ul>
						<p class="fs-22 pt-100 md-pt-50 md-pb-20"><span class="fw-500 text-white text-decoration-underline">Join 27,000+</span> companies who’ve reached </p>
					</div>
				</div>
			</div>
			<div class="client-logo-wrapper">
				<div class="container">
					<div class="partner-logo-one">
						<div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_01.png')}}" alt="" class="m-auto"></div>
						<div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_02.png')}}" alt="" class="m-auto"></div>
						<div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_03.png')}}" alt="" class="m-auto"></div>
						<div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_04.png')}}" alt="" class="m-auto"></div>
						<div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_05.png')}}" alt="" class="m-auto"></div>
						<div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_06.png')}}" alt="" class="m-auto"></div>
						<div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_04.png')}}" alt="" class="m-auto"></div>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/assets/ils_01.png')}}" alt="" class="shapes illustration">
		</div>
		<!-- /.hero-banner-one -->


		


		<!--
		=====================================================
			BLock Feature One
		=====================================================
		-->
		<div class="block-feature-one border-30 bg-three mt-30 lg-mt-20 pt-150 lg-pt-80 pb-200 lg-pb-140">
			<div class="container">
				<div class="row">
					<div class="col-xxl-7 col-lg-6 order-lg-last">
						<div class="ps-lg-5 ms-xxl-4 md-mb-60">
							<div class="title-one">
								<h2 class="color-dark">Smart Card for business growth</h2>
							</div>
							<p class="fs-28 color-dark fw-500 mt-40 md-mt-20">Piku offers virtual debit cards, FDIC-insured USD accounts through City Savings.</p>
							<div class="counter-wrapper mt-25 mb-70 lg-mb-50">
								<div class="row">
									<div class="col-7">
										<div class="counter-block-one mt-20">
											<div class="main-count fw-500">$<span class="counter">9.1</span>B+</div>
											<span class="fs-22 color-dark">Coverage</span>
										</div>
										<!-- /.counter-block-one -->
									</div>
									<div class="col-5">
										<div class="counter-block-one mt-20">
											<div class="main-count fw-500"><span class="counter">1.2</span>M</div>
											<span class="fs-22 color-dark">Low interest rate</span>
										</div>
										<!-- /.counter-block-one -->
									</div>
								</div>
							</div>
							<a href="#" class="btn-two style-two xl">Order Your Card Now!</a>
						</div>
					</div>
					<div class="col-xxl-5 col-lg-6 col-md-7 m-auto text-end order-lg-first">
						<div class="img-holder z-1 d-inline-block position-relative">
							<img src="{{ URL::asset('assets/images/assets/card_01.png')}}" alt="">
							<img src="{{ URL::asset('assets/images/assets/card_02.png')}}" alt="" class="card_01 wow fadeInLeft" data-wow-delay="0.1s">
							<img src="{{ URL::asset('assets/images/assets/card_03.png')}}" alt="" class="card_02 wow fadeInLeft" data-wow-delay="0.2s">
							<img src="{{ URL::asset('assets/images/shape/shape_02.svg')}}" alt="" class="shapes shape_01 wow fadeInLeft" data-wow-delay="0.3s">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-one -->


		<!--
		=====================================================
			BLock Feature Two
		=====================================================
		-->
		<div class="block-feature-two mb-30 lg-mb-20">
			<div class="row gx-xl-4">
				<div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20">
					<div class="card-style-one text-center border-30 bg-one w-100">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('assets/images/icon/icon_01.svg')}}" alt=""></div>
						<h3>Receive USD in <br> minutes</h3>
						<p class="fs-24 fw-500">Receive global employer payments directly into your account.</p>
					</div>
					<!-- /.card-style-one -->
				</div>
				<div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.1s">
					<div class="card-style-one text-center border-30 bg-one w-100">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('assets/images/icon/icon_02.svg')}}" alt=""></div>
						<h3>Protection & highly <br> Security</h3>
						<p class="fs-24 fw-500">No monthly charges for holding your money in the account indefinitely.</p>
					</div>
					<!-- /.card-style-one -->
				</div>
				<div class="col-lg-4 d-flex wow fadeInUp mt-30 lg-mt-20" data-wow-delay="0.2s">
					<div class="card-style-one text-center border-30 bg-one w-100">
						<div class="icon rounded-circle d-flex align-items-center justify-content-center m-auto"><img src="{{ URL::asset('assets/images/icon/icon_03.svg')}}" alt=""></div>
						<h3>Transfer Home</h3>
						<p class="fs-24 fw-500">Return money to your local bank with the best available market rates.</p>
					</div>
					<!-- /.card-style-one -->
				</div>
			</div>
		</div>
		<!-- /.block-feature-two -->


		<!--
		=====================================================
			BLock Feature Three
		=====================================================
		-->
		<div class="block-feature-three border-30 bg-two pt-130 lg-pt-80 md-pt-30 pb-150 lg-pb-80 mb-30 lg-mb-20">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6 wow fadeInLeft">
						<div class="title-one mb-30 mt-50">
							<h2 class="color-dark">Globally  Send Money <span class="d-inline-block position-relative">with <img src="{{ URL::asset('assets/images/shape/shape_03.svg')}}" alt="" class="d-inline-block"></span> <br> Low Fees</h2>
						</div>
						<p class="fs-24 fw-500 text-dark">Online shopping or holiday expenses, auto-converts currencies at the lowest fees, ensuring hassle-free transactions globally.</p>
					</div>
					<div class="col-lg-6 col-md-8 m-auto text-end wow fadeInRight">
						<div class="img-holder-one position-relative d-inline-block z-1 md-mt-40">
							<img src="{{ URL::asset('assets/images/assets/card_04.png')}}" alt="">
							<img src="{{ URL::asset('assets/images/shape/shape_04.svg')}}" alt="" class="shapes shape_01">
						</div>
					</div>
				</div>

				<div class="row align-items-center mt-100 md-mt-30">
					<div class="col-lg-6 wow fadeInRight order-lg-last">
						<div class="ps-xl-5">
							<div class="title-one mb-30 mt-50">
								<h2 class="color-dark">Withdraw money from <span class="d-inline-block position-relative">an ATM <img src="{{ URL::asset('assets/images/shape/shape_03.svg')}}" alt="" class="d-inline-block"></span></h2>
							</div>
							<p class="fs-24 fw-500 text-dark">Our user-friendly app simplifies money transfers, eliminating lines, fees, and worries about transaction confirmation.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-8 m-auto wow fadeInLeft order-lg-first">
						<div class="img-holder-two position-relative d-inline-block z-1 md-mt-20">
							<img src="{{ URL::asset('assets/images/assets/card_05.png')}}" alt="">
							<img src="{{ URL::asset('assets/images/shape/shape_05.svg')}}" alt="" class="shapes shape_01">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-three -->



		<!--
		=====================================================
			Feedback Section One
		=====================================================
		-->
		<div class="feedback-section-one mb-30 lg-mb-20">
			<div class="feedback-slider-one">
				<div class="item">
					<div class="feedback-block-one bg-one border-30">
						<div class="d-flex align-items-center justify-content-between">
							<img src="{{ URL::asset('assets/images/logo/p_logo_07.png')}}" alt="">
							<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_04.svg')}}" alt=""></div>
						</div>
						<blockquote>
							"I think if you do something and it turns <span style="color: #FD05F3;">out pretty good</span>, then you should go to do something"
						</blockquote>
						<div class="d-sm-flex align-items-center justify-content-between">
							<p class="m0"><span class="fw-500 text-white fs-20">Rashed kabir,</span> Lead Designser, Monday</p>
							<ul class="style-none d-flex rating">
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="feedback-block-one bg-one border-30">
						<div class="d-flex align-items-center justify-content-between">
							<img src="{{ URL::asset('assets/images/logo/p_logo_08.png')}}" alt="">
							<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_04.svg')}}" alt=""></div>
						</div>
						<blockquote>
							"The <span style="color: #5AD95F;">best SaaS company</span> without doubt. something recommended to express your achievement!"
						</blockquote>
						<div class="d-sm-flex align-items-center justify-content-between">
							<p class="m0"><span class="fw-500 text-white fs-20">Jon Cooper, </span> Art Director, Slack</p>
							<ul class="style-none d-flex rating">
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="feedback-block-one bg-one border-30">
						<div class="d-flex align-items-center justify-content-between">
							<img src="{{ URL::asset('assets/images/logo/p_logo_07.png')}}" alt="">
							<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_04.svg')}}" alt=""></div>
						</div>
						<blockquote>
							"I think if you do something and it turns <span style="color: #FD05F3;">out pretty good</span>, then you should go to do something"
						</blockquote>
						<div class="d-sm-flex align-items-center justify-content-between">
							<p class="m0"><span class="fw-500 text-white fs-20">Rashed kabir,</span> Lead Designser, Monday</p>
							<ul class="style-none d-flex rating">
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="feedback-block-one bg-one border-30">
						<div class="d-flex align-items-center justify-content-between">
							<img src="{{ URL::asset('assets/images/logo/p_logo_08.png')}}" alt="">
							<div class="icon rounded-circle d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_04.svg')}}" alt=""></div>
						</div>
						<blockquote>
							"The <span style="color: #5AD95F;">best SaaS company</span> without doubt. something recommended to express your achievement!"
						</blockquote>
						<div class="d-sm-flex align-items-center justify-content-between">
							<p class="m0"><span class="fw-500 text-white fs-20">Jon Cooper, </span> Art Director, Slack</p>
							<ul class="style-none d-flex rating">
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
								<li><i class="bi bi-star-fill"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.feedback-section-one -->



		<!--
		=====================================================
			FAQ Section One
		=====================================================
		-->
		<div class="faq-section-one bg-four position-relative z-1 pt-150 lg-pt-80 pb-120 lg-pb-80 border-30 mb-30 lg-mb-20">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 m-auto">
						<div class="title-one text-center mb-80 xl-mb-60 md-mb-40">
							<h2 class="color-dark">Frequently Asked questions</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="accordion accordion-style-one" id="accordionOne">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										What is piku?
									</button>
								  </h2>
								  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p class="fs-22">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
									</div>
								  </div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										How do I find different criteria in pricing?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p class="fs-22">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										How does piku cost?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p class="fs-22">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="accordion accordion-style-one" id="accordionTwo">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAOne" aria-expanded="false" aria-controls="collapseAOne">
										I have running plan, How can I change it?
									</button>
								  </h2>
								  <div id="collapseAOne" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
									<div class="accordion-body">
										<p class="fs-22">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
									</div>
								  </div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseATwo" aria-expanded="false" aria-controls="collapseATwo">
										How does piku cost?
									</button>
								</h2>
								<div id="collapseATwo" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
									<div class="accordion-body">
										<p class="fs-22">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAThree" aria-expanded="true" aria-controls="collapseAThree">
										Why I should choose piku?
									</button>
								</h2>
								<div id="collapseAThree" class="accordion-collapse collapse" data-bs-parent="#accordionTwo">
									<div class="accordion-body">
										<p class="fs-22">It only takes 5 minutes. Set-up is smooth & simple, with fully customisable filter to the right one.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="text-center mt-60 lg-mt-40">
					<h4 class="mb-35 color-dark">Don’t find your answer?</h4>
					<a href="contact-v1" class="btn-two style-two xl">Contact us</a>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/shape/shape_06.svg')}}" alt="" class="shapes shape_01">
			<img src="{{ URL::asset('assets/images/shape/shape_07.svg')}}" alt="" class="shapes shape_02">
		</div>


		<!--
		=====================================================
			Fancy Banner One
		=====================================================
		-->
		<div class="fancy-banner-one position-relative z-1 bg-one border-30 text-center pt-130 lg-pt-80 pb-130 lg-pb-80 mb-30 lg-mb-20">
			<div class="container">
				<div class="row">
					<div class="col-xxl-8 col-lg-7 m-auto">
						<div class="title-one mb-35 lg-mb-30">
							<h2>Start Spending with piku</h2>
						</div>
					</div>
				</div>
				<p class="fs-28 mb-45 lg-mb-30">Order debit cards for your business & start using it today.</p>
				<a href="signup" class="btn-two xl">Let’s Get Started</a>
			</div>
			<img src="{{ URL::asset('assets/images//assets/ils_02.png')}}" alt="" class="shapes shape_01">
			<img src="{{ URL::asset('assets/images//assets/ils_03.png')}}" alt="" class="shapes shape_02">
		</div>



		<!--
		=====================================================
			Footer One
		=====================================================
		-->
		<div class="footer-one border-30 bg-one">
			<div class="position-relative z-1">
				<div class="container">
					<div class="email-banner position-relative z-1 bg-three border-30">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h3 class="color-dark">Subscribe Now!</h3>
							</div>
							<div class="col-lg-6">
								<form action="#" class="position-relative">
									<input type="email" placeholder="Your email address">
									<button class="tran3s"><img src="{{ URL::asset('assets/images/icon/icon_05.svg')}}" alt="" class="m-auto"></button>
								</form>
							</div>
						</div>
					</div>
					<!-- /.email-banner -->
					<div class="position-relative">
						<div class="row">
							<div class="col-lg-3">
								<div class="footer-intro mb-30">
									<div class="logo">
										<a href="index">
											<img src="{{ URL::asset('assets/images/logo/logo_01.1.svg')}}" alt="">
										</a>
									</div> 
									<!-- logo -->
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-6">
								<div class="footer-nav mb-20">
									<ul class="footer-nav-link style-none">
										<li><a href="about-us-v1">About </a></li>
										<li><a href="project-v1">Work Gallery</a></li>
										<li><a href="pricing-v1">Pricing</a></li>
										<li><a href="blog-v1">Blog</a></li>
										<li><a href="contact-v1">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-6">
								<div class="footer-nav mb-20">
									<ul class="footer-nav-link style-none">
										<li><a href="faq-v1">Faq’s</a></li>
										<li><a href="service-v1">Service</a></li>
										<li><a href="login">Login</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-2 col-md-3 col-sm-6">
								<div class="footer-nav mb-20">
									<ul class="footer-nav-link style-none">
										<li><a href="project-v2">Portfolio</a></li>
										<li><a href="faq-v1">Cookies Policy</a></li>
										<li><a href="blog-v2">Reports</a></li>
										<li><a href="team-v1">Team</a></li>
										<li><a href="blog-v3">Article</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-contact mb-20">
									<p class="fw-500 fs-20 mb-30 md-mb-20">210 Wallent Street, California, Main OC, USA</p>
									<a href="#" class="tel fw-500 fs-24 tran3s mb-40">(+91) 0187 34 377</a>
									<ul class="style-none d-flex align-items-center social-icon">
										<li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<p class="copyright-text m0"><strong class="text-white">@2026.</strong> All Right Reserved. </p>
					</div>
				</div>
			</div>
		</div> <!-- /.footer-one -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>

		@endsection

		@section('js')
		@endsection