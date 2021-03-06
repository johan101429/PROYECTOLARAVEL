@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="card text-justify center-form">
            <div class="card-body">
                <h1 class="card-title text-center"><strong>@lang('es.category.update_title')</strong></h1>
                <form method="POST" class=" needs- validations" action="/category/{{ $category->id }}"
                    enctype="multipart/form-data" novalidate>
                    {{ csrf_field() }}
                    @csrf
                    @method('put')
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label>@lang('es.category.nameCategory')</label>
                            <input type="text" id="nameCategory" name="nameCategory"
                                class="form-control @error('nameCategory') is-invalid @enderror"
                                value="{{ old('nameCategory') }} {{ $category->nameCategory }}" />
                            @error('nameCategory')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                <span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label>@lang('es.category.value'):</label>
                            <input type="number" id="value" name="value"
                                class="form-control @error('value') is-invalid @enderror"
                                value="{{ old('value') }} {{ $category->value }}" />
                            @error('value')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                <span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label> @lang('es.category.description'):</label>
                            <textarea id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror"
                                value="{{ old('description') }} {{ $category->description }}"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                <span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row mt-4 row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <label>@lang('es.category.status'):</label>
                            <input type="text" id="status" name="status"
                                class="form-control @error('status') is-invalid @enderror"
                                value="{{ old('status') }} {{ $category->status }}">
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                <span>
                            @enderror
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
