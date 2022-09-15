import React from 'react'

const Whatsapp = ({ number }) => {
    return (
        <a className="whatsapp" href={`https://wa.me/${number}`}>
            <i className="fa-brands fa-whatsapp fa-3x"></i>
        </a>
    )
}

export default Whatsapp