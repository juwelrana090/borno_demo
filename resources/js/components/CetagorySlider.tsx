import React, { useRef, useState } from "react";
import { Link } from '@inertiajs/inertia-react'

// Import Swiper React components
import { Swiper, SwiperSlide } from "swiper/react";

// Import Swiper styles
import "swiper/css";
import "swiper/css/lazy";
import "swiper/css/pagination";
import "swiper/css/navigation";
// import "./styles.css";

// import required modules
import { Lazy, Autoplay,  Pagination , Navigation} from "swiper";


const CetagorySlider: React.FC = () => {


  const base_url = window.location.origin;


  return (
    <>
    <Swiper
      slidesPerView={2}
      spaceBetween={10}
      centeredSlides={true}

      loop={true}
      loopFillGroupWithBlank={true}

      autoplay={{
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter	: true,
      }}

      lazy={true}
      pagination={{
        clickable: true,
        type: "progressbar"
      }}
      // navigation={true}
      breakpoints={{
        300: {
          slidesPerView: 1.4,
          spaceBetween: 5,
        },
        400: {
          slidesPerView: 1.8,
          spaceBetween: 5,
        },
        600: {
          slidesPerView: 2.6,
          spaceBetween: 5,
        },
        700: {
          slidesPerView: 2.9,
          spaceBetween: 5,
        },
        900: {
          slidesPerView: 3,
          spaceBetween: 5,
        },
        1100: {
          slidesPerView: 4,
          spaceBetween: 5,
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 5,
        },
        1300: {
          slidesPerView: 5,
          spaceBetween: 10,
        },
        1536: {
          slidesPerView: 6,
          spaceBetween: 10,
        },
        1600: {
          slidesPerView: 6,
          spaceBetween: 10,
        },
      }}
      modules={[Lazy, Navigation, Autoplay, Pagination]}
      className="mySwiper flex justify-center md:mb-12"
    >
      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/preparation'} className="grid justify-items-center">
            <img src="./img/icon/preparation.png" className="w-16 h-16 mb-2" alt="Preparation"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Preparation</h1>
            <p className="text-center text-lg text-red-500">45 Course</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/study-abroad'} className="grid justify-items-center">
            <img src="./img/icon/knowledge.png" className="w-16 h-16 mb-2" alt="Study Abroad"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Study Abroad</h1>
            <p className="text-center text-lg text-red-500">250 Admission</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/scholarship'} className="grid justify-items-center">
            <img src="./img/icon/scholarship2.png" className="w-16 h-16 mb-2" alt="Scholarship"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Scholarship</h1>
            <p className="text-center text-lg text-red-500">30 Scholarships</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/career-coach'} className="grid justify-items-center">
            <img src="./img/icon/career-coach.png" className="w-16 h-16 mb-2" alt="Career Coach"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Career Coach</h1>
            <p className="text-center text-lg text-red-500">3300 Careers</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/school'} className="grid justify-items-center">
            <img src="./img/icon/school.png" className="w-16 h-16 mb-2" alt="School"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">School</h1>
            <p className="text-center text-lg text-red-500">250 Schools</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/collage'} className="grid justify-items-center">
            <img src="./img/icon/graduate.png" className="w-16 h-16 mb-2" alt="Collage"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Collage</h1>
            <p className="text-center text-lg text-red-500">130 Colleges</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/university'} className="grid justify-items-center">
            <img src="./img/icon/university.png" className="w-16 h-16 mb-2" alt="University"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">University</h1>
            <p className="text-center text-lg text-red-500">100 Universities</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/tutor'} className="grid justify-items-center">
            <img src="./img/icon/teacher.png" className="w-16 h-16 mb-2" alt="Tutor"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Tutor</h1>
            <p className="text-center text-lg text-red-500">250 Tutors</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/jobs'} className="grid justify-items-center">
            <img src="./img/icon/job-search.png" className="w-16 h-16 mb-2" alt="Job Search"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Job</h1>
            <p className="text-center text-lg text-red-500">175 Jobs</p>
          </Link>
        </div>
      </SwiperSlide>

      <SwiperSlide className="w-64 h-72 p-4 cursor-pointer">
        <div className="w-56 h-60 max-w-sm overflow-hidden rounded border border-green-500 bg-white shadow-md duration-300 hover:scale-105 hover:shadow-md hover:shadow-green-200 grid grid-cols-1 content-center ">
          <Link href={base_url + '/books'} className="grid justify-items-center">
            <img src="./img/icon/books.png" className="w-16 h-16 mb-2" alt="Job Search"/>
            <h1 className="text-center text-2xl font-bold text-green-500 mb-1">Book</h1>
            <p className="text-center text-lg text-red-500">500 Books</p>
          </Link>
        </div>
      </SwiperSlide>



    </Swiper>
    </>
  );
};

<CetagorySlider />;
export default CetagorySlider;
