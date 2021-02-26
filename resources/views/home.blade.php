@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                        
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <section class=" py-4 text-sm-center text-mad-center text-lg-center text-xl-center">
            <h1><strong><h1 class="bg-info">Bienvenido Programando Ando ...</h1></strong></h1>
            <div id="carouselExampleSlidesOnly" class="carousel slide my-4" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-50" src="{{ asset('storage/images/descarga.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-50" src="{{ asset('storage/images/banner.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-50" src="{{ asset('storage/images/images.jpg') }}" alt="Third slide">
                    </div>
                </div>
            </div>
             
        </section>
        
    </div>
</div>
@endsection
