
import React, { useEffect, useState } from "react";
import {Transition } from '@headlessui/react'
import {useTheme} from "next-themes";
import { Link,usePage } from '@inertiajs/inertia-react'
import { BsBoxArrowInRight,BsFillSunFill ,BsMoonStarsFill} from "react-icons/bs";
import { FaUserAlt, FaPlus, FaSearch, FaUserCircle, FaSignOutAlt, FaAngleDown} from "react-icons/fa";

import Naveber from "./Naveber";


const Header = () => {

  const base_url = window.location.origin;   

  let url = window.location.href;

  const SharedData: any = usePage();
  const appName  = SharedData.props.appName;
  const userdata = SharedData.props.auth.user

  const [showTop, setShow] = useState(false)
  const controlNavbar = () => {
      if (window.scrollY > 100 ) {
          setShow(true)
      }else{
        setShow(false)
      }
  }


  const {systemTheme , theme, setTheme} = useTheme ();
  const [mounted, setMounted] = useState(false);

  useEffect(() =>{
    setMounted(true);
  },[])

  const renderThemeMode= () => {
    if(!mounted) return null;

    const currentTheme = theme === "system" ? systemTheme : theme;

    if(currentTheme ==="dark"){
      return (
        <button className="ml-4"><BsFillSunFill className="w-7 h-7 text-yellow-600 " role="button" onClick={() => setTheme('light')} /></button>
      )
    }

    else {
      return (
        <button className="ml-4"><BsMoonStarsFill className="w-7 h-7 text-gray-200 " role="button" onClick={() => setTheme('dark')} /></button>
      )
    }
  };

  useEffect(() => {
      window.addEventListener('scroll', controlNavbar)
      return () => {
          window.removeEventListener('scroll', controlNavbar)
      }
  }, [])

  return (
    <>
      <Naveber/>
      <Transition show={showTop} className="sticky top-0 z-50">
        {/* Background overlay */}
        <Transition.Child
          enter="transition-opacity ease-linear duration-200"
          enterFrom="opacity-0"
          enterTo="opacity-100"
          leave="transition-opacity ease-linear duration-100"
          leaveFrom="opacity-100"
          leaveTo="opacity-0"
        >
          {/* ... */}
        </Transition.Child>
        <div className="hidden sm:hidden md:block lg:block fixtop bg-opacity-30  firefox:bg-opacity-30 opacity-100 dark:opacity-95 dark:bg-opacity-50 dark:backdrop-blur dark:backdrop-filter  z-50">
          <Transition.Child
            enter="transition ease-in-out duration-200 transform"
            enterFrom="-translate-y-full"
            enterTo="translate-y-0"
            leave="transition ease-in-out duration-100 transform"
            leaveFrom="translate-y-0"
            leaveTo="-translate-y-full"
            className="bg-gray-900 bg-opacity-75 backdrop-blur backdrop-filter firefox:bg-opacity-30 dark:bg-gray-900 dark:bg-opacity-75"
          >
            <div className="container mx-auto px-4 flex font-medium lg:flex-row lg:space-x-8 lg:mt-0 items-center justify-center p-2 text-gray-600 capitalize dark:text-gray-300">
              <div className="flex justify-items-start w-6/12 md:w-3/12 lg:w-3/12 p-3">
                <Link href="/">
                  <img src={ base_url + '/img/logo.png'} alt="Logo" className="w-16 md:w-20 lg:w-24"/>
                </Link>
              </div>
              <div className="flex justify-center w-6/12 md:w-6/12 lg:w-6/12">
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url }>Home</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/preparation'}>Perparation</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/study-abroad'}>Admision</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/career-coach'}>Career</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/jobs'}>Job</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/scholarship'}>Scholarship</Link>
              </div>
              <div className="flex justify-end w-6/12 md:w-4/12 lg:w-3/12">
                <div className="flex justify-end items-baseline flex-wrap">
                  <button className="mr-10 text-white md:text-xs lg:text-base">
                      <FaSearch className="mt-1" />
                  </button>
                  <div className="flex h-10">
                    {
                      userdata ? (
                        <>
                        <a href={ base_url + '/my-account'} className="gr-btn-1 md:text-xs lg:text-base">
                          <FaUserCircle className="mt-1" /> <span className="mx-1 uppercase">My Account</span>
                        </a>
                        <span className="text-white font-bold mt-2"> | </span>
                        <Link className="gr-btn-2 md:text-xs lg:text-base" href="/logout">
                          <div className="flex"><FaSignOutAlt className="mt-1" /> <span className="mx-1 uppercase">Logout</span></div>
                        </Link>
                        </>
                      ) : (
                        <>
                          <Link href={ base_url + '/login'} className="gr-btn-1 md:text-xs lg:text-base">
                            <FaUserAlt className="mt-1" /> <span className="mx-1 uppercase">Login</span>
                          </Link>
                          <span className="text-white font-bold mt-2"> | </span>
                          <Link href={ base_url + '/register'} className="gr-btn-2 md:text-xs lg:text-base">
                              <div className="flex"><FaPlus className="mt-1" /> <span className="mx-1 uppercase">Join us</span></div>
                          </Link>
                        </>
                      )
                    }
                  </div>
                </div>
              </div>
            </div>
          </Transition.Child>
        </div>
      </Transition>
    </>
  );
};


export default Header;
