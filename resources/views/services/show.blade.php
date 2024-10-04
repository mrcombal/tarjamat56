@extends('admin.master')

@section('content')
<div class="container">
    <h1>{{ $service->name }}</h1>

    <p><strong>Description:</strong> {{ $service->description }}</p>
    <p><strong>Display Order:</strong> {{ $service->display_order }}</p>
    <p><strong>Icon:</strong></p>
    @if ($service->icon)
        <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" width="150">
    @else
        No icon available
    @endif
    <p><strong>Color:</strong> {{ $service->color }}</p>

    <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
</div>

@endsection
