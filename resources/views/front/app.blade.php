<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- SEO Meta Tags -->
        <meta name="description" content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them" />
        <meta name="author" content="Your name" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>Rental Sepeda</title>

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
        <link href="{{ assert('front/css/fontawesome-all.css') }}" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <link href="{{ asset('front/css/swiper.css') }}" rel="stylesheet" />
        <link href="{{ asset('front/css/magnific-popup.css') }}" rel="stylesheet" />
        <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />

        <!-- Favicon  -->
        <link rel="icon" href="{{ asset('front/images/favicon.png') }}" />
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        <!-- Navigation -->
        <nav class="navbar fixed-top ">
            <div class="container sm:px-4 lg:px-8 flex flex-wrap items-center justify-between lg:flex-nowrap">
                
                <!-- Text Logo - Use this if you don't have a graphic logo -->
                <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.html">Pavo</a> -->

                <!-- Image Logo -->
                <a class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline" href="index.html">
                    {{-- <h1 class="text-yellow-500 font-semibold text-3xl leading-4 no-underline">Rental Sepeda</h1> --}}
                    <img src="{{ asset('front/images/2RB.png') }}" alt="alternative" class="h-8" />
                </a>

                <button class="background-transparent rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-400" type="button" data-toggle="offcanvas">
                    <span class="navbar-toggler-icon inline-block w-8 h-8 align-middle"></span>
                </button>

                <div class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center" id="navbarsExampleDefault">
                    <ul class="pl-0 mt-3 mb-2 ml-auto flex flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row">
                        <li>
                            <a class="nav-link page-scroll active" href="#header">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#features">Rental</a>
                        </li>
                        
                        {{-- <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownTypeRental" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Type Rental
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownTypeRental">
                                @foreach ($types as $type)
                                    <a class="dropdown-item page-scroll" href="{{ route('type.show', $type->id) }}">
                                        {{ $type->nama_type }}
                                    </a>
                                    <div class="dropdown-divider"></div>
                                @endforeach
                            </div>
                        </li> --}}
                        
                        <li>
                            <a class="nav-link page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <span class="block lg:ml-3.5">
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-apple text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200 mr-1.5"></i>
                        </a>
                        <a class="no-underline" href="#your-link">
                            <i class="fab fa-android text-indigo-600 hover:text-pink-500 text-xl transition-all duration-200"></i>
                        </a>
                    </span>
                </div> <!-- end of navbar-collapse -->
            </div> <!-- end of container -->
        </nav> <!-- end of navbar -->
        <!-- end of navigation -->

     @yield('content')

        <!-- Footer -->
        <div class="footer">
            <div class="container px-4 sm:px-8">
                <h4 class="mb-8 lg:max-w-3xl lg:mx-auto">Jika ada pertanyaan silahkan hubungi <a class="text-indigo-600 hover:text-gray-500" href="mailto:email@domain.com">rental@domain.com</a></h4>
                
                <div class="social-container">
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-pinterest-p fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-youtube fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of social-container -->
            </div> <!-- end of container -->
        </div> <!-- end of footer -->
        <!-- end of footer -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
                <ul class="mb-4 list-unstyled p-small">
                    <li class="mb-2"><a href="article.html">Rental</a></li>
                    <li class="mb-2"><a href="terms.html">Rental and Terms</a></li>
                    <li class="mb-2"><a href="privacy.html">Rental and Privacy</a></li>
                </ul>
                <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">Rental</a></p>

                <p class="pb-2 p-small statement">Distributed by :<a href="https://themewagon.com/" class="no-underline">Rental</a></p>
            </div> 

        <!-- end of container -->
        </div> <!-- end of copyright -->
        <!-- end of copyright -->


        <!-- Scripts -->
        <script src="{{ asset('front/js/jquery.min.js') }}"></script> <!-- jQuery for JavaScript plugins -->
        <script src="{{ asset('front/js/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
        <script src="{{ asset('front/js/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
        <script src="{{ asset('front/js/scripts.js') }}"></script> <!-- Custom scripts -->
    </body>
</html>
