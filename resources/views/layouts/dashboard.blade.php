@extends('layouts.plane')

@section('body')
<div id="wrapper">
        <!-- ============== Navigation ==================-->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="/home"><img src="images/logo-with-base-422X100.png" class="img-responsive logo-img" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Product">Product</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Technologies">Technologies</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    @yield('content')


    <!-- ======================= primary footer ============= -->
    <section class="primary-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 no-padding col-xs-12 col-sm-4">
                        <a class="" href="/home"><img style="height: 36px;" src="{{ asset('images/logo-with-base-422X100.png') }}" class="img-responsive footer-logo"></a>
                    </div>
                    <div class="col-md-8 col-xs-12 col-sm-8 col-md-push-6 " style="padding-right: 0px;">
                        <div class="number-pro">10,680,916 &#43; Projects</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====================== footer ===================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-meet-geeks">
                    <h4 class="meet-geeks">Meet Geeks</h4>
                    <ul>
                        <li><a href="index.html">About GeekyAnts</a></li>
                        <li><a href="http://www.geekyants.com/culture.php" target="_blank">Culture @GeekyAnts</a></li>
                        <li><a href="http://jobs.sahusoft.com/">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-meet-geeks">
                    <h4 class="meet-geeks">Quick Links</h4>
                    <ul>
                        <li><a href="http://blog.sahusoft.com/" target="_blank">Blog</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>    
                    </ul>
                </div>
                <div class="col-md-4 footer-meet-geeks">
                    <h4 class="meet-geeks">Be Tuned With Us</h4>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon2">
                        <span class="input-group-addon footer-btn" id="basic-addon2">Subscribe</span>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.facebook.com/geekyants" target="_blank"><div class="fa-icon-space"><i class="fa fa-facebook-official fa-2x fa-icon" aria-hidden="true"></i></div></a>
                        <a href="https://twitter.com/geekyants" target="_blank"><div class="fa-icon-space "><i class="fa fa-twitter-square footer-twitter fa-2x fa-icon" aria-hidden="true"></i></div></a>
                        <a href="https://www.linkedin.com/company/geekyants-software-pvt-ltd" target="_blank"><div class="fa-icon-space"><i class="fa fa-linkedin-square fa-2x fa-icon" aria-hidden="true"></i></div></a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>

        
</div>
@stop

