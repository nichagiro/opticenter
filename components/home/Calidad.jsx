import React from 'react';

const Calidad = () => {
    return (
        <section className="section-md">
            <div className="container">
                <div className="row">
                    <div className="col-lg-6 pr-4">
                        <div className="section-title with-lead">
                            <h4 className="subheading skincolor">SU VISIÓN ES NUESTRA VISIÓN</h4>
                            <h2>NO SOLO ATENCIÓN, SINO<strong> UNA <br />MEJOR EXPERIENCIA DE ATENCIÓN</strong></h2>
                            <div className="lead">
                                Estamos pendientes antes y después del proceso ocular, siempre atentos a las
                                preguntas de nuestros clientes, acompañamiento constante durante el proceso,
                                asesoría y precios accesibles.
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-6">
                                <div className="iconbox iconbox-style-2">
                                    <div className="iconbox-inner">
                                        <div className="iconbox-contents">
                                            <div className="iconbox-title">
                                                <h2>Médicos Calificados</h2>
                                            </div>
                                            <div className="iconbox-desc">
                                                <p>Expertos dedicados al cuidado y protección ocular.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6">
                                <div className="iconbox iconbox-style-2">
                                    <div className="iconbox-inner">
                                        <div className="iconbox-contents">
                                            <div className="iconbox-title">
                                                <h2>Equipamiento moderno</h2>
                                            </div>
                                            <div className="iconbox-desc">
                                                <p>Marcos de excelente calidad, diversos para damas y caballeros.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-6">
                                <div className="iconbox iconbox-style-2">
                                    <div className="iconbox-inner">
                                        <div className="iconbox-contents">
                                            <div className="iconbox-title">
                                                <h2>Ayuda de emergencia</h2>
                                            </div>
                                            <div className="iconbox-desc">
                                                <p>clínicas para tratamientos quirúrgicos oftalmológicos</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-md-6">
                                <div className="iconbox iconbox-style-2">
                                    <div className="iconbox-inner">
                                        <div className="iconbox-contents">
                                            <div className="iconbox-title">
                                                <h2>Enfoque individual</h2>
                                            </div>
                                            <div className="iconbox-desc">
                                                <p>Personalice sus lentes y adquiera la protección que necesitas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-6 mt-md-30 text-md-center mb-lg-30">
                        <picture>
                            <source srcSet="/images/01.webp" type="image/webp" />
                            <img
                                src="/images/01.webp"
                                className="img-fluid img-shadow"
                                alt="cuida tus ojos"
                                width={550}
                                height={730}
                            />
                        </picture>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default Calidad