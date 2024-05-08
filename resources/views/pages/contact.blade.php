@extends('layouts.frontend.main')

@section('title')
Contact
@endsection

@section('content')
<section class="relative  h-[60vh] bg-left bg-cover bg-[url('asset('bg.png')')]" style="background-image: url('assets/img/bg.png');background-position:center">
    <div class="flex items-center justify-center absolute inset-0 bg-gradient-to-r from-neutral-600 to-[#0f042d] w-100 opacity-[0.9]">

    </div>
    <div class="absolute inset-0 flex items-center justify-center">
    <h2 class="text-5xl max-sm:text-4xl font-bold text-white max-sm:text-center">Contact</h2>
    </div>
    </section>
   <section class="h-10 bg-[#0f042d]">

    </section>
    <section className='mx-40 pb-40 max-sm:mx-5'>



        <form class="max-w-sm mx-auto mt-24 max-sm:mx-4">
            <div class="mb-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Nom</label>
              <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5  dark:border-gray-600 " placeholder="Entrer votre nom" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Prenom</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5  dark:border-gray-600 " placeholder="Entrer votre prenom" required />
              </div>
              <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Numéro de Téléphone</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5  dark:border-gray-600 " placeholder="Entrer votre numéro de téléphone" required />
              </div>
           <div class="mb-5">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Votre message</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrez votre message"></textarea>

           </div>
            <button type="submit" class="text-black  hover:bg-[#f1c802] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-[#f1c802]  dark:focus:ring-blue-800">Envoyer</button>
          </form>

    </section>
@endsection
