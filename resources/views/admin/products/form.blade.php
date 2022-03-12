@extends('admin.master')

@section('contant')
        

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="product">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Форма
                        @isset($product)
                            Редактирования
                        @else
                            Создания
                        @endisset
                    </h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">

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
            <form method="POST" 
            @isset($product)
                action="{{route('products.update',$product)}}"
            @else
                action="{{route('products.store')}}"
            @endisset
            >
                @csrf
                @isset($product) 
                    @method('PUT')
                @endisset
                <div class="form-group">
                  <label for="exampleFormControlInput1">Название товара</label>
                  <input type="text" value="@isset($product) {{$product->name}}@endisset" class="form-control" name="name" id="nameproduct" placeholder="Например: Холодильник">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">категория</label>
                    <div class="input-group mb-3">
                      <select class="custom-select" name="category_id" id="inputGroupSelect02">
                        @isset($product)
                            <option value="{{$product->category->id}}" selected="selected">
                              {{$product->category->name}}
                            </option>
                          @foreach ($categories as $category)
                            @if (!($product->category->name==$category->name))
                              <option value="{{$category->id}}">{{$category->name}}</option>   
                            @endif
                          @endforeach
                         @else
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>  
                            @endforeach
                        @endisset
                        
                        
                      </select>
                    </div>
                  </div>        
                  
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Цена</label>
                    <input type="number" value=@isset($product) {{$product->price}}@endisset class="form-control" name="price" id="nameproduct" placeholder="Например: 100">
                  </div>

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Количество товара</label>
                    <input type="number" value=@isset($product) {{$product->count}}@else {{1}} @endisset class="form-control" name="count" id="nameproduct" >
                  </div>

                <div class="form-group">
                  <label for="description">Описание товара</label>
                  <textarea class="form-control"   name="description" id="description" rows="3" placeholder="Напишите описание категории">@isset($product) {{$product->description}}@endisset</textarea>
                </div>
                {{-- <div class="form-group hiddent" >
                    <label for="exampleFormControlInput1">картинка</label> --}}
                    <input type="hidden" class="form-control"  name="img" value="img" id="codproduct">
                  {{-- </div>   --}}
                <button type="submit" class="btn btn-success">@isset ($product) Редактировать @else  Добавить@endisset  товар</button>
              </form>
            
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->





@endsection