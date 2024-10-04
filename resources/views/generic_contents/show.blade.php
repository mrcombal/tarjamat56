@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Generic Content Details</h1>

        <div class="mb-3">
            <strong>Key:</strong> {{ $content->key }}
        </div>
        <div class="mb-3">
            <strong>Value:</strong> {{ $content->value }}
        </div>

        <a href="{{ route('generic-content.index') }}" class="btn btn-secondary">Back to list</a>
    </div>
@endsection
