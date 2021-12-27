   @extends('layouts.main')
   @section('content')
   <!-- page wrapper -->
    <div class="page-wrapper">
        <!-- Header Main Area -->
        <header class="site-header header-style-1">
            <div class="pre-header">
                <div class="container">
                    <div class="d-flex justify-content-between  align-items-center">
                        <div class="pre-header-left">
                            <ul class="top-contact">
                                <li><i class="optico-icon-location-pin"></i>CRA 1D BIS # 61A - 94 </li>
                            </ul>
                        </div>
                        <div class="pre-header-right">
                            <ul class="top-contact d-inline">
                                <li><i class="optico-icon-clock"></i>Lun - Sab 8.00 AM - 5:00 PM </li>
                            </ul>
                            <ul class="social-icons d-inline">
                                <li><a target="_blank" href="#" data-tooltip="Facebook"><i class="optico-icon-facebook"></i></a></li>
                                <li><a target="_blank" href="#" data-tooltip="Twitter"><i class="optico-icon-twitter"></i></a></li>
                                <li><a target="_blank" href="#" data-tooltip="Flickr"><i class="optico-icon-flickr"></i></a></li>
                                <li><a target="_blank" href="#" data-tooltip="LinkedIn"><i class="optico-icon-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-header-menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <div class="site-branding flex-grow-1">
                                    <a href="index.html">
                                        <img class="logo-img" alt="optico" src="images/logo-dark.png">
                                    </a>
                                </div>                                
                                <div class="site-navigation ml-auto">
                                    <nav class="main-menu navbar-expand-xl navbar-light">
                                        <div class="navbar-header">
                                            <!-- Togg le Button -->
                                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="fa fa-bars"></span>
                                            </button>
                                        </div>
                                        <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                            <ul class="navigation clearfix">
                                                <li><a href="/">Inicio</a></li>
                                                <li><a href="#">Contacto</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="menu-right-box d-flex align-items-center">
                                    <div class="header-button">
                                        <a href="#" class="btn btn-outline">cita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Main Area End Here -->

        <!-- page content -->
        <div class="page-content">

            <!-- Banner -->
            <section class="home-banner home-slider-first">
                <div id="Bannerslider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="images/banner/banner-01.jpg" alt="..." />
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-8  col-8">
                                            <span class="shapewrapper-inner anim-1">ESPECIALISTA EN CUIDADO DE LOS OJOS</span>
                                            <h1 class="anim-2">Servicio que te hará <br/><strong>vernos con nuevos ojos</strong></h1>
                                            <div class="tagline anim-3 d-none d-sm-block">Brindamos siempre nuestros mejores servicios</div>
                                            <div class="d-none d-sm-block mt-4"><a href="#" class="btn anim-3">Whatsapp </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="images/banner/banner-02.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-md-7  col-sm-8 col-8">
                                            <span class="shapewrapper-inner anim-1">Material de calidad</span>
                                            <h1 class="anim-2">Dale la comodidad y la seguridad <br/><strong>que tus ojos necesitan.</strong></h1>
                                            <div class="tagline anim-3 d-none d-sm-block">Garantia en todos nuestros productos</div>
                                            <div class="d-none d-sm-block mt-4"><a href="#" class="btn anim-3">llamanos </a></div>>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#Bannerslider" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#Bannerslider" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </section>
            <!-- Banner End -->

            <!-- Features -->
            <section class="intro-section bg-lightgrey">
                <div class="container">
                    <div class="row no-gutters bg-white box-shadow-01">
                        <div class="col-md-3 iconbox-border">
                            <div class="iconbox iconbox-style-3">
                                <div class="iconbox-inner">
                                    <div class="iconbox-icon skincolor">
                                        <i class="flaticon-icon flaticon-eye"></i>
                                    </div>
                                    <div class="iconbox-contents">
                                        <div class="iconbox-title">
                                            <h2>Cuidado de los ojos</h2>
                                        </div>
                                        <div class="iconbox-desc">
                                            <p>Mejoramos tu visión y tu calidad de vida, con nuestras gafas medicadas   .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 iconbox-border">
                            <div class="iconbox iconbox-style-3">
                                <div class="iconbox-inner">
                                    <div class="iconbox-icon skincolor">
                                        <i class="flaticon-icon flaticon-testing-glasses"></i>
                                    </div>
                                    <div class="iconbox-contents">
                                        <div class="iconbox-title">
                                            <h2>Niños</h2>
                                        </div>
                                        <div class="iconbox-desc">
                                            <p>Cuida tus niños asi como lo hacemos nosotros, la mejor atención para ellos.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 iconbox-border">
                            <div class="iconbox iconbox-style-3">
                                <div class="iconbox-inner">
                                    <div class="iconbox-icon skincolor">
                                        <i class="flaticon-icon flaticon-glasses"></i>
                                    </div>
                                    <div class="iconbox-contents">
                                        <div class="iconbox-title">
                                            <h2>Marcos</h2>
                                        </div>
                                        <div class="iconbox-desc">
                                            <p>Gran variedad disponible para elegir: colores, marcas, tamaños. lo mejor y a la moda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="iconbox iconbox-style-3">
                                <div class="iconbox-inner">
                                    <div class="iconbox-icon skincolor">
                                        <i class="flaticon-icon flaticon-contact-lens-3"></i>
                                    </div>
                                    <div class="iconbox-contents">
                                        <div class="iconbox-title">
                                            <h2>¿Consulta gratuita?</h2>
                                        </div>
                                        <div class="iconbox-desc">
                                            <p>Consulta gratuita para el examen previo, si se compran los lentes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Features end -->

            <!-- Welcome -->
            <section class="bg-lightgrey welcome-company">
                <div class="container">
                    <div class="row align-items-lg-center align-items-md-end">
                        <div class="col-md-12 col-lg-6">
                            <img src="images/img-01-new.png" class="img-fluid" alt="optometria para niños" />
                        </div>
                        <div class="col-md-12 col-lg-6 mt-sm-30 pb-50">
                            <div class="section-title mt-md-50">
                                <h4 class="subheading skincolor">BIENVENIDO A OPTICENTER</h4>
                                <h2>PRESERVAMOS, MEJORAMOS Y  <strong> PROTEGEMOS SU VISIÓN</strong></h2>
                            </div>
                            <p>
                                No eres nada sin tus ojos, 
                                <a class="opt-underline-dotted"
                                    href="https://www.masvision.es/blog/salud-visual/10-consejos-prevenir-miopia/"
                                    target="_blank">
                                    protegelos
                                </a>
                               con habitos saludables, visitanos y recibe los mejores tips y cuidados de opticenter.
                            </p>
                            <p>
                                <a class="opt-underline-dotted" 
                                    href="https://www.infosalus.com/salud-investigacion/noticia-diez-consejos-cuidar-vista-20150216135142.html"
                                    target="_blank">
                                    Cuida tus ojos,
                                </a> lo hacemos por ti, para que veas y te sientas bien.</p>
                            <div class="d-none d-sm-block mt-4"><a href="#" class="btn anim-3">BUTTON </a></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Welcome end -->

            <!-- About Vision -->
            <section class="section-md">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 pr-4">
                            <div class="section-title with-lead">
                                <h4 class="subheading skincolor">SU VISIÓN ES NUESTRA VISIÓN</h4>
                                <h2>NO SOLO ATENCIÓN, SINO<strong> UNA <br/>MEJOR EXPERIENCIA DE ATENCIÓN</strong></h2>
                                <div class="lead">
                                    Estamos pendientes antes y despues del proceso ocular, siempre atentos a las 
                                    preguntas de nuestros clientes, acompañamiento constante durante el proceso,
                                    asesoria y precios accesibles.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="iconbox iconbox-style-2">
                                        <div class="iconbox-inner">
                                            <div class="iconbox-contents">
                                                <div class="iconbox-title">
                                                    <h2>Médicos Calificados</h2>
                                                </div>
                                                <div class="iconbox-desc">
                                                    <p>Expertos dedicados al cuidado y proteccion ocular.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="iconbox iconbox-style-2">
                                        <div class="iconbox-inner">
                                            <div class="iconbox-contents">
                                                <div class="iconbox-title">
                                                    <h2>Equipamiento moderno</h2>
                                                </div>
                                                <div class="iconbox-desc">
                                                    <p>Marcos de excelente calidad, diversos para damas y caballeros.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="iconbox iconbox-style-2">
                                        <div class="iconbox-inner">
                                            <div class="iconbox-contents">
                                                <div class="iconbox-title">
                                                    <h2>Ayuda de emergencia</h2>
                                                </div>
                                                <div class="iconbox-desc">
                                                    <p>clinicas para tratamientos quirurjicos oftalmologicos</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="iconbox iconbox-style-2">
                                        <div class="iconbox-inner">
                                            <div class="iconbox-contents">
                                                <div class="iconbox-title">
                                                    <h2>Enfoque individual</h2>
                                                </div>
                                                <div class="iconbox-desc">
                                                    <p>Personalice sus lentes y adquiera la protección que necesitas.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-md-30 text-md-center mb-lg-30">
                            <img src="images/01.jpg" class="img-fluid img-shadow" alt="viendo full" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Vision end -->

            <!-- Why Choose Us -->
            <section class="counter-section white-color">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="play-video align-items-center d-flex white-color">
                                <a 
                                    target="_blank"
                                    href="https://www.youtube.com/watch?v=smhKRoLLvDQ&list=PL5n65gEBgEz3r2V_Stvaqe9UxS87XfSOR&index=2"
                                >
                                    <i class="themifyicon ti-control-play"></i>
                                </a>
                                <h4>Más allá de los lentes</h4>
                            </div>
                            <div class="section-title section-title-white pt-4 mt-2">
                                <h4 class="subheading">POR QUÉ ELEGIRNOS</h4>
                                <h2>CALIDAD EN NUESTROS<strong> MARCOS Y LENTES</strong></h2>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 pt-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="db-fid inside db-fid-boxstyle-style2 db-fidbox-style-2">
                                        <div class="db-fld-contents">
                                            <div class="db-circle-outer" data-digit="97" data-fill="#fff" data-before="" data-before-type="sup" data-after="<sub>%</sub>" data-after-type="sub" data-size="145" data-emptyfill="#000301" data-thickness="7" data-gradient="">
                                                <div class="db-circle-w">
                                                    <div class="db-circle"></div>
                                                    <div class="db-circle-overlay">
                                                        <div class="db-circle-number"></div>
                                                    </div>
                                                </div>
                                                <div class="db-fid-title-w">
                                                    <h3 class="db-fid-title"><span>Doctores Expertos</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="db-fid inside db-fid-boxstyle-style2 db-fidbox-style-2">
                                        <div class="db-fld-contents">
                                            <div class="db-circle-outer" data-digit="99" data-fill="#fff" data-before="" data-before-type="sup" data-after="<sub>%</sub>" data-after-type="sub" data-size="145" data-emptyfill="#000301" data-thickness="7" data-gradient="">
                                                <div class="db-circle-w">
                                                    <div class="db-circle"></div>
                                                    <div class="db-circle-overlay">
                                                        <div class="db-circle-number"></div>
                                                    </div>
                                                </div>
                                                <div class="db-fid-title-w">
                                                    <h3 class="db-fid-title"><span>Trabajo de calidad</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="db-fid inside db-fid-boxstyle-style2 db-fidbox-style-2">
                                        <div class="db-fld-contents">
                                            <div class="db-circle-outer" data-digit="95" data-fill="#fff" data-before="" data-before-type="sup" data-after="<sub>%</sub>" data-after-type="sub" data-size="145" data-emptyfill="#000301" data-thickness="7" data-gradient="">
                                                <div class="db-circle-w">
                                                    <div class="db-circle"></div>
                                                    <div class="db-circle-overlay">
                                                        <div class="db-circle-number"></div>
                                                    </div>
                                                </div>
                                                <div class="db-fid-title-w">
                                                    <h3 class="db-fid-title"><span>Equipo dedicado</span></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Why Choose Us end -->

            <!-- Our Service -->
            <section class="section-md">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="section-title text-center">
                                <h4 class="subheading skincolor">NUESTROS SERVICIOS</h4>
                                <h2>UNA AMPLIA GAMA DE<strong><br/> SERVICIOS DE OPTOMETRÍA</strong></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-box service-style-1">
                                <div class="service-thumbnail">
                                    <div class="service-thumbnail-inner">
                                        <img src="images/services/service-01.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <div class="service-inner">
                                        <h3 class="service-box-title"><b>Oftalmología Pediátrica</b></h3>
                                        <div class="service-desc">
                                            <p>Examenes, Cirugias, Diagnósticos, Leciones, Recetas y Fórmulas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-box service-style-1">
                                <div class="service-thumbnail">
                                    <div class="service-thumbnail-inner">
                                        <img src="images/services/service-02.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <div class="service-inner">
                                        <h3 class="service-box-title"><b>Procedimientos quirúrgicos</b></h3>
                                        <div class="service-desc">
                                            <p>Vitrectomía, Láser y Crioterapia, Cerclaje escleral, Retinopexia neumática, etc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-box service-style-1">
                                <div class="service-thumbnail">
                                    <div class="service-thumbnail-inner">
                                        <img src="images/services/service-03.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <div class="service-inner">
                                        <h3 class="service-box-title"><b>Lentes Transitions</b></h3>
                                        <div class="service-desc">
                                            <p>Lentes que se adaptan automáticamente a los cambios de luz</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our Service end -->

            <!-- Appointment -->
            <section class="get-appointment">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h4 class="subheading skincolor">PEDIR CITA</h4>
                                <h2 class="white-color">RESERVA<strong><br/>LA CITA CON UN DOCTOR</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-lightgrey appointment-from">
                <div class="container">
                    <div class="row  box-shadow-02">
                        <div class="col-lg-4 appointment-image">
                        </div>
                        <div class="col-lg-8 appointment-inner">
                            <h3>Nos comunicaremos con usted lo más pronto posible.</h3>
                            <p>Le avisaremos por cualquier canal de comunicación que nos suministres.</p>
                            <div class="contact-form">
                                <form id="formy">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <input 
                                                id="name"
                                                type="text" 
                                                class="form-control"
                                                placeholder="Nombre" 
                                                name="Your-Name"
                                            >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input 
                                                id="email"
                                                type="email"
                                                class="form-control" 
                                                placeholder="Correo Electronico"
                                                name="email" aria-required="true"
                                            >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input
                                                id="phone"
                                                type="number"
                                                class="form-control" 
                                                placeholder="Telefono" 
                                                name="your-phone"
                                            >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input 
                                                id="subject"
                                                type="text"
                                                class="form-control" 
                                                placeholder="Asunto"
                                                name="subject"
                                            >
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <textarea 
                                                id="comment"
                                                class="form-control"
                                                placeholder="Message"
                                                name="message" 
                                                cols="45" 
                                                rows="5" 
                                                aria-required="true"
                                                style="resize: none;"
                                            ></textarea>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit" class="btn">Envia mensaje</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!-- Appointment end -->

            <!-- Counter -->
            <section class="bg-lightgrey section-smt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter counter-style-1">
                                <div class="fld-contents">
                                    <h4 class="counter-contents"> 
                                        <span 
                                            data-appear-animation="animateDigits" 
                                            data-to="10" 
                                            data-interval="1"
                                            data-from="0"
                                            data-before="" 
                                            data-before-style="" 
                                            data-after="" 
                                            data-after-style=""
                                        >
                                    </h4>
                                    <h6 class="counter-title">
                                        <span>Años de experiencia</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter counter-style-1">
                                <div class="fld-contents">
                                    <h4 class="counter-contents"> 
                                        <span 
                                            data-appear-animation="animateDigits" 
                                            data-to="800" 
                                            data-interval="5"
                                            data-from="0"
                                            data-before="" 
                                            data-before-style="" 
                                            data-after="" 
                                            data-after-style=""
                                        >
                                        </span>
                                    </h4>
                                    <h6 class="counter-title">
                                        <span>Marcos</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter counter-style-1">
                                <div class="fld-contents">
                                    <h4 class="counter-contents"> 
                                        <span 
                                            data-appear-animation="animateDigits" 
                                            data-to="6" 
                                            data-interval="1"
                                            data-from="0"
                                            data-before="" 
                                            data-before-style="" 
                                            data-after="" 
                                            data-after-style=""
                                        >
                                        </span>
                                    </h4>
                                    <h6 class="counter-title">
                                        <span>Servicios Diferentes</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter counter-style-1">
                                <div class="fld-contents">
                                    <h4 class="counter-contents"> 
                                        <span 
                                            data-appear-animation="animateDigits" 
                                            data-to="1600" 
                                            data-interval="5"
                                            data-from="0"
                                            data-before="" 
                                            data-before-style="" 
                                            data-after="" 
                                            data-after-style=""
                                        >
                                        </span>
                                    </h4>
                                    <h6 class="counter-title">
                                        <span>Pacientes Felices</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Counter end -->
    </div>

    <!-- page content End -->
    </div>
    
    <!-- page wrapper End -->
    <!-- Search Box Start Here -->
    <div class="ts-search-overlay">
        <div class="ts-icon-close"></div>
        <div class="ts-search-outer">
            <div class="ts-search-logo"><img alt="optico" src="images/logo-white.png" /></div>
            <form class="ts-site-searchform">
                <input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
                <button type="submit"><span class="optico-icon-search"></span></button>
            </form>
        </div>
    </div>
    <!-- Search Box End Here -->

    <!-- JS
        ============================================ -->

    <!-- jQuery JS -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script async src="js/bootstrap.min.js"></script>
    <!-- jquery Waypoints JS -->
    <script src="js/jquery-waypoints.js"></script>
    <!-- jquery Appear JS -->
    <script src="js/jquery.appear.js"></script>
    <!-- Numinate JS -->
    <script async src="js/numinate.min.js"></script>
    <!-- Slick JS -->
    <script src="js/slick.min.js"></script>
    <!-- PrettyPhoto JS -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- Circle Progress JS -->
    <script src="js/circle-progress.js"></script>
    <!-- Event Move JS -->
    <script src="js/jquery.event.move.js"></script>
    <!-- Twentytwenty JS -->
    <script src="js/jquery.twentytwenty.js"></script>
    <!-- Scripts JS -->
    <script src="js/scripts.js"></script>
    {{-- Form --}}
    <script defer src={{ asset('js/forms/citas/agenda.js') }}></script>
    @endsection