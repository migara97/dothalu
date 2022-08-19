<!DOCTYPE html>
<html lang="en"> @include('web/include/head') <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!-- <script  src="../script.js"></script> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" rel="stylesheet" type="text/css">
<style>
    /* /////////////////////////////////////////////////////////////////////// */
    body {
        overflow-x: hidden;
    }

    /* /////////////////////////////////////////////////////////////////////// */
    .parts-suggestions-p {
        /* padding-left: 5px;
        padding-right: 5px; */
    }

    .slick-prev:before {
        color: #0d6efd;
        font-size: 30px;
        left: 3% !important;
        z-index: 1;
    }

    .slick-next:before {
        color: #0d6efd;
        font-size: 30px;
        left: 3% !important;
        z-index: 1;
    }

    .slick-prev {
        left: 3% !important;
        z-index: 1;
    }

    .slick-next {
        right: 3% !important;
        z-index: 1;
    }

    /* ////////////////////////////////////////////////////////////////////////// */
    .sidenav {
        float: right;
        height: 100%;
        width: 40px;
        z-index: 1;
        top: 0;
        right: 0;
        background-color: #2d3436;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .hearticon {
        font-size: 20px;
        margin-top: 100px;
        text-align: center;
    }

    .fullcol {
        max-height: 5000px;
        overflow-y: scroll;
    }

    /* ////////////////////////////////////////////////////////////////////////// */
    @media (min-width: 1024px) and (max-width: 2560px) {
        .rightarrowfilter {
            display: none;
        }

        .closebtn {
            display: none;
        }

        .sidebar {
            height: 100%;
            /* width: 0; */
            /* position: fixed; */
            z-index: 1;
            top: 00;
            left: 0;
            background-color: rgb(255, 255, 255);
            /* overflow-x: hidden; */
            transition: 0.5s;
            padding-top: 60px;
        }
    }

    /* 575px */
    @media (min-width: 480px) and (max-width: 768px) {
        .leftarrowfilter {
            display: none;
        }

        .rightarrowfilter {
            display: none;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 00;
            left: 0;
            background-color: rgb(255, 255, 255);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        .leftarrowfilter {
            display: none;
        }

        .rightarrowfilter {
            display: none;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 00;
            left: 0;
            background-color: rgb(255, 255, 255);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
    }

    /* .sidebar a {
         padding: 8px 8px 8px 32px;
         text-decoration: none;
         font-size: 25px;
         color: #ffff;
         display: block;
         transition: 0.3s;
         } */
    /* .sidebar a:hover {
         color: #f1f1f1;
         } */
    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        color: #000000;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidebar {
            padding-top: 15px;
        }

        .sidebar a {
            font-size: 18px;
        }
    }

    

    
</style>

