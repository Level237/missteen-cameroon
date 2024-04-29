
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
        
        <!-- Start About -->
        <section class="relative md:py-24 py-16">
            <div class="container relative">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-6">
                    <div class="md:col-span-6">
                        <div class="lg:me-8">
                            <div class="relative">
                                <img src="assets/images/about.jpg" class="rounded-full shadow dark:shadow-gray-700" alt="">

                                <div class="absolute top-1/2 -translate-y-1/2 start-0 end-0 mx-auto size-56 flex justify-center items-center bg-white dark:bg-slate-900 rounded-full shadow dark:shadow-gray-700">
                                    <div class="text-center">
                                        <span class="text-teal-500 text-2xl font-semibold mb-0 block"><span class="counter-value text-6xl font-semibold" data-target="15">1</span>+</span>
                                        <span class="font-semibold block mt-2">Years <br> Experience</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-6">
                        <div class="lg:ms-8">
                            <h6 class="text-teal-500 text-sm font-semibold uppercase mb-2">Who Are We ?</h6>
                            <h3 class="font-semibold text-2xl leading-normal mb-4">We're a global stakeholder <br> relations and partnership <br> building consultancy.</h3>

                            <p class="text-slate-400 max-w-xl mb-6">Get instant helpful resources about anything on the go, easily implement secure money transfer solutions, boost your daily efficiency, connect to other app users and create your own Techwind network, and much more with just a few taps. commodo consequat. Duis aute irure.</p>

                            <a href="" class="h-10 px-6 tracking-wide inline-flex items-center justify-center font-medium rounded-md bg-teal-500 text-white">Read More <i class="mdi mdi-chevron-right align-middle ms-0.5"></i></a>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End About -->

       

        
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
        <section class="relative md:py-24 py-16" id="review">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h3 class="font-semibold text-2xl leading-normal mb-4">Sponsors</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">This is just a simple text made for this unique and awesome template, you can replace it with any text.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-6">
                    <div class="tiny-three-item">
                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-teal-500"></i>
                                    <p class="text-slate-400">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/team/01.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Calvin Carlo</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-teal-500"></i>
                                    <p class="text-slate-400">" The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/team/02.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-teal-500"></i>
                                    <p class="text-slate-400">" One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/team/03.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Jemina CLone</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-teal-500"></i>
                                    <p class="text-slate-400">" Thus, Lorem Ipsum has only limited suitability as a visual filler for German texts. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/team/04.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Smith Vodka</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-teal-500"></i>
                                    <p class="text-slate-400">" There is now an abundance of readable dummy texts. These are usually used when a text is required. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/team/05.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide text-center">
                            <div class="cursor-e-resize">
                                <div class="content relative rounded shadow dark:shadow-gray-700 m-2 p-6 bg-white dark:bg-slate-900 before:content-[''] before:absolute before:start-1/2 before:-bottom-[4px] before:box-border before:border-8 before:rotate-[45deg] before:border-t-transparent before:border-e-white dark:before:border-e-slate-900 before:border-b-white dark:before:border-b-slate-900 before:border-s-transparent before:shadow-testi dark:before:shadow-gray-700 before:origin-top-left">
                                    <i class="mdi mdi-format-quote-open mdi-48px text-teal-500"></i>
                                    <p class="text-slate-400">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero. "</p>
                                    <ul class="list-none mb-0 text-amber-400 mt-3">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                                
                                <div class="text-center mt-5">
                                    <img src="assets/images/team/06.jpg" class="size-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 font-semibold">Cristino Murfi</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Review-->

        

       

        <section class="relative lg:py-24 py-16 bg-slate-50 dark:bg-slate-800" id="contact">
            <div class="container relative">
                <div class="grid grid-cols-1 pb-6 text-center">
                    <h3 class="font-semibold text-2xl leading-normal mb-4">ENTRER EN CONTACT </h3>

                    <p class="text-slate-400 max-w-xl mx-auto">Nous sommes la pour vous</p>
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