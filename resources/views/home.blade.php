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
                <img src="{{ asset('storage/images/descarga.jpg') }}" alt="icono" width="181px" class="img-fluid mx.auto py-5">
            </div>
            
        </section>
        
    </div>
</div>
@endsection
