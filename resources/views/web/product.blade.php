<!DOCTYPE html>
<html lang="en">
   @include('web/include/head1')
   <link rel='stylesheet' href='https://unpkg.com/xzoom/dist/xzoom.css'>
   <body>
      <!-- ///////////////////////////////////////////////////////////////////header///////////////////////////////////////// -->
      @include('web/include/header2')
      <!-- ///////////////////////////////////////////////////////////////////header///////////////////////////////////////// -->
      <!-- ...:::: Start Breadcrumb Section:::... -->
      <div class="breadcrumb-section">
         <div class="breadcrumb-wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-12 d-flex justify-content-between justify-content-md-between  align-items-center flex-md-row flex-column">
                     <h3 class="breadcrumb-title">{{ __('Vehicle Part Details') }}</h3>
                     <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                           <ul>
                              <li><a href="{{url('/')}}">{{ __('Home') }}</a></li>
                              <li><a href="{{url('/web/shop')}}">{{ __('Vehicle Parts') }}</a></li>
                              <li class="active" aria-current="page">{{ __('Vehicle Part Details') }} </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ...:::: End Breadcrumb Section:::... -->



<style>
.xzoom{
    width:100%;
    max-inline-size: 100%;
    block-size: auto;
    aspect-ratio: 2/1;
    object-fit: contain;
}
body{
        overflow-x: hidden;
   }
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
.add-fav input[type=checkbox]:checked + .icon-heart {
  color: red;
  
  
}

.add-fav input[type=checkbox]:checked + .icon-heart .icon-plus-sign {
  display: none;
}

.vl {
  border-right: 1px solid #ccc;
  height: 100%;
  
}
</style>


      
    @foreach($products as $product)
      <!-- Start Product Details Section -->
      <div class="product-details-section">
         <div class="maincontainer">
         <hr style="width: 2400px;">
            <div class="row">
            <!-- <div class="col-md-1">
            </div>     -->
               <div class="col-sm-7 vl">
                  <div class="shopwebview">
                     <div class="row">
                     @if($product->group == 'Editor') 
                        <div class="col-sm-6">
                           <div class="shopname">{{$product->shopName}} 
                                <sup > Store No. 1024  </sup>
                           </div>
                        </div>

                        <div class="col-sm-2 followe-p">
                           <button class="followbtn">Follow</button>
                           <!-- <sup > Store No. 1024  </sup> -->
                        </div>
                        @elseif($product->group == 'WebUser')
                        <div class="col-sm-6">
                           <div class="shopname">{{$product->name}} 
                                <!-- <sup > Store No. 1024  </sup> -->
                           </div>
                        </div>

                        @endif
                        <div class="col-sm-1">
                           
                        </div>

                        @if(Auth::check())

                                        
                        <div class="col-sm-1">
                        <label class="add-fav">  
                        
        
                        <input type="checkbox" name="favorite" id="favorite" value="{{$product->id}}" class="product_data"@foreach($favorite as $favorites) @if((Auth::user()->name==$favorites->femail) && ($favorites->fadId==$product->id))checked @endif @endforeach/>
                        
                        <i class="icon-heart">

                        </i>
                        </label>
                    
                        
                        </div>
                        

                        @else

                        <div class="col-sm-1">
                        <form action="/favoriterequest"  method="post">
                        {{ csrf_field() }}
                            <label class="add-fav">  
                            <input type="checkbox" name="favorite1" value="1" onchange="this.form.submit();"/> 
                                <i class="icon-heart">
                                    <!-- <i class="fa fa-plus-square"></i> --> 
                                </i>
                            </label>
                            </form>
                            </div>
                        @endif
                        <div class="col-sm-2">
                           <button class="cpylickbtn"><i class="fal fa-copy"></i> &nbsp; Copy Link</button>
                        </div>

                     </div>




