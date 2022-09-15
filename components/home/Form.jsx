import React from 'react'

const Form = () => {
    return (
        <>
            <section id="cita" className="get-appointment">
                <div className="container">
                    <div className="row justify-content-center">
                        <div className="col-lg-12">
                            <div className="section-title text-center">
                                <h4 className="subheading skincolor">PEDIR CITA</h4>
                                <h2 className="white-color">RESERVA<strong><br />LA CITA CON UN DOCTOR</strong></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section className="bg-lightgrey appointment-from">
                <div className="container">
                    <div className="row  box-shadow-02">
                        <div className="col-lg-4 appointment-image">
                        </div>
                        <div className="col-lg-8 appointment-inner">
                            <h3>Nos comunicaremos con usted lo más pronto posible.</h3>
                            <p>Le avisaremos por cualquier canal de comunicación que nos suministres.</p>
                            <div className="contact-form">
                                <form id="formy">
                                    <div className="form-row">
                                        <div className="form-group col-lg-6">
                                            <input
                                                id="name"
                                                type="text"
                                                className="form-control"
                                                placeholder="Nombre"
                                                name="name"
                                                required
                                                minLength="4"
                                            />
                                        </div>
                                        <div className="form-group col-lg-6">
                                            <input
                                                id="email"
                                                type="email"
                                                className="form-control"
                                                placeholder="Correo Electrónico"
                                                name="email" aria-required="true"
                                                required
                                                minLength="10"
                                            />
                                        </div>
                                        <div className="form-group col-lg-6">
                                            <input
                                                id="phone"
                                                type="number"
                                                className="form-control"
                                                placeholder="Teléfono"
                                                name="phone"
                                                required
                                            />
                                        </div>
                                        <div className="form-group col-lg-6">
                                            <input
                                                id="subject"
                                                type="text"
                                                className="form-control"
                                                placeholder="Asunto"
                                                name="subject"
                                                required
                                                minLength="4"
                                            />
                                        </div>
                                        <div className="form-group col-lg-12">
                                            <textarea
                                                id="comment"
                                                className="form-control"
                                                placeholder="Mensaje"
                                                name="message"
                                                cols="45"
                                                rows="5"
                                                aria-required="true"
                                                style={{ resize: 'none' }}
                                                required
                                                maxLength="5000"
                                            ></textarea>
                                        </div>
                                        <div className="form-group col-lg-12">
                                            <button
                                                type="submit"
                                                id="btn-agenda"
                                                className="btn">
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
        </>
    )
}

export default Form