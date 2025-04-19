@extends('arabic.master')
@section('content')
    <section class="hero-section text-white text-left services ar" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">نصنع <span class="fw-bold">الكلمات</span> ..<br>.. ونربط <span class="fw-bold">الثقافات</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px; text-align: right;">{{ $contentsArray['hero_services'] ?? '' }}</p>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5" dir="rtl">
        <h2 style="font-size: 32px; color: #362E2E; margin-bottom: 20px; font-weight: 500;">
            اختر من <span class="text-custom fw-bold">خدماتنا</span>
        </h2>
        <p style="font-weight: 600;">هل تبحث عن ترجمات متقنة، تحرير، أو خدمات أكثر تخصصاً؟</p>
        <p>مهما كانت احتياجات مشروعك، استكشف خدماتنا المتنوعة ودع فريقنا من المحترفين يساعدك في إحياء كلماتك بدقة واهتمام.</p>

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
                            <p>ترجمة دقيقة وملائمة ثقافياً للمحتوى المكتوب بين اللغات، مع ضمان الحفاظ على المعنى الأصلي للرسالة وتكييفها مع الثقافة والسياق المستهدف.</p>
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
                            <p>تحسين النصوص المترجمة من خلال تحسين الوضوح والقواعد اللغوية وتدفق النص، مع ضمان التناسق والدقة عبر الوثائق. يضمن فريق المحررين لدينا أن يكون المنتج النهائي مصقولًا وخاليًا من الأخطاء.</p>
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
                            <h3>الترجمة النصية والنسخ</h3>
                            <p>إنشاء ترجمات نصية للمحتوى المرئي ونسخ الملفات الصوتية/الفيديو إلى صيغة مكتوبة. يشمل ذلك التوطين اللغوي والدقة التقنية لتتناسب مع النغمة والتوقيت والسياق.</p>
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
                            <p>ترجمة دقيقة وملائمة ثقافياً للمحتوى المكتوب بين اللغات، مع ضمان الحفاظ على المعنى الأصلي للرسالة وتكييفها مع الثقافة والسياق المستهدف.</p>
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
                            <h3>النشر المكتبي متعدد اللغات</h3>
                            <p>تصميم وتنسيق الوثائق المترجمة بعدة لغات لضمان الحفاظ على مظهرها الاحترافي عبر مختلف الصيغ والمنصات.</p>
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
                            <p>تحسين الترجمات التي تم إنشاؤها بواسطة الآلات بواسطة المحررين البشريين، مما يضمن أعلى مستويات الدقة والطلاقة والملاءمة الثقافية للمنتج النهائي.</p>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </section>
@endsection
