@include('web/include/head1')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      
<style>
  .profileimage{

width: 100px;
height: 100px;
border-radius: 50%;
border-style: solid;
border-color: #FFFFFF;

position: relative;
}


.profileimage img {
height: 100%;
/* width: 100%; */
border-radius: 50%;
}

.profileimage i {
position: absolute;
top: 20px;
right: -7px;
/* border: 1px solid; */
border-radius: 50%;
/* padding: 11px; */
height: 30px;
width: 30px;
display: flex !important;
align-items: center;
justify-content: center;
background-color: rgb(226, 226, 226);
  color: rgb(0, 0, 0);
}

.Pendingtext{
   color:red;
   font-size:11px;
}


.Publishedtext{
   color:green;
   font-size:11px;
}

body{
        overflow-x: hidden;
   }

.form-group{
    padding-bottom: 13px;
}

.view-p{
   padding: 3px;
}

.imgeidt {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: rgb(226, 226, 226);
  color: rgb(0, 0, 0);
  padding: 8px 15px 8px 15px;
  border-radius: 7px;
  z-index:1;
}
  
</style>
   <body>
      <!-- ///////////////////////////////////////////////////////////////////header///////////////////////////////////////// -->
      @include('sweet::alert')
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
                     <h3 class="breadcrumb-title">My Shop</h3>
                     <div class="breadcrumb-nav">
                        <nav aria-label="breadcrumb">
                           <ul>
                              <li><a href="{{url('/')}}">Home</a></li>
                              <li><a href="#">Account</a></li>
                              <li class="active" aria-current="page">
                                 My Shop
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
                  <!-- Start Sidebar Area -->
                 
                     <!-- Logo Header -->
                     <div class="mobilelog">
                        <div class="header-logo">
                           <a href="index.html"><img src="../../../assetss/images/logo/1dothalu logo.png" width="100%" alt=""></a>
                        </div><br>
                     </div>
                    

 

<div class="row">

<div class="col-1"></div>
<div class="col-10">

<div class="createadd">
   <div class=" uploadbtn">
      <button><a href="{{url('/web/post')}}"><i class="fas fa-file-upload"></i></a></button>
   
   <div class="createadd-text">Create New Ad</div>
   <div class="createadd-text-1">Make an ad using
      text or photos to
      promote your business</div>
      </div>
</div>

</div>
<div class="col-1"></div>
</div>
                  


