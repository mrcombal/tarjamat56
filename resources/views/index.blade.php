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
                        <div class="number"><span id="fact-words">{{ $contentsArray['counter_words'] ?? 'N/A' }}</span>M+</div>
                        <div class="word">words</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_words_text'] ?? 'N/A' }}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number"><span id="fact-years">17</span>+</div>
                        <div class="word">years</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_years_text'] ?? 'N/A' }}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number"><span id="fact-languages">4</span>+</div>
                        <div class="word">languages</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_languages_text'] ?? 'N/A' }}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number"><span id="fact-clients">50</span>+</div>
                        <div class="word">clients</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_clients_text'] ?? 'N/A' }}</div>
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
                        <p class="service-description text-center">Providing accurate translations and thorough editing to ensure clarity and consistency in every project.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/subtitling.svg')}}">
                        </div>
                        <h3 class="service-title">Subtitling &<br>Transcription Services</h3>
                        <p class="service-description text-center">Delivering precise subtitling for video content and accurate transcription for audio and video materials.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/dtp.svg')}}">
                        </div>
                        <h3 class="service-title">DTP &<br>Interpretation</h3>
                        <p class="service-description text-center">Offering expert interpretation and multilingual desktop publishing to support global communication needs.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/mtp.svg')}}">
                        </div>
                        <h3 class="service-title">Machine Translation &<br>Post-Editing Solutions</h3>
                        <p class="service-description text-center">Combining advanced machine translation with expert post-editing for fast and accurate results.</p>
                    </div>
                </div>
            </div>
            <a href="{{route('website.services')}}" class="btn">Explore our services in details <i class="fa fa-chevron-right" style="padding-left:20px;"></i></a>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="module">
        import { CountUp } from 'https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.8/countUp.min.js';
        const counter1 = new CountUp('fact-words', {{ $contentsArray['counter_words'] ?? 'N/A' }});
        const counter2 = new CountUp('fact-years', {{ $contentsArray['counter_years'] ?? 'N/A' }});
        const counter3 = new CountUp('fact-languages', {{ $contentsArray['counter_languages'] ?? 'N/A' }});
        const counter4 = new CountUp('fact-clients', {{ $contentsArray['counter_clients'] ?? 'N/A' }});
        counter1.start();
        counter2.start();
        counter3.start();
        counter4.start();
    </script>
@endsection
