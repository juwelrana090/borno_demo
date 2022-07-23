import React from "react";
import { Head } from '@inertiajs/inertia-react'
import Layout from '../components/Layout'

const Books = () => {
    return (
        <>
        <Head title="Books | BornoBangla.com" meta-description="Your page description"/>
        <Layout>
            <div className="md:container lg:container md:mx-auto md:p-4 mt-4 mb-4 bg-white">
                <h1 className="text-3xl font-bold mb-5 md:mb-10 text-green-500">The Books page will be updating.......</h1>
            </div>
        </Layout>
        </>
    );
};

export default Books;