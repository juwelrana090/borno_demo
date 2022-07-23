import React, { ReactNode, useEffect  } from 'react'  
import { Link,usePage } from '@inertiajs/inertia-react';
import { ToastContainer, toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import Header from './Header'
import Footer from './Footer'

type Props = {
  children?: ReactNode
  title?: string
  description?: string
}


const Layout: React.FC<Props> = props => {
  
  const {title,children} = props;

  useEffect(() =>{        
    document.body.classList.add("h-screen");
    document.body.classList.add("bg-white");
    document.body.classList.add("dark:bg-gray-900");
  });  
  
  const SharedData: any = usePage();
  
  const successMessage = SharedData.props.flash.success;
  const errorMessage = SharedData.props.flash.error;


  
  if(successMessage){
    toast.success(successMessage, {
      position: "top-right",
      autoClose: 5000,
      hideProgressBar: false,
      closeOnClick: true,
      pauseOnHover: true,
      draggable: true,
      progress: undefined,
    });  
    
  }
  
  if(errorMessage){
    toast.success(errorMessage, {
      position: "top-right",
      autoClose: 5000,
      hideProgressBar: false,
      closeOnClick: true,
      pauseOnHover: true,
      draggable: true,
      progress: undefined,
    });
  }
  
  console.log(successMessage)
  console.log(errorMessage)


  return (
    <div>
      <Header />
      <ToastContainer 
        position="top-right"
        autoClose={5000}
        hideProgressBar={false}
        newestOnTop={false}
        closeOnClick
        rtl={false}
        pauseOnFocusLoss
        draggable
        pauseOnHover
      />
      {children}
      <Footer />
    </div>
  )

}

export default Layout