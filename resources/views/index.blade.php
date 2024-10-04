@extends('master')
@section('content')
    <section class="hero-section text-white text-left home">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="display-5" style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">Bridging <span class="fw-bold">cultures</span><br>Empowering <span class="fw-bold">women</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px;">We're more than just a translation company. Founded on a commitment to gender equality and social impact, Tarjamat provides top-tier language services while creating a platform for talented female translators.</p>
                    <a href="{{route('website.services')}}" class="btn">Browse services</a>
                    <a href="{{route('website.contact')}}" class="btn btn-white">Submit a request</a>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 numerical-facts">
        <h2 class="text-center fw-bold" style="font-size: 32px; color: #362E2E; margin-bottom: 50px;">
            <img src="{{asset('images/tarjamat-logo-colored.svg')}}" style="display: block; margin: 0 auto 20px auto;">
            Numerical Facts
        </h2>
        <div class="row">
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number">13M+</div>
                        <div class="word">words</div>
                    </div>
                    <div class="description">Our professionals translated more than 13 million words</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number">17+</div>
                        <div class="word">years</div>
                    </div>
                    <div class="description">Tarjamat has been in business for more than 17 years</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number">4+</div>
                        <div class="word">languages</div>
                    </div>
                    <div class="description">Providing expert translations in over four languages</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number">50+</div>
                        <div class="word">clients</div>
                    </div>
                    <div class="description">More than 50 satisfied clients from different countries</div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services">
        <div class="container">
            <h2 class="text-center fw-bold" style="font-size: 32px; color: #362E2E; margin-bottom: 50px;">
                <img src="{{asset('images/tarjamat-logo-colored.svg')}}" style="display: block; margin: 0 auto 20px auto;">
                What do we offer?
            </h2>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/translation.svg')}}">
                        </div>
                        <h3 class="service-title">Professional<br>Translation & Editing</h3>
                        <p class="service-description">Providing accurate translations and thorough editing to ensure clarity and consistency in every project.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/subtitling.svg')}}">
                        </div>
                        <h3 class="service-title">Subtitling &<br>Transcription Services</h3>
                        <p class="service-description">Delivering precise subtitling for video content and accurate transcription for audio and video materials.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/dtp.svg')}}">
                        </div>
                        <h3 class="service-title">DTP &<br>Interpretation</h3>
                        <p class="service-description">Offering expert interpretation and multilingual desktop publishing to support global communication needs.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/mtp.svg')}}">
                        </div>
                        <h3 class="service-title">Machine Translation &<br>Post-Editing Solutions</h3>
                        <p class="service-description">Combining advanced machine translation with expert post-editing for fast and accurate results.</p>
                    </div>
                </div>
            </div>
            <a href="{{route('website.services')}}" class="btn">Explore our services in details <i class="fa fa-chevron-right" style="padding-left:20px;"></i></a>
        </div>
    </section>
@endsection
