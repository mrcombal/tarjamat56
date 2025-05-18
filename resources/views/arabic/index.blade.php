@extends('arabic.master')

@section('css')
	<style>
		.hero-section.home a.btn {
			margin-left: 20px;
			margin-right: 0;
		}
	</style>
@endsection

@section('content')
    <section class="hero-section text-white home" dir="rtl">
        <div class="container ar">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="display-5" style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">نعزز التواصل بين  <span class="fw-bold">الثقافات</span><br>وندعم تمكين <span class="fw-bold">المرأة</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px; text-align: right;">{{ $contentsArray['hero_home'] ?? '' }}</p>
                    <a href="{{route('website.ar.services')}}" class="btn">تصفح الخدمات</a>
                    <a href="{{route('website.ar.contact')}}" class="btn btn-white">طلب عرض سعر</a>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5 numerical-facts">
        <h2 class="text-center fw-bold" style="font-size: 32px; color: #362E2E; margin-bottom: 50px;">
            <img src="{{asset('images/tarjamat-logo-colored.svg')}}" style="display: block; margin: 0 auto 20px auto;">
            إحصائيات وأرقام
        </h2>
        <div class="row">
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number"><span id="fact-words">14</span>M+</div>
                        <div class="word">كلمة</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_words_text'] ?? 'N/A' }}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number"><span id="fact-years">17</span>+</div>
                        <div class="word">سنة</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_years_text'] ?? 'N/A' }}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number"><span id="fact-languages">4</span>+</div>
                        <div class="word">لغات</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_languages_text'] ?? 'N/A' }}</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fact">
                    <div class="circle">
                        <div class="number"><span id="fact-clients">50</span>+</div>
                        <div class="word">عميل</div>
                    </div>
                    <div class="description">{{ $contentsArray['counter_clients_text'] ?? 'N/A' }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services" dir="rtl">
        <div class="container">
            <h2 class="text-center fw-bold" style="font-size: 32px; color: #362E2E; margin-bottom: 50px;">
                <img src="{{asset('images/tarjamat-logo-colored.svg')}}" style="display: block; margin: 0 auto 20px auto;">
                ماذا تقدم ترجمات؟
            </h2>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/translation.svg')}}">
                        </div>
                        <h3 class="service-title">الترجمة<br>والتحرير باحترافية</h3>
                        <p class="service-description text-center">نقدّم ترجمات دقيقة وتحريرًا متقنًا لضمان الوضوح والتناسق في كل مشروع.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/subtitling.svg')}}">
                        </div>
                        <h3 class="service-title">خدمات الترجمة النصية<br>والتفريغ السمعي</h3>
                        <p class="service-description text-center">نقدّم ترجمة نصية دقيقة للمحتوى المرئي وتفريغًا احترافيًا للمواد الصوتية والمرئية.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/dtp.svg')}}">
                        </div>
                        <h3 class="service-title">النشر المكتبي متعدد اللغات<br>وخدمات الترجمة الشفوية</h3>
                        <p class="service-description text-center">نوفّر ترجمة شفوية احترافية ونشرًا مكتبيًا بلغات متعددة لدعم احتياجات التواصل على مستوى العالم.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service">
                        <div class="service-icon">
                            <img src="{{asset('images/icons/mtp.svg')}}">
                        </div>
                        <h3 class="service-title">الترجمة الآلية<br>وحلول التحرير اللاحق	</h3>
                        <p class="service-description text-center">نمزج بين تقنيات الترجمة الآلية المتقدمة والتحرير البشري المتخصص للحصول على نتائج سريعة ودقيقة.</p>
                    </div>
                </div>
            </div>
            <a href="{{route('website.services')}}" dir="rtl" class="btn">تصفح الخدمات تفصيليا <i class="fa fa-chevron-left" style="padding-right:20px;"></i></a>
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
