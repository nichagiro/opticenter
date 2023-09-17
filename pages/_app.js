import '@/styles/bootstrap.min.css';
import '@/styles/slick.css';
import '@/styles/shortcode.css';
import '@/styles/base.css';
import '@/styles/style.css';
import '@/styles/responsive.css';
import Scripts from '@/components/common/Scripts';

function MyApp({ Component, pageProps }) {
  return (
    <>
      <Component {...pageProps} />
      <Scripts />
    </>
  )
}

export default MyApp
