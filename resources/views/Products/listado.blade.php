@extends('layouts.app')
@section('content')

  <div class="container">
      <div class="row">
          @foreach ($products as $prod)
              <div class="col-md-4 ">
                  <div class="card text-center">
                    <div>
                      <img class="card-img-top m-1 " src="{{ asset('storage/' . $prod->image) }}" alt="super"
                          style="max-width: 280px " />
                    </div>
                      
                    <div class="card-body">
                        <h5 class="card-title">{{ $prod->name }}</h5>
                        <p class="card-text">{{ $prod->description }}.</p>
                      </div>
                      <div class="card-footer">
                          <a type="button" class="btn btn-success" href="/product/{{ $prod->id }}">Mas info</a>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
  </div>
@endsection
