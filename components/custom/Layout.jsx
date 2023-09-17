import Nav from '@/layouts/Nav'
import React from 'react'
import Whatsapp from './Whatsapp'
import Footer from '@/layouts/Footer'

const Layout = ({ children }) => {
  return (
    <>
      <main >
        <div className="page-wrapper">
          <div className="page-content">
            <Nav />
            {children}
            <Whatsapp number={573174117065} />
            <Footer />
          </div>
        </div>
      </main>
    </>
  )
}

export default Layout