import React from 'react';
import Head from 'next/head';

const HeadHome = () => {
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
    <Head>
      <meta charSet="utf-8" />
      <meta httpEquiv="Content-Type" content="text/html; charset=ISO-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="keywords" content="Marcos para gafas, Optica, La mejor optica del norte, Opticenter, Optometria avanzada, Cuidado de los ojos" />
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
  )
}

export default HeadHome;