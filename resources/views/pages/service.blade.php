@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('content')

 
     <!-- =============================== tech banner =============== -->
    <section class="tech">
        <div class="image-wrap">
            <img src="images/workstation-405768_1280.jpg" alt="" class="img-responsive header-img" style="width: 100%; height: 100vh; ">
        </div>
        <div class="over-lay">
            <div class="container">
                <div class="row">
                    <div class="wrapper-header">
                        <h2 class="servicepage-heading text-center">What We Do<hr></h2>
                        <div class="col-md-12">
                            <p class="servicepage-desc">Collaborative Work. Agile Process. Ongoing Support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>
    

    <!-- =========================== list of things ================ -->
    <section class="list" id="things">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="list-heading text-center">List Of Things We Do.<hr></h2>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p class="list-para text-center">We create content that builds brands and engages consumers. We offer a broad range of services to help businesses and brands thrive in the digital age.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ======================== Services Description ============== -->
    <section class="Allservice-list">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 no-padding">
                    <div class="tab1-tech">
                        <h1 class="text-center tab-text-overlay">Web Development<hr></h1>
                    </div>
                </div>
                <div class="col-md-6 no-padding">
                    <div class="tab1-description">
                        <p class="tab1-desc text-center">With the help of our highly qualified and skilled IT professionals, we have been able to serve our clients with valuable web application developement services. Our web application development and custom programming services include everything from a simple Content Management System enabled website to the most complex web-based internet applications, e-commerce portals, and social networking development services.</p>
                    </div>
                </div>

                
                <div class="col-md-6 no-padding hidden-xs">
                    <div class="tab1-description">
                        <p class="tab1-desc text-center">Our Mobile Development Services will offer latest technologies to create mobile software solutions for various platforms such as iPhone / iPad, Android etc.We develop smarter and feature-rich mobile applications that transcend user expectations by harnessing the power of mobile technology</p>
                    </div>
                </div>
                <div class="col-md-6 no-padding hidden-xs">
                    <div class="tab2-tech">
                    <h1 class="text-center tab-text-overlay">Mobile Applications<hr></h1>
                    </div>
                </div>
                <!-- ===================== mobile =========== -->
                <div class="col-md-6 no-padding visible-xs">
                    <div class="tab2-tech">
                    <h1 class="text-center tab-text-overlay">Mobile Applications<hr></h1>
                    </div>
                </div>
                <div class="col-md-6 no-padding visible-xs">
                    <div class="tab1-description">
                        <p class="tab1-desc text-center">Our Mobile Development Services will offer latest technologies to create mobile software solutions for various platforms such as iPhone / iPad, Android etc.We develop smarter and feature-rich mobile applications that transcend user expectations by harnessing the power of mobile technology</p>
                    </div>
                </div>
                <!-- ============================= -->
                
                <div class="col-md-6 no-padding">
                    <div class="tab4-tech">
                    <h1 class="text-center tab-text-overlay">End To End Solution<hr></h1>
                    </div>
                </div>
                <div class="col-md-6 no-padding">
                    <div class="tab1-description">
                        <p class="tab1-description tab1-desc text-center">we can offer project services that cover planning, requirement analysis, architecture, implementation and test, production support and maintenance for complex software projects. We help you choose the right technology, the right development process and an appropriate product life cycle management for your IT needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <!-- ==================== our Approach ===================== -->
    <section class="approach">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="approach-heading text-center">Our Approach.<hr></h2>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p class="approach-desc text-center">We create content that builds brands and engages consumers. We offer a broad range of services to help businesses and brands thrive in the digital age.</p>
                </div>
                <!-- ======================== approach image ================ -->
                <div class="col-md-3 text-center">
                    <i class="fa fa-code fa-4x approach-icon" aria-hidden="true"></i>
                    <p class="organize plan-heading">Organize</p>
                    <p class="organize  plan-desc">Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fa fa-pencil-square-o fa-4x approach-icon" aria-hidden="true"></i>
                    <p class="plan plan-heading">Plan</p>
                    <p class="plan-desc  plan-desc">Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with ideas.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fa fa-rocket fa-4x approach-icon" aria-hidden="true"></i>
                    <p class="execute plan-heading">Execute</p>
                    <p class="execute-desc  plan-desc">Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing for chains.</p>
                </div>
                <div class="col-md-3 text-center">
                    <i class="fa fa-paper-plane-o fa-4x approach-icon" aria-hidden="true"></i>
                    <p class="deliver plan-heading">Deliver</p>
                    <p class="deliver-desc plan-desc">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality capital without superior.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================== lets start project =========== -->
    <section class="make-project">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h5 class="start-opensource-heading text-center">LET'S MAKE A START ON YOUR PROJECT.</h5>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <a href="/contact"><button type="button" class="btn btn-lg start-btn center-block">START NOW</button></a>
                </div>
            </div>
        </div>
    </section>


@stop