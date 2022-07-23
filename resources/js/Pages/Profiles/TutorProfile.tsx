import React from "react";
import { Head } from '@inertiajs/inertia-react'
import Layout from '../../components/Layout'
import TutorCard from '../../components/TutorCard'
import { FaGraduationCap, FaStar, FaHeart, FaBookmark} from "react-icons/fa";


const TutorProfile = () => {
    const base_url = window.location.origin;
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
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-2 border-b border-gray-200 before:w-1/4 before:border-b-4 before:border-yellow-500">Contact Info</div>
                        </div>
                    </div>

                    <div className="w-full p-3 md:p-0 md:col-span-3">
                        <div className="w-full mt-2">
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-2 border-b border-gray-200 before:w-1/4 before:border-b-4 before:border-yellow-500">Mijarun Rahman</div>
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

                        <div className="w-full mt-2">
                            <div className="w-full text-lg font-bold pt-6 pr-0 pb-2 mb-2 border-b border-gray-200 before:w-1/4 before:border-b-4 before:border-yellow-500">Courses By  Mijarun Rahman</div>
                        </div>
                        <div className="w-full mt-3 mb-2 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <TutorCard/>
                            <TutorCard/>
                            <TutorCard/>
                            <TutorCard/>
                            <TutorCard/>
                            <TutorCard/>
                        </div>
                    </div>
                </div>
            </div>
        </Layout>
        </>
    );
};

export default TutorProfile;