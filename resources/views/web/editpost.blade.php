<html>
@include('templates/head2')


<link rel="shortcut icon" href="{{asset('/')}}assetss/images/favicon.ico" type="image/png">

<!-- ::::::::::::::All CSS Files here :::::::::::::: -->
<!-- Vendor CSS -->
<link rel="stylesheet" href="{{asset('/')}}assetss/css/vendor/font-awesome.min.css">
<!-- <link rel="stylesheet" href="{{asset('/')}}assetss/css/vendor/plaza-icon.css"> -->
<link rel="stylesheet" href="{{asset('/')}}assetss/css/vendor/jquery-ui.min.css">

<!-- Plugin CSS -->
<link rel="stylesheet" href="{{asset('/')}}assetss/css/plugins/slick.css">
<link rel="stylesheet" href="{{asset('/')}}assetss/css/plugins/animate.min.css">
<link rel="stylesheet" href="{{asset('/')}}assetss/css/plugins/aos.min.css">
<link rel="stylesheet" href="{{asset('/')}}assetss/css/plugins/nice-select.css">
<link rel="stylesheet" href="{{asset('/')}}assetss/css/plugins/venobox.min.css">

<!-- Main CSS -->
<link rel="stylesheet" href="{{asset('/')}}assetss/css/style.css">
<link rel="stylesheet" href="{{asset('/')}}assetss/css/slider.css">


<!-- icon -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


<!-- sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





<body>
@include('sweet::alert')
@include('web/include/header')

<br>

