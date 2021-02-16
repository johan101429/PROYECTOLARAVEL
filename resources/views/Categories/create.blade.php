@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1 class="card-title text-center">@lang('es.category.create_title')</h1>
        <div class="card text-justify center-form">

            <div class="card-body">

                <form method="POST" class=" needs- validations" action="/category" 
                enctype="multipart/form-data" novalidate>
                    @csrf

                    <div class="form-row">
                        <div class="col-6">
                            <label>@lang('es.category.name')</label>
                            <input type="text" id="nameCategory" name="nameCategory"
                                class="form-control @error('nameCategory') is-invalid @enderror" value="{{ old('nameCategory') }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{ $message }}</b>
                                    <span> 
                                    @enderror
                        </div>
                        <div class="col-6">
                            <label>@lang('es.category.value'):</label>
                            <input type="number" id="value" name="value"
                                class="form-control @error('value') is-invalid @enderror" value="{{ old('value') }}">
                            @error('value')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{$message}}</b>
                                <span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label> @lang('es.category.Description'):</label>
                            <textarea id="category" name="status"
                                class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}"></textarea>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{$message}}</b>
                                <span>
                            @enderror
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <th scope="col"></th>
                                <th scope="col">@lang('es.product.name')</th>
                                <th scope="col">@lang('es.product.value')</th>
                                <th scope="col">@lang('es.product.status')</th>
                               
                            </thead>
                  
                    
                    
                            </tbody>
                    
                    
                    
                        </table>
                    </div>
                    <button>Crear</button>
                </form>

            </div>
        </div>
    </div>

@endsection
