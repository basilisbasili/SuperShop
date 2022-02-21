@extends('layout/master')
@section('contant')
    

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shopping Cart</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Корзина</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
          <div class="cart_inner">
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Товар</th>
                              <th scope="col">Цена</th>
                              <th scope="col">Количество</th>
                              <th scope="col">Итого</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($order->products as $item)
                          <tr>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                          <img src="img/cart/cart1.png" alt="">
                                      </div>
                                      <div class="media-body">
                                          <p><a href="#">{{$item->name}}</a></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                <p> {{$item->price}} Руб </p>
                              </td>
                              <td>
                               
                                    
                               
                                  <div class="product_count">
                                      <input type="text" name="qty" id="sst" maxlength="12" value="{{$item->count}}" title="Quantity:"
                                          class="input-text qty">
                                          {{-- Хорошие кнопки но надо настраивать --}}
                                      {{-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                          class="increase items-count " type="button"><i class="lnr lnr-chevron-up btn-primary"></i></button>
                                      <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                          class="reduced items-count" type="button"><i class="lnr lnr-chevron-down btn-primary"></i></button> --}}
                                          
                                  </div>
                                  <form action="{{route('basketRemove',$item->id)}}" method="post"> <button class='submit btn-warning'>-</button>@csrf</form>
                                  <form action="{{route('basketAdd',$item->id)}}" method="post">
                                        <button class='submit btn-primary'>+</button>
                                        @csrf
                                  </form>
                                    
                                    
                              </td>
                              <td>
                                  <h5> {{$item->price}} Руб </h5>
                              </td>
                          </tr>
                          @endforeach
                          <tr class="bottom_button">
                              <td>
                                  <a class="button" href="#">Update Cart</a>
                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="cupon_text d-flex align-items-center">
                                      <input type="text" placeholder="Coupon Code">
                                      <a class="primary-btn" href="#">Apply</a>
                                      <a class="button" href="#">Have a Coupon?</a>
                                  </div>
                              </td>
                          </tr>
              
                          <tr class="shipping_area">
                              <td class="d-none d-md-block">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <h5>Shipping</h5>
                              </td>
                              <td>
                                  <div class="shipping_box">
                                      <ul class="list">
                                          <li><a href="#">Flat Rate: $5.00</a></li>
                                          <li><a href="#">Free Shipping</a></li>
                                          <li><a href="#">Flat Rate: $10.00</a></li>
                                          <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                                      </ul>
                                      <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                                      <select class="shipping_select">
                                          <option value="1">Bangladesh</option>
                                          <option value="2">India</option>
                                          <option value="4">Pakistan</option>
                                      </select>
                                      <select class="shipping_select">
                                          <option value="1">Select a State</option>
                                          <option value="2">Select a State</option>
                                          <option value="4">Select a State</option>
                                      </select>
                                      <input type="text" placeholder="Postcode/Zipcode">
                                      <a class="gray_btn" href="#">Update Details</a>
                                  </div>
                              </td>
                          </tr>
                          <tr class="out_button_area">
                              <td class="d-none-l">

                              </td>
                              <td class="">

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <a class="gray_btn" href="#">Continue Shopping</a>
                                      <a class="primary-btn ml-2" href="#">Proceed to checkout</a>
                                  </div>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->





@endsection