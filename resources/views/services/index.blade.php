@extends('admin.master')

@section('content')

    <div class="container">
        <h1>Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Create New Service</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <th>Name (EN)</th>
                    <th>Name (AR)</th>
                    <th>Description (EN)</th>
                    <th>Description (AR)</th>
                    <th>Display Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                       <td>
    	                    @if ($service->icon)
                                <img src="{{ asset($service->icon) }}" alt="Icon" width="50">
                            @else
                                No icon
                            @endif
                        </td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->name_ar }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->description_ar }}</td>
                        <td>{{ $service->display_order }}</td>
                        <td>
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
