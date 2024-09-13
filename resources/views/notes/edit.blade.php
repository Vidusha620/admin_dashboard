@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Edit Category</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $category->name }}" />
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Position</label>
                            <input type="text" name="position" class="form-control" value="{{ $category->position }}" />
                            @error('position') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Office</label>
                            <input type="text" name="office" class="form-control" value="{{ $category->office }}" />
                            @error('office') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" value="{{ $category->age }}" />
                            @error('age') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label>Start Date</label>
                            <input type="text" name="startDate" class="form-control" value="{{ $category->startDate }}" />
                        </div>
                        <div class="mb-3">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" value="{{ $category->salary }}" />
                            @error('salary') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
