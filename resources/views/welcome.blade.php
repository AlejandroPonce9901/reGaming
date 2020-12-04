<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>ReGaming</title>
    <link rel="shortcut icon" href="images/iconorg.jpeg">.
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header" style="
    padding-top: 10px;
">

        <div class="display-99">
            <a class="site-logo" href="index.html" style="
    border-top-width: 10px;
    padding-left: 10px;
">
                ReGaming
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Cerrar</span></a>

            <div class="header-nav__content">
                <h3>Menu reGaming</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Inicio</a></li>
                    <li><a class="smoothscroll"  href="#Inicio" title="¿Quiénes somos?">¿Quiénes somos?</a></li>
                    <li><a class="smoothscroll"  href="#Filosofia" title="Filosofia ReGaming">Filosofía ReGaming
                    </a></li>
                    <li><a class="smoothscroll"  href="#productos" title="productos">Productos</a></li>
                   <!-- //<li><a class="smoothscroll"  href="#clients" title="Personal ReGAming">Personal Técnico de ReGAming</a></li>-->
                    <li><a class="smoothscroll"  href="#contact" title="contacto">Contacto</a></li>
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
                <p>Hola Chico Gamer tenemos todo tipo de producto clasico que te imagines, si lo piensas lo encuentras. <br> Síguenos en todas nuestras redes sociales debajo</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <!--<li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>-->
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
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/001.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main" style="
    padding-top: 100px;
">

                <h1><center><img src="images/iconorg.jpeg" alt="Homepage" style="
    width: 300px;"><br>Bienvenido a ReGAming</center></h1>
                

                <h3>
                    Somos una empresa dedicada a la compra y venta de productos gamer, en especial, videojuegos clásicos, consolas y accesorios
                </h3>

                <div class="home-content__buttons">
                    <a href="#productos" class="smoothscroll btn btn--stroke">
                        Productos
                    </a>
                    <a href="#Inicio" class="smoothscroll btn btn--stroke">
                        Nosotros
                    </a>
                    <a href="#Filosofia" class="smoothscroll btn btn--stroke">
                        Filosofía
                    </a>
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        Contáctanos
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#Inicio" class="scroll-link smoothscroll">
                    <span>DESPLAZARTE HACÍA ABAJO</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <!--<li>
                <a href="#0"><i class="fa fa-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i><span>Dribbble</span></a>
            </li>-->
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='Inicio' class="s-about" style="
    padding-top: 50px;
">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">HOLA CHICO(A) GAMER</h3>
                <h1 class="display-1 display-1--light">Nosotros Somos ReGAming</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <p>
                Nuestro personal está compuesto por técnicos informáticos que realizan mantenimiento a consolas clásicas que la empresa adquiere por parte de nuestros propios clientes

                La empresa ReGaming ubicada en la ciudad de León Guanajuato desea ser una tienda de prestigio donde puedas vender y adquirir productos con total confianza ya que tenemos el compromiso de mantener los productos revisados y en perfectas condiciones. 
                </p>
            </div>
        </div> <!-- end about-desc -->

        <!--<div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">127</div>
                <h5>Awards Received</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1505</div>
                <h5>Cups of Coffee</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">109</div>
                <h5>Projects Completed</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">102</div>
                <h5>Happy Clients</h5> 
            </div>
        -->

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='Filosofia' class="s-services" style="
    padding-top: 50px;
">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">¡COMPROMISO CON EL CLIENTE!</h3>
                <h1 class="display-2">Filosofía ReGAming</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

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
    <section id='productos' class="s-works" style="
    padding-bottom: 0px;
" >

        <div class="intro-wrap" style="
    padding-top: 50px;
    padding-bottom: 0px;
">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">PRODUCTOS </h3>
                    <h1 class="display-2 display-2--light">Bienvenido a nuestra Galería de Productos</h1>
                </div>
            </div> <!-- end section-header -->
            
            
           

        
        <table class="table table-striped" style="
            padding-left: 20px;
            padding-right: 20px; width: 100%;">
            <tr>
            @php  $x = 1;   @endphp
                @foreach($tablecProductos as $rowProducto) 
                @if($rowProducto->cantidad)
                    @if($rowProducto->venta)  
                        @php  $x++;   @endphp 
                            <td style=" padding-left: 30px; padding-right: 30px;"><a>{{$rowProducto->nombre}}</a><br>
                            <a>
                            <div class="masonry__brick">
                                <div class="item-folio"> 
                                    <div class="item-folio__thumb">
                                        <a href="{{ asset('storage/'.$rowProducto->imgNombreFisico )}}" class="thumb-link" title="{{$rowProducto->nombre}}" data-size="1720x1020">
                                            <img src="{{ asset('storage/'.$rowProducto->imgNombreFisico )}}" 
                                                srcset="{{ asset('storage/'.$rowProducto->imgNombreFisico )}} 1x, {{ asset('storage/'.$rowProducto->imgNombreFisico )}} 2x" alt="" style="border-radius: 8px;">
                                        </a>
                                        <div class="item-folio__caption">
                                            <a>
                                                {{$rowProducto->nombre}}
                                            </a>
                                            <p>PRECIO: MXN ${{$rowProducto->precio}}</p>
                                            <p>Descripción: {{$rowProducto->descripcion}}</p>                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a> <br>
                        <a>MXN ${{$rowProducto->precio}}</a><br>
                            </td>
                            @if($x>5)
                                </tr>@php $i=1; $i++; @endphp
                                <tr>
                                @php $x=1; @endphp
                            @endif
                    @endif
                @endif    
                @endforeach
            </tr>
            
        </table>


                   

</section>        
    


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact" style="
    padding-top: 50px;
">

        <div class="overlay" style="
    padding-top: 50px;
"></div>
        

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contactanos</h3>
                <h1 class="display-2 display-2--light" style="
    color: white;
">Escríbenos tu proyecto o simplemete Salúdanos</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up" >
            
            <div class="contact-primary">

            <h3 class="h6">Envianos un mensaje</h3>
                {{ HTML::ul($errors->all()) }}

                {{ Form::open(array('url' => 'contactos')) }}

                
    
                    <div class="form-group" >
                        {{ Form::label('name', 'Nombre y Apellido') }}
                        {{ Form::text('name', Request::old('name'), 
                           array('class' => 'form-control', 'required'=>true)) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('asunto', 'Asunto') }}
                        {{ Form::text('asunto', Request::old('asunto'), 
                        array('class' => 'form-control', 'required'=>true)) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('problema', 'Mensaje') }} 
                        {{ Form::textArea('problema', Request::old('problema'),
                        array('class' => 'form-control', 'required'=>true, 
                        'maxlength'=> 200, 'rows'=>2)) }}</div>
                    <div class="form-group">
                        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>
                    <div class="form-group">
                        {{ Form::submit('Registrar mensaje', array('class' => 'btn btn-primary')) }}
                        <div class="submit-loader">
                            <div class="text-loader">Enviando...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    {{ Form::close() }}
                <!-- contact-warning -->
                <div class="message-warning">
                Algo salió mal. Inténtalo de nuevo
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Su mensaje fue enviado, gracias!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Información de Contacto</h3>

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
                            regaming.support@gmail.com
                            
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Llámanos a</h5>
                        <p>
                            Teléfono: (+52) 4775331028
                            
                            
                    </div>

                    <ul class="contact-social">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
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
                    <span>© reGaming 2020</span> 
                    

                <div class="go-top">
                    <a class="smoothscroll" title="Vuelve Arriba" href="#top"><i class="icon-arrow-up" aria-hidden="true"></i></a>
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