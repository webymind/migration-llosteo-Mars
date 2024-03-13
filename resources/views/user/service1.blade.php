<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   
       <!-- Favicon -->
        <link rel="icon" type="image/favicon-32x32" href="https://user-images.githubusercontent.com/97634238/165641863-c75ce720-db06-4f6a-b212-283017ff5d34.png">
        <meta charset="UTF-8">
        <meta property="og:image" content="https://user-images.githubusercontent.com/97634238/165654390-7f667de3-3dfc-4f2b-9952-65bbc093c99f.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="canonical" href="https://www.llosteo.com/service" />
        <meta name="keywords" content=" llosteo - Chiropractor services in Mauritius Osteopath in Mauritius,  can help with Headaches, neck pain, migraines | Neck pain and back pain,  Insomnia, Stress and tension, eyes and ears | Anxiety or the inability to relax | Digestive problems ·">
        <meta property="og:site_name" content=" https://www.llosteo.com ">
        <meta property="og:url" content= "https://www.llosteo.com/service">
        <meta property="og:title" content=" Osteopaths | Ostéopathie | Mauritius">
        <meta property="og:type" content=" Website">
        <meta property="og:description" content=" Ostheopath services or Chiropractors in Mauritius, request an appointment, find your osteopaths, chiropractor services in Mauritius.">
        <title> Osteopaths | Ostéopathie | Mauritius</title>
        <meta name="description" content=" Ostheopath services in Mauritius, request an appointment, find your osteopaths, chiropractor services in Mauritius."/> 
        @include('welCSS')
        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->

         <script async src="https://www.googletagmanager.com/gtag/js?id=G-FF8J6VXZK5"></script>
           <script>
           window.dataLayer = window.dataLayer || [];
             function gtag(){dataLayer.push(arguments);}
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
            <h1>{{ __('msg.Our Services') }}</h1>
            <ul>
                <li>
                    <a href="{{ url('/') }}">{{ __('msg.Home') }}</a>
                </li>
                <li>{{ __('msg.Services') }} </li>
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

<!-- Service Details Area -->
<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="search-widget">
                        
                    </div>

                    <div class="service-categories">
                        <h2>{{ __('msg.OSTEOPATHS FOR ?') }}</h2>
                        <ul>
                            <li>
                                <p><a href="https://www.llosteo.com/service">
                                    {{ __('msg.ADULT') }} | Rs 2,100 - Rs 1,900
                                    
                                </p></a>
                                
                            </li>
                             <br>
                            <li>
                                <p><a href="https://www.llosteo.com/service">
                                    {{ __('msg.CHILD') }} | Rs 1,700
                                    
                                </p></a>
                            </li>

                             <br>

                            <li>
                                <p><a href="https://www.llosteo.com/service">
                                    {{ __('msg.INFANT') }} | Rs 1,400
                                    
                                </p></a>
                                
                            </li>

                             <br>

                            <li>
                              <!-- Agenda AMANDINE ET ROMAIN begin -->

                              <a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/llosteo-maurice?hide_landing_page_details=1&hide_gdpr_banner=1'});return false;"> {{ __('msg.Book Appointment') }} &#8984; </a>
                              <!-- AGENDA AMDNINE ET ROMAIN end -->
                            </li>
                        </ul>
                    </div>

                   
                </div>
            </div>
            <div class="col-lg-8">
                <div class="services-article">
                    <div class="services-article-img">
                        <img src="/assets/img/services/servicecon.png" alt="Images">
                    </div>

                    <div class="services-content">
                        <h3>@lang('msg.What is osteopathy?')</h3>
                        <p>
                            {{ __('msg.Osteopathy is a medical practice which aims to prevent, diagnose and treat manually the dysfunctions of the mobility of the tissues of the human body likely to alter the state of health.')}}
                        </p>
                    </div>

                    <div class="services-another-content">
                        <div class="content-img">
                            <div class="row">
                                <div class="col-6">
                                    <img src="/assets/img/services/adult.png" alt="Images">
                                </div>
                                <div class="col-6">
                                    <img width="auto" height="auto" src="/assets/img/services/img4.jpg" alt="Images">
                                </div>
                            </div>
                        </div>
                        <h3>{{ __('msg.Osteopathy for?') }}</h3>
                        <p>
                           {{ __('msg.The osteopath chooses the most appropriate and comfortable technique for each patient, depending on his or her age, morphology and the area of the body to be corrected. we can treat infants, children, adults and the elderly.')}}
                        </p>
                        <br>
                        <p>
                           {{ __('msg.Why consult an osteopath?') }}
                        </p>
                        
                        <p>
                            {{ __('msg.Osteopathy concerns all the major systems of the body:') }}
                        </p>
                        <br>
                        <p>
                            {{__('msg.The orthopedic and locomotor system: sprains, tendonitis, lumbago, back pain, Sciatica, cervicalgia, shoulder periarthritis, joint pain, scoliosis, pubalgia, coccygeal pain, jaw pain.') }}
                        </p>
                        <br>
                        <p>
                           {{ __('msg.For neurological system: cervico-brachial, intercostal, facial, Arnold\'s neuralgia, cruralgia, sciatica.') }} 
                        </p>
                        <br>
                        <p>
                            {{ __('msg.Cardiovascular system: circulatory disorders of the lower limbs, venous congestion, hemorrhoids, palpitations, oppressions.') }}
                        </p>
                        <br>
                        <p>
                            {{ __('msg.Digestive system: bloating, hiatal hernia, flatulence, hepatobiliary disorders, Colitis, constipation, organ ptosis, difficult digestion, gastritis, gastric acidity.') }}
                        </p>
                        <br>
                        <p>
                          {{ __('msg.For neuro-vegetative system: depressive states, hyper nervousness, anxiety, stress, sleep disorders, spasmophilia') }}  
                        </p>
                        <p>
                           {{ __('msg.And in some cases, after-effects of trauma: fractures, sprains, falls, car accidents.') }} 
                        </p>
                     </div>
                        <br>
                        <h3> {{ __('msg.L & L Osteopathy Benefits during pregnancy') }}</h3>
                        <p>
                            {{ __('msg.Osteopaths can help alleviate some of the common symptoms of pregnancy. Extra strain on the spine, aches and pains (back pain, neck and shoulder discomfort, muscular tension) occur. Circulatory issues such as leg edema and varicose veins develop.') }}
                        </p>
                        <div class="services-article-img">
                            <img   src="/assets/img/services/preg.png" alt="Images">
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
        <div class="service-details-shape">
            <img src="/assets/img/services/service-dots.png" alt="Images">
        </div>
    </div>
</div>
<!-- Service Details Area End -->



@include('user.footer')


@include('welJS')

</body>
</html>