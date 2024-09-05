<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
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
                <a href="" class="item-sidebar">
                    <i class="bi bi-gear icon"></i>
                    <p>Ajustes</p>
                </a>
                <a href="" class="exit">
                    <i class="bi bi-arrow-left icon"></i>
                    <p>Salir</p>
                </a>
            </div>
        </div>

        <div class="content-rigth" id="content-rigth">
            <div class="header" id="header">
                <div class="content-header">

                    <button class="btn-menu" id="btnMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 6l16 0" />
                            <path d="M4 12l16 0" />
                            <path d="M4 18l16 0" />
                        </svg>
                    </button>

                    <div class="search">
                        <input class="input-search" type="search" placeholder="Buscar...">
                        <input class="btn-search" type="submit" value="Buscar">
                    </div>

                    <div class="icons-header">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                            </svg>
                        </a>
                        <a class="btn-config" id="config" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                                <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                            </svg>
                        </a>

                        <div class="config" id="configDiv">
                            <div class="content-config">
                                <img class="img-profile" src="#" alt="">
                                <a href="">Profile</a>
                                <a href="">Ajustes</a>
                            </div>
                        </div>

                        <div class="profile" onclick="toggleProfileMenu()">
                            <img src="https://via.placeholder.com/40" alt="Profile Picture">
                            <span>John Doe</span>
                        </div>

                        <div id="profile-menu" class="profile-menu">
                            <p>John Doe</p>
                            <a href="#">Profile</a>
                            <a href="#">Settings</a>
                            <a href="#">Logout</a>
                        </div>

                        <script>
                            function toggleProfileMenu() {
                                const menu = document.getElementById('profile-menu');
                                menu.classList.toggle('show');
                            }

                            // Cierra el menú si se hace clic fuera de él
                            document.addEventListener('click', function(event) {
                                const profileMenu = document.getElementById('profile-menu');
                                const profile = document.querySelector('.profile');

                                if (!profile.contains(event.target)) {
                                    profileMenu.classList.remove('show');
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>


            <!-- contenido principal -->
            <div class="content-main" id="content-main">
                @yield('content-main')
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
