import React, { Fragment, useState }  from "react";
import { Dialog, Transition } from '@headlessui/react'
import { Link } from '@inertiajs/inertia-react'
import { FaStar, FaStarHalfAlt } from "react-icons/fa";

export default function TutorCard() {
    const base_url = window.location.origin;

    

    let [isOpen, setIsOpen] = useState(false)

    function closeModal() {
        setIsOpen(false)
    }

    function openModal() {
        setIsOpen(true)
    }
  
    return (
        <>
        <div className="max-w-sm rounded overflow-hidden shadow-lg p-1 sm:p-0">
            <div className="z-10 absolute w-full flex px-3 ml-0 mt-3">
                <span className="bg-green-500 font-bold uppercase inline-block text-white leading-5 rounded shadow-md p-2">English</span>
            </div>
            <Link href={ base_url + '/tutor/profile'}><img className="w-full" src={ base_url + '/img/cours5.jpg'} alt="Sunset in the mountains" /></Link>
            <div className="w-full">
                <div className="flex items-center mt-2.5 ml-4"> 
                    <FaStar className="text-orange-500" /> 
                    <FaStar className="text-orange-500" /> 
                    <FaStar className="text-orange-500" /> 
                    <FaStar className="text-orange-500" /> 
                    <FaStarHalfAlt  className="text-orange-500" /> 
                    <span className="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800 ml-3">4.50</span> 
                </div>
                <div className="w-full">
                    <table className="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" className="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <Link href={ base_url + '/tutor/profile'}>Mijarun Rahman</Link>
                                </th>
                            </tr>
                            <tr className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td className="py-4 px-6">
                                    English Tutor
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div className="flex justify-between items-center p-3">
                <span className="text-base md:text-3xl font-bold text-gray-900 dark:text-white bangla">৳ ৯০০</span>
                <button onClick={openModal}className="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-2 py-2 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">Demo Class</button>
            </div>
        </div>

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
            <div className="flex min-h-full items-center justify-center p-4 text-center">
              <Transition.Child
                as={Fragment}
                enter="ease-out duration-300"
                enterFrom="opacity-0 scale-95"
                enterTo="opacity-100 scale-100"
                leave="ease-in duration-200"
                leaveFrom="opacity-100 scale-100"
                leaveTo="opacity-0 scale-95"
              >
                <Dialog.Panel className="w-full max-w-md transform overflow-hidden rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all">
                  <Dialog.Title
                    as="h3"
                    className="text-lg font-medium leading-6 text-gray-900"
                  >
                    Payment successful
                  </Dialog.Title>
                  <div className="mt-2">
                    <p className="text-sm text-gray-500">
                      Your payment has been successfully submitted. We’ve sent
                      you an email with all of the details of your order.
                    </p>
                  </div>

                  <div className="mt-4">
                    <button
                      type="button"
                      className="inline-flex justify-center rounded-md border border-transparent bg-blue-100 px-4 py-2 text-sm font-medium text-blue-900 hover:bg-blue-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-2"
                      onClick={closeModal}
                    >
                      Got it, thanks!
                    </button>
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