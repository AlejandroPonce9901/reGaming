<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ReGaming</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="iconorg.jpeg" type="image/x-icon">
    <link rel="icon" href="iconorg.jpeg" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    
</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

    <div class="display-99" style="
    padding-bottom: 0px;
    padding-top: 10px;
">
            <a class="site-logo" href="{{ url('/') }}" style="
    padding-left: 10px;
    padding-top: 0px;
    border-top-width: 20px;
    margin-top: 20px;
">
                reGaming
            </a>
    </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Cerrar</span></a>

            <div class="header-nav__content">
                <h3 style="
    padding-right: 20px;
">Navegación en el sitio</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="navbar-brand" href="{{ url('/') }}">
                    Inicio</li>
                    <li>@if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesión</a>
                                <a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Registrarse</a>
        
                                <!--@if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif-->
                            @endif
                        
                    @endif</li>
                </a>
                
                    <!--<li><a class="smoothscroll"  href="#Inicio" title="¿Quiénes somos?">¿Quiénes somos?</a></li>
                    <li><a class="smoothscroll"  href="#Filosofia" title="Filosofia ReGaming">Filosofía ReGaming
                    </a></li>
                    <li><a class="smoothscroll"  href="#productos" title="productos">Galería de productos</a></li>
                   <!-- //<li><a class="smoothscroll"  href="#clients" title="Personal ReGAming">Personal Técnico de ReGAming</a></li>-->
                   <!-- <li><a class="smoothscroll"  href="#contact" title="contacto">Contacto</a></li>
                    <li>@if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Iniciar Sesión</a>
        
                                <!--@if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                                @endif-->
                            @endif
                        </div>
                    @endif</li>
                </ul>
                <!--Texto que va en la parte del menu-->
                <p>Hola Chico Gamer tenemos todo tipo de producto clasico que te imagines, si lo piensas lo encuentras</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <!--<li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>-->
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    


    <!-- services
    ================================================== -->
    <section id='Filosofia' class="s-services" style="
    padding-top: 70px;
">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">¡Ingresa a!</h3>
                <h1 class="display-2">ReGaming </h1>
            </div>
        </div> <!-- end section-header -->
        @yield('content')

        <!--<div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-paint-brush"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">MISION</h3>
                    <p>Nuestra misión, ser una empresa líder y reconocida en la compra y venta de los mejores accesorios, consolas y videojuegos clásicos.<br>
                    Además de proporcionar un excelente servicio y adquisición de elementos clásicos en cuanto a tecnología.

                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">VISION</h3>
                    <p>Contamos con la mejor tecnología para proteger, áreas de trabajo, información confidencial, con la finalidad de disminuir robos informáticos.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-megaphone"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h2">VALORES</h3>
                    <p> *Orden. <br>
                        *Limpieza. <br>
                        *Lealtad. <br>
                        *Puntualidad. <br>
                        *Honradez. <br>
                        *Deseo de superación. <br>
                        *Responsabilidad. <br>
                        *Respeto a la ley y reglamentos. <br>
                        *Respeto al derecho de los demás. <br>
                        *Afán por el ahorro y la inversión. <br>
                        *Amor al trabajo. <br>
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-earth"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">OBJETIVO GENERAL</h3>
                    <p>Buscamos llevar al límite las ventas y compras de nuestros productos clásicos, y brindar un excelente servicio a nuestros clientes mediante nuestra especialización en videojuegos, además de tener en buen estado cualquier producto.
                    </p>
                </div>
            </div>

           <!-- <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="icon-cube"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">INSTALACIÓN Y CONFIGURACIÓN DE CÁMARAS</h3>
                    <p>Al ser una solución integral incluye gestión, instalación, configuración y soporte remoto o en sitio, lo que permite visualizar toda la operación de la empresa.

﻿.
                    </p>
                </div>
            </div>
    
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">MANTENIMIENTO A CUALQUIER INSTALACIÓN </h3>
                    <p>Contamos con garantia que ofrece el mantenimiento correctivo y preventivo en cualquier servicio otorgado, dando soporte presencial o por llamada.
                    </p>
                </div>
            </div>

             <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">MONTAJE Y CONFIGURACIÓN DE ATENAS </h3>
                    <p>Haciendo, configurando y levantando torres para una mejor comunicación entre la red interna.
                    </p>
                </div>
            </div>

             <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon"><i class="icon-lego-block"></i></div>
                <div class="service-text">
                    <h3 class="h2">CONFIGURACIÓN DE EQUIPOS DE COMUNICACIÓN</h3>
                    <p>La comunicación es fundamental en la red interna, llevando los mejores equipos para administrarla siendo configurados por técnicos capacitados.
                    </p>
                </div>
            </div>

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <<!--section id='productos' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">GALERIA DE PRODUCTOS </h3>
                    <h1 class="display-2 display-2--light">Nos encanta llevarte al pasado y recuerdes tu niñez, si lo piensas lo encuentras.</h1>
                </div>
            </div> <!-- end section-header -->

        <!--</div> <!-- end intro-wrap -->

        <!--<div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto001.jpg" class="thumb-link" title="Shutterbug" data-size="1050x800">
                                    <img src="images/portfolio/lady-producto001.jpg" 
                                         srcset="images/portfolio/gallery/producto001.jpg 1x, images/portfolio/gallery/producto001.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                   Consola de videojuego XBOX First (Negro)
                                </h3>
                                <p class="item-folio__cat">
                                    PRECIO: $10,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $10,000</p>
                                <p>CONTIENE:</p>
                                + Consola Xbox
                                + 1 Control original
                                + Cable de audio y video
                                + Cable directo hacia la luz
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <!--<div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto002.jpg" class="thumb-link" title="Woodcraft" data-size="1050x800">
                                    <img src="images/portfolio/gallery/producto002.jpg" 
                                         srcset="images/portfolio/gallery/producto002.jpg 1x, images/portfolio/gallery/producto002.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Consola de Videojuegos NIntendo 64
                                </h3>
                                <p class="item-folio__cat">
                                     PRECIO: $10,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $10,000</p>
                                <p>CONTIENE:</p>
                                + Consola Nintendo 64
                                + 1 Control original
                                + Cable de audio y video
                                + Cable directo hacia la luz
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                   <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto003.jpg" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="images/portfolio/gallery/producto003.jpg"
                                         srcset="images/portfolio/gallery/producto003.jpg 1x, images/portfolio/gallery/producto003.jpg 1x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Mando Para Xbox One
                                </h3>
                                <p class="item-folio__cat">
                                    PRECIO: $2,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $2,000</p>
                                <p>CONTIENE:</p>
                                + 1 Control original (Blanco/Negro)
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <!--<div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto004.jpg" class="thumb-link" title="Grow Green" data-size="1050x700">
                                    <img src="images/portfolio/gallery/producto004.jpg" 
                                         srcset="images/portfolio/gallery/producto004.jpg 1x, images/portfolio/gallery/producto004.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Consola de Videojuegos Play Station 1
                                </h3>
                                <p class="item-folio__cat">
                                    PRECIO: $10,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $10,000</p>
                                <p>CONTIENE:</p>
                                + Consola Play Sation 1
                                + 1 Control original
                                + Cable de audio y video
                                + Cable directo hacia la luz
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <!--<div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto005.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="images/portfolio/gallery/producto005.jpg" 
                                         srcset="images/portfolio/gallery/producto005.jpg 1x, images/portfolio/gallery/producto005.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Consola de Videojuegos Game Cubie
                                </h3>
                                <p class="item-folio__cat">
                                    PRECIO: $10,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                 <p>PRECIO: $10,000</p>
                                <p>CONTIENE:</p>
                                + Consola Game Cubie
                                + 1 Control original
                                + Cable de audio y video
                                + Cable directo hacia la luz
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <!--<div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto006.jpg" class="thumb-link" title="Palmeira" data-size="950x700">
                                    <img src="images/portfolio/gallery/producto006.jpg"
                                         srcset="images/portfolio/gallery/producto006.jpg 1x, images/portfolio/gallery/producto006.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Videojuego PSP
                                </h3>
                                <p class="item-folio__cat">
                                    PRECIO: $5,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $5,000</p>
                                <p>CONTIENE:</p>
                                + Videojuego PSP
                                + 10 juegos Internos
                                
                            </div>
                            </div>
    
                        </div>

                         <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto007.png" class="thumb-link" title="Palmeira" data-size="950x700">
                                    <img src="images/portfolio/gallery/producto007.png"
                                         srcset="images/portfolio/gallery/producto007.png 1x, images/portfolio/gallery/producto007.png 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Consola de Videojuegos Xbox Series X
                                </h3>
                                <p class="item-folio__cat">
                                    PRECIO: $10,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $10,000</p>
                                <p>CONTIENE:</p>
                                + Consola Xbox Series X
                                + 1 Control original
                                + Cable de audio y video
                                + Cable directo hacia la luz
                                
                            </div>
                            </div>
    
                        </div>

                        <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto000.png" class="thumb-link" title="Palmeira" data-size="950x1200">
                                    <img src="images/portfolio/gallery/producto000.png"
                                         srcset="images/portfolio/gallery/producto000.png 1x, images/portfolio/gallery/producto000.png 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Videojuego Game System
                                </h3>
                                <p class="item-folio__cat">
                                    PRECIO: $1,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $1,000</p>
                                <p>CONTIENE:</p>
                                + Videojuego Game System
                                + 100 juegos Internos
                                
                                
                            </div>
                            </div>
                        </div>

                        <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto008.jpg" class="thumb-link" title="Woodcraft" data-size="1300x800">
                                    <img src="images/portfolio/gallery/producto008.jpg" 
                                         srcset="images/portfolio/gallery/producto008.jpg 1x, images/portfolio/gallery/producto008.jpg 1x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Mando de Play Station 5
                                </h3>
                                <p class="item-folio__cat">
                                     PRECIO: $2,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $2,000</p>
                                <p>CONTIENE:</p>
                                + 1 Control original (Blanco/Negro)
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                   <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/producto009.png" class="thumb-link" title="Woodcraft" data-size="1200x800">
                                    <img src="images/portfolio/gallery/producto009.png" 
                                         srcset="images/portfolio/gallery/producto009.png 1x, images/portfolio/gallery/producto009.png 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Consola de Videojuegos Play Station 5
                                </h3>
                                <p class="item-folio__cat">
                                     PRECIO: $10,000
                                </p>
                            </div>
    
                            <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <p>PRECIO: $10,000</p>
                                <p>CONTIENE:</p>
                                + Consola Play Station 5
                                + 1 Control original
                                + Cable de audio y video
                                + Cable directo hacia la luz
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    </div> <!-- end masonry__brick -->

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->


    <!--  DESCOMENTAR PARA VER NUESTROS PERFILES clients
    ================================================== 
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">NUESTRO PERSONAL</h3>
                <br>
                <h1 class="display-2">Jovenes exitosos, fundadores de WOrld COnected</h1>
            </div>
        </div> <!-- end section-header -->

        <!-- <div class="row clients-outer" data-aos="fade-up">
           <!--- <div class="col-full">


                <!---<div class="clients">
                    
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/apple.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/atom.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/blackberry.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/dropbox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/envato.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/firefox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/joomla.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/magento.png" /></a>
                     
                </div>
                --> <!-- end clients 
            </div>--> <!-- end col-full -->
       <!--// </div> <!-- end clients-outer -->

        <!--// <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                        <p>No son los individuos los que hacen las empresas exitosas, sino los equipos</p>

                        <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Cristian Israel Torres Garcia</span> 
                            <span class="testimonials__pos">Líder</span>
                        </div>

                    </div>
                     <div class="testimonials__slide">
                        
                        <p>Mucha gente tiene ideas pero solo unos pocos deciden llevarlas a cabo hoy y no mañana</p>

                        <img src="images/avatars/user-05.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Héctor Josué Ojeda Peréz</span> 
                            <span class="testimonials__pos">Líder</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>No hay nada malo en una empresa pequeña. Puedes hacer grandes cosas con un equipo pequeño</p>

                        <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Luis Alejandro Ponce González</span> 
                            <span class="testimonials__pos">Líder</span>
                        </div>

                    </div>

                     <div class="testimonials__slide">
                        
                        <p>El precio del éxito es trabajo duro, dedicación y determinación en que, ganes o pierdas, habrás hecho todo lo que estaba en tus manos</p>

                        <img src="images/avatars/user-03.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Uriel Morales Aguilera</span> 
                            <span class="testimonials__pos">Líder</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                        <p>Estoy convencido de que lo único que separa a los emprendedores con éxito de los que han fracasado es la perseverancia</p>

                        <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Mauricio Gerardo Andrade Hernández</span> 
                            <span class="testimonials__pos">Líder</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <!--<section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contactanos</h3>
                <h1 class="display-2 display-2--light">Escribenos tu proyecto o simplemete Saludanos.</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Envianos un mensaje</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Tu nombre" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Tu correo electronico" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Tema" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Tu mensaje" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Enviar</button>
                        <div class="submit-loader">
                            <div class="text-loader">Enviando...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!--<!- contact-warning -->
                <!--<div class="message-warning">
                Algo salió mal. Inténtalo de nuevo
                </div> 
            
                <!-- contact-success -->
                <!--<div class="message-success">
                    Su mensaje fue enviado, gracias!<br>
                </div>

            </div> <!-- end contact-primary -->

           <!-- <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Información del contacto</h3>

                    <div class="cinfo">
                        <h5>Dónde encontrarnos</h5>
                        <p>
                            Colonia. Valle Delta<br>
                            Melos 111-A<br>
                            LEÓN GUANAJUATO, MÉX. 
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Envíenos un email a</h5>
                        <p>
                            contac@worldconected.com.mx<br>
                            info@worldconected.com.mx
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Llámanos a</h5>
                        <p>
                            Phone: (+52) 477-542-34-26<br>
                            Mobile: (+52) 477-108-6332<br>
                            
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>

        <div class="row footer-main">

            <!---
            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt. Quaerat voluptas autem necessitatibus vitae aut.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Quia quo qui sed odit. Quaerat voluptas autem necessitatibus vitae aut non alias sed quia. Ut itaque enim optio ut excepturi deserunt iusto porro.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div>

            </div>

        </div> <!-- end footer-main --> 

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Corporativo WOrld COnected 2019</span> 
                    

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>