@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('content')

   <!-- ===================== header ==================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding">
                <div class="video-wrap" style="position:relative;">
                    <video id="bgvid" playsinline autoplay muted loop="true" class="" style="height:100%; width:100%;">
                        <source src="images/background-video.mp4" type="video/mp4">
                    </video>
                    <div class="header">
                        <div class="header-text">
                            <div class="header-heading">Challenges&#8901; Experiments&#8901;Hacking</div>
                            <p class="header-desc">We invented 
                            <a href="http://nativebase.io/" target="_blank" class="native-base"> NativeBase,</a>   
                            <a href="https://strapmobile.com/" target="_blank" class="strap-mobile"> StrapMobile </a> & 
                            <a href="http://www.strapui.com/" target="_blank" class="strap-ui">StrapUI </a> <br>including 
                            <a href="http://startangular.com/" target="_blank" class="start-angular"> StartAngular, </a> 
                            <a href="http://startreact.com/" target="_blank" class="start-react">StartReact, </a> 
                            <a href="http://startmeteorjs.com/" target="_blank" class="start-meteor"> StartMeteor </a> & 
                            <a href="http://startlaravel.com/" target="_blank" class="start-laravel"> StartLaravel</a></p> 
                           	<a href="/contact" class="page-scroll btn btn-xl hidden-xs">Start Project</a> 
                            <div class="col-md-12 col-sm-12 page-scroll hidden-xs">
                                <a href="#overview" class="page-scroll hvr-icon-hang icon-hang"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section id="overview" class="pseudo"></section>

    <!-- ======================== overview 2 =================== -->
    <section class="overview-index-2">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <p class="overview-heading text-center">We're creative Geeks, passionate for designing well crafted, simple and functional web and mobile apps.</p>
                </div>
                <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12">
                    <p class="overview-desc">GeekyAnts is creative technological company. We love to create things and do that by employing the latest technology with proficiency. We believe that technology doesn't stand alone but using it at the right place with a social and artistic approach can fill the gaps. We have designed few of the finest mobile and web apps which includes StrapMobile, StrapUI and NativeBase. We do all of this with an unwavering focus on long-term success, not short term gain. We are not in a race, we just do our best!</p>
                </div>
                <div class="col-md-12">
                    <a href="/team"><button type="button" class="btn btn-default center-block more-about">More About Geeks</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== product ========================== -->
	<a name="Product" style="padding-top: 30px; display: block"></a>
    <section class="product" id="Product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="product-heading text-center">Products<hr></p>
                </div>
                <div class="col-md-12">
                    <p class="product-desc text-center">GeekyAnts is a young Product Development company based in Bangalore. We do everything related to web and mobile development and are extremely passionate about building world-class products.</p>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="http://www.strapmobile.com/" style="text-decoration: none;">
                            <img src="images/nsp-2.png" alt="" class="img-responsive">
                            <h2 class="strap-mobile-head text-left">StrapMobile</h2>
                            <p class="card-desc">StrapMobile provides a ready to use iOS and Android apps...</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="http://www.strapui.com/" style="text-decoration: none;">
                            <img src="images/admin-3.png" alt="" class="img-responsive">
                            <h2 class="strap-mobile-head text-left">StrapUi</h2>
                            <p class="card-desc">StrapUI brings a new flavour to the default design of Twitter's Bootstrap framework...</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="http://www.nativebase.io/" style="text-decoration: none;">
                            <img src="images/nativebase.png" alt="" class="img-responsive">
                            <h2 class="strap-mobile-head text-left">NativeBase</h2>
                            <p class="card-desc">Start React is a library of free to download AngularJS themes and templates...</p>
                        </a>
                    </div>
                </div>

                <div class="col-md-12">
                    <a href="/open-source" class="under-line"><button type="button" class="btn btn-default center-block more-service">Open Source Cotribution</button></a>
                </div>
            </div>
        </div>
    </section>
    

    <!-- ====================== Services =================== -->
    <a name="services" style="padding-top: 30px; display: block"></a>
    <section class="service" id="Services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="service-heading text-center">Services<hr></p>
                </div>
            </div>
            <div class="service-margin"></div>
            <div class="row text-center">
                <!-- =================== services new ==============  -->
                <div class="col-md-4">
                    <div class="col-md-12 text-center">
                        <!-- <i class="fa fa-desktop fa-4x" aria-hidden="true"></i> -->
                        <img src="images/1470397637_03.png" class="" alt="">  
                    </div>
                    <div class="col-md-12"><h2 class="text-center">Web Services</h2></div>
                    <p class="globe text-left">Our web app development and custom programming services include everything from a simple Content Management System enabled website to the most complex web-based internet app, e-commerce portals, and social networking development services.
                    </p>
                </div>

                <div class="col-md-4">
                    <div class="col-md-12 text-center">
                        <img src="images/1470397669_iPad.png" class="" alt=""> 
                        <!-- <i class="fa fa-tablet fa-4x" aria-hidden="true"></i>   -->
                    </div>
                    <div class="col-md-12"><h2 class="text-center">Mobile Services</h2></div>
                    
                    <p class="globe text-left">Our Mobile Development Services will offer latest technologies to create mobile software solutions for various platforms such as iPhone / iPad, Android etc.We develop smarter and feature-rich mobile app that transcend user expectations by harnessing the power of mobile technology</p>
                </div>


                <div class="col-md-4">
                    <div class="col-md-12 text-center">
                        <img src="images/1470397706_solutions.png" class="" alt=""> 
                        <!-- <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>   -->
                    </div>
                    <div class="col-md-12"><h2 class="text-center">End to End Solutions</h2></div>
                    
                    <p class="globe text-left">we can offer project services that cover planning, requirement analysis, architecture, implementation and test, production support and maintenance for complex software projects. We help you choose the right technology, the right development process and an appropriate product life cycle management for your IT needs.</p>
                </div>

                <div class="col-md-12">
                    <a href="/service" class="under-line"><button type="button" class="btn btn-default center-block more-about"> Know More</button></a>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================== start project ================ -->
    <section class="quotes" id="">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <h2 class="quote-heading top-space">Trusted developers, ready to join your team.</h2>
                    <h5 class="quote-desc">You can’t find the best solution to a problem unless you explore!</h5>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <a href="/contact"><button type="button" class="btn btn-default btn-block btn-lg start-project">HIRE US</button></a>
                </div>
            </div>
        </div>
    </section>

      <!-- ====================== Technology ===================== -->

    <section class="technology" id="Technologies">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 text-center"><h2 class="tech-top-heading">What We Use<hr></h2></div>
                <div class="col-md-3 tech-column">
                    <div class="grid">
                        <figure>
                            <img src="images/new-angular.png" alt="Angular" class="img-responsive center-block tech-img-height">
                            <h2 class="technologies-heading">ANGULAR</h2>
                            <figcaption>
                                <h4 class="slide-project">Number Of Projects: 255</h4>
                                <h4 class="slide-project">Sailor For Angular: 50+</h4>
                                <a href="/angular"><button class="btn btn-success center-block">Take a Look</button></a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                
                <a href="/node">
                <div class="col-md-3 tech-column ">
                    <div class="grid">
                        <figure>
                            <img src="images/1470398713_nodejs.png" alt="Angular" class="img-responsive center-block tech-img-height" style="height:188px;">
                            <h2 class="technologies-heading">Node Js</h2>
                            <figcaption>
                                <h4 class="slide-project">Number Of Projects: 255</h4>
                                <h4 class="slide-project">Developer For Node: 50+</h4>
                                <a href="/node"><button class="btn btn-success center-block">Take a Look</button></a>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- <a href="seperate-technology.html"><img src="image/React.js.png" alt="" class="img-responsive center-block tech-img-height"></a>
                    <h2 class="technology-name text-center">React Native</h2>
                    <div class="technology-desc">
                        Awesome platform for creating cross platform app with user experience of the native app.
                    </div> -->
                </div></a>

                <a href="/react">
                <div class="col-md-3 tech-column ">
                    <!-- <img src="image/node-js.png" alt="" class="img-responsive center-block tech-img-height">
                    <h2 class="technology-name text-center">Node Js</h2>
                    <div class="technology-desc">
                    The GoTo Technology for building realtime or data streaming app like a chat-engine or a stock ticker
                    </div> -->
                    <div class="grid">
                        <figure>
                            <img src="images/1470398704_react.png" alt="Angular" class="img-responsive center-block tech-img-height" style="height:188px;">
                            <h2 class="technologies-heading">React Native</h2>
                            <figcaption>
                                <h4 class="slide-project">Number Of Projects: 255</h4>
                                <h4 class="slide-project">Developer For React: 50+</h4>
                                <a href="/react"><button class="btn btn-success center-block">Take a Look</button></a>
                            </figcaption>
                        </figure>
                    </div>
                </div></a>

                <a href="/laravel">
                 <div class="col-md-3 tech-column ">
                    <!-- <img src="image/1470068552_laravel.png" alt="" class="img-responsive center-block tech-img-height">
                    <h2 class="technology-name text-center">Laravel</h2>
                    <div class="technology-desc">
                    Laravel is the best framework to build any kind of web app with PHP.
                    </div> -->
                    <div class="grid">
                        <figure>
                            <img src="images/1470398721_Laravel.png" alt="Angular" class="img-responsive center-block tech-img-height" style="height:188px;">
                            <h2 class="technologies-heading">Laravel</h2>
                            <figcaption>
                                <h4 class="slide-project">Number Of Projects: 255</h4>
                                <h4 class="slide-project">Developer For Laravel: 50+</h4>
                                <a href="/laravel"><button class="btn btn-success center-block">Take a Look</button></a>
                            </figcaption>
                        </figure>
                    </div>
                </div></a>

                <div class="col-md-12">
                    <a href="/technology" class="under-line"><button type="button" class="btn btn-default center-block more-about">Explore Tech Hub</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== contact us ===================== -->
    <section class="contact" id="Contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-heading text-center">Contact<hr></p>
                </div>
                <div class="col-md-12 text-center">
                    <p class="contact-desc">We like to create things with fun. Get in touch with us.</p>
                </div>
                <div class="col-md-6">
                    <div class="form-group custom-form">
                        <input type="text" class="form-control custom-input" id="" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group custom-form">
                        <input type="text" class="form-control custom-input" id="" placeholder="Enter Name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" rows="7" id="comment" placeholder="Enter Your Message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-success center-block btn-lg subscribe-btn">contact</button>
                </div>
            </div>
        </div>
    </section>
@stop