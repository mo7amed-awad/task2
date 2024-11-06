@extends('layouts.master')

@section('title', 'View Task')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="col-md-6">
            <h2 class="h3 mb-3 fw-normal text-center">Task Details</h2>

            <div class="mb-3">
                <label class="form-label"><strong>Title:</strong></label>
                <p>{{ $task->title }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Description:</strong></label>
                <p>{{ $task->description }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Status:</strong></label>
                <p>{{ $task->completion_status == 'completed' ? 'Completed' : 'Not Completed' }}</p>
            </div>

            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to Tasks</a>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
        </div>
    </div>
@endsection
