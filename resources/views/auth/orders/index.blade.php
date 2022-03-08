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
                              <th scope="col">Имя</th>
                              <th scope="col">Телефон</th>
                              <th scope="col">Время</th>
                        
                              <th scope="col">Итого</th>
                          </tr>
                      </thead>
                      <tbody>
                          @isset($orders)
                              
                          
                        @foreach ($orders as $item)
                          <tr>
                              <td>
                                  <div class="media">
                                     
                                      <div class="media-body">
                                          <p><a href="#">{{$item->name}}</a></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                <p> {{$item->phone}} </p>
                              </td>
                              <td>
                                <p> {{$item->created_at->format('H:i:s d/m/Y')}} </p>
                              </td>
                              <td>
                               
                                    
                               
                                  <div class="product_count">

                                    <p> {{$item->calculate()}} руб
                                     </p>
                                  </div>

                                    
                                    
                              </td>
                              <td>
                                  {{-- <h5> {{$item->getPrice()}} Руб </h5> --}}
                              </td>
                          </tr>
                          @endforeach
                          {{-- Итого {{$order->calculate()}} --}}
                          @endisset

              

                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->





@endsection
