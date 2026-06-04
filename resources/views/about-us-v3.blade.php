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
			Inner Banner
		============================================== 
		-->
		<div class="inner-banner-one z-1 position-relative gap-40 mt-120 lg-mt-100">
			<div class="bg position-relative z-1 pt-120 xl-pt-100 lg-pt-80 pb-130 xl-pb-100 lg-pb-70">
                <div class="container">
                    <h2>About Us</h2>
                    <ul class="style-none d-flex align-items-center">
                        <li><a href="index-10">Home</a></li>
                        <li>/</li>
                        <li>Service</li>
                    </ul>
                </div>
            </div>
		</div>
		<!-- /.inner-banner-one -->




        <!--
		=====================================================
			Block Feature Twenty Eight
		=====================================================
		-->
		<div class="block-feature-twentyEight mt-180 xl-mt-150 lg-mt-80">
			<div class="container">
				<div class="block-feature">
                    <div class="row">
                        <div class="col-lg-6 order-lg-last ms-auto">
                            <div class="title-ten pe-xxl-5">
                                <div class="fs-22 mb-15">About us</div>
                                <h2>Best Agency for success in business. </h2>
                            </div>
                            <div class="accordion accordion-style-five mt-50 md-mt-20" id="accordionThree">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Who we are?
                                        </button>
                                      </h2>
                                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <p class="fs-22">Our founders Dustin Moskovitz and Justin Rosenstein met while leading Engineering .</p>
                                        </div>
                                      </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            What’s our goal
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <p class="fs-22">Our founders Dustin Moskovitz and Justin Rosenstein met while leading Engineering .</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Our vision
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionThree">
                                        <div class="accordion-body">
                                            <p class="fs-22">Our founders Dustin Moskovitz and Justin Rosenstein met while leading Engineering .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 m-auto m-lg-0">
                            <div class="img-box position-relative z-1 md-mt-40">
                                <img src="{{ URL::asset('assets/images/media/img_33.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.block-feature -->


                <div class="counter-wrapper mt-70 lg-mt-40">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4">
                            <div class="counter-block-one text-center text-lg-start mt-20">
                                <div class="main-count fw-500 text-white">$<span class="counter">9.1</span>B+</div>
                                <span class="fs-22">Coverage</span>
                            </div>
                            <!-- /.counter-block-one -->
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="counter-block-one text-center mt-20">
                                <div class="main-count fw-500 text-white"><span class="counter">20</span>+</div>
                                <span class="fs-22">Years Experience</span>
                            </div>
                            <!-- /.counter-block-one -->
                        </div>
                        <div class="col-xl-2 col-lg-3 ms-auto">
                            <div class="counter-block-one text-center text-lg-start mt-20">
                                <div class="main-count fw-500 text-white"><span class="counter">1.2</span>M</div>
                                <span class="fs-22">Low interest rate</span>
                            </div>
                            <!-- /.counter-block-one -->
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- /.block-feature-twentyEight -->




        <!--
		=====================================================
			Video Banner One
		=====================================================
		-->
        <div class="video-banner-one gap-40 mt-150 lg-mt-80">
            <div class="bg-wrapper d-flex align-items-center justify-content-center">
                <a class="video-btn tran3s rounded-circle d-flex align-items-center justify-content-center" data-fancybox="" href="https://www.youtube.com/embed/aXFSJTjVjw0"><i class="fa-sharp fa-solid fa-play"></i></a>
            </div>
        </div>





		<!--
		=====================================================
			Feedback Section Ten
		=====================================================
		-->
		<div class="feedback-section-ten mt-180 xl-mt-150 lg-mt-80">
			<div class="position-relative">
                <div class="container lg">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <div class="title-ten text-center mb-70 lg-mb-40">
                                <h2>73,0000+ Client using our services</h2>
                            </div>
                        </div>
                    </div>

                    <div class="feedback-slider-seven">
                        <div class="item">
                            <div class="feedback-block-four style-two border border-2 border-white">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_33.png')}}" alt="" class="logo">
                                <blockquote>“I have been using Piku since I got it and I love it!”</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name"><span class="fw-500">Rashed kabir,</span> Lead Designer</div>
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
                            <div class="feedback-block-four style-two border border-2 border-white">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_34.png')}}" alt="" class="logo">
                                <blockquote>Piku absolute favorite! This VPN brand transformed our lives.</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name"><span class="fw-500">Mark Joge,</span> Marketing Chief</div>
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
                            <div class="feedback-block-four style-two border border-2 border-white">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_35.png')}}" alt="" class="logo">
                                <blockquote>“I have been using Piku since I got it and I love it!”</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name"><span class="fw-500">Rashed kabir,</span> Lead Designer</div>
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
                            <div class="feedback-block-four style-two border border-2 border-white">
                                <img src="{{ URL::asset('assets/images/logo/p_logo_36.png')}}" alt="" class="logo">
                                <blockquote>Piku absolute favorite! This VPN brand transformed our lives.</blockquote>

                                <div class="d-lg-flex align-items-center justify-content-between">
                                    <div class="name"><span class="fw-500">Mark Joge,</span> Marketing Chief</div>
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




        <div class="mt-180 xl-mt-150 lg-mt-100">
            <div class="container">
				<div class="fs-24 fw-500 text-white text-center mb-20">Used by over 12,000+ brands all over the world</div>

				<div class="row gx-5 justify-content-center align-items-center">
					<div class="col-xl-3 col-md-4 col-sm-3 col-6 mt-60 lg-mt-40">
						<img src="{{ URL::asset('assets/images//logo/p_logo_33.png')}}" alt="" class="m-auto">
					</div>
					<div class="col-xl-3 col-md-4 col-sm-3 col-6 mt-60 lg-mt-40">
						<img src="{{ URL::asset('assets/images//logo/p_logo_34.png')}}" alt="" class="m-auto">
					</div>
					<div class="col-xl-3 col-md-4 col-sm-3 col-6 mt-60 lg-mt-40">
						<img src="{{ URL::asset('assets/images//logo/p_logo_35.png')}}" alt="" class="m-auto">
					</div>
					<div class="col-xl-3 col-md-4 col-sm-3 col-6 mt-60 lg-mt-40">
						<img src="{{ URL::asset('assets/images//logo/p_logo_36.png')}}" alt="" class="m-auto">
					</div>
					<div class="col-xl-3 col-md-4 col-sm-3 col-6 mt-60 lg-mt-40">
						<img src="{{ URL::asset('assets/images//logo/p_logo_37.png')}}" alt="" class="m-auto">
					</div>
					<div class="col-xl-3 col-md-4 col-sm-3 col-6 mt-60 lg-mt-40">
						<img src="{{ URL::asset('assets/images//logo/p_logo_38.png')}}" alt="" class="m-auto">
					</div>
					<div class="col-xl-3 col-md-4 col-sm-3 col-6 mt-60 lg-mt-40">
						<img src="{{ URL::asset('assets/images//logo/p_logo_39.png')}}" alt="" class="m-auto">
					</div>
				</div>
			</div>
			<!-- /.container -->
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