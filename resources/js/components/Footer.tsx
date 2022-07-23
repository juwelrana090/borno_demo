import React,{ useEffect }  from 'react'
import { Link } from '@inertiajs/inertia-react'


import { IoLogoFacebook, IoLogoLinkedin, IoLogoTwitter, IoLogoYoutube} from "react-icons/io";


const Footer = (props: any) => {

    const base_url = window.location.origin;

    // console.log(router)

    const todaysDate = new Date()
    const currentYear = todaysDate.getFullYear()
    
    return (
        <>
            <footer className='bottom-0 border-t border-gray-100'>
                <div className="bg-zinc-200  flex justify-center ">
                    <div className="container mx-auto px-4 md:mx-auton p-4">
                        
                        <div className="grid grid-cols-1 md:grid-cols-7 lg:grid-cols-7 md:gap-3 lg:gap-3">
                            <div className="col-span-2 grid justify-items-center">
                                <div className="">
                                    <div className="text-start mb-1">
                                        <Link href={base_url}>
                                            <img src={ base_url + '/img/logo.png'} alt="Logo" width="110px"/>
                                        </Link>
                                        <h2 className="text-black text-lg subpixel-antialiased uppercase inline-block">Download our app</h2>
                                    </div>

                                    <div className="flex">
                                        <div className="h-14">
                                            <a href="http://cutt.ly/bornobangla" className="text-sky-600  flex">
                                                <img className="inline" src={ base_url + '/img/google_play_store_logo.svg'} width={136} height={42} alt="Google Play Store" />
                                            </a>
                                        </div>
                                        <div className="h-14">
                                            <a href=" https://apps.apple.com/in/app/borno-b" className="text-sky-600  flex">
                                                <img className="inline" src={ base_url + '/img/app_store_logo.svg'} width={136} height={42} alt="App Store" />
                                            </a>
                                        </div>
                                    </div>
                                    <div className="text-start mb-1">
                                        <div className="flex gap-3">
                                            <span className="text-black text-md subpixel-antialiased uppercase inline-block">Follow Us :</span>
                                            <span className="text-2xl inline-block"><a href="https://www.facebook.com/bornobanglainfo" className="text-sky-600  flex" target="_blank"><IoLogoFacebook/></a></span>
                                            <span className="text-2xl inline-block"><a href="https://twitter.com/" className="text-sky-600  flex" target="_blank"><IoLogoTwitter/></a></span>
                                            <span className="text-2xl inline-block"><a href="https://www.linkedin.com/in/md-saidur-rahman-54a740212/" className="text-sky-600  flex" target="_blank"><IoLogoLinkedin/></a></span>
                                            <span className="text-2xl inline-block"><a href="https://www.youtube.com/channel/UCEsr4lXaksFUE5xZYkNkuhw" className="text-sky-600  flex" target="_blank"><IoLogoYoutube/></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-span-5 grid justify-items-center md:justify-items-end lg:justify-items-end  ">
                                <div className="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-3">

                                    <div className="">
                                        <div className="text-start mb-2">
                                            <h2 className="text-black text-md font-bold subpixel-antialiased uppercase inline-block">Partners</h2>
                                        </div>
                                        <ul className="list-none grid grid-cols-1 divide-y text-sky-600 ">
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/affiliate-program'} className="text-sky-600  flex"><span className="mx-1">Affiliate Program</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/partner-directory'} className="text-sky-600  flex"><span className="mx-1">Partner Directory</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/membership'} className="text-sky-600  flex"><span className="mx-1">Membership</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/ads-promotions'} className="text-sky-600  flex"><span className="mx-1">Ads Promotions</span></Link>
                                            </li>
                                        </ul>
                                    </div>

                                    <div className="">
                                        <div className="text-start mb-2">
                                            <h2 className="text-black text-md font-bold subpixel-antialiased uppercase inline-block">About</h2>
                                        </div>
                                        <ul className="list-none grid grid-cols-1 divide-y text-sky-600 ">
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/about-us'} className="text-sky-600  flex"><span className="mx-1">About US</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/faq'} className="text-sky-600  flex"><span className="mx-1">FAQ</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/terms-and-conditions'} className="text-sky-600  flex"><span className="mx-1">Terms and Conditions</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/privacy-policy'} className="text-sky-600  flex"><span className="mx-1">Privacy policy</span></Link>
                                            </li>
                                        </ul>
                                    </div>

                                    <div className="">
                                        <div className="text-start mb-2">
                                            <h2 className="text-black text-md font-bold subpixel-antialiased uppercase inline-block">Help</h2>
                                        </div>
                                        <ul className="list-none grid grid-cols-1 divide-y text-sky-600 ">
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/contact-us'} className="text-sky-600  flex"><span className="mx-1">Contact Us</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/refund-policy'} className="text-sky-600  flex"><span className="mx-1">Refund Policy</span></Link>
                                            </li>
                                            <li className="text-smpt-1 pb-1 mb-1">
                                                <Link href={base_url + '/admission-policy'} className="text-sky-600  flex"><span className="mx-1">Admission Policy</span></Link>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="bg-gray-300 border-t border-gray-200">
                    <div className="container mx-auto">
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
                            <div className="text-black text-sm text-center md:text-start lg:text-start p-3 w-full">
                                <p className="md:mt-2 lg:mt-2">Copyright © 2021 - {currentYear} Borno Bangla. All rights reserved.</p> 
                            </div>
                            <div className="text-center md:text-end lg:text-end p-3 w-full"> 
                                <img src={ base_url + '/img/payment_gateway.png'} alt="Payment Gateway" className="w-full" /> 
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </>
    )
}

export default Footer;
