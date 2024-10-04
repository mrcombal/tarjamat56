@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add Generic Content</h1>

        <form action="{{ route('generic-content.store') }}" method="POST">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="key">Key</label>
                <input type="text" class="form-control" id="key" name="key" value="{{ old('key') }}" required>
            </div>

            <div class="form-group">
                <label for="value">Value</label>
                <textarea class="form-control" id="value" name="value" rows="5" required>{{ old('value') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
