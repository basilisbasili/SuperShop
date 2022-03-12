@extends('admin.master')

@section('contant')
        

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Форма
                        @isset($category)
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
            @isset($category)
                action="{{route('categories.update',$category)}}"
            @else
                action="{{route('categories.store')}}"
            @endisset
            >
                @csrf
                @isset($category) 
                    @method('PUT')
                @endisset
                <div class="form-group">
                  <label for="exampleFormControlInput1">Название категории</label>
                  <input type="text" value="@isset($category) {{$category->name}}@endisset" class="form-control" name="name" id="nameCategory" placeholder="Например: Холодильник">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Код категории</label>
                    <input type="text"value="@isset($category) {{$category->code}}@endisset" class="form-control"  name="code" id="codCategory" placeholder="Например: Holod">
                  </div>        
                <div class="form-group">
                  <label for="description">Описание</label>
                  <textarea class="form-control"   name="discription" id="description" rows="3" placeholder="Напишите описание категории">@isset($category) {{$category->discription}}@endisset</textarea>
                </div>
                {{-- <div class="form-group hiddent" >
                    <label for="exampleFormControlInput1">картинка</label> --}}
                    <input type="hidden" class="form-control"  name="img" value="img" id="codCategory">
                  {{-- </div>   --}}
                <button type="submit" class="btn btn-success">@isset ($category) Редактировать @else  Добавить@endisset  категорию</button>
              </form>
            
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->





@endsection