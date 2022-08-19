<!DOCTYPE html>
<html lang="en">
@include('web/include/head1')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

   <body>
      <!-- ///////////////////////////////////////////////////////////////////header///////////////////////////////////////// -->
      @include('web/include/header2')
      <!-- ///////////////////////////////////////////////////////////////////header///////////////////////////////////////// -->
      <!-- ...:::: Start Breadcrumb Section:::... -->
      <div class="breadcrumb-section">
         <div class="breadcrumb-wrapper">
            <div class="container">
               <div class="row">
                  <div
                     class="
                     col-12
                     d-flex
                     justify-content-between justify-content-md-between
                     align-items-center
                     flex-md-row flex-column
                     "
                     >
                     <h3 class="breadcrumb-title">Shop Page</h3>
                     <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                           <ul>
                              <li><a href="{{url('/')}}">Home</a></li>
                              <li><a href="#">Shop</a></li>
                              <li class="active" aria-current="page">
                              Shop Page
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ...:::: End Breadcrumb Section:::... -->
      <!-- ...:::: Start Shop Section:::... -->
      <div class="shop-section">
         <div class="maincontainer">
            <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3  ">
              <div class="row pb-5">
                <img src="{{asset('/')}}image/single.jpeg" class="rounded mx-auto d-block" alt="..." style="height: 200px; width:100%">
                <div class="col"></div>
              </div>
                  <!-- Start Sidebar Area -->
                  <!-- Logo Header -->
                  <!-- <div class="mobilelog">
                     <div class="header-logo">
                        <a href="index.html"><img src="assets/images/logo/1dothalu logo.png" width="100%" alt=""></a>
                     </div>
                     <br>
                  </div> -->
                  <div class="row">

                     <div class="col">
                        <span class="storedetails-text" ><b>About</b></span>
                        <div class="mapouter">
                          <div class="gmap_canvas">
                            <iframe width="100%" height="308" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                            <a href="https://putlocker-is.org"></a>
                            <br>
                            <style>
                            .mapouter{position:relative;text-align:right;height:200px;width:100%;border-radius: 8px;}
                            </style>
                            <a href="https://www.embedgooglemap.net">get google maps embed code</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:100%;border-radius: 8px;}</style>
                          </div>
                        </div>

                     </div>
                    
                  </div>
                  <br>
                  @foreach($shop as $shops)
                  <div class="storedetails">
                   <table>

                     <tr>
                        <td class="storedetails-text"><i class="fas fa-exclamation-circle" style="font-size: 1.5em;"></i>&nbsp; {{$shops->about}}</td>
                      </tr>

                      <tr>
                        <td class="storedetails-text" ><i class="fas fa-user-plus" style="font-size: 1.5em;"></i>&nbsp; 214 people Follow your Customer</td>
                      </tr><tr>
                        <td class="storedetails-text" ><i class="fas fa-copy" style="font-size: 1.5em;"></i>&nbsp; 1,256 people Copy link this</td>
                      </tr><tr>
                        <td class="storedetails-text" ><i class="fas fa-mobile-alt" style="font-size: 1.5em;"></i>&nbsp; {{$shops->pNumber1}}</td>
                      </tr><tr>
                        <td class="storedetails-text" ><i class="fas fa-phone-square-alt" style="font-size: 1.5em;"></i>&nbsp; {{$shops->pNumber2}}</td>
                      </tr><tr>
                        <td class="storedetails-text" ><i class="fab fa-whatsapp-square" style="font-size: 1.5em;"></i>&nbsp; {{$shops->wNumber}}</td>
                      </tr><tr>
                        <td class="storedetails-text" ><i class="fas fa-envelope" style="font-size: 1.5em;"></i>&nbsp; {{$shops->name}}</td>
                      </tr>
                      
                     
                      
                   </table>
                  </div>
                  <br>
                  <div class="timetable">
                     <table class="table table-bordered mb-20">
                        <tr>
                           <th colspan = "2" >Time Duration (Open Closes)</th>
                        </tr>
                        <tr>
                           <td>Sunday</td>
                           <td>{{$shops->sun}}</td>
                           
                        </tr>
                        <tr>
                           <td>Monday</td>
                           <td>{{$shops->mon}}</td>
              
                        </tr>
                        <tr>
                           <td>Tuesday</td>
                           <td>{{$shops->tue}}</td>
                           
                        </tr>
                        <tr>
                           <td>Wednesday</td>
                           <td>{{$shops->wen}}</td>
                           
                        </tr>
                        <tr>
                           <td>Thursday</td>
                           <td>{{$shops->thu}}</td>
                           
                        </tr>
                        <tr>
                           <td>Friday</td>
                           <td>{{$shops->fri}}</td>
                           
                        </tr>
                        <tr>
                           <td>Saturday</td>
                           <td>{{$shops->sat}}</td>
                           
                        </tr>
                     </table>
                  </div>
                  <hr>
                  
                  <!-- <div class="row"> 
                    <div class="product-details-social">
                     <ul>
                         <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Like</a></li>
                         <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Tweet</a></li>
                         <li><a href="#" class="pinterest"><i class="fab fa-pinterest"></i>Save</a></li>
                         <li><a href="#" class="google-plus"><i class="fab fa-google-plus"></i>Save</a></li>
                         <li><a href="#" class="linkedin"><i class="fab fa-linkedin"></i>Linked</a></li>
                         
                     </ul>
                    </div> 
                  </div> -->
                  <br>

                  <div class="row">
                     <div class="col related-Sellers-box">
                        <table>
                           <tr >
                              <td class="related-Sellers">Related Sellers</td>
                              <td class="related-Sellers-see">See all
                              </td>
                             
                           </tr>
                         

                           <tr class="related-Sellers-p">
                              <td>
                                 <div class="row">
                                    <div class="col related-Sellers-name">Ajantha auto parts</div>
                                 </div>
                                 <div class="row">
                                    <div class="col ">kandy</div>
                                 </div>
                                 
                                  </td>
                              
                        <td><button class="followbtn">Follow</button></td>
                           </tr>

                           <tr>
                              <td>
                                 <div class="row">
                                    <div class="col related-Sellers-name">Ajantha auto parts</div>
                                 </div>
                                 <div class="row">
                                    <div class="col">kandy</div>
                                 </div>
                                 
                                  </td>
                              
                        <td><button class="followbtn">Follow</button></td>
                           </tr>

                           <tr>
                              <td>
                                 <div class="row">
                                    <div class="col related-Sellers-name">Ajantha auto parts</div>
                                 </div>
                                 <div class="row">
                                    <div class="col">kandy</div>
                                 </div>
                                 
                                  </td>
                              
                        <td><button class="followbtn">Follow</button></td>
                           </tr>

                           <tr>
                              <td>
                                 <div class="row">
                                    <div class="col related-Sellers-name">Ajantha auto parts</div>
                                 </div>
                                 <div class="row">
                                    <div class="col">kandy</div>
                                 </div>
                                 
                                  </td>
                              
                        <td><button class="followbtn">Follow</button></td>
                           </tr>

                           <tr>
                              <td>
                                 <div class="row">
                                    <div class="col related-Sellers-name">Ajantha auto parts</div>
                                 </div>
                                 <div class="row">
                                    <div class="col">kandy</div>
                                 </div>
                                 
                                  </td>
                              
                        <td><button class="followbtn">Follow</button></td>
                           </tr>

                           <tr>
                              <td>
                                 <div class="row">
                                    <div class="col related-Sellers-name">Ajantha auto parts</div>
                                 </div>
                                 <div class="row">
                                    <div class="col">kandy</div>
                                 </div>
                                 
                                  </td>
                              
                        <td><button class="followbtn">Follow</button></td>
                           </tr>

                           

                        

                        

                        


                        
                        </table>
                     </div>
                  </div>
              
               </div>
               <div class="col-lg-9 " >
   <!-- Start Shop Product Sorting Section -->
   <div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="{{asset('/')}}image/shop/{{$shops->banner}}" alt="First slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="{{asset('/')}}image/shop/{{$shops->banner}}" alt="Second slide">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="{{asset('/')}}image/shop/{{$shops->banner}}" alt="Third slide">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
   </div>
   <!-- End Section Content -->
   <div class="mobileuseradmin">
      <div class="row" style="padding-top: 15px;">
         <div class="col-4"><img  src="{{asset('/')}}image/shop/{{$shops->logo}}" alt="" width="100px" height="100px"  ></div>
         <div class="col-8">
            <!-- Start  Product Details Text Area-->
            <div class="product-details-text">
               <h4 class="title">{{$shops->shopName}}</h4>
               <div>Member since July 2021
                  Visit My Shop
               </div>
               <div>  <i class="fas fa-medal"></i> &nbsp; Top Rated Seller </div>
            </div>
            <!-- End  Product Details Text Area-->
         </div>
      </div>
   </div>
   <div class="webuseradmin">
      <div class="row " style="padding-top: 15px;">
         <div class="col-8">
            <div class="row">
               <div class="col-sm-2 shopprofile">   
                  <img  src="{{asset('/')}}image/shop/{{$shops->logo}}" alt="" width="100px" height="100px"  >
               </div>
               <div class="col-sm-8">
                  <!-- Start  Product Details Text Area-->
                  <div class="product-details-text">
                     <h4 class="title">{{$shops->shopName}}</h4>
                     <div>Member since July 2021
                        Visit My Shop
                     </div>
                     <div>  <i class="fas fa-medal"></i> &nbsp; Top Rated Seller </div>
                  </div>
                  <!-- End  Product Details Text Area-->
                  @endforeach
               </div>
            </div>
         </div>
         <div class="col-sm-2 followe-p"><button class="followbtn">Follow</button></div>
         <div class="col-sm-2"><button class="cpylickbtn"><i class="fal fa-copy"></i> &nbsp;  Copy link</button></div>
      </div>
   </div>
   <div class="shopmore">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
   </div>
   <div class="shopmoremobile">
      <p>Brand new parts, Quality Products, Many More parts available,
         Best price and Delivery can be arrange Inland wide, VISA/Master Applicable,
         Call Us For More Information<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span>
      </p>
      <button onclick="showmore()" id="showmorebtn">Show more</button>
   </div>
   <div class="row shop-search-bar">
      <div class="col-sm-4">
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
      </div>
      <div class="col-sm-4 followe-p"><button class="followbtn" style="background-color: yellow; color: black;"><i class="fas fa-ban" style="color: red;"></i> &nbsp; Report this seller</button></div>
      <div class="col-sm-4">
         <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
               aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
            </span>
         </div>
      </div>
   </div>
   <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
   <div class="row">
   @foreach($data as $list)
      <div class="col-12 col-sm-6">
         <div class="row productborder ">
            <div class="col-4">
               <a
                  href="/web/shop/product/{{$list->id}}">
               <img src="{{asset('/')}}image/ads/{{$list->image3}}" alt="" class="img-fluid"/></a>
            </div>
            <div class="col-8">
               <h6 class="product-default-link">
                  <a href="/web/shop/product/{{$list->id}}"
                     >{{$list->title}}</a
                     >
               </h6>
               <div class="product-details-item">{{$list->condition}}</div>
               <div class="product-details-item">Posted on {{$list->created_at}}, {{$list->address}}</div>
               <div class="row ">
                  <div class="col-6">
                     <div class="product-review">
                        <span class="review-fill"><i class="fas fa-star"></i></span>
                        <span class="review-fill"><i class="fas fa-star"></i></span>
                        <span class="review-fill"><i class="fas fa-star"></i></span>
                        <span class="review-fill"><i class="fas fa-star"></i></span>
                        <span class="review-empty"><i class="fas fa-star"></i></span>
                     </div>
                  </div>
                  <div class="col-6">
                     <div class="reportbtn2"><button type="button" class="reportbtn" style="font-size: 11px;"> <i class="fas fa-ban" style="color: red;"></i> Report this ad</button></div>
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
                              .w-5{
                              display:none;
                              }
                              .text-sm{
                              margin-top:15px;
                              }
                           </style>
      

      <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
   </div>
   
   <!-- End Pagination -->
