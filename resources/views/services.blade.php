@extends('master')

@section('content')
    <section class="hero-section text-white text-left services">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">Crafting <span class="fw-bold">words</span> ..<br>.. bridging <span class="fw-bold">worlds</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px;">{{ $contentsArray['hero_services'] ?? '' }}</p>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 style="font-size: 32px; color: #362E2E; margin-bottom: 20px; font-weight: 500;">
            Choose your <span class="text-custom fw-bold">service</span>
        </h2>
        <p style="font-weight: 600;">Looking for expert translations, editing, or something more specialized?</p>
        <p>Whatever your project needs, explore our range of services and let our team of<br>professionals help bring your words to life with accuracy and care.</p>

        <ul class="service-list">
            @foreach ($services as $service)
                <li class="service-item {{ $service->photo ?? 'default' }}">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="service-icon">
                                @if ($service->icon)
                                    <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" />
                                @else
                                    <img src="{{ asset('images/services/default-icon.svg') }}" alt="Default Icon" />
                                @endif
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="service-details">
                                <h3>{{ $service->name }}</h3>
                                <p>{{ $service->description }}</p>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
