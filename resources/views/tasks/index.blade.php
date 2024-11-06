@extends('layouts.master')

@section('tasks-active', 'active')

@section('title', 'Tasks')

@section('content')
    <div class="container my-5">
        <ul class="nav nav-pills mb-3">
            <li class="nav-item">
                <a href="{{ route('tasks.create') }}" class="btn btn-info" style="border-radius: .375rem;">
                    Create Task
                </a>
            </li>
        </ul>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <!-- Make the table larger -->
                        <table class="table table-striped" style="width: 100%; max-width: 1200px; margin: 0 auto;">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->completion_status }}</td>
                                        <td>
                                            <!-- View Icon -->
                                            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-sm btn-info" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <!-- Edit Icon -->
                                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-primary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <!-- Delete Icon -->
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this task?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
