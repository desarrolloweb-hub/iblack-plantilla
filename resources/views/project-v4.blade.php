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
                    <h2>OUR PROJECTS</h2>
                    <ul class="style-none d-flex align-items-center">
                        <li><a href="index-10">Home</a></li>
                        <li>/</li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
		</div>
		<!-- /.inner-banner-one -->




        <!--
		=====================================================
			Project Section Four
		=====================================================
		-->
		<div class="project-section-four mt-110 lg-mt-80">
			<div class="container">
                <div class="filter-nav-three">
                    <ul class="style-none d-flex justify-content-center flex-wrap isotop-menu-wrapper">
                        <li class="is-checked" data-filter="*">All</li>
                        <li data-filter=".market">Marketing </li>
                        <li data-filter=".application">Application</li>
                        <li data-filter=".design">Design</li>
                        <li data-filter=".dev">Development</li>
                        <li data-filter=".brand">Branding</li>
                    </ul>
                </div>
			</div>

            <div class="gap-40 mt-60 lg-mt-40">
                <div id="isotop-gallery-wrapper" class="grid-3column">
                    <div class="grid-sizer"></div>
                    <div class="isotop-item application brand mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_52.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item design mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_53.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item market dev mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_54.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item market brand mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_55.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item application dev mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_56.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item design mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_57.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item market brand mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_58.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item application dev mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_59.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                    <div class="isotop-item design mb-40 lg-mb-20">
                        <div class="project-block-four position-relative z-1">
                            <img src="{{ URL::asset('assets/images/media/img_60.jpg')}}" alt="" class="w-100 media-img tran3s">
                            <a href="#" class="btn-round"><i class="bi bi-arrow-up-right"></i></a>
                        </div>
                        <!-- /.project-block-four -->
                    </div>
                    <!-- /.isotop-item -->
                </div>
                <!-- /#isotop-gallery-wrapper -->
            </div>
		</div>
		<!-- /.project-section-four  -->




        <!--
		=====================================================
			Block Feature Twenty Eight
		=====================================================
		-->
		<div class="block-feature-twentyEight mt-100 lg-mt-50">
			<div class="container">
				<div class="block-feature text-center border-2 border-bottom border-dark pb-130 lg-pb-60">
                    <div class="row align-items-center">
                        <div class="col-xxl-10 col-lg-9 m-auto">
                            <div class="title-ten">
                                <h2>Secure your small business, from anywhere.</h2>
                            </div>
                            
                        </div>
                        <div class="col-xl-6 m-auto">
                            <p class="fs-24 mt-25 mb-35">Enjoy peace of mind knowing your business’s devices and customer data are more secure.</p>
                        </div>
                    </div>
                    <a href="#" class="btn-nineteen">Learn More</a>
                </div>
                <!-- /.block-feature -->
			</div>
		</div>
		<!-- /.block-feature-twentyEight -->





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
        <!-- isotop -->
		<script  src="assets/vendor/isotope.pkgd.min.js"></script>
@endsection