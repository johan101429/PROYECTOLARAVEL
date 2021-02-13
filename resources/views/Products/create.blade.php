@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1 class="card-title text-center">@lang('es.product.create_title')</h1>
        <div class="card text-justify center-form">

            <div class="card-body">

                <form method="POST" class=" needs- validations" action="/product" 
                enctype="multipart/form-data" novalidate>
                    @csrf

                    <div class="form-row">
                        <div class="col-6">
                            <label>image</label>
                            <input type="file" name="productcover" 
                                class="form-control">
                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <label>@lang('es.product.name')</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                    <span> 
                                    @enderror
                        </div>
                        <div class="col-6">
                            <label>@lang('es.product.value'):</label>
                            <input type="number" id="value" name="value"
                                class="form-control @error('value') is-invalid @enderror" value="{{ old('value') }}">
                            @error('value')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{$message}}</b>
                                <span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label> @lang('es.product.Description'):</label>
                            <textarea id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{$message}}</b>
                                <span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label> @lang('es.product.status'):</label>
                           <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
                            <option value="activo">Activo</option>
                        
                            <option value="inactivo">Inactivo</option>
                        </select>
                        </div>
                    </div>
                    <button>Crear</button>
                </form>

            </div>
        </div>
    </div>

@endsection
