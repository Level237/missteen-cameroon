import { createRoot } from 'react-dom/client'
import React, { useState } from 'react';


export default function App(){
    const href = window.location.origin;
    const [visible,setVisible]=useState(false)
    const [tokenAccess,setTokenAccess]=useState(null)
    const hanfleSubmit=async()=>{

        try{
            const token=await fetch(`${href}/access`)
            const data=await token.json()
            setTokenAccess(data.access_token)
            if(token){

            }
        }catch (error) {
        }

    }
    return(
        <>
<div class="flex flex-col bg-gray-400 px-12 pb-[3rem] pt-[3rem] rounded-lg justify-center items-center">
        <form class="">
            <div class="mb-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Numéro de téléphone</label>
              <input type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-4" placeholder="Entrez votre numéro de téléphone" required />
            </div>


          </form>
          <button onClick={hanfleSubmit} class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Envoyer</button>
    </div>
        </>

    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<App />)
}

