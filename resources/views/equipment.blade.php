@extends('layouts.app')

@section('content')
<section id="equipmentLanding">
    <h1 class="hide">About Clearview Landing</h1>
    <div class="container fullHeight">
        <div class="row fullHeight jusity-content-center align-items-center">
            <div class="col-12">
                <h2 class="landingTitle"><span>Clearview</span><br>Equipment</h2>
                <h4>View our many models below or download our spec sheet <a href="#" class="yellow">here</a>.</h4>
                <a href="#/" class="landingButton buttonYellow">Get a Quote</a>
            </div>
        </div>
    </div>
</section>

<div id="equipmentCon">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 equipmentInfo">
                <h2 class="yellow">Dual Fuel Scissor Lift</h2>
                <h4>Download our spec sheet <a href="#" class="yellow">here</a> for more information.</h4>
                <p>Dual fuel lifts are suited for both indoor and outdoor use as they can be run on gas or propane. The benefit of a dual fuel lift is that they are able to alternate between running on propane for indoor applications and gasoline for outdoor use.<br><br>All outdoor lifts are 4x4 rough terrain and some are available with outriggers for unstable/non-level surfaces. All of our rough terrain lifts are equipped with extension decks.</p>
            </div>

            <div class="col-12 col-lg-6 equipmentInfo">
                <h2 class="yellow">Electric Scissor Lifts</h2>
                <h4>Download our spec sheet <a href="#" class="yellow">here</a> for more information.</h4>
                <p>Electric scissor lifts are run on batteries making them suitable for indoor use as they are free of emissions. These lifts are used for slab applications on concrete floors, pavement, or any other hard level/compacted surfaces.<br><br>Having white, non-marking tires, makes these lifts versatile for use in shopping malls, tile floors, carpeted surfaces, and other commercial applications. With a 32” width, these lifts are able to fit through most conventional 7-foot tall doorways. All electric lifts come with an extension deck.</p>
            </div>

            <div class="col-12 col-lg-6 offset-lg-6 equipmentInfo">
                <h2 class="yellow">Electric Booms</h2>
                <h4>Download our spec sheet <a href="#" class="yellow">here</a> for more information.</h4>
                <p>The Genie Electric boom lifts offer quiet, emission-free operation in the most sensitive work environments. The articulating boom lift includes a rotating jib for 180°of horizontal rotation. The Genie bi-energy system combines the benefits of a 48V DC machine with the versatility of a diesel-powered generator.</p>
                <a href="#" class="button buttonYellow">Rent Now</a>
            </div>
        </div>
        
    </div>
    
</div>


<section id="rentWithCon">
<h2 class="hide">Rent With Us</h2>
    <div class="container">
        <div class="row" id="rentImgRow">
                <img src="img/lifttwo.png" alt="Clearview Lift Image" id="rentLiftImgTwo">
            <div class="col-12 col-md-7 col-lg-8 offset-md-5 offset-lg-4" id="rentInfo">
                <h2 class="yellow">We Make It Easy To Rent With Us</h2>
                <h4 class="white">Three step rental process. <br class="d-none d-md-block d-lg-none">Feel free to contact us anytime!</h4>
                <a href="#" class="button buttonYellow">Rent Now</a>
                <a href="#" class="button buttonClear">Get A Quote</a>
            </div>
            
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-4 rentStepCon" id="rentStepOne">
                <h4>Step One:</h4>
                <h3>Make The Call</h3>
                <p>Monday - Friday<br>7:00am 0 5:00pm</p>
                <a href="#/" class="button buttonGrey">Call</a>
            </div>
            <div class="col-12 col-lg-4 rentStepCon" id="rentStepTwo">
                <h4>Step Two:</h4>
                <h3>Send Inquiry</h3>
                <p>Quick and Easy Application Process Keeps You Working and Not Waiting!</p>
                <a href="#/" class="button buttonGrey">Get Started</a>
            </div>
            <div class="col-12 col-lg-4 rentStepCon" id="rentStepThree">
                <h4>Step Three:</h4>
                <h3>Delivered To You</h3>
                <p>Get What You Need, When You Need – Delivered Direct To Your Site!</p>
                <a href="#/" class="button buttonGrey">Get Started</a>
            </div>
        </div>
        
    </div>
</section>

@include('partials.contact')

<div id="map"></div>


@endsection
@section('scripts')
<script src="/js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBViVSLtDt83KT1z2vuj2QczoOYIxWj89A&callback=initMap"></script>
@endsection
