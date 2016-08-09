@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('content')

 <!-- ======================== banner ===================== -->
    <div class="container bg-overlay">
        <div class="row text-center">
            <h1 class="text-center tech-hub">Technology<hr></h1>
                <div class="col-md-10 col-md-offset-1">
                    <p class="pro-about-banner text-center">We have both a senior PHP and Frontend team - essential for creating bespoke web applications, mobile apps. We try to be platform agnostic and have a wealth of technologies and frameworks to choose from. We're big fans of using open-source libraries to save on development costs and are realistic when scoping a project to make sure our development team focus their time on custom builds. </p>
                </div>
        </div>
    </div>
    
    <!-- ================== about ============= -->
    <!-- <section class="project-bio" id="about-react">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="pro-about-heading text-center">Technology<hr></p>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p class="pro-about-desc text-center" style="line-height: 30px;">We have both a senior PHP and Ruby team - essential for creating bespoke web applications, mobile apps and Content Management Systems. We try to be platform agnostic and have a wealth of technologies and frameworks to choose from. We're big fans of using open-source libraries to save on development costs and are realistic when scoping a project to make sure our development team focus their time on custom builds. </p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- =================== main tech ============= -->
    <section class="original-tech">
        <div class="container-fluid no-padding">
            <div class="row no-padding">

                <div class="col-md-4 no-padding">
                    <div class="technology-grid-description">
                    <h3 class="text-center">MERN STACK <hr></h3>
                        <p class="grid-text text-center">Replacing Angular With React in MERN we get Zero dependencies,one way data flow and lightweight DOM that  rings you the user experience of the native mobile platforms.</p>
                    </div>
                </div>
                
                <div class="col-md-4 no-padding">
                    <img src="images/Meanstack.png" alt="" class="img-responsive" style="height: 480px;">
                </div>

                <div class="col-md-4 no-padding">
                    <div class="technology-grid-description">
                        <h3 class="text-center">LAMP STACK <hr></h3>
                        <p class="grid-text text-center">Considered as the best choice for development and deployment of high performance web applications which require a solid and reliable foundation.</p>
                    </div>
                </div>

                <div class="col-md-4 no-padding">
                    <img src="images/mern-stack.png" alt="" class="img-responsive" style="height: 480px;">
                </div>
                
                <div class="col-md-4 no-padding">
                    <div class="technology-grid-description">
                        <h3 class="text-center">MEAN STACK <hr></h3>
                        <p class="grid-text text-center">Mean stack is a full-stack JavaScript solution that helps you build fast, robust, and maintainable web applications. Combining the powers of MongoDB, Express, AngularJS, and Node.js .</p>
                    </div>
                </div>


                <div class="col-md-4 no-padding">
                    <img src="images/Lamp.png" alt="" class="img-responsive" style="height: 480px;">
                </div>
            </div>
        </div>
    </section>


    <!-- ===================== All technology ================-->
    <section class="all-tech">
        <div class="container">
            <div class="row pad-top">
            <div class="col-md-12 text-center icon-tech-head"><h1>We Also Work On</h1></div>
                <div class="col-md-2 text-center">
                    <!-- <i class="fa fa-android fa-tech fa-3x" aria-hidden="true"></i> -->
                    <img src="images/1470152277_36-android.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Android</h3>
                </div>

                <div class="col-md-2 text-center">
                    <!-- <i class="fa fa-apple fa-3x" aria-hidden="true"></i> -->
                    <img src="images/1470152270_5315_-_Apple.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Ios</h3>
                </div>

                <div class="col-md-2 text-center">
                    <!-- <i class="fa fa-mobile fa-3x" aria-hidden="true"></i> -->
                    <img src="images/1470152828_phonegap.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Phonegap</h3>
                </div>

                <div class="col-md-2 text-center">
                    <!-- <i class="fa fa-wordpress fa-3x" aria-hidden="true"></i> -->
                    <img src="images/1470152800_wordpress-logo.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Wordpress</h3>
                </div>
                <div class="col-md-2 text-center">
                    <!-- <i class="fa fa-bold fa-3x" aria-hidden="true"></i> -->
                    <img src="images/1470152259_bootstrap-2048-black.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Bootstrap</h3>
                </div>

                <div class="col-md-2 text-center">
                    <!-- <i class="fa fa-cog fa-envira fa-3x" aria-hidden="true"></i> -->
                    <img src="images/1470152285_icon-leaf.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Mongodb</h3>
                </div>

            </div>

            <div class="row pad-top2">
                <div class="col-md-2 text-center">
                    <img src="images/1470153029_Boats_2.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Restful api</h3>
                </div>

                <div class="col-md-2 text-center">
                    <img src="images/1470155281_php.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Php</h3>
                </div>


                <div class="col-md-2 text-center">
                    <img src="images/1470155687_atom1.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Atom</h3>
                </div>
                <div class="col-md-2 text-center">
                    <img src="images/1470152010_sublime-text.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Sublime</h3>
                </div>

                <div class="col-md-2 text-center">
                    <img src="images/1470153035_github.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">Git</h3>
                </div>

                <div class="col-md-2 text-center">
                   <img src="images/1470153041_codeigniter-icon.png" alt="" class="img-responsive center-block">
                    <h3 class="all-tech-heading">CodeIgnite</h3>
                </div>

            </div>
        </div>
    </section>

    
    <!-- ===================== our Development Process ========== -->
    <section class="development-process" style="border-bottom: 1px solid #f6f6f6;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="dev-heading text-center">Development Process<hr></p>
                </div>
                <div class="col-md-12">
                    <div class="col-md-4">
                        <div class="col-md-12">
                            <h3 class="text-center circle-tech">Let's Meet <img src="images/1470157751_83.png" alt=""></h3>
                        </div>
                        
                        <p class="text-center" style="font-size: 16px;">Let us catch up over a coffee or skype and discuss about your vision and the problem you want to solve.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center circle-tech">Storyboarding <img src="images/1470159373_device-board-presentation-content-chart-glyph 2.png" alt=""></h3>
                        <p class="text-center" style="font-size: 16px;">Form user stories that clearly defines the scope of projects  and ensure both parties know what we are getting into.</p>
                    </div>
                    <div class="col-md-4">
                        <h3 class="text-center circle-tech">Prototyping and UX <img src="images/1470159562_BT_responsive.png" alt=""></h3>
                        <p class="text-center style="font-size: 16px;""> 
                            Our design team creates the wireframes for the user stories using your feedback and come up with the designs we will be building on.
                        </p>
                    </div>
                    </div>
                    <div class="col-md-12 mar-top">
                    <div class="col-md-3">
                        <h3 class="text-center circle-tech"> Sprints<img src="images/1470160506_calendar.png" alt="" style="height: 25px; margin-left: 5px;"></h3>
                        <p class="text-center style="font-size: 16px;""> 
                        Product development cycle is divided into many sprints which includes Sprint Planning and daily stand ups.On fridays we have a sprint conclusion demo and a retrospective
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="text-center circle-tech">Feedback <img src="images/1470159756_Message.png" alt="" style="height: 25px;"></h3>
                        <p class="text-center style="font-size: 16px;""> 
                            A staging server is set to deploy the latest code we push. You can check the status of your project anytime on our staging server and provide us feedback.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="text-center circle-tech">Acceptance <img src="images/1470159814_notes_accept.png" alt=""></h3>
                        <p class="text-center style="font-size: 16px;""> 
                            Once we deliver a user story, you can test it out on staging server and accept the story or give us feedback if any.
                        </p>
                    </div>
                    <div class="col-md-3">
                        <h3 class="text-center circle-tech">Completion <img src="images/1470159900_send-01.png" alt=""></h3>
                        <p class="text-center style="font-size: 16px;""> 
                            Once all the stories have been accepted by you, we prepare the project for delivery and give you a documentation of our work.
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- ================== lets start project =========== -->
    <section class="start-project-opensource">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h5 class="start-opensource-heading text-center">WE'D LOVE TO HEAR ABOUT YOUR PROJECT.</h5>
                </div>
                <div class="col-md-10 col-md-offset-1">
                   <a href="/contact"> <button type="button" class="btn btn-lg start-btn center-block">START NOW</button></a>
                </div>
            </div>
        </div>
    </section>


@stop