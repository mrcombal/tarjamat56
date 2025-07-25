@extends('admin.master')

@section('content')

    <div class="container">
        <h1>Edit Service</h1>

        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name (EN)</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $service->name) }}" required>
            </div>

            <div class="form-group">
                <label for="name_ar">Name (AR)</label>
                <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{ old('name_ar', $service->name_ar) }}">
            </div>

            <div class="form-group">
                <label for="description">Description (EN)</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $service->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="description_ar">Description (AR)</label>
                <textarea class="form-control" id="description_ar" name="description_ar">{{ old('description_ar', $service->description_ar) }}</textarea>
            </div>

            <div class="form-group">
                <label for="display_order">Display Order</label>
                <input type="number" class="form-control" id="display_order" name="display_order" value="{{ old('display_order', $service->display_order) }}" required>
            </div>

            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" id="icon" name="icon">
                @if ($service->icon)
                    <img src="{{ asset($service->icon) }}" alt="Icon" width="100" class="mt-2">
                @endif
            </div>


            <div class="form-group">
                <label for="color">Background Photo</label>
                <select name="color" id="color" class="form-control" required>
                    <option value="teal" {{ $service->color == 'teal' ? 'selected' : '' }}>Teal</option>
                    <option value="olive" {{ $service->color == 'olive' ? 'selected' : '' }}>Olive</option>
                    <option value="bronze" {{ $service->color == 'bronze' ? 'selected' : '' }}>Bronze</option>
                    <option value="crimson" {{ $service->color == 'crimson' ? 'selected' : '' }}>Crimson</option>
                    <option value="violet" {{ $service->color == 'violet' ? 'selected' : '' }}>Violet</option>
                    <option value="magenta" {{ $service->color == 'magenta' ? 'selected' : '' }}>Magenta</option>
                </select>
                @if ($errors->has('photo'))
                    <div class="text-danger">{{ $errors->first('color') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection
