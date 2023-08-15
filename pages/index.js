import Whatsapp from '@/components/custom/Whatsapp';
import BannerSoporte from '@/components/home/BannerSoporte';
import Calidad from '@/components/home/Calidad';
import Counter from '@/components/home/Counter';
import Form from '@/components/home/Form';
import Services from '@/components/home/Services';
import ServicesSlider from '@/components/home/ServicesSlider';
import Slider from '@/components/home/Slider';
import Welcome from '@/components/home/Welcome';
import WorkStatus from '@/components/home/WorkStatus';
import Footer from '@/layouts/Footer';
import Nav from '@/layouts/Nav';
import Head from 'next/head';
import Script from 'next/script';

export default function Home() {
  const getSeoSocials = () => {
    return {
      __html: `
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Opticenter",
        "url": "https://opticenter-62c87.web.app/",
        "address": "CRA 1D BIS #61A - 94",
        "sameAs": [
          "https://www.instagram.com/opticenteroficial/",
          "https://linkedin.com/in/nicolas-chamorro-9aa594196",
          "https://www.facebook.com/nichagiro/"
        ]
      }
    `
    }
  }
  const structureSeoData = () => {
    return {
      __html: `
        {
          "@context": "https://schema.org",
          "@type": "NewsArticle",
          "headline": "Article headline",
          "image": [
            "https://opticenter-62c87.web.app/images/services/service-03.webp",
            "https://opticenter-62c87.web.app/images/services/service-02.webp",
            "https://opticenter-62c87.web.app/images/services/service-01.webp"
          ],
          "datePublished": "2022-02-04T22:00:00+08:00",
          "dateModified": "2022-09-17T22:00:00+08:00",
          "author": [{
            "@type": "Organization",
            "name": "Opticenter",
            "url": "https://opticenter-62c87.web.app"
          }, {
            "@type": "Organization",
            "name": "Overweb",
            "url": "https://overweb.com.co"
          }, {
            "@type": "Person",
            "name": "Nicolas Chamorro Giron",
            "url": "https://nichagiro.github.io"
          }]
        }
      `
    }
  }
  return (
    <>
      <Head>
        <meta charSet="utf-8" />
        <meta httpEquiv="Content-Type" content="text/html; charset=ISO-8859-1" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="maquillaje, cosmeticos, productos de belleza, regalos de maquillaje, cuidado de la piel, maquillaje para niñas, maquillaje de ojos, maquillaje sencillo, productos de maquillaje" />
        <meta name="description" content="Opticenter la mejor optica del norte, gafas y lentes medicados, examen ocular gratuito, marcos de todo tipo y al mejor estilo, oftometria y oftalmologia." />
        <meta name="subject" content="Lentes" />
        <meta name="author" content="Nicolas Chamorro" />
        <meta name="copyright" content="© Overweb" />
        <meta name="language" content="es" />
        <meta name="revisit-after" content="7 days" />
        <meta name="robots" content="index, follow" />
        <link rel="canonical" href="https://opticenter-62c87.web.app/" />
        <title>Opticenter | Marcos | Optometria | Oftamologia | La mejor optica del norte</title>
        <link rel="shortcut icon" type="image/png" href="/images/favicon.png "></link>
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Opticenter | Marcos | Optometria | Oftamologia | La mejor optica del norte" />
        <meta name="twitter:description" content="Opticenter la mejor optica del norte, gafas y lentes medicados, examen ocular gratuito, marcos de todo tipo y al mejor estilo, oftometria y oftalmologia." />
        <meta name="twitter:image" content="https://opticenter-62c87.web.app/images/services/service-03.webp" />
        <meta name="twitter:site" content="@Nicolas63783814" />
        <meta name="twitter:creator" content="@Nicolas63783814" />
        <meta property="og:title" content="Opticenter | Marcos | Optometria | Oftamologia | La mejor optica del norte" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://opticenter-62c87.web.app/" />
        <meta property="og:site_name" content="OPTICENTER" />
        <meta property="og:image" content="https://opticenter-62c87.web.app/images/services/service-03.webp" />
        <meta property="og:image:alt" content="gafas opticenter" />
        <meta property="og:description" content="Opticenter la mejor optica del norte, gafas y lentes medicados, examen ocular gratuito, marcos de todo tipo y al mejor estilo, oftometria y oftalmologia." />
        <script type="application/ld+json" dangerouslySetInnerHTML={getSeoSocials()} />
        <script type="application/ld+json" dangerouslySetInnerHTML={structureSeoData()} />
      </Head>
      <main >
        <div className="page-wrapper">
          <div className="page-content">
            <Nav />
            <Slider />
            <ServicesSlider />
            <Welcome />
            <Calidad />
            <WorkStatus />
            <Services />
            <Form />
            <Counter />
            <BannerSoporte />
            <Whatsapp number={573174117065} />
            <Footer />
          </div>
        </div>
      </main>
      <Script strategy="lazyOnload" src="js/popper.min.js" />
      <Script strategy="lazyOnload" src="js/bootstrap.min.js" />
      <Script strategy="lazyOnload" src="js/jquery-waypoints.js" />
      <Script strategy="lazyOnload" src="js/jquery.appear.js" />
      <Script strategy="lazyOnload" src="js/numinate.min.js" />
      <Script strategy="lazyOnload" src="js/slick.min.js" />
      <Script strategy="lazyOnload" src="js/jquery.prettyPhoto.js" />
      <Script strategy="lazyOnload" src="js/circle-progress.js" />
      <Script strategy="lazyOnload" src="js/jquery.event.move.js" />
      <Script strategy="lazyOnload" src="js/jquery.twentytwenty.js" />
      <Script strategy="lazyOnload" src="js/scripts.js" />
      <Script strategy="lazyOnload" src="https://kit.fontawesome.com/5ffca20140.js" crossOrigin="anonymous" />
    </>
  )
}
