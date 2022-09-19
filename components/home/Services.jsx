import React from 'react';

const Services = () => {
    return (
        <section className="section-md" id="services">
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="section-title text-center">
                            <h4 className="subheading skincolor">NUESTROS SERVICIOS</h4>
                            <h2>UNA AMPLIA GAMA DE<strong><br /> SERVICIOS DE OPTOMETRÍA</strong></h2>
                        </div>
                    </div>
                </div>
                <div className="row pt-3">
                    <div className="col-lg-4 col-md-6 col-sm-12">
                        <div className="service-box service-style-1">
                            <div className="service-thumbnail">
                                <div className="service-thumbnail-inner">
                                    <picture>
                                        <source srcSet="/images/services/service-01.webp"
                                            type="image/webp"
                                        />
                                        <img
                                            src="/images/services/service-01.webp"
                                            className="img-fluid"
                                            alt="oftamologia"
                                            height={683}
                                            width={1024}
                                        />
                                    </picture>
                                </div>
                            </div>
                            <div className="service-content">
                                <div className="service-inner">
                                    <h3 className="service-box-title"><b>Variedad en marcos</b></h3>
                                    <div className="service-desc">
                                        <p>
                                            Gran diversidad de marcos que se ajustan a cualquier estilo ideal
                                            de nuestros clientes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 col-sm-12">
                        <div className="service-box service-style-1">
                            <div className="service-thumbnail">
                                <div className="service-thumbnail-inner">
                                    <picture>
                                        <source srcSet="/images/services/service-02.webp"
                                            type="image/webp"
                                        />
                                        <img
                                            src="/images/services/service-02.webp"
                                            className="img-fluid"
                                            alt="opticenter"
                                            width={1024}
                                            height={680}
                                        />
                                    </picture>
                                </div>
                            </div>
                            <div className="service-content">
                                <div className="service-inner">
                                    <h3 className="service-box-title"><b>Calidad Certificada</b></h3>
                                    <div className="service-desc">
                                        <p>
                                            Lentes con la última tecnología en protección en los ojos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 col-sm-12">
                        <div className="service-box service-style-1">
                            <div className="service-thumbnail">
                                <div className="service-thumbnail-inner">
                                    <picture>
                                        <source srcSet="/images/services/service-03.webp"
                                            type="image/webp"
                                        />
                                        <img
                                            src="/images/services/service-03.webp"
                                            className="img-fluid"
                                            alt="lentes transitions"
                                            width={1200}
                                            height={800}
                                        />
                                    </picture>
                                </div>
                            </div>
                            <div className="service-content">
                                <div className="service-inner">
                                    <h3 className="service-box-title"><b>Lentes Transitions</b></h3>
                                    <div className="service-desc">
                                        <p>Lentes que se adaptan automáticamente a los cambios de luz</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    )

}

export default Services