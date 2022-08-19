		<!-- ...:::: Start Header Section:::... -->
		<header class="header-section d-lg-block d-none">
			<!-- Start Header Top Area -->
			<div class="header-top">

				<div class="row align-items-center headerbanner">
					

					<div class="col-12 ">
						
					<img src="../../../assetss/images/banner_images/headerbanner.jpg" width="100%" height="120px" style="padding: 6px 18px 6px 18px;">
							
					</div>
				

					

				
			</div>

			<div class="mainheaderbg" id="mainheader">

             @if(Auth::check())

			 @if(Auth::user()->group == 'WebUser')
				<div class="container">
					<div class="row d-flex justify-content-between align-items-center">
						<div class="col-6">
							<div class="header-top--left">
								<span><b>Hi ! {{Auth::user()->name}} </b> {{ __('Welcome') }} Dothalu.lk  </span>
							</div>
						</div>
						<div class="col-6">
							<div class="header-top--right">
								<!-- Start Header Top Menu -->
								<ul class="header-user-menu">
								
									<li><a class="textcolor" href="{{url('/web/about')}}">About us</a></li>
									<li><a class="textcolor" href="{{url('/web/contact')}}">Contact us</a></li>
									<!-- <li><a href="">Help</a></li> -->
									<li class="has-user-dropdown">
										<a class="textcolor" href="">Account</a>
										<!-- Header Top Menu's Dropdown -->
										<ul class="user-sub-menu">
											
											<li><a href="{{url('web/myAccount')}}">My Account</a></li>
											
                                            <li><a href="{{url('/web/logout')}}">Logout</a></li>
										</ul>
									</li>
									<div class="">
									<a href="{{url('/web/post')}}"><button type="button" class="postadbtn">{{ __('POST YOUR AD') }}</button></a>
											</div>
								</ul>
								<!-- End Header Top Menu -->
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
			<!-- End Header Top Area -->

			@elseif(Auth::user()->group == 'Editor')
			<div class="container">
					<div class="row d-flex justify-content-between align-items-center">
						<div class="col-6">
							<div class="header-top--left">
								<span><b>Hi ! {{Auth::user()->name}} </b> {{ __('Welcome') }} Dothalu.lk  </span>
							</div>
						</div>
						<div class="col-6">
							<div class="header-top--right">
								<!-- Start Header Top Menu -->
								<ul class="header-user-menu">
								
									<li><a class="textcolor" href="{{url('/web/about')}}">About us</a></li>
									<li><a class="textcolor" href="{{url('/web/contact')}}">Contact us</a></li>
									<!-- <li><a href="">Help</a></li> -->
									<li class="has-user-dropdown">
										<a class="textcolor" href="">Account</a>
										<!-- Header Top Menu's Dropdown -->
										<ul class="user-sub-menu">
											
											<li><a href="{{url('web/myAccount')}}">My Account</a></li>
											<li><a href="{{url('/web/shopview')}}">My Shop</a></li>
                                            <li><a href="{{url('/web/logout')}}">Logout</a></li>
										</ul>
									</li>
									<div class="">
									<a href="{{url('/web/post')}}"><button type="button" class="postadbtn">{{ __('POST YOUR AD') }}</button></a>
											</div>
								</ul>
								<!-- End Header Top Menu -->
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
			<!-- End Header Top Area -->

			@endif

            @else
            <div class="container">
					<div class="row d-flex justify-content-between align-items-center">
						<div class="col-6">
							<div class="header-top--left">
								<span><b>Hi ! </b> {{ __('Welcome') }} Dothalu.lk  </span>
							</div>
						</div>
						<div class="col-6">
							<div class="header-top--right">
								<!-- Start Header Top Menu -->
								<ul class="header-user-menu">
								
									<li><a class="textcolor" href="{{url('/web/about')}}">About us</a></li>
									<li><a class="textcolor" href="{{url('/web/contact')}}">Contact us</a></li>
									
                                    <li><a class="textcolor" href = "{{url('web/register')}}">Register or Login</a></li>
									<div class="">
									<a href = "{{url('web/register')}}"><button type="button" class="postadbtn">{{ __('POST YOUR AD') }}</button></a>
											</div>
								</ul>
								<!-- End Header Top Menu -->
							</div>
						</div>
					</div>
				</div>
			<!-- </div> -->
			<!-- End Header Top Area -->

			@endif
			
			<!-- Start Header Center Area -->
			<div class="header-center">
				<div class="container">
					<div class="row d-flex justify-content-between align-items-center">
						<div class="col-3">
							<!-- Logo Header -->
							<div class="header-logo">
								<a href="{{url('/')}}"><img src="../../../assetss/images/logo/1dothalu logo.png" alt=""></a>
							</div>
						</div>
						<div class="col-9">
							<!-- Start Header Search -->
							<div class="header-search">
								<form action="/allsearchvehicle" method="post">
								@csrf
									<!-- <div class="header-search-box default-search-style d-flex">
										<input class="default-search-style-input-box border-around border-right-none" name="vehiclefullsearch" type="search" placeholder="Search entire store here ..." required>
										<button class="default-search-style-input-btn" type="submit" onchange="this.form.submit();"><i class="fas fa-search"></i></button>
									</div> -->
								</form>
							</div>
							<!-- End Header Search -->
						</div>
						<div class="col-3 text-end">
						</div>
					</div>
				</div>
			</div>
			<!-- End Header Center Area -->
			</div>
			</header>
			
		<!-- ...:::: End Header Section:::... -->
		<!-- ...:::: Start Mobile Header Section:::... -->
		<div class="mobile-header-section d-block d-lg-none">
			<!-- Start Mobile Header Wrapper -->
			<div class="mobile-header-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-12 d-flex justify-content-between align-items-center">
							<div class="mobile-header--left">
								<a href="index.html" class="mobile-logo-link">
								<img src="assets/images/logo/1dothalu logo.png" alt="" class="mobile-logo-img">
								</a>
							</div>
							<div class="mobile-header--right">
								<a href="#mobile-menu-offcanvas" class="mobile-menu offcanvas-toggle">
								<span class="mobile-menu-dash"></span>
								<span class="mobile-menu-dash"></span>
								<span class="mobile-menu-dash"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Mobile Header Wrapper -->
		</div>
		<!-- ...:::: Start Mobile Header Section:::... -->
		<!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
		<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-leftside offcanvas-mobile-menu-section">
			<!-- Start Offcanvas Header -->
			<div class="offcanvas-header d-flex justify-content-end">
				<button class="offcanvas-close"><i class="fa fa-times"></i></button>
			</div>
			<!-- End Offcanvas Header -->
			<!-- Start Offcanvas Mobile Menu Wrapper -->
			<div class="offcanvas-mobile-menu-wrapper">
			@if(Auth::check())
				<!-- Start Mobile Menu User Top -->
				<div class="mobile-menu-top">
					<span><b>Hi ! </b>  {{Auth::user()->name}} </b> {{ __('Welcome') }} Dothalu.lk  </span>
					<!-- Start Header Top Menu -->
					<ul class="mobile-menu-user-menu">
						<li class="has-mobile-user-dropdown">
							<a class="mobile-user-menu-link" href="">Account</a>
							<!-- Header Top Menu's Dropdown -->
							<ul class="mobile-user-sub-menu">
								<li><a href="{{url('web/myAccount')}}">My Account</a></li>			
                                <li><a href="{{url('/web/logout')}}">Logout</a></li>
							</ul>
						</li>
						<li><a href="{{url('/')}}">Home</a></li>
						<a href="{{url('/web/post')}}"><button type="button" class="btn btn-primary" >{{ __('POST YOUR AD') }}</button></a>
					</ul>
					<!-- End Header Top Menu -->
				</div>
				<!-- End Mobile Menu User Top -->
				@else
				<!-- Start Mobile Menu User Top -->
				<div class="mobile-menu-top">
					<span><b>Hi ! </b> <a href = "">Sign In </a> Or <a href = "">Register </a>  </span>
					<!-- Start Header Top Menu -->
					<ul class="mobile-menu-user-menu">
						<li>
							<a class="mobile-user-menu-link" href="{{url('/')}}">Home</a>
						</li>
						<li> <a href = "{{url('web/register')}}">Register or Login </a> </li>
						<button type="button" class="btn btn-primary" >{{ __('POST YOUR AD') }}</button>
					</ul>
					<!-- End Header Top Menu -->
				</div>
				<!-- End Mobile Menu User Top -->
				@endif


				<!-- Start Mobile Menu User Center -->
				<div class="mobile-menu-center">
					<!-- <form action="#" method="post"> -->
						<!-- <div class="header-search-box default-search-style d-flex">
							<input class="default-search-style-input-box border-around border-right-none" type="search" placeholder="Search entire store here ..." required>
							<button class="default-search-style-input-btn" type="submit"><i class="fas fa-search"></i></button>
						</div> -->
					<!-- </form> -->
					<div class="mobile-menu-customer-support">
						<div class="mobile-menu-customer-support-icon">
							<img src="assets/images/icon/support-icon.png" alt="">
						</div>
						<div class="mobile-menu-customer-support-text">
							<span>Customer Support</span>
							<a class="mobile-menu-customer-support-text-phone" href="tel:0710 45 45 45">0710 45 45 45</a>
						</div>
					</div>
				</div>
				<!-- End Mobile Menu User Center -->
				<!-- Start Mobile Menu Bottom -->
				<div class="mobile-menu-bottom">
					<!-- Start Mobile Menu Nav -->
					<div class="offcanvas-menu">
						<ul>
							<li >
								<a  href="{{url('/')}}">Home </a>
							</li>
						 
							<li><a href="{{url('/web/about')}}">About Us</a></li>
							<li><a href="{{url('/web/contact')}}">Contact Us</a></li>
						</ul>
					</div>
					<!-- End Mobile Menu Nav -->
					<!-- Mobile Manu Mail Address -->
					<a class="mobile-menu-email icon-text-end" href="mailto:info@yourdomain.com"><i class="fa fa-envelope-o"> info@yourdomain.com</i></a>
					<!-- Mobile Manu Social Link -->
					<ul class="mobile-menu-social">
						<li><a href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="" class="youtube"><i class="fa fa-youtube"></i></a></li>
						<li><a href="" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="" class="instagram"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<!-- End Mobile Menu Bottom -->
			</div>
			<!-- End Offcanvas Mobile Menu Wrapper -->
		</div>
		<!-- ...:::: End Offcanvas Mobile Menu Section:::... -->
		<!-- ...:::: Start Offcanvas Addcart Section :::... -->
		<div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
			<!-- Start Offcanvas Header -->
			<div class="offcanvas-header text-end">
				<button class="offcanvas-close"><i class="fa fa-times"></i></button>
			</div>
			<!-- End Offcanvas Header -->
			
		</div>
		<!-- ...:::: End  Offcanvas Addcart Section :::... -->
		<!-- ...:::: Start Offcanvas Mobile Menu Section:::... -->
		<div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
			<!-- Start Offcanvas Header -->
			<div class="offcanvas-header text-end">
				<button class="offcanvas-close"><i class="fa fa-times"></i></button>
			</div>
			<!-- ENd Offcanvas Header -->
		</div>
		<!-- ...:::: End Offcanvas Mobile Menu Section:::... -->
		<div class="offcanvas-overlay"></div>

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("mainheader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
	$(".mainheaderbg").css("background-color","#fff");
	$(".mainheaderbg").css("color","#000");
	$(".textcolor").css("color","#000");
	// $(".sidebar").show();
	
  } else {
    header.classList.remove("sticky");
	$(".mainheaderbg").css("background-color","#fff");
	$(".mainheaderbg").css("color","#000");
	$(".textcolor").css("color","#000");
	// $(".sidebar").hide();
  }
}
// $(function() {
//     $(window).on("scroll", function() {
//         if($(window).scrollTop() > 50) {
//             $(".mainheaderbg").addClass("active");
// 			$(".mainheaderbg").css("background-color","#000");
// 			$(".mainheaderbg").css("color","#fff");
// 			$("a").css("color","#fff");
			
			
//         } else {
//             //remove the background property so it comes transparent again (defined in your css)
//            $(".mainheaderbg").removeClass("active");
// 		   $(".mainheaderbg").css("background-color","#fff");
// 		   $(".mainheaderbg").css("color","#000");
// 		   $("a").css("color","#000");
//         }
//     });
// });
</script>