</div>
            


            <!-- End Shop Product Sorting Section  -->
         </div>
      </div>
      </div>
      <!-- ...:::: End Shop Section:::... -->
      <!-- ...:::: Start Footer Section:::... -->
      <footer class="footer-section section-top-gap-100">
         <!-- Start Footer Top Area -->
         <div class="footer-top section-inner-bg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-5">
                     <div class="footer-widget footer-widget-contact" data-aos="fade-up"  data-aos-delay="0">
                        <div class="footer-logo">
                           <a href="index.html"><img src="../../../assetss/images/logo/1dothalu logo.png" alt=""></a>
                        </div>
                        <div class="footer-contact">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                           <div class="customer-support">
                              <div class="customer-support-icon">
                                 <img src="../../../assetss/images/icon/support-icon.png" alt="">
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
                              <input class="default-search-style-input-box border-around border-right-none subscribe-form" type="email" placeholder="Search entire store here ..." required>
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
         </div>
         <!-- End Footer Top Area -->
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
                        <a href=""><img class="img-fluid" src="../../../assetss/images/icon/payment-icon.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Footer Bottom Area -->
      </footer>
      <!-- ...:::: End Footer Section:::... -->

      
      <!-- material-scrolltop button -->
      <button class="material-scrolltop" type="button"><i class="fa fa-angle-up fa-3x"></i></button>
      <!-- ::::::::::::::All JS Files here :::::::::::::: -->
      <!-- Global Vendor, plugins JS -->
      <script src="../../../assetss/js/vendor/modernizr-3.11.2.min.js"></script>
      <script src="../../../assetss/js/vendor/jquery-3.6.0.min.js"></script>
      <script src="../../../assetss/js/vendor/jquery-migrate-3.3.2.min.js"></script>
      <script src="../../../assetss/js/vendor/bootstrap.bundle.min.js"></script>
      <script src="../../../assetss/js/vendor/jquery-ui.min.js"></script>
      <!--Plugins JS-->
      <script src="../../../assetss/js/plugins/slick.min.js"></script>
      <script src="../../../assetss/js/plugins/material-scrolltop.js"></script>
      <script src="../../../assetss/js/plugins/jquery.nice-select.min.js"></script>
      <script src="../../../assetss/js/plugins/jquery.zoom.min.js"></script>
      <script src="../../../assetss/js/plugins/venobox.min.js"></script>
      <script src="../../../assetss/js/plugins/aos.min.js"></script>
      <script src="../../../assetss/js/plugins/ajax-mail.js"></script>
      <!-- Use the minified version files listed below for better performance and remove the files listed above -->
      <!-- <script src="../../../assetss/js/vendor.min.js"></script>
         <script src="../../../assetss/js/plugins.min.js"></script> -->
      <!-- Main JS -->
      <script src="../../../assetss/js/main.js"></script>
   </body>
</html>