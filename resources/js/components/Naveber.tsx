import React,{ useEffect, useState, useRef, Fragment} from "react";
import {useTheme} from "next-themes";
import { Link, usePage} from '@inertiajs/inertia-react'
import { BsBoxArrowInRight,BsFillSunFill ,BsMoonStarsFill} from "react-icons/bs";
import { FaUserAlt, FaPlus, FaSearch, FaUserCircle, FaSignOutAlt, FaAngleDown} from "react-icons/fa";
import { Popover, Dialog, Menu, Transition } from '@headlessui/react'


export default function Naveber() {
  
  const base_url = window.location.origin;

  let url = window.location.href;

  const SharedData: any = usePage();
  const appName  = SharedData.props.appName;
  const userdata = SharedData.props.auth.user

  let [isOpen, setIsOpen] = useState(false)

  function closeModal() {
    setIsOpen(false)
  }

  function openModal() {
    setIsOpen(true)
  }

  const {systemTheme , theme, setTheme} = useTheme ();

  const [mounted, setMounted] = useState(false);
  
  useEffect(() =>{
    setMounted(true);
  },[])

  const renderThemeChanger= () => {
    if(!mounted) return null;

    const currentTheme = theme === "system" ? systemTheme : theme ;

    if(currentTheme ==="dark"){
      return (
        <><BsFillSunFill className="w-7 h-7 text-yellow-600 " role="button" onClick={() => setTheme('light')} /></>
      )
    }

    else {
      return (
        <><BsMoonStarsFill className="w-7 h-7 text-gray-200 " role="button" onClick={() => setTheme('dark')} /></>
      )
    }
  };

  return (
    <>     
      <header className="header bg-green-500">
        <nav className="naver">
          <div className="container mx-auto md:px-2 lg:px-2 flex lg:flex-row lg:space-x-8 lg:mt-0 items-center justify-center">
            <div className="flex justify-items-start w-6/12 md:w-2/12 lg:w-3/12 p-3">
                <Link href="/">
                  <img src={ base_url + '/img/logo_light.png'}  alt="Logo" className="w-16 md:w-20 lg:w-24"/>
                </Link>
            </div>
            <div className="hidden md:flex justify-center w-6/12 md:w-6/12 lg:w-6/12">
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url }>Home</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/preparation'}>Perparation</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/study-abroad'}>Admision</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/career-coach'}>Career</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/jobs'}>Job</Link>
                <Link className="nav-item3 uppercase md:text-xs lg:text-base" href={ base_url + '/scholarship'}>Scholarship</Link>
            </div>


            <div className="flex justify-end w-6/12 md:w-4/12 lg:w-3/12">
              <div className="flex justify-end items-baseline flex-wrap">
                <button className="mr-10 text-white md:text-xs lg:text-base" onClick={openModal}>
                    <FaSearch className="mt-1" />
                </button>
                <div className="flex h-10">
                  {
                    userdata ? (
                      <>
                      {/* <MyAccount className="gr-btn-1 mt-2 md:text-xs lg:text-base" /> */}
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
        </nav>
      </header> 


      <Transition appear show={isOpen} as={Fragment}>
        <Dialog as="div" className="relative z-10" onClose={closeModal}>
          <Transition.Child
            as={Fragment}
            enter="ease-out duration-300"
            enterFrom="opacity-0"
            enterTo="opacity-100"
            leave="ease-in duration-200"
            leaveFrom="opacity-100"
            leaveTo="opacity-0"
          >
            <div className="fixed inset-0 bg-black bg-opacity-25" />
          </Transition.Child>

          <div className="fixed inset-0 overflow-y-auto">
            {/* <div className="flex min-h-full items-center justify-center p-4 text-center"> */}
            <div className="flex mt-16  md:mt-24 justify-center p-4 text-center">
              <Transition.Child
                as={Fragment}
                enter="ease-out duration-300"
                enterFrom="opacity-0 scale-95"
                enterTo="opacity-100 scale-100"
                leave="ease-in duration-200"
                leaveFrom="opacity-100 scale-100"
                leaveTo="opacity-0 scale-95"
              >
                <Dialog.Panel className="w-full md:w-8/12 transform overflow-hidden rounded bg-white p-6 text-left align-middle shadow-xl transition-all">
                  {/* <Dialog.Title
                    as="h3"
                    className="text-lg font-medium leading-6 text-gray-900"
                  >
                    Payment successful
                  </Dialog.Title> */}
                  <div className="mt-2">
                    <form>
                        <div className="flex">
                            <select className="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                              <option>All Categories</option>
                            </select>
                            <div className="relative w-full">
                                <input type="text" className="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-green-500" placeholder="Search Admision, Career, Jobs..." required />
                                <button type="submit" className="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-green-500 rounded-r-lg border border-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:green:bg-blue-500 dark:focus:ring-green-600">
                                    <svg aria-hidden="true" className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                    <span className="sr-only">Search</span>
                                </button>
                            </div>
                        </div>
                    </form>
                  </div>
                </Dialog.Panel>
              </Transition.Child>
            </div>
          </div>
        </Dialog>
      </Transition>
    </>
  )
}
