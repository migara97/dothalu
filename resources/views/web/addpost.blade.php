<html>
@include('templates/head1')


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

				
				@if ($errors->any())
				<div class="row">
				<div class="col-3"></div>
				<div class="col-6">
					<div class="alert alert-danger" style="background-color:red;">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-3"></div>
				</div>
				@endif

					<!-- Vertical form options -->
					<div class="row">
						<div class="col-md-12">

							<!-- Basic layout-->
							<form action="/webstoreAds" method="POST" enctype="multipart/form-data">
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
											<input type="text" class="form-control" name="title" placeholder="Enter Title" style="font-size:14px;">
										</div>

                                        <div class="form-group col-md-3">
											<label>Category:</label>
											<select class="select catego" name="category" id="category">
                                                    <option value="">Choose a </option>
                                                    @foreach($cat as $list)
													<option value="{{$list->id}}">{{$list->title}}</option>
                                                    @endforeach
											</select>
										</div>
                                    

                                    
                                        <div class="form-group col-md-3">
											<label>Model:</label>
											<select class="select subcategory" name="subcategory" id="subcategory">
                                                    <option value="">Choose a </option>
                                                    
											</select>
										</div>
                                       
                            
									    
										<div class="form-group col-md-3">
                                            <label>Vehicle:</label>
											<select class="select subcategoryLevel" name="subcategorylavel" id="subcategorylavel">
                                                    <option value="">Choose a </option>           
											</select>
										</div>
									</div>

										


								<div class="row ml-5" id="parts" style="display: none">


									<div class="row">
										<div class="form-group col-md-3">
                                            <label>Condition:</label>
											<select class="select" name="condition" id="">
                                                    <option value="">Select </option>
													<option value="Brand New">Brand New</option>
													<option value="Recondition">Recondition</option>
													<option value="Salvages">Salvages</option>
													<!-- <option value="Registered">Registered</option>            -->
											</select>
										</div>

										<div class="form-group col-md-3">
                                            <label>Accessory Type:</label>
											<select class="select" name="accessoryType" id="">
                                                    <option value="">Select </option>
													<option value="Body Components">Body Components</option>
													<option value="Car Audio Systems">Car Audio Systems</option>
													<option value="Lighting & Indicators">Lighting & Indicators</option>
													<option value="Wheels, Tyres & Rims">Wheels, Tyres & Rims</option>
													<option value="Suspension, Steering & Handling">Suspension, Steering & Handling</option>
													<option value="Engines & Engine Parts">Engines & Engine Parts</option>
													<option value="Accessories">Accessories</option>
													<option value="Interior Parts & Furnishings">Interior Parts & Furnishings</option>
													<option value="Brakes">Brakes</option>
													<option value="Air Conditioning Heating">Air Conditioning Heating</option>
													<option value="Mirror Components">Mirror Components</option>
													<option value="Undercarriage Parts">Undercarriage Parts</option>
													<option value="Helmets, Clothing & Protection">Helmets, Clothing & Protection</option>
													<option value="Exhausts & Exhaust Parts">Exhausts & Exhaust Parts</option>
													<option value="Air Intake & Fuel Delivery">Air Intake & Fuel Delivery</option>
													<option value="Tools & Equipment">Tools & Equipment</option>
													<option value="Automobile Batteries">Automobile Batteries</option>
													<option value="Windscreen Wipers & Washers">Windscreen Wipers & Washers</option>
													<option value="Transmission & Drivetrain">Transmission & Drivetrain</option>
													<option value="Oils, Lubricants & Fluids">Oils, Lubricants & Fluids</option>
													<option value="Chassis">Chassis</option>
													<option value="Turbos & Superchargers">Turbos & Superchargers</option>
													<option value="Footrests, Pedals & Pegs">Footrests, Pedals & Pegs</option>  
													<option value="Auto part">Auto part</option>
													<option value="Tyres / rims">Tyres / rims</option>													        
											</select>
										</div>

											<div class="form-group col-md-3">
												<label>Chassis Code:</label>
												<input type="text" class="form-control" name="chassisCode" placeholder="Enter Body Type" style="font-size:14px;">
											</div>

											<div class="form-group col-md-3">
												<label>Part Number:</label>
												<input type="text" class="form-control" name="partNumber" placeholder="Enter Part Number" style="font-size:14px;">
											</div>
										</div>


										<div class="row">
											<div class="form-group col-md-3">
												<label>Vehicle Model:</label>
												<input type="text" class="form-control" name="vehicleModel" placeholder="Enter Vehicle Model" style="font-size:14px;">
											</div>

											<div class="form-group col-md-3">
												<label>Year:</label>
												<input type="text" class="form-control" name="year" placeholder="Enter Year" style="font-size:14px;">
											</div>
											<div class="form-group col-md-3">
												<label>Qty:</label>
												<input type="text" class="form-control" name="qty" placeholder="Enter Quantity" style="font-size:14px;">
											</div>
										</div>

										</div>



										<div class="row ml-5" id="vehical" style="display: none">

										<div class="row">
											<div class="form-group col-md-3">
												<label>Condition:</label>
												<select class="select" name="vehicalcondition" id="">
														<option value="">Select </option>
														<option value="Brand New">Brand New</option>
														<option value="Recondition">Recondition</option>
														<!-- <option value="Unregistered">Unregistered</option> -->
														<option value="Registered">Registered</option>           
												</select>
											</div>

											<div class="form-group col-md-3">
												<label>Body Type:</label>
												<select class="select" name="bodyType" id="">
														<option value="">Select </option>
														<option value="AnyType">Any Type</option>
														<option value="Saloon">Saloon</option>
														<option value="Hatchback">Hatchback</option>
														<option value="Suv/Jeep">Suv / Jeep</option>
														<option value="Wagon">Wagon</option>
														<option value="Pickup/Double Cab">Pickup / Double Cab</option>
														<option value="Bus">Bus</option>
														<option value="Lorry/Tipper">Lorry / Tipper</option>
														<option value="ThreeWheel">Three Wheel</option>
														<option value="Tractor">Tractor</option>
														<option value="Heavy-Duty">Heavy-Duty</option>
														<option value="Other">Other</option>
														<option value="Motorcycle">Motorcycle</option>          
												</select>
											</div>

											<div class="form-group col-md-3">
												<label>Manufactured Year:</label>
												<input type="text" class="form-control" name="myear" placeholder="Enter Year" style="font-size:14px;">
											</div>


											<div class="form-group col-md-3">
											<label>Transmission:</label>
												<select class="select" name="transmission" id="">
														<option value="">Select Transmission</option>
														<option value="Manual">Manual</option>
														<option value="Automatic">Automatic</option>
														<option value="Tiptronic">Tiptronic</option>
														<option value="CVT">Continuously variable</option>
												</select>
											</div>

											
										</div>


										<div class="row">
											<div class="form-group col-md-3">
												<label>Fuel Type:</label>
													<select class="select" name="fuelType" id="">
															<option value="">Select Fuel Type</option>
															<option value="Petrol">Petrol</option>
															<option value="Diesel">Diesel</option>
															<option value="Hybrid">Hybrid</option>
															<option value="Electric">Electric</option>
													</select>
												</div>

											<div class="form-group col-md-3">
												<label>Engine Capacity:</label>
												<input type="text" class="form-control" name="EngineCapacity" placeholder="Enter Engine Capacity" style="font-size:14px;">
											</div>
											
											<div class="form-group col-md-3">
												<label>Mileage (km):</label>
												<input type="text" class="form-control" name="km" placeholder="Enter Engine Capacity" style="font-size:14px;">
											</div>
										</div>
											
											<div class="form-group col-md-12">
												<label>Options:</label>
												<div class="row  ml-10">
												<div class="row">
													<div class="ml-5">
														<label>
															<input type="checkbox" name="option1" value="Push start">
															Push start
														</label>
														<label  class="ml-10">
															<input type="checkbox" name="option2" value="Safety package">
															Safety package
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option3" value="Multi-function">
															Multi-function
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option4" value="Air condition">
															Air condition
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option5" value="Power mirror">
															Power mirror
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option6" value="Power door">
															Power door
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option7" value="4x4 system">
															4x4 system
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option8" value="Original flow carpet">
															Original flow carpet
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option9" value="Door wiser">
															Door wiser
														</label>
													</div>


													<div class="ml-5">
														<label>
															<input type="checkbox" name="option10" value="ABS">
															ABS
														</label>
														<!-- <label class="ml-10">
															<input type="checkbox" name="option11" value="Multi-function">
															Multi-function
														</label> -->
														<label class="ml-10">
															<input type="checkbox" name="option12" value="Turbo">
															Turbo
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option13" value="Power steering">
															Power steering
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option14" value="Power window">
															Power window
														</label>														
														<label class="ml-10">
															<input type="checkbox" name="option15" value="Player & Camera">
															Player & Camera
														</label>
														<label class="ml-10">
															<input type="checkbox" name="option16" value="Alloy wheels">
															Alloy wheels
														</label>
													</div>	
													</div>
												</div>
											</div>

										</div>

										

									<div class="row">
                                        <div class="form-group col-md-3">
											<label>Discription:</label>
											<textarea rows="4" cols="4" class="form-control" name="discription" placeholder="Enter Discription" style="font-size:14px;"></textarea>
										</div>	

										<input type="hidden" class="form-control" value="{{Auth::user()->id}}" name="user_id" placeholder="Enter Saller Name">

										<div class="form-group col-md-3">
											<label>Saller Name:</label>
											<input type="text" class="form-control" value="{{Auth::user()->name}}" name="salName" placeholder="Enter Saller Name" style="font-size:14px;" disabled>
										</div>
									

								
										<div class="form-group col-md-3">
											<label>Phone Number:</label>
											<input type="text" class="form-control" name="salNumber" placeholder="Enter Phone Number" style="font-size:14px;">
										</div>									



                                        <div class="form-group col-md-3">
											<label>Price:</label>
											<input type="text" class="form-control" name="price" placeholder="Enter Price" style="font-size:14px;">
										</div>
									</div>

									
									<div class="row">
										<div class="form-group col-sm-6">
                                            <label>District:</label>
											<select class="select" name="district" id="">
                                                    <option value="">Select </option>
													@foreach($dis as $list)
													<option value="{{$list->district}}">{{$list->district}}</option>
                                                    @endforeach													          
											</select>
										</div>



										<div class="form-group col-sm-6">
											<label>Address:</label>
											<textarea rows="2" cols="2" class="form-control" name="address" placeholder="Enter Address" style="font-size:14px;"></textarea>
										</div>
									</div>


									<div class="row">
										<div class="form-group col-md-3">
											<label>Image 1: 800 x 800</label>
											<input type="file" class="file-styled" name="img1" id="imgInp1">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="" id="blah1" width="92" height="92">
										</div>

                                        <div class="form-group col-md-3">
											<label>Image 2: 800 x 800</label>
											<input type="file" class="file-styled" name="img2" id="imgInp2">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="" id="blah2" width="92" height="92">
										</div>

                                        <div class="form-group col-md-3">
											<label>Image 3: 800 x 800</label>
											<input type="file" class="file-styled" name="img3" id="imgInp3">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" src="" id="blah3" width="92" height="92">
										</div>

                                        <div class="form-group col-md-3">
											<label>Image 4: 800 x 800</label>
											<input type="file" class="file-styled" name="img4" id="imgInp4">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" id="blah4" src="" width="92" height="92">
										</div>
									</div>

									<div class="row">
										<div class="form-group col-md-3">
											<label>Image 5: 800 x 800</label>
											<input type="file" class="file-styled" name="img5" id="imgInp5">
											<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											<img alt="" id="blah5" src="" width="92" height="92">
										</div>
									</div>



										<div class="text-right col-md-12">
											<button type="submit" class="btn btn-primary" style="font-size:14px;">Submit form </button>
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

