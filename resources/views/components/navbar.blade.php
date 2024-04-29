<!-- Navbar Start -->
<nav class="navbar" id="navbar">
    <div class="container relative flex flex-wrap items-center justify-between">
        <a class="navbar-brand md:me-8" href="index.html">
            <span class="inline-block dark:hidden">
                <img src="assets/images/logo-dark.png" class="l-dark" alt="">
                <img src="assets/images/logo-light.png" class="l-light" alt="">
            </span>
            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
        </a>

        <div class="nav-icons flex items-center lg_992:order-2 ms-auto md:ms-8">
            <!-- Navbar Button -->
            <ul class="list-none menu-social mb-0">
                <li class="inline">
                    <a href="" class="h-8 px-4 text-[12px] tracking-wider inline-flex items-center justify-center font-medium rounded-md bg-teal-500 text-white uppercase">Login</a>
                </li>
            </ul>
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-2 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">Navigation Menu</span>
                <i class="mdi mdi-menu text-[24px]"></i>
            </button>
        </div>

        <!-- Navbar Manu -->
        <div class="navigation lg_992:order-1 lg_992:flex hidden ms-auto" id="menu-collapse">
            <ul class="navbar-nav nav-light sidebar-nav" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="#accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#a propos">A propos</a>
                </li>
                <li class="nav-item dropdown"> <!-- Ajout du dropdown pour les reines -->
                    <select class="nav-link bg-blue-500 text-white" onchange="window.location.href=this.value;">
                        <option value="" selected>Nos Reines</option>
                        <option value="/miss-list">Miss List</option>
                        <option value="/curve-list">Curve List</option>
                        <!-- Ajouter d'autres options pour les reines si nécessaire -->
                    </select>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Nouvelles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
