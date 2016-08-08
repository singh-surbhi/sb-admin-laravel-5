@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('content')

  <!-- =================== banner ===================== -->
     <div class="container contact-overlay">
        <div class="row text-center">
        </div>
    </div>
    
    <!-- ======================== section 2 ================= -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center contact-us-heading">Start your Project<hr></h2>
                    <p class="text-center contact-description">We thrive when coming up with innovative ideas but also understand that a smart concept should be supported with measurable results.</p>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Full Name">
                    </div>
                    <div class="col-md-6 no-padding-left">
                        <div class="form-group">
                            <input type="email" class="form-control" id="name" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6 no-padding-right">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Phone">
                        </div>
                    </div>
                    <textarea class="form-control" rows="8" style="resize: none;" placeholder="Describe Your Project"></textarea>
                </div>
                <div class="col-md-10 col-md-offset-1" style="margin-top:30px;">
                    <button type="button" class="btn btn-default btn-lg center-block">SEND NOW</button>
                </div>
            </div>
        </div>
    </section>


@stop