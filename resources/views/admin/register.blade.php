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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">User</span> - Add</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">User</a></li>
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
							<form action="/saveUser" method="POST">
                            @csrf
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Register</h5>
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
											<label>User Name:</label>
											<input type="text" class="form-control" name="name" placeholder="Enter User Name">
										</div>


                                        <div class="form-group">
											<label>User Group:</label>
											<select class="select" name="group">
												
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