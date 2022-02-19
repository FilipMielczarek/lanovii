import Swiper from 'swiper/bundle';
import 'swiper/css';

const homepageSwiper = document.querySelector(".banner__swiper");

if (homepageSwiper) {
  console.log('hello')
  const swiper = new Swiper(".banner__swiper", {
    loop: true,
    autoplay: {
      delay: 5000,
    },
  });
}
