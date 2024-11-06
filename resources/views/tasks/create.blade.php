@extends('layouts.master')

@section('createTask-active', 'active')

@section('title', 'Tasks')

@section('content')

    <div class="container d-flex justify-content-center align-items-center" style="height: 60vh;">
        <form method="POST" action="{{ route('tasks.store') }}" class="col-md-6">
            @csrf
            <h2 class="h3 mb-3 fw-normal text-center">Create Task</h1>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                        <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="completed" name="completion_status" id="Completed">
                    <label class="form-check-label" for="Completed">
                        Completed
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="notCompleted" name="completion_status" id="not-completed">
                    <label class="form-check-label" for="not-completed">
                        Not Completed
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>


@endsection
