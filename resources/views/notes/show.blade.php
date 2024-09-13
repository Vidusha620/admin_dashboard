@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Category Details</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label>Name</label>
                        <p>{{ $category->name }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Position</label>
                        <p>{{ $category->position }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Office</label>
                        <p>{{ $category->office }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Age</label>
                        <p>{{ $category->age }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Start Date</label>
                        <p>{{ $category->startDate }}</p>
                    </div>
                    <div class="mb-3">
                        <label>Salary</label>
                        <p>{{ $category->salary }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
