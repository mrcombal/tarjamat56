@extends('admin.master')

@section('content')
   
    <div class="container">
        <h1>Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary">Create New Service</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Display Order</th>
                    <th>Icon</th>
                    <th>Color</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->display_order }}</td>
                        <td>
                            @if ($service->icon)
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" width="50">
                            @else
                                No icon
                            @endif
                        </td>
                        <td>{{ $service->color }}</td>
                        <td>
                            <a href="{{ route('services.show', $service->id) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline-block;">
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
