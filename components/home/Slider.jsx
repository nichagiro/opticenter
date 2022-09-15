import React from 'react';
import Image from 'next/image';

const Slider = () => {
    return (
        <section className="home-banner home-slider-first">
            <div id="Bannerslider" className="carousel slide" data-ride="carousel">
                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <Image
                            className="img-fluid"
                            src="/images/banner/banner-01.webp"
                            alt="opticenter"
                            height={750}
                            width={1900}
                            priority={true}
                        />
                        <div className="carousel-caption">
                            <div className="container">
                                <div className="row">
                                    <div className="col-xl-6 col-lg-7 col-md-7 col-sm-8  col-8">
                                        <span className="shapewrapper-inner anim-1">ESPECIALISTA EN CUIDADO DE LOS OJOS</span>
                                        <h1 className="anim-2">Servicio que te hará <br /><strong>vernos con nuevos ojos</strong></h1>
                                        <div className="tagline anim-3 d-none d-sm-block">Brindamos siempre nuestros mejores servicios</div>
                                        <div className="d-none d-sm-block mt-4">
                                            <a href="https://wa.me/573174117065" target="_blank" className="btn anim-3">WhatsApp </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <Image
                            className="img-fluid"
                            src="/images/banner/banner-02.webp"
                            alt="opticenter"
                            height={750}
                            width={1900}
                        />
                        <div className="carousel-caption">
                            <div className="container">
                                <div className="row">
                                    <div className="col-xl-6 col-lg-7 col-md-7  col-sm-8 col-8">
                                        <span className="shapewrapper-inner anim-1">Material de calidad</span>
                                        <h1 className="anim-2">Dale la comodidad y la seguridad <br /><strong>que tus ojos necesitan.</strong></h1>
                                        <div className="tagline anim-3 d-none d-sm-block">Garantía en todos nuestros productos</div>
                                        <div className="d-none d-sm-block mt-4">
                                            <a href="tel:3174117065" className="btn anim-3">llamanos </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* <!-- Left and right controls --> */}
                <a className="carousel-control-prev" href="#Bannerslider" data-slide="prev">
                    <span className="carousel-control-prev-icon"></span>
                </a>
                <a className="carousel-control-next" href="#Bannerslider" data-slide="next">
                    <span className="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
    )
}

export default Slider