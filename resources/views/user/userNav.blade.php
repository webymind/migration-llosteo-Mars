<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('welCSS')

        <title> Osteopath | Chiropractor in Mauritius | Book a consultation.</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="/assets/img/favio.png">
        <link rel="canonical" href="https://www.llosteo.com" />
        <meta name="keywords" content="Chiropractor in Mauritius, Osteopath in Mauritius, Book a consultation, back pain, neck pain, stress, insomia, body balance, osteopath in mauritius. ">
        <meta property="og:site_name" content=" L & L Ostéopathie | llosteo.com | Osteopathie | Osteopath in Mauritius">
        <meta property="og:title" content="Osteopath | Chiropractor in Mauritius | Book a consultation.">
        <meta property="og:type" content=" Ostéopahie website | Website | Osteopahie site in Mauritius | Osteopath Booking Appointment | Osteopath consultation Mauritius | OSTEOPATH MAURITIUS">
        <meta property="og:description" content="Looking for a chiropractor or osteopath in Mauritius? Suffering from back pain, neck pain? Book an appointment for a consultation with your osteopath.">

        

    </head>
    <body>
        

        <!-- Top Header Start -->
        <header class="top-header top-header-bg-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8">
                        <div class="header-left">
                            <div class="header-left-card">
                                <ul>
                                    <li>
                                        <div class="head-icon">
                                            <i class='bx bx-mail-send'></i>
                                        </div>
                                        <a href="mailto:contact@llosteo.com">contact@llosteo.com</a>
                                    </li>
    
                                    <li>
                                        <div class="head-icon">
                                            <i class='bx bx-time-five'></i>
                                        </div>
                                        <a href="#">{{ __('msg.Mon-Fri:8.00 am-5.00 pm') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <div class="header-right">
                            <div class="top-social-link">
                                <ul>
                                    <li>
                                        <a href="https://m.facebook.com/profile.php?id=100048753290148" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="https://www.instagram.com/llosteopathie_mauritius/?hl=en" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
             <div class="mobile-nav">
                <a href="/" class="logo">
                    <img src="/assets/img/logoM.png" class="logo-one" alt="Logo">
                    <img src="/assets/img/logoM.png" class="logo-two" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="/">
                            <img src="/assets/img/logoM.png" class="logo-one" alt="Logo">
                            <img src="/assets/img/logoM.png" class="logo-two" alt="Logo">
                        </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                

                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        {{ __('msg.Home') }}
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        {{ __('msg.Service') }}
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        {{ __('msg.Contact') }}
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="/" class="nav-link">
                                        {{ __('msg.About') }}
                                    </a>
                                </li>
                                
                            <!--Language-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        LANG
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="" class="nav-link">
                                            {{ Config::get('languages')[App::getLocale()] }}

                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            @foreach (Config::get('languages') as $lang => $language)
                                            @if ($lang != App::getLocale())
                                                    <a class="nav-link" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                            @endif
                                            @endforeach
                                        </li>
                                        
                                    </ul>
                                </li>

                                 <!--Language-->

                                 <!--AUTHENTIIFICATION-->
                                
                                    <li class="nav-item">
                                    @if (Route::has('login'))
                                    <div class="top-0 right-0 px-6 py-0 sm:block">
                                    @auth
                                     <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('msg.SELFCARE') }}</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">@lang('msg.Log in')</a>
                                      <span> | </span>
                                       @if (Route::has('register'))
                                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">@lang('msg.Register')</a>
                                           @endif
                                       @endauth
                                     </div>
                                        @endif
                                   </li>
                                 
                            </ul>
                            <!--AUTHENTIIFICATION-->

                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->