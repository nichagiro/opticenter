import HeadHome from '@/components/common/HeadHome';
import Layout from '@/components/custom/Layout';
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

export default function Home() {
  return (
    <Layout>
      <HeadHome />
      <Slider />
      <ServicesSlider />
      <Welcome />
      <Calidad />
      <WorkStatus />
      <Services />
      <Form />
      <Counter />
      <BannerSoporte />
    </Layout>
  )
}
