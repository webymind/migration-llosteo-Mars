
       
       <!-- Appointment Widget -->
        <div class="appointment-widget pt-100 pb-70">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="appointment-widget-right">
                            <img src="assets/img/img5.jpg" alt="Images">
                            <div class="appointment-hours">
                                <h3>{{ __('msg.Open Hours') }}</h3>
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

                    <div class="col-lg-6">
                        <div class="appointment-widget-form">
                            @if(session()->has('message'))
                            <div class="alert alert-sucess color:black" >
                            <button type="button" class="closebtn" data-dismiss="alert">
                            {{ session()->get('message') }} X</button>
                             </div>
                            @endif
                            
                            <div class="appointment-from">
                                <h2>{{ __('msg.Book Appointment') }}</h2>
                                <form action="{{ url('appointment') }}" method="POST">
                                    @csrf

                                    
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="form-group" name="service">
                                                <select class="form-control" name="service" required="">
                                                    <option value=""> {{__('msg.--SERVICE--')}}</option>
                                                    <option value="ADULT RS 1,700"> {{ __('msg.ADULT RS 1,700') }} </option>
                                                    <option value="CHILD RS 1,500"> {{ __('msg.CHILD RS 1,500') }} </option>
                                                    <option value="INFANT RS 1,200"> {{__('msg.INFANT RS 1,200') }} </option>
                                                    
                                                </select>	
                                            </div>
                                        </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="firstname" class="form-control" required data-error="Please enter your firstname" placeholder="{{ __('msg.firstname') }}">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="lastname" name="lastname" class="form-control" required data-error="Please enter your lastname" placeholder="{{ __('msg.lastname') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" required data-error="Please enter your phone" placeholder="{{ __('msg.phone') }}">
                                        </div>
                                    </div>
    
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" required data-error="Please enter your email" placeholder="{{ __('msg.Email') }}">
                                        </div>
                                    </div>
                                    

                                    <!--rdv-->
                                    <div class="input-group mb-3">
                                        <input class="form-control" type="datetime-local" name="name" required="" style="color: rgb(0, 0, 0)" >
                                        <div>
                                      <!--rdv-->
                                    
                                        <div class='field'>
                                            <div class='ui checkbox'>
                                                <input type='checkbox' name='consent' id='form-consent' value='' required="">
                                                <label style="font-size: 14px;" >
                                        {{ __('msg.I acknowledge that appointments are subject to billing. I undertake to inform LLOSTHEO 24 hours, for any kind of impediment before the appointment date. Otherwise, I agree to settle the invoice due for the selected date and time scheduled reserved service. For more information please read our T&C.') }} <a  target='_blank' class='privacy-link' href=''></a></label>
                                            </div>
                                        </div>
                  
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">
                                                {{__('msg.Book An Appointment') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- Appointment Widget End -->