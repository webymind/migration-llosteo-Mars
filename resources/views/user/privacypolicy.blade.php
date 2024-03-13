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
        <meta name="keywords" content="llosteo, Osteopath in Mauritius | Osteopath consultation website privacy policy | llosteo.com">
        <meta property="og:site_name" content=" Chiropractor |L & L Ostéopathie | llosteo.com | Ostéopathie | Osteopath in Mauritius - Chiropractor">
        <meta property="og:title" content=" L & L Ostéopathie | Privacy Policy ">
        <meta property="og:url" content= "https://www.llosteo.com/privacypolicy">
         <meta property="og:image" content="https://user-images.githubusercontent.com/97634238/165654390-7f667de3-3dfc-4f2b-9952-65bbc093c99f.png">
        <meta property="og:type" content=" website">
        <meta property="og:description" content=" L & L Ostéopathie | Legal notice of llosteo.com, official and registered business in Mauritius to Romain Lauri et Amandine Leca, ostéopathes D.O /.">
        <title> L & L Ostéopathie | Privacy Policy </title>
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
            <h3>{{ __('msg.Privacy Policy | Legal Notice') }}</h3>
            <ul>
                <li>
                    <a href="{{ url('/') }}">{{ __('msg.Home') }}</a>
                </li>
                <li>{{ __('msg.Privacy Policy') }} </li>
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
    <h2>{{ __('msg.Privacy Policy | Legal Notice') }} </h2>
    <p>
   {{ __('msg.WEBSITE') }} :  <a href="https://www.llosteo.com"> www.llosteo.com </a> | L&L Ostéopahtie <br> 
   {{ __('msg.Director | CEO') }} : Romain Lauri et Amandine Leca, ostéopathes D.O. <br>
    {{ __('msg.Email') }} : llosteopathie@gmail.com <br>
    {{ __('msg.Address ') }} : Endemika Business Park, Bureau 015, Petit Raffray.  <br>
    Tel : +230 5253 7344 <br>
    {{ __('msg.WEBSITE MANAGEMENT') }} : <a href="https://webymind.com/">WEBYMIND</a><br><br>
    {{ __('msg.LLOSTEO.COM | L & L OSTEOPATHIE , whose registered office is located ') }}: <br>
    Business Park Endemika Petit Raffray, {{ __('msg.registered in the Trade and Companies Register of MAURITIUS under the number BRN : I 14007916') }}	
    </p>

    <h3>{{ __('msg.USER & LLOSTEOPATHIE') }}</h3>

    <p>
      {{ __('msg.Users acknowledges that they has the necessary skills and means to access and use this site. Users also acknowledges having read the present legal notice and undertakes to respect it.The user is informed that during his visits to the site, a cookie may be automatically installed on his browser. A cookie is an element that does not allow the user to be identified but is used to record information relating to the user browsing on the website, the pages consulted, the date and time of the consultation, etc, which may be read either by the website operator or by provider during the user subsequent visits. In this way, the visitor does not need to fill in the form proposed by the website operator on his next visit.') }}
    </p>

    <h3> COOKIES</h3>
    <p>
       <a href="https://webymind.com/pages/privacy.html" target="_blank"> {{ __('msg.WHAT ARE COOKIES ?') }}</a> 
    </p>

    <br><br>

</div>
</div>


@include('user.footer')


@include('welJS')

</body>
</html>