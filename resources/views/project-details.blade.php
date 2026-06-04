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
			Sidenav
		============================================== 
		-->
        <div class="offcanvas offcanvas-end sidebar-nav" tabindex="-1" id="sideNav" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header p0">
            	<div class="logo order-lg-0">
					<a href="index" class="d-flex align-items-center">
						<img src="{{ URL::asset('assets/images/logo/logo_02.svg')}}" alt="">
					</a>
				</div>
            	<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="wrapper mt-10 h-100">
				<div class="d-flex flex-column h-100">
					<div class="sidebar-nav-item">
						<ul class="style-none">
							<li class="nav-item">
								<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Home</a>
								<ul class="dropdown-menu">
									<li><a href="index" class="dropdown-item"><span>Payment Service</span></a></li>
									<li><a href="index-2" class="dropdown-item"><span>AI Writer</span></a></li>
									<li><a href="index-3" class="dropdown-item"><span>Website Builder</span></a></li>
									<li><a href="index-4" class="dropdown-item"><span>CRM</span></a></li>
									<li><a href="index-5" class="dropdown-item"><span>Project Management</span></a></li>
									<li><a href="index-6" class="dropdown-item"><span>Mobile App Landing</span></a></li>
									<li><a href="index-7" class="dropdown-item"><span>Digital Agency</span></a></li>
									<li><a href="index-8" class="dropdown-item"><span>Help Desk</span></a></li>
									<li><a href="index-9" class="dropdown-item"><span>Web Hosting</span></a></li>
									<li><a href="index-10" class="dropdown-item"><span>Cyber Security</span></a></li>
							  	</ul>
							</li>
							<li class="nav-item dropdown">
							  	<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Portfolio</a>
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
							<li class="nav-item">
								<a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">Pages</a>
								<ul class="dropdown-menu">
									<li><a href="about-us-v1" class="dropdown-item"><span>About Us</span></a></li>
									<li><a href="team-v1" class="dropdown-item"><span>Team</span></a></li>
									<li><a href="service-v1" class="dropdown-item"><span>Service</span></a></li>
									<li><a href="pricing-v1" class="dropdown-item"><span>Pricing</span></a></li>
									<li><a href="faq-v1" class="dropdown-item"><span>FAQ's</span></a></li>
							  </ul>
							</li>
							<li class="nav-item"><a href="blog-v3">News</a></li>
							<li class="nav-item"><a href="contact-v1">Contact us</a></li>
						</ul>
					</div>
					<div><a href="login" class="btn-eleven style-two w-100 tran3s">Login</a></div>
					<div class="address-block mt-50">
						<h4 class="title pb-15">Our Address</h4>
						<p>Chowrastar Mirpur- 1210, Sangu <br>River, Dhaka</p>
						<p>Urgent issue? call us at <br><a href="tel:310.841.5500">310.841.5500</a></p>
					</div>
					<ul class="style-none d-flex flex-wrap w-100 justify-content-between align-items-center social-icon pt-25 mt-auto">
						<li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-viber"></i></a></li>
					</ul>
				</div>
            </div>
        </div>


		
		<!-- 
		=============================================
			Theme Main Menu
		============================================== 
		-->
		<header class="theme-main-menu menu-style-four sticky-menu menu-overlay">
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index" class="d-flex align-items-center">
								<img src="{{ URL::asset('assets/images/logo/logo_01.1.svg')}}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-sm-inline-block">
									<a href="contact-v1" class="btn-five tran3s">Let’s Talk</a>
                                </li>
								<li class="ms-4"><button class="sidenavbtn rounded-circle tran3s" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideNav" aria-controls="sideNav"><i class="fa-sharp fa-light fa-bars-filter"></i></button></li>
							</ul>
						</div>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header> 
		<!-- /.theme-main-menu -->



		<!--
		=====================================================
			Project Details
		=====================================================
		-->
		<div class="project-details mt-200 xl-mt-150">
			<div class="container">
				<div class="position-relative">
					<div class="row align-items-end">
                        <div class="col-md-8">
                            <div class="title-three">
                                <h2>Mobile app UI & Branding</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex justify-content-md-end">
                                <ul class="style-none d-flex align-items-center share-icon mb-15 sm-mt-30">
                                    <li>Share</li>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="border-top border-2 border-dark mt-55 lg-mt-30 sm-mt-10 pt-60 lg-pt-20 pb-80 lg-pb-40">
                        <ul class="project-info style-none d-flex flex-wrap justify-content-between">
                            <li>
                                <h6>Date</h6>
                                <span>23 Apr, 2026</span>
                            </li>
                            <li>
                                <h6>Client</h6>
                                <span>CreativeGigs Themes</span>
                            </li>
                            <li>
                                <h6>Category</h6>
                                <span>Branding & UI/UX</span>
                            </li>
                            <li>
                                <h6>Website</h6>
                                <span>www.zigzagauto.com</span>
                            </li>
                        </ul>
                    </div>

					<div class="media-lg">
                        <img src="{{ URL::asset('assets/images/media/img_70.jpg')}}" alt="" class="w-100">
                    </div>

                    <h3>Project Overview.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaum laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit volupta velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum magna quis nostured sed do eiusmod tempor .</p>
                    <h3>Process & Challenge</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaum laboris nisi </p>
                    <ul class="style-none list-type-one mb-35">
                        <li><span>Market Research -</span> Crafting brand identity with logo, website, and social media design to ensure a strong digital presence and brand recognition.</li>
                        <li><span>Strategy Planning -</span> Utilizing content marketing and ads to bolster brand &amp; engage target audience effectively.</li>
                        <li><span>Finalize -</span> Duis aute irure dolor in reprehenderit volupta velit esse cillum dolore</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaum ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit volupta velit esse cillum dolore eu fugiat nulla pariatur.</p>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="media-md mb-25"><img src="{{ URL::asset('assets/images/media/img_71.jpg')}}" alt="" class="w-100"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="media-md mb-25"><img src="{{ URL::asset('assets/images/media/img_72.jpg')}}" alt="" class="w-100"></div>
                            <div class="media-md mb-25"><img src="{{ URL::asset('assets/images/media/img_73.jpg')}}" alt="" class="w-100"></div>
                        </div>
                    </div>
                    <h3>Summery</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullaum laboris nisi</p>
                    <p>Duis aute irure dolor in reprehenderit volupta velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum magna quis nostured sed do eiusmod tempor . ut aliquip ex ea commodo consequat.</p>

                    <div class="page-pagination mt-90 lg-mt-50 border-top border-bottom border-2 border-white">
                        <ul class="style-none d-flex justify-content-between">
                            <li>
                                <a href="#">
                                    <span class="d-flex align-items-center align-items-md-end">
                                        <i class="bi bi-arrow-left"></i>
                                        <span class="ms-3 ms-md-4">
                                            <span class="pr-dir text-uppercase d-block">Previous</span>
                                            <span class="pr-name d-none d-md-block tran3s fw-500">Finance & Banking App</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="d-flex align-items-center text-end align-items-md-end">
                                        <span class="me-3 me-md-4">
                                            <span class="pr-dir text-uppercase d-block">Next</span>
                                            <span class="pr-name d-none d-md-block tran3s fw-500">Product Branding</span>
                                        </span>
                                        <i class="bi bi-arrow-right"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
        <!-- /.project-details -->




		<!--
		=====================================================
			Fancy Banner Eight
		=====================================================
		-->
		<div class="fancy-banner-eight position-relative z-1 mt-200 xl-mt-150 lg-mt-100 mb-120 lg-mb-80">
			<div class="container xl">
				<div class="row">
					<div class="col-xl-10 col-lg-10 m-auto text-center">
						<h2 class="hero-heading font-Montserrat d-flex align-items-center justify-content-center flex-wrap">
                            <span>ANY &nbsp;</span>
                            <span class="position-relative">
                                PROJECT
								<img src="{{ URL::asset('assets/images/icon/smile.svg')}}" alt="" class="shapes smile_icon">
                                <img src="{{ URL::asset('assets/images/shape/shape_78.png')}}" alt="" class="shapes shape_01">
                            </span>
                            <img src="{{ URL::asset('assets/images/shape/shape_61.svg')}}" alt="" class="shape shape_02 me-lg-4">
                            <span>IN MIND?</span>
                            <img src="{{ URL::asset('assets/images/shape/shape_77.svg')}}" alt="" class="shape shape_03 ms-lg-4">
                        </h2>
						<a href="contact-v2" class="btn-seventeen mt-50 lg-mt-30">Let’s Talk</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-eight -->





		<!--
		=====================================================
			Footer Two
		=====================================================
		-->
		<div class="footer-two p-30">
			<div class="bg-wrapper">
				<div class="container">
					<div class="position-relative">
						<div class="row">
							<div class="col-lg-5 me-auto">
								<div class="footer-intro mb-30 me-xxl-5 pe-xxl-4">
                                    <h3 class="text-white">Subscribe to our <span>newsletter.</span></h3>
									<form action="#" class="position-relative">
                                        <input type="email" placeholder="Your email address">
                                        <button class="tran3s"><img src="{{ URL::asset('assets/images/icon/icon_05.svg')}}" alt="" class="m-auto"></button>
                                    </form>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-6">
								<div class="footer-nav mb-40">
									<ul class="footer-nav-link style-none">
										<li><a href="about-us-v1">About </a></li>
										<li><a href="project-v1">Work Gallery</a></li>
										<li><a href="pricing-v2">Pricing</a></li>
										<li><a href="blog-v1">Blog</a></li>
										<li><a href="contact-v1">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xl-2 col-lg-3 col-6">
								<div class="footer-nav mb-40">
									<ul class="footer-nav-link style-none">
										<li><a href="faq-v1">Faq’s</a></li>
										<li><a href="faq-v1">Privacy Policy</a></li>
										<li><a href="faq-v2">Terms</a></li>
									</ul>
									<img src="{{ URL::asset('assets/images/shape/shape_18.svg')}}" alt="" class="mt-50">
								</div>
							</div>
							<div class="col-xxl-2 col-xl-3">
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
									<li><a href="faq-v1">Demo .</a></li>
									<li><a href="faq-v2">Partners .</a></li>
									<li><a href="faq-v1">Careers</a></li>
								</ul>
								<img src="{{ URL::asset('assets/images/shape/shape_19.svg')}}" alt="" class="ms-5 d-none d-md-block">
							</div>
							<p class="copyright-text text-center m0"><span>@2026 Piku inc.</span> All Right Reserved</p>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /.footer-two -->




		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>
		@endsection
		@section('js')
        <!-- isotop -->
		<script  src="assets/vendor/isotope.pkgd.min.js"></script>
@endsection