@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="mb-0">Salat Times</h1>
                        <a href="{{ route('salat-times.create') }}" class="btn btn-primary">Add Salat Time</a>
                    </div>


                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Salat Name</th>
                                <th>Time</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($salatTimes))
                                @foreach ($salatTimes as $index => $salatTime)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $salatTime->name }}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $salatTime->time)->format('h:i A') }}
                                        </td>
                                        <td>
                                            @if ($salatTime->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('salat-times.edit', $salatTime->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('salat-times.destroy', $salatTime->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>No data fount</tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection