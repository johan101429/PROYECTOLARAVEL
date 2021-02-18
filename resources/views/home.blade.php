@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                        
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <section class=" py-4 text-sm-center text-md-center text-lg-center text-xl-center">
            <div class="container-fluid">
                <img src="{{url(Storage::url('home/home1.jpg'))}}" alt="icono" width="181px" class="img-fluid mx.auto py-5">
            </div>
        </section>
      {{--   <section>
        @foreach ( $categories as $cat )
        <h1 class="display-5"> {{$cat->nameCategory}} </h1>
        <p class="p-3"> {{$cat->description}}.</p>

        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                <img class="card-img-top" src="images/articlejs.jpg" alt="super" />
                <div class="card-body">
                    <h5 class="card-title">JavaScript</h5>
                    <p class="card-text">Lenguaje de Programacion.</p>
                    <a href="#">check</a>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                <img class="card-img-top" src="images/articlephp.png" alt="N64" />
                <div class="card-body">
                    <h5 class="card-title">PHP</h5>
                    <p class="card-text">Lenguaje de Programacion.</p>
                    <a href="#">check</a>
                </div>
                </div>
            </div>
        </div>
        @endforeach
                
               
             --}}
            
            
        
                
               
            
        
    </div>
</div>
@endsection
