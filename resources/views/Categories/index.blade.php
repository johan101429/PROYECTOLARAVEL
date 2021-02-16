@extends('layouts.app')
@section('content')
           
            <a href="/category/create"> {{__('es.category.create_title_category')}} </a>
{{--
<div>
    <h1 class="text-center mt-3">{{__('es.category.list_categories_title')}}</h1>
    <table class="table table-bordered">
        <thead>
            <th scope="col">@lang('es.category.name')</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </thead>
        <tbody>
           
                <tr>
                    <td> check</td>
                    <td>{{$category-> nameCategory}}</td>
                    <td>value</td>
                    <td>idprod</td>
                   

                </tr>
         


        </tbody>



    </table>

</div>

 --}}


@endsection
