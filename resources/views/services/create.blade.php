@extends('admin.master')

@section('content')
   
    <div class="container">
        <h1>Create New Service</h1>

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="display_order">Display Order</label>
                <input type="number" class="form-control" id="display_order" name="display_order" value="{{ old('display_order') }}" required>
                @error('display_order')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" id="icon" name="icon" required>
                @error('icon')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <div class="form-group">
                <label for="color">Color</label>
                <input type="color" class="form-control" id="color" name="color" value="{{ old('color') }}" required>
                @error('color')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
        
    </div>
@endsection
