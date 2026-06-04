@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper dark-bg-four">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="assets/images/loader.svg" alt="" class="m-auto d-block"> <span></span></div>
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
		<header class="theme-main-menu menu-style-eight white-vr sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center">
						<div class="logo order-lg-0 me-auto me-xl-0">
							<a href="index" class="d-flex align-items-center">
								<img src="assets/images/logo/logo_09.svg" alt="">
							</a>
						</div>
						<!-- logo -->
						 <div class="search-form me-auto ms-xxl-5 ps-lg-5 d-none d-xl-block">
							<form action="#" class="position-relative">
								<button><img src="assets/images/icon/icon_38.svg" alt=""></button>
								<input type="text" placeholder="Search Here...">
							</form>
						 </div>
						<div class="right-widget ms-lg-5 ps-xxl-5 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li>
									<a href="login" class="login-btn-four fw-500 d-flex align-items-center tran3s"><img src="{{ URL::asset('assets/images/icon/icon_39.svg')}}" alt="" class="me-2"> <span>Login</span></a>
                                </li>
								<li class="d-none d-md-inline-block ms-4">
                                    <a href="signup" class="btn-five border-0 tran3s">Sign Up</a>
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
									<li class="d-block d-lg-none"><div class="logo"><a href="index" class="d-block"><img src="{{ URL::asset('assets/images/logo/logo_09.svg')}}" alt=""></a></div></li>
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
										<a href="signup" class="btn-one tran3s w-100">Sign Up</a>
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
		<div class="hero-banner-eight bg-twelve z-1 position-relative pt-250 xl-pt-200 md-pt-150 pb-160 xl-pb-140 md-p0">
			<div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 col-md-10">
                        <h1 class="hero-heading wow fadeInUp">Click,Chat, <span>Convert</span> Sales.</h1>
                        <p class="fs-28 text-white font-manrope pt-35 lg-pt-20 pb-40 lg-pb-20 pe-xxl-5 wow fadeInUp" data-wow-delay="0.1s">Seamlessly integrate teams, tasks, & documents with the all-in-one piku app.</p>
                        
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="#" class="d-flex align-items-center justify-content-between flex-wrap mb-15">
                                <input type="email" placeholder="Email address..">
                                <button>Try It Now</button>
                            </form>
                            <ul class="style-none d-flex flex-wrap">
                                <li><i class="bi bi-check2"></i> No Card required</li>
                                <li><i class="bi bi-check2"></i> 14 Days Free Trial</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="illustration">
                    <img src="{{ URL::asset('assets/images/assets/bg_14.png')}}" alt="">
                    <img src="{{ URL::asset('assets/images/assets/person.png')}}" alt="" class="shapes person-img">
                    <img src="{{ URL::asset('assets/images/assets/card_20.png')}}" alt="" class="shapes shape_01">
                </div>
            </div>
		</div>
		<!-- /.hero-banner-eight -->



        <div class="client-logo-wrapper border-bottom mt-60 pb-70 lg-pb-50">
            <div class="container">
                <p class="fs-24 text-white fw-500 text-center mb-40">Over 2+ million teams rely on Piku to collaborate & get work done</p>
                <div class="partner-logo-one">
                    <div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_01.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_02.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_03.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_04.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_05.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_06.png')}}" alt="" class="m-auto"></div>
                    <div class="item"><img src="{{ URL::asset('assets/images/logo/p_logo_03.png')}}" alt="" class="m-auto"></div>
                </div>
            </div>
        </div>


		


		<!--
		=====================================================
			Block Feature Twenty One
		=====================================================
		-->
		<div class="block-feature-twentyOne pt-150 lg-pt-80">
			<div class="container">
				<div class="row">
					<div class="col-xxl-10 col-xl-9 col-lg-8 m-auto">
						<div class="title-ten text-center mb-90 lg-mb-40">
							<h2>The Piku Support Agent for Growing Businesses</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6 order-lg-last d-flex flex-column">
						<div class="feature-block block-one w-100">
							<div class="row gx-0">
								<div class="col-sm-6">
									<div class="counter-block text-center border-style">
										<div class="main-count font-Montserrat"><span class="counter">70</span>%</div>
										<p class="fs-20">Piku Resolution Rate</p>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="counter-block text-center">
										<div class="main-count font-Montserrat"><span class="counter">83</span>%</div>
										<p class="fs-20">Happy with AI agent</p>
									</div>
								</div>
							</div>
						</div>

						<div class="feature-block block-two mt-50 lg-mt-30 w-100">
							<div class="d-flex">
								<img src="{{ URL::asset('assets/images/assets/avatar_3.png')}}" alt="" class="avatar rounded-circle">
								<div class="name">
									<h6>Daniel Hussy,</h6>
									<span class="f-20">CEO & Founder, Piku</span>
								</div>
							</div>
							<blockquote>Game-changer! Boosted efficiency, simplified tasks, and saved time. Highly recommended!</blockquote>
							<ul class="style-none d-flex flex-wrap justify-content-between">
								<li><span><img src="{{ URL::asset('assets/images/logo/p_logo_50.png')}}" alt=""></span></li>
								<li><span><img src="{{ URL::asset('assets/images/logo/p_logo_51.png')}}" alt=""></span></li>
								<li><span><img src="{{ URL::asset('assets/images/logo/p_logo_52.png')}}" alt=""></span></li>
								<li><span><img src="{{ URL::asset('assets/images/logo/p_logo_53.png')}}" alt=""></span></li>
								<li><span><img src="{{ URL::asset('assets/images/logo/p_logo_54.png')}}" alt=""></span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6 d-flex">
						<div class="feature-block block-three w-100 d-flex align-items-end justify-content-center me-xxl-4 md-mt-40">
							<img src="{{ URL::asset('assets/images/assets/card_21.png')}}" alt="" class="screen">
							<img src="{{ URL::asset('assets/images/shape/shape_79.png')}}" alt="" class="shapes shape_01">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-twentyOne -->


		<!--
		=====================================================
			Counter Section One
		=====================================================
		-->
		<div class="counter-section-one mt-80 lg-mt-50">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-4">
						<div class="counter-block d-inline-block">
							<div class="main-count font-Montserrat"><span class="counter">13</span>k+</div>
							<p class="text-center fs-22">Project Completed</p>
						</div>
						<!-- /.counter-block -->
					</div>
					<div class="col-lg-6 col-md-4">
						<div class="counter-block position-relative z-1 text-center pt-35 pb-35">
							<div class="main-count font-Montserrat"><span class="counter">200</span>k+</div>
							<p class="text-center fs-22">Worldwide Clients</p>
						</div>
						<!-- /.counter-block -->
					</div>
					<div class="col-lg-3 col-md-4 text-end">
						<div class="counter-block d-inline-block">
							<div class="main-count font-Montserrat"><span class="counter">720</span></div>
							<p class="text-center fs-22">Experts</p>
						</div>
						<!-- /.counter-block -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.counter-section-one -->



		<!--
		=====================================================
			Block Feature Twenty Two
		=====================================================
		-->
		<div class="block-feature-twentyTwo bg-thirteen position-relative z-1 pt-180 xl-pt-130 lg-pt-80 pb-150 xl-pb-120 lg-pb-80 mt-150 lg-mt-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-7">
						<div class="pe-xxl-5">
							<div class="title-ten">
								<div class="upper-title text-uppercase">Features</div>
								<h2 class="color-dark">Streamlined <span class="position-relative z-1">Solutions <span class="line" style="background: #FF5B00;"></span></span> Tailored by Piku for You.</h2>
							</div>
							<p class="fs-28 text-dark pt-65 xl-pt-50 md-pt-30 pb-80 xl-pb-50 md-pb-30">Revolutionize customer support workflows with our help desk SaaS company, delivering seamless solutions for modern businesses.</p>
							<a href="#" class="btn-five border-0 color-two tran3s">Try It Now</a>
						</div>
					</div>
				</div>
			</div>
			<img src="{{ URL::asset('assets/images/assets/card_22.png')}}" alt="" class="shapes shape_01">
			<div class="container mt-100 md-mt-50">
				<div class="row gx-xxl-5">
					<div class="col-md-4">
						<div class="feature mt-20">
							<div class="num fw-500">01</div>
							<p class="fw-500">Drive better customers conversations</p>
						</div>
						<!-- /.feature -->
					</div>
					<div class="col-md-4">
						<div class="feature mt-20">
							<div class="num fw-500">02</div>
							<p class="fw-500">Organize your project effortlessly</p>
						</div>
						<!-- /.feature -->
					</div>
					<div class="col-md-4">
						<div class="feature mt-20">
							<div class="num fw-500">03</div>
							<p class="fw-500">Track Project workflow & Progress</p>
						</div>
						<!-- /.feature -->
					</div>
					
				</div>
			</div>
		</div>
		<!-- /.block-feature-twentyTwo -->



        <!--
		=====================================================
			App Integration
		=====================================================
		-->
		<div class="app-integration-one mt-170 xl-mt-150 lg-mt-80">
			<div class="container">
				<div class="row">
                    <div class="col-xl-11 m-auto">
                        <div class="title-ten text-center mb-95 lg-mb-50">
							<h2>Integrates Tools</h2>
						</div>
                    </div>
                </div>
			</div>

			<div class="logo-wrapper">
				<div class="partner-logo-two">
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_55.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_56.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_57.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_58.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_59.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_60.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_61.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_62.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_63.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{ URL::asset('assets/images/logo/p_logo_64.png')}}" alt="">
					</div>
				</div>
				<!-- /.partner-logo-two -->
			</div>
		</div>
		<!-- /.app-integration-one -->


		<!--
		=====================================================
			Block Feature Twenty Three
		=====================================================
		-->
		<div class="block-feature-twentyThree mt-180 xl-mt-150 lg-mt-100">
			<div class="container">
				<div class="row">
					<div class="col-xxl-9 col-lg-8 m-auto">
						<div class="title-ten text-center mb-55 lg-mb-20">
							<h2>Three Reasons Our <span class="position-relative z-1">Clients<span class="line" style="background: #FFC92E;"></span></span> Love About Piku</h2>
						</div>
					</div>
				</div>

				<div class="row gx-xxl-5">
					<div class="col-lg-4">
						<div class="card-style-ten mt-35">
							<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_40.png')}}" alt=""></div>
							<h4>Enhance teamwork, reduce repetitive efforts.</h4>
						</div>
						<!-- /.card-style-ten -->
					</div>
					<div class="col-lg-4">
						<div class="card-style-ten mt-35">
							<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_41.png')}}" alt=""></div>
							<h4>Integrated inbox for multi-channel assistance.</h4>
						</div>
						<!-- /.card-style-ten -->
					</div>
					<div class="col-lg-4">
						<div class="card-style-ten mt-35">
							<div class="icon d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_42.png')}}" alt=""></div>
							<h4>Highly rated support from Piku anytime.</h4>
						</div>
						<!-- /.card-style-ten -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-twentyThree -->




		<!--
		=====================================================
			Feedback Section Eight
		=====================================================
		-->
		<div class="feedback-section-eight position-relative bg-twelve z-1 pt-150 lg-pt-80 pb-170 lg-pb-80 mt-180 xl-mt-150 lg-mt-80">
			<div class="container">
				<div class="wrapper">
					<div class="row align-items-center">
						<div class="col-lg-7 order-lg-last">
							<img src="{{ URL::asset('assets/images/icon/icon_103.svg')}}" alt="">
							<div class="feedback-slider-five">
								<div class="item">
									<blockquote class="font-Montserrat">"Extraordinary performance! Quick solutions. Highly recommended."</blockquote>
									<div class="name fs-24 text-dark">
										<h6>Stefan Jong, </h6>
										<span>Senior Officer, Arong</span>
									</div>
									<ul class="style-none d-flex align-items-center rating">
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li>5.00 (27k Reviews)</li>
									</ul>
								</div>
								<div class="item">
									<blockquote class="font-Montserrat">"Extraordinary performance! Quick solutions. Highly recommended."</blockquote>
									<div class="name fs-24 text-dark">
										<h6>Stefan Jong, </h6>
										<span>Senior Officer, Arong</span>
									</div>
									<ul class="style-none d-flex align-items-center rating">
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li>5.00 (27k Reviews)</li>
									</ul>
								</div>
								<div class="item">
									<blockquote class="font-Montserrat">"Extraordinary performance! Quick solutions. Highly recommended."</blockquote>
									<div class="name fs-24 text-dark">
										<h6>Stefan Jong, </h6>
										<span>Senior Officer, Arong</span>
									</div>
									<ul class="style-none d-flex align-items-center rating">
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li><i class="bi bi-star-fill"></i></li>
										<li>5.00 (27k Reviews)</li>
									</ul>
								</div>
							</div>
							<!-- /.feedback-slider-five -->
						</div>
						<div class="col-lg-5">
							<img src="{{ URL::asset('assets/images/media/img_20.png')}}" alt="" class="m-auto ms-xl-0 md-mt-40">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.feedback-section-eight -->





		<!--
		=====================================================
			FAQ Section Three
		=====================================================
		-->
		<div class="faq-section-three bg-fourteen position-relative pt-150 lg-pt-80 pb-150 lg-pb-80">
			<div class="container">
				<div class="title-ten text-center mb-75 lg-mb-30">
					<h2><span class="position-relative z-1">Questions<span class="line" style="background: #FFC92E;"></span></span> & Answers</h2>
				</div>
				<div class="row">
					<div class="col-lg-10 m-auto">
						<div class="accordion accordion-style-four" id="accordionFour">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneA" aria-expanded="false" aria-controls="collapseOneA">
										What is piku?
									</button>
								  </h2>
								  <div id="collapseOneA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Revolutionize customer support workflows with our help desk SaaS company, delivering seamless solutions for modern businesses.</p>
									</div>
								  </div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoA" aria-expanded="false" aria-controls="collapseTwoA">
										How do I find different criteria in pricing
									</button>
								</h2>
								<div id="collapseTwoA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Revolutionize customer support workflows with our help desk SaaS company, delivering seamless solutions for modern businesses.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeA" aria-expanded="true" aria-controls="collapseThreeA">
										How does piku cost?
									</button>
								</h2>
								<div id="collapseThreeA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Revolutionize customer support workflows with our help desk SaaS company, delivering seamless solutions for modern businesses.</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourA" aria-expanded="true" aria-controls="collapseFourA">
										I have running plan, How can I change it?
									</button>
								</h2>
								<div id="collapseFourA" class="accordion-collapse collapse" data-bs-parent="#accordionFour">
									<div class="accordion-body">
										<p class="fs-22">Revolutionize customer support workflows with our help desk SaaS company, delivering seamless solutions for modern businesses.</p>
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
			Contact Banner One
		=====================================================
		-->
		<div class="contact-banner-one mt-120 lg-mt-80">
			<div class="container">
				<h5 class="text-center font-Montserrat mb-80 lg-mb-40">Don’t find answer? Contact Us</h5>
				<div class="row align-items-center">
					<div class="col-xl-3 col-lg-4">
						<div class="block d-flex align-items-center">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_43.svg')}}" alt=""></div>
							<div class="text">
								<div class="title">We’r happy to help</div>
								<span class="fs-20">ask@homy.com</span>
							</div>
						</div>
						<!-- /.block -->
					</div>
					<div class="col-xl-6 col-lg-4">
						<div class="block d-flex align-items-center justify-content-lg-center position-relative z-1 skew-line pt-5 pb-5 md-mt-20 md-mb-20">
							<div class="d-flex align-items-center">
								<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_44.svg')}}" alt=""></div>
								<div class="text">
									<div class="title">Hotline number</div>
									<span class="fs-20">+757 699 4478,  +991 377 9731</span>
								</div>
							</div>
						</div>
						<!-- /.block -->
					</div>
					<div class="col-xl-3 col-lg-4">
						<div class="block d-flex align-items-center ps-xl-5">
							<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_45.svg')}}" alt=""></div>
							<div class="text">
								<div class="title">Live chat</div>
								<span class="fs-20">www.pikuchat.com</span>
							</div>
						</div>
						<!-- /.block -->
					</div>
				</div>
			</div>
		</div>
		<!-- /.contact-banner-one -->



		
		<!--
		=====================================================
			Fancy Banner Nine
		=====================================================
		-->
		<div class="fancy-banner-nine bg-thirteen position-relative z-1 pt-120 lg-pt-80 pb-120 lg-pb-80 mt-130 lg-mt-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 m-auto text-center">
						<div class="title-ten text-center">
							<h2 class="color-dark">Enhance team <span class="position-relative z-1">productivity<span class="line" style="background: #FF5B00;"></span></span> by 80% using Hiver.</h2>
						</div>
						<p class="fs-28 color-dark mt-30 mb-50 lg-mb-30">Try it risk free — we don’t charge cancellation fees.</p>
						<a href="contact-v2" class="btn-five color-two border-0 tran3s">Let’s Get Started</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-nine -->


	


		<!--
		=====================================================
			Footer Three
		=====================================================
		-->
		<div class="footer-three">
			<div class="container">
				<div class="position-relative">
					<div class="row justify-content-between">
						<div class="col-lg-2 order-lg-0">
							<div class="logo mt-15 mb-30">
								<a href="index">
									<img src="{{ URL::asset('assets/images/logo/logo_01.1.svg')}}" alt="">
								</a>
							</div> 
							<!-- logo -->
						</div>
						<div class="col-lg-2 col-6 order-lg-1">
							<div class="footer-nav">
								<ul class="footer-nav-link style-none">
									<li><a href="about-us-v1">About </a></li>
									<li><a href="project-v4">Work Gallery</a></li>
									<li><a href="pricing-v2">Pricing</a></li>
									<li><a href="blog-v2">Blog</a></li>
									<li><a href="contact-v1">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6 order-lg-3">
							<div class="footer-nav">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1">​​Take the tour</a></li>
									<li><a href="faq-v1">Live chat</a></li>
									<li><a href="contact-v1">Self-service</a></li>
									<li><a href="faq-v1">Social</a></li>
									<li><a href="faq-v1">Mobile</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6 order-lg-2">
							<div class="footer-nav mb-20">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1">Faq’s</a></li>
									<li><a href="faq-v2">Privacy Policy</a></li>
									<li><a href="faq-v1">Terms</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2 col-6 order-lg-4">
							<div class="footer-nav mb-20">
								<ul class="footer-nav-link style-none">
									<li><a href="faq-v1">Help Docs</a></li>
									<li><a href="faq-v2">Chat</a></li>
									<li><a href="faq-v1">Developer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="bottom-footer border-white">
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