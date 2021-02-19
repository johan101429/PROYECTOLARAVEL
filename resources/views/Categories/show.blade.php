@extends('layouts.app')
@section('content')

    <h1 class="card-title text-center">@lang('es.category.show_title')</h1>
    <div class="d-flex justify-content-center">

        <div class="card mb-3" style="max-width: 45rem;">
            <div class="row g-0">
               
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->nameCategory }}</h5>
                        <p class="card-text">{{ $category->description }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>@lang('es.category.value'): </b> ${{ $category->value }}</li>
                        <li class="list-group-item"><b>@lang('es.category.status'): </b>{{ $category->status }}</li>

                    </ul>

                </div>
            </div>
            <div class="row g-0">
                <div class="col-12">
                    <a  class="btn btn-info" href="/category">volver</a>
                </div>
            </div>
        </div>

    </div>





@endsection
