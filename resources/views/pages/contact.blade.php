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

        @if(Session::get('success'))
        <div
        class="flex w-full mt-16 border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-8 shadow-md  dark:bg-opacity-30 md:p-9"
      >
        <div
          class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]"
        >
          <svg
            width="16"
            height="12"
            viewBox="0 0 16 12"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
              fill="white"
              stroke="white"
            ></path>
          </svg>
        </div>
        <div class="w-full">
          <h5
            class="mb-3 text-lg font-bold text-[#34D399]"
          >
            {{ Session::get('success') }}
          </h5>
          <p class="text-base leading-relaxed text-body">

                <a class="bg-[#14121a] text-white p-3 rounded-lg" style="background:#14121a " href="/">Accueil</a>


          </p>
        </div>
      </div>
      @endif


        <form method="POST" action="{{ route('contact.send') }}" class="max-w-sm mx-auto mt-24 max-sm:mx-4">
            @csrf
            <div class="mb-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Nom</label>
              <input type="text" name='name' id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5  dark:border-gray-600 " placeholder="Entrer votre nom" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Prenom</label>
                <input type="text" name="prenom
                " id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5  dark:border-gray-600 " placeholder="Entrer votre prenom" required />
              </div>
              <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Numéro de Téléphone</label>
                <input type="text" name="phone" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  block w-full p-2.5  dark:border-gray-600 " placeholder="Entrer votre numéro de téléphone" required />
              </div>
           <div class="mb-5">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Votre message</label>
            <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Entrez votre message"></textarea>

           </div>
            <button type="submit" class="text-black  hover:bg-[#f1c802] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center bg-[#f1c802]  dark:focus:ring-blue-800">Envoyer</button>
          </form>

    </section>
@endsection
