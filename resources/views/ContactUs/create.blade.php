@extends('layouts.app')
@section('content')

<div class="container">
    <div class="d-flex justify-content-center" >      
        <h2 >  Contáctenos</h2>
    </div> 
    <div class="card text-justify center-form">
        <div class="card-body">
            <div class=" p-3 mb-2 bg-secondary  art-contactus " > 
                <form method="POST" class="needs-validations" action="/contact" enctype="multipart/form-data" novalidate >
                @csrf               
                    <div class="form-floating mb-3 ">
                        <input type="text"  id="name" name="name" placeholder="name" 
                         class="form-control @error('name') is-invalid @enderror">
                        <label for="floatingInput">Nombre completo </label>
                    </div>
                    @error('name')
                    <span class="invalid-feedback" role="alert"></span>
                        <b>{{$message}}</b>
                    @enderror  
                            
                    <div class="form-floating mb-3 ">
                        <input type="text"  id="floatingInput" name="email" placeholder="email" 
                        class="form-control @error('email') is-invalid @enderror">
                        <label for="floatingInput">Email </label>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert"  ></span>
                        <b>{{$message}}</b>
                    @enderror  
                            
                    <div class="form-floating mb-3 ">
                        <input type="text"  id="floatingInput" name="phone" placeholder="direccion" 
                        class="form-control @error('phone') is-invalid @enderror">
                        <label for="floatingInput">Celular </label>
                    </div>
                    @error('celular')
                    <span class="invalid-feedback" role="alert"  ></span>
                        <b>{{$message}}</b>
                    @enderror               
              
                    <div class="form-floating mb-3 ">
                        <textarea type="text"  id="floatingInput" name="description" placeholder="anexar informacion" 
                        rows="5" class="form-control @error('description') is-invalid @enderror"></textarea>                        
                        <label for="floatingInput">Comentarios </label>
                    </div>
                    @error('description')
                        <span class="invalid-feedback" role="alert"  ></span>
                        <b>{{$message}}</b>
                    @enderror                
                    <div class="text-center " >                  
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Enviar </button>
                    </div>                 

                    <!-- Modal -->
                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content p-3 mb-2 bg-info text-white">
                            <div class="modal-header ">
                                <h5 class="modal-title " id="exampleModalLabel ">Lo datos serán enviados?</h5>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

