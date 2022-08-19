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
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Sub Category Level</span> - Add</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">Sub Category Level</a></li>
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
							<form action="/saveSubcategorylevel" method="POST">
                            @csrf
								<div class="panel panel-flat">
									<div class="panel-heading">
										<h5 class="panel-title">Sub Category Level</h5>
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
											<label>Category Name:</label>
											<select class="select catego" name="category" id="category">
                                                    <option value="">Choose a </option>
                                                    @foreach($cat as $list)
													<option value="{{$list->id}}">{{$list->title}}</option>
                                                    @endforeach
											</select>
										</div>

                                       
                                        <div class="form-group">
											<label>Sub Category Name:</label>
											<select class="select subcategory" name="subcategory">
                                                    <option value="">Choose a </option>
                                                    
											</select>
										</div>

									    
										<div class="form-group">
											<label>Sub Category Level Name:</label>
											<input type="text" class="form-control" name="sublevel" placeholder="Enter Sub Category Level Name">
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
<script type="text/javascript">
		$(document).ready(function(){

$(document).on('change','.catego',function(){
    // console.log("hmm its change");

  var category=$(this).val();
    //  console.log(category);

  var div=$(this).parent().parent().parent();

  var op=" ";

   $.ajax({
     type:'get',
     url:'{!!URL::to('categorySelect')!!}',
     data:{'id':category},
     success:function(data){
    //    console.log('success');

    //    console.log(data);

    //    console.log(data.jength);
       op+='<option value="" selected>Chose Category</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].title+'</option>';
        }

div.find('.subcategory').html(" ");
div.find('.subcategory').append(op);



     },
     error:function(){

     }
   });
  });
});
</script>

@endsection