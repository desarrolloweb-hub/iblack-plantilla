@extends('partials.main')

@section('css')

 @endsection

@section('main')
	<div class="main-page-wrapper">
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
		<header class="theme-main-menu menu-style-ten sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index" class="d-flex align-items-center">
								<img src="{{ URL::asset('assets/images/logo/logo_09.svg')}}" alt="">
							</a>
						</div>
						<!-- logo -->
                        <div class="order-lg-2 ms-5 d-none d-md-inline-block">
                            <p class="m0 fs-20 font-manrope fw-500">Call <a href="#" class="fw-600 text-white">+757 699-4478</a></p>
                        </div>
						<div class="right-widget order-lg-3 ms-auto me-3 me-lg-0">
							<ul class="d-flex align-items-center style-none">
                                <li>
                                    <div class="dropdown language-dropdown me-4">
                                        <button class="dropdown-toggle" type="button" id="langDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                          <img src="{{ URL::asset('assets/images/icon/icon_60.svg')}}" alt="" class="d-inline-block"> EN
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="langDrop">
                                            <li><a class="dropdown-item" href="#">Italian</a></li>
                                            <li><a class="dropdown-item" href="#">Japanese</a></li>
                                            <li><a class="dropdown-item" href="#">Russian</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown search-dropdown me-sm-4 border-end pe-3">
                                        <button class="dropdown-toggle" type="button" id="serchDrop" data-bs-toggle="dropdown" aria-expanded="false">
                                          <img src="{{ URL::asset('assets/images/icon/icon_61.svg')}}" alt="">
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="serchDrop">
                                            <li>
                                                <form action="#">
                                                    <input type="text" placeholder="Search.....">
                                                    <button><img src="{{ URL::asset('assets/images/icon/icon_61.svg')}}" alt="" class="m-auto"></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
								<li class="d-none d-sm-inline-block">
									<a href="#" class="login-btn-one text-white fw-500 d-flex align-items-center tran3s"><img src="{{ URL::asset('assets/images/icon/icon_18.svg')}}" alt="" class="me-2"> <span>My Account</span></a>
                                </li>
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2 ms-lg-auto">
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
										<a href="#" class="login-btn-one text-white fw-500 d-flex justify-content-center align-items-center tran3s"><img src="{{ URL::asset('assets/images/icon/icon_18.svg')}}" alt="" class="me-2"> <span>My Account</span></a>
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
		=============================================
			Hero Banner
		============================================== 
		-->
		<div class="hero-banner-ten z-1 position-relative gap-40 mt-120 xl-mt-110 lg-mt-90">
			<div class="bg position-relative z-1 pt-130 lg-pt-80 pb-150 xl-pb-120 lg-pb-80">
                <div class="container lg">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-7 col-lg-8 col-md-10">
                            <h1 class="hero-heading color-dark font-Montserrat wow fadeInUp">Opt-in for Cyber Safety, stay secure.</h1>
                            <p class="fs-22 text-dark pt-20 pb-30 lg-pb-10 wow fadeInUp" data-wow-delay="0.1s">User-friendly antivirus blocks online threats, includes privacy and identity theft safeguards</p>
                            <ul class="d-flex align-items-center flex-wrap style-none btn-group wow fadeInUp" data-wow-delay="0.2s">
                                <li><a href="#" class="active"><img src="{{ URL::asset('assets/images/icon/icon_62.svg')}}" alt=""> Download for Mac</a></li>
                                <li><a href="#"><img src="{{ URL::asset('assets/images/icon/icon_63.svg')}}" alt=""> Download for Windows</a></li>
                            </ul>
                            <div class="dm-text mt-15 mb-60 lg-mb-40 wow fadeInUp" data-wow-delay="0.3s">Also available for <a href="#">Android,</a> and <a href="#">iOS</a></div>
                            <div class="fs-24 color-dark wow fadeInUp" data-wow-delay="0.4s"><span class="fw-500 text-decoration-underline">Trusted by 27,000+</span> customers around the world</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-bottom border-1 border-white pt-40 lg-pt-20 pb-65 lg-pb-40">
                <div class="container lg">
                    <div class="row justify-content-between">
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card-style-thirteen d-flex w-100 mt-35">
                                <div class="icon d-flex align-items-center justify-content-center border border-2 border-white rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_64.svg')}}" alt=""></div>
                                <div class="text">
                                    <h6>3 Times Award Winner</h6>
                                    <span class="fs-20">Antivirus</span>
                                </div>
                            </div>
                            <!-- /.card-style-thirteen -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card-style-thirteen d-flex w-100 mt-35">
                                <div class="icon d-flex align-items-center justify-content-center border border-2 border-white rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_65.svg')}}" alt=""></div>
                                <div class="text">
                                    <h6>Over 12m+ Customers</h6>
                                    <span class="fs-20">Worldwide</span>
                                </div>
                            </div>
                            <!-- /.card-style-thirteen -->
                        </div>
                        <div class="col-xxl-3 col-lg-4 col-md-6">
                            <div class="card-style-thirteen d-flex w-100 mt-35">
                                <div class="icon d-flex align-items-center justify-content-center border border-2 border-white rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_66.svg')}}" alt=""></div>
                                <div class="text">
                                    <h6>We have 20+ years of</h6>
                                    <span class="fs-20">Experience</span>
                                </div>
                            </div>
                            <!-- /.card-style-thirteen -->
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<!-- /.hero-banner-ten -->




		<!--
		=====================================================
			Block Feature Twenty Seven
		=====================================================
		-->
		<div class="block-feature-twentySeven mt-160 lg-mt-80">
			<div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8 m-auto text-center">
                        <div class="title-ten mb-20">
                            <h2>What problem can we help you solve?</h2>
                        </div>
                    </div>
                </div>
				<p class="fs-24 text-center">Personal or business, desktop or mobile — whatever your needs — we’ve got you covered.</p>

                <div class="row gx-xxl-5 mt-30 lg-mt-10">
                    <div class="col-lg-4">
                        <div class="card-style-fourteen mt-35">
                            <img src="{{ URL::asset('assets/images/icon/icon_67.png')}}" alt="" class="m-auto icon">
                            <h4>Advance Protection for Virus & Threat</h4>
                            <a href="service-details" class="cta-btn border-2 border-top border-start border-white tran3s d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_70.svg')}}" alt=""></a>
                        </div>
                        <!-- /.card-style-fourteen -->
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style-fourteen mt-35">
                            <img src="{{ URL::asset('assets/images/icon/icon_68.png')}}" alt="" class="m-auto icon">
                            <h4>Online Protection &  Data Privacy</h4>
                            <a href="service-details" class="cta-btn border-2 border-top border-start border-white tran3s d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_70.svg')}}" alt=""></a>
                        </div>
                        <!-- /.card-style-fourteen -->
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style-fourteen mt-35">
                            <img src="{{ URL::asset('assets/images/icon/icon_69.png')}}" alt="" class="m-auto icon">
                            <h4>Boost Performance for device</h4>
                            <a href="service-details" class="cta-btn border-2 border-top border-start border-white tran3s d-flex align-items-center justify-content-center"><img src="{{ URL::asset('assets/images/icon/icon_70.svg')}}" alt=""></a>
                        </div>
                        <!-- /.card-style-fourteen -->
                    </div>
                </div>
			</div>

		</div>
		<!-- /.block-feature-twentySeven -->



		<!--
		=====================================================
			Pricing Section Seven
		=====================================================
		-->
		<div class="pricing-section-seven mt-180 lg-mt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <div class="title-ten text-center mb-130 lg-mb-80 sm-mb-40">
                            <h2>All-inclusive great options pick your Plan</h2>
                        </div>
                    </div>
                </div>

                <div class="pr-table-wrapper d-flex flex-wrap">
                    <div class="pr-column">
                        <div class="pr-header d-flex align-items-end">
                            <h4>Features</h4>
                        </div>
                        <ul class="feature-list style-none">
                            <li><span>10 gb Storage</span></li>
                            <li><span>200 gb Storage</span></li>
                            <li><span>Unlimited Storage</span></li>
                            <li><span>Virus Protection</span></li>
                            <li><span>Online Threat Protection</span></li>
                            <li><span>Firewall</span></li>
                            <li><span>Data Security</span></li>
                            <li><span>Onboarding & Support</span></li>
                            <li><span>Password Manager</span></li>
                        </ul>
                    </div>
                    <!-- /.pr-column -->
                    <div class="pr-column">
                        <div class="pr-header text-center">
                            <div class="plan-name fw-500 text-uppercase">FREE</div>
                            <div class="price fw-500">0</div>
                            <div>Get Piku tailored for your</div>
                            <a href="#" class="btn-nineteen w-100 mt-50 lg-mt-30">Active</a>
                        </div>
                        <ul class="feature-list style-none">
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>10 gb Storage</span></li>
                            <li><span>200 gb Storage</span></li>
                            <li><span>Unlimited Storage</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Virus Protection</span></li>
                            <li><span>Online Threat Protection</span></li>
                            <li><span>Firewall</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Data Security</span></li>
                            <li><span>Onboarding & Support</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Password Manager</span></li>
                            <li>1 Device</li>
                        </ul>
                    </div>
                    <!-- /.pr-column -->
                    <div class="pr-column popular">
                        <div class="pr-header text-center">
                            <div class="popular-badge fw-500 text-uppercase">Popular</div>
                            <div class="plan-name fw-500 text-uppercase">Pro</div>
                            <div class="price fw-500">$2.99<sub>/ mo</sub></div>
                            <div><span class="fw-500 text-white">Save ~20%</span> when billed yearly</div>
                            <a href="#" class="btn-nineteen w-100 mt-50 lg-mt-30">Add To Cart</a>
                        </div>
                        <ul class="feature-list style-none">
                            <li><span>10 gb Storage</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>200 gb Storage</span></li>
                            <li><span>Unlimited Storage</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Virus Protection</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Online Threat Protection</span></li>
                            <li><span>Firewall</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Data Security</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Onboarding & Support</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Password Manager</span></li>
                            <li>3 Device</li>
                        </ul>
                    </div>
                    <!-- /.pr-column -->
                    <div class="pr-column">
                        <div class="pr-header text-center">
                            <div class="plan-name fw-500 text-uppercase">BUSINESS</div>
                            <div class="price fw-500">$4.99<sub>/ mo</sub></div>
                            <div><span class="fw-500 text-white">Save ~30%</span> when billed yearly</div>
                            <a href="#" class="btn-nineteen w-100 mt-50 lg-mt-30">Add To Cart</a>
                        </div>
                        <ul class="feature-list style-none">
                            <li><span>10 gb Storage</span></li>
                            <li><span>200 gb Storage</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Unlimited Storage</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Virus Protection</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Online Threat Protection</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Firewall</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Data Security</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Onboarding & Support</span></li>
                            <li><img src="{{ URL::asset('assets/images/icon/icon_71.svg')}}" alt="" class="icon"> <span>Password Manager</span></li>
                            <li>5 Device</li>
                        </ul>
                    </div>
                    <!-- /.pr-column -->
                </div>
            </div>
        </div>
        <!-- /.pricing-section-seven -->



        <!--
		=====================================================
			Block Feature Twenty Eight
		=====================================================
		-->
		<div class="block-feature-twentyEight mt-225 lg-mt-150 sm-mt-100">
			<div class="container">
				<div class="block-feature">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-last ms-auto">
                            <div class="title-ten pe-xl-5 me-xl-5">
                                <div class="fs-22 mb-15">Threat Protection</div>
                                <h2>Secure assets with our piku shield.</h2>
                            </div>
                            <p class="fs-22 mt-40 lg-mt-30 mb-40 lg-mb-30">Secure devices, maintain privacy online, & safeguard identity seamlessly. Streamline defense against hackers.</p>
                            <a href="service-details" class="btn-nineteen">Learn More</a>
                        </div>
                        <div class="col-lg-5 col-md-8 m-auto m-lg-0">
                            <div class="img-box position-relative z-1 md-mt-40">
                                <img src="{{ URL::asset('assets/images/media/img_22.jpg')}}" alt="">
                                <div class="card-one">
                                    <img src="{{ URL::asset('assets/images/icon/icon_72.png')}}" alt="" class="m-auto">
                                    <h4>99% protection against any threat</h4>
                                </div>
                                <!-- /.card-one -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.block-feature -->

                <div class="block-feature mt-180 lg-mt-150 md-mt-120">
                    <div class="row align-items-center">
                        <div class="col-lg-6 me-auto">
                            <div class="title-ten">
                                <div class="fs-22 mb-15">Secure VPN</div>
                                <h2>Online privacy protection</h2>
                            </div>
                            <p class="fs-22 mt-40 lg-mt-30 mb-40 lg-mb-30">Piku Secure VPN safeguards your online activities from prying hackers, whether you're connected to public Wi-Fi or your home network, ensuring privacy.</p>
                            <a href="service-details" class="btn-nineteen">Learn More</a>
                        </div>
                        <div class="col-lg-5 col-md-8 m-auto m-lg-0">
                            <div class="img-box position-relative z-1 md-mt-40">
                                <img src="{{ URL::asset('assets/images/media/img_23.jpg')}}" alt="">
                                <div class="card-two">
                                    <img src="{{ URL::asset('assets/images/icon/icon_73.png')}}" alt="" class="m-auto">
                                    <h4>Award winner VPN</h4>
                                </div>
                                <!-- /.card-one -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.block-feature -->
			</div>
		</div>
		<!-- /.block-feature-twentyEight -->


		<!--
		=====================================================
			Feedback Section Ten
		=====================================================
		-->
		<div class="feedback-section-ten gap-40 mt-200 lg-mt-150">
			<div class="bg-wrapper pt-150 xl-pt-120 lg-pt-80 pb-350 lg-pb-200">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 m-auto">
                            <div class="title-ten text-center mb-70 lg-mb-40">
                                <h2 class="color-dark">73,0000+ Client using our services</h2>
                            </div>
                        </div>
                    </div>

                    <div class="feedback-slider-seven">
                        <div class="item">
                            <div class="feedback-block-four border border-2 border-dark">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_67.png')}}" alt="" class="logo">
                                <blockquote>“I have been using Piku since I got it and I love it!”</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name text-dark"><span class="fw-500">Rashed kabir,</span> Lead Designer</div>
                                    <ul class="rating style-none d-flex md-mt-10">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.feedback-block-four -->
                        </div>
                        <div class="item">
                            <div class="feedback-block-four border border-2 border-dark">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_68.png')}}" alt="" class="logo">
                                <blockquote>Piku absolute favorite! This VPN brand transformed our lives.</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name text-dark"><span class="fw-500">Mark Joge,</span> Marketing Chief</div>
                                    <ul class="rating style-none d-flex md-mt-10">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.feedback-block-four -->
                        </div>
                        <div class="item">
                            <div class="feedback-block-four border border-2 border-dark">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_67.png')}}" alt="" class="logo">
                                <blockquote>“I have been using Piku since I got it and I love it!”</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name text-dark"><span class="fw-500">Rashed kabir,</span> Lead Designer</div>
                                    <ul class="rating style-none d-flex md-mt-10">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.feedback-block-four -->
                        </div>
                        <div class="item">
                            <div class="feedback-block-four border border-2 border-dark">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_68.png')}}" alt="" class="logo">
                                <blockquote>Piku absolute favorite! This VPN brand transformed our lives.</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name text-dark"><span class="fw-500">Mark Joge,</span> Marketing Chief</div>
                                    <ul class="rating style-none d-flex md-mt-10">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.feedback-block-four -->
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<!-- /.feedback-section-ten -->



        <!--
		=====================================================
			Block Feature Twenty Nine
		=====================================================
		-->
        <div class="block-feature-twentyNine mt-180 xl-mt-150 lg-mt-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 m-auto">
                        <div class="title-ten text-center mb-70 lg-mb-40">
                            <h2>The Guarantee Piku Protection</h2>
                        </div>
                    </div>
                </div>

                <div class="row gx-xxl-5">
                    <div class="col-lg-4">
                        <div class="card-style-fifteen text-center mt-25">
                            <div class="icon d-flex align-items-center justify-content-center border border-2 border-white rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_74.svg')}}" alt=""></div>
                            <h6>24/7  Dedicated <br> Support</h6>
                            <p class="ps-xxl-4 pe-xxl-4">Our team will seamlessly transfer your websites to the new server, free of charge.</p>
                        </div>
                        <!-- /.card-style-fifteen -->
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style-fifteen text-center mt-25">
                            <div class="icon d-flex align-items-center justify-content-center border border-2 border-white rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_75.svg')}}" alt=""></div>
                            <h6>30-Day Money-Back <br>Guarantee</h6>
                            <p class="ps-xxl-4 pe-xxl-4">Our team will seamlessly transfer your websites to the new server, free of charge.</p>
                        </div>
                        <!-- /.card-style-fifteen -->
                    </div>
                    <div class="col-lg-4">
                        <div class="card-style-fifteen text-center mt-25">
                            <div class="icon d-flex align-items-center justify-content-center border border-2 border-white rounded-circle"><img src="{{ URL::asset('assets/images/icon/icon_76.svg')}}" alt=""></div>
                            <h6>AI-Powered Smart <br> Technology</h6>
                            <p class="ps-xxl-4 pe-xxl-4">Our team will seamlessly transfer your websites to the new server, free of charge.</p>
                        </div>
                        <!-- /.card-style-fifteen -->
                    </div>
                </div>
            </div>
        </div>




		<!--
		=====================================================
			Fancy Banner Eleven
		=====================================================
		-->
		<div class="fancy-banner-eleven mt-150 xl-mt-130 lg-mt-80 gap-40">
			<div class="bg-wrapper position-relative z-1 pt-120 lg-pt-80 pb-120 lg-pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="title-ten">
                                <h2 class="color-dark">Secure your small business, from anywhere.</h2>
                            </div>
                            <p class="fs-24 text-dark mt-35 mb-35">Enjoy peace of mind knowing your business’s devices and customer data are more secure.</p>
                            <a href="#" class="btn-nineteen">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
		</div>




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