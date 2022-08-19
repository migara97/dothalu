	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<!-- <a href="#" class="media-left"><img src="../assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a> -->
								<div class="media-body">
									<span class="media-heading text-semibold">{{Auth::user()->group}}</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Sri Lanka, Colombo
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->

@if(Auth::user()->group == 'Superadmin'||Auth::user()->group == 'Admin')
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="/adindex"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
								<li>
									<a href="#"><i class="icon-stack2"></i> <span>User</span></a>
									<ul>
										<li><a href="{{url('/userRegister')}}">Register</a></li>
                                        <li><a href="{{url('/userView')}}">view</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>


								<!-- <li>
									<a href="#"><i class="icon-stack2"></i> <span>Districts</span></a>
									<ul>
										
                                        <li><a href="{{url('/districtsView')}}">view</a></li> -->
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									<!-- </ul>
								</li> -->

								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Category</span></a>
									<ul>
										
                                        <!-- <li><a href="{{url('/CategoryAdd')}}">Category Add</a></li> -->
										<li><a href="{{url('/viewCategory')}}">Category View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Sub Category</span></a>
									<ul>
										
                                        <li><a href="{{url('/SubcategoryAdd')}}">Sub Category Add</a></li>
										<li><a href="{{url('/viewSubcategory')}}">Sub Category View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>


								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Sub Category Level</span></a>
									<ul>
										
                                        <li><a href="{{url('/SubcategorylevelAdd')}}">Sub Category Add</a></li>
										<li><a href="{{url('/viewSubcategorylevel')}}">Sub Category View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Banners</span></a>
									<ul>
										
                                        <li><a href="{{url('/bannerAdd')}}">Banner Add</a></li>
										<li><a href="{{url('/viewbanner')}}">Banner View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>


								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Old Banners</span></a>
									<ul>
										
                                        <li><a href="{{url('/oldbannerAdd')}}">Old Banner Add</a></li>
										<li><a href="{{url('/viewoldbanner')}}">Old Banner View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>


								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Web User</span></a>
									<ul>
										
                                        <li><a href="{{url('/webuserAdd')}}">Web User Add</a></li>
										<li><a href="{{url('/viewWebuser')}}">Web User View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>



								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Shop</span></a>
									<ul>
										
                                        <li><a href="{{url('/shopAdd')}}">Shop Add</a></li>
										<li><a href="{{url('/shopView')}}">Shop View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>




								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Ads</span></a>
									<ul>
										
                                        <li><a href="{{url('/adsAdd')}}">Ads Add</a></li>
										<li><a href="{{url('/adsView')}}">Ads View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>




								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Notification</span></a>
									<ul>
										
                                        <li><a href="{{url('/natificationIndex')}}">Notification Add</a></li>
										<li><a href="{{url('/natificationView')}}">Notification View</a></li>
										<!-- <li><a href="layout_navbar_sidebar_fixed.html">Fixed navbar &amp; sidebar</a></li> -->
										
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-stack2"></i> <span>Shop Request</span></a>
									<ul>

										<li><a href="{{url('/shoprequestView')}}">Request View</a></li>
	
									</ul>
								</li>





								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->





@endif
				</div>
			</div>
			<!-- /main sidebar -->