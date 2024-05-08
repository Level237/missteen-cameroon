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
        document.getElementById("sub").style.display = "flex";
        console.log('le')
      }
      function mouseOut() {
        document.getElementById("sub").style.display= "none";
        console.log('le')
      }
console.log('heel')
</script>
</body>
</html>