<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
                <script type="text/javascript">

                    // let favoriteID = document.getElementById("podtId").value;

                    $(document).ready(function(){

                    $(document).on('change','.product_data',function(e){
                        // console.log("hmm its change");

                      e.preventDefault();

                      $.ajaxSetup({
                        headers:{
                          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                        }
                        
                      });


                      var product_id = $(this).val();
                    //   console.log(product_id);
                      

                      var div=$(this).parent().parent().parent().parent().parent();

                      var op=" ";

                      $.ajax({
                        type:'post',
                        url:'{!!URL::to('favoritepost')!!}',
                        data:{'id': product_id,
                              // 'fid': fid,
                              // 'email' : email,

                        },
                        success:function(data){
                        //    console.log('success');

                        //    console.log(data);

                        //    console.log(data.jength);

                          



                        },
                        
                      });
                      });
                    });
                    </script>





                    @if($product->group == 'Editor')
                     <div class="row">
                        <div class="col toprateseller">
                           <i class="fas fa-medal"></i> &nbsp; Top Rated Seller  98.4% Positive feedback (4201)
                        </div>
                        <div class="col" style="margin-left: 10px;" ><b>214 </b> Followers</div>
                     </div>
                    @endif

                  </div>
                  <div class="itemname">{{$product->title}} </div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div class="product-details-gallery-area">
                  <section id="default" class="padding-top0">
    <div class="row">
     
      
        <div class="xzoom-container" style="padding:50px">
          <img class="xzoom" id="xzoom-default" src="{{asset('/')}}image/ads/{{$product->image1}}" xoriginal="{{asset('/')}}image/ads/{{$product->image1}}"/>
          <div class="xzoom-thumbs mt-5">
            <a href="{{asset('/')}}image/ads/{{$product->image1}}"><img class="xzoom-gallery" width="100" height= "100" src="{{asset('/')}}image/ads/{{$product->image1}}"  xpreview="{{asset('/')}}image/ads/{{$product->image1}}"></a>
              
            <a href="{{asset('/')}}image/ads/{{$product->image2}}"><img class="xzoom-gallery" width="100" height= "100" src="{{asset('/')}}image/ads/{{$product->image2}}"></a>
              
            <a href="{{asset('/')}}image/ads/{{$product->image3}}"><img class="xzoom-gallery" width="100" height= "100" src="{{asset('/')}}image/ads/{{$product->image3}}"></a>
              
            <a href="{{asset('/')}}image/ads/{{$product->image4}}"><img class="xzoom-gallery" width="100" height= "100" src="{{asset('/')}}image/ads/{{$product->image4}}"></a>
            <a href="{{asset('/')}}image/ads/{{$product->image5}}"><img class="xzoom-gallery" width="100" height= "100" src="{{asset('/')}}image/ads/{{$product->image5}}"></a>
          </div>
        </div>        
    
     
    </div>
    </section>
                    </div>
<!-- partial -->
<script src='https://code.jquery.com/jquery-2.1.1.js'></script>
<script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>

