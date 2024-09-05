<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DITECH PERÚ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/scroolBar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


</head>
<body>
    <header class="content-header">

        <div class="hamburger-menu" id="hamburger-menu">
        </div>

        <a href="" id="logo">
            <img src="{{asset('img/logo-ditech.png')}}" alt="logo.png">
        </a>

        <div class="enlaces" id="nav-links">
            <div class="enlaces-header">
                <a href="" id="logo">
                    <img src="{{asset('img/logo-ditech.png')}}" alt="logo.png">
                </a>
                <i class="fas fa-times close-icon" id="closeMenu"></i>
            </div>

            <div class="item-menu">
                <a href="#" class="nav-item" id="nav-item-first">Inicio</a>
                <a href="#" class="nav-item">Nosotros</a>
                <a href="#" class="nav-item">Tienda Ditech</a>
                <a href="#" class="nav-item">Servicios</a>
                <a href="#" class="nav-item">Tutoriales</a>
                <a href="#" class="nav-item">Contáctanos</a>
            </div>

        </div>

        <div class="icons-header">
            <a href="" class="icon-1"><i class="bi bi-search"></i></a>
            <a href="" class="icon-1" id="second"><i class="bi bi-person"></i></a>
            <a href="" class="icon-1"><i class="bi bi-heart"></i></a>
            <a href="" class="icon-1"><i class="bi bi-bag"></i></a>
        </div>
    </header>

    <script>
        const hamburguesa = document.getElementById('hamburger-menu');
        const navLinks = document.getElementById('nav-links');
        const overlay = document.getElementById('overlay');
        const closeMenu = document.getElementById('closeMenu');

        let scrollPosition = 0;

        const toggleMenu = () => {
    const isMenuOpen = navLinks.style.left === '0px';

    if (isMenuOpen) {
        // Cerrar el menú
        navLinks.style.left = '-90%';
        overlay.style.opacity = '0';
        overlay.style.visibility = 'hidden';
        document.body.classList.remove('menu-open'); // Restaurar scroll
    } else {
        // Abrir el menú
        navLinks.style.left = '0px';
        overlay.style.opacity = '1';
        overlay.style.visibility = 'visible';
        document.body.classList.add('menu-open'); // Bloquear scroll
    }
};

        hamburguesa.addEventListener('click', toggleMenu);
        closeMenu.addEventListener('click', toggleMenu);
        overlay.addEventListener('click', toggleMenu);
    </script>



    <section class="content-slider-img">
        <div class="slider">
            <div class="slider-wrapper" id="sliderWrapper">
                <div class="slide"><img src="{{asset('img/banner_web01.jpg')}}" alt="Imagen 1"></div>
                <div class="slide"><img src="{{asset('img/banner02-1.png')}}" alt="Imagen 2"></div>
                <div class="slide"><img src="{{asset('img/banner03.png')}}" alt="Imagen 3"></div>
                <div class="slide"><img src="{{asset('img/camaras-2.png')}}" alt="Imagen 4"></div>
            </div>
            <div class="slider-dots" id="sliderDots">
                <span class="dot" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
                <span class="dot" data-slide="3"></span>
            </div>
        </div>
    </section>


    <script>
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        const showSlide = (index) => {
            const totalSlides = slides.length;
            if (index >= totalSlides) {
                currentSlideIndex = 0;
            } else if (index < 0) {
                currentSlideIndex = totalSlides - 1;
            } else {
                currentSlideIndex = index;
            }

            const newTransform = -currentSlideIndex * 100;
            document.querySelector('.slider-wrapper').style.transform = `translateX(${newTransform}%)`;

            dots.forEach(dot => dot.classList.remove('active'));
            dots[currentSlideIndex].classList.add('active');
        };

        const nextSlide = () => {
            showSlide(currentSlideIndex + 1);
        };

        const prevSlide = () => {
            showSlide(currentSlideIndex - 1);
        };

        // Initialize the slider
        showSlide(currentSlideIndex);

        // Set up automatic sliding
        setInterval(nextSlide, 5000);

        // Handle dot clicks
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                showSlide(parseInt(dot.getAttribute('data-slide')));
            });
        });


    </script>

    <section class="content-categories">
        <button class="buttonCat prev" onclick="scrollCategories(-1)">&#10094;</button>
        <div class="carousel-container">
            <div class="carousel-wrapper" id="carouselWrapper">
                <a href="#" class="item-category" id="first">
                    <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="70" height="70">
                        <title/>
                        <path fill="white" d="M21.5,3h-11A2.5,2.5,0,0,0,8,5.5v21A2.5,2.5,0,0,0,10.5,29h11A2.5,2.5,0,0,0,24,26.5V5.5A2.5,2.5,0,0,0,21.5,3ZM23,26.5A1.5,1.5,0,0,1,21.5,28h-11A1.5,1.5,0,0,1,9,26.5V5.5A1.5,1.5,0,0,1,10.5,4h11A1.5,1.5,0,0,1,23,5.5v21Z"/>
                        <path fill="white" d="M10,24H22V7H10V24ZM11,8H21V23H11V8Z"/>
                        <circle fill="white" cx="16" cy="26" r="1"/>
                        <rect fill="white" height="1" width="4" x="14" y="5"/>
                      </svg>

                    <h5>Celulares</h5>
                </a>

                <a href="#" class="item-category">
                    <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="60" height="60">
                        <title/>
                        <path fill="white" d="M30,3H2A2,2,0,0,0,0,5V24a2,2,0,0,0,2,2H14v2H10v1H22V28H18V26H30a2,2,0,0,0,2-2V5A2,2,0,0,0,30,3ZM17,28H15V26h2v2Zm14-4a1,1,0,0,1-1,1H2a1,1,0,0,1-1-1V5A1,1,0,0,1,2,4H30a1,1,0,0,1,1,1V24Z"/>
                        <path fill="white" d="M2,21H30V5H2V21ZM3,6H29V20H3V6Z"/>
                        <circle fill="white" cx="16" cy="23" r="1"/>
                      </svg>
                    <h5>Computadoras & Laptop</h5>
                </a>

                <a href="#" class="item-category">
                    <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="70" height="70">
                        <defs>
                          <style>.cls-1{fill:white;}</style>
                        </defs>
                        <title/>
                        <path class="cls-1" d="M30.5,11H22V3H4v8H1.5A1.5,1.5,0,0,0,0,12.5v15A1.5,1.5,0,0,0,1.5,29h29A1.5,1.5,0,0,0,32,27.5v-15A1.5,1.5,0,0,0,30.5,11ZM3,22H23v6H3V22ZM24,12h5V28H24V12ZM5,4H21v7H5V4Zm17,8h1v9H3V12H22ZM1,27.5v-15A0.5,0.5,0,0,1,1.5,12H2V28H1.5A0.5,0.5,0,0,1,1,27.5Zm30,0a0.5,0.5,0,0,1-.5.5H30V12h0.5a0.5,0.5,0,0,1,.5.5v15Z"/>
                        <rect class="cls-1" height="1" width="8" x="6" y="5"/>
                        <rect class="cls-1" height="1" width="13" x="6" y="7"/>
                        <rect class="cls-1" height="1" width="6" x="6" y="9"/>
                        <rect class="cls-1" height="1" width="3" x="25" y="25"/>
                        <rect class="cls-1" height="1" width="3" x="25" y="23"/>
                        <rect class="cls-1" height="1" width="3" x="25" y="21"/>
                        <circle class="cls-1" cx="26.5" cy="15" r="1"/>
                      </svg>
                    <h5>Impresoras</h5>
                </a>

                <a href="#" class="item-category">
                    <svg height="60" width="70" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                        <g id="Expanded" stroke="white" stroke-width="1" fill="none">
                          <path d="M24.5,21l-7.191,0c-0.262,-0 -0.513,0.103 -0.7,0.286c-4.078,3.994 -6.609,9.561 -6.609,15.714c-0,12.142 9.858,22 22,22c12.142,-0 22,-9.858 22,-22c0,-6.153 -2.531,-11.72 -6.609,-15.714c-0.187,-0.183 -0.438,-0.286 -0.7,-0.286l-7.191,-0l0,-8l9.5,-0c1.657,0 3,-1.343 3,-3l0,-6c0,-0.552 -0.448,-1 -1,-1l-38,0c-0.552,0 -1,0.448 -1,1l0,6c0,1.657 1.343,3 3,3l9.5,0l0,8Zm19.514,31.986c0,-0.005 0,-0.009 0,-0.014l0,-6.972c0,-3.183 -1.264,-6.235 -3.515,-8.485c-2.25,-2.251 -5.302,-3.515 -8.485,-3.515c-0.009,-0 -0.019,-0 -0.028,-0c-3.183,-0 -6.235,1.264 -8.485,3.515c-2.251,2.25 -3.515,5.302 -3.515,8.485c-0,3.809 -0,6.972 -0,6.972c-0,0.005 -0,0.009 -0,0.014c3.346,2.52 7.507,4.014 12.014,4.014c4.507,-0 8.668,-1.494 12.014,-4.014Zm-12.014,-16.789c-4.967,0 -9,4.033 -9,9c0,4.967 4.033,9 9,9c4.967,0 9,-4.033 9,-9c0,-4.967 -4.033,-9 -9,-9Zm0,2c3.863,0 7,3.137 7,7c0,3.864 -3.137,7 -7,7c-3.863,0 -7,-3.136 -7,-7c0,-3.863 3.137,-7 7,-7Zm14.014,13.067c3.694,-3.631 5.986,-8.682 5.986,-14.264c0,-5.448 -2.184,-10.391 -5.722,-13.999l-0.001,-0.001c0,-0 -28.554,0 -28.555,0.001c-3.538,3.608 -5.722,8.551 -5.722,13.999c0,5.582 2.292,10.633 5.986,14.264l-0,-5.264c-0,-3.713 1.475,-7.274 4.1,-9.899c2.626,-2.626 6.187,-4.101 9.9,-4.101c0.009,-0 0.019,-0 0.028,-0c3.713,-0 7.274,1.475 9.9,4.101c2.625,2.625 4.1,6.186 4.1,9.899l0,5.264Zm-12.596,-3.717c0.105,-0.118 0.083,-0.303 -0.049,-0.391c-0.394,-0.265 -0.866,-0.437 -1.373,-0.437c-0.506,-0 -0.976,0.171 -1.37,0.435c-0.132,0.088 -0.155,0.274 -0.049,0.392l1.229,1.369c0.102,0.113 0.279,0.113 0.381,0l1.231,-1.368Zm-1.421,-1.967c0.828,-0 1.592,0.274 2.207,0.734c0.109,0.081 0.258,0.072 0.349,-0.028l0.44,-0.489c0.099,-0.111 0.088,-0.286 -0.028,-0.376c-0.822,-0.638 -1.85,-1.045 -2.968,-1.045c-1.117,0 -2.144,0.406 -2.964,1.041c-0.117,0.091 -0.127,0.266 -0.028,0.376l0.439,0.49c0.09,0.101 0.24,0.11 0.348,0.029c0.615,-0.459 1.378,-0.732 2.205,-0.732Zm-0,-2.376c1.438,0 2.756,0.503 3.796,1.337c0.107,0.086 0.26,0.077 0.352,-0.025l0.396,-0.44c0.098,-0.109 0.088,-0.282 -0.025,-0.375c-1.235,-1.01 -2.805,-1.701 -4.519,-1.701c-1.712,-0 -3.28,0.689 -4.512,1.696c-0.114,0.093 -0.124,0.265 -0.026,0.374l0.395,0.441c0.092,0.102 0.245,0.111 0.351,0.026c1.039,-0.832 2.355,-1.333 3.792,-1.333Zm13.003,-17.204c0.552,-0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,-0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1Zm-4,-0c0.552,-0 1,0.448 1,1c0,0.552 -0.448,1 -1,1c-0.552,-0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1Zm-3.5,-5l-11,-0c0,-0 0,-8 0,-8l11,0l0,8Zm-7.75,-3l4.5,-0c0.552,-0 1,-0.448 1,-1c-0,-0.552 -0.448,-1 -1,-1l-4.5,-0c-0.552,-0 -1,0.448 -1,1c-0,0.552 0.448,1 1,1Zm-8.75,-13l-7,0c0,0 0,5 0,5c0,0.552 0.448,1 1,1l34,0c0.552,0 1,-0.448 1,-1l-0,-5l-7,0l0,1c0,0.796 -0.316,1.559 -0.879,2.121c-0.562,0.563 -1.325,0.879 -2.121,0.879c-3.832,-0 -12.168,-0 -16,-0c-0.796,0 -1.559,-0.316 -2.121,-0.879c-0.563,-0.562 -0.879,-1.325 -0.879,-2.121l0,-1Zm2,0l18,0l0,1c0,0.265 -0.105,0.52 -0.293,0.707c-0.187,0.188 -0.442,0.293 -0.707,0.293l-16,-0c-0.265,0 -0.52,-0.105 -0.707,-0.293c-0.188,-0.187 -0.293,-0.442 -0.293,-0.707l0,-1Z" />
                        </g>
                      </svg>
                    <h5>Cámaras de Seguridad</h5>
                </a>

                <a href="#" class="item-category">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="71px" height="71px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                        <path fill="white" d="M578.766,51.487v-0.895h-2.996H35.93h-2.996v0.895C15.272,52.701,2.095,66.753,0,83.808v3.002v355.724
                            c0,6.898,1.795,12.712,4.791,17.949c6.893,12.137,17.068,18.269,31.14,18.269h197.012v49.695h-37.425
                            c-9.281,0-16.467,7.218-16.467,16.48c0,9.262,7.186,16.479,16.467,16.479h220.666c9.281,0,16.768-7.218,16.768-16.479
                            c0-9.263-7.486-16.48-16.768-16.48h-37.425v-49.695H575.77c14.078,0,24.343-6.132,31.14-18.269
                            c3.085-5.493,5.091-11.37,5.091-17.949V86.811v-3.002C609.905,66.753,595.833,52.701,578.766,51.487z M578.766,86.811v355.724
                            c0,2.108-0.895,3.002-2.996,3.002H35.93c-2.095,0-2.996-0.894-2.996-3.002V86.811v-3.002h545.831V86.811z"/>
                    </svg>

                    <h5>Televisores</h5>
                </a>
                <a href="#" class="item-category">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 612 612" width="70" height="70" xml:space="preserve">
                        <path fill="white" d="M407.807,125.369c-4.876-2.795-11.118-1.143-13.934,3.733l-86.7,149.991c-2.815,4.896-1.142,11.098,3.733,13.954
                          c4.876,2.795,11.118,1.143,13.934-3.753l86.699-149.991C414.354,134.426,412.682,128.194,407.807,125.369z M183.406,125.369
                          c-4.875-2.795-11.118-1.143-13.933,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.875,2.795,11.118,1.143,13.933-3.753l86.7-149.991C189.955,134.426,188.282,128.194,183.406,125.369z M295.606,125.369
                          c-4.876-2.795-11.118-1.143-13.934,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.876,2.795,11.118,1.143,13.934-3.753l86.7-149.991C302.155,134.426,300.482,128.194,295.606,125.369z M520.006,125.369
                          c-4.875-2.795-11.117-1.143-13.933,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.875,2.795,11.118,1.143,13.933-3.753l86.7-149.991C526.555,134.426,524.882,128.194,520.006,125.369z M591.6,41.086H316.2
                          V10.537c0-5.641-4.569-10.18-10.2-10.18c-5.63,0-10.2,4.539-10.2,10.18v30.549H20.4C9.129,41.086,0,50.215,0,61.476V356.93
                          c0,11.26,9.129,20.369,20.4,20.369h275.4v213.955H153c-5.63,0-10.2,4.57-10.2,10.189c0,5.621,4.57,10.199,10.2,10.199h306
                          c5.631,0,10.2-4.568,10.2-10.199c0-5.619-4.569-10.189-10.2-10.189H316.2V377.299H591.6c11.261,0,20.4-9.109,20.4-20.369V61.476
                          C612,50.215,602.871,41.086,591.6,41.086z M591.6,346.738c0,5.641-4.569,10.191-10.199,10.191H30.6
                          c-5.63,0-10.2-4.561-10.2-10.191V71.666c0-5.641,4.57-10.189,10.2-10.189h550.8c5.63,0,10.199,4.559,10.199,10.189V346.738z"/>
                      </svg>

                        <path fill="none" stroke="white" stroke-width="2" d="M407.807,125.369c-4.876-2.795-11.118-1.143-13.934,3.733l-86.7,149.991c-2.815,4.896-1.142,11.098,3.733,13.954
                          c4.876,2.795,11.118,1.143,13.934-3.753l86.699-149.991C414.354,134.426,412.682,128.194,407.807,125.369z M183.406,125.369
                          c-4.875-2.795-11.118-1.143-13.933,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.875,2.795,11.118,1.143,13.933-3.753l86.7-149.991C189.955,134.426,188.282,128.194,183.406,125.369z M295.606,125.369
                          c-4.876-2.795-11.118-1.143-13.934,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.876,2.795,11.118,1.143,13.934-3.753l86.7-149.991C302.155,134.426,300.482,128.194,295.606,125.369z M520.006,125.369
                          c-4.875-2.795-11.117-1.143-13.933,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.875,2.795,11.118,1.143,13.933-3.753l86.7-149.991C526.555,134.426,524.882,128.194,520.006,125.369z M591.6,41.086H316.2
                          V10.537c0-5.641-4.569-10.18-10.2-10.18c-5.63,0-10.2,4.539-10.2,10.18v30.549H20.4C9.129,41.086,0,50.215,0,61.476V356.93
                          c0,11.26,9.129,20.369,20.4,20.369h275.4v213.955H153c-5.63,0-10.2,4.57-10.2,10.189c0,5.621,4.57,10.199,10.2,10.199h306
                          c5.631,0,10.2-4.568,10.2-10.199c0-5.619-4.569-10.189-10.2-10.189H316.2V377.299H591.6c11.261,0,20.4-9.109,20.4-20.369V61.476
                          C612,50.215,602.871,41.086,591.6,41.086z M591.6,346.738c0,5.641-4.569,10.191-10.199,10.191H30.6
                          c-5.63,0-10.2-4.561-10.2-10.191V71.666c0-5.641,4.57-10.189,10.2-10.189h550.8c5.63,0,10.199,4.559,10.199,10.189V346.738z"/>
                      </svg>

                        <path fill="none" stroke="white" stroke-width="2" d="M407.807,125.369c-4.876-2.795-11.118-1.143-13.934,3.733l-86.7,149.991c-2.815,4.896-1.142,11.098,3.733,13.954
                          c4.876,2.795,11.118,1.143,13.934-3.753l86.699-149.991C414.354,134.426,412.682,128.194,407.807,125.369z M183.406,125.369
                          c-4.875-2.795-11.118-1.143-13.933,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.875,2.795,11.118,1.143,13.933-3.753l86.7-149.991C189.955,134.426,188.282,128.194,183.406,125.369z M295.606,125.369
                          c-4.876-2.795-11.118-1.143-13.934,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.876,2.795,11.118,1.143,13.934-3.753l86.7-149.991C302.155,134.426,300.482,128.194,295.606,125.369z M520.006,125.369
                          c-4.875-2.795-11.117-1.143-13.933,3.733l-86.7,149.991c-2.815,4.896-1.143,11.098,3.733,13.954
                          c4.875,2.795,11.118,1.143,13.933-3.753l86.7-149.991C526.555,134.426,524.882,128.194,520.006,125.369z M591.6,41.086H316.2
                          V10.537c0-5.641-4.569-10.18-10.2-10.18c-5.63,0-10.2,4.539-10.2,10.18v30.549H20.4C9.129,41.086,0,50.215,0,61.476V356.93
                          c0,11.26,9.129,20.369,20.4,20.369h275.4v213.955H153c-5.63,0-10.2,4.57-10.2,10.189c0,5.621,4.57,10.199,10.2,10.199h306
                          c5.631,0,10.2-4.568,10.2-10.199c0-5.619-4.569-10.189-10.2-10.189H316.2V377.299H591.6c11.261,0,20.4-9.109,20.4-20.369V61.476
                          C612,50.215,602.871,41.086,591.6,41.086z M591.6,346.738c0,5.641-4.569,10.191-10.199,10.191H30.6
                          c-5.63,0-10.2-4.561-10.2-10.191V71.666c0-5.641,4.57-10.189,10.2-10.189h550.8c5.63,0,10.199,4.559,10.199,10.189V346.738z"/>
                      </svg>
                    <h5>Pantallas LED</h5>
                </a>
                <a href="#" class="item-category">
                    <svg id="Outline" viewBox="0 0 512 512" width="70" height="70" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                          <style>.cls-1{fill:white;}</style>
                        </defs>
                        <path class="cls-1" d="M256.24,72.88a124.63,124.63,0,0,0-124.5,124.49c0,22.34,12,58.16,36.59,109.53,19.78,41.28,43.49,83.5,59.9,111.66a32.42,32.42,0,0,0,56,0c16.4-28.16,40.11-70.39,59.9-111.66,24.62-51.37,36.59-87.19,36.59-109.53A124.63,124.63,0,0,0,256.24,72.88Zm8.41,334.26a9.74,9.74,0,0,1-16.83,0c-59.36-101.87-93.4-178.32-93.4-209.77a101.82,101.82,0,1,1,203.64,0C358.06,228.81,324,305.27,264.65,407.14Z"/>
                        <path class="cls-1" d="M255.18,139a66.8,66.8,0,1,0,66.8,66.8A66.87,66.87,0,0,0,255.18,139Zm0,110.92a44.13,44.13,0,1,1,44.12-44.12A44.17,44.17,0,0,1,255.18,249.88Z"/>
                      </svg>

                    <H5>GPS Motos y Autos</H5>
                </a>
            </div>
        </div>
        <button class="buttonCat next" onclick="scrollCategories(1)">&#10095;</button>
    </section>

    <script>
        let currentIndex = 0;

        const scrollCategories = (direction) => {
            const carouselWrapper = document.getElementById('carouselWrapper');
            const items = carouselWrapper.querySelectorAll('.item-category');
            const totalItems = items.length;
            const itemsPerView = 2; // Mostrar dos elementos por vista
            const maxIndex = totalItems - itemsPerView; // Asegurar que el índice máximo sea correcto

            currentIndex += direction;
            if (currentIndex < 0) {
                currentIndex = maxIndex; // Regresa al final si retrocede más allá del primer índice
            } else if (currentIndex > maxIndex) {
                currentIndex = 0; // Regresa al inicio si avanza más allá del último índice
            }

            const newTransform = -(currentIndex * 100 / itemsPerView);
            carouselWrapper.style.transform = `translateX(${newTransform}%)`;
        }
    </script>



    <section class="content-shop-more">
        <div class="title-shop-more">
            <h1>Las laptops más vendidas</h1>
            <p>Con excelentes características para estudiantes, Universitarios, Profesionales, Gammer, Ingenieros, Diseñadores multimedia.</p>
        </div>

        <div class="carousel">
            <div class="carousel-container" id="carouselContainer">
                <!-- Conjunto 1 -->
                <div class="carousel-set">
                    @foreach ($productos as $producto)
                        <div class="carousel-item" style="width: 400px; height: 600px">
                            <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->descripcion }}">
                            <div class="carousel-info">
                                <p class="carousel-description">{{ $producto->descripcion }}</p>
                                <p class="carousel-price">S/. {{ number_format($producto->precio, 2) }}</p>
                            </div>
                            <div class="icon-overlay">
                                <span class="icon"><i class="fas fa-shopping-bag" onclick="openModal('cartModal')"></i>
                                    <span class="tooltip">Añadir al carrito</span>
                                </span>
                                <span class="icon"><i class="fas fa-eye"></i>
                                    <span class="tooltip">Ver detalles</span>
                                </span>
                                <span class="icon"><i class="fas fa-heart"></i>
                                    <span class="tooltip">Añadir a favoritos</span>
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Aquí puedes agregar más conjuntos si es necesario -->
            </div>

            <div class="slider-dots" id="sliderDots">
                <span class="dot" data-slide="0" onclick="prevSet()"></span>
                <span class="dot" data-slide="1" onclick="nextSet()"></span>
            </div>
        </div>

        <!-- Modal personalizado de carrito-->
        <div class="modal" id="cartModal">
            <div class="modal-content">
                <span class="close" onclick="closeModal('cartModal')">&times;</span>
                <h2>Añadir al carrito</h2>
                <p>El producto ha sido añadido al carrito.</p>
                <button onclick="closeModal('cartModal')">Cerrar</button>
            </div>
        </div>

        <script>
            function openModal(modalId) {
                document.getElementById(modalId).style.display = 'block';
            }

            function closeModal(modalId) {
                document.getElementById(modalId).style.display = 'none';
            }

            // Cerrar el modal al hacer clic fuera de él
            window.onclick = function(event) {
                const modal = document.getElementById('cartModal');
                if (event.target === modal) {
                    closeModal('cartModal');
                }
            }
        </script>
        </div>
    </section>

    <script>
        let currentSetIndex = 0;

        const prevSet = () => {
            const carouselContainer = document.getElementById('carouselContainer');
            const sets = carouselContainer.querySelectorAll('.carousel-set');
            const totalSets = sets.length;

            currentSetIndex = (currentSetIndex - 1 + totalSets) % totalSets;
            updateCarousel();
        };

        const nextSet = () => {
            const carouselContainer = document.getElementById('carouselContainer');
            const sets = carouselContainer.querySelectorAll('.carousel-set');
            const totalSets = sets.length;

            currentSetIndex = (currentSetIndex + 1) % totalSets;
            updateCarousel();
        };

        const updateCarousel = () => {
            const carouselContainer = document.getElementById('carouselContainer');
            const newTransform = -(currentSetIndex * 100); // Ajuste de transformación
            carouselContainer.style.transform = `translateX(${newTransform}%)`;
        };
    </script>



    <article class="article-collage">

        <section class="image-grid">
            <figure>
                <img src="img/impresora.png" alt="impresora">
            </figure>
        </section>

        <section class="image-grid" id="image-grid-detalle">
            <div class="grid-container">
                <figure class="grid-item">
                    <span class="price">S/980.00</span>
                    <img src="img/impresora1.jpg" alt="impresora">

                    <figcaption>Epson L3210</figcaption>
                </figure>
                <figure class="grid-item">
                    <span class="price">S/980.00</span>
                    <img src="img/impresora2.jpg" alt="impresora">
                    <figcaption>Epson L3210</figcaption>
                </figure>
                <figure class="grid-item">
                    <span class="price">S/980.00</span>
                    <img src="img/impresora3.jpg" alt="impresora">

                    <figcaption>Epson L3210</figcaption>
                </figure>
                <figure class="grid-item">
                    <span class="price">S/980.00</span>
                    <img src="img/impresora3.jpg" alt="impresora">
                    <figcaption>Epson L3210</figcaption>

                </figure>
            </div>
        </section>

    </article>





    <section class="descuentos">
        <img src="{{asset('img/camaras-2.png')}}" alt="img-carrusel-1.png" class="descuento-fondo">
        <div class="content-descuento">
            <h1 class="title-descuento"><b>ESTE MES</b></h1><br>
            <h1 class="subtitle-descuento"><b>60% OFF</b></h1><br>
            <p>En instalaciones de cámaras de seguridad.</p>
        </div>
    </section>

    <section class="boletin">
        <div class="content-boletin">
            <h1>Suscríbete a nuestro boletín</h1>
            <p>Reciba un código de descuento exclusivo del 10% cuando se registre.</p>
            <div class="data-boletin">
                <div class="inputs-boletin">
                    <input type="email" placeholder="Ingrese su Email *" maxlength="50">
                    <span class="line-suscrit"></span>
                </div>
                <button class="suscribete">Suscríbete</button>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="content-footer">
            <div class="social-media">
                <a href="">
                    <img src="{{asset("img/logo-ditech.png")}}" alt="logo.png">
                </a>

                <p class="collapsible-btn">
                    SÍGUENOS EN NUESTRAS REDES SOCIALES
                    <span class="arrow bi bi-chevron-right"></span>
                </p>

                <div class="icons-social-media">
                    <a href="" class="icon-footer"><i class="bi bi-facebook"></i></a>
                    <a href="" class="icon-footer"><i class="bi bi-twitter"></i></a>
                    <a href="" class="icon-footer"><i class="bi bi-google"></i></a>
                    <a href="" class="icon-footer"><i class="bi bi-pinterest"></i></a>
                </div>
                <hr class="line">

                <script>
                    // Selecciona el botón de colapso y los íconos de redes sociales
                    const collapsibleBtn = document.querySelector('.collapsible-btn');
                    const socialIcons = document.querySelector('.icons-social-media');
                    const arrow = document.querySelector('.arrow');

                    collapsibleBtn.addEventListener('click', function() {
                        // Alterna el max-height entre 0 y el scrollHeight del contenido
                        if (socialIcons.style.maxHeight) {
                            socialIcons.style.maxHeight = null;
                        } else {
                            socialIcons.style.maxHeight = socialIcons.scrollHeight + 'px';
                        }
                        // Alterna la rotación del icono de flecha
                        arrow.classList.toggle('rotate');
                    });
                </script>
            </div>

            <div class="contactos">
                <p class="title-contact">
                    CONTÁCTANOS
                    <span class="arrow-2 bi bi-chevron-right"></span>
                </p>
                <div class="contact-details">
                    <a href="tel:928707149">928707149</a>
                    <a href="tel:044601991">044-601991</a>
                    <a href="mailto:help@allbirds.com">help@allbirds.com</a>
                </div>
                <hr class="line">

            </div>

            <script>
                // Selecciona el título de contacto y los detalles de contacto
                const titleContact = document.querySelector('.title-contact');
                const contactDetails = document.querySelector('.contact-details');
                const contactArrow = document.querySelector('.arrow-2');

                titleContact.addEventListener('click', function() {
                    // Alterna el max-height entre 0 y el scrollHeight del contenido
                    if (contactDetails.style.maxHeight) {
                        contactDetails.style.maxHeight = null;
                    } else {
                        contactDetails.style.maxHeight = contactDetails.scrollHeight + 'px';
                    }
                    // Alterna la rotación del icono de flecha
                    contactArrow.classList.toggle('rotate');
                });
            </script>

        </div>
        <div class="second-component">
            <div class="content-footer">
                <p>© 2024 Ditech Perú. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>


    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
