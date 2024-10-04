@extends('admin.master')


@section('content')
    <div class="container">
        <h1>{{ $faq->question }}</h1>
        <p><strong>Answer:</strong> {{ $faq->answer }}</p>

        <p><strong>Number:</strong> {{ $faq->number }}</p>
        <p><strong>Display Order:</strong> {{ $faq->display_order }}</p>

        <a href="{{ route('faqs.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
