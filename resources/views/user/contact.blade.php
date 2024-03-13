<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Favicon -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/favicon-32x32"
        href="https://user-images.githubusercontent.com/97634238/165641863-c75ce720-db06-4f6a-b212-283017ff5d34.png">
    <link rel="canonical" href="https://www.llosteo.com/contact" />
    <meta name="keywords"
        content=" Osteopath in Mauritius, ostéopathie à Maurice, osteopathy Mauritius, osteopathy services,  back pain, chiropractor, neck pain |llosteo.com | Chiropractor in Mauritius | Osteopath Booking Appointment | Osteopath consultation Mauritius">
    <meta property="og:site_name" content=" www.llosteo.com/contact">
    <meta property="og:url" content="https://www.llosteo.com/contact">
    <meta property="og:title" content=" Osteopath | Chiropractor in Mauritius| Contact us | LLOSTEO">
    <meta property="og:type" content=" website">
    <meta property="og:image"
        content="https://user-images.githubusercontent.com/97634238/165654390-7f667de3-3dfc-4f2b-9952-65bbc093c99f.png">
    <meta property="og:description"
        content="Looking for osteopaths or chiropractors in Mauritius ? Contact-us or book for a consultation. Visit llosteo.com or write us on llosteopathie@gmail.com">
    <title> Osteopath | Chiropractor in Mauritius| Contact us| LLOSTEO</title>
    <meta name="description"
        content="Looking for osteopaths or chiropractors in Mauritius ? Contact-us or book for a consultation. Visit llosteo.com or write us on llosteopathie@gmail.com" />
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>


    @include('welCSS')
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                <h1>{{ __('msg.Contact Us') }}</h1>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">{{ __('msg.Home') }}</a>
                    </li>
                    <li>{{ __('msg.Contact') }}</li>
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

    <!-- Contact Area -->
    <div class="contact-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-widget-right">
                        <h2>{{ __('msg.Contact Info') }}</h2>
                        <p>Romain Lauri et Amandine Leca, ostéopathes D.O.</p>
                        <ul class="contact-list">
                            <li>
                                <i class='flaticon-pin'></i>
                                <div class="content">
                                    Business Park 2 Endemika bureau 15, Petit Raffray, Mauritius
                                </div>
                            </li>
                            <li>
                                <i class='flaticon-phone-call'></i>
                                <div class="content">
                                    <a href="tel:+230 5253 7344">+230 5253 7344</a>

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
                <div class="col-lg-8">
                    <div class="iframe-container">
                        <iframe title="llosteo location map" src="https://player.vimeo.com/video/730750702?h=1f88b3ca62"
                            width="640" height="360" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-shape">
            <img src="/assets/img/shape/shape2.png" alt="Images">
        </div>
    </div>
    <!-- Contact Area End -->

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