<!-- Page container -->
<div class="page-container">
			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<!-- <div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Ads</span> - Add</h4>
						</div>

						
					</div> -->

					<!-- <div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">Ads</a></li>
							<li class="active">Add</li>
						</ul>

						
					</div> -->
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-12">

							<!-- Basic layout-->
							<form action="/webadUpdate1/{{$ad->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Ads</h5>
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
										<div class="form-group col-md-3">
											<label>Title: </label>
											<input type="text" class="form-control" name="title" placeholder="Enter Title" style="font-size:14px;" value="{{$ad->title}}">
										</div>



									
										<div class="form-group col-md-3">
                                            <label>Condition:</label>
											<select class="select" name="condition" id="">
                                                    <option value="">Select </option>
													<option value="Brand New" @if('Brand New'==$ad->condition) selected @endif>Brand New</option>
													<option value="Recondition" @if('Recondition'==$ad->condition) selected @endif>Recondition</option>
													<option value="Salvages" @if('Salvages'==$ad->condition) selected @endif>Salvages</option>
													<!-- <option value="Registered">Registered</option>            -->
											</select>
										</div>

										<div class="form-group col-md-3">
                                            <label>Accessory Type:</label>
											<select class="select" name="accessoryType" id="">
                                                    <option value="">Select </option>
													<option value="Body Components" @if('Body Components'==$ad->accessoryType) selected @endif>Body Components</option>
													<option value="Car Audio Systems" @if('Car Audio Systems'==$ad->accessoryType) selected @endif>Car Audio Systems</option>
													<option value="Lighting & Indicators" @if('Lighting & Indicators'==$ad->accessoryType) selected @endif>Lighting & Indicators</option>
													<option value="Wheels, Tyres & Rims" @if('Wheels, Tyres & Rims'==$ad->accessoryType) selected @endif>Wheels, Tyres & Rims</option>
													<option value="Suspension, Steering & Handling" @if('Suspension, Steering & Handling'==$ad->accessoryType) selected @endif>Suspension, Steering & Handling</option>
													<option value="Engines & Engine Parts" @if('Engines & Engine Parts'==$ad->accessoryType) selected @endif>Engines & Engine Parts</option>
													<option value="Accessories" @if('Accessories'==$ad->accessoryType) selected @endif>Accessories</option>
													<option value="Interior Parts & Furnishings" @if('Interior Parts & Furnishings'==$ad->accessoryType) selected @endif>Interior Parts & Furnishings</option>
													<option value="Brakes" @if('Brakes'==$ad->accessoryType) selected @endif>Brakes</option>
													<option value="Air Conditioning Heating" @if('Air Conditioning Heating'==$ad->accessoryType) selected @endif>Air Conditioning Heating</option>
													<option value="Mirror Components" @if('Mirror Components'==$ad->accessoryType) selected @endif>Mirror Components</option>
													<option value="Undercarriage Parts" @if('Undercarriage Parts'==$ad->accessoryType) selected @endif>Undercarriage Parts</option>
													<option value="Helmets, Clothing & Protection" @if('Helmets, Clothing & Protection'==$ad->accessoryType) selected @endif>Helmets, Clothing & Protection</option>
													<option value="Exhausts & Exhaust Parts" @if('Exhausts & Exhaust Parts'==$ad->accessoryType) selected @endif>Exhausts & Exhaust Parts</option>
													<option value="Air Intake & Fuel Delivery" @if('Air Intake & Fuel Delivery'==$ad->accessoryType) selected @endif>Air Intake & Fuel Delivery</option>
													<option value="Tools & Equipment" @if('Tools & Equipment'==$ad->accessoryType) selected @endif>Tools & Equipment</option>
													<option value="Automobile Batteries" @if('Automobile Batteries'==$ad->accessoryType) selected @endif>Automobile Batteries</option>
													<option value="Windscreen Wipers & Washers" @if('Windscreen Wipers & Washers'==$ad->accessoryType) selected @endif>Windscreen Wipers & Washers</option>
													<option value="Transmission & Drivetrain" @if('Transmission & Drivetrain'==$ad->accessoryType) selected @endif>Transmission & Drivetrain</option>
													<option value="Oils, Lubricants & Fluids" @if('Oils, Lubricants & Fluids'==$ad->accessoryType) selected @endif>Oils, Lubricants & Fluids</option>
													<option value="Chassis" @if('Chassis'==$ad->accessoryType) selected @endif>Chassis</option>
													<option value="Turbos & Superchargers" @if('Turbos & Superchargers'==$ad->accessoryType) selected @endif>Turbos & Superchargers</option>
													<option value="Footrests, Pedals & Pegs" @if('Footrests, Pedals & Pegs'==$ad->accessoryType) selected @endif>Footrests, Pedals & Pegs</option>  
													<option value="Auto part" @if('Auto part'==$ad->accessoryType) selected @endif>Auto part</option>
													<option value="Tyres / rims" @if('Tyres / rims'==$ad->accessoryType) selected @endif>Tyres / rims</option>													        
											</select>
										</div>

											<div class="form-group col-md-3">
												<label>Chassis Code:</label>
												<input type="text" class="form-control" name="chassisCode" placeholder="Enter Body Type" style="font-size:14px;" value="{{$ad->chassisCode}}">
											</div>
                                        </div>

                                        <div class="row">
											<div class="form-group col-md-3">
												<label>Part Number:</label>
												<input type="text" class="form-control" name="partNumber" placeholder="Enter Part Number" style="font-size:14px;" value="{{$ad->partNumber}}">
											</div>
										
											<div class="form-group col-md-3">
												<label>Vehicle Model:</label>
												<input type="text" class="form-control" name="vehicleModel" placeholder="Enter Vehicle Model" style="font-size:14px;" value="{{$ad->vehicleModel}}">
											</div>

											<div class="form-group col-md-3">
												<label>Year:</label>
												<input type="text" class="form-control" name="year" placeholder="Enter Year" style="font-size:14px;" value="{{$ad->year}}">
											</div>
											<div class="form-group col-md-3">
												<label>Qty:</label>
												<input type="text" class="form-control" name="qty" placeholder="Enter Quantity" style="font-size:14px;" value="{{$ad->qty}}">
											</div>
										</div>

									

										

									<div class="row">
                                        <div class="form-group col-md-3">
											<label>Discription:</label>
											<textarea rows="4" cols="4" class="form-control" name="discription" placeholder="Enter Discription" style="font-size:14px;">{{$ad->discription}}</textarea>
										</div>	

										
									

								
										<div class="form-group col-md-3">
											<label>Phone Number:</label>
											<input type="text" class="form-control" name="salNumber" placeholder="Enter Phone Number" style="font-size:14px;" value="{{$ad->salNumber}}">
										</div>									



                                        <div class="form-group col-md-3">
											<label>Price:</label>
											<input type="text" class="form-control" name="price" placeholder="Enter Price" style="font-size:14px;" value="{{$ad->price}}">
										</div>
								

										<div class="form-group col-sm-3">
											<label>Address:</label>
											<textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter Address" style="font-size:14px;">{{$ad->address}}</textarea>
										</div>
									</div>
								

									<div class="row">
										<div class="form-group col-md-3">
											<label>Image 1: 800 x 800</label>
											<input type="file" class="file-styled" name="img1" id="imgInp1">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="{{ asset('/image/ads/'.$ad->image1) }}" id="blah1" width="92" height="92">
										</div>

                                        <div class="form-group col-md-3">
											<label>Image 2: 800 x 800</label>
											<input type="file" class="file-styled" name="img2" id="imgInp2">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="{{ asset('/image/ads/'.$ad->image2) }}" id="blah2" width="92" height="92">
										</div>

                                        <div class="form-group col-md-3">
											<label>Image 3: 800 x 800</label>
											<input type="file" class="file-styled" name="img3" id="imgInp3">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="{{ asset('/image/ads/'.$ad->image3) }}" id="blah3" width="92" height="92">
										</div>

                                        <div class="form-group col-md-3">
											<label>Image 4: 800 x 800</label>
											<input type="file" class="file-styled" name="img4" id="imgInp4">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" id="blah4" src="{{ asset('/image/ads/'.$ad->image4) }}" width="92" height="92">
										</div>
									</div>

									<div class="row">
										<div class="form-group col-md-3">
											<label>Image 5: 800 x 800</label>
											<input type="file" class="file-styled" name="img5" id="imgInp5">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" id="blah5" src="{{ asset('/image/ads/'.$ad->image5) }}" width="92" height="92">
										</div>
									</div>



										<div class="text-right col-md-12">
											<button type="submit" class="btn btn-primary" style="font-size:14px;">Update form </button>
										</div>
									</div>
								</div>
							</form>
							<!-- /basic layout -->

						</div>

                    <!-- Footer -->
                    <!-- <div class="footer text-muted">
						&copy; 2021. <a href="#"> Web App </a> by <a href="" target="_blank">Dothalu</a>
					</div> -->
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->



<script>

	imgInp1.onchange = evt => {
		const [file] = imgInp1.files
		if (file) {
			blah1.src = URL.createObjectURL(file)
		}
	}

	imgInp2.onchange = evt => {
		const [file] = imgInp2.files
		if (file) {
			blah2.src = URL.createObjectURL(file)
		}
	}

	imgInp3.onchange = evt => {
		const [file] = imgInp3.files
		if (file) {
			blah3.src = URL.createObjectURL(file)
		}
	}


	imgInp4.onchange = evt => {
		const [file] = imgInp4.files
		if (file) {
			blah4.src = URL.createObjectURL(file)
		}
	}	

	imgInp5.onchange = evt => {
		const [file] = imgInp5.files
		if (file) {
			blah5.src = URL.createObjectURL(file)
		}
	}
</script>

</body>
</html>