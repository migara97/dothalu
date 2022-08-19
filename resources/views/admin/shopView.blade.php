@extends('layouts.main')

@section('content')

	


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Shop</span> - View</h4>
						</div>

						
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="/adindex"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="">Shop</a></li>
							<li class="active">View</li>
						</ul>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">


                <!-- Basic datatable -->
                <div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Shop datatable</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							
						</div>

						<table class="table datatable-basic">
							<thead>
								<tr>
									<th>Name</th>
									<th>Shop Name</th>
									<th>Shop Type</th>
                                    <th>Number</th>
									<th>Status</th>
                                    
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($shop as $list)
								<tr>
                                    <td>{{$list->shop_Id}}</td>
                                    <td>{{$list->shopName}}</td>
									<td>{{$list->shopType}}</td>
                                    <td>{{$list->wNumber}}</td>
									<td>
                                    @if($list->status)
                                    <span class="label label-danger">dective</span>
                                    @else
                                    <span class="label label-success">Active</span>
                                    @endif
                                    </td>

									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="/editshop/{{$list->user_id}}"><i class="icon-pencil5"></i> Edit</a></li>
													<li><a href="/deleteshop/{{$list->user_id}}"><i class="icon-bin"></i> Delete</a></li>
													
												</ul>
											</li>
										</ul>
									</td>
								</tr>
                                @endforeach
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->





					
                

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
