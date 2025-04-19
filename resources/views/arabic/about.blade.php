@extends('arabic.master')
@section('content')
    <section class="hero-section text-white about ar" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 style="font-weight: 100; margin-bottom: 20px; margin-top: 30px; text-align:right;">حكاية <span class="fw-bold" style="display:block;">رؤية <span style="font-weight: 100;">و</span>تمكين</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px; text-align: right;">{{ $contentsArray['hero_about'] ?? '' }}<p>
                </div>
                <div class="col-md-5">
                </div>
            </div>

        </div>
    </section>


    <section class="container my-5" dir="rtl">
        <h2 style="font-size: 24px; color: #362E2E; font-weight: 400;">صاحب الرؤية وراء المسيرة:</h2>
        <h3 class="text-custom fw-med" style="margin-bottom: 20px; font-size: 40px;">البروفيسور لؤي عبد الله</h3>
        <div class="row align-items-start">
            <div class="col-md-9" style="line-height: 36px; font-size: 18px; color: #666666; text-align: right !important;">
				@foreach (explode("\n", $contentsArray['about_founder']) as $block)
				    @if (trim($block) !== '')
				        <p>{{ $block }}</p>
				    @endif
				@endforeach
            </div>
            <div class="col-md-3">
                <img src="{{asset('images/tarjamat-founder-ar.svg')}}" alt="Prof. Louay Abdulla" class="img-fluid">
            </div>
        </div>
    </section>


    <section class="container my-5" dir="rtl">
        <h2 style="font-size: 24px; color: #362E2E; font-weight: 400;">قصة تأسيس ترجمات:</h2>
        <h3 class="text-custom fw-med" style="margin-bottom: 20px; font-size: 40px;">رؤية تنبض بالمساواة والتميّز</h3>
			@foreach (explode("\n", $contentsArray['about_journey']) as $block)
			    @if (trim($block) !== '')
			        <p>{{ $block }}</p>
			    @endif
			@endforeach
    </section>


    <section class="bg-primary text-white py-5" style="background-color: #5C7A30 !important;" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 style="font-weight: 100; font-size: 26px; margin-bottom: 30px;">الغرض <span style="display: block; font-size: 32px;">وراء  <span class="fw-bold">كلماتنا</span></span></h3>
                    <p style="font-size: 18px; line-height: 36px;">{{$contentsArray['about_mission']}}</p>
                </div>
                <div class="col-md-4 offset-md-1">
                    <h3 style="font-weight: 100; font-size: 26px; margin-bottom: 30px;">الوجهة<span style="display: block; font-size: 32px;">التي نسير <span class="fw-bold">نحوها</span></span></h3>
                    <p style="font-size: 18px; line-height: 36px;">{{$contentsArray['about_vision']}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
