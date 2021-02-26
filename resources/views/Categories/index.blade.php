@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="form-row m-4 row m-3">
            <div class="col-12 d-flex justify-content-end">
                <a type="button" class="btn btn-info" href="/category/create">
                    {{__('es.category.create_title')}}</a>
            </div>
        </div>  
        <div class="card text-justify center-form">
            <div class="card-body">
                <h1 class="text-center m-3 "><strong>{{__('es.category.list_categories_title')}}</strong></h1>
                <table class="table table-bordered ">
                    <thead>                   
                      <th scope="col">@lang('es.category.nameCategory')</th>
                      <th scope="col">@lang('es.category.description')</th>
                      <th scope="col">@lang('es.category.status')</th>
                      <th scope="col"></th>
                    </thead>
                    <tbody>
                        @foreach ( $category as $cat )
                            <tr>
                                <td>{{$cat-> nameCategory}}</td>
                                <td>{{$cat-> description}}</td>
                                <td>{{$cat-> status}}</td>
                                <td>
                                    <a type="button" class="btn btn-success" href="/category/{{$cat->id}}">
                                        <span class="material-icons"> visibility </span></a>
                                    <a type="button" class="btn btn-primary" href="/category/{{$cat->id}}/edit">
                                        <span class="material-icons"> create </span></a>
                                    <a type="button" class="btn btn-danger" onclick="deleteCategory({{$cat->id}})" >
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
