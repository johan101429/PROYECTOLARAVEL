@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
        @foreach ($products as $prod)
        <div class="col-md-4 ">
            <div class="card text-center">
              <img class="card-img-top m-1 " src="{{asset('storage/'.$prod->image)}}" alt="super" style="width: 300px"/>
              <div class="card-body">
                <h5 class="card-title">{{$prod->name}}</h5>
                <p class="card-text">{{$prod->description}}.</p>
                <a type="button" class="btn btn-success" href="/product/{{$prod->id}}">check</a>
              </div>
            </div>
          </div>
        @endforeach
  
@endsection