<br>

                   
                  <div class="storedetails">

                  

 @foreach($shop as $list)
 <!-- Modal -->
 <div class="modal fade" id="StoreName" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Edite Store Name</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form action="/shopNameId/{{$list->id}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
         <!-- <input type="hidden" name="id" id="id" value="{{$list->id}}"> -->
            <div class="form-group">
              <label for="exampleInputEmail1">Store Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="shopName" placeholder="Store Name" value="{{$list->shopName}}">
         
            </div>
           
          
         
          
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
       </form>
     </div>
   </div>
 </div>


  <!-- Modal -->



   <!-- Modal -->
 <div class="modal fade" id="StreetAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Edite Street Address </h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form action="/shopAddressId/{{$list->id}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Street </label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Street" value="{{$list->street}}" name="street">
         
            </div>

            <div class="form-group">
               <label for="exampleInputEmail1">city</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter City" value="{{$list->city}}" name="city">  
            </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
       </form>
     </div>
   </div>
 </div>


  <!-- Modal -->


   <!-- Modal -->
 <div class="modal fade" id="PhoneNumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Edite Phone Number</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form action="/shopPhoneId/{{$list->id}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Phone Number 01</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number 01" value="{{$list->pNumber1}}" name="pNumber1">
         
            </div>

            <div class="form-group">
               <label for="exampleInputEmail1">Phone Number 02</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number 01" value="{{$list->pNumber2}}" name="pNumber2">
          
             </div>
          
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
       </form>
     </div>
   </div>
 </div>


  <!-- Modal -->


   <!-- Modal -->
 <!-- <div class="modal fade" id="EmailAddress" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Edite Email Address</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       <form action="/shopEmailId/{{$list->id}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Email Address</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="">
         
            </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
       </form>
     </div>
   </div>
 </div> -->


  <!-- Modal -->


   <!-- Modal -->
 <div class="modal fade" id="Whatsappnumber" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Edite Whatsapp Number</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
       <form action="/shopWhatsappId/{{$list->id}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="form-group">
              <label for="exampleInputEmail1">Whatsapp Number</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Whatsapp Number" value="{{$list->wNumber}}" name="wNumber">
         
            </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-primary">Save changes</button>
       </div>
       </form>
     </div>
   </div>
 </div>


  <!-- Modal -->
@endforeach


                
                     <form>
                     @foreach($shop as $list)
                        <div class="form-group">
                          <label for="exampleInputEmail1">Store Name &nbsp; <i class="far fa-edit fa-sm" data-toggle="modal" data-target="#StoreName" style="color: #3D71EB; cursor: pointer;"></i></label>
                          <div class="form-group-p">
                          <input class="form-control form-control-sm" type="text" placeholder="Store Name" value="{{$list->shopName}}" readonly> 
                        </div>
                    
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Street Address &nbsp; <i class="far fa-edit fa-sm" style="color: #3D71EB; cursor: pointer;" data-toggle="modal" data-target="#StreetAddress"></i></label>
                          <div class="form-group-p">

                              <input class="form-control form-control-sm" type="text" placeholder="Street Address 1" value="{{$list->street}}" readonly>
                              </div>
                          <div class="form-group-p">

                              <input class="form-control form-control-sm" type="text" placeholder="Street Address 2" value="{{$list->city}}" readonly>
                           </div>
                               </div>

                               <div class="form-group">
                                 <label for="exampleInputEmail1">Phone Number &nbsp; <i class="far fa-edit fa-sm" style="color: #3D71EB; cursor: pointer;" data-toggle="modal" data-target="#PhoneNumber"></i></label>
                          <div class="form-group-p">

                                 <input class="form-control form-control-sm" type="text" value="{{$list->pNumber1}}" placeholder="Phone Number 1" readonly>
                                 </div>
                          <div class="form-group-p">

                                 <input class="form-control form-control-sm" type="text" value="{{$list->pNumber2}}" placeholder="Phone Number 2" readonly>
                              </div>
                                  </div>

                                  <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Email Address &nbsp; <i class="far fa-edit fa-sm" style="color: #3D71EB; cursor: pointer;"  data-toggle="modal" data-target="#EmailAddress"></i></label>
                          <div class="form-group-p">

                                    <input class="form-control form-control-sm" type="email" value="" placeholder="Email Address" readonly>
                                 </div>
                                   </div> -->

                                   <div class="form-group">
                                    <label for="exampleInputEmail1">Whatsapp number &nbsp; <i class="far fa-edit fa-sm" style="color: #3D71EB; cursor: pointer;"  data-toggle="modal" data-target="#Whatsappnumber"></i></label>
                          <div class="form-group-p">

                                    <input class="form-control form-control-sm" type="email" placeholder="Whatsapp number" value="{{$list->wNumber}}" readonly>
                          </div>
                                   </div>
                       
                          
                      </form>

                     </div>

<br>
                      <div class="timetable">

                        <table class="table table-bordered mb-20">
                           <tr>
                              <th colspan = "2" >Time Duration (Open Closes)</th>
                           </tr>

                           <tr>
                              <td>Sunday</td>
                              <td style="width:100%;">{{$list->sun}}</td>
                              <!-- <td>00.00pm</td> -->
                           </tr>

                           <tr>
                              <td>Monday</td>
                              <td>{{$list->mon}}</td>
                              
                           </tr>

                           <tr>
                              <td>Tuesday</td>
                              <td>{{$list->tue}}</td>
                              
                           </tr>

                           <tr>
                              <td>Wednesday</td>
                              <td>{{$list->wen}}</td>
                              
                           </tr>

                           <tr>
                              <td>Thursday</td>
                              <td>{{$list->thu}}</td>
                              
                           </tr>

                           <tr>
                              <td>Friday</td>
                              <td>{{$list->fri}}</td>
                              
                           </tr>

                           <tr>
                              <td>Saturday</td>
                              <td>{{$list->sat}}</td>
                              
                           </tr>




                           
                        </table>
                      </div>
                      @endforeach
                      <hr>

                      <h4>Insights</h4>
                      <h6>Last 21 days : Nov 6 - Dec 3</h6>

           


                      <div class="row insights">
                         <div class="col-8 insights-name">

                           People page views
                         </div>
                         <div class="col-4">

                           <div class="row">
                              <div class="col insights-count">1,265</div>
                              <div class="col insights-count-pre">60%</div>
                           </div>
                         </div>
                      </div>
                      <br>

                      <div class="row insights">
                        <div class="col-8 insights-name">

                           People page follow

                        </div>
                        <div class="col-4">

                          <div class="row">
                             <div class="col insights-count">10,565</div>
                             <div class="col insights-count-pre">60%</div>
                          </div>
                        </div>
                     </div>
                     <br>

                     <div class="row insights">
                        <div class="col-8 insights-name">

                           People share & copy ads
                        </div>
                        <div class="col-4">

                          <div class="row">
                             <div class="col insights-count">867</div>
                             <div class="col insights-count-pre">60%</div>
                          </div>
                        </div>
                     </div>
                     <br>

                     <div class="row insights">
                        <div class="col-8 insights-name">

                          People page views
                        </div>
                        <div class="col-4">

                          <div class="row">
                             <div class="col insights-count">241</div>
                             <div class="col insights-count-pre">60%</div>
                          </div>
                        </div>
                     </div>
                      


                     

                    
                     
                  <!-- End Sidebar Area -->
               </div>
               <div class="col-lg-9 " >
                  <!-- Start Shop Product Sorting Section -->



 
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCente12r" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         ...
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="button" class="btn btn-primary">Save changes</button>
       </div>
     </div>
   </div>
 </div>




                  <div>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('/')}}image/shop/{{$list->banner}}" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}image/shop/{{$list->banner2}}" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('/')}}image/shop/{{$list->banner3}}" alt="Third slide">
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
                      <button class="imgeidt" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-camera"></i> &nbsp;Edit</button>
                    </div>
                    
                </div>






