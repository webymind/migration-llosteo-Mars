<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Favicon -->
    <link rel="icon" type="image/favicon-32x32"
        href="https://user-images.githubusercontent.com/97634238/165641863-c75ce720-db06-4f6a-b212-283017ff5d34.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://www.llosteo.com/help" />
    <meta property="og:image"
        content="https://user-images.githubusercontent.com/97634238/165654390-7f667de3-3dfc-4f2b-9952-65bbc093c99f.png">
    <meta name="keywords"
        content=" Osteopath in Mauritius | Osteopath website in Mauritius, Book appointment online for consultation. | Chiropractor in Mauritius |Back pain, neck pain, stress reliever, insomnia, tension, overuse and minor injuries.">
    <meta property="og:url" content="https://www.llosteo.com/help">
    <meta property="og:site_name" content="https://www.llosteo.com/help">
    <meta property="og:title" content=" Osteopath | Chiropractor in Mauritius - FAQ | Help ">
    <meta property="og:type" content=" website">
    <meta property="og:description"
        content=" Osteopath or Chiropractor in Mauritius- Frequent asked questions, learn more about osteopaths, chiropractors and request for consultation| Mauritius.">
    <title> Osteopath | Chiropractor in Mauritius - FAQ | Help </title>
    <meta name="description"
        content="Osteopath or Chiropractor in Mauritius- Frequent asked questions, learn more about osteopaths, chiropractors and request for consultation| Mauritius." />

    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>


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


    @include('user.navbar')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title">
                <h1>{{ __('msg.FAQ') }}</h1>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">{{ __('msg.Home') }}</a>
                    </li>
                    <li>{{ __('msg.HELP CENTER') }}</li>
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

    <!-- Faq Area -->
    <div class="id faqbg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <div class="section-title">

                            <p>{{ __('msg.Get Answers Of Your Every Single Question') }}<p>
                        </div>
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ __('msg.How to pay online ?') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{__('msg.Proceed with your payment online using MCB account number or Mobile number Juice pay. You may also pay by Cash on spot.') }}
                                    </p>
                                    <p>
                                        {{__('msg.Request to pay via USD, EURO or Pound currencies on spot.') }}
                                    </p>
                                    <p>
                                        {{__('msg.Please bring the exact amount if you opt to by by Cash on arrival.') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ __('msg.I don\'t have an email how to get my invoice ?') }}

                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ __('msg.In case you do not have an e-mail, you should proceed with your payment on the spot. We\'ll send you a link via SMS, so you can download the document or print your invoice. Please use a valid phone number and we highly recommend use an email that might help you in many different ways.') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ __('msg.What happen if i forget to cancel my appointment ?') }}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ __('msg.Failure to honor or cancel an appointment online results in a loss of income for L&L OSTÉOPATHIE. We believe you understand and agree to notify us of your unavailability or, in case of an impediment, to notify L&L OSTEOPATHIE 24 hours before the appointment via confirmation page. Otherwise, we will consider a lack of business for the reserved time and service, an invoice will be issued. Therefore, it is very important to know how to cancel your appointment online, check tutorial below. For more information, please refer our Terms and Conditions.') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{__('msg.Insurance ?')}}
                                </a>

                                <div class="accordion-content">
                                    <p>
                                        {{ __('msg.Use your PDF Invoice to claim your insurer.') }}
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ __('msg.How to BOOK an Appointment ?') }}
                                </a>

                                <div class="accordion-content">
                                    <div>
                                        <iframe max-width="100%"
                                            src="https://www.youtube-nocookie.com/embed/ZWoKXG6L6zs"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-chevron-down'></i>
                                    {{ __('msg.How to CANCEL an Appointment ?') }}
                                </a>

                                <div class="accordion-content">
                                    <div>
                                        <iframe max-width="100%"
                                            src="https://www.youtube-nocookie.com/embed/J1k-y7sJCwI"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Area End -->

    @include('user.footer')


    @include('welJS')

</body>

</html>