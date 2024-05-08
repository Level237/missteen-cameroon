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
