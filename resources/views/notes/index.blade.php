@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start Date</th>
                                <th>Salary</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->position }}</td>
                                <td>{{ $category->office }}</td>
                                <td>{{ $category->age }}</td>
                                <td>{{ $category->startDate }}</td>
                                <td>{{ $category->salary }}</td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('category.show', $category->id) }}" class="btn btn-info">Show</a>
                                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categories->links() }} <!-- Add pagination links -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
