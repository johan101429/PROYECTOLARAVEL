@extends('layouts.app')
@section('content')
{{-- <div class="container-fluid">
    <img src="images/programacion.png" alt="icono" width="181px" class="img-fluid mx.auto py-5">

    <h1 class="display-5"> todos los Cursos </h1>
    <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic deserunt provident veniam, accusamus
      sint culpa exercitationem vero labore, quam itaque eveniet nulla laborum. Odit atque aliquid accusamus
      voluptates,
      suscipit earum molestias veritatis cupiditate natus ex libero laborum sed culpa maiores.</p>
    <button class="btn btn-info btn-lg">Mas Info</button>
  </div>
</section>
<section> --}}

  <div class="container">
    <div class="row">
        @foreach ($products as $prod)
        <div class="col-md-4 ">
            <div class="card text-center">
              <img class="card-img-top m-1" src="{{asset('storage/'.$prod->image)}}" alt="super" style="width: 300px"/>
              <div class="card-body">
                <h5 class="card-title">{{$prod->name}}</h5>
                <p class="card-text">{{$prod->description}}.</p>
                <a type="button" class="btn btn-success" href="/product/{{$prod->id}}">check</a>
              </div>
            </div>
          </div>
        @endforeach
  
@endsection

