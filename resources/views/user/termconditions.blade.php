<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
   
       <!-- Favicon -->
         <link rel="icon" type="image/favicon-32x32" href="https://user-images.githubusercontent.com/97634238/165641863-c75ce720-db06-4f6a-b212-283017ff5d34.png">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="en" href="{{ url('/en') }}" />
    <link rel="alternate" hreflang="fr" href="{{ url('/fr') }}" />
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />
        <meta name="keywords" content="llosteo, L & L Ostéopathie à Maurice | L&L Osteopath in Mauritius | Book appointment online your consultation | llosteo.com | Chiropractor in Mauritius">
        <meta property="og:site_name" content=" llosteo.com | L & L Ostéopathie | Chiropractor | Osteopathie | Osteopath in Mauritius">
        <meta property="og:title" content=" L & L Ostéopathie | terms & conditions ">
        <meta property="og:url" content= "https://llosteo.com/termsconditions">
         <meta property="og:image" content="https://user-images.githubusercontent.com/97634238/165654390-7f667de3-3dfc-4f2b-9952-65bbc093c99f.png">
        <meta property="og:type" content=" llosteo - Osteopath website | Website | Osteopahie site in Mauritius | Osteopath Booking Appointment | Osteopath consultation Mauritius | OSTEOPATH MAURITIUS">
        <meta property="og:description" content=" llosteo-  L & L Ostéopathie | terms and conditions users should acknowledge at least booking agreement, when using https://llosteo.com/.">
        <title> L & L Ostéopathie | terms & conditions </title>
        @include('welCSS')

          <!-- Global site tag (gtag.js) - Google Analytics -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=G-FF8J6VXZK5"></script>
                   <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                     gtag('js', new Date());

                  gtag('config', 'G-FF8J6VXZK5');
                 </script>

        <style>
            .containtertc{
                display: flex;
    flex-wrap: nowrap;
    justify-content: space-around;
    flex-direction: row;
            }
            </style>
    </head>
    <body>
   
        

        @include('user.navbar')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>{{ __('msg.Terms & Conditions') }}</h3>
            <ul>
                <li>
                    <a href="{{ url('/') }}">{{ __('msg.Home') }}</a>
                </li>
                <li>{{ __('msg.Terms & Conditions') }} </li>
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

<div class="containtertc">
<div class="space-bottom col-md-8">
    <h3>{{ __('msg.Terms & Conditions') }}</h3>
    <p>
       @lang('msg.By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws.If you do not agree with any of these terms, you are prohibited from using or accessing this site.The materials contained in this web site are protected by applicable copyright and trade mark law.')
    </p>

    <h3>{{ __('msg.Copyright & Trademark License') }}</h3>
    <p> {{ __('msg.Any total or partial reproduction or representation of this site, or of one of the elements of this site (drawing, model, logo, photo, etc.), by any process whatsoever, is prohibited and would constitute an infringement that could engage the civil and criminal liability of its author. The same applies to any databases appearing on the website. The brands of the operator of the website and its partners, as well as the logos appearing on the website are elements protected by the provisions of the intellectual property law and cannot be the object, without the consent of the Director of the publication, of any reproduction or partial or total representation. If you violate any of these restrictions at any time you\'ll have 24 hours to destroy any downloaded, content materials in your possession whether in electronic or printed format belong to LL OSTHEOPATHIE. Otherwise we\'ll undergo some legal action to those not respecting this Clause.') }}
    </p>

   

    <h3>{{ __('msg.Making an Appointment ') }}</h3>
    <p>
    {{ __('msg.Please note that each booking on llosteo.com via CALENDLY is subject to billing for the service and the time reserved.Failure to honor an appointment or to cancel an appointment without notice is a loss of INCOME for L&L L\'OSTÉOPATHIE. We believed that you understand and ensure that you\'ll inform us of your unavailability or in case of impediment, you commit yourself to notify LL OSTÉOPATHIE 24 hours before the appointment. Otherwise, we will consider a lack of business for the time and service reserved and an invoice will be due for the time and service reserved and payable within the next 24 hours.') }}

    </p>

    <h3> {{ __('msg.Revisions and errata') }}</h3>
    <p>
        {{ __('msg.The materials appearing on LLOSTEO.COM website relavent to any kind of damage include technical, typographical, or photographic errors. LLOSTEOPAHIE may make changes to the materials contained on its website at any time without notice. LLOSTEOPAHIE does not, however, make any commitment to update the materials.') }}
    </p>

    <h3>{{ __('msg.Links') }}</h3>
    <p>
        {{ __('msg.LLOSTEOPAHIE is not responsible for any kind of malicious linked from other source or competitors MAL INTENTIONEE.The inclusion of any link does not imply endorsement by LLOSTEOPAHIE. Use of any such links is at the user own risk. Please note that we NEVER ask BANKING DETAILS.You Should NEVER Communicate any of your banking details via links or unknown website from llosteo.com.') }}

    <h3> {{ __('msg.Terms & Modifications') }}</h3>
    <p>
        {{ __('msg.LLOSTEOPAHIE may revise these terms of use for its website at any time without notice. By using this web site you are agreeing to be bound by the then current version of these Terms and Conditions of Use.') }}

    </p>

   

    <h3>{{ __('msg.Governing Law') }}</h3>
    <p>
       {{ __('msg.Any claim relevant to LL OSTEOPAHIE website shall be governed by the laws of Mauritius at P.Louis.') }}

    </p>

    <br><br>

</div>
</div>


@include('user.footer')


@include('welJS')

</body>
</html>