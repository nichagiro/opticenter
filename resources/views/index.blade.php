<!DOCTYPE html>
<html lang="es">
<head>
    {{-- SEO BASICS --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="maquillaje, cosmeticos, productos de belleza, regalos de maquillaje, cuidado de la piel, maquillaje para niñas, maquillaje de ojos, maquillaje sencillo, productos de maquillaje">
    <meta name="description" content="Opticenter la mejor optica del norte, gafas y lentes medicados, examen ocular gratuito, marcos de todo tipo y al mejor estilo, oftometria y oftalmologia.">
    <meta name="subject" content="Lentes">
    <meta name="author" content="Nicolas Chamorro">
    <meta name="copyright" content="© OPTICENTER">
    <meta name="language" content="es">
    <meta name="revisit-after" content="7 days">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" >
    <link rel="canonical" href="{{env('APP_URL')}}">
    <title>Opticenter | Marcos | Optometria | Oftamologia | La mejor optica del norte</title>
    {{-- TWITTWER --}}
    <meta name="twitter:card" content="summary" />	
    <meta name="twitter:title" content="Opticenter | Marcos | Optometria | Oftamologia | La mejor optica del norte" >
    <meta name="twitter:description" content="Opticenter la mejor optica del norte, gafas y lentes medicados, examen ocular gratuito, marcos de todo tipo y al mejor estilo, oftometria y oftalmologia." >
    <meta name="twitter:image" content="{{ asset('images/services/service-03.webp') }}" >
    <meta name="twitter:site" content="@Nicolas63783814" >
    <meta name="twitter:creator" content="@Nicolas63783814" >
    {{-- Open Graph  --}}    
    <meta property="og:title" content="Opticenter | Marcos | Optometria | Oftamologia | La mejor optica del norte"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{env('APP_URL')}}"/>
    <meta property="og:site_name" content="{{env('APP_NAME')}}"/>
    <meta property="og:image" content="{{ asset('images/services/service-03.webp')}}"/>
    <meta property="og:image:alt" content="gafas opticenter"/>	
    <meta property="og:description" content="Opticenter la mejor optica del norte, gafas y lentes medicados, examen ocular gratuito, marcos de todo tipo y al mejor estilo, oftometria y oftalmologia."/>
    {{-- INTEGRAR LAS REDES --}}
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Opticenter",
            "url": "https://opticenter.com.co/",
            "address": "CRA 1D BIS #61A - 94",
            "sameAs": [
                "https://www.instagram.com/opticenteroficial/",
                "https://linkedin.com/in/nicolas-chamorro-9aa594196",
                "https://www.facebook.com/nichagiro/"
            ]
        }
    </script>
    {{-- STRUCTURE DATA --}}
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "headline": "Article headline",
      "image": [
        "https://opticenter.com.co/images/services/service-03.webp",
        "https://opticenter.com.co/images/services/service-02.webp",
        "https://opticenter.com.co/images/services/service-01.webp"
       ],
      "datePublished": "2022-02-04T22:00:00+08:00",
      "dateModified": "2022-02-04T22:00:00+08:00",
      "author": [{
          "@type": "Organization",
          "name": "Opticenter",
          "url": "https://opticenter.com.co"
        },{
            "@type": "Organization",
            "name": "Overweb",
            "url": "https://overweb.com.co"
          },{
          "@type": "Person",
          "name": "Nicolas Chamorro Giron",
          "url": "https://nichagiro.github.io"
      }]
    }
    </script>
    {{-- TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logoOpticenter.PNG') }} ">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- optico Icons -->
    <link rel="stylesheet" href="{{asset('css/optico-icons.css')}}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- Slick Theme -->
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <!-- Pretty Photo -->
    <link rel="stylesheet" href="{{asset('css/prettyPhoto.css')}}">
    <!-- Twentytwenty -->
    <link rel="stylesheet" href="{{asset('css/twentytwenty.css')}}">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="{{asset('css/shortcode.css')}}">
    <!-- Base CSS -->
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swapdefer " rel="stylesheet">
</head>
<body>
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
                                <li>
                                    <a target="_blank" 
                                        href="https://www.instagram.com/opticenteroficial/" 
                                        data-tooltip="Instagram"
                                    >
                                        <i class="optico-icon-instagram"></i>
                                    </a>
                                </li>
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
                                    <a href="/">
                                        <img loading="lazy" class="logo-img" alt="opticenter" src={{ asset('images/logoOpticenter.webp') }}>                                        
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
                                                <li><a href="#Bannerslider">Inicio</a></li>
                                                <li><a href="#footer">Contacto</a></li>
                                                <li class="d-lg-none"><a href="#cita">cita</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div class="menu-right-box d-flex align-items-center">
                                    <div class="header-button">
                                        <a href="#cita" class="btn btn-outline">cita</a>
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
                            <img loading="lazy" class="img-fluid" src="{{asset('images/banner/banner-01.webp')}}" alt="opticenter" />
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-8  col-8">
                                            <span class="shapewrapper-inner anim-1">ESPECIALISTA EN CUIDADO DE LOS OJOS</span>
                                            <h1 class="anim-2">Servicio que te hará <br/><strong>vernos con nuevos ojos</strong></h1>
                                            <div class="tagline anim-3 d-none d-sm-block">Brindamos siempre nuestros mejores servicios</div>
                                            <div class="d-none d-sm-block mt-4">
                                                <a href="https://wa.me/573174117065" target="_blank" class="btn anim-3">WhatsApp </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img loading="lazy" class="img-fluid" src="{{asset('images/banner/banner-02.webp')}}" alt="opticenter">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7 col-md-7  col-sm-8 col-8">
                                            <span class="shapewrapper-inner anim-1">Material de calidad</span>
                                            <h1 class="anim-2">Dale la comodidad y la seguridad <br/><strong>que tus ojos necesitan.</strong></h1>
                                            <div class="tagline anim-3 d-none d-sm-block">Garantia en todos nuestros productos</div>
                                            <div class="d-none d-sm-block mt-4">
                                                <a href="tel:3174117065" class="btn anim-3">llamanos </a>
                                            </div>
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
                                            <p>Mejoramos tu visión y tu calidad de vida, con nuestras gafas medicadas.</p>
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
                                            <p>Cuida tus niños así como lo hacemos nosotros, la mejor atención para ellos.</p>
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
                                            <p>Gran variedad disponible para elegir: colores, marcas, tamaños; Lo mejor y a la moda.</p>
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
                            <img loading="lazy" src="{{asset('images/img-01-new.webp')}}" class="img-fluid" alt="optometria para niños" />
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
                                    protégelos
                                </a>
                                con hábitos saludables, visítanos y recibe los mejores tips y cuidados de opticenter.
                            </p>
                            <p>
                                <a class="opt-underline-dotted" 
                                    href="https://www.infosalus.com/salud-investigacion/noticia-diez-consejos-cuidar-vista-20150216135142.html"
                                    target="_blank">
                                    Cuida tus ojos,
                                </a> lo hacemos por ti, para que veas y te sientas bien.</p>
                            <div class="d-none d-sm-block mt-4">
                                <a  href="https://www.google.com/maps/place/Opticenter/@3.4739793,-76.495721,17z/data=!3m1!4b1!4m5!3m4!1s0x8e30a87fc3b56b2f:0x1f6deaf194d84ef5!8m2!3d3.4739793!4d-76.4935323" 
                                    class="btn anim-3"
                                    target="_blank"    
                                >
                                    VISÍTANOS
                                </a>
                            </div>
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
                                    Estamos pendientes antes y después del proceso ocular, siempre atentos a las 
                                    preguntas de nuestros clientes, acompañamiento constante durante el proceso,
                                    asesoría y precios accesibles.
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
                                                    <p>clínicas para tratamientos quirúrgicos oftalmológicos</p>
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
                            <img loading="lazy" src="{{asset('images/01.webp')}}" class="img-fluid img-shadow" alt="cuida tus ojos" />
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
            <section class="section-md" id="services">
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
                                        <img 
                                            loading="lazy" 
                                            src="{{asset('images/services/service-01.webp')}}"
                                            class="img-fluid"       
                                            alt="oftamologia">
                                    </div>
                                </div>
                                <div class="service-content">
                                    <div class="service-inner">
                                        <h3 class="service-box-title"><b>Oftalmología Pediátrica</b></h3>
                                        <div class="service-desc">
                                            <p>Exámenes, Cirugías, Diagnósticos, Lesiones, Recetas y Fórmulas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="service-box service-style-1">
                                <div class="service-thumbnail">
                                    <div class="service-thumbnail-inner">
                                        <img 
                                            loading="lazy"
                                            src="{{asset('images/services/service-02.webp')}}" 
                                            class="img-fluid"
                                            alt="opticenter">
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
                                        <img 
                                            src="{{asset('images/services/service-03.webp')}}" 
                                            class="img-fluid" 
                                            alt="lentes transitions"
                                            loading="lazy"
                                        >
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
            <section id="cita" class="get-appointment">
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
                                                name="name"
                                                required
                                                minlength="4"
                                            >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input 
                                                id="email"
                                                type="email"
                                                class="form-control" 
                                                placeholder="Correo Electrónico"
                                                name="email" aria-required="true"
                                                required
                                                minlength="10"
                                            >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input
                                                id="phone"
                                                type="number"
                                                class="form-control" 
                                                placeholder="Teléfono" 
                                                name="phone"
                                                required
                                            >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input
                                            id="subject"
                                            type="text"
                                            class="form-control" 
                                            placeholder="Asunto" 
                                            name="subject"
                                            required
                                            minlength="4"
                                            >
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <textarea 
                                                id="comment"
                                                class="form-control"
                                                placeholder="Mensaje"
                                                name="message" 
                                                cols="45" 
                                                rows="5" 
                                                aria-required="true"
                                                style="resize: none;"
                                                required
                                                maxlength="5000"
                                            ></textarea>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button 
                                                type="submit" 
                                                id="btn-agenda" 
                                                class="btn">
                                                Envía mensaje
                                            </button>
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
     <!-- footer -->
    <footer class="footer site-footer" id="footer">
        <div class="footer-top skin-bg-color">
            <div class="container">
                <div class="row d-flex white-color align-items-center">
                    <div class="col-lg-8">
                        <div class="iconbox iconbox-style-6">
                            <div class="iconbox-inner d-flex">
                                <div class="iconbox-icon">
                                    <i class="themifyicon ti-headphone-alt"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                            <h2>
                                                Si tienes alguna pregunta, duda o inquietud
                                                <strong>
                                                    puedes mandarnos un mensaje o incluso pedir la cita
                                                    vía WhatsApp.
                                                </strong>
                                            </h2>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-md-30 text-lg-right">
                        <a  href="https://wa.me/+573174117065?text=Quiero%20pedir%20mi%20cita" 
                            class="btn btn-dark"
                            target="_blank"
                        >
                            Cita WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-4 mb-md-5 d-md-flex justify-content-center">
                    <div>
                        <div class="footerlogo mb-4 text-md-center text-lg-left">
                            {{-- <img loading="lazy" src="images/logo-dark.png" alt="opticenter"> --}}
                            <h2 style="font-weight: 900">Opticenter</h2>
                        </div>
                        <p class="mb-0">
                            Consultorio optométrico, venta de lentes oftálmicos y lentes de contacto,
                            monturas nacionales e importadas oftálmicas y de sol.
                        </p>
                        <div class="social-links-wrapper d-md-none d-lg-block">
                            <ul class="social-icons">
                                <li>
                                    <a href="https://www.instagram.com/opticenteroficial/" 
                                        class="tooltip-top"
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        data-tooltip="Instagram"
                                        target="_blank"
                                    >
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>                    
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mt-md-30 d-md-flex justify-content-center">
                    <div>
                        <h6 class="footer-widget-title">Nuestros Servicios</h6>
                        <ul class="list-unstyled footer-link-list">
                            <li><a>Lentes Transitions</a></li>
                            <li><a>Cirugía ocular con láser</a></li>
                            <li><a>Corrección de la visión</a></li>
                            <li><a>Exámenes y valoraciones</a></li>
                            <li><a>Lentes Antireflejo</a></li>
                            <li><a>Convenios Empresariales</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 address-box mt-md-30 d-md-flex justify-content-center">
                    <div>
                        <h6 class="footer-widget-title">Encuentranos</h6>
                        <div class="d-flex">
                            <i class="optico-icon-location-pin"></i>
                            <p><strong>OPTICENTER</strong>
                                <br/>CRA 1D BIS #61A - 94</p>
                        </div>
                        <div class="d-flex">
                            <i class="optico-icon-mobile"></i>
                            <p>(+57) 317 411 7065 </p>
                        </div>
                        <div class="d-flex">
                            <i class="optico-icon-comment-1"></i>
                            <p>info@opticenter.com</p>
                        </div>
                        <div class="d-flex">
                            <i class="optico-icon-clock"></i>
                            <div>
                                <p >Lun - Vie 8.00 AM - 6:00 PM</p> 
                                <p>Lun - Sab 8.00 AM - 5:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        Copyright © 2021 
                        <a href="https://overweb.com.co" target="_blank">OVERWEB</a>
                        . All rights reserved.
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- page wrapper End -->

    <div id="notify"></div>
    <a class="whatsapp" href="https://wa.me/573174117065">
        <i class="fa fa-whatsapp fa-4x" aria-hidden="true"></i>
    </a>

    <!-- jQuery JS -->
    <script defer src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Popper JS -->
    <script defer src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script defer src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- jquery Waypoints JS -->
    <script defer src="{{asset('js/jquery-waypoints.js')}}"></script>
    <!-- jquery Appear JS -->
    <script defer src="{{asset('js/jquery.appear.js')}}"></script>
    <!-- Numinate JS -->
    <script defer src="{{asset('js/numinate.min.js')}}"></script>
    <!-- Slick JS -->
    <script defer src="{{asset('js/slick.min.js')}}"></script>
    <!-- PrettyPhoto JS -->
    <script defer src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <!-- Circle Progress JS -->
    <script defer src="{{asset('js/circle-progress.js')}}"></script>
    <!-- Event Move JS -->
    <script defer src="{{asset('js/jquery.event.move.js')}}"></script>
    <!-- Twentytwenty JS -->
    <script defer src="{{asset('js/jquery.twentytwenty.js')}}"></script>
    <!-- Scripts JS -->
    <script defer src="{{asset('js/scripts.js')}}"></script>
    {{-- Form --}}
    <script defer src={{ asset('js/forms/citas/agenda.js') }}></script>
</body>
</html>