<!-- Service Area -->
<section class="service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>{{ __('msg.Service for ?') }}</h2>
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
                    <h3>
                        <a href="{{ url('/service',['lang' => App::getLocale()]) }}">{{ __('msg.ADULT') }}</a>
                    </h3>
                    <p></p>
                    <div class="service-shape-1">
                        <img src="assets/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assets/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item service-item-bg2">
                    <a href="{{ url('/service',['lang' => App::getLocale()]) }}" class="">
                       
                    </a>
                    <h3>
                        <a href="{{ url('/service',['lang' => App::getLocale()]) }}">{{ __('msg.INFANT') }}</a>
                    </h3>
                    <p></p>
                    <div class="service-shape-1">
                        <img src="assets/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assets/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item service-item-bg3">
                    <a href="{{ url('/service',['lang' => App::getLocale()]) }}" class="">
                        
                    </a>
                    <h3>
                        <a href="{{ url('/service',['lang' => App::getLocale()]) }}">{{ __('msg.CHILD') }}</a>
                    </h3>
                    <p></p>
                    <div class="service-shape-1">
                        <img src="assets/img/services/service-shape1.png" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="assets/img/services/service-shape2.png" alt="Images">
                    </div>
                </div>
            </div>

            
    <div class="service-dots-2">
        <img src="assets/img/services/service-dots-2.png" alt="Images">
    </div>
</section>