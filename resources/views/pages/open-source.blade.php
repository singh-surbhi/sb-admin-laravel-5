@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('content')

	<!-- ======================== banner ===================== -->
    <div class="container open-overlay">
        <div class="row text-center">
            <h1 class="text-center open-source-head">Keep It Simple!<hr></h1>
        </div>
    </div>
    <!-- ===================== open source ================= -->

    <section class="opensource" id="git-hub">
        <div class="container">
            <div class="row">
                <div class="col-md-12 open-text-heading"><h2 class="text-center">Open Source Contribution</h2><hr></div>
                <!-- =================== 1 project =========== -->
                <div class="col-md-4 box">
                    <div class="hover-overlay">
                        <span class="plus text-center">Explore<br>
                            <a href="https://github.com/GeekyAnts/NativeBase" target="_blank">Visit On Our GitHub<i class="fa fa-github fa-2x" aria-hidden="true"></i>Page</a>
                        </span>
                    </div>
                    <div class="col-md-12">
                        <img src="images/sa-logo.png" alt="" class="img-responsive center-block">
                    </div>
                    <div class="col-md-12"><h3 class="text-center opensource-heading">StartAngular</h3></div>
                    <div class="col-md-12">
                        <p class="text-left open-source-para">Admin Dashboard template which we have rewritten it in Angular which is open sourced at `www` & easily available for the community to use for free.</p>
                    </div>
                </div>

                <div class="col-md-4 box">
                    <div class="hover-overlay">
                        <span class="plus text-center">Explore<br>
                        <a href="#">Visit On Our GitHub<i class="fa fa-github fa-2x" aria-hidden="true"></i>Page</a></span>
                    </div>
                    <div class="col-md-12">
                        <img src="images/logo-laravel.png" alt="" class="img-responsive center-block">
                    </div>
                    <div class="col-md-12"><h3 class="text-center opensource-heading">StartLaravel</h3></div>
                    <div class="col-md-12">
                        <p class="text-left open-source-para">Start Laravel is a library of free to download Bootstrap 3 themes and templates. Our themes are open source for any use, even commercial.</p>
                    </div>
                </div>

                <div class="col-md-4 box">
                    <div class="hover-overlay">
                        <span class="plus text-center">Explore<br>
                        <a href="https://github.com/GeekyAnts/NativeBase" target="_blank">Visit On Our GitHub<i class="fa fa-github fa-2x" aria-hidden="true"></i>Page</a></span>
                    </div>
                    <div class="col-md-12">
                        <img src="images/logo-startmobile.png" alt="" class="img-responsive center-block" style="height:38px;">
                    </div>
                    <div class="col-md-12"><h3 class="text-center opensource-heading">StrapMobile/StrapUI</h3></div>
                    <div class="col-md-12">
                        <p class="text-left open-source-para">Mobile App Themes & Starter Kits  for Android & iOS apps built using React Native.They are not completely open source but basic versions are free and worth giving a try.</p>
                    </div>
                </div>

                <div class="col-md-4 box column-space">
                    <div class="hover-overlay">
                        <span class="plus text-center">Explore<br>
                        <a href="https://github.com/GeekyAnts/NativeBase" target="_blank">Visit On Our GitHub<i class="fa fa-github fa-2x" aria-hidden="true"></i>Page</a></span>
                    </div>

                    <div class="col-md-12">
                        <img src="images/meteorl-logo.png" alt="" class="img-responsive center-block" style="height:38px;">
                    </div>
                    <div class="col-md-12"><h3 class="text-center opensource-heading">StartMeteor</h3></div>
                    <div class="col-md-12">
                        <p class="text-left open-source-para">StartMeteorJS is a library of free to download MeteorJS Admin dashboard themes and templates.Forever free, open source, and easy to use.</p>
                    </div>
                </div> 

                <div class="col-md-4 box column-space">
                    <div class="hover-overlay">
                        <span class="plus text-center">Explore<br>
                        <a href="https://github.com/GeekyAnts/NativeBase" target="_blank">Visit On Our GitHub<i class="fa fa-github fa-2x" aria-hidden="true"></i>Page</a></span>
                    </div>
                    <div class="col-md-12">
                        <img src="images/nativelogo.png" alt="" class="img-responsive center-block" style="height:38px;">
                    </div>
                    <div class="col-md-12"><h3 class="text-center opensource-heading">NativeBase</h3></div>
                    <div class="col-md-12">
                        <p class="text-left open-source-para">NativeBase is an open source framework that lets you create React Native apps with ease by providing generic re-usable components with single codebase for android and iOS.</p>
                    </div>
                </div>

                <div class="col-md-4 box column-space">
                    <div class="hover-overlay">
                        <span class="plus text-center">Explore<br>
                        <a href="https://github.com/GeekyAnts/NativeBase" target="_blank">Visit On Our GitHub<i class="fa fa-github fa-2x" aria-hidden="true"></i>Page</a></span>
                    </div>
                    <div class="col-md-12">
                        <img src="images/logo-reactstart.png" alt="" class="img-responsive center-block">
                    </div>
                    <div class="col-md-12"><h3 class="text-center opensource-heading">StartReact</h3></div>
                    <div class="col-md-12">
                        <p class="text-left open-source-para">Start React is an open source library of free to download React.js themes and templates which are highly extensible and ready to use for the developers community.</p>
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
                    <a href="contact.html"><button type="button" class="btn btn-lg start-btn center-block">START NOW</button></a>
                </div>
            </div>
        </div>
    </section>

@stop