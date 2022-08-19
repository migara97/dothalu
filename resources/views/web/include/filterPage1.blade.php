
<!-- Start Tab Wrapper -->
<div class="data sort-product-tab-wrapper">
              <div class="container">
                <div class="row"  id="product">
                  <div class="col-12">
                    <div class="tab-content tab-animate-zoom">
                      <!-- Start Grid View Product -->
                      <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                        <div class="row">



                        @foreach($data as $list)
                          <div class="col-xl-4 col-sm-6 col-12">
                            <!-- Start Product Defautlt Single -->
                            <div
                              class="product-default-single border-around"
                              data-aos="fade-up"
                              data-aos-delay="0"
                            >
                              <div class="product-img-warp">
                                <a
                                  href="/web/shop/product/{{$list->id}}"
                                  class="product-default-img-link"
                                >
                                  <img src="{{asset('/')}}image/ads/{{$list->image3}}" alt="" class="product-default-img img-fluid"/>
                                </a>

                             

                              </div>
                              
                              <div class="product-default-content">
                                <h6 class="product-default-link">
                                  <a href="/web/shop/product/{{$list->id}}">{{$list->title}} & Barnd New</a>
                                </h6>
                                <span class="product-default-price">
                                <!-- <del class="product-default-price-off">$30.12</del> -->
                                Rs.{{$list->price}}.00</span>
                              </div>
                            </div>
                            <!-- End Product Defautlt Single -->
                          </div>
                          @endforeach
                    






                        </div>
                      </div>
                      <!-- End Grid View Product -->



                   
                      <!-- Start List View Product -->
                      <div class="tab-pane sort-layout-single" id="layout-list">
                        <div class="row">
                          <div class="col-12">
                          @foreach($data as $list)
                            <!-- Start Product Defautlt Single -->
                            <div class="product-list-single border-around">
                              <a
                                href="/web/shop/product/{{$list->id}}"
                                class="product-list-img-link"
                              >
                                <img
                                  src="{{asset('/')}}image/ads/{{$list->image3}}"
                                  alt=""
                                  class="img-fluid"
                                />
                              </a>
                              <div class="product-list-content">
                                <h5 class="product-list-link">
                                  <a href="/web/shop/product/{{$list->id}}">{{$list->title}} & Barnd New</a>
                                </h5>
                                <span class="product-list-price">
                                  <!-- <del class="product-list-price-off">$30.12</del> -->
                                  Rs.{{$list->price}}.00</span>
                                <p>
                                  {{$list->discription}}
                                </p>
                            
                                
                              </div>
                            </div>
                            @endforeach
                            <!-- End Product Defautlt Single -->
                          </div>


                          
                          
                          
                          
                        </div>
                      </div>
                      <!-- End List View Product -->
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
                                  
                    </div>
                  </div>


                </div>
              </div>
            </div>
            <!-- End Tab Wrapper -->
       
                  
        