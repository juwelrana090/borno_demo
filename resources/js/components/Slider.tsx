import React, { useRef, useState } from "react";

// Import Swiper React components
import { Swiper, SwiperSlide } from "swiper/react";

// Import Swiper styles
import "swiper/css";
import "swiper/css/lazy";
import "swiper/css/pagination";
// import "./styles.css";

// import required modules
import { Lazy, Autoplay, EffectCoverflow, Pagination } from "swiper";


const Slider: React.FC = () => {
  return (
    <>
      <Swiper
        slidesPerView={1}
        spaceBetween={30}
        loop={true}
        autoplay={{
          delay: 3500,
          disableOnInteraction: false,
          pauseOnMouseEnter	: true,
        }}

        effect={"coverflow"}
        grabCursor={true}
        centeredSlides={true}
        // slidesPerView={"auto"}
        coverflowEffect={{
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        }}

        lazy={true}
        pagination={{
          dynamicBullets: true,
        }}

        modules={[Lazy, Autoplay, EffectCoverflow, Pagination]}
        
        className="z-10 bg-gray-900 bg-opacity-75 backdrop-blur backdrop-filter firefox:bg-opacity-30 w-full h-60 md:h-72 lg:h-96 grid grid-cols-1 justify-items-center"
      >
        <SwiperSlide className="z-10 bg-[url('https://bb.codingzonebd.com/img/slider/banner1.png')] bg-cover bg-center backdrop-blur-lg justify-items-center">
          <img src="./img/slider/banner1.png"  className="bg-gray-900 bg-opacity-75 backdrop-blur backdrop-filter firefox:bg-opacity-30 object-none object-center w-0 md:w-full h-60 md:h-72 lg:h-96" alt="" />
        </SwiperSlide>
        <SwiperSlide className="z-10 bg-[url('https://bb.codingzonebd.com/img/slider/banner1.png')] bg-cover bg-center backdrop-blur-lg">
          <img src="./img/slider/banner1.png"  className="bg-gray-900 bg-opacity-75 backdrop-blur backdrop-filter firefox:bg-opacity-30 object-none object-center w-0 md:w-full  h-60 md:h-72 lg:h-96" alt="" />
        </SwiperSlide>
        <SwiperSlide className="z-10 bg-[url('https://bb.codingzonebd.com/img/slider/banner1.png')] bg-cover bg-center backdrop-blur-lg">
          <img src="./img/slider/banner1.png"  className="bg-gray-900 bg-opacity-75 backdrop-blur backdrop-filter firefox:bg-opacity-30 object-none object-center w-0 md:w-full  h-60 md:h-72 lg:h-96" alt="" />
        </SwiperSlide>
      </Swiper>
    </>
  );
};

<Slider />;
export default Slider;
