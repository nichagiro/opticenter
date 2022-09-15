import React from 'react'

const Counter = () => {
    return (
        <section className="bg-lightgrey section-smt" >
            <div className="container">
                <div className="row">
                    <div className="col-md-3">
                        <div className="counter counter-style-1">
                            <div className="fld-contents">
                                <h4 className="counter-contents">
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
                                    </span>
                                </h4>
                                <h6 className="counter-title">
                                    <span>Años de experiencia</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <div className="counter counter-style-1">
                            <div className="fld-contents">
                                <h4 className="counter-contents">
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
                                <h6 className="counter-title">
                                    <span>Marcos</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <div className="counter counter-style-1">
                            <div className="fld-contents">
                                <h4 className="counter-contents">
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
                                <h6 className="counter-title">
                                    <span>Servicios Diferentes</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-3">
                        <div className="counter counter-style-1">
                            <div className="fld-contents">
                                <h4 className="counter-contents">
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
                                <h6 className="counter-title">
                                    <span>Pacientes Felices</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section >
    )
}

export default Counter