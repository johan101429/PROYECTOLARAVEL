@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end m-5">
    <a href="/category/create"> {{__('es.category.create_title')}} </a>
</div>   
            

<div>
    <h1 class="text-center mt-3">{{__('es.category.list_categories_title')}}</h1>
    <table class="table table-bordered">
        <thead>
            <th scope="col">@lang('es.category.nameCategory')</th>
            <th scope="col">@lang('es.category.nameCategory')</th>
            <th scope="col">@lang('es.category.nameCategory')</th>
        </thead>
        <tbody>
            @foreach ( $category as $cat )
                <tr>
                    <td> check</td>
                    <td>{{$cat-> nameCategory}}</td>
                    <td>{{$cat-> description}}</td>

                </tr>
                @endforeach


        </tbody>



    </table>

</div>




@endsection
