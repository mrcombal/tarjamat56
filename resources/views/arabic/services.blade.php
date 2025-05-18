@extends('arabic.master')
@section('content')
    <section class="hero-section text-white text-left services ar" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">نصيغ <span class="fw-bold">العبارات</span> ..<br>.. لنبني جسور <span class="fw-bold">التواصل</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px; text-align: right;">{{ $contentsArray['hero_services'] ?? '' }}</p>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5" dir="rtl">
        <h2 style="font-size: 32px; color: #362E2E; margin-bottom: 20px; font-weight: 500;">
             خدمات <span class="text-custom fw-bold">ترجمات</span>
        </h2>
        <p style="font-weight: 600;">إن كنت تبحث عن خبراء في عالم الترجمة والتوطين، فقد وجدت ضالتك!</p>
        <p>مهما كانت احتياجات مشروعك، استكشف خدماتنا المتنوعة ودَع فريقنا المحترف يساعدك على إحياء كلماتك بدقة واهتمام.</p>

        <ul class="service-list">
            @foreach ($services as $service)
                <li class="service-item {{ $service->photo ?? 'default' }}">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="service-icon">
                                @if ($service->icon)
                                    <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name_ar }}" />
                                @else
                                    <img src="{{ asset('images/services/default-icon.svg') }}" alt="Default Icon" />
                                @endif
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="service-details">
                                <h3>{{ $service->name_ar }}</h3>
                                <p>{{ $service->description_ar }}</p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            <li class="service-item teal">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/translation.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>الترجمة</h3>
                            <p>نوفر ترجمة دقيقة وملائمة ثقافيًا، مع ضمان الحفاظ على المعنى الأصلي للرسالة وملاءمتها للثقافة والسياق المُستهدفَين.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item olive">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/editing.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>التدقيق اللغوي والمراجعة</h3>
                            <p>نقبل مشروعات التدقيق اللغوي والمراجعة لضمان ملاءمة النص للجمهور المُستهدف وتحسين مقروئيته، علاوةً على أن كل مشروع في ترجمات يمر بمرحلتي المراجعة والتدقيق اللغوي لضمان وضوح النص وسلاسته وخلوّه من الأخطاء اللغوية. </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item bronze">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/subtitling.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>ترجمة الشاشة وتفريغ النصوص</h3>
                            <p>إنشاء ترجمات نصية للمحتوى المرئي وتفريغ المحتوى المسموع إلى صيغة مكتوبة مع مراعاة التوطين اللغوي والدقة التقنية لتتناسب مع طابع النص والتوقيت والسياق.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item crimson">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/interpretation.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>الترجمة الشفوية</h3>
                            <p>نوفر خدمة الترجمة الشفوية لدعم احتياجات العملاء، لا سيما في جلسات المحاكم والزيارات الطبية عبر الإنترنت.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item violet">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/dtp.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>النشر المكتبي المتعدد اللغات</h3>
                            <p>نصمم الوثائق المترجمة بعدة لغات وننسقها لضمان الحفاظ على مظهرها الاحترافي عبر مختلف الصيغ والمنصات.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item magenta">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/mtp.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>تحرير الترجمة الآلية</h3>
                            <p>نراجع النصوص المترجمة بواسطة أدوات الذكاء الاصطناعي، ما يضمن أعلى مستويات الدقة والطلاقة والملاءمة الثقافية للنص النهائي.</p>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </section>
@endsection
