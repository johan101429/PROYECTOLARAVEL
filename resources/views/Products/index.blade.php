@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="form-row m-4 row m-3 d-flex justify-content-end">
            <div class="col-2 ">
                <a type="button" class="btn btn-info" href="/product/create">
                    {{ __('es.product.create_title') }}</a>
            </div>
            <div class="col-2 ">
                <a type="button" class="btn btn-info" href="/list">
                    {{ __('es.product.see_view') }}</a>
            </div>
        </div>
        <div class="card text-justify center-form">
            <div class="card-body">
                <h1 class="text-center m-3"><strong>{{ __('es.product.list_products_title') }}</strong></h1>
                <table class="table table-bordered">
                    <thead>
                        <th scope="col">@lang('es.product.name')</th>
                        <th scope="col">@lang('es.product.value')</th>
                        <th scope="col">@lang('es.product.status')</th>
                        <th scope="col"></th>
                    </thead>
                    <tbody>
                        @foreach ($products as $prod)
                            <tr>
                                <td>{{ $prod->name }}</td>
                                <td>{{ $prod->value }}</td>
                                <td>{{ $prod->status }}</td>
                                <td>
                                    <a type="button" class="btn btn-success" href="/product/{{ $prod->id }}">
                                        <span class="material-icons"> visibility </span></a>
                                    <a type="button" class="btn btn-primary" href="/product/{{ $prod->id }}/edit">
                                        <span class="material-icons"> create </span></a>
                                    <a type="button" class="btn btn-danger" onclick="deleteProduct({{ $prod->id }})">
                                        <span class="material-icons"> delete </span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
