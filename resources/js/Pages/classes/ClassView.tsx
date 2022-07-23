import React, { Fragment, useState }  from "react";
import { Dialog, Transition } from '@headlessui/react'
import { Link, Head, usePage} from '@inertiajs/inertia-react'
import Layout from '../../components/Layout'
import TutorCard from '../../components/TutorCard'
import { FaGraduationCap, FaStar,FaStarHalfAlt, FaHeart, FaBookmark} from "react-icons/fa";


const TutorProfile = () => {
    const base_url = window.location.origin;

    const SharedData: any = usePage();
    const appName  = SharedData.props.appName;
    const userdata = SharedData.props.auth.user;
    const classes = SharedData.props.classes;

    console.log(classes);

    let [isOpen, setIsOpen] = useState(false)

    function closeModal() {
        setIsOpen(false)
    }

    function openModal() {
        setIsOpen(true)
    }

    return (
        <>
        <Head title="Tutor Profile | BornoBangla.com" meta-description="Your page description"/>
        <Layout>
        <div className="md:container lg:container md:mx-auto md:p-4 mt-4 mb-4 bg-white">

                <div className="grid grid-cols-1 md:grid-cols-4 md:gap-4">
                    <div className="w-full p-3 md:p-0">
                        <div className="w-full">
                            <img src={base_url + '/img/info/t-profile-01.jpg'} alt="Tutor" />
                        </div>
                        
                        <div className="w-full mt-2">
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-1 border-b border-gray-200 before:w-1/4 before:border-b-4 before:border-yellow-500">Class Info</div>
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-1 border-b border-gray-200 before:w-1/4 before:border-b-4">
                                <div className="flex"> 
                                    <FaStar className="text-orange-500" /> 
                                    <FaStar className="text-orange-500" /> 
                                    <FaStar className="text-orange-500" /> 
                                    <FaStar className="text-orange-500" /> 
                                    <FaStarHalfAlt  className="text-orange-500" /> 
                                    <span className="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-800 ml-3">4.50</span> 
                                </div>
                            </div>
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-1  border-b border-gray-200 before:w-1/4 before:border-b-4">{classes.subject}</div>
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-1  border-b border-gray-200 before:w-1/4 before:border-b-4 bangla">৳ {classes.price}</div>
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-1">
                                <button onClick={openModal} className="w-full text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-2 py-2 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">Get Demo Class</button>
                            </div>
                        </div>
                    </div>

                    <div className="w-full p-3 md:p-0 md:col-span-3">

                        <div className="w-full">
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 border-b border-gray-200 before:w-1/4 before:border-b-4 before:border-yellow-500">
                            <iframe className="w-full h-60 sm:h-80 md:h-96" src="https://www.youtube.com/embed/deYKvqGfNgk" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
                            </div>
                        </div>

                        <div className="w-full mt-2">
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-2 border-b border-gray-200 before:w-1/4 before:border-b-4 before:border-yellow-500">{classes.name}</div>
                        </div>

                        <div className="w-full mt-2">
                            <table className="w-full text-md text-left text-black">
                                <tbody>
                                    <tr className="bg-white py-2 px-2">
                                        <td className="w-2/12 text-start"> <span className="flex"><FaGraduationCap className="text-green-500 text-lg mt-1.5 mr-1"/>Degree </span>  </td>
                                        <td className="w-10/12 text-start"> Mathmatics</td>
                                    </tr>
                                    <tr className="bg-white py-2 px-2">
                                        <td className="w-2/12 text-start">  <span className="flex"><FaStar className="text-green-500 mt-1.5 mr-1"/>Experience </span></td>
                                        <td className="w-10/12 text-start"> 20 Years in university Math</td>
                                    </tr>
                                    <tr className="bg-white py-2 px-2">
                                        <td className="w-2/12 text-start"> <span className="flex"><FaHeart className="text-green-500 mt-1.5 mr-1"/>Hobbies </span></td>
                                        <td className="w-10/12 text-start"> Music, Dancing and Family</td>
                                    </tr>
                                    <tr className="bg-white py-2 px-2">
                                        <td className="w-2/12 text-start"> <span className="flex"><FaBookmark className="text-green-500 mt-1.5 mr-1"/>My Courses </span></td>
                                        <td className="w-10/12 text-start"> Higher Math, Math Puzzle</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div className="w-full mt-4">
                            <p className="w-full">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in finibus neque. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Vestibulum interdum diam non mi cursus venenatis. Morbi lacinia libero et elementum vulputate. Vivamus et facilisis mauris. Maecenas nec massa auctor, ultricies massa eu, tristique erat. Vivamus in ipsum quis elit vehicula tempus vitae quis lacus. Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui</p>
                            sss
                            <p className="w-full">lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat. lectus sem nulla eu.Eu pellentesque, accumsan tellus leo, ultrices mi dui lectus sem nulla eu. Maecenas arcu, nec ridiculus quisque orci, vulputate mattis risus erat.</p>
                        </div>
                    </div>
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
                        <Dialog.Title as="h1" className="text-lg font-medium leading-6 text-gray-900">
                            Pay <span className="bangla">৳ {classes.price}</span> BDT to take demo class
                        </Dialog.Title>
                        <div className="mt-2">
                            <p className="text-sm text-gray-500">
                            <Link href={ base_url + '/login'}>Log in if you have an account</Link> OR <Link href={ base_url + '/register'}>Otherwise you register an account!!!</Link>
                            </p>
                        </div>
                        </Dialog.Panel>
                    </Transition.Child>
                    </div>
                </div>
                </Dialog>
            </Transition>
        </Layout>
        </>
    );
};

export default TutorProfile;