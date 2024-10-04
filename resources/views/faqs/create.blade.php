@extends('admin.master')

@section('content')
   
    <div class="container">
        <h1>Create New FAQ</h1>

        <form action="{{ route('faqs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="question">Question</label>
                <input type="text" class="form-control" id="question" name="question" value="{{ old('question') }}" required>
            </div>

            <div class="form-group">
                <label for="answer">Answer</label>
                <textarea class="form-control" id="answer" name="answer">{{ old('answer') }}</textarea>
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control" id="number" name="number" value="{{ old('number') }}" required>
            </div>

            <div class="form-group">
                <label for="display_order">Display Order</label>
                <input type="number" class="form-control" id="display_order" name="display_order" value="{{ old('display_order') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
