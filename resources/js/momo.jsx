import { createRoot } from 'react-dom/client'
import React, { useEffect, useRef, useState } from 'react';
import { fromFetch } from 'rxjs/fetch';
import { switchMap, catchError } from 'rxjs/operators';
import { of } from 'rxjs';

export default function Momo(){
    const href = window.location.origin;
    const link=window.location.href

    const [visibleCard,setVisibleCard]=useState(true)
    const [valided,setValided]=useState(false)
    const [visibleBtn,setVisibleBtn]=useState(true)
    const [inputError,setInputError]=useState("")
    const [number,setNumber]=useState(null)
    const [error,setError]=useState(null)
    const [tokenAccess,setTokenAccess]=useState("")
    const [messageId,setMessageId]=useState("")
    const idCandidate=document.querySelector(".candidateId").innerHTML
    const slug=document.querySelector(".slug").innerHTML
    const [candidateId]=useState(idCandidate)
    const [status,setStatus]=useState("")
    const [text,setText]=useState("")
    const [viewError,setViewError]=useState("")
    const [price,setPrice]=useState("100")
    const [vote,setVote]=useState(1)
    const [success,setSuccess]=useState(false)
    const isMounted = useRef(true);

    const fetchData=(url)=>{
        return fromFetch(url).pipe(
            switchMap(response=>{
                if(response.ok){
                    return response.json();
                }else{

                }
            }),
            catchError(err => {
                // Gestion des erreurs de réseau ou autres erreurs capturées

                //setError(`une erreur à été  produite,verifié  votre connexion internet et réessayer!`)
              })
        )
    }

    const fetchValidation=()=>{
        return fromFetch(url).pipe(
            switchMap(response=>{
                if(response.ok){
                    return response.json();
                }else{

                }
            }),
            catchError(err => {
                // Gestion des erreurs de réseau ou autres erreurs capturées
                //console.error(err);

              })
        )
    }
    const retryBtn=()=>{
        setVisibleCard(true)
        setError(null)
    }

    const numberChanger=(event)=>{
        setNumber(event.target.value)
    }
    const handleSubmit=(event)=>{
        event.preventDefault();


        if(number==null){
            setInputError("votre numéro de téléphone ne peut pas etre vide")
            return;
        }

        setVisibleBtn(false)
        const subscription = fetchData(`${href}/init/pay/momo/1/${number}/${candidateId}/${vote}`).subscribe({
            next: result => {
                setVisibleCard(false)
                                setText("En cours de traitement ne fermez pas la page s'il vous plait!...")
                    setTokenAccess(result.token)
                    setError(null)
                    const subscription2=fetchData(`${href}/generate/messageId/${result.token}/${price}/${number}`).subscribe({
                        next: result => {
                                setError(null)
                                setMessageId(result.messageId)
                                if(result.messageId==null){
                                    setError(`une erreur à été  produite,verifié  votre connexion internet et réessayer!`)
                                    setInputError('')
                                }
                                setStatus('Pending')
                                setVisibleCard(false)
                                setText("En cours de traitement ne fermez pas la page s'il vous plait!...")
                        },
                        error: err => {
                            setError(`une erreur à été  produite,verifié  votre connexion internet et réessayer!`)
                           setInputError('')
                        },
                        complete: () => console.log('Fetch terminé')
                    })


            },
            error: err => {
                setVisibleCard(false)
                    setError(`une erreur à été  produite,verifié que  votre connexion internet est stable et réessayer!`)
                   setInputError('')
            },



          });






    }




    const getStatus=()=>{
        const subscription3=fetchData(`${href}/status/pay/momo/${messageId}/${tokenAccess}`).subscribe({
            next: result => {
                if(result.status && !result.status.headers ){
                    setStatus(result.status)

                            if(result.status=="PENDING"){
                                setText("Votre paiement est en cours veuillez validez ou tapez *126# ne fermez pas la page s'il vous plait!...")
                            }else if(result.status=="CANCELLED"){

                                    setError("Votre paiement a été annuleé!...")
                                    setInputError('')


                            }else if(result.status=='FAILED'){
                                setError("Votre paiement a été echoué,verifié que vous aviez assez de fond dans votre compte Mobile Money!...")
                                setInputError('')
                            }else if(result.status=="SUCCESSFULL" && isMounted.current===true){
                                isMounted.current=false
                                const validation = fetchData(`${href}/payment/successfull/momo/${candidateId}/${vote}/${price}/Momo`).subscribe({
                                    next: result => {
                                        if(result.code===200){
                                            setTokenAccess(null)
                                            setMessageId(null)
                                            setSuccess(true)
                                            setVisibleCard(false)
                                            setText(null)

                                        }
                                    },
                                })
                            }




                }



            },
            error: err => {


            },

        })
    }



    useEffect(()=>{


        if(status==="Pending"){
            const id= setInterval(()=>{
                getStatus();
    },2000)
        }










        //setStatus(status.status)
    })




    return(
        <>
<h2 className='text-center font-bold text-2xl mb-2'>Mobile Money</h2>

{price && <h2 className='text-center font-bold text-sm mb-2'>Vous etes sur le point de faire un achat de {vote} vote(s) {price} Fcfa</h2>}
{inputError && <div style={{ color:"red" }}>{inputError}</div>}
{success && <div className='text-white flex flex-col gap-4 items-center justify-center bg-green-500 p-6 mb-3 rounded-md' style={{ background:'green',padding:'3rem',marginBottom:'1.5rem',"borderRadius":"1rem" }} >

<div><h2 className="text-2xl text-white font-bold mb-5">Votre paiement à été validé avec success!</h2></div>
<div className="flex justify-center gap-3"><a href={`${href}/candidate/${slug}`}  className="text-white bg-[#0f042d]   focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style={{ padding:'1rem' }}>Profil de la candidate</a>
    <a href="/"  class="text-black bg-[#fff]   focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style={{ padding:"1rem"}}>Accueil</a>
</div>
</div>}
{error!==null && <div className='text-white max-sm:mx-6  flex flex-col gap-4 items-center justify-center bg-red-500 p-6 mb-3 rounded-md' style={{ background:"#ff0037" }}>

    <div>{error}</div>
    <div><a href={link} style={{ paddingLeft:"1.25rem",paddingRight:"1.25rem",paddingTop:"0.625rem",paddingBottom:"0.625rem"  }} class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Réessayer</a></div>
    </div>}
        {visibleCard && <div class="flex flex-col max-sm:mx-6 bg-gray-400 px-12  pb-[3rem] pt-[3rem] rounded-lg " style={{ background:"gray",padding:"3rem",marginLeft:"1rem",marginRight:"1rem" }}>

        <form onSubmit={handleSubmit} class="">
            <div class="mb-3">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Numéro de téléphone</label>
              <input onChange={numberChanger} value={number} type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  w-full p-4" placeholder="Entrez votre numéro de téléphone" />
            </div>
            <div className='mb-5'>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Nombre de vote</label>
  <select onChange={(e)=>{
    if(e.target.value==="100"){
        setPrice(e.target.value)
        setVote(1)
    }
    if(e.target.value==="1000"){
        setPrice(e.target.value)
        setVote(11)
    }
    if(e.target.value==="5000"){
        setPrice(e.target.value)
        setVote(60)
    }
    if(e.target.value==="10000"){
        setPrice(e.target.value)
        setVote(150)
    }
    if(e.target.value==="100000"){
        setPrice(e.target.value)
        setVote(2000)
    }
  }} id="countries" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">

    <option value="100">01 vote (100 Fcfa)</option>
    <option value="1000">11 votes (1000 Fcfa)</option>
    <option value="5000">60 votes (5000 Fcfa)</option>
    <option value="10000">150 votes (10.000 Fcfa)</option>
    <option value="100000">2000 votes (100.000 Fcfa)</option>
  </select>
            </div>
            {visibleBtn ? <button type='submit'  class="text-white bg-[#0f042d]  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style={{ paddingLeft:"1.25rem",paddingRight:"1.25rem",paddingTop:"0.625rem",paddingBottom:"0.625rem"  }}>Envoyer</button>: <button type='submit' disabled style={{ background:"#00000079",color:"white",paddingLeft:"1.25rem",paddingRight:"1.25rem",paddingTop:"0.625rem",paddingBottom:"0.625rem" }} class="text-white bg-gray-400  focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">


                <div className='flex gap-1 justify-center items-center'>

                <div>
                En cours d'envoi
                </div>
                <div role="status">
    <svg aria-hidden="true" class="inline w-3 h-3 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>
                </div></button>}
          </form>

    </div>}
{!visibleCard && error ==null && !valided && !success &&
<div role="status">
    <div className='flex flex-col justify-center items-center gap-5'>
    <div role="status">
    <svg aria-hidden="true" class="inline w-7 h-7 text-gray-200 animate-spin dark:text-gray-600 fill-red-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>
        <div className='text-center'>{text}</div>
    </div>


</div>
}
        </>

    );
}






if(document.getElementById('momo')){
    createRoot(document.getElementById('momo')).render(<Momo />)
}