<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Shop Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/shopBannerId/{{$list->id}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
          <div class="row">
            <div class="col-4">
                <div class="form-group">
                  <label>Shop Banner 1: 800 x 1200</label>
                  <input type="file" class="file-styled" name="banner" id="imgInp2">
                  <div>Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                  <img alt="" src="{{asset('/')}}image/shop/{{$list->banner}}" id="blah2" width="140" height="92">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                  <label>Shop Banner 2: 800 x 1200</label>
                  <input type="file" class="file-styled" name="banner2" id="imgInp3">
                  <div>Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                  <img alt="" src="{{asset('/')}}image/shop/{{$list->banner2}}" id="blah3" width="140" height="92">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                  <label>Shop Banner 3: 800 x 1200</label>
                  <input type="file" class="file-styled" name="banner3" id="imgInp4">
                  <div>Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                  <img alt="" src="{{asset('/')}}image/shop/{{$list->banner3}}" id="blah4" width="140" height="92">
                </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


                  <!-- End Section Content -->
                  <div class="mobileuseradmin">
                     <div class="row" style="padding-top: 15px;">
                        <div class="col-4">
                        <!-- <img  src="../../../assetss/images/products_images/aments_products_image_6.jpg" alt="" width="100px" height="100px"  > -->
                        <img  src="{{asset('/')}}image/shop/{{$list->logo}}" alt="" width="100px" height="100px">
                        
                        </div>
                        <div class="col-8"> <!-- Start  Product Details Text Area-->
                           <div class="product-details-text">
                              <h4 class="title">{{$list->shopName}}</h4>
                              <div>Member since July 2021
                                 Visit My Shop
                              </div>
                              <div>  <i class="fas fa-medal"></i> &nbsp; Top Rated Seller </div>
                           </div>
                           <!-- End  Product Details Text Area--></div>
                     </div>
                  
                  </div>
                  
                             
                                    
                  <div class="webuseradmin">
                  
                  <div class="row " style="padding-top: 15px;">
                     <div class="col-8">   
                        <div class="row">
                  
                       
                        <div class="col-sm-2 shopprofile">   
                        <!-- <img  src="../../../assetss/images/products_images/aments_products_image_6.jpg" alt="" width="100px" height="100px"  > -->
                        <!-- <img  src="{{asset('/')}}image/shop/{{$list->logo}}" alt="" width="100px" height="100px"> -->
                        <div class="profileimage">
                        <img src="{{asset('/')}}image/shop/{{$list->logo}}" class="main-profile-img" />
                        <button data-toggle="modal" data-target="#logoID"><i class="fas fa-camera"></i></button>
                        </div>
                     </div>
                     <div class="col-sm-8">
                        <!-- Start  Product Details Text Area-->
                        <div class="product-details-text" style="margin-top:10px">
                           <h4 class="title">{{$list->shopName}}</h4>
                           <div>We Make Your Life Easier
                           </div>
                         
                        </div>
                        <!-- End  Product Details Text Area-->
                     </div>
                  
                  </div>
                  
                  </div>
                  <div class="col-4 shopprofile-text">
                     <div class="shopprofile-text1">  <i class="fas fa-medal"></i> &nbsp; Top Rated Seller </div>
                     <div class="shopprofile-text2" >Member since July 2021
                        Visit My Shop
                     </div>
                  </div>
                  </div>
                  
                  </div>

@foreach($shop as $list)
<!-- Modal -->
<div class="modal fade" id="logoID" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Shop Logo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/shopLogoId/{{$list->id}}" method="POST" enctype="multipart/form-data">
         {{ csrf_field() }}
        <div class="row">
          <div class="col-4">
          
          </div>
          <div class="col-4">
              <div class="form-group">
                <label>Shop Logo: 800 x 800</label>
                <input type="file" class="form-control" name="logo" id="imgInp1">
                <div>Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                <img alt="" src="{{asset('/')}}image/shop/{{$list->logo}}" id="blah1" width="92" height="92">
              </div>
          </div>
          <div class="col-4">
              
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach

<script>
imgInp1.onchange = evt => {
	const [file] = imgInp1.files
	if (file) {
		blah1.src = URL.createObjectURL(file)
	}
}
imgInp2.onchange = evt => {
	const [file] = imgInp2.files
	if (file) {
		blah2.src = URL.createObjectURL(file)
	}
}

imgInp3.onchange = evt => {
	const [file] = imgInp3.files
	if (file) {
		blah3.src = URL.createObjectURL(file)
	}
}	

imgInp4.onchange = evt => {
	const [file] = imgInp4.files
	if (file) {
		blah4.src = URL.createObjectURL(file)
	}
}
</script>


                  
                  <div class="shopmore">
                  <p>{{$list->about}} Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

               </div>
                  <div class="shopmoremobile">
                     <p>{{$list->about}} Brand new parts, Quality Products, Many More parts available,
                        Best price and Delivery can be arrange Inland wide, VISA/Master Applicable,
                        Call Us For More Information<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
   
   <button onclick="showmore()" id="showmorebtn">Show more</button>
                  </div>
                  

                  <div class="row shop-search-bar">
                     <div class="col-4"></div>
                     <div class="col-8">
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
                     <div class="col-12 col-sm-6 pb-5">
                        <div class="row productborder ">
 
                           <div class="col-4">
               
                               <a
                               href="/web/shop/product/{{$list->id}}">
                           
                            <img src="{{asset('/')}}image/ads/{{$list->image3}}" alt="" class="img-fluid"/></a>
                            <br><br>
                            <!-- <span class="Pendingtext">Pending</span> -->
                            <span class="Publishedtext">Published</span>
                            
                           </div>
               
                           <div class="col-8">
                               
                           
                               <h6 class="product-default-link">
                                   <a href="/web/shop/product/{{$list->id}}"
                                     >{{$list->title}}</a
                                   >
                                 </h6>

                                 <div class="row view-p">
                                    <div class="col">
                                       <div class="product-review">
                                          <span class="review-fill"><i class="fa fa-star"></i></span>
                                          <span class="review-fill"><i class="fa fa-star"></i></span>
                                          <span class="review-fill"><i class="fa fa-star"></i></span>
                                          <span class="review-fill"><i class="fa fa-star"></i></span>
                                          <span class="review-empty"><i class="fa fa-star"></i></span>
      
                                         
                                      </div>


                                    </div>
                                    <div class="col"><a href="/web/shop/product/{{$list->id}}"><button class="Viewbtn" style="width: 100%;">View Ad</button></a></div>
                                 </div>

                               <div class="row view-p">
                                  <div class="col product-details-item">13 days ago</div>
                                  <div class="col"> <button class="Hidebtn" style="width: 100%;">Hide Ad</button></div>
                               </div>

                               <div class="row view-p">
                                 <div class="col product-details-item"></div>
                                 <div class="col"> <a href="/editwebpost/{{$list->id}}/{{$list->category}}"><button class="Editbtn" style="width: 100%;" >Edit Ad</button></a></div>
                              </div>
                              

                           
                            
                              
                              

                               
                               <div class="row view-p">
                                 <div class="col"><button class="Editbtn10" style="width: 100%; " ><i class="fas fa-rocket"  ></i> Boost this ad</button></div>
                                 <div class="col"><button class="Deletebtn" style="width: 100%;">Delete Ad</button>
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
                           <li><a href="" class="facebook"><i class="fab fa-facebook" style="line-height:40px"></i></a></li>
                           <li><a href="" class="twitter"><i class="fab fa-twitter" style="line-height:40px"></i></a></li>
                           <li><a href="" class="youtube"><i class="fab fa-youtube" style="line-height:40px"></i></a></li>
                           <li><a href="" class="pinterest"><i class="fab fa-pinterest" style="line-height:40px"></i></a></li>
                           <li><a href="" class="instagram"><i class="fab fa-instagram" style="line-height:40px"></i></a></li>
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