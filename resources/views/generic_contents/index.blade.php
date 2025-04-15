@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Generic Content List</h1>
        <a href="{{ route('generic-content.create') }}" class="btn btn-primary mb-3">Create New Content</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Key</th>
                    <th>Value</th>
                    <th>Arabic Value</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contents as $content)
                    <tr>
                        <td>{{ $content->id }}</td>
                        <td>{{ $content->key }}</td>
                        <td>{{ $content->value }}</td> <!-- Truncate long values -->
                        <td>{{ $content->value_ar }}</td> <!-- Truncate long values -->
                        <td>
                            <a href="{{ route('generic-content.show', $content->id) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('generic-content.edit', $content->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('generic-content.destroy', $content->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this content?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
