<nav class="bg-[#14121ade] backdrop-blur fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
        <a href="/" class="">
            <img src="{{ asset('assets/img/logo.png') }}" class="h-[3.9rem]" alt="Miss Teen Logo">

        </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a href="{{ route('inscription') }}" class=" hidden max-sm:block bg-[#f1c802] hover:bg-[#f1c802] text-black focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 text-center">Postuler</button>

        </a>
        <div id="header">

        </div>

    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 gap-2 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0   dark:border-gray-700">
        <li id="menu3" onmouseover="mouseOver1()" class="relative">
          <a  class="block cursor-pointer py-2 px-3  text-[#f1c802] rounded md:bg-transparent  md:p-0" aria-current="page">A Propos de nous</a>
          <div id="sub3" onmouseover="mouseOver1()" onmouseout="mouseOut1()"  class="absolute hidden   flex-col bg-white mt-5 pb-[4rem] ml-[-2rem] pt-4 pl-3 w-[12rem]   h-16">
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Du Concours
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Directeurs Régionaux
            </div>

    </div>
        </li>
        <li id="menu1" class="relative">
          <a class="block cursor-pointer py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#f1c802] md:p-0     md:dark:hover:bg-transparent dark:border-gray-700">Hall Of Fame</a>
          <div id="sub" class="absolute hidden   flex-col bg-white mt-5 pb-[9rem] ml-[-2rem] pt-4 pl-3 w-[12rem]   h-16">
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Mini miss Cameroon
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                <a href="{{ route('miss.elues',"miss-teen-curve") }}"> Miss Teen Curve Cameroon</a>

            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                <a href="{{ route('miss.elues',"miss-teen-cameroon") }}">  Miss Teen Cameroon</a>

            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Miss Teen Petite Cameroon
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Miss Pre-Teen Cameroon
            </div>
            <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                Mister Teen
            </div>
    </div>
        </li>
        <li class="relative" id="menu2">
            <a onmouseover="mouseOver2()"  href="{{ route('candidate.list') }}" class="block py-2 px-3  text-white rounded md:bg-transparent  md:p-0" aria-current="page">Postuler</a>
            <div onmouseover="mouseOver2()" onmouseout="mouseOut2()" id="sub2" class="absolute hidden   flex-col bg-white mt-5 pb-[5rem] ml-[-2rem] pt-4 pl-3 w-[12rem]   h-16">
                <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                    <a href="{{ route('inscription') }}"> Candidats</a>

                </div>
                <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                    Sponsors
                </div>
                <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                    Directeur Regional
                </div>

        </div>
          </li>
          <li class="relative" id="menu4">
            <a onmouseover="mouseOver4()"   class="block py-2 cursor-pointer px-3  text-white rounded md:bg-transparent  md:p-0" aria-current="page">Voter</a>
            <div onmouseover="mouseOver4()" onmouseout="mouseOut4()" id="sub4" class="absolute hidden   flex-col bg-white mt-5 pb-[4rem] ml-[-2rem] pt-4 pl-3 w-[12rem]   h-16">
                <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                    <a> Nationale</a>

                </div>
                <div class="text-sm hover:text-[#f1c802] cursor-pointer mb-1">
                    <a href="{{ route('candidate.list') }}"> Régionale</a>

                </div>


        </div>
          </li>
        <li>
          <a href="{{ route('contact.index') }}" class="block py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#f1c802] md:p-0     md:dark:hover:bg-transparent dark:border-gray-700">Nous Contacter</a>
        </li>
        <li>
          <a href="{{ route('contact.index') }}" class="block py-2 px-3 text-white  rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#f1c802] md:p-0     md:dark:hover:bg-transparent dark:border-gray-700">Acheter un ticket</a>
        </li>
      </ul>
    </div>
    </div>
</nav>
@viteReactRefresh
@vite(['resources/js/header.jsx'])


