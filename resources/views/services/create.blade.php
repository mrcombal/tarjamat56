@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Create New Service</h1>

        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name (EN)</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="name_ar">Name (AR)</label>
                <input type="text" class="form-control" id="name_ar" name="name_ar" value="{{ old('name_ar') }}">
                @if ($errors->has('name_ar'))
                    <div class="text-danger">{{ $errors->first('name_ar') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Description (EN)</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                @if ($errors->has('description'))
                    <div class="text-danger">{{ $errors->first('description') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="description_ar">Description (AR)</label>
                <textarea class="form-control" id="description_ar" name="description_ar">{{ old('description_ar') }}</textarea>
                @if ($errors->has('description_ar'))
                    <div class="text-danger">{{ $errors->first('description_ar') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="display_order">Display Order</label>
                <input type="number" class="form-control" id="display_order" name="display_order" value="{{ old('display_order') }}" required>
                @if ($errors->has('display_order'))
                    <div class="text-danger">{{ $errors->first('display_order') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" class="form-control" id="icon" name="icon" required>
                @if ($errors->has('icon'))
                    <div class="text-danger">{{ $errors->first('icon') }}</div>
                @endif
            </div>


            <div class="form-group">
                <label for="color">Color</label>
                <select name="color" id="color" class="form-control" required>
                    <option value="teal" {{ old('color') == 'teal' ? 'selected' : '' }}>Teal</option>
                    <option value="olive" {{ old('color') == 'olive' ? 'selected' : '' }}>Olive</option>
                    <option value="bronze" {{ old('color') == 'bronze' ? 'selected' : '' }}>Bronze</option>
                    <option value="crimson" {{ old('color') == 'crimson' ? 'selected' : '' }}>Crimson</option>
                    <option value="violet" {{ old('color') == 'violet' ? 'selected' : '' }}>Violet</option>
                    <option value="magenta" {{ old('color') == 'magenta' ? 'selected' : '' }}>Magenta</option>
                </select>
                @if ($errors->has('color'))
                    <div class="text-danger">{{ $errors->first('color') }}</div>
                @endif
            </div>



            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
