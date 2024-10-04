@extends('admin.master')

@section('content')
    <div class="container">
        <h1>FAQs</h1>
        <a href="{{ route('faqs.create') }}" class="btn btn-primary">Create New FAQ</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Number</th>
                    <th>Display Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                    <tr>
                        <td>{{ $faq->question }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td>{{ $faq->number }}</td>
                        <td>{{ $faq->display_order }}</td>
                        <td>

                            <a href="{{ route('faqs.show', $faq->id) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