<body onload="loadssss();">
    <!-- ///////////////////////////////////////////////////////////////////header///////////////////////////////////////// --> 
    @include('web/include/header')
    <!-- ///////////////////////////////////////////////////////////////////header///////////////////////////////////////// -->
    <!-- Top Ads Section -->
    <div class="row">
        <div class="col-12">
            <ul class="list-inline"> @foreach($topad as $list) <li class="list-inline-item" id="parts" data-toggle="modal" data-target="#exampleModalCenter" value="{{$list->id}}" style="height:150px;width:250px"> <a href="#"> <img src="{{asset('/')}}image/ads/{{$list->image3}}" alt="" width="100%" height="auto"></a> </li> @endforeach
                <!-- <li class="list-inline-item ">  <img src="../../image/logo.png" alt="" width="100%" height="auto" > </li> 
                     <li class="list-inline-item ">  <img src="../../image/logo.png" alt="" width="100%" height="auto" > </li>
                     <li class="list-inline-item ">  <img src="../../image/logo.png" alt="" width="100%" height="auto" ></li>
                     <li class="list-inline-item ">  <img src="../../image/logo.png" alt="" width="100%" height="auto" ></li>
                     <li class="list-inline-item ">  <img src="../../image/logo.png" alt="" width="100%" height="auto" >  </li>
                     <li class="list-inline-item ">  <img src="../../image/logo.png" alt="" width="100%" height="auto" > </li>
                     <li class="list-inline-item ">  <img src="../../image/logo.png" alt="" width="100%" height="auto" > </li> -->
            </ul>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#parts").hover(function() {
                $('.modal').modal({
                    show: true
                });
            });
        });
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Top Ads</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">View More</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Ads Section -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '#parts', function() {
                // console.log("hmm its change");
                var toppartID = $(this).val();
                // console.log(toppartID);
                var div = $(this).parent().parent().parent().parent().parent().parent().parent();
                var op = " ";
                $.ajax({
                    type: 'get',
                    url: '{!!URL::to('toppartsSelect')!!}',
                    data: {
                        'id': toppartID
                    },
                    success: function(data) {
                        console.log('success');
                        console.log(data);
                        //   console.log(data.jength);
                        op += '<div class="row ">';
                        op += '<div class="col-6">';
                        op += '<a href="">';
                        op += '<img src="{{asset('/')}}image/ads/' + data[0].image3 + '" alt="" class="img-fluid  height: auto;" />';
                        op += '</a>';
                        op += '</div>';
                        op += '<div class="col-6">';
                        op += '<h6 class="product-default-link">';
                        op += '<a href="">"' + data[0].title + '"</a>';
                        op += '</h6>';
                        op += '<div class="product-details-item">' + data[0].condition + '</div>';
                        op += '<div class="product-details-item">"' + data[0].address + '"</div>';
                        op += '<div class="row ">';
                        op += '<div class="col-4">';
                        op += '<div class="product-details-price">Rs.' + data[0].price + '</div>';
                        op += '</div>';
                        op += '<div class="col-8">';
                        op += '<div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div>';
                        op += '</div>';
                        op += '</div>';
                        op += '</div>';
                        op += '</div>';
                        div.find('#modal-body').html(" ");
                        div.find('#modal-body').append(op);
                    },
                    error: function() {}
                });
            });
        });
        // $(window).scroll(function(){
        //    if( $(document).scrollTop() > 0 ) {
        //       $('#topbanner').hide();
        //    } else {
        //       $('#topbanner').show();
        //    }
        // });
    </script> @if(Auth::check()) <div class="bannerimage">
        <img src="../../image/banner2.jpeg" alt="" width="100%">
    </div> @else @endif
    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="
                col-12
                d-flex
                justify-content-between justify-content-md-between
                align-items-center
                flex-md-row flex-column
              ">
                        <h3 class="breadcrumb-title">{{ __('Vehicle Parts') }}</h3>
                        <div class="breadcrumb-nav">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="{{url('/')}}">{{ __('Home') }}</a></li>
                                    <!-- <li><a href="#">Vehicle</a></li> -->
                                    <li class="active" aria-current="page"> {{ __('Vehicle Parts') }}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...:::: End Breadcrumb Section:::... -->
    <div class="maincontainer">
        <div class="rightarrowfilter">
            <h6 style="font-weight: bold;"> <button onclick="openButton()">Filters &nbsp;<i class="far fa-arrow-to-right"></i> </button> </h6>
        </div>
    </div>
    </div>
    
    <!-- ...:::: Start Shop Section:::... -->
    <div class="shop-section">
        <div class="">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-lg-2 filtering-part" style="overflow-y:hidden;">
                    <!-- ////////////////////////////////////////////////////*******************************\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
                    <div id="mySidebar" class="sidebar" style="z-index: 5;">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                        <div class="container-fluid">
                            <!-- Start Sidebar Area -->
                            <div class="siderbar-section">
                                <div class="Filters">
                                <div class="row">
                                <table style="width:100%">
                                <tr>
                                <th><h5 style="font-weight: 600;"><i class="far fa-sliders-h"></i>&nbsp; Filters</h5></th>
                                <th class=" leftarrowfilter" style="float: right;"><h5><button onclick="closeButton()"><i class="far fa-arrow-to-left"></i></button> </h5></th>
                                </tr>
                                </table>

                                
                                </div>
                                </div>
                                <form action="/shop-filter" method="post">
                                    {{ csrf_field() }}
                                    <hr>
                                    <!-- Start Single Sidebar Widget -->
                                    <div class="sidebar-single-widget">
                                        <h6 class="sidebar-title">{{ __('Condition') }}</h6>
                                        <div class="sidebar-content"> @if(!empty($_GET['condition'])) @php $filter_conditon=explode(',',$_GET['condition']); @endphp @endif <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_conditon) && in_array('Recondition',$filter_conditon)) checked @endif name="condition[]" onchange="this.form.submit();" value="Recondition" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault"> {{ __('Reconditioned') }} </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_conditon)&& in_array('Brand New',$filter_conditon)) checked @endif name="condition[]" onchange="this.form.submit();" value="Brand New" id="flexCheckDefault2">
                                                <label class="form-check-label" for="flexCheckDefault2"> {{ __('Brand New') }} </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_conditon)&& in_array('Salvages',$filter_conditon)) checked @endif name="condition[]" onchange="this.form.submit();" value="Salvages" id="flexCheckDefault3">
                                                <label class="form-check-label" for="flexCheckDefault3"> {{ __('Salvages') }} </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Sidebar Widget -->
                                    <!-- Start Sort Select Option -->
                                    <div class="sort-select-list">
                                        <!-- <form action="/shop-sort" method="post"> -->
                                        <fieldset>
                                            <select name="sortBy" id="sortBy" onchange="this.form.submit();">
                                                <option value="Sort by newness">{{ __('Sort by price') }}</option>
                                                <option value="priceAsc" @if(!empty($_GET['sortBy'])&& $_GET['sortBy']=='priceAsc' ) selected @endif>{{ __('Sort by price') }} : {{ __('low to high') }}</option>
                                                <option value="priceDesc" @if(!empty($_GET['sortBy'])&& $_GET['sortBy']=='priceDesc' ) selected @endif>{{ __('Sort by price') }} : {{ __('high to low') }}</option>
                                            </select>
                                        </fieldset>
                                        <!-- </form> -->
                                    </div>
                                    <!-- End Sort Select Option -->
                                    <br>
                                    <div class="sidebar-single-widget"> @if(!empty($_GET['location'])) @php $filter_location=explode(',',$_GET['location']); @endphp @endif <button><a class="location" data-toggle="collapse" data-target="#demo2">{{ __('Location') }} <i class="fa fa-angle-down"></i></a></button>
                                        <div id="demo2" class="collapse"> @foreach($location as $list) <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_location)&& in_array($list->district,$filter_location)) checked @endif name="location[]" onchange="this.form.submit();" value="{{$list->district}}" id="location"> <label class="form-check-label">
                                                    {{ __($list->district) }}
                                                </label>
                                            </div> @endforeach </div>
                                    </div>
                                    <div class="sidebar-single-widget"> @if(!empty($_GET['vehicle'])) @php $filter_vehicle=explode(',',$_GET['vehicle']); @endphp @endif <button><a class="vehicle" data-toggle="collapse" data-target="#demo">{{ __('Vehicle Brand') }} <i class="fa fa-angle-down"></i></a></button>
                                        <div id="demo" class="collapse"> @foreach($sub as $list) <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_vehicle)&& in_array($list->id,$filter_vehicle)) checked @endif name="vehicle[]" onchange="this.form.submit();" value="{{$list->id}}" id="vehicle"> <label class="form-check-label">
                                                    {{$list->title}}
                                                </label>
                                            </div> @endforeach </div>
                                    </div>
                                    <div class="sidebar-single-widget"> @if(!empty($_GET['vehicleModel'])) @php $filter_vehicleModel=explode(',',$_GET['vehicleModel']); @endphp @endif <button><a class="vehicleModel" data-toggle="collapse" data-target="#demo1"> {{ __('Vehicle Model') }}<i class="fa fa-angle-down"></i></a></button>
                                        <div id="demo1" class="collapse"> @foreach($sublev as $list) <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_vehicleModel)&& in_array($list->id,$filter_vehicleModel)) checked @endif name="vehicleModel[]" onchange="this.form.submit();" value="{{$list->id}}" id="vehicleModel"> <label class="form-check-label">
                                                    {{$list->title}}
                                                </label>
                                            </div> @endforeach </div>
                                    </div>
                                    <div class="sidebar-single-widget"> @if(!empty($_GET['bodyType'])) @php $filter_bodyType=explode(',',$_GET['bodyType']); @endphp @endif <button><a class="bodyType" data-toggle="collapse" data-target="#demo3">{{ __('Body Type') }}<i class="fa fa-angle-down"></i></a></button>
                                        <div id="demo3" class="collapse">
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('AnyType',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="AnyType" id="bodyType">
                                                <label class="form-check-label"> AnyType </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Saloon',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Saloon" id="bodyType">
                                                <label class="form-check-label"> Saloon </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Hatchback',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Hatchback" id="bodyType">
                                                <label class="form-check-label"> Hatchback </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Suv/Jeep',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Suv/Jeep" id="bodyType">
                                                <label class="form-check-label"> Suv/Jeep </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Wagon',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Wagon" id="bodyType">
                                                <label class="form-check-label"> Wagon </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Pickup/Double Cab',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Pickup/Double Cab" id="bodyType">
                                                <label class="form-check-label"> Pickup/Double Cab </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Bus',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Bus" id="bodyType">
                                                <label class="form-check-label"> Bus </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Lorry/Tipper',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Lorry/Tipper" id="bodyType">
                                                <label class="form-check-label"> Lorry/Tipper </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('ThreeWheel',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="ThreeWheel" id="bodyType">
                                                <label class="form-check-label"> ThreeWheel </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Tractor',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Tractor" id="bodyType">
                                                <label class="form-check-label"> Tractor </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Heavy-Duty',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Heavy-Duty" id="bodyType">
                                                <label class="form-check-label"> Heavy-Duty </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Motorcycle',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Motorcycle" id="bodyType">
                                                <label class="form-check-label"> Motorcycle </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input mt-1" type="checkbox" @if(!empty($filter_bodyType)&& in_array('Other',$filter_bodyType)) checked @endif name="bodyType[]" onchange="this.form.submit();" value="Other" id="bodyType">
                                                <label class="form-check-label"> Other </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Single Sidebar Widget -->
                                    <div class="sidebar-single-widget">
                                        <h6 class="sidebar-title"> {{ __('Chassis Code') }}</h6>
                                        <div class="sidebar-content">
                                            <div class="filter-type-select">
                                                <input class="form-control" type="text" placeholder="Enter Chassis Code" id="chassisCode" name="chassisCode" aria-label="default input example">
                                            </div>
                                            <br>
                                            <button class="pricesub" onchange="this.form.submit();">Apply</button>
                                        </div>
                                    </div>
                                    <div class="sidebar-single-widget">
                                        <h6 class="sidebar-title">{{ __('Part Number') }}</h6>
                                        <div class="sidebar-content">
                                            <div class="filter-type-select">
                                                <input class="form-control" type="text" placeholder="Enter Part Number" id="partNumber" name="partNumber" aria-label="default input example">
                                            </div>
                                            <br>
                                            <button class="pricesub" onchange="this.form.submit();">Apply</button>
                                        </div>
                                    </div>
                                    <!-- End Single Sidebar Widget -->
                                    <div class="sidebar-single-widget">
                                        <div class="row">
                                            <h6 class="sidebar-title">{{ __('Year') }}</h6>
                                            <div class="col-sm-12">
                                                <div id="slider-range1"></div>
                                            </div>
                                        </div>
                                        <div class="row slider-labels">
                                            <div class="col-xs-6 caption">
                                                <strong>Min:</strong> <span id="slider-range1-value1"></span>
                                            </div>
                                            <div class="col-xs-6 text-right caption">
                                                <strong>Max:</strong> <span id="slider-range1-value2"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="hidden" name="from" id="min-value" value="">
                                                <input type="hidden" name="to" id="max-value" value="">
                                            </div>
                                        </div>
                                        <button class="pricesub" type="submit" onchange="this.form.submit();">Apply</button>
                                    </div>
                                    <!-- Start Single Sidebar Widget -->
                                    <div class="sidebar-single-widget">
                                        <h6 class="sidebar-title">{{ __('Price') }}</h6>
                                        <div class="sidebar-content">
                                            <div class="filter-type-select">
                                                <ul>
                                                    <!-- <li>
                                 <label class="checkbox-default" for="brakeParts">
                                   <input type="checkbox" id="LowPrice" />
                                   <span>Under LKR 500.00</span>
                                 </label>
                                 </li> --> @if(!empty($_GET['LowPrice'])) @php $filter_LowPrice=explode(',',$_GET['LowPrice']); @endphp @endif <li>
                                                        <label class="checkbox-default" for="accessories">
                                                            <input type="checkbox" @if(!empty($filter_LowPrice) && in_array('10000',$filter_LowPrice)) checked @endif name="LowPrice" onchange="this.form.submit();" id="LowPrice" value="10000" />
                                                            <span>LKR 0 to 10000</span>
                                                        </label>
                                                    </li> @if(!empty($_GET['MiddelPrice'])) @php $filter_MiddelPrice=explode(',',$_GET['MiddelPrice']); @endphp @endif <li>
                                                        <label class="checkbox-default" for="EngineParts">
                                                            <input type="checkbox" @if(!empty($filter_MiddelPrice) && in_array('50000',$filter_MiddelPrice)) checked @endif id="MiddelPrice" onchange="this.form.submit();" name="MiddelPrice" value="50000" />
                                                            <span>LKR 10000 to 50000</span>
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <div class="pricerange">
                                                            <!-- <span>RS</span> -->
                                                            <input class="form-control" type="text" placeholder="{{ __('Min') }}" name="Min" id="Min" aria-label="default input example">
                                                            <label>To</label><br>
                                                            <input class="form-control" type="text" placeholder="{{ __('Max') }}" name="Max" id="Max" aria-label="default input example">
                                                        </div>
                                                        <button class="pricesub" onchange="this.form.submit();">Apply</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Sidebar Widget -->
                                    <br>
                            </div>
                            <!-- End Sidebar Area -->
                        </div>
                    </div>
                    <!-- //////////////////////***********************************************////////// -->
                </div>
                </form>
                <div class="col-lg-10 fullcol   "> 
                @if(Auth::check()) 
                    <div class="sidenav">
                        <div class="hearticon">
                            <a href="{{url('web/myAccount')}}"><i class="far fa-heart"></i></a>
                        </div>
                    </div> 
                    @else @endif 
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="form-check">
                           <input class="form-check-input mt-1" type="checkbox" name="accessoryType[]" onchange="this.form.submit();" value="Body Components" id="accessoryType">
                           <label class="form-check-label" for="accessoryType">
                           Body Components
                           </label>
                        </div>  -->
                            <ul class="list-inline">
                                <form action="/web/shop/Body-Components" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Body Components" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions">Body Components </li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Car-Audio-Systems" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Car Audio Systems" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Car Audio Systems </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Lighting-Indicators" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Lighting & Indicators" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions">Lighting & Indicators</li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Wheels-Tyres-Rims" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Wheels, Tyres & Rims" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Wheels, Tyres & Rims </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Suspension-Steering-Handling" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Suspension, Steering & Handling" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Suspension, Steering & Handling </li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Engines-Engine-Parts" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Engines & Engine Parts" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Engines & Engine Parts </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Accessories" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Accessories" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions">Accessories</li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Interior-Parts-Furnishings" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Interior Parts & Furnishings" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Interior Parts & Furnishings </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Brakes" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Brakes" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Brakes </li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Air-Conditioning-Heating" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Air Conditioning Heating" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Air Conditioning Heating </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Mirror-Components" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Mirror Components" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions">Mirror Components</li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Undercarriage-Parts" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Undercarriage Parts" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Undercarriage Parts </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Helmets-Clothing-Protection" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Helmets, Clothing & Protection" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Helmets, Clothing & Protection </li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Exhausts-Exhaust-Parts" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Exhausts & Exhaust Parts" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Exhausts & Exhaust Parts </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/AirIntake-Fuel-Delivery" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Air Intake & Fuel Delivery" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions">Air Intake & Fuel Delivery</li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Tools-Equipment" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Tools & Equipment" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Tools & Equipment </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Automobile-Batteries" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Automobile Batteries" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Automobile Batteries </li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/WindscreenWipers-Washers" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Windscreen Wipers & Washers" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Windscreen Wipers & Washers </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Transmission-Drivetrain" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Transmission & Drivetrain" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions">Transmission & Drivetrain</li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Oils-Lubricants-Fluids" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Oils, Lubricants & Fluids" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Oils, Lubricants & Fluids </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Chassis" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Chassis" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Chassis </li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Turbos-Superchargers" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Turbos & Superchargers" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Turbos & Superchargers </li>
                                        </button></div>
                                </form>
                                <form action="/web/shop/Footrests-Pedals-Pegs" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Footrests, Pedals & Pegs" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions">Footrests, Pedals & Pegs</li>
                                        </button> </div>
                                </form>
                                <form action="/web/shop/Tyres-Rims" method="post">{{ csrf_field() }}
                                    <div class="parts-suggestions-p"><input type="hidden" name="accessoryType" value="Tyres / rims" id="accessoryType1"> <button type="submit">
                                            <li class="list-inline-item parts-suggestions"> Tyres / rims </li>
                                        </button></div>
                                </form>
                            </ul>
                        </div>
                    </div>
                    <!-- parts suggestions -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
                    <script>
                        function closeButton() {
                            $('.filtering-part').hide();
                            $('.fullcol').removeClass('col-lg-9').addClass('col-lg-12');
                            $('.rightarrowfilter').show();
                            document.getElementById("product").style.paddingLeft = "15px";
                        }

                        function openButton() {
                            $('.filtering-part').show();
                            $('.fullcol').removeClass('col-lg-12').addClass('col-lg-9');
                            $('.rightarrowfilter').hide();
                        }
                        $('.list-inline').slick({
                            dots: false,
                            infinite: true,
                            speed: 300,
                            slidesToShow: 1,
                            variableWidth: true
                        });
                        // Add slick slider
                        $('.menu').slick({
                            dots: false,
                            infinite: true,
                            speed: 300,
                            slidesToShow: 1,
                            variableWidth: true
                        });
                    </script>
                    <!-- parts suggestions end -->
                    <!-- Start Shop Product Sorting Section -->
                    <div class="shop-sort-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                </div>
                                <div class="col-3">
                                    <!-- Start Sort Wrapper Box -->
                                    <div>
                                        <!-- Start Sort tab Button -->
                                        <div class="sort-tablist">
                                            <ul class="tablist nav sort-tab-btn">
                                                <li>
                                                    <a class="nav-link active" class="openbtn" onclick="openNav()"><img src="../assetss/images/icon/filter (1).png" alt="" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Sort tab Button -->
                                    </div>
                                    <!-- Start Sort Wrapper Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Section Content -->
                    <style>
                        .add-fav {
                            display: inline-block;
                            padding: 5px;
                            cursor: pointer;
                            /* border: 1px solid #ccc; */
                            /* background: -webkit-linear-gradient(top, #fff, #ddd) #ddd; */
                            position: relative;
                            transition: all 0.5s ease;
                            border-radius: 3px;
                            /* box-shadow: inset 0 -1px 1px #eee; */
                        }

                        .add-fav:hover {
                            /* background: -webkit-linear-gradient(top, #fff, #ccc) #ddd; */
                        }

                        .add-fav .icon-heart {
                            font-size: 24px;
                            color: #666;
                            position: relative;
                            transition: all 0.5s ease-in-out;
                        }

                        .add-fav .icon-plus-sign {
                            font-size: 10px;
                            color: #333;
                            background: #fff;
                            border-radius: 100%;
                            position: absolute;
                            bottom: 2px;
                            right: 2px;
                            height: 11px;
                            width: 11px;
                            line-height: 11px;
                            text-align: center;
                            transition: all 1s ease-in-out;
                        }

                        .add-fav input[type=checkbox] {
                            position: absolute;
                            opacity: 0;
                        }

                        .add-fav input[type=checkbox]:checked+.icon-heart {
                            color: red;
                        }

                        .add-fav input[type=checkbox]:checked+.icon-heart .icon-plus-sign {
                            display: none;
                        }
                    </style>
                    <!-- Start Tab Wrapper -->
                    <div class="data sort-product-tab-wrapper">
                        <div class="">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content tab-animate-zoom">
                                        <!-- Start Grid View Product -->
                                        <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                            <div class="row" id="product"> 
                                            @foreach($data as $list) 
                                            <div class="col-12 col-sm-4" id="mobliepd">
                                                    <div class="row productborder">

                                                    <!-- ////////////////////////////////////////////////////////////////////////////////////// -->


                                                    
                                                    <!-- ///////////////////////////////////////////////////////////////////////////////////// -->
                                                        <div class="col-4" style="padding: 5px;">
                                                        <a href="/web/shop/product/{{$list->id}}"><img src="{{asset('/')}}image/ads/{{$list->image1}}" alt="" class="img-fluid" /></a>
                                                        </div>
                                                        <div class="col-8" style="padding:5px">
                                                        <table  width: 100px; >
                                                            <tr>
                                                                <th>
                                                                    <div class="col">
                                                                        <h6 class="product-default-link"><a href="/web/shop/product/{{$list->id}}">{{$list->title}}</a></h6> 
                                                                    </div>
                                                                </th>
                                                                <th>    
                                                                    <div class="col-1">
                                                                                                                    
                                                                    @if(Auth::check()) 
                                                                                                                        
                                                                    <div class="col-1">
                                                                    <label class="add-fav">
                                                                    <input type="checkbox" name="favorite" id="favorite" value="{{$list->id}}" class="product_data" @foreach($favorite as $favorites) @if((Auth::user()->name==$favorites->femail) && ($favorites->fadId==$list->id))checked @endif @endforeach/> <i class="icon-heart">
                                                                    </i>
                                                                    </label>
                                                                    </div> 
                                                                    @else 
                                                                    <div class="col-1">
                                                                    <form action="/favoriterequest" method="post">
                                                                    {{ csrf_field() }}
                                                                    <label class="add-fav">
                                                                    <input type="checkbox" name="favorite1" value="1" onchange="this.form.submit();" />
                                                                    <i class="icon-heart">
                                                                    </i>
                                                                    </label>
                                                                    </form>
                                                                    </div> 
                                                                    @endif
                                                                    </div>
                                                                    </th>
                                                            </tr>
                                                            </table>
                                                            
                                                            <div class="product-details-item">{{ __($list->condition) }}</div>
                                        
                                                            <div class="product-details-item">{{$postdate=$list->created_at}}</div>
                                                            <div class="product-details-item">{{ __($list->district) }},{{$list->address}}</div>
                                                            
                                                            

                                                            <div class="row ">
                                                                <div class="col">
                                                                    <div class="product-details-price">Rs.{{$list->price}}</div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="Top-Rated-Seller">{{\Carbon\Carbon::parse($postdate)->diffForHumans()}}</div>
                                                                    <!-- <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div> 
                                                @endforeach
                                                <!-- Start Pagination -->
                                                <div class="page-pagination text-center" data-aos="fade-up" data-aos-delay="0">
                                                    <ul>
                                                        <!-- <li><a href="#">Previous</a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li> -->
                                                        {{$data->appends($_GET)->links()}}
                                                    </ul>
                                                </div>
                                                <!-- End Pagination -->
                                                <style>
                                                    .w-5 {
                                                        display: none;
                                                    }

                                                    .text-sm {
                                                        margin-top: 15px;
                                                    }
                                                </style>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tab Wrapper -->
                        </div>
                        <!-- End Shop Product Sorting Section  -->
                    </div>
                </div>
            </div>
            <!-- ...:::: End Shop Section:::... -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <script type="text/javascript">
                // let favoriteID = document.getElementById("podtId").value;
                $(document).ready(function() {
                    $(document).on('change', '.product_data', function(e) {
                        console.log("hmm its change");
                        e.preventDefault();
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        // $("favorite").is(":checked")
                        var product_id = $(this).val();
                        console.log(product_id);
                        // var favorite = document.getElementById("favorite").value;
                        // console.log(favorite);
                        // var email = $("#email").val();
                        // console.log(email);
                        // var fid = document.getElementById("fid").value;
                        // console.log(fid);
                        var div = $(this).parent().parent().parent().parent().parent();
                        var op = " ";
                        $.ajax({
                            type: 'post',
                            url: '{!!URL::to('favoritepost')!!}',
                            data: {
                                'id': product_id,
                                // 'fid': fid,
                                // 'email' : email,
                            },
                            success: function(data) {
                                console.log('success');
                                console.log(data);
                                console.log(data.jength);
                                //  alertify.set('notifier','position','top-right')
                                //  alertify.success(data.status);
                                //  op+='<input type="checkbox" name="favorite" value="1" checked/>';
                                //  op+='<i class="icon-heart">';
                                //  op+='</i>';
                                // div.find('.add-fav').html(" ");
                                // div.find('.add-fav').append(op);
                            },
                        });
                    });
                });
            </script>
            <!-- new div tag -->
        </div>
    </div>
    </div> @include('web/include/footer')
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"><i class="fa fa-angle-up fa-3x"></i></button>
    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <script src="{{asset('/')}}assetss/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="{{asset('/')}}assetss/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}assetss/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="{{asset('/')}}assetss/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="{{asset('/')}}assetss/js/vendor/jquery-ui.min.js"></script>
    <!--Plugins JS-->
    <script src="{{asset('/')}}assetss/js/plugins/slick.min.js"></script>
    <script src="{{asset('/')}}assetss/js/plugins/material-scrolltop.js"></script>
    <script src="{{asset('/')}}assetss/js/plugins/jquery.nice-select.min.js"></script>
    <script src="{{asset('/')}}assetss/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{asset('/')}}assetss/js/plugins/venobox.min.js"></script>
    <script src="{{asset('/')}}assetss/js/plugins/aos.min.js"></script>
    <script src="{{asset('/')}}assetss/js/plugins/ajax-mail.js"></script>
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="{{asset('/')}}assetss/js/vendor.min.js"></script>
    <script src="{{asset('/')}}assetss/js/plugins.min.js"></script> -->
    <!-- Main JS -->
    <script src="{{asset('/')}}assetss/js/main.js"></script>
    <script src="{{asset('/')}}assetss/js/slider.js"></script>
    <script>
        function loadssss() {
            var vehicle = document.getElementsByName('vehicle[]');
            // if($("#vehicle").is(":checked")){
            //   $("#demo").show();
            // }
            for (var i = 0; vehicle[i]; ++i) {
                // alert(location);
                if (vehicle[i].checked) {
                    // alert("ok");
                    $("#demo").show();
                }
            }
            var vehicleModel = document.getElementsByName('vehicleModel[]');
            for (var i = 0; vehicleModel[i]; ++i) {
                // alert(location);
                if (vehicleModel[i].checked) {
                    // alert("ok");
                    $("#demo1").show();
                }
            }
            var location = document.getElementsByName('location[]');
            for (var i = 0; location[i]; ++i) {
                // alert(location);
                if (location[i].checked) {
                    // alert("ok");
                    $("#demo2").show();
                }
            }
            var bodyType = document.getElementsByName('bodyType[]');
            for (var i = 0; bodyType[i]; ++i) {
                // alert(location);
                if (bodyType[i].checked) {
                    // alert("ok");
                    $("#demo3").show();
                }
            }
            var fuelType = document.getElementsByName('fuelType[]');
            for (var i = 0; fuelType[i]; ++i) {
                // alert(location);
                if (fuelType[i].checked) {
                    // alert("ok");
                    $("#demo4").show();
                }
            }
            var x = window.matchMedia("(max-width: 768px)")
            if (x.matches) {
                document.getElementById("mySidebar").style.width = "0";
            } else {
                document.getElementById("mySidebar").style.width = "100%";
            }
        }

        function openNav() {
            // alert(document.getElementById("mySidebar").style.width);
            document.getElementById("mySidebar").style.width = '100%';
            //  alert(document.getElementById("mySidebar").style.width);
            // document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            // alert("ssuuuss");
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
</body>

</html>