<!DOCTYPE html>
<html lang="en">
@include('web/include/head')
<!-- Bootstrap CDN JS Links -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


<style>

body {
    overflow-x: hidden;
}
.tabcontent {
    display: none;
    padding: 6px 12px;
}

.containerp {
    padding-left: 5%;
    padding-right: 13%;
}

.watchfull {
    margin-top: 13px;
    float: right;
    background-color: #d1d1d1;
    border-radius: 28px;

    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: Arial;
    font-size: 17px;
    padding: 1px 15px;
    text-decoration: none;
}
.watchfull:hover {
    background-color: #0d6efd;
}
.watchfull:active {
    position: relative;
    top: 1px;
}

.QuickRules {
    text-align: center;
    color: red;
    font-size: larger;
    padding: 8px;
}
.email {
    text-align: center;
    color: red;
    font-size: larger;
}

.year {
    text-align: center;
    font-size: medium;
    font-weight: 400;
    color: gray;
    margin-bottom: 20px;
}

.icon_middle {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    cursor: pointer;
}
.icon_middle span {
    display: block;
}

.postadss {
    padding: 20px;
}

.icon-center {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.moreads a {
    color: blue;
    font-size: 15px;
}

.tabs-section {
    overflow: hidden;

    padding: 60px 0px;
}

.tabs-section .nav-tabs {
    border: 0;
}
.tabs-section .nav-link {
    border: 0;
    padding: 11px 15px;
    transition: 0.3s;
    color: rgb(0, 0, 0);
    border-radius: 0;
    border-right: 2px solid #000000 !important;
    font-weight: 600;
    font-size: 15px;
}
.tabs-section .nav-link:hover {
    color: #000000;
}
.tabs-section .nav-link.active {
    color: #000000;
    background: #e6e6e6;
}
.tabs-section .nav-link:hover {
    border-right: 4px solid #cddc39;
}
.tabs-section .tab-pane.active {
    -webkit-animation: fadeIn 0.5s ease-out;
    animation: fadeIn 0.5s ease-out;
}

.tabs-section .details {
    color: #000000;
}

.banner {
    flex-direction: column;

    float: right;
    z-index: -1;

    position: absolute;
    right: 0px;
    /* top: 0px; */
    z-index: -1;
}

</style>


 <body>
    @include('web/include/header2')
    @include('sweet::alert')

    <section class="tabs-section text-white">
        <div class="banner">
            <table>
                <tr>
                    <th><img src="{{asset('/')}}image/myAccount/banner1.jpg" /></th>
                </tr>

                <tr>
                    <th><img src="{{asset('/')}}image/myAccount/banner1.jpg" /></th>
                </tr>
            </table>
        </div>
        <div class="containerp">
            <div class="row details">
                <div class="col-sm-5 col-lg-3">
                    <div class="email">{{Auth::user()->name}}</div>
                    <div class="year">Member since July 2021</div>

                    <ul class="nav nav-tabs flex-column mb-3">
                        <li class="nav-item" id="myaccount">
                            <a class="nav-link active show" data-toggle="tab" href="#tab-1">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">Shop Open</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3">Message center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-4">Member Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-5">Setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-6">Invite Friends </a>
                        </li>
                    </ul>

                    <div class="QuickRules">Quick Rules</div>

                    <ul>
                        <li><i class="fas fa-exclamation-circle"></i> &nbsp; Lorem Ipsum is simply dummy</li>
                        <li><i class="fas fa-exclamation-circle"></i> &nbsp; Lorem Ipsum is simply dummy</li>
                        <li><i class="fas fa-exclamation-circle"></i> &nbsp; Lorem Ipsum is simply dummy</li>
                        <li><i class="fas fa-exclamation-circle"></i> &nbsp; Lorem Ipsum is simply dummy</li>
                    </ul>

                    <div class="watchfull"><i class="fas fa-play-circle"></i> &nbsp; View full video</div>
                </div>
                <div class="col-sm-7 col-lg-9">
                    <div class="tab-content details active">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="moreads">
                                        <p style="line-height: 30px;"><img class="circular--landscape" src="{{asset('/')}}image/myAccount/profile.jpeg" style="vertical-align: middle;" /> &nbsp; <b>{{Auth::user()->name}}</b></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col icon_middle" onclick="openCity(event, 'mywishlist')">
                                    <img src="{{asset('/')}}image/myAccount/WishList.jpg" style="width: 40px; height: auto; padding-bottom: 5px;" /><span>Wish List </span>
                                </div>
                                <div class="col icon_middle" onclick="openCity(event, 'myfollowing')">
                                    <img src="{{asset('/')}}image/myAccount/Following.jpg" style="width: 40px; height: auto; padding-bottom: 5px;" /><span>Following</span>
                                </div>
                                <div class="col icon_middle" onclick="openCity(event, 'myviewed')"><img src="{{asset('/')}}image/myAccount/Viewed.jpg" style="width: 40px; height: auto; padding-bottom: 5px;" /><span>Viewed</span></div>
                                <div class="col icon_middle" onclick="openCity(event, 'myfeedback')"><img src="{{asset('/')}}image/myAccount/Feedback.jpg" style="width: 40px; height: auto; padding-bottom: 5px;" /><span>Feedback</span></div>
                            </div>

                            <br />
                            <div id="postadss">
                                <div class="postadss">
                                    <h6><b> Post My Ad </b></h6>
                                </div>

                                <div class="row postadssimg">
                                    <div class="col icon_middle" onclick="openCity(event, 'spareparts')"><img src="{{asset('/')}}image/myAccount/Spareparts.jpg" /><span>Spareparts</span></div>
                                    <div class="col icon_middle" onclick="openCity(event, 'vehicles')"><img src="{{asset('/')}}image/myAccount/Vehicles.jpg" /><span>Vehicles</span></div>
                                    <div class="col icon_middle" onclick="openCity(event, 'flashit')"><img src="{{asset('/')}}image/myAccount/FlashIt.jpg" /><span>Flash It</span></div>
                                </div>
                            </div>

                            <br />

                            <script>
                                $("#myaccount").click(function () {
                                    location.reload();
                                });
                            </script>



                            <div id="mywishlist" class="tabcontent">
                                <div class="row">
                                @foreach($wishlist as $list)
                                <div class="col-12 col-sm-6">
                                    <div class="row productborder">
                                        <div class="col-4">
                                            <a href="{{asset('/')}}web/shop/product/{{$list->id}}"> <img src="{{asset('/')}}image/ads/{{$list->image3}}" alt="" class="img-fluid" /></a>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="product-default-link">
                                                <a href="{{asset('/')}}web/shop/product/{{$list->id}}">{{$list->title}}</a>
                                            </h6>
                                            <div class="product-details-item">{{$list->condition}}</div>
                                            <div class="product-details-item">Posted on {{$list->created_at}},{{$list->address}} , {{$list->district}}</div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="product-details-price">Rs.{{$list->price}}</div>
                                                </div>
                                                <!-- <div class="col-6">
                                                
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <!-- Start Pagination -->
                             <div class="page-pagination text-center">
                                            <ul>
                                            <!-- <li><a href="#">Previous</a></li>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next</a></li> -->
                                            
                                            {{$vehicle->links()}}
                                            </ul>
                                        </div>
                                        <!-- End Pagination -->
                                        <style>
                                        .w-5{
                                            display:none;
                                        }
                                        .text-sm{
                                            margin-top:15px;
                                        }
                                        </style>
                            </div>















                            <div id="myfollowing" class="tabcontent">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="row productborder">
                                            <div class="col-4">
                                                <a href="product-details-default.html"> <img src="{{asset('/')}}assetss/images/products_images/Group 7.png" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="product-default-link">
                                                    <a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts 001</a>
                                                </h6>
                                                <div class="product-details-item">Reconditioned</div>
                                                <div class="product-details-item">Posted on 01 Oct 2:45 pm, Kandana, Gampaha</div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="product-details-price">Rs.10,000000.00</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="row productborder">
                                            <div class="col-4">
                                                <a href="product-details-default.html"> <img src="{{asset('/')}}assetss/images/products_images/Group 7.png" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="product-default-link">
                                                    <a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a>
                                                </h6>
                                                <div class="product-details-item">Reconditioned</div>
                                                <div class="product-details-item">Posted on 01 Oct 2:45 pm, Kandana, Gampaha</div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="product-details-price">Rs.10,000000.00</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="myviewed" class="tabcontent">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="row productborder">
                                            <div class="col-4">
                                                <a href="product-details-default.html"> <img src="{{asset('/')}}assetss/images/products_images/Group 7.png" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="product-default-link">
                                                    <a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts 002</a>
                                                </h6>
                                                <div class="product-details-item">Reconditioned</div>
                                                <div class="product-details-item">Posted on 01 Oct 2:45 pm, Kandana, Gampaha</div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="product-details-price">Rs.10,000000.00</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="row productborder">
                                            <div class="col-4">
                                                <a href="product-details-default.html"> <img src="{{asset('/')}}assetss/images/products_images/Group 7.png" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="product-default-link">
                                                    <a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a>
                                                </h6>
                                                <div class="product-details-item">Reconditioned</div>
                                                <div class="product-details-item">Posted on 01 Oct 2:45 pm, Kandana, Gampaha</div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="product-details-price">Rs.10,000000.00</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="myfeedback" class="tabcontent">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="row productborder">
                                            <div class="col-4">
                                                <a href="product-details-default.html"> <img src="{{asset('/')}}assetss/images/products_images/Group 7.png" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="product-default-link">
                                                    <a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts 005</a>
                                                </h6>
                                                <div class="product-details-item">Reconditioned</div>
                                                <div class="product-details-item">Posted on 01 Oct 2:45 pm, Kandana, Gampaha</div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="product-details-price">Rs.10,000000.00</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="row productborder">
                                            <div class="col-4">
                                                <a href="product-details-default.html"> <img src="{{asset('/')}}assetss/images/products_images/Group 7.png" alt="" class="img-fluid" /></a>
                                            </div>
                                            <div class="col-8">
                                                <h6 class="product-default-link">
                                                    <a href="product-details-default.html">New Balance Fresh Foam Kaymin Car Purts</a>
                                                </h6>
                                                <div class="product-details-item">Reconditioned</div>
                                                <div class="product-details-item">Posted on 01 Oct 2:45 pm, Kandana, Gampaha</div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="product-details-price">Rs.10,000000.00</div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="vehicles" class="tabcontent">
                                <div class="row">
                                @foreach($vehicle as $list)
                                <div class="col-12 col-sm-6">
                                    <div class="row productborder">
                                        <div class="col-4">
                                            <a href="{{asset('/')}}web/shop/product/{{$list->id}}"> <img src="{{asset('/')}}image/ads/{{$list->image3}}" alt="" class="img-fluid" /></a>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="product-default-link">
                                                <a href="{{asset('/')}}web/shop/product/{{$list->id}}">{{$list->title}}</a>
                                            </h6>
                                            <div class="product-details-item">{{$list->condition}}</div>
                                            <div class="product-details-item">Posted on {{$list->created_at}},{{$list->address}} , {{$list->district}}</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="product-details-price">Rs.{{$list->price}}</div>
                                                </div>
                                                <div class="col-6">
                                                @if(Auth::user()->group == 'WebUser')
                                                <a href="/editwebpost/{{$list->id}}/{{$list->category}}"><button type="button"  class="btn btn-danger"><i class="icon-bin"></i> Edit</button></a>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <!-- Start Pagination -->
                             <div class="page-pagination text-center">
                                            <ul>
                                            <!-- <li><a href="#">Previous</a></li>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next</a></li> -->
                                            
                                            {{$vehicle->links()}}
                                            </ul>
                                        </div>
                                        <!-- End Pagination -->
                                        <style>
                                        .w-5{
                                            display:none;
                                        }
                                        .text-sm{
                                            margin-top:15px;
                                        }
                                        </style>  
                            </div>

                            <div id="spareparts" class="tabcontent">
                                <div class="row">
                                @foreach($data as $list)
                                <div class="col-12 col-sm-6">
                                    <div class="row productborder">
                                        <div class="col-4">
                                            <a href="{{asset('/')}}web/shop/product/{{$list->id}}"> <img src="{{asset('/')}}image/ads/{{$list->image3}}" alt="" class="img-fluid" /></a>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="product-default-link">
                                                <a href="{{asset('/')}}web/shop/product/{{$list->id}}">{{$list->title}}</a>
                                            </h6>
                                            <div class="product-details-item">{{$list->condition}}</div>
                                            <div class="product-details-item">Posted on {{$list->created_at}},{{$list->address}} , {{$list->district}}</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="product-details-price">Rs.{{$list->price}}</div>
                                                </div>
                                                <div class="col-6">
                                                @if(Auth::user()->group == 'WebUser')
                                                <a href="/editwebpost/{{$list->id}}/{{$list->category}}"><button type="button"  class="btn btn-danger"><i class="icon-bin"></i> Edit</button></a>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <!-- Start Pagination -->
                             <div class="page-pagination text-center">
                                            <ul>
                                            <!-- <li><a href="#">Previous</a></li>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">Next</a></li> -->
                                            
                                            {{$data->links()}}
                                            </ul>
                                        </div>
                                        <!-- End Pagination -->
                                        <style>
                                        .w-5{
                                            display:none;
                                        }
                                        .text-sm{
                                            margin-top:15px;
                                        }
                                        </style> 
                            </div>
                            
                             
                            <script>
                                function openCity(evt, cityName) {
                                    var i, tabcontent, tablinks;
                                    tabcontent = document.getElementsByClassName("tabcontent");
                                    for (i = 0; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                    }
                                    tablinks = document.getElementsByClassName("tablinks");
                                    for (i = 0; i < tablinks.length; i++) {
                                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                                    }
                                    document.getElementById(cityName).style.display = "block";
                                    evt.currentTarget.className += " active";
                                }
                            </script>
                        </div>

                        <div class="tab-pane" id="tab-2">
                            <div class="row" id="myfeedback">
                                <div class="account_form register">
                                <h1>Shop Open</h1>
                                <br>
                                    <form action="/requestShop" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="email" value="{{Auth::user()->name}}">
                                        <div class="default-form-box mb-20">
                                            <label>My Email Address </label>
                                            <input type="email" name="femail" value="{{Auth::user()->name}}" disabled>
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Shop Email address </label>
                                            <input type="email" name="semail" value="" placeholder="Enter Shop Email Address" required>
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Contact Number </label>
                                            <input type="text" id="Number" name="Number" placeholder="Enter Contact Number" required>
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Whatsapp Number </label>
                                            <input type="text" id="wNumber" name="wNumber" placeholder="Enter Whatsapp Number">
                                        </div>
                                        <div class="default-form-box mb-20">
                                            <label>Address </label>
                                            <textarea id="address" name="address" rows="1" placeholder="Enter Shop Address" style="height:100px;"></textarea>
                                        </div>
                                        <div class="login_submit">
                                            <button type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>      
                        </div>

                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-12 details">
                                    dfdf
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-12 details">
                                    dfdf
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-5">
                            <div class="row">
                                <div class="col-lg-12 details">
                                    <div class="account_form register">
                                        <br>
                                        <form action="/updateprofile" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                            <div class="default-form-box mb-20">
                                                <label>Email address <span>*</span></label>
                                                <input type="email" name="email" value="{{Auth::user()->name}}" disabled>
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Passwords <span>*</span></label>
                                                <input type="password" id="rpassword" name="password" required>
                                            </div>
                                            <div class="default-form-box mb-20">
                                                <label>Re-enter Passwords <span>*</span></label>
                                                <input type="password" id="confirm_password" required>
                                            </div>
                                            <div class="login_submit">
                                                <button type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-6">
                            <div class="row">
                                <div class="col-lg-12 details">
                                    dfdf
                                </div>
                            </div>
                        </div>
                    </div>
                    &nbsp;
                </div>
            </div>
        </div>
    </section>
</body>
</html>