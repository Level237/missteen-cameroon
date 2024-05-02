import { createRoot } from 'react-dom/client'
import React, { useState } from 'react';


export default function App(){
    const href = window.location.origin;
    const [visibleCard,setVisibleCard]=useState(true)
    const [inputError,setInputError]=useState("")
    const [number,setNumber]=useState(null)
    const [error,setError]=useState(null)
    const [tokenAccess,setTokenAccess]=useState(null)
    const [payToken,setPayToken]=useState(null)

    const retryBtn=()=>{
        setVisibleCard(true)
        setError(null)
    }

    const numberChanger=(event)=>{
        setNumber(event.target.value)
    }
    const handleSubmit=async(event)=>{

        event.preventDefault();
        if(number==null){
            setInputError("votre numéro de téléphone ne peut pas etre vide")
            console.log(inputError);
            console.log("le");
            return;
        }
        try{


            const token=await fetch(`${href}/access`)

          if(token.status===500){
            setVisibleCard(false)
             setError(`une erreur à été  produite,verifié  votre connexion internet et réessayer!`)
            setInputError('')
          }
            const data=await token.json()
            setTokenAccess(data.token)
            setPayToken(data.payToken)


                const validation=await fetch(`${href}/validation/${data.token}/${data.payToken}/${number}/10`)
                const response=await validation.json()
                if(response.code===20){
                    setError(t.message)
                    setVisibleCard(false)
                }
                else if(response.code===21){
                    setVisibleCard(false)
                    console.log(response);
                }

        }catch (error) {

        }

    }
    return(
        <>
{inputError && <div style={{ color:"red" }}>{inputError}</div>}
{error && <div className='text-white flex flex-col gap-4 items-center justify-center bg-red-500 p-6 mb-3 rounded-md' style={{ background:"#ff0037" }}>

    <div>{error}</div>
    <div><button onClick={retryBtn}  class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Réessayer</button></div>
    </div>}
        {visibleCard && <div class="flex flex-col bg-gray-400 px-12  pb-[3rem] pt-[3rem] rounded-lg justify-center items-center">

        <form onSubmit={handleSubmit} class="">
            <div class="mb-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Numéro de téléphone</label>
              <input onChange={numberChanger} value={number} type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-4" placeholder="Entrez votre numéro de téléphone" />
            </div>

            <button type='submit'  class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Envoyer</button>
          </form>

    </div>}
{!visibleCard && error ==null &&
<div role="status">
    <div className='flex flex-col justify-center items-center gap-5'>
    <div role="status">
    <svg aria-hidden="true" class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>
        <div className='text-center'>En cours de traitement ne fermez pas la page s'il vous plait!...</div>
    </div>


</div>
}
        </>

    );
}

if(document.getElementById('root')){
    createRoot(document.getElementById('root')).render(<App />)
}

