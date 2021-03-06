@extends('.layout/master')

@section('contant')
     <!--================ Start Header Menu Area =================-->
{{-- @isset($selectCat)
    <h1>{{$selectCat}}</h1>
@endisset --}}
    
        <!-- ================ start banner area ================= -->	
        <section class="blog-banner-area" id="category">
            <div class="container h-100">
                <div class="blog-banner">
                    <div class="text-center">
                        <h1>Shop Category</h1>
                        <nav aria-label="breadcrumb" class="banner-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
                </ol>
              </nav>
                    </div>
                </div>
        </div>
        </section>
        <!-- ================ end banner area ================= -->
    
    
        <!-- ================ category section start ================= -->		  
      <section class="section-margin--small mb-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
              <div class="sidebar-categories">
                <div class="head">Browse Categories</div>
                <ul class="main-categories">
                  <li class="common-filter">
                    <form action="#">
                      <ul>
                        {{-- @dd($categorys); --}}
                        @foreach ($categorys as $item)
                       
                          <li class="filter-list"><input class="pixel-radio" type="radio" id="men" name="brand"><label for="men"><a href="{{route ('selectCat',$item->code)}}">{{$item->name}}</a><span> (10)</span></label></li>
                        @endforeach
                      </ul>
                    </form>
                  </li>
                </ul>
              </div>
              <div class="sidebar-filter">
                <div class="top-filter-head">Product Filters</div>
                <div class="common-filter">
                  <div class="head">Brands</div>
                  <form action="#">
                    <ul>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                    </ul>
                  </form>
                </div>
                <div class="common-filter">
                  <div class="head">Color</div>
                  <form action="#">
                    <ul>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
                          Leather<span>(29)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
                          with red<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                      <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                    </ul>
                  </form>
                </div>
                <div class="common-filter">
                  <div class="head">Price</div>
                  <div class="price-range-area">
                    <div id="price-range"></div>
                    <div class="value-wrapper d-flex">
                      <div class="price">Price:</div>
                      <span>$</span>
                      <div id="lower-value"></div>
                      <div class="to">to</div>
                      <span>$</span>
                      <div id="upper-value"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
              <!-- Start Filter Bar -->
              <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting">
                  <select>
                    <option value="1">Default sorting</option>
                    <option value="1">Default sorting</option>
                    <option value="1">Default sorting</option>
                  </select>
                </div>
                <div class="sorting mr-auto">
                  <select>
                    <option value="1">Show 12</option>
                    <option value="1">Show 12</option>
                    <option value="1">Show 12</option>
                  </select>
                </div>
                <div>
                  <div class="input-group filter-bar-search">
                    <input type="text" placeholder="Search">
                    <div class="input-group-append">
                      <button type="button"><i class="ti-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Filter Bar -->
              <!-- Start Best Seller -->
              <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                  
                  @if (isset($productS))
                   @foreach ($productS as $product)
                      @include('layout/card/card',compact('product'))
                    @endforeach
                  @else
                    @foreach ($productS as $product)
                      @include('layout/card/card',compact('product'))
                    @endforeach
                  @endif
                  
                  
                
                  
                  
                </div>
              </section>
              <!-- End Best Seller -->
            </div>
          </div>
        </div>
      </section>
        <!-- ================ category section end ================= -->		  
    
        <!-- ================ top product area start ================= -->	
        <section class="related-product-area">
            <div class="container">
                <div class="section-intro pb-60px">
            <p>Popular Item in the market</p>
            <h2>Top <span class="section-intro__style">Product</span></h2>
          </div>
                <div class="row mt-30">
                  @for ($k = 0; $k < 4; $k++)
                    <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
                      <div class="single-search-product-wrapper">
                        @for ($i = 0; $i < 3; $i++)
                            @include('layout/card/smallCard')  
                        @endfor                
                      </div>
                    </div>
                  @endfor
                </div>
            </div>
        </section>
        <!-- ================ top product area end ================= -->		
    
        <!-- ================ Subscribe section start ================= -->		  
      <section class="subscribe-position">
        <div class="container">
          <div class="subscribe text-center">
            <h3 class="subscribe__title">Get Update From Anywhere</h3>
            <p>Bearing Void gathering light light his eavening unto dont afraid</p>
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
                <div class="form-group ml-sm-auto">
                  <input class="form-control mb-1" type="email" name="EMAIL" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" >
                  <div class="info"></div>
                </div>
                <button class="button button-subscribe mr-auto mb-1" type="submit">Subscribe Now</button>
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                </div>
    
              </form>
            </div>
            
          </div>
        </div>
      </section>
        <!-- ================ Subscribe section end ================= -->		  
    
    
   
@endsection