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
                                    <a class="nav-link" href="https://www.tella.tv/video/clsbphzo0009u0fkz5ibcaf6e/embed?b=0&title=0&a=1&loop=1&autoPlay=true&t=0&muted=1" target="_blank" >
                                        {{ __('msg.How to book appointment?') }}
                                    </a>
                                    </li>

                                    <li class="nav-item">
                                    <a class="nav-link" href="https://www.tella.tv/video/clsbyan5k03570fl28jrs4udk/embed?b=0&title=0&a=1&loop=1&autoPlay=true&t=0&muted=1" target="_blank" >
                                        {{ __('msg.How to reschedule appointment?') }}
                                    </a>
                                    </li>  

                                    <li class="nav-item">
                                    <a class="nav-link" href="https://www.tella.tv/video/clsboej5102nr0fia022l1ns5/embed?b=0&title=0&a=1&loop=0&autoPlay=true&t=0&muted=1" target="_blank" >
                                        {{ __('msg.How to cancel appointment?') }}
                                    </a>
                                    </li>                                
                                </ul>
                            </a>
                        </li>

                            {{-- <li class="nav-item">
                                <a href="{{ url('/help') }}" class="nav-link">
                                    {{ __('msg.HELP') }}
                                </a>
                            </li> --}}
                            {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{ __('msg.HELP') }}
                            <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="media-body">
                                    <a class="video" title="llosteo.com - Comment prendre rendez-vous?"
                                        href="https://player.vimeo.com/video/861981495?h=f694ece008&autoplay=1&loop=1&color=ef0004&byline=0">Book
                                        an appointment?</a>
                                </li>

                                <li>
                                    <a class="video" title="llosteo.com - Comment prendre rendez-vous?"
                                        href="https://player.vimeo.com/video/861981495?h=f694ece008&autoplay=1&loop=1&color=ef0004&byline=0">
                                        Reschedule appointment? </a>
                                </li>
                                <li>
                                    <a class="video" title="llosteo.com - Comment prendre rendez-vous?"
                                        href="https://player.vimeo.com/video/861981495?h=f694ece008&autoplay=1&loop=1&color=ef0004&byline=0">Cancel
                                        appointment?</a>
                                </li>
                                <li>
                                    <a href="{{ url('/help') }}" class="nav-link">
                                        {{ __('msg.HELP') }}
                                    </a>
                                </li>
                            </ul>
                            </li> --}}

                            <!--Language-->
                            {{-- <li class="nav-item">
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
                            </li> --}}
                            <!--Language-->

                           <!--Language-->

                            <select style="background-color:black; color:white;" name="language" id="language" class="nav-item" class="nav-item" data-width="fit">
                                <option  value=""  disabled selected> EN/FR</option>
                            <option value="en"  data-content=' '>English</option>
                        <option   value="fr" data-content=''> Français</option>
                        </select>
                            <!--Language-->
                           

                            <li class="nav-item">
                                <a href="https://api.whatsapp.com/send?phone=23052537344&text=LLosteo.com%20AmandineLeca%20&utm_campaign=alwayson&utm_content=paid&lang=en"
                                    target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png"
                                        alt="WhatsApp" width="30" height="30"> </a>
                            </li>
                            
                                <li class="nav-item">
                                
                                <a class="nav-link" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/llosteo-maurice?hide_landing_page_details=1&amp;hide_gdpr_banner=1'});return false;"> {{ __('msg.Book Appointment') }}
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