<script>
                       (function ($) {
    $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});
        $('.xzoom2, .xzoom-gallery2').xzoom({position: '#xzoom2-id', tint: '#ffa200'});
        $('.xzoom3, .xzoom-gallery3').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});
        $('.xzoom4, .xzoom-gallery4').xzoom({tint: '#006699', Xoffset: 15});
        $('.xzoom5, .xzoom-gallery5').xzoom({tint: '#006699', Xoffset: 15});

        //Integration with hammer.js
        var isTouchSupported = 'ontouchstart' in window;

        if (isTouchSupported) {
            //If touch device
            $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function(){
                var xzoom = $(this).data('xzoom');
                xzoom.eventunbind();
            });
            
            $('.xzoom, .xzoom2, .xzoom3').each(function() {
                var xzoom = $(this).data('xzoom');
                $(this).hammer().on("tap", function(event) {
                    event.pageX = event.gesture.center.pageX;
                    event.pageY = event.gesture.center.pageY;
                    var s = 1, ls;
    
                    xzoom.eventmove = function(element) {
                        element.hammer().on('drag', function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            xzoom.movezoom(event);
                            event.gesture.preventDefault();
                        });
                    }
    
                    xzoom.eventleave = function(element) {
                        element.hammer().on('tap', function(event) {
                            xzoom.closezoom();
                        });
                    }
                    xzoom.openzoom(event);
                });
            });

        $('.xzoom4').each(function() {
            var xzoom = $(this).data('xzoom');
            $(this).hammer().on("tap", function(event) {
                event.pageX = event.gesture.center.pageX;
                event.pageY = event.gesture.center.pageY;
                var s = 1, ls;

                xzoom.eventmove = function(element) {
                    element.hammer().on('drag', function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        xzoom.movezoom(event);
                        event.gesture.preventDefault();
                    });
                }

                var counter = 0;
                xzoom.eventclick = function(element) {
                    element.hammer().on('tap', function() {
                        counter++;
                        if (counter == 1) setTimeout(openfancy,300);
                        event.gesture.preventDefault();
                    });
                }

                function openfancy() {
                    if (counter == 2) {
                        xzoom.closezoom();
                        $.fancybox.open(xzoom.gallery().cgallery);
                    } else {
                        xzoom.closezoom();
                    }
                    counter = 0;
                }
            xzoom.openzoom(event);
            });
        });
        
        $('.xzoom5').each(function() {
            var xzoom = $(this).data('xzoom');
            $(this).hammer().on("tap", function(event) {
                event.pageX = event.gesture.center.pageX;
                event.pageY = event.gesture.center.pageY;
                var s = 1, ls;

                xzoom.eventmove = function(element) {
                    element.hammer().on('drag', function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        xzoom.movezoom(event);
                        event.gesture.preventDefault();
                    });
                }

                var counter = 0;
                xzoom.eventclick = function(element) {
                    element.hammer().on('tap', function() {
                        counter++;
                        if (counter == 1) setTimeout(openmagnific,300);
                        event.gesture.preventDefault();
                    });
                }

                function openmagnific() {
                    if (counter == 2) {
                        xzoom.closezoom();
                        var gallery = xzoom.gallery().cgallery;
                        var i, images = new Array();
                        for (i in gallery) {
                            images[i] = {src: gallery[i]};
                        }
                        $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
                    } else {
                        xzoom.closezoom();
                    }
                    counter = 0;
                }
                xzoom.openzoom(event);
            });
        });

        } else {
            //If not touch device

            //Integration with fancybox plugin
            $('#xzoom-fancy').bind('click', function(event) {
                var xzoom = $(this).data('xzoom');
                xzoom.closezoom();
                $.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});
                event.preventDefault();
            });
           
            //Integration with magnific popup plugin
            $('#xzoom-magnific').bind('click', function(event) {
                var xzoom = $(this).data('xzoom');
                xzoom.closezoom();
                var gallery = xzoom.gallery().cgallery;
                var i, images = new Array();
                for (i in gallery) {
                    images[i] = {src: gallery[i]};
                }
                $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
                event.preventDefault();
            });
        }
    });
})(jQuery);
</script>



