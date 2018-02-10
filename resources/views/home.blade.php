@extends('layouts.app')

@section('content')
<section id="homeLanding">
    <h1 class="hide">Home Landing</h1>
    <div class="container fullHeight">
        <div class="row fullHeight jusity-content-center align-items-center">
            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                <h2 class="landingTitle"><span>LIFTING YOU TO</span><br>NEW HEIGHTS</h2>
                <h4>Our fleet is made up of a range of high quality Skyjack machines, each suitable for various customer needs.</h4>
                <a href="{{ url('/equipment') }}" class="landingButton buttonClear">VIEW EQUIPMENT</a>
                <a href="#/" class="landingButton buttonYellow d-xl-none">RENT NOW</a>
            </div>
        </div>
    </div>
</section>

<div id="homeAbout">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7" id="homeAboutInfo">
                <h2 class="yellow">About Clearview Rentals</h2>
                <p>We are all about helping you get the job done quickly and safely.   With a quality fleet of Mobile Elevated Work Platforms, our goal is to make renting as easy as possible.  We have a strong reputation for on-time deliveries and flexibility, ensuring our “can do “attitude is front and centre to every customer big and small.</p>
                <a href="{{ url('/#projectSection') }}" class="button buttonGrey">View Projects</a>
            </div>
            <div class="col-md-12 col-lg-5" id="homeFormCon">
                <div class="formHeader">
                    <h3 class="yellow uppercase">Get An Estimate</h3>
                    <h4 class="white">Daily, Weekly and Monthly Rates Available</h4>
                </div>
                    
                <div class="clearviewFormCon">

                    <form class="clearviewForm">
                        <h4 class="hide">Estimate Form</h4>
                        <div class="formGroup">
                            <label for="name">Name</label>
                            <input type="name" class="form-input" id="name">
                        </div>
                        <div class="formGroup">
                            <label for="email">Email</label>
                            <input type="email" class="form-input" id="email">
                        </div>
                        
                        <div class="formGroup">
                            <label for="company">Company</label>
                            <input type="text" class="form-input" id="company">
                        </div>
                        
                        <div class="formGroup">
                            <label for="msg">Details</label>
                            <input type="text" class="form-input" id="msg">
                        </div>

                        <input type="submit" name="submit" value="Submit Inquiry" class="submitButton">
                    </form>
                    
                </div> 
            </div>
        </div>
    </div>
</div>

<section id="rentWithCon">
<h2 class="hide">Rent With Us</h2>
    <div class="container">
        <div class="row" id="rentImgRow">
                <img src="img/liftone.png" alt="Clearview Lift Image" id="rentLiftImg">
            <div class="col-12 col-md-6 col-lg-8 col-xl-7 offset-lg-4 offset-xl-5" id="rentInfo">
                <h2 class="yellow">We Make It Easy To Rent With Us</h2>
                <h4 class="white">Three step rental process. <br class="d-none d-md-block d-lg-none">Feel free to contact us anytime!</h4>
            </div>
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-4 rentStepCon" id="rentStepOne">
                <h4>Step One:</h4>
                <h3>Make The Call</h3>
                <p>Monday - Friday<br>7:00am - 5:00pm</p>
                <a href="tel:2047794243" class="button buttonGrey">Call</a>
            </div>
            <div class="col-12 col-lg-4 rentStepCon" id="rentStepTwo">
                <h4>Step Two:</h4>
                <h3>Send Inquiry</h3>
                <p>Quick and Easy Application Process Keeps You Working and Not Waiting!</p>
                <a href="{{ url('/#homeFormCon') }}" class="button buttonGrey">Get Started</a>
            </div>
            <div class="col-12 col-lg-4 rentStepCon" id="rentStepThree">
                <h4>Step Three:</h4>
                <h3>Delivered To You</h3>
                <p>Get What You Need, When You Need – Delivered Direct To Your Site!</p>
                <a href="{{ url('/#homeFormCon') }}" class="button buttonGrey">Get Started</a>
            </div>
        </div>
        
    </div>
</section>

<section id="projectSection">
    <h2 class="hide">Our Projects</h2>
    <div class="container">
        <div class="row">
            <div class="col-12" id="projectIntro">
                <h2 class="yellow">PROJECTS</h2>
                <h4>Our machines helped build and maintain…</h4>
            </div>

            @forelse($projects as $project)
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="projectCon">
                    <div class="projectHeader">
                        <h4>{{$project->title}}</h4>
                    </div>
                    <img src="{{$project->image}}" alt="{{$project->title}} Image">
                </div>
            </div>

            @empty

            <div class="col-12">
                <h4 class="yellow" id="noNews">No Projects Yet</h4>
            </div>
            
            @endforelse
            
            
        </div>
    </div>
</section>

<div class="contactIntro">
    <div class="container">
        <div class="row">
            <div class="col-12 contactIntroInfo">
                <h2>Need Help Choosing The Right Lift For The Job?</h2>
                <h4 class="white">Don't hesitate to contact us any time.</h4>
            </div>
        </div>
    </div>
</div>

@include('partials.contact')


<div id="map"></div>

@endsection
@section('scripts')
<script src="/js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBViVSLtDt83KT1z2vuj2QczoOYIxWj89A&callback=initMap"></script>
@endsection
