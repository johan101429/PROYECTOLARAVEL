@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card text-justify center-form">
            <div class="card-body">
                <h1 class="card-title text-center">@lang('es.product.update_title')</h1>
                <form method="POST" class=" needs- validations" action="/product/{{ $product->id }}"
                    enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}
                    @csrf
                    @method('put')

                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label>imagen</label>
                            <input type="file" name="productcover" class="form-control">

                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <img src="{{asset('storage/'.$product->image)}}" width="350" class="img-fluid">

                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label>@lang('es.product.name')</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}{{ $product->name }} " />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                <span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label>@lang('es.product.value'):</label>
                            <input type="number" id="value" name="value"
                                class="form-control @error('value') is-invalid @enderror"
                                value="{{ old('value') }}{{ $product->value }}" />
                            @error('value')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                <span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label> @lang('es.product.Description'):</label>
                            <textarea id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror"
                                value="{{ old(' description') }}{{ $product->description }}"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                <span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label> @lang('es.product.status'):</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror"
                                value="{{ old('status') }} {{ $product->status }}">
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row m-4 row">
                        <div class="col-12 text-center">
                            <button class="btn btn-info">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
