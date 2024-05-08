import { createRoot } from 'react-dom/client'
import React, {useState } from 'react';


export default function Header(){

    const [visible,setVisible]=useState(false)

    const handleVisible=()=>{
        setVisible(!visible)
    }
    return <>
    <section className='relative'>
    <button onClick={handleVisible} data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
              </button>

             {visible &&  <div  className="fixed z-[99999999] lg:hidden top-0 right-0 bottom-[100%]   w-[70vw] h-[100%]  bg-[#cc3333]" style={{ position:"fixed",zIndex:99999999,background:"#0f042d",width:"70vw",height:"100vh" }}>
              <div className=" text-white text-xl " style={{ marginLeft:"2rem" }}>
                <button onClick={ handleVisible} className='border-2 border-white rounded-2xl  px-5 py-2 mt-5 ml-10'>Fermer</button>
              </div>
              <div className="mt-[rem] ml-10 text-white font-bold text-xl flex flex-col" style={{ marginLeft:"2rem",marginTop:"4rem" }}>
              <div className='ml-10' >
                  <h2>
                   Inscription
                    </h2>
                </div>
                <div className='mt-5' >
                  <h2>
                  Nos Reines
                    </h2>
                    <div className='text-sm mt-1 ' style={{ marginLeft:"1rem" }}>
                        <h2 className='mb-2'>Mini miss Cameroon</h2>
                        <h2 className='mb-2'>Miss Teen Curve Cameroon</h2>
                        <h2 className='mb-2'>Miss Teen Cameroon</h2>
                        <h2 className='mb-2'>Miss Teen Petite Cameroon</h2>
                        <h2 className='mb-2'>Miss Pre-Teen Cameroon</h2>
                    </div>
                </div>
                <div className='mt-2' >
                  <h2>
                   Nouvelles
                    </h2>
                </div>
                <div className='mt-5' >
                  <h2>
                 Sponsors
                    </h2>
                </div>
                <div className='mt-5' >
                  <h2>
               Contactez nous
                    </h2>
                </div>
              </div>
              </div>}
    </section>

    </>

}


if(document.getElementById('header')){
    createRoot(document.getElementById('header')).render(<Header />)
}
