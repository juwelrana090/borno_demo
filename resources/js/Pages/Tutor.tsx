import React, { Fragment, useState }  from "react";
import { Dialog, Transition } from '@headlessui/react'
import { Link, Head, usePage} from '@inertiajs/inertia-react'
import Layout from '../components/Layout'
import TutorCard from '../components/TutorCard'
import { FaAlignJustify, FaThList,FaThLarge} from "react-icons/fa";
import { FaStar, FaStarHalfAlt } from "react-icons/fa";
import Select from 'react-select'


interface Props {
    id?: number
}


const Tutor: React.FC<Props> = (props: any) => {
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

/*
Chittagong =	Comilla , Feni , Brahmanbaria , Rangamati , Noakhali , Chandpur , Laxmipur , Chittagong , Cox 's Bazar , Khagrachari , Bandarban

Rajshahi =	Sirajganj , Pabna , Bogra , Rajshahi , Natore , Joypurhat , Chapainawabganj , Naogaon

Khulna	= Jessore , Satkhira , Meherpur , Narail , Chuadanga , Kushtia , Magura , Khulna , Bagerhat , Jhenaidah
Barisal	Jhalkathi , Patuakhali , Pirojpur , Barisal , Bhola , Barguna

Sylhet = Sylhet , Moulvibazar , Habiganj , Sunamganj

Dhaka	= Narsingdi , Gazipur , Shariatpur , Narayanganj , Tangail , Kishoreganj , Manikganj , Dhaka , Munshiganj , Rajbari , Madaripur , Gopalganj , Faridpur

Rangpur	= Panchagarh , Dinajpur , Lalmonirhat , Nilphamari , Gaibandha , Thakurgaon , Rangpur , Kurigram

Mymensingh	= Sherpur , Mymensingh , Jamalpur , Netrakona

http://www.bangladesh.gov.bd/site/view/upazila-list/%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9
*/

    return (
        <>
        <Head title="Tutor | BornoBangla.com" meta-description="Your page description"/>
        <Layout>
            <div className="md:container lg:container md:mx-auto md:p-4 mt-4 mb-4 bg-white">
                <div className="grid grid-cols-1 md:grid-cols-4 md:gap-3">

                    <div className="w-full p-3 md:p-0">
                        <div className="w-full">
                            <div className="inline-block w-full pt-0 pb-5 bg-white rounded shadow-md border">
                                <div className="-mt-1 mb-3 pl-5 pb-5 h-12 cursor-pointer text-gray-800 text-4xl border-b border-gray-300">
                                    <span className="text-lg font-bold">Location</span>
                                </div>
                                <div className="w-full grid grid-cols-1">
                                    <div className="w-full p-2 mb-6">
                                        <div className="w-full mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Division
                                        </div>
                                        <div className="w-full items-center h-5">
                                            <select className="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                name="division"
                                                onChange={handleChange}
                                            >
                                                <option selected>Select Division</option>
                                                <option value="Barisal">Barisal</option>
                                                <option value="Chittagong">Chittagong</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Khulna">Khulna</option>
                                                <option value="Mymensingh">Mymensingh</option>
                                                <option value="Rajshahi">Rajshahi</option>
                                                <option value="Rangpur">Rangpur</option>
                                                <option value="Sylhet">Sylhet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div className="w-full p-2 mb-6">
                                        <div className="w-full mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            District
                                        </div>
                                        <div className="w-full items-center h-5">
                                            <select className="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                name="district"
                                                onChange={handleChange}
                                            >
                                                <option selected>Select District</option>
                                                <option value="Dhaka">Dhaka</option>
                                                <option value="Narsingdi">Narsingdi</option>
                                                <option value="Shariatpur">Shariatpur</option>
                                                <option value="Narayanganj">Narayanganj</option>
                                                <option value="Kishoreganj">Kishoreganj</option>
                                                <option value="Munshiganj">Munshiganj</option>
                                                <option value="Rajbari">Rajbari</option>
                                                <option value="Madaripur">Madaripur</option>
                                                <option value="Gopalganj">Gopalganj</option>
                                                <option value="Faridpur">Faridpur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div className="w-full p-2 mb-6">
                                        <div className="w-full mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Upazilla
                                        </div>
                                        <div className="w-full items-center h-5">
                                            <select className="form-select appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                name="upazilla"
                                                onChange={handleChange}
                                            >
                                                <option selected>Select Upazilla</option>
                                                <option value="Savar">Savar</option>
                                                <option value="Dhamrai">Dhamrai</option>
                                                <option value="Keraniganj">Keraniganj</option>
                                                <option value="Nawabganj">Nawabganj</option>
                                                <option value="Dohar">Dohar</option>
                                            </select>
                                        </div>
                                    </div>
                                    {/* <div className="w-full p-2 mb-6">
                                        <div className="w-full mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                            Union
                                        </div>
                                        <div className="w-full items-center h-5">
                                            <Select 
                                                name="union"
                                                onChange={handleChange}
                                                options={Union} />
                                        </div>
                                    </div> */}
                                </div>
                            </div>
                        </div>

                        <div className="w-full mt-4">
                            <div className="inline-block w-full pt-0 pb-5 bg-white rounded shadow-md border">
                                <div className="-mt-1 mb-4 pl-5 pb-5 h-12 cursor-pointer text-gray-800 text-4xl border-b border-gray-300">
                                    <span className="text-lg font-bold">Subject</span>
                                </div>
                                <div className="w-full grid grid-cols-1 ">
                                    
                                    <div className="flex items-start pl-2 mb-6">
                                        <div className="flex items-center h-5">
                                            <input id="terms" type="checkbox" value="" className="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
                                        </div>
                                        <label htmlFor="terms" className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">English</label>
                                    </div>

                                    <div className="flex items-start pl-2 mb-6">
                                        <div className="flex items-center h-5">
                                            <input id="terms" type="checkbox" value="" className="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
                                        </div>
                                        <label htmlFor="terms" className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mathematics</label>
                                    </div>

                                    <div className="flex items-start pl-2 mb-6">
                                        <div className="flex items-center h-5">
                                            <input id="terms" type="checkbox" value="" className="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
                                        </div>
                                        <label htmlFor="terms" className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chemical</label>
                                    </div>

                                    <div className="flex items-start pl-2 mb-6">
                                        <div className="flex items-center h-5">
                                            <input id="terms" type="checkbox" value="" className="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
                                        </div>
                                        <label htmlFor="terms" className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Physics</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="w-full p-3 md:p-0 md:col-span-3">
                        <div className="w-full p-4 border rounded-sm shadow-md flex justify-between">
                            <div className="text-lg font-bold uppercase">Tutor</div>
                            <div className="flex flex-row">
                                <div className="flex basis-2/4 ">
                                    <label htmlFor="countries" className="w-12 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Show:</label>
                                    <select id="countries" className="w-12 h-6 -mt-0.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>20</option>
                                        <option>40</option>
                                        <option>60</option>
                                        <option>80</option>
                                    </select>
                                </div>
                                <div className="ml-2 flex basis-2/4">
                                    <FaThList className="ml-2 "/> 
                                    <FaThLarge className="ml-2"/>
                                </div>
                            </div>
                        </div>
                        <div className="w-full mt-3 mb-2 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
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
                                                <a href={ base_url + '/class-view/'+ id} className="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded text-sm px-2 py-2 text-center dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">Demo Class</a>
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

                </div>
            </div>
        </Layout></>
    );
};

export default Tutor;