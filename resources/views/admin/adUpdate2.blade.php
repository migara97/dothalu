@extends('layouts.main2')

@section('content')


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Ads</span> - Add</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">Ads</a></li>
							<li class="active">Add</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-12">
							<!-- Basic layout-->
							<form action="/adUpdate2/{{$ad->id}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}								
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

										<div class="form-group col-md-3">
											<label>Title:</label>
                                            <input type="hidden" name="id" value="{{$ad->id}}">
											<input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{$ad->title}}">
										</div>


										<div class="form-group col-md-2">
                                            <label>Condition:</label>
											<select class="select" name="condition" id="">
                                                    
													<option value="Brand New" @if('Brand New'==$ad->condition) selected @endif>Brand New</option>
													<option value="Recondition" @if('Recondition'==$ad->condition) selected @endif>Recondition</option>
													<!-- <option value="Unregistered" @if('Unregistered'==$ad->condition) selected @endif>Unregistered</option> -->
													<option value="Registered" @if('Registered'==$ad->condition) selected @endif>Registered</option>           
											</select>
										</div>

										<div class="form-group col-md-2">
                                            <label>Body Type:</label>
											<select class="select" name="bodyType" id="">
                                                    <option value="">Select </option>
													<option value="AnyType"  @if('AnyType'==$ad->bodyType) selected @endif>Any Type</option>
													<option value="Saloon" @if('Saloon'==$ad->bodyType) selected @endif>Saloon</option>
													<option value="Hatchback" @if('Hatchback'==$ad->bodyType) selected @endif>Hatchback</option>
													<option value="Suv/Jeep" @if('Suv/Jeep'==$ad->bodyType) selected @endif>Suv / Jeep</option>
													<option value="Wagon" @if('Wagon'==$ad->bodyType) selected @endif>Wagon</option>
													<option value="Pickup/Double Cab" @if('Pickup/Double Cab'==$ad->bodyType) selected @endif>Pickup / Double Cab</option>
													<option value="Bus" @if('Bus'==$ad->bodyType) selected @endif>Bus</option>
													<option value="Lorry/Tipper" @if('Lorry/Tipper'==$ad->bodyType) selected @endif>Lorry / Tipper</option>
													<option value="ThreeWheel" @if('ThreeWheel'==$ad->bodyType) selected @endif>Three Wheel</option>
													<option value="Tractor" @if('Tractor'==$ad->bodyType) selected @endif>Tractor</option>
													<option value="Heavy-Duty" @if('Heavy-Duty'==$ad->bodyType) selected @endif>Heavy-Duty</option>
													<option value="Other" @if('Other'==$ad->bodyType) selected @endif>Other</option>
													<option value="Motorcycle" @if('Motorcycle'==$ad->bodyType) selected @endif>Motorcycle</option>          
											</select>
										</div>

										
                                        <div class="row ml-5">
											<div class="form-group col-md-2">
												<label>Manufactured Year:</label>
												<input type="text" class="form-control" name="myear" placeholder="Enter Year" value="{{$ad->myear}}">
											</div>


											<div class="form-group col-md-2">
											<label>Transmission:</label>
												<select class="select" name="transmission" id="">
														<option value="Manual" @if('Manual'==$ad->transmission) selected @endif>Manual</option>
														<option value="Automatic" @if('Automatic'==$ad->transmission) selected @endif>Automatic</option>
														<option value="Tiptronic" @if('Tiptronic'==$ad->transmission) selected @endif>Tiptronic</option>
														<option value="CVT" @if('CVT'==$ad->transmission) selected @endif>Continuously variable</option>
												</select>
											</div>

											<div class="form-group col-md-2">
											<label>Fuel Type:</label>
												<select class="select" name="fuelType" id="">
														<option value="Petrol" @if('Petrol'==$ad->fuelType) selected @endif>Petrol</option>
														<option value="Diesel" @if('Diesel'==$ad->fuelType) selected @endif>Diesel</option>
														<option value="Hybrid" @if('Hybrid'==$ad->fuelType) selected @endif>Hybrid</option>
														<option value="Electric" @if('Electric'==$ad->fuelType) selected @endif>Electric</option>
												</select>
											</div>

											<div class="form-group col-md-2">
												<label>Engine Capacity:</label>
												<input type="text" class="form-control" name="EngineCapacity" placeholder="Enter Engine Capacity" value="{{$ad->EngineCapacity}}">
											</div>
											
											<div class="form-group col-md-2">
												<label>Mileage (km):</label>
												<input type="text" class="form-control" name="km" placeholder="Enter Engine Capacity" value="{{$ad->km}}">
											</div>

											
											<div class="form-group col-md-12">
												<label>Options:</label>
												<div class="row  ml-10">
												<div class="row">
													<div class="ml-5">
														<label>
															<input   @if($ad->option1=="Push start") checked @endif type="checkbox" name="option1" value="Push start">
															Push start
														</label>
														<label  class="ml-10">
															<input @if($ad->option2=="Safety package") checked @endif type="checkbox" name="option2" value="Safety package">
															Safety package
														</label>
														<label class="ml-10">
															<input @if($ad->option3=="Multi-function") checked @endif type="checkbox" name="option3" value="Multi-function">
															Multi-function
														</label>
														<label class="ml-10">
															<input @if($ad->option4=="Air condition") checked @endif type="checkbox" name="option4" value="Air condition">
															Air condition
														</label>
														<label class="ml-10">
															<input @if($ad->option5=="Power mirror") checked @endif type="checkbox" name="option5" value="Power mirror">
															Power mirror
														</label>
														<label class="ml-10">
															<input @if($ad->option6=="Power door") checked @endif type="checkbox" name="option6" value="Power door">
															Power door
														</label>
														<label class="ml-10">
															<input  @if($ad->option7=="4x4 system") checked @endif type="checkbox" name="option7" value="4x4 system">
															4x4 system
														</label>
														<label class="ml-10">
															<input @if($ad->option8=="Original flow carpet") checked @endif type="checkbox" name="option8" value="Original flow carpet">
															Original flow carpet
														</label>
														<label class="ml-10">
															<input @if($ad->option9=="Door wiser") checked @endif type="checkbox" name="option9" value="Door wiser">
															Door wiser
														</label>
													</div>


													<div class="ml-5">
														<label>
															<input @if($ad->option10=="ABS") checked @endif type="checkbox" name="option10" value="ABS">
															ABS
														</label>
														<!-- <label class="ml-10">
															<input @if($ad->option11=="Multi-function") checked @endif type="checkbox" name="option11" value="Multi-function">
															Multi-function
														</label>  -->
														<label class="ml-10">
															<input @if($ad->option12=="Turbo") checked @endif type="checkbox" name="option12" value="Turbo">
															Turbo
														</label>
														<label class="ml-10">
															<input @if($ad->option13=="Power steering") checked @endif type="checkbox" name="option13" value="Power steering">
															Power steering
														</label>
														<label class="ml-10">
															<input @if($ad->option14=="Power window") checked @endif type="checkbox" name="option14" value="Power window">
															Power window
														</label>														
														<label class="ml-10">
															<input @if($ad->option15=="Player & Camera") checked @endif type="checkbox" name="option15" value="Player & Camera">
															Player & Camera
														</label>
														<label class="ml-10">
															<input @if($ad->option16=="Alloy wheels") checked @endif type="checkbox" name="option16" value="Alloy wheels">
															Alloy wheels
														</label>
													</div>	
													</div>
												</div>
											</div>

										</div>



											



                                        <div class="form-group col-md-6">
											<label>Discription:</label>
											<textarea rows="3" cols="3" class="form-control" name="discription" placeholder="Enter Discription">{{$ad->discription}}</textarea>
										</div>	

										<div class="form-group col-md-6">
											<label>Address:</label>
											<textarea rows="3" cols="3" class="form-control" name="address" placeholder="Enter Address">{{$ad->address}}</textarea>
										</div>

										

										<div class="form-group col-md-6">
											<label>Phone Number:</label>
											<input type="text" class="form-control" name="salNumber" placeholder="Enter Chassis Code" value="{{$ad->salNumber}}">
										</div>									



                                        <div class="form-group col-md-6">
											<label>Price:</label>
											<input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{$ad->price}}">
										</div>

											


									<!-- Switch single -->
									<div class="form-group col-md-6">
										<label class="control-label col-lg-3">TOP AD <span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<div class="checkbox checkbox-switch">
												<label>
													<input type="checkbox" name="active" data-on-text="No" data-off-text="Yes" value="1" class="switch">
													<!-- Accept our terms -->
												</label>
											</div>
										</div>
									</div>
									<!-- /switch single -->

									<div class="form-group col-md-6">
                                            <label>Action:</label>
											<select class="select" name="action" id="">
                                                    <option value="0">Panding</option>
													<option value="1">approved</option>
													<option value="2">Reject</option>           
											</select>
									</div>


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

										<div class="form-group col-md-3">
											<label>Image 5: 800 x 800</label>
											<input type="file" class="file-styled" name="img5" id="imgInp5">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" id="blah5" src="{{ asset('/image/ads/'.$ad->image5) }}" width="92" height="92">
										</div>


										<div class="text-right col-md-12">
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



@section('scripts')
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

@endsection