<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



                  <div class="itemprice"> Rs. {{$product->price}}</div>
                  <div class="itemprice-des">
                     <h4>Description</h4>
                     <p>{{$product->discription}}</p>
                     <!-- <button onclick="showmore()" id="showmorebtn">Show more</button> -->
                  </div>
                  <!-- <hr> -->
                  
               </div>



               <div class="col-sm-5" >
                  <div class="product-details-content-area" data-aos="fade-up"  data-aos-delay="200">

                    @if($product->group == 'Editor') 
                     <div class="row ">
                        <!-- ads image space -->
                        <div class="row">
                            <div class="col pb-3">
                            <img src="{{asset('/')}}image/single.jpeg" class="rounded mx-auto d-block" alt="..." style="height: 250px; width:75%">
            
                        
                            </div>
                        </div>
                        <!-- ads image space -->
                        <div class="col-4 shopprofile">   
                            <a href="/web/saller/{{$product->user_id}}">
                               <img  src="{{asset('/')}}image/shop/{{$product->logo}}" alt="" width="100px" height="100px"  >
                            </a>
                        </div>
                        <div class="col-8">
                           <!-- Start  Product Details Text Area-->
                           <div class="product-details-text">
                                <a href="/web/saller/{{$product->user_id}}"><h4 class="title">{{$product->shopName}}</h4></a>
                              <div>Member since July 2021
                                 Visit My Shop
                              </div>
                              <div>  <i class="fas fa-medal"></i> &nbsp; Top Rated Seller </div>
                           </div>
                           <!-- End  Product Details Text Area-->
                        </div>
                     </div>


                     <div class="row">
                        <div class="col shopphone"><i class="fa fa-phone-square-alt"></i> &nbsp; {{$product->salNumber}}</div>
                     </div>
                     @elseif($product->group == 'WebUser')
                    <div class="row ">
                        <!-- ads image space -->
                        <div class="row">
                            <div class="col pb-3">
                            <img src="{{asset('/')}}image/single.jpeg" class="rounded mx-auto d-block" alt="..." style="height: 250px; width:75%">
            
                        
                            </div>
                        </div>
                        <!-- ads image space -->

                        <div class="image">
                            <img src="{{asset('/')}}image/footer/100.jpg" alt="" width="50%" style="display:block;margin-left: auto;margin-right: auto;width: 50%;"/>
                        </div>
                        
                        <div class="col-8">
                           <!-- Start  Product Details Text Area-->
                           <!-- <div class="product-details-text">
                                <h4 class="title"></h4></a>
                           </div> -->
                           <!-- End  Product Details Text Area-->
                        </div>
                     </div>

                    <div class="row">
                        <div class="col shopphone"><i class="fa fa-phone-square-alt"></i> &nbsp; {{$product->salNumber}}</div>
                     </div>

                    @endif


                     <table style="width: 100%;">
                        <tr>
                           <th class="partsummery">Part Summery</th>
                           <th class="partsummery1">
                              <div class="rate">
                                 What did you think of this item?
                              </div>
                              <div class="rate2">Help us improve seller</div>
                              <div class="product-review">
                                 <span class="review-fill"><i class="fas fa-star"></i></span>
                                 <span class="review-fill"><i class="fas fa-star"></i></span>
                                 <span class="review-fill"><i class="fas fa-star"></i></span>
                                 <span class="review-fill"><i class="fas fa-star"></i></span>
                                 <span class="review-empty"><i class="fas fa-star"></i></span>
                              </div>
                           </th>
                        </tr>
                        <tr>
                           <td>Condition</td>
                           <td>{{$product->condition}}</td>
                        </tr>
                        <tr>
                           <td>For Vehicle Type</td>
                           <td>{{$product->bodyType}}</td>
                        </tr>
                        <tr>
                           <td>Parts or Accessory Type</td>
                           <td>Body Parts</td>
                        </tr>
                        <tr>
                           <td>Vehicle Modal</td>
                           <td>{{$product->sublevtitle}} </td>
                        </tr>
                        <tr>
                           <td>Chassis code</td>
                           <td>{{$product->chassisCode}} </td>
                        </tr>
                        <tr>
                           <td>Part Number</td>
                           <td>{{$product->partNumber}}</td>
                        </tr>
                     </table>
                     <br>
                     <!-- Start  Product Details Social Area-->
                     <!-- <div class="product-details-social">
                        <ul>
                           <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Like</a></li>
                           <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Tweet</a></li>
                           <li><a href="#" class="pinterest"><i class="fab fa-pinterest"></i>Save</a></li>
                           <li><a href="#" class="google-plus"><i class="fab fa-google-plus"></i>Save</a></li>
                           <li><a href="#" class="linkedin"><i class="fab fa-linkedin"></i>Linked</a></li>
                        </ul>
                     </div> -->
                     <!-- End  Product Details Social Area-->
                  </div>
               </div>
               <!-- <div class="col-md-1">
            </div>   -->
               @endforeach

            </div>
            <hr style="width: 2400px;">
            <div class="boostad">
                     <button type="button" class="btn btn-primary" > <i class="fas fa-rocket"  ></i>  Boost this ad</button>
                     <button type="button" class="reportbtn" > <i class="fas fa-ban" style="color: red;"></i> Report this ad</button>
                  </div>
            <hr>
            @foreach($products as $product)
            @if($product->group == 'Editor') 
            <div class="moreads">
               <p style = 'line-height: 20px'>
                  <img class="circular--landscape" src="{{asset('/')}}image/shop/{{$product->logo}}"  style='vertical-align: middle' /> &nbsp; More ads from <a href= "/web/saller/{{$product->user_id}}">  {{$product->shopName}}</a>
               </p>
            </div>
            <div class="mobileshop">
               <div class="row">
                  <div class="col-sm-6 ">
                     <div class="shopname">{{$product->shopName}} <sup > Store No. 1024  </sup></div>
                  </div>
                  <!-- <div class="col-sm-3 followe-p">
                     <button class="followbtn">Follows</button>
                  </div>
                  <div class="col-sm-3">
                     <button class="cpylickbtn">copy link</button>
                  </div> -->
               </div>
               <div class="row">
                  <div class="col toprateseller">
                     <i class="fas fa-medal"></i> &nbsp; Top Rated Seller  98.4% Positive feedback (4201)
                  </div>
                  <div class="col" style="margin-left: 10px;" ><b>214 </b> Followers</div>
               </div>
            </div>
            @endif
            @endforeach
            <hr>


            <div class="row">

            @foreach($sameproducts as $sameproduct)
               <div class="col-sm-4">
                  <div class="row productborder ">
                     <div class="col-4">
                        <a
                           href="/web/shop/product/{{$sameproduct->id}}">
                        <img src="{{asset('/')}}image/ads/{{$sameproduct->image3}}" alt="" class="img-fluid"/></a>
                     </div>
                     <div class="col-8">
                        <h6 class="product-default-link">
                           <a href="/web/shop/product/{{$sameproduct->id}}"
                              >{{$sameproduct->title}}</a
                              >
                        </h6>
                        <div class="product-details-item">{{$sameproduct->condition}}</div>
                        <div class="product-details-item">Posted on {{$sameproduct->created_at}}</div>
                        <div class="product-details-item">{{$sameproduct->address}}</div>
                        <div class="row ">
                           <div class="col-4">
                              <div class="product-details-price">Rs.{{$sameproduct->price}}</div>
                           </div>
                           <div class="col-8">
                              <!-- <div class="Top-Rated-Seller"><i class="fas fa-medal"></i> &nbsp; Top Rated Seller</div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               
               @if($product->group == 'Editor')
                <div class="viewmorebutton">
                    <a href="/web/saller/{{$product->user_id}}">See all ads from this member  &nbsp; <i class="fas fa-chevron-circle-right"></i></a>
                </div>
                @endif
            </div>
         </div>
      </div>
      <!-- End Product Details Section -->
