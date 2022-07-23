import React, { Fragment, useState }  from "react";
import { Head, Link,usePage } from '@inertiajs/inertia-react'
import { Dialog, Transition } from '@headlessui/react'

import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';

import Layout from '../components/Layout'
import Slider from '../components/Slider'
import CetagorySlider from '../components/CetagorySlider'
import TutorCard from '../components/TutorCard'
import { FaStar, FaStarHalfAlt } from "react-icons/fa";

const Home = () => {
    
    const base_url = window.location.origin;


    const SharedData: any = usePage();
    const appName  = SharedData.props.appName;
    const userdata = SharedData.props.auth.user;
    const classes = SharedData.props.classes;

    // console.log(classes);

    const [state, setState] = React.useState({
        division: '',
        district: '',
        upazilla: '',
        union: '',
    });

    const handleChange = (
        event: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>
    ) => {
        setState({
            ...state,
            [event.currentTarget.name]: event.currentTarget.value
        });
    };

    let [isOpen, setIsOpen] = useState(false)

    function closeModal() {
        setIsOpen(false)
    }

    function openModal() {
        setIsOpen(true)
    }
return (
    <>
        <Head title="Borno Bangla | Online Admission" meta-description="Your page description"/>
        <Layout>
            <div className="w-full z-10"><Slider /></div>
            <div className="md:container lg:container md:mx-auto md:p-4 mt-4 mb-4 bg-white">
                <div className="md:mt-10 md:mb-10 grid grid-cols-12 gap-4 justify-center bg-white rounded-md shadow-md">
                    <div className="col-span-12 w-full text-center">
                        <h1 className="text-3xl font-bold mb-5 md:mb-10 text-green-500">All the benefits you get in Borno Bangla using!</h1>
                        <CetagorySlider />
                    </div>
                </div>
            </div>

            <div className="w-full bg-green-500">
                <div className="md:container lg:container md:mx-auto md:p-4 mt-4 mb-4  grid grid-cols-1 sm:grid-cols-2 gap-2">
                    <div className="w-full grid justify-items-end">
                        <img src="./img/info/preparation-abbut.png" className=""/>
                    </div>
                    <div className="w-full grid justify-items-start ">
                        <div className="mt-8 p-10">
                            <h3 className="bg-gray-500 bg-opacity-75 backdrop-blur backdrop-filter firefox:bg-opacity-30 text-white text-lg md:text-2xl text-center  subpixel-antialiased p-4 rounded-sm">
                                Borno Bangla helps you find your best school, college, or University.<br/>
                                Take high quality preparation course through us
                            </h3>

                            <h1 className="text-white text-2xl  md:text-3xl lg:text-4xl text-center subpixel-antialiased p-4">
                                We Are Experts Learning Institution
                            </h1>
                            <p className="border-l-4 border-red-500 text-white md:text-lg subpixel-antialiased p-4 ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do us mod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <div className="grid grid-cols-1 md:grid-cols-3 gap-4 justify-items-center p-4">
                                <Link href={base_url + '/school'} className="text-center p-2 rounded-sm shadow-md bg-gradient-to-r from-cyan-500 to-blue-500">
                                    <h1 className="text-center text-lg font-bold uppercase text-white mb-1 p-2">School</h1>
                                </Link>

                                <Link href={base_url + '/collage'} className="text-center p-2 rounded-sm shadow-md bg-gradient-to-r from-sky-500 to-indigo-500">
                                    <h1 className="text-center text-lg font-bold uppercase text-white mb-1 p-2">Collage</h1>
                                </Link>

                                <Link href={base_url + '/university'} className="text-center p-2 rounded-sm shadow-md bg-gradient-to-r from-violet-500 to-fuchsia-500">
                                    <h1 className="text-center text-lg font-bold uppercase text-white mb-1 p-2">University</h1>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div className="md:container lg:container md:mx-auto md:p-4 mt-4 mb-4">
                <div className="w-full md:mt-4 md:mb-4 text-center">
                    <h3 className="text-green-500 text-2xl font-mono text-center uppercase subpixel-antialiased p-4">The tutor's one & only mission is to extend your knowledge base?</h3>
                    <h1 className="text-gray-500 text-4xl font-sans text-center uppercase subpixel-antialiased p-4">What do you want to learn today?</h1>
                </div>
                <div className="w-full mb-2 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                {
                    classes.map(({id, image, name, subject, price}: any) => {
                        return (
                            <>
                        <div key={id} className="max-w-sm rounded overflow-hidden shadow-lg p-1 sm:p-0">
                            <div className="z-10 absolute w-full flex px-3 ml-0 mt-2">
                                <span className="bg-green-500 text-sm font-semibold uppercase inline-block text-white rounded shadow-md p-2">{subject}</span>
                            </div>
                            <Link href={ base_url + '/tutor/profile'}><img className="w-full" src={ base_url + '/images/'+image} alt="Sunset in the mountains" /></Link>
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
                                                    <Link href={ base_url + '/tutor/profile'}>{name}</Link>
                                                </th>
                                            </tr>
                                            <tr className="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td className="py-4 px-6">
                                                    {subject}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div className="flex justify-between items-center p-3">
                                <span className="text-base md:text-3xl font-bold text-gray-900 dark:text-white bangla">৳ {price}</span>
                                {
                                    userdata ? (
                                        <Link href={ base_url + '/class-view/'+ id} className="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-2 py-2 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">Demo Class</Link>
                                    ) : (
                                        <button onClick={openModal} className="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-2 py-2 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">Demo Class</button>
                                    )
                                }
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
                                    Are you interested in taking a demo class?
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
                        </>
                        )
                        })
                }
                </div>
                <div className="w-full grid grid-cols-1 justify-items-center p-4 text-center">
                    <Link href={base_url + '/tutor'} className="text-center rounded-md shadow-md bg-gradient-to-r from-red-500 to-orange-500">
                        <h1 className="text-center text-lg font-bold uppercase text-white mb-1 p-2">More Tutor's</h1>
                    </Link>
                </div>
            </div>

        </Layout>
    </>
    );
};

export default Home;