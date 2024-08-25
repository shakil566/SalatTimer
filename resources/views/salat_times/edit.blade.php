@extends('layouts.app')

@section('content')<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Edit Salat Time</h3>
                </div>
                <div class="card-body">

                    <!-- Display validation errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Form starts here -->
                    <form action="{{ route('salat-times.update', $salatTime->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Salat Name Field -->
                        <div class="form-group">
                            <label for="name">Salat Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $salatTime->name }}">
                        </div>

                        <!-- Salat Time Field -->
                        <div class="form-group">
                            <label for="time">Salat Time</label>
                            <input type="time" name="time" class="form-control" id="time" value="{{ $salatTime->time }}">
                        </div>

                        <!-- Status Toggle Field -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ $salatTime->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $salatTime->status == 2 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('salat-times.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                    <!-- Form ends here -->

                </div>
            </div>
        </div>
    </div>

    @endsection