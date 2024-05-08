<nav class="bg-[#14121ade] backdrop-blur fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="/" class="">
            <img src="{{ asset('assets/img/logo.png') }}" class="h-[3.9rem]" alt="Flowbite Logo">

        </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a href="{{ route('inscription') }}" class=" bg-[#f1c802] hover:bg-[#f1c802] text-black focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 text-center">Postuler</button>

        </a>
        <div id="header">

        </div>

    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 gap-5 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0   dark:border-gray-700">
        <li class="relative">
          <a class="block py-2 px-3  text-[#f1c802] rounded md:bg-transparent  md:p-0" aria-current="page">Inscription</a>

        </li>
        <li id="menu1" class="relative">
          <a href="{{ route('candidate.list') }}" class="block py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#f1c802] md:p-0     md:dark:hover:bg-transparent dark:border-gray-700">Nos Reines</a>
          <div id="sub" class="absolute hidden   flex-col bg-white mt-5 pb-[8rem] ml-[-2rem] pt-4 pl-3 w-[12rem]   h-16">
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Mini miss Cameroon
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Miss Teen Curve Cameroon
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Miss Teen Cameroon
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Miss Teen Petite Cameroon
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Miss Pre-Teen Cameroon
            </div>
    </div>
        </li>
        <li class="relative">
            <a class="block py-2 px-3  text-white rounded md:bg-transparent  md:p-0" aria-current="page">Candidates</a>

          </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#f1c802] md:p-0     md:dark:hover:bg-transparent dark:border-gray-700">Sponsors</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#f1c802] md:p-0     md:dark:hover:bg-transparent dark:border-gray-700">Contactez nous</a>
        </li>
      </ul>
    </div>
    </div>
</nav>
@viteReactRefresh
@vite(['resources/js/header.jsx'])


