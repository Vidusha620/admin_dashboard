@extends('layouts.frontend')

@section('content')

    <div class="container">
        <div class="row">
        <div class="col-md-12">
        <div class="card mb-4">
                            <div class="card">
                            <div class="card-header">
                                </div>
                            <div class="card-body">
                                <form action="{{url('category')}}" method="POST">
                                    @csrf
                                    <div class ="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"/>
                                        @error('name') <span class="text-danger">{{ $message}}</span> @enderror
                                    </div>
                                    <div class ="mb-3">
                                        <label>Position</label>
                                        <input type="text" name="position" class="form-control"/>
                                        @error('position') <span class="text-danger">{{ $message}}</span> @enderror
                                    </div>
                                    <div class ="mb-3">
                                        <label>Office</label>
                                        <input type="text" name="office" class="form-control"/>
                                        @error('office') <span class="text-danger">{{ $message}}</span> @enderror
                                    </div>
                                    <div class ="mb-3">
                                        <label>Age</label>
                                        <input type="text" name="Age" class="form-control"/>
                                        @error('age') <span class="text-danger">{{ $message}}</span>@enderror
                                    </div>
                                    <div class ="mb-3">
                                        <label>Start Date</label>
                                        <input type="text" name="startDate" class="form-control"/>
                                    </div>
                                    <div class ="mb-3">
                                        <label>Salary</label>
                                        <input type="text" name="Salary" class="form-control"/>{{ $message}}
                                    </div>
                                    <div class ="mb-3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
        </div>
    </div>
    </div>

@endsection