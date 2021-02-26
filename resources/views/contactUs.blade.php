@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="card-title text-center">Contactenos</h1>
    <div class="card text-justify center-form">
      

      <div class="card-body">
        
        <form action="#" method="#">
            <div class="">
                <p>Nombre Completo: <br><input type="text" name="nombre" required placeholder="Escriba su Nombre"></p>
                <p>Telefono: <br><input type="number" name="telefono" min="1900" placeholder="  3XX XXX XXXX"></p>
                <p>Correo Electronico: <br> <input type="number" name="email" placeholder="email@email.com"></p>
                <p>Comentario: <br>
                    <textarea name="text" cols="40" rows="4"></textarea>
                    <br>
                    <input type="submit" value="Enviar">
                </p>
            </div>
            

        </form>
      
      </div>
    </div>
  </div>
@endsection
