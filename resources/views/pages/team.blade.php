@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('content')
     <!-- ======================== banner ===================== -->
    <div class="container team-overlay">
        <div class="row text-center">
            <h1 class="text-center team-head">WE ARE</h1>
            <h2 class="text-center team-quotes">Thinkers.Coders.Hackers <hr></h2>
        </div>
    </div>
    <!-- ======================== meet our team ================= -->
    <section class="team">
        <div class="container">
            <div class="col-md-12"><h1 class="text-center team-heading">Meet Our Dream Team.<hr></h1></div>
            <div class="col-sm-4 col-md-3" itemprop="member" itemscope="" itemtype="//schema.org/OrganizationRole">                                
                <div class="team-thumbnail" itemprop="member" itemscope="" itemtype="//schema.org/Person">
                    <a href="/pratik">
                        <img src="images/pratik.jpg" class="img-circle" title="Kumar Pratik" alt="Kumar Pratik">
                        <h2 class="text-center emp-name">Kumar Pratik</h2>
                        <h5 class="jobTitle text-center">Managing Director</h5>
                    </a>
                    <div class="protfolio-social-icons">
                        <a href="http://twitter.com/pratiksahu" target="_blank" class="twitter"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>

                        <a href="http://www.facebook.com/kumarpratiksahu" target="_blank" class="facebook"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>

                        <a href="http://plus.google.com/108920911839084406771/" target="_blank" class="google-plus"><i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i></a>

                        <a href="http://www.linkedin.com/in/kumarpratiksahu" class="linkedin" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>


                        <a href="https://github.com/pratiksahu" class="github-square" target="_blank"><i class="fa fa-github-square fa-2x" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>   
        </div>    
    </section>

    

    <!-- ========================= want to work =========== -->
    <section class="join-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-center workwith-us">Want to Work With Us? We'd love to hear from you.</h4>
                </div>
                <div class="col-md-12">
                    <a href="mailto:Leads@sahusoft.com " class="mail-link"><h4 class="text-center">hello@GeekyAnts.com</h4></a>
                </div>
            </div>
        </div>
        
    </section>
            
@stop