<script type="text/javascript">
		$(document).ready(function(){

$(document).on('change','.catego',function(){
    // console.log("hmm its change");

  var category=$(this).val();
      //console.log(category);

  var div=$(this).parent().parent();

  var op=" ";

   $.ajax({
     type:'get',
     url:'{!!URL::to('categorySelectweb')!!}',
     data:{'id':category},
     success:function(data){
    //    console.log('success');

    //    console.log(data);

    //    console.log(data.jength);
       op+='<option value="0" selected>Chose Sub Category</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].title+'</option>';
        }

div.find('.subcategory').html(" ");
div.find('.subcategory').append(op);



     },
     error:function(){

     }
   });
   n=$(this).val();
   //var parts = document.getElementById("parts");
   //console.log(n);
   if (n=='1'){
	   $("#parts").show();
	   $("#vehical").hide();
	   }else {
		$("#parts").hide();
		$("#vehical").show();
		   };
  });

  $(document).on('change','.subcategory',function(){
    var subcategory_level=$(this).val();
      //console.log(category);

    var div=$(this).parent().parent();
     //console.log(subcategory_level);
    var op=" ";



      $.ajax({
     type:'get',
     url:'{!!URL::to('subcategorySelectweb')!!}',
     data:{'id':subcategory_level},
     success:function(data){
    //    console.log('success');

        // console.log(data);

        // console.log(data.jength);
       op+='<option value="0" selected>Chose Sub Category Level</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].title+'</option>';
        }

div.find('.subcategoryLevel').html(" ");
div.find('.subcategoryLevel').append(op);



     },
     error:function(){

     }
   });





  });



});
</script>
</body>
</html>