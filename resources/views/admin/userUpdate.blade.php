@extends('layouts.main2')

@section('content')


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">User</span> - Edit</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">User</a></li>
							<li class="active">Edit</li>
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
							<form action="/updateUser" method="POST">
                            @csrf
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">User</h5>
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
                                            <input type="hidden" name="id" id="id" value="{{$user->id}}">
											<label>User Name:</label>
											<input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="Enter User Name">
										</div>

                                        <div class="form-group">
											<label>User Group:</label>
											<select class="select" name="group">
                                                    <option value="{{$user->group}}">{{$user->group}}</option>			
													<option value="Editor">Editor</option>
													<option value="Admin">Admin</option>
                                                    <option value="Superadmin">Superadmin</option>
											</select>
										</div>


										<div class="form-group">
											<label>Password:</label>
											<input type="password" id="password" name="password" class="form-control" placeholder="Your strong password">
										</div>

                                        <div class="form-group">
											<label>Confirm Password:</label>
											<input type="password" id="confirm_password" class="form-control" placeholder="Your strong Confirm Password">
										</div>

                                    <!-- Switch single -->
                                    <div class="form-group">
										<label class="control-label col-lg-3">Active <span class="text-danger">*</span></label>
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
										


                                        

										


										<div class="text-right">
											<button type="submit" class="btn btn-primary">Update form <i class="icon-arrow-right14 position-right"></i></button>
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
var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
if(password.value != confirm_password.value) {
confirm_password.setCustomValidity("Passwords Don't Match");
} else {
confirm_password.setCustomValidity('');
}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script> 


@endsection