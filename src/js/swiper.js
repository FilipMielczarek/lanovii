import Swiper from 'swiper/bundle';
import 'swiper/css';
import 'swiper/css/navigation';

const homepageSwiper = document.querySelector('.banner__swiper');

if (homepageSwiper) {
  const swiper = new Swiper('.banner__swiper', {
    loop: true,
    autoplay: {
      delay: 5000,
    },
  });
}

const inspirationsSwiper = document.querySelector('.inspirations__swiper');

if (inspirationsSwiper) {
  const swiper = new Swiper('.inspirations__swiper', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    slidesPerView: 1,
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
    },
  });
}
