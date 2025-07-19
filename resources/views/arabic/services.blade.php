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
                <li class="service-item {{ $service->color }}">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="service-icon">
                                @if ($service->icon)
                                    <img src="{{ asset($service->icon) }}" alt="{{ $service->name_ar }}" />
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
        </ul>
    </section>
@endsection
