@if (Route::current()->getName()=='category')
    <div class="col-md-6 col-lg-4">
@else
<div class="col-md-6 col-lg-4 col-xl-3">
@endif
    <div class="card text-center card-product">
      <div class="card-product__img">
        <img class="card-img" src="img/product/product1.png" alt="">
        <ul class="card-product__imgOverlay">
            <form action="{{route('detal',$product->id)}}" method="get">
              <li><button type="submit"><i class="ti-search"></i></button></li>
              @csrf
            </form>
            <form action="{{route('basketAdd',$product->id)}}" method="post">
              <li><button type="submit"><i class="ti-shopping-cart"></i></button></li>
              @csrf
            </form>
            <form action="{{route('basketAdd',$product->id)}}" method="post">
              <li><button><i class="ti-heart"></i></button></li>
              @csrf
            </form>
            
        </ul>
      </div>
      <div class="card-body">
        <p>{{$product->category->name}}</p>
        <h4 class="card-product__title"><a href="#">{{$product->name}}</a></h4>
        <p class="card-product__price">{{$product->price}} Руб</p>
      </div>
    </div>
</div>
