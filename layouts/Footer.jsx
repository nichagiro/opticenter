import React from 'react'

const Footer = () => {
    return (
        <footer className="footer site-footer pt-5" id="footer">
            <div className="container">
                <div className="row">
                    <div className="col-xs-12 col-lg-4 mb-md-5 d-md-flex justify-content-center">
                        <div>
                            <div className="footerlogo mb-4 text-md-center text-lg-left">
                                <h2 style={{ fontWeight: 900 }}>Opticenter</h2>
                            </div>
                            <p className="mb-0">
                                Consultorio optométrico, venta de lentes oftálmicos y lentes de contacto,
                                monturas nacionales e importadas oftálmicas y de sol.
                            </p>
                            <div className="social-links-wrapper d-md-none d-lg-block">
                                <ul className="social-icons">
                                    <li>
                                        <a href="https://www.instagram.com/opticenteroficial/"
                                            className="tooltip-top"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            data-tooltip="Instagram"
                                            target="_blank"
                                            rel="noreferrer"
                                        >
                                            <i className="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="col-xs-12 col-sm-6 col-md-6 col-lg-4 mt-md-30 d-md-flex justify-content-center">
                        <div>
                            <h6 className="footer-widget-title">Nuestros Servicios</h6>
                            <ul className="list-unstyled">
                                <li><i className="fa-solid fa-circle-check text-blue-one"></i>
                                    <a> Lentes Transitions</a>
                                </li>
                                <li><i className="fa-solid fa-circle-check text-blue-one"></i>
                                    <a> Corrección de la visión</a>
                                </li>
                                <li><i className="fa-solid fa-circle-check text-blue-one"></i>
                                    <a> Exámenes y valoraciones</a>
                                </li>
                                <li><i className="fa-solid fa-circle-check text-blue-one"></i>
                                    <a> Lentes Antireflejo</a>
                                </li>
                                <li><i className="fa-solid fa-circle-check text-blue-one"></i>
                                    <a> Convenios Empresariales</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-xs-12 col-sm-6 col-md-6 col-lg-4 address-box mt-md-30 d-md-flex justify-content-center">
                        <div>
                            <h6 className="footer-widget-title">Encuéntranos</h6>
                            <div className="d-flex">
                                <i className="fa-solid fa-location-dot"></i>
                                <p><strong>OPTICENTER</strong>
                                    <br />CRA 1D BIS #61A - 94</p>
                            </div>
                            <div className="d-flex">
                                <i className="fa-solid fa-mobile-screen-button"></i>
                                <p>(+57) 317 411 7065 </p>
                            </div>
                            <div className="d-flex">
                                <i className="fa-solid fa-envelope"></i>
                                <p>info@opticenter.com</p>
                            </div>
                            <div className="d-flex">
                                <i className="fa-solid fa-clock"></i>
                                <div>
                                    <p >Lun - Vie 8.00 AM - 6:00 PM</p>
                                </div>
                            </div>
                            <div className="d-flex">
                                <i className="fa-solid fa-clock"></i>
                                <div>
                                    <p>Lun - Sab 8.00 AM - 5:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="bottom-footer">
                    <div className="row">
                        <div className="col-sm-12 text-center">
                            Copyright © 2021
                            <a
                                rel="noreferrer"
                                href="https://overweb.com.co"
                                target="_blank"
                            >
                                OVERWEB
                            </a>
                            . All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    )
}

export default Footer