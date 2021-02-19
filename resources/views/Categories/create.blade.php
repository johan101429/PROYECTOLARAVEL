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
                            <label>@lang('es.category.nameCategory')</label>
                            <input type="text" id="nameCategory" name="nameCategory"
                                class="form-control @error('nameCategory') is-invalid @enderror" value="{{ old('nameCategory') }}">
                            @error('nameCategory')
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
                        <div class="col-6">
                            <label>@lang('es.category.description'):</label>
                            <input type="text" id="description" name="description"
                                class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}">
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{$message}}</b>
                                <span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label>@lang('es.category.status'):</label>
                            <input type="text" id="status" name="status"
                                class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <b>{{$message}}</b>
                                <span>
                            @enderror
                        </div>
                   {{--   @foreach($category as $cat )
               
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        {{$cat-> nameCategory}}
                                     </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                         <div class="form-check">
                                           <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                             <label class="form-check-label" for="flexCheckDefault">
                                                 {{$cat-> nameCategory}}
                                             </label>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach --}}
                    </div>
                    <button>Crear</button>
                </form>

            </div>
        </div>
    </div>

@endsection
