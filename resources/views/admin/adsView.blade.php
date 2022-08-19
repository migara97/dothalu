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
							<li><a href="">Ads</a></li>
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
							<h5 class="panel-title">Ads datatable</h5>
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
									<th>Ad Type</th>
                                    <th>Title</th>
									<th>Condition</th>
                                    <th>Saller Number</th>
                                    <th>price</th>
									<th>Status</th>
									<th>Ad Action</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
                            @foreach($ads as $list)
								<tr>
                                    <td>{{$list->id}}</td>
                                    <td>{{$list->categoryName}}</td>
                                    <td>{{$list->title}}</td>								
									<td>{{$list->condition}}</td>
                                    <td>{{$list->salNumber}}</td>
                                    <td>{{$list->price}}</td>
									<td>
                                    @if($list->status)
                                    <span class="label label-success">TOP AD</span>
                                    @else
									<span class="label label-danger"></span>
                                    @endif
                                    </td>

									<td>
                                    @if($list->action==0)
                                    <span class="label label-warning">Panding</span>
                                    @elseif($list->action==1)
                                    <span class="label label-success">approved</span>
									@else
									<span class="label label-danger">Reject</span>
                                    @endif
                                    </td>

									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="/editad/{{$list->id}}/{{$list->category}}"><i class="icon-pencil5"></i> Edit</a></li>
													<li><a href="/deletead/{{$list->id}}"><i class="icon-bin"></i> Delete</a></li>
													
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