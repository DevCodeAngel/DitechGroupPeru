<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Index')</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    <main class="principal">
        <div class="sidebar" id="sidebar">
            <div class="logo">
                <a href="/admin-ditech">
                    <img src="{{ asset('img/ditech.png') }}" alt="company">
                </a>
            </div>

            <div class="enlaces-sidebar">
                <a href="/admin-ditech" class="item-sidebar">
                    <i class="bi bi-house-fill icon"></i>
                    <p>Home</p>
                </a>
                <a href="/productos" class="item-sidebar">
                    <i class="bi bi-box2-fill icon"></i>
                    <p>Productos</p>
                </a>
                <a href="" class="item-sidebar">
                    <i class="bi bi-building-fill icon"></i>
                    <p>Negocio</p>
                </a>
                <a href="" class="item-sidebar">
                    <i class="bi bi-bag-fill icon"></i>
                    <p>Ventas</p>
                </a>
                <a href="/anuncios" class="item-sidebar">
                    <i class="bi bi-megaphone icon"></i>
                    <p>Anuncios</p>
                </a>
                <a href="/admin-profile" class="item-sidebar">
                    <i class="bi bi-gear icon"></i>
                    <p>Ajustes</p>
                </a>
                <a href="#" class="exit" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-arrow-left icon"></i>
                    <p>Salir</p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>

        <div class="content-rigth" id="content-rigth">
            <div class="header" id="header">
                <div class="content-header">
                    <button class="btn-menu" id="btnMenu">
                        <!-- Icon SVG -->
                    </button>

                    <div class="search">
                        <input class="input-search" type="search" placeholder="Buscar...">
                        <input class="btn-search" type="submit" value="Buscar">
                    </div>

                    <div class="icons-header">
                        <!-- Icons SVG -->
                        <a class="btn-config" id="config" href="">
                            <!-- Icon SVG -->
                        </a>
                    </div>
                </div>
            </div>

            <!-- contenido principal -->
            <div class="content-main" id="content-main">
                @yield('content-main') <!-- Aquí se cargará el contenido de otras vistas -->
            </div>
        </div>
    </main>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
