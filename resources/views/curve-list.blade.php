<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>missteen-cameroon</title>
        <meta name="description" content="Responsive Tailwind CSS Template">
        <meta name="keywords" content="Onepage, creative, modern, Tailwind CSS, multipurpose, clean">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.0.0">
        <!-- favicon -->
        <link href="assets/images/favicon.ico" rel="shortcut icon">

        <!-- Css -->
        <link href="assets/libs/swiper/css/swiper.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/tailwind.min.css">

    </head>
    
    <body class="font-libre_franklin text-base text-black dark:text-white bg-white dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="logo">
                    <img src="assets/images/logo-icon-64.png" class="d-block mx-auto animate-[spin_10s_linear_infinite]" alt="">
                </div>
                <div class="justify-content-center">
                    <div class="text-center">
                        <h4 class="mb-0 mt-2 text-lg font-semibold">Upcover</h4>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->

        <!-- Navbar start-->
        @component('Components.Navbar')
        @endcomponent
    <!-- Navbar end-->

        <!-- Start Hero -->
        @component('Components.Hero')
        @endcomponent
        <!-- Hero End -->
        


        <section class="relative md:py-24 py-16 md:pt-0 pt-0">
            <div class="container relative">
                <div class="grid grid-cols-1 justify-center">
                    <div class="relative z-1">
                        <div class="grid grid-cols-1 md:text-start text-center justify-center">
                            <div class="relative">
                                <img src="assets/images/home.png" alt="">
                                <div class="absolute bottom-2/4 translate-y-2/4 start-0 end-0 text-center">
                                    <a href="#!" data-type="youtube" data-id="S_CGed6E610" class="lightbox size-20 rounded-full shadow-lg dark:shadow-gray-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-teal-500 dark:text-white">
                                        <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content md:mt-8">
                            <div class="grid lg:grid-cols-12 grid-cols-1 md:text-start text-center justify-center">
                                <div class="lg:col-start-2 lg:col-span-10">
                                    <div class="grid md:grid-cols-2 grid-cols-1 items-center">
                                        <div class="mt-8">
                                            <div class="section-title text-md-start">
                                                <h6 class="text-white/70 text-sm font-semibold uppercase">Get Free Trial</h6>
                                                <h3 class="font-semibold text-2xl leading-normal text-white mt-2">Get An Easy Start <br> With Upcover Now</h3>
                                            </div>
                                        </div>

                                        <div class="mt-8">
                                            <div class="section-title text-md-start">
                                                <p class="text-white/70 max-w-xl mx-auto mb-2">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                                                <a href="" class="text-white">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row -->
            </div><!--end container-->
            
            <div class="absolute bottom-0 start-0 end-0 sm:h-2/3 h-4/5 bg-gradient-to-b from-teal-400 to-teal-500"></div>
        </section><!--end section-->
        <!-- End -->
        <!-- Start Review -->
      

        <!-- Start Pricing -->
       
        <section class="relative md:py-24 py-16" id="blog">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h3 class="font-semibold text-2xl leading-normal mb-4">Miss Cameroun</h3>
                    <p class="text-slate-400 max-w-xl mx-auto"></p>
                </div><!--end grid-->
        
                <div class="group relative overflow-hidden">
                    <div class="relative overflow-hidden rounded-md shadow dark:shadow-gray-80 w-36 h-36"> <!-- Réglage de la taille du conteneur de l'image -->
                        <img src="assets/images/blog/miss2.jpg" class="group-hover:scale-110 duration-5000 object-cover" alt=""> <!-- Réglage de la taille de l'image -->
                    </div>
        
                    <div class="mt-6">
                        <div class="flex mb-4">
                            <span class="flex items-center text-slate-400 text-sm"><i data-feather="calendar" class="size-4 text-slate-900 dark:text-white me-1.5"></i>20th December, 2023</span>
                            <span class="flex items-center text-slate-400 text-sm ms-3"><i data-feather="clock" class="size-4 text-slate-900 dark:text-white me-1.5"></i>5 min read</span>
                        </div>
        
                        <a href="" class="title text-lg font-semibold hover:text-teal-500 duration-500 ease-in-out">How apps is changing the IT world</a>
                        <p class="text-slate-400 mt-2">This is required when, for example, the final text is not yet available.</p>
        
                        <div class="mt-3">
                            <a href="" class="text-teal-500">Read More <i class="mdi mdi-chevron-right align-middle"></i></a>
                        </div>
                    </div>
                </div><!--end content-->
            </div><!--end content-->
        </section><!--end section-->
        
        

        <section class="relative lg:py-24 py-16 bg-slate-50 dark:bg-slate-800" id="contact">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h3 class="font-semibold text-2xl leading-normal mb-4">Get in touch </h3>

                    <p class="text-slate-400 max-w-xl mx-auto">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                </div><!--end grid-->

                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
                    <div class="lg:col-span-7 md:col-span-6">
                        <img src="assets/images/contact.svg" alt="">
                    </div>

                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="lg:ms-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                                <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                    <p class="mb-0" id="error-msg"></p>
                                    <div id="simple-msg"></div>
                                    <div class="grid lg:grid-cols-12 grid-cols-1 gap-3">
                                        <div class="lg:col-span-6">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <input name="name" id="name" type="text" class="mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Name :">
                                        </div>
        
                                        <div class="lg:col-span-6">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <input name="email" id="email" type="email" class="mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Email :">
                                        </div>

                                        <div class="lg:col-span-12">
                                            <label for="subject" class="font-semibold">Your Question:</label>
                                            <input name="subject" id="subject" class="mt-2 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Subject :">
                                        </div>
    
                                        <div class="lg:col-span-12">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <textarea name="comments" id="comments" class="mt-2 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Message :"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" id="submit" name="send" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-teal-500 text-white mt-2">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->

        <!-- Footer Start -->
        @component('Components.Footer')
        @endcomponent
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 size-9 text-center bg-teal-500 text-white leading-9"><i class="mdi mdi-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- Switcher -->
        @component('Components.Switcher')
        @endcomponent
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -right-3 z-50">
            <a href="" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium rtl:block ltr:hidden">LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-medium ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/swiper/js/swiper.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>