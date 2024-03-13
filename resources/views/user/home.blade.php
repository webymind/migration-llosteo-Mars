<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Favicon -->
    <link rel="icon" type="image/favicon-32x32"
        href="https://user-images.githubusercontent.com/97634238/165641863-c75ce720-db06-4f6a-b212-283017ff5d34.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="en" href="{{ url('/en') }}" />
    <link rel="alternate" hreflang="fr" href="{{ url('/fr') }}" />
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta name="keywords"
        content=" chiropractor in Mauritius, Chiropractic  healthcare , osteopaths, ostheopathy, Mauritius, back pain, chiropractor, neck pain, Osteopaths in Mauritius, osteopathic medicine, osteopathy Mauritius, back pain, spine pain, shoulder pain, tennis elbow, arthritis, sports injuries, and whiplash, alternative to medicine in Mauritius, ostéopathie à ile Maurice |llosteo.com">
    <meta property="og:url" content="https://www.llosteo.com">
    <meta property="og:site_name" content="https://www.llosteo.com">
    <meta property="og:description"
        content="Osteopaths in Mauritius, osteopathic medicine, osteopathy Mauritius, back pain, neck pain, alternative to medicine. Book an appointment with your osteopath in Mauritius.">
    <meta property="og:image"
        content="https://user-images.githubusercontent.com/97634238/165654390-7f667de3-3dfc-4f2b-9952-65bbc093c99f.png">
    <meta property="og:title" content=" Osteopath Mauritius | Ostéopathie à Maurice | Book a consultation. ">
    <meta property="og:type" content="Website">
    <title> Osteopath Mauritius | Ostéopathie à Maurice | Book a consultation.</title>
    <meta name="description"
        content="Osteopaths in Mauritius, osteopathic medicine, osteopathy Mauritius, back pain, neck pain, alternative to medicine. Book an appointment with your osteopath in Mauritius.">

    <meta name="norton-safeweb-site-verification"
        content="0budjdmnzmoejh6ii9i2y-f8h5v1z9gncd7t72386vuk9vpb4obp2ejhi09x16qjkxob-n78wu758o-fhkgw7335fvlvmsox3b-gm9f5m9io-8ybpkb9dnhtrgiax1d5">


    <!-- Required Meta Tags Webymind -->
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    @include('welCSS')
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FF8J6VXZK5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-FF8J6VXZK5');
    </script>

</head>

