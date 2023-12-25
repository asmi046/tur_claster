const swiperEwent = document.getElementById('event_slider');

const swiperParams = {
    slidesPerView: 3,
    spaceBetween: 30,
    breakpoints: {

        320: {
          slidesPerView: 1,
        },

        768: {
          slidesPerView: 3,
        },

        1024: {
          slidesPerView: 4,
        },

        1440: {
          slidesPerView: 5,
        },
      },
  };

Object.assign(swiperEwent, swiperParams)
swiperEwent.initialize()

next_event_btn.addEventListener('click', () => {
    swiperEwent.swiper.slideNext();
});

prev_event_btn.addEventListener('click', () => {
    swiperEwent.swiper.slidePrev();
});
