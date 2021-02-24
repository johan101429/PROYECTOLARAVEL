@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1 class="card-title text-center">@lang('es.category.create_title')</h1>
        <div class="card text-justify center-form">

            <div class="card-body">

                <form method="POST" class=" needs- validations" action="/category" enctype="multipart/form-data" novalidate>
                    @csrf

                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-4 col-md-4">
                            <label>@lang('es.category.nameCategory')</label>
                            <input type="text" id="nameCategory" name="nameCategory"
                                class="form-control @error('nameCategory') is-invalid @enderror"
                                value="{{ old('nameCategory') }}">
                            @error('nameCategory')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                    <span>
                                    @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-4 col-md-4">
                            <label>@lang('es.category.status'):</label>
                            <input type="text" id="status" name="status"
                                class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                    <span>
                                    @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 ">
                            <label> @lang('es.category.description'):</label>
                            <textarea id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror"
                                value="{{ old('description') }}"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                    <span>
                                    @enderror
                        </div>
                    </div>

                    <div class="form-row m-4 row">
                        <div class="col-12 text-center">
                            <button class="btn btn-info">Crear</button>
                        </div>
                    </div>    
                </form>

            </div>
        </div>
    </div>

@endsection
