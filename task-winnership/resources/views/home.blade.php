@extends('layouts.app')

@section('content')
<section class="hero py-5" style="background: linear-gradient(to bottom, rgba(224, 247, 250, 0) 0%, #ffffff 50%, #A5D6A7 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-left">
                <h1 class="display-4 font-weight-bold">
                    <strong>Empowering Alumni With The University Alumni Tracer</strong> 
                </h1>
                <p class="lead">Track the success of our graduates and stay connected with the University Alumni Tracer Management Information System.</p>
                <div class="d-flex justify-content-left align-items-center">
                    <a href="#" class="btn btn-success btn-lg">Learn More</a>
                    <p class="ml-3 mb-0">Sudah memiliki akun? <a href="#" class="text-success" style="font-weight: bold;">Sign in</a></p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/person.png') }}" alt="images" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="features py-5" style="background: linear-gradient(to bottom, rgba(240, 248, 255, 0) 0%, #F0F8FF 50%, #E0F7FA 100%);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="heading" style="color:#2E7D32">Apa yang akan kamu dapatkan </h2>
            <h2 class="heading" style="color:#2E7D32">di Tracer Study? </h2>
            <p >Start filling out the questionnaire and create your CV easily</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card h-100 shadow-lg">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/kuesioner.png') }}" alt="Kuesioner Icon" class="mb-3" height="50">
                        <h5 style="color:#2E7D32">Data Kuesioner</h5>
                        <p>Manage your profile after you graduate from university</p>
                        <a href="#" class="btn btn-custom">
                            Get Started
                            <i class="fas fa-arrow-right ml-2" style="color: #2E7D32;"></i> 
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card h-100 shadow-lg">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/cv.png') }}" alt="CV Builder Icon" class="mb-3" height="50">
                        <h5 style="color:#2E7D32">CV Builder</h5>
                        <p>Priority support and multi-user access to maximize your productivity</p>
                        <i class="fas fa-arrow-right ml-2" style="color: #2E7D32;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="green-divider" style="height: 5px; background-color: #2E7D32; width: 10%; margin: 0 auto;"></div>

<section class="career-center py-5" style="background: linear-gradient(to bottom, rgba(224, 247, 250, 0) 0%, #ffffff 50%, #A5D6A7 100%);">
   
    <div class="container d-flex align-items-center" style="justify-content: space-between;">
        <div class="text-left" style="flex: 0.8;">
            <h2 style="color:#2E7D32">Career Development Center UMY</h2>
            <p style="font-size: 12px;">
                The distribution of job vacancy information, campus recruitment, skill improvement activities, alumni tracing, alumni teaching, graduate survey, outbound alumni focus group discussions (FGD). In addition, CDC UMY conducts tracking of alumni to obtain information about their careers after graduation and continuously surveys knowledge distribution of UMY graduates to the job market.
            </p>
        </div>

        <div class="image-section" style="flex: 0 0 auto;">
            <img src="{{ asset('images/woman.png') }}" alt="Image" class="img-fluid" style="width: 280px; height: 250px; border-radius: 50%;">
        </div>
    </div>

    <div class="row mt-4 text-center">
        <div class="col-md-3">
            <h3 class="display-4"><b>25</b></h3>
            <p>Tracking the Pulse of Response Rate</p>
            <div class="underline" style="background-color: #00c853;"></div>
        </div>
        <div class="col-md-3">
            <h3 class="display-4"><b>120</b></h3>
            <p>Employer Satisfaction</p>
            <div class="underline" style="background-color: #00e5ff;"></div>
        </div>
        <div class="col-md-3">
            <h3 class="display-4"><b>120</b></h3>
            <p>Survey Indicators</p>
            <div class="underline" style="background-color: #ffeb3b;"></div>
        </div>
        <div class="col-md-3">
            <h3 class="display-4"><b>120</b></h3>
            <p>Outcome Revolution</p>
            <div class="underline" style="background-color: #ff5252;"></div>
        </div>
    </div>
</section>

@endsection
