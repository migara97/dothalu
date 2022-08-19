@extends('layouts.main')

@section('content')


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Notification</span> - Add</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">Notification</a></li>
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
							<form action="/storeNatification" method="POST">
                            @csrf
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Notification</h5>
										<div class="heading-elements">
											<ul class="icons-list">
						                		<li><a data-action="collapse"></a></li>
						                		<li><a data-action="reload"></a></li>
						                		<li><a data-action="close"></a></li>
						                	</ul>
					                	</div>
									</div>
                                    <div class="panel-body">

                                        <div class="form-group">
											<label>ALL / Individual:</label>
											<select class="select type" name="type">
                                                    <option value="">Select</option>
													<option value=1>ALL</option>
													<option value=0>Individual</option>                                                    
											</select>
										</div>



                                        <div class="form-group" id="shop" style="display: none">
											<label>Shop Name:</label>
											<select class="select" name="shopId">
													<option value="0">Choose a </option>
                                                    @foreach($shop as $list)
													<option value="{{$list->id}}">{{$list->shop_Id}}</option>
                                                    @endforeach
											</select>
										</div>

									    
										<div class="form-group">
											<label>Notification:</label>
											<input type="text" class="form-control" name="notification" placeholder="Enter Notification">
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


@section('scripts')
<script>
$(document).on('change','.type',function(){

n=$(this).val();

console.log(n);

if (n == 0){
    // alert("aaaaaaaaaaaa0");
	   $("#shop").show();	   
	   }else{
        $("#shop").hide();
       }
  });
  </script>
@endsection