@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('content')

 <section class="tech">
        <div class="image-wrap" style="position: relative;">
            <img src="images/react-825x510.jpg" alt="" class="img-responsive header-img" style="width: 100%; height: 100%; ">
            <div class="over-lay">
                <div class="container">
                    <div class="row">
                        <div class="wrapper-header">
                            <h2 class="servicepage-heading text-center">React Native</h2>
                            <div class="col-md-12">
                                <p class="servicepage-desc">Awesome platform for creating cross platform app</p>
                            </div>
                            <div class="col-md-12 col-sm-12 page-scroll hidden-xs"><a class="page-scroll" href="#things"><img src="image/arrows.png" alt="scroll down" class="img-responsive center-block img-scroll"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>   

    <!-- ==================== About Project ====================== -->
    <section class="project-bio" id="about-react">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="pro-about-heading text-center">React Native<hr></p>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p class="pro-about-desc text-center">ReactJS makes it painless to create interactive UIs whereas React Native brings you the user experience of the native mobile platforms, along with the developer experience of building on the web. </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================== Our Work  ====================== -->
    <section class="our-work bg-light-gray" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="our-work-head text-center">Our Work</p>
                </div>
                <div class="col-md-12">
                    <p class="our-work-desc text-center">Work we've done for brands and clients.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid no-padding no-margin">
            <div class="row no-padding no-margin">
                <!-- ===================== protfolio grid view ============= -->
                <div class="col-md-4 col-sm-6 portfolio-item no-padding no-margin">
                    <a href="http://letsbuildwebsite.com/" class="portfolio-link">
                        <div class="portfolio-hover hover-blue">
                            <div class="portfolio-hover-content">
                                h
                            </div>
                        </div>
                        <img src="images/project-1.jpg" class="img-responsive" alt="">
                    </a>
                </div>


                <div class="col-md-4 col-sm-6 portfolio-item no-padding no-margin">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/project-11.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item no-padding no-margin">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/project-3.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item no-padding no-margin">
                    <a href="#portfolioModal5" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/project-4.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item no-padding no-margin">
                    <a href="#portfolioModal5" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/project-6.jpg" class="img-responsive" alt="">
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item no-padding no-margin">
                    <a href="#portfolioModal5" class="portfolio-link">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="images/project-7.jpg" class="img-responsive" alt="">
                    </a>
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
                    <a href="contact.html"><button type="button" class="btn btn-lg start-btn center-block">START NOW</button></a>
                </div>
            </div>
        </div>
    </section>  


@stop