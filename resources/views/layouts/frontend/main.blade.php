<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield("title") </title>
</head>
<body class="overflow-x-hidden ">


@include('layouts.frontend.nav-bar')




    @yield('content')




<footer class="bg-[#14121a] shadow ">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex max-sm:flex max-sm:flex-col max-sm:items-center sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/img/logo.png') }}" class="h-24" alt="Miss Teen Logo" />

            </a>
            <ul class="flex flex-wrap max-sm:justify-center  items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a target="_blank" href="https://wa.me/message/WU6GDYP4X2DGD1" class="hover:underline me-4 md:me-6">WhatsApp Call Center</a>
                </li>
                <li>
                    <a target="_blank" href="https://whatsapp.com/channel/0029VaIjJZc3wtbCTvETtw1X" class="hover:underline me-4 md:me-6">WhatsApp Channel</a>
                </li>
                <li>
                    <a target="_blank" href="https://www.instagram.com/teencameroon?igsh=anFraHpoZWN1dXBr" class="hover:underline me-4 md:me-6">Instagram</a>
                </li>
                <li>
                    <a target="_blank" href="https://youtube.com/@missteencameroon3242?si=5gdbU86UiU4gC51L" class="hover:underline me-4 md:me-6">Youtube</a>
                </li>
                <li>
                    <a  target="_blank"href="https://www.facebook.com/missteencameroon?mibextid=ZbWKwL" class="hover:underline me-4 md:me-6">Facebook</a>
                </li>
                <li>
                    <a target="_blank" href="https://twitter.com/TeenCamero56062?t=I1mxnmgEWvUthidP3m2TrA&s=09" class="hover:underline">Twitter</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block max-sm:mx-12 text-center text-sm text-gray-500  dark:text-gray-400">© 2024 <a href="/" class="hover:underline">Miss Teen Cameroon™</a>. All Rights Reserved.</span>
    </div>
</footer>



<script>
    const menu=document.getElementById('menu1');
    menu.addEventListener("mouseover",mouseOver)
    document.getElementById('sub').addEventListener("mouseout",mouseOut)

    function mouseOver() {
        document.getElementById("sub2").style.display= "none";
        document.getElementById("sub3").style.display= "none";
        document.getElementById("sub4").style.display= "none";
        document.getElementById("sub").style.display = "flex";
        console.log('le')
      }
      function mouseOut() {
        document.getElementById("sub").style.display= "none";
        console.log('le')
      }

      const menu2=document.getElementById('menu1');



      function mouseOver2() {
        document.getElementById("sub").style.display= "none";
        document.getElementById("sub3").style.display= "none";
        document.getElementById("sub4").style.display= "none";
          document.getElementById("sub2").style.display = "flex";
          console.log('le')
        }
        function mouseOut2() {
          document.getElementById("sub2").style.display= "none";
        }
        function mouseOver1() {
            document.getElementById("sub").style.display= "none";
            document.getElementById("sub2").style.display= "none";
            document.getElementById("sub4").style.display= "none";
              document.getElementById("sub3").style.display = "flex";
              console.log('le')
            }
            function mouseOut1() {
              document.getElementById("sub3").style.display= "none";
            }
            function mouseOver4() {
                document.getElementById("sub").style.display= "none";
                document.getElementById("sub3").style.display= "none";
                document.getElementById("sub2").style.display= "none";
                  document.getElementById("sub4").style.display = "flex";
                  console.log('le')
                }
                function mouseOut4() {
                  document.getElementById("sub4").style.display= "none";
                }
</script>
</body>
</html>