<body>





    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="/assets/img/lllogom.png" class="logo-one" alt="Logo">
                <img src="/assets/img/lllogom.png" class="logo-two" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/img/lllogom.png" class="logo-one" alt="Logo">
                        <img src="/assets/img/lllogom.png" class="logo-two" alt="Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">


                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link">
                                    {{ __('msg.Home') }}
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('/service', ['lang' => App::getLocale()]) }}" class="nav-link">
                                    {{ __('msg.Service') }}
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ url('/contact',['lang' => App::getLocale()]) }}" class="nav-link">
                                    {{ __('msg.Contact') }}
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ url('/about',['lang' => App::getLocale()]) }}" class="nav-link">
                                    {{ __('msg.About') }}
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    {{ __('msg.HELP') }}
                                    <i class='bx bx-chevron-down'></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/help',['lang' => App::getLocale()]) }}">
                                            {{ __('msg.FAQ') }}
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://www.tella.tv/video/clsbphzo0009u0fkz5ibcaf6e/embed?b=0&title=0&a=1&loop=1&autoPlay=true&t=0&muted=1"
                                            target="_blank">
                                            {{ __('msg.How to book appointment?') }}
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://www.tella.tv/video/clsbyan5k03570fl28jrs4udk/embed?b=0&title=0&a=1&loop=1&autoPlay=true&t=0&muted=1"
                                            target="_blank">
                                            {{ __('msg.How to reschedule appointment?') }}
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="https://www.tella.tv/video/clsboej5102nr0fia022l1ns5/embed?b=0&title=0&a=1&loop=0&autoPlay=true&t=0&muted=1"
                                            target="_blank">
                                            {{ __('msg.How to cancel appointment?') }}
                                        </a>
                                    </li>
                                </ul>
                                </a>
                            </li>


                        <!--Language-->

                        <select style="background-color:black; color:white;" name="language" id="language"
                            class="nav-item" class="nav-item" data-width="fit">
                            <option value="" disabled selected> EN/FR</option>
                            <option value="en" data-content=' '>English</option>
                            <option value="fr" data-content=''> Français</option>
                        </select>
                        <!--Language-->


                        <li class="nav-item">
                            <a href="https://api.whatsapp.com/send?phone=23052537344&text=LLosteo.com%20AmandineLeca%20&utm_campaign=alwayson&utm_content=paid&lang=en"
                                target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png"
                                    alt="WhatsApp" width="30" height="30"> </a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href=""
                                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/llosteo-maurice?hide_landing_page_details=1&amp;hide_gdpr_banner=1'});return false;">
                                {{ __('msg.Book Appointment') }}
                            </a>

                        </li>
                        </ul>


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


    <!-- Appointment Widget -->
    <div class="appointment-widget pt-100 pb-70">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="appointment-widget-right">
                        <img src="/assets/img/img5.jpg" alt="Images">
                        <div class="appointment-hours">
                            <p>{{ __('msg.Open Hours') }}</p>
                            <ul>
                                <li>
                                    {{ __('msg.Monday') }}
                                    <span>8:00 am - 17:00 pm</span>
                                </li>
                                <li>
                                    {{ __('msg.Tuesday') }}
                                    <span>8:00 am - 17:00 pm</span>
                                </li>
                                <li>
                                    {{ __('msg.Wednesday') }}
                                    <span>8:00 am - 17:00 pm</span>
                                </li>
                                <li>
                                    {{ __('msg.Thursday') }}
                                    <span>8:00 am - 17:00 pm</span>
                                </li>
                                <li>
                                    {{ __('msg.Friday') }}
                                    <span>8:00 am - 17:00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- llosteopathie list ostepathe - webymind-->
                <div class="col-lg-6">

                    <div class="appointment-widget-form">
                        <p
                            style="text-align: center; font-weight:500; color:black;margin:5px;text-shadow: 0 0 1px black;">
                            {{ __('msg.Choose your osteopath:') }}
                        </p>

                        {{-- <div class="calendly-inline-widget"
                            data-url="https://calendly.com/llosteo-maurice?hide_landing_page_details=1&hide_gdpr_banner=1"
                            style="min-width:320px;height:700px;"></div> --}}

                        {{-- Amandine Leca Planning --}}
                        <div
                            style="text-align: center; font-weight:500; color:black;padding:10px;text-shadow: 0 0 1px black;">
                            <button class="btn btn-primary" style="float:center;">
                                <a href=""
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/llosteo-maurice/llosteo-appointment?hide_landing_page_details=1&amp;hide_gdpr_banner=1&amp;back=1&amp;month'});return false;"><span
                                        style="color:White;padding:5px;">Amandine Leca</span></a>
                            </button>
                        </div>

                        {{-- Romain Lauri planning --}}
                        <div
                            style="text-align: center; font-weight:500; color:black;padding:10px;text-shadow: 0 0 1px black;">
                            <button class="btn btn-primary" style="float:center;">
                                <a href=""
                                    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/llosteo-maurice/romain-lauri?hide_event_type_details=1&hide_gdpr_banner=1&month'});return false;"><span
                                        style="color:White;padding:5px;">Romain Lauri</span></a>
                            </button>
                        </div>
                        <!-- llosteopathie list ostepathe - webymind End -->

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Service Area -->
    <section class="service-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h1>{{ __('msg.Osteopathy for ?') }}</h1>
                <div class="">
                    <div class="">
                        <i class=""></i>
                    </div>
                </div>
                <p class="section-title text-center">
                    {{ __('msg.Osteopathy is for people of all ages and physical conditions: infants, children, adolescents, adults, athletes and pregnant women.') }}
                </p>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item service-item-bg1">
                        <a href="{{ url('/service',['lang' => App::getLocale()]) }}" class="">

                        </a>
                        <h2>
                            <a href="{{ url('/service',['lang' => App::getLocale()]) }}">{{ __('msg.ADULT') }}</a>
                        </h2>

                        <div class="service-shape-1">
                            <img src="/assets/img/services/service-shape1.png" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="/assets/img/services/service-shape2.png" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item service-item-bg2">
                        <a href="{{ url('/service',['lang' => App::getLocale()]) }}" class="">

                        </a>
                        <h2>
                            <a href="{{ url('/service',['lang' => App::getLocale()]) }}">{{ __('msg.INFANT') }}</a>
                        </h2>

                        <div class="service-shape-1">
                            <img src="/assets/img/services/service-shape1.png" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="/assets/img/services/service-shape2.png" alt="Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item service-item-bg3">
                        <a href="{{ url('/service',['lang' => App::getLocale()]) }}" class="">

                        </a>
                        <h2>
                            <a href="{{ url('/service',['lang' => App::getLocale()]) }}">{{ __('msg.CHILD') }}</a>
                        </h2>

                        <div class="service-shape-1">
                            <img src="/assets/img/services/service-shape1.png" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="/assets/img/services/service-shape2.png" alt="Images">
                        </div>
                    </div>
                </div>


                <div class="service-dots-2">
                    <img src="/assets/img/services/service-dots-2.png" alt="Images">
                </div>
    </section>





    @include('user.footer')


    <script>
        var close = document.getElementsByClassName("closebtn");
        var i;

        for (i = 0; i < close.length; i++) {
            close[i].onclick = function () {
                var div = this.parentElement;
                div.style.opacity = "0";
                setTimeout(function () {
                    div.style.display = "none";
                }, 600);
            }
        }
    </script>





    @include('welJS')

</body>

</html>
