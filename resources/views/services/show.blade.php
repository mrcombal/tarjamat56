@extends('admin.master')

@section('content')
<div class="container">
    <h1>{{ $service->name }}</h1>
    <h3 class="text-muted">{{ $service->name_ar }}</h3>

    <p><strong>Description (EN):</strong> {{ $service->description }}</p>
    <p><strong>Description (AR):</strong> {{ $service->description_ar }}</p>
    <p><strong>Display Order:</strong> {{ $service->display_order }}</p>

    <p><strong>Icon:</strong></p>
    @if ($service->icon)
        <img src="{{ asset('storage/' . $service->icon) }}" alt="Icon" width="150">
    @else
        <p>No icon available</p>
    @endif

    
    <p><strong>Background Photo:</strong> {{ ucfirst($service->photo) }}</p>

    {{-- <p><strong>Color:</strong> {{ $service->color }}</p> --}}

    <a href="{{ route('services.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
