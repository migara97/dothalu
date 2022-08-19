@extends('layouts.main')

@section('content')


			<!-- Main content -->
			<div class="content-wrapper">
			@if ($errors->any())
			<div class="row col-6">
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Banner</span> - Add</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">Banner</a></li>
							<li class="active">Add</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-6">

							<!-- Basic layout-->
							<form action="/saveBanner" method="POST" enctype="multipart/form-data">
                            @csrf
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Banner</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>

									<div class="panel-body">

										

								<div class="row">
									<div class="col-md-6">								
										<div class="form-group">
											<label>Start Date </label>
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input type="text" class="form-control daterange-single"  name="startDate" date='Y-m-d'>
											</div>
										</div>
									</div>
									

									<div class="col-md-6">	
										<div class="form-group">
											<label>End Date </label>
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-calendar22"></i></span>
												<input type="text" class="form-control daterange-single" name="endDate" date='Y-m-d')>
											</div>
										</div>
									</div>
								</div>	



										<div class="form-group">
											<label>Category</label>
											<select class="select" name="category">
													<option value="">select</option>
													<option value="TopBanner">Top Banner</option>
													<option value="MiddleBanner">Middle Banner</option>
													<option value="LeftSideBanner">Left SideBanner</option>
													<option value="RightSideBanner">Right SideBanner</option>
                                                    <option value="BottomBanner">Bottom Banner</option>
											</select>
										</div>
									
										<div class="form-group">
											<label>Your Banner Image:</label>
											<input type="file" class="file-styled" name="img">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
										</div>


										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>

                    <!-- Footer -->
                    <div class="footer text-muted">
						&copy; 2021. <a href="#"> Web App </a> by <a href="" target="_blank">Dothalu</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



@endsection