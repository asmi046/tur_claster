const swiperEwent = document.getElementById('event_slider');

const swiperParams = {
    slidesPerView: 5,
    spaceBetween: 30,
  };

Object.assign(swiperEwent, swiperParams)
swiperEwent.initialize()

next_event_btn.addEventListener('click', () => {
    swiperEwent.swiper.slideNext();
});

prev_event_btn.addEventListener('click', () => {
    swiperEwent.swiper.slidePrev();
});
