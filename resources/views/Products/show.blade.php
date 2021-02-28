@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 45rem;">
            <div class="card-header">
                <h1 class="card-title text-center">@lang('es.product.show_title')</h1>
            </div>
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('storage/'.$product->image)}}" class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>@lang('es.product.value'): </b> ${{ $product->value }}</li>
                        <li class="list-group-item"><b>@lang('es.product.status'): </b>{{ $product->status }}</li>
                    </ul>
                </div>
            </div>
            <div class="form-row m-4 row">
                <div class="col-12 text-center">
                    @if (Route::has('login'))
                   
                    <a class="btn btn-info" href="/product">volver</a>      
                    @else
                        <a class="btn btn-info" href="/list">volver</a>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
@endsection
