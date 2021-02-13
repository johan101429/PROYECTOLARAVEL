@extends('layouts.app')
@section('content')
            <a href="/product/create"> {{__('es.product.create_title')}} </a>



<div>
    <h1 class="text-center mt-3">{{__('es.product.list_products_title')}}</h1>
    <table class="table table-bordered">
        <thead>
            <th scope="col">@lang('es.product.name')</th>
            <th scope="col">@lang('es.product.value')</th>
            <th scope="col">@lang('es.product.status')</th>
            <th scope="col"></th>
        </thead>
        <tbody>
            @foreach ( $products as $prod )
                <tr>
                    <td>{{$prod-> name}}</td>
                    <td>{{$prod-> value}}</td>
                    <td>{{$prod-> status}}</td>
                    <td>
                        <a type="button" class="btn btn-success" href="/product/{{$prod->id}}">
                            <span class="material-icons"> visibility </span></a>
                        <a type="button" class="btn btn-primary" href="/product/{{$prod->id}}/edit">
                            <span class="material-icons"> create </span></a>
                        <a type="button" class="btn btn-danger" href="/product/{{$prod->id}}/delete">
                            <span class="material-icons"> delete </span></a>


                    </td>

                </tr>
            @endforeach


        </tbody>



    </table>

</div>




@endsection