<!-- ...:::: Start Footer Section:::... -->
<footer class="footer-section section-top-gap-100">
        <!-- Start Footer Top Area -->
        <div class="footer-top section-inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-5">
                        <div class="footer-widget footer-widget-contact" data-aos="fade-up"  data-aos-delay="0">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{asset('/')}}assetss/images/logo/1dothalu logo.png" alt=""></a>
                            </div>
                            <div class="footer-contact">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <div class="customer-support">
                                    <div class="customer-support-icon">
                                        <img src="{{asset('/')}}assetss/images/icon/support-icon.png" alt="">
                                    </div>
                                    <div class="customer-support-text">
                                        <span>Customer Support</span>
                                        <a class="customer-support-text-phone" href="tel:0710 45 45 45">0710 45 45 45</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-7">
                        <div class="footer-widget footer-widget-subscribe" data-aos="fade-up"  data-aos-delay="200">
                            <h3 class="footer-widget-title">Subscribe newsletter to get updated</h3>
                            <form action="#" method="post">
                                <div class="footer-subscribe-box default-search-style d-flex">
                                    <input class="default-search-style-input-box border-around border-right-none subscribe-form" type="email" placeholder="Search your parts ..." required>
                                    <button class="default-search-style-input-btn" type="submit">Subscribe</button>
                                </div>
                            </form>
                            <p class="footer-widget-subscribe-note">We’ll never share your email address <br> with a third-party.</p>
                            <ul class="footer-social">
                                <li><a href="" class="facebook"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" class="youtube"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="" class="pinterest"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="footer-widget footer-widget-menu" data-aos="fade-up"  data-aos-delay="600">
                            <h3 class="footer-widget-title">Information</h3>
                            <div class="footer-menu">
                                <ul class="footer-menu-nav">
                                    <li><a href="">Shop </a></li>
                                    <li><a href="{{url('/web/about')}}">About Us</a></li>
                                    <li><a href="{{url('/web/contact')}}">Contact Us</a></li>
                                   
                                </ul>
                                <ul class="footer-menu-nav">
                                    <li><a href="">Legal Notice</a></li>
                                    <li><a href="">Secure payment</a></li>
                                    <li><a href="">Sitemap</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Top Area -->
        <!-- Start Footer Bottom Area -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright-area">
                            <p class="copyright-area-text">Copyright &copy; 2021 <a class="copyright-link" href="https://satasmesrilanka.com/">Satasme</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-payment">
                            <a href=""><img class="img-fluid" src="{{asset('/')}}assetss/images/icon/payment-icon.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Footer Bottom Area -->
    </footer> 
    <!-- ...:::: End Footer Section:::... -->
      <!-- material-scrolltop button -->
      <button class="material-scrolltop" type="button"><i class="fa fa-angle-up fa-3x"></i></button>
      <!-- Start Modal Add cart -->
      <div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col text-end">
                           <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                           </button>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-7">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="modal-add-cart-product-img">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_1.jpg" alt="">
                                 </div>
                              </div>
                              <div class="col-md-8">
                                 <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Added to cart successfully!</div>
                                 <div class="modal-add-cart-product-cart-buttons">
                                    <a href="cart.html">View Cart</a>
                                    <a href="checkout.html">Checkout</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-5 modal-border">
                           <ul class="modal-add-cart-product-shipping-info">
                              <li> <strong><i class="icon-shopping-cart"></i> There Are 5 Items In Your Cart.</strong></li>
                              <li> <strong>TOTAL PRICE: </strong> <span>$187.00</span></li>
                              <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">CONTINUE SHOPPING</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Modal Add cart -->
      <!-- Start Modal Quickview cart -->
      <div class="modal fade" id="modalQuickview" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col text-end">
                           <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                           </button>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="product-details-gallery-area">
                              <div class="product-large-image modal-product-image-large">
                                 <div class="product-image-large-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_1.jpg" alt="">
                                 </div>
                                 <div class="product-image-large-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_2.jpg" alt="">
                                 </div>
                                 <div class="product-image-large-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_3.jpg" alt="">
                                 </div>
                                 <div class="product-image-large-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_4.jpg" alt="">
                                 </div>
                                 <div class="product-image-large-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_5.jpg" alt="">
                                 </div>
                                 <div class="product-image-large-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_6.jpg" alt="">
                                 </div>
                              </div>
                              <div class="product-image-thumb modal-product-image-thumb">
                                 <div class="zoom-active product-image-thumb-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_1.jpg" alt="">
                                 </div>
                                 <div class="product-image-thumb-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_2.jpg" alt="">
                                 </div>
                                 <div class="product-image-thumb-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_3.jpg" alt="">
                                 </div>
                                 <div class="product-image-thumb-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_4.jpg" alt="">
                                 </div>
                                 <div class="product-image-thumb-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_5.jpg" alt="">
                                 </div>
                                 <div class="product-image-thumb-single">
                                    <img class="img-fluid" src="../../../assetss/images/products_images/aments_products_image_6.jpg" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="product-details-content-area">
                              <!-- Start  Product Details Text Area-->
                              <div class="product-details-text">
                                 <h4 class="title">Nonstick Dishwasher PFOA</h4>
                                 <div class="price"><del>$70.00</del>$80.00</div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae</p>
                              </div>
                              <!-- End  Product Details Text Area-->
                              <!-- Start Product Variable Area -->
                              <div class="product-details-variable">
                                 <!-- Product Variable Single Item -->
                                 <div class="variable-single-item">
                                    <span>Color</span>
                                    <div class="product-variable-color">
                                       <label for="modal-product-color-red">
                                       <input name="modal-product-color" id="modal-product-color-red" class="color-select" type="radio" checked>
                                       <span class="product-color-red"></span>
                                       </label>
                                       <label for="modal-product-color-tomato">
                                       <input name="modal-product-color" id="modal-product-color-tomato" class="color-select" type="radio">
                                       <span class="product-color-tomato"></span>
                                       </label>
                                       <label for="modal-product-color-green">
                                       <input name="modal-product-color" id="modal-product-color-green" class="color-select" type="radio">
                                       <span class="product-color-green"></span>
                                       </label>
                                       <label for="modal-product-color-light-green">
                                       <input name="modal-product-color" id="modal-product-color-light-green" class="color-select" type="radio">
                                       <span class="product-color-light-green"></span>
                                       </label>
                                       <label for="modal-product-color-blue">
                                       <input name="modal-product-color" id="modal-product-color-blue" class="color-select" type="radio">
                                       <span class="product-color-blue"></span>
                                       </label>
                                       <label for="modal-product-color-light-blue">
                                       <input name="modal-product-color" id="modal-product-color-light-blue" class="color-select" type="radio">
                                       <span class="product-color-light-blue"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <!-- Product Variable Single Item -->
                                 <div class="variable-single-item ">
                                    <span>Quantity</span>
                                    <div class="product-variable-quantity">
                                       <input min="1" max="100" value="1" type="number">
                                    </div>
                                 </div>
                              </div>
                              <!-- End Product Variable Area -->
                              <!-- Start  Product Details Social Area-->
                              <ul class="modal-product-details-social">
                                 <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                 <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                 <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                 <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                              </ul>
                              <!-- End  Product Details Social Area-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Modal Quickview cart -->
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
      <!-- <script src="../../../assetss/js/vendor.min.js"></script>
         <script src="../../../assetss/js/plugins.min.js"></script> -->
      <!-- Main JS -->
      <script src="../../../assetss/js/main.js"></script>
   </body>
</html>