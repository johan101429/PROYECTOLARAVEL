@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end m-5">
    <a href="/category/create"> {{__('es.category.create_title')}} </a>
</div>   
            

<div class="m-5">
    <h1 class="text-center mt-3">{{__('es.category.list_categories_title')}}</h1>
    <table class="table table-bordered ">
        <thead>
            
            <th scope="col">@lang('es.category.nameCategory')</th>
            <th scope="col">@lang('es.category.description')</th>
            <th scope="col">@lang('es.category.value')</th>
            <th scope="col">@lang('es.category.status')</th>
            <th scope="col"></th>

        </thead>
        <tbody>
            @foreach ( $category as $cat )
                <tr>
                    
                    <td>{{$cat-> nameCategory}}</td>
                    <td>{{$cat-> description}}</td>
                    <td>{{$cat-> value}}</td>
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




@endsection
