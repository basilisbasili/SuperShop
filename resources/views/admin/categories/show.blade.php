@extends('admin.master')

@section('contant')
    




  <!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="img/category/s-p1.jpg" alt="">
						</div>
						
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3>{{$category->name}}</h3>
						
					
						<p>{{$category->code}}</p>
						<div class="product_count">
                            <p>Количество товаров : {{$category->products->count()}}</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
            <p>Описание:</p>
		{{$category->discription}}
		</div>
	</section>
	<!--================End Product Description Area =================-->

	
@endsection