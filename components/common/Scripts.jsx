import Script from 'next/script'
import React from 'react'

const Scripts = () => {
  return (
    <>
      <Script strategy="lazyOnload" src="js/popper.min.js" />
      <Script strategy="lazyOnload" src="js/bootstrap.min.js" />
      <Script strategy="lazyOnload" src="js/jquery-waypoints.js" />
      <Script strategy="lazyOnload" src="js/jquery.appear.js" />
      <Script strategy="lazyOnload" src="js/numinate.min.js" />
      <Script strategy="lazyOnload" src="js/slick.min.js" />
      <Script strategy="afterInteractive" src="js/jquery.prettyPhoto.js" />
      <Script strategy="lazyOnload" src="js/circle-progress.js" />
      <Script strategy="lazyOnload" src="js/jquery.event.move.js" />
      <Script strategy="afterInteractive" src="js/jquery.twentytwenty.js" />
      <Script strategy="lazyOnload" src="js/scripts.js" />
      <Script strategy="lazyOnload" src="https://kit.fontawesome.com/5ffca20140.js" crossOrigin="anonymous" />
    </>
  )
}

export default Scripts