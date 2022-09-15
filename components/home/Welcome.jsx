import React from 'react';
import Image from 'next/image';


const Welcome = () => {
    return (
        <section className="bg-lightgrey welcome-company">
            <div className="container">
                <div className="row align-items-lg-center align-items-md-end">
                    <div className="col-md-12 col-lg-6">
                        <Image
                            src="/images/img-01-new.webp"
                            className="img-fluid"
                            alt="optometria para niños"
                            height={585}
                            width={582}
                        />
                    </div>
                    <div className="col-md-12 col-lg-6 mt-sm-30 pb-50">
                        <div className="section-title mt-md-50">
                            <h4 className="subheading skincolor">BIENVENIDO A OPTICENTER</h4>
                            <h2>PRESERVAMOS, MEJORAMOS Y  <strong> PROTEGEMOS SU VISIÓN</strong></h2>
                        </div>
                        <p>
                            No eres nada sin tus ojos,
                            <a className="opt-underline-dotted"
                                href="https://www.masvision.es/blog/salud-visual/10-consejos-prevenir-miopia/"
                                target="_blank">
                                protégelos
                            </a>
                            con hábitos saludables, visítanos y recibe los mejores tips y cuidados de opticenter.
                        </p>
                        <p>
                            <a className="opt-underline-dotted"
                                href="https://www.infosalus.com/salud-investigacion/noticia-diez-consejos-cuidar-vista-20150216135142.html"
                                target="_blank">
                                Cuida tus ojos,
                            </a> lo hacemos por ti, para que veas y te sientas bien.</p>
                        <div className="d-none d-sm-block mt-4">
                            <a href="https://www.google.com/maps/place/Opticenter/@3.4739793,-76.495721,17z/data=!3m1!4b1!4m5!3m4!1s0x8e30a87fc3b56b2f:0x1f6deaf194d84ef5!8m2!3d3.4739793!4d-76.4935323"
                                className="btn anim-3"
                                target="_blank"
                            >
                                VISÍTANOS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    )
}

export default Welcome