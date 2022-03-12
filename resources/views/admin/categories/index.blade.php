@extends('admin.master')

@section('contant')
        

	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Таблица заказов</h1>
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
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Код</th>
                              <th scope="col">Имя</th>
                        
                              <th scope="col" colspan="3" class="text-center">Действия</th>
                          </tr>
                      </thead>
                      <tbody>
                          @isset($categories)
                              
                          
                        @foreach ($categories as $category)
                          <tr>
                              <td>
                                  <div class="media">
                                     
                                      <div class="media-body">
                                          <p><a href="#">{{$category->id}}</a></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                <p> {{$category->code}} </p>
                              </td>
                              <td>
                                <p> {{$category->name}} </p>
                              </td>
                              <td>
                                <a href="{{ route('categories.show',$category)}}" type="button" class="btn btn-success">Открыть</a>
                               {{-- <form action="" method="post"><button type="submit" class="btn btn-success">Открыть</button></form> --}}
                              </td>
                              <td>
                                <a href="{{ route('categories.edit',$category)}}" type="button" class="btn btn-warning">редактировать</a>


                               </td>  
                               <td>
                                <form action="{{route('categories.destroy',$category)}}" method="post"> @method("DELETE") @csrf <button type="submit"  class="btn btn-danger">Удалить</button></form>
                               </td>
                          </tr>
                          @endforeach
                            
                          
                          @endisset

              

                          </tr>
                      </tbody>
                  </table>
                  <a href="{{ route('categories.create')}}" type="button" class="btn btn-success">Добавить категорию</a>

                </div>
          </div>
      </div>
  </section>
  <!--================End Cart Area =================-->





@endsection