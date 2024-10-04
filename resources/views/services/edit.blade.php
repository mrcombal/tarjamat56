@extends('admin.master')

@section('content')
   
    <div class="container">
        <h1>Edit Service</h1>

        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $service->name) }}" required>
            </div>
        
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $service->description) }}</textarea>
            </div>
        
            <div class="form-group">
                <label for="display_order">Display Order</label>
                <input type="number" class="form-control" id="display_order" name="display_order" value="{{ old('display_order', $service->display_order) }}" required>
            </div>
        
            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" id="icon" name="icon">
                @if ($service->icon)
                    <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" width="100" class="mt-2">
                @endif
            </div>
        
            <div class="form-group">
                <label for="color">Color</label>
                <input type="color" class="form-control" id="color" name="color" value="{{ old('color', $service->color) }}" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
    </div>
@endsection
