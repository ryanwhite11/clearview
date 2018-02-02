@extends('layouts.app')

@section('content')
<section id="aboutLanding">
    <h1 class="hide">About Clearview Landing</h1>
    <div class="container fullHeight">
        <div class="row fullHeight jusity-content-center align-items-center">
            <div class="col-12">
                <h2 class="landingTitle"><span>About</span><br>Clearview</h2>
                <a href="#/" class="landingButton buttonYellow">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<div id="aboutValue">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6" id="aboutValueInfo">
                <h2 class="yellow">Value Guaranteed</h2>
                <p>Clearview Rentals has been a trusted aerial lift rental provider to over 300 local companies since 2001.<br><br>We are all about helping you get the job done quickly and safely.   With a quality fleet of Mobile Elevated Work Platforms, our goal is to make renting as easy as possible.  We have a strong reputation for on-time deliveries and flexibility, ensuring our “can do “attitude is front and centre to every customer big and small.</p>
                <a href="#/" class="button buttonGrey">View Projects</a>
            </div>
            <div class="col-md-12 col-lg-5 offset-lg-1 creditAppForm">
                <div class="formHeader">
                    <h3 class="yellow uppercase">Credit App</h3>
                    <h4 class="white">It is simple to set up an account.</h4>
                </div>
                
                <div class="clearviewFormCon">
                    <form class="clearviewForm">
                        <h4 class="hide">Job Application Form</h4>
                        <div class="formGroup">
                            <label for="name">Name</label>
                            <input type="name" class="form-input" id="name">
                        </div>
                        <div class="formGroup">
                            <label for="email">Email</label>
                            <input type="email" class="form-input" id="email">
                        </div>
                        
                        <div class="formGroup">
                            <label for="msg">Company</label>
                            <input type="text" class="form-input" id="msg">
                        </div>

                        <input type="submit" name="submit" value="Apply" class="submitButton">

                    </form>
                </div>  
            </div>
            <div class="col-12 col-lg-6 offset-lg-7" id="aboutSafetyInfo">
                <h2 class="yellow">We Take Safety Seriously</h2>
                <h4>Clearview Rentals offers a lift operator training certification for aerial lifts.</h4>
                <p>To Clearview Rentals, the safety of our staff and customers is our number one priority.  If you require safety training or just have questions about how to adopt a better safety policy for your company, please contact us directly at <a class="yellow" href="#/">204-779-4243</a>.</p>
                <a href="#/" class="button buttonYellow">Sign Up</a>
            </div>
            <div id="safetyImg">
                <img src="img/workers.png" alt="Clearview Construction Workers">
            </div>
        </div>
    </div>
</div>

<section id="trainingCon">
    <h2 class="hide">Safety Training</h2>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <h2 class="yellow">Safety Training</h2>
                <h4>What We Cover:</h4>
                <ul id="safetyList">
                    <li>Responsibilities as an Operator</li>
                    <li>Pre-Use Inspection</li>
                    <li>Job Site Inspection</li>
                    <li>Hands on Training and Operation</li>
                    <li>Video and Workplace Health and Safety Paper Test</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <div class="safetyBox" id="safetyBoxLeft">
                    <img src="img/lift.svg" alt="Fall Protection Training Icon">
                    <div class="safetyInfo">
                        <h4>Mobile Elevated Work Platform Training</h4>
                        <a href="#" class="yellow">SIGN UP</a>
                    </div>
                </div>
                <div class="safetyBox">
                    <img src="img/falling.svg" alt="Fall Protection Training Icon">
                    <div class="safetyInfo">
                        <h4>Fall Protection and Safety Training</h4>
                        <a href="#" class="yellow">SIGN UP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>


<section id="newsSection">
    <h2 class="hide">Our Projects</h2>
    <div class="container">
        <div class="row">
            <div class="col-12" id="newsIntro">
                <h2 class="yellow">RECENT NEWS</h2>
                <h4>Keep up to date with Clearview</h4>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="newsCon">
                    <a href="#/">
                        <img src="img/mall.jpg" alt="Mall Project">
                        <div class="newsInfo">
                            <h4>Article Title Goes Here</h4>
                            <p>January 1st, 2018</p>
                            <div class="newsHighlight"></div>
                            <a href="/#" class="readMoreButt"><h4>READ MORE</h4></a>
                        </div>
                    </a>
                </div>
                
            </div>
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

<div id="workWithCon">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-6">
                <h2 class="yellow">Work For Clearview</h2>
                <h4>Easily apply for a position that is right for you.</h4>
                <p class="darkGrey">Clearview Rentals aim to be the best rental company in Manitoba, and to accomplish that we need the best people.  We offer a fun, family oriented and flexible working environment.  We offer excellent compensation packages and a safe, stable business built for success.</p>
                <div id="workBenefitsCon">
                    <div class="benefitBox">
                        <p>Employee Benefits</p>
                    </div>
                    <div class="benefitBox">
                        <p>Employee Bonuses</p>
                    </div>
                    <div class="benefitBox">
                        <p>Family Atmosphere</p>
                    </div>
                    <div class="benefitBox">
                        <p>Challenging Projects</p>
                    </div>
                    <div class="benefitBox">
                        <p>On The Job Learning</p>
                    </div>
                    <div class="benefitBox">
                        <p>Skill Variety</p>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-12 col-lg-5 offset-lg-1 jobAppForm">
                <div class="formHeader">
                    <h3 class="yellow uppercase">Apply</h3>
                    <h4 class="white">Apply for the position thats right for you.</h4>
                </div>
                
                <div class="clearviewFormCon">
                    <form class="clearviewForm">
                        <h4 class="hide">Job Application Form</h4>
                        <div class="formGroup">
                            <label for="name">Name</label>
                            <input type="name" class="form-input" id="name">
                        </div>
                        <div class="formGroup">
                            <label for="email">Email</label>
                            <input type="email" class="form-input" id="email">
                        </div>
                        <div class="formGroup">
                            
                            <label for="position" class="input-group-text">Position</label>
                            <select name="jobList" form="clearviewForm" class="customSelect ">
                              <option value="volvo">select</option>
                              <option value="Job">Job</option>
                              <option value="Job">Job</option>
                              <option value="Job">Job</option>
                              <option value="Job">Job</option>
                            </select>
                        </div>
                        <div class="formGroup">
                            <label for="resume" class="uploadLabel">Resume
                                <span>upload file</span>
                                <input type="file" class="form-input" id="resume">
                            </label>
                            
                        </div>
                        <div class="formGroup">
                            <label for="cv" class="uploadLabel">Cover Letter
                                <span>upload file</span>
                                <input type="file" class="form-input" id="cv">
                                
                            </label>
                        </div>
                        <div class="formGroup">
                            <label for="msg">Message
                                <input type="text" class="form-input" id="msg">
                            </label>
                        </div>


                        <input type="submit" name="submit" value="Apply" class="submitButton">

                    </form>
                </div>

            </div>

        </div>
    </div>
    
</div>





@endsection
