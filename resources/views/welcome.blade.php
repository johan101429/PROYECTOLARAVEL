<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Programando Ando...</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Programando Ando...
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="bdNavbar">
                    <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed d-flex justify-content-end">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                    <a href="{{ url('/product') }}" class="text-sm text-gray-700 underline">Productos</a>
                                    <a href="{{ url('/category') }}"
                                        class="text-sm text-gray-700 underline">Categorias</a>

                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif

                                @endauth
                            </div>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>
        <div id="carouselExampleSlidesOnly" class="carousel slide my-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-50" src="{{ asset('storage/images/descarga.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50" src="{{ asset('storage/images/banner.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-50" src="{{ asset('storage/images/images.jpg') }}" alt="Third slide">
                </div>
            </div>
        </div>
    </header>
    <div class="form-row m-4 row m-5">
        <div class="col-12 text-center">
            <a type="button" class="btn btn-success" href="/home/list">
                Ver Productos</a>
        </div>
    </div>
    <footer class="bg-secondary bg-gradient d-flex justify-content-center p-2">
        <address >@COPYRIGHT 2021 PROBANDO ANDO... TODOS LOS DERECHOS RESERVADOS Calle 14 # 22-57 </address>
      </footer>
</body>

</html>
