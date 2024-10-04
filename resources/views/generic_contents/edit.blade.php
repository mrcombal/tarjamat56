@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Edit Generic Content</h1>

        <form action="{{ route('generic-content.update', $content->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="key">Key</label>
                <input type="text" class="form-control" id="key" name="key" value="{{ old('key', $content->key) }}" required>
            </div>

            <div class="form-group">
                <label for="value">Value</label>
                <textarea class="form-control" id="value" name="value" rows="5" required>{{ old('value', $content->value) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
