@extends('layouts.app')
@section('content') 

<!--  <input type="text" name="inversion" placeholder="$10.000.000" class="form-control" id="separadorMiles" required><br> -->

<div class="p-3 mb-2 bg-success text-dark"  style="width: 600px; vertical-align: top;margin: 0 auto; ">
     
    <div class="p-3 mb-2 bg-info text-dark">
    <h4  class="text-center mt-3">¡EL CORREO FUE RECIBIDO CORRECTAMENTE!</h4>
    </div>
    <div>
       <img src="{{ asset('images/email.jpg') }}" 
        class="d-block w-100 img-fluid img-thumbnail" alt="banner1.">
        <div class="d-flex justify-content-end">        
        <a class="btn btn-primary btn-lg text-white" href="/">Ir al inicio</a> 
    
    </div>
    </div>
</div> 


@endsection