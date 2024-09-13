@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h2 class="card-header">Notes</h2>
                <div class="card-body">

                @if(session('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif
                    <table id="dataTable" class="table">
                        <thead>
                            <tr>
                            <th width="80px">No</th>
                            <th>Name</th>
                            <th>content</th>
                            <th width="250px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($notes as $note)
                            <tr>
                                <td>{{ $note->name }}</td>
                                <td>{{ $note->content }}</td>
                                
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
                            @empty
                            <tr>
                        <td colspan="4">There are no data.</td>
                    </tr>
                    @endforelse
                        </tbody>
                    </table>
                    {{ $notes->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
