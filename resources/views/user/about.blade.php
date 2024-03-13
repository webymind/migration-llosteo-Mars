<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Favicon -->
    <link rel="icon" type="image/favicon-32x32"
        href="https://user-images.githubusercontent.com/97634238/165641863-c75ce720-db06-4f6a-b212-283017ff5d34.png">
    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="en" href="{{ url('/en') }}" />
    <link rel="alternate" hreflang="fr" href="{{ url('/fr') }}" />
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Osteopath in Mauritius, osteopathic medicine, osteopathy Mauritius, back pain, chiropractor in Mauritius, neck pain |llosteo.com | Osteopath Booking Appointment | Osteopath consultation Mauritius">
    <meta property="og:site_name" content=" www.llosteo.com/about">
    <meta property="og:url" content="https://www.llosteo.com/about">
    <meta property="og:image"
        content="https://user-images.githubusercontent.com/97634238/165654390-7f667de3-3dfc-4f2b-9952-65bbc093c99f.png">
    <meta property="og:title" content=" Osteopath in Mauritius| Chiropractor in Mauritius | About us">
    <meta property="og:type" content=" website">
    <meta property="og:description"
        content=" osteopath in Mauritius| chiropractor in Mauritius- All about osteopaths in Mauritius, request an appointment| LLOSTEO">
    <title>Osteopath in Mauritius| Chiropractor in Mauritius | About us</title>
    <meta name="description"
        content="osteopath in Mauritius | chiropractor in Mauritius- All about osteopaths in Mauritius, request an appointment| LLOSTEO" />

    @include('welCSS')
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>

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

    @include('user.navbar')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title">
                <h1>Amandine Leca</h1>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">{{ __('msg.Home') }}</a>
                    </li>
                    <li>{{ __('msg.About Us') }}</li>
                </ul>
            </div>
        </div>
        <div class="inner-banner-shape">
            <div class="shape1">

            </div>
            <div class="shape2">

            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-right-img">
                        <img src="/assets/img/doc.png" alt="Images">

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>Amandine Leca</h2>
                            <br>
                            <h3>Romain Lauri et Amandine Leca, ostéopathes D.O.</h3>
                            <br>
                            <p>{{ __('msg.Graduates of the Superior Institute of Osteopathy of Aix en Provence') }}</p>
                            <br>
                            <p>
                                {{ __('msg.Osteopathy is at the same time an art, a philosophy and a science. An Art, because it is a manual therapy that relies on specific skills of the human body, and requires a precise, meticulous, exact touch, and always measured according to the patients and the pathology to be treated. A Philosophy, because it is interested in the man in his globality. It is not so much the symptom that interests the osteopath as the cause that causes it. A Science that encompasses anatomical, physiological, biomechanical and biological knowledge related to the recovery and preservation of health.') }}
                            </p>
                            <br>
                            <p>
                                {{ __('msg.L&L Osteopath will practice manual manipulation of the musculoskeletal system and use myofascial release techniques to relieve tension, imbalances and pain.') }}
                            </p>
                            <br>
                        </div>
                        <br>
                        <div class="about-card">
                            <i class='flaticon-24-hours bg-three'></i>
                            <div class="content">
                                <h4>{{ __('msg.24/7 Online Booking') }}</h4>
                                <p>{{ __('msg.Book according to your availability. Any consultation not cancelled 24 hours in advance, the consultation will be fully due. Please refer to our') }}
                                    <a href="{{ url('/termsconditions') }}"> {{ __('msg.Terms & Conditions') }}</a>
                                    {{ __('msg.for more details.') }}</p>
                            </div>
                        </div>
                        <br>



                        <div class="about-btn">

                            <!-- AGENDA ROMAIN ET AMANDINE -->

                            <a class="btn btn-primary" href=""
                                onclick="Calendly.initPopupWidget({url: 'https://calendly.com/llosteo-maurice?hide_landing_page_details=1&hide_gdpr_banner=1'});return false;">{{ __('msg.Book Now') }}</a>

                            <!-- AGENDA ROMAIN ET AMANDINE end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Testimonials Area -->
    <div class="testimonials-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h5>{{ __('msg.GOOGLE REVIEWS') }}</h5>
                <h5>{{ __('msg.Thoughts of Our Patients') }}</h5>
            </div>
            <div class="row pt-45">
                <div class="col-lg-6">
                    <div class="testimonials-img">

                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <div class="testimonials-slider owl-carousel owl-theme">
                            <div class="testimonials-item">
                                <i class="flaticon-left-quote"></i>
                                <p>{{ __('msg.An address that I particularly recommend for guaranteed relief. Madame Leca relieved my neck and back pain gently and professionally during my stay on the island. A big thank-you.') }}
                                </p>
                                <div class="content">
                                    <img src="/assets/img/sylvie.png" alt="Images">
                                    <h6>Sylvie</h6>
                                </div>
                            </div>

                            <div class="testimonials-item">
                                <i class="flaticon-left-quote"></i>
                                <p>{{ __('msg.She is a good osteopath mm leca, I am satisfied with her work and it was very nice, Smiling and listening. I had a small problem and I asked for a coffee and she served me, she is very nice. Thank you DR Leca') }}
                                </p>
                                <div class="content">
                                    <img src="/assets/img/nia.png" alt="Images">
                                    <h6>Nia</h6>

                                </div>
                            </div>

                            <div class="testimonials-item">
                                <i class="flaticon-left-quote"></i>
                                <p>{{ __('msg.Amandine Leca treats neck tension competently and sensitively. Breathing and movement and gentle manipulation, no "bone breaking". Appointment took about 60 minutes.') }}
                                </p>
                                <div class="content">
                                    <img src="/assets/img/marcus.png" alt="Images">
                                    <h6>Marcus</h6>

                                </div>
                            </div>

                            <div class="testimonials-item">
                                <i class="flaticon-left-quote"></i>
                                <p>{{ __('msg.Several vertebrae stuck, one session and it is restored. Thank you for this relief.') }}
                                </p>
                                <div class="content">
                                    <img src="/assets/img/neo.png" alt="Images">
                                    <h6>Neo</h6>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Area End -->


    <!-- Map Area -->
    <div class="map-area">
        <div class="container-fluid m-0 p-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1874.1886818858995!2d57.62499030059073!3d-20.03463050047051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5314bbb4f81cbf0a!2zMjDCsDAyJzA0LjciUyA1N8KwMzcnMzIuMyJF!5e0!3m2!1sen!2smu!4v1650049304932!5m2!1sen!2smu"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Map Area End -->

    @include('user.footer')


    @include('welJS')

</body>

</html>