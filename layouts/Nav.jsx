import React from 'react';
import Image from 'next/image';

const Nav = () => {
    return (
        <header className="site-header header-style-1">
            <div className="pre-header">
                <div className="container">
                    <div className="d-flex justify-content-between  align-items-center">
                        <div className="pre-header-left">
                            <ul className="top-contact">
                                <li><i className="fa-solid fa-location-dot"></i>CRA 1D BIS # 61A - 94 </li>
                            </ul>
                        </div>
                        <div className="pre-header-right">
                            <ul className="top-contact d-inline">
                                <li><i className="fa-solid fa-clock"></i>Lun - Sab 8.00 AM - 5:00 PM </li>
                            </ul>
                            <ul className="social-icons d-inline">
                                <li>
                                    <a
                                        target="_blank"
                                        href="https://www.instagram.com/opticenteroficial/"
                                        data-tooltip="Instagram"
                                        rel="noreferrer"
                                    >
                                        <i className="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div className="site-header-menu">
                <div className="container">
                    <div className="row">
                        <div className="col-md-12">
                            <div className="d-flex align-items-center">
                                <div className="site-branding flex-grow-1">
                                    <a href="/">
                                        <Image
                                            className="logo-img"
                                            alt="opticenter"
                                            src='/images/logoOpticenter.webp'
                                            height={143}
                                            width={467}
                                            priority={true}
                                        />
                                    </a>
                                </div>
                                <div className="site-navigation ml-auto">
                                    <nav className="main-menu navbar-expand-xl navbar-light">
                                        <div className="navbar-header">
                                            {/* <!-- Togg le Button --> */}
                                            <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                <span className="fa fa-bars"></span>
                                            </button>
                                        </div>
                                        <div className="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                            <ul className="navigation clearfix">
                                                <li><a href="#Bannerslider">Inicio</a></li>
                                                <li><a href="#footer">Contacto</a></li>
                                                <li className="d-lg-none"><a href="#cita">cita</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div className="menu-right-box d-flex align-items-center">
                                    <div className="header-button">
                                        <a href="#cita" className="btn btn-outline">cita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    )
}

export default Nav