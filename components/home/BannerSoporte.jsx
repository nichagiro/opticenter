import React from 'react'

const BannerSoporte = () => {
    return (
        <div className="footer-top skin-bg-color py-5">
            <div className="container">
                <div className="row d-flex white-color align-items-center">
                    <div className="col-lg-8">
                        <div className="iconbox iconbox-style-6">
                            <div className="iconbox-inner d-flex">
                                <div className="iconbox-icon">
                                    <i className="fa-solid fa-headset"></i>
                                </div>
                                <div className="iconbox-contents">
                                    <div className="iconbox-title">
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
                    <div className="col-lg-4 mt-md-30 text-lg-right">
                        <a href="https://wa.me/+573174117065?text=Quiero%20pedir%20mi%20cita"
                            className="btn btn-dark"
                            target="_blank"
                            rel="noreferrer"
                        >
                            Cita WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default BannerSoporte