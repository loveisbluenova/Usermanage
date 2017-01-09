@extends('app')
@include('partials.header')
@section('template_title')
	Login
@endsection

@section('content')
 <div class="main-container">
        	
            <section class="pt16 pb0 pt-xs-0 pb-xs-0 text-center">
                <img alt="INFLUINDEX | A DATA DRIVEN APPROACH TO INFLUENCER DISOVERY" src="../img/heading-main.png" />
                <div class="container-fluid align-top">
                    <div class="row">
                        
                        <div class="col-md-4 col-md-push-8 col-sm-6 col-sm-push-6 col-xs-8 col-xs-push-4">
                            <div class="mt80 mt-sm-8 mt-xs-8">
                                <div class="select-option">
                                    <i class="ti-angle-down"></i>
                                    <select>
                                        <option selected value="Default">Choose Your Category</option>
                                        <option value="Influencer">Influencer</option>
                                        <option value="Advertiser">Advertiser</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
             
            </section>    
             <div class="dynamicnumber">
                    <h5>There are</h5>
                    <label>X,YZX</label>
                    <h5>on INFLUINDEX community</h5>
                </div>           
            
            <section class=" pt-sm-16 pb-sm-16 pt-xs-16 pb-xs-16">
                <div class="container-fluid">
                    <div class="row v-align-children">
                        <div class="col-md-6 col-sm-6 text-center mb-xs-24">
                            <img alt="What is Influindex" src="../img/01_what.png">
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>
                                            Influindex sorts numerous local influencers based on numbers, stats, profiles and categories that will make it make it easier to find the perfect personalities to promote your brand
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <img alt="INFLUINDEX | A DATA DRIVEN APPROACH TO INFLUENCER DISOVERY" src="../img/01a_what.png">
                        </div>
                    </div>
                </div>
            </section>
            

            <!--<section class="bg-secondary pt-sm-16 pb-sm-16 pt-xs-16 pb-xs-16">-->
            <section class="bg-secondary pt-sm-16 pb-sm-16 pt-xs-16 pb-xs-16">
                <div class="container-fluid">
                    <div class="row v-align-children">
                        <div class="col-md-6 col-sm-6 col-xs-12 text-center mb-xs-24">
                            <img alt="Why use INFLUINDEX" src="../img/02_why.png">
                        </div>
                        <!-- <div class="col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1"> -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <img src="../img/02_01.png" alt="Measure Engagement Not Followers">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <h5>
                                            Because the number of followers on a social media page doesn’t matter if no one is paying attention. Engagement means people actually know, like and are involving themselves with you.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row pt40">
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <img src="../img/02_02.png" alt="Improve your KPI Estimations With Our Help">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6">
                                        <h5>
                                            There are four main areas your social media KPIs should be focusing on, there are engagements, reach, leads and possible conversions. With our help, you can get qualified influencers on board set the right KPIs in motion.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="row pt40 pt-xs-0">
                        <div class="col-md-12">
                            <img src="../img/engagement.png" alt="ENGAGEMENT KPI">
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-sm-16 pb-sm-16 pt-xs-16 pb-xs-16">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 text-center mb-xs-24">
                                <img alt="Think you are an Influencer? Join the Index for more opportunities" src="../img/03_think.png">
                            </div>
                         <div id="social-signup">    
                            <div class="col-md-6 col-sm-6">
                                <div class="choosechannel">Choose Your Channel</div>
                                <div class="form-group">
    								<div class="col-sm-6 col-sm-offset-3">
                                        
    									{!! HTML::link(route('social.redirect', ['provider' => 'twitter']), 'Signup with Twitter', array('class' => 'btn btn-lg btn-primary btn-block twitter butt')) !!}
                                        
    									{!! HTML::link(route('social.redirect', ['provider' => 'facebook']), 'Signup Facebook', array('class' => 'btn btn-lg btn-primary btn-block facebook butt')) !!}
                                        
    									{!! HTML::link(route('social.redirect', ['provider' => 'instagram']), 'Signup with Instagram', array('class' => 'btn btn-lg btn-primary btn-block instagram butt')) !!}
                                        
    									{!! HTML::link(route('social.redirect', ['provider' => 'google']), 'Signup with Google', array('class' => 'btn btn-lg btn-primary btn-block google butt')) !!}
    															
    								
    								</div>

    							</div>

                            </div>

                        </div>
                        
                    </div>
                    
                </div>
                    
            </section>
           
        </div>

@endsection
