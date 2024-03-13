<!-- Footer Area -->
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="/assets/img/lllogom.png" class="footer-logo1" alt="Images">
                            <img src="/assets/img/lllogom.png" class="footer-logo2" alt="Images">
                        </a>
                    </div>
                    <p>{{ __('msg.Graduates of the Superior Institute of Osteopathy of Aix en Provence') }}</p>
                    <ul class="social-link">
                        <li>
                            <a href="https://m.facebook.com/profile.php?id=100048753290148" target="_blank"><i
                                    class='bx bxl-facebook'></i></a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/llosteopathie_mauritius/?hl=en" target="_blank"><i
                                    class='bx bxl-instagram'></i></a>
                        </li>

                        <li>
                            <a href="https://api.whatsapp.com/send?phone=23052537344&text=LLosteo.com%20AmandineLeca%20&utm_campaign=alwayson&utm_content=paid&lang=en"
                                target="_blank"><i class='bx bxl-whatsapp'></i></a>
                        </li>


                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h3>Information</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="https://goo.gl/maps/wFRUixvYk5UEHwfA6" target="_blank">
                                <i class='bx bxs-chevron-right'></i>
                                {{ __('msg.Location On Map') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/termconditions',['lang' => App::getLocale()]) }} }}">
                                <i class='bx bxs-chevron-right'></i>
                                {{ __('msg.Terms & Conditions') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/privacypolicy',['lang' => App::getLocale()]) }} }}">
                                <i class='bx bxs-chevron-right'></i>
                                {{ __('msg.Privacy Policy') }}
                            </a>
                        </li>


                        <li>
                            <a href="{{ url('/contact',['lang' => App::getLocale()]) }} }}">
                                <i class='bx bxs-chevron-right'></i>
                                {{__('msg.Contact Us') }}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="footer-widget">
                    <h3>{{ __('msg.Open Hours') }}</h3>
                    <ul class="open-hours-list">
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

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget ps-3">
                    <h3>{{ __('msg.Contact Info') }}</h3>
                    <p>Romain Lauri et Amandine Leca, ostéopathes D.O.</p>
                    <ul class="footer-contact-list">
                        <li>
                            <i class='flaticon-pin'></i>
                            <div class="content">
                                <a href="https://goo.gl/maps/wFRUixvYk5UEHwfA6" target="_blank">
                                    Business Park 2 Endemika bureau 15, Petit Raffray, {{ __('msg.Mauritius') }}</a>
                            </div>
                        </li>
                        <li>
                            <i class='flaticon-phone-call'></i>
                            <div class="content">
                                <a href="tel:+23052537344">+230 5253 7344</a>

                            </div>
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <div class="content">
                                <a href="mailto:llosteopathie@gmail.com">llosteopathie@gmail.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- Copy-Right Area -->
<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-text text-center">
            <p>
                {{ __('msg.Copyright ') }} <script>
                    document.write(new Date().getFullYear())
                </script> © L & L Ostéopathie {{ __('msg.All Right Reserved by ') }}
                <a href="https://webymind.com/" target="_blank">WEBYMIND</a>
            </p>
        </div>
    </div>
</div>
<!-- Copy-Right Area End -->

<div class="switch-box">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>
