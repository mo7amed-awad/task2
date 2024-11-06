<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::all();
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        // Create a new task using validated data
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'completion_status' => $request->completion_status,
            'user_id' => auth()->id(),
        ]);
    
        // Redirect to the task index page with a success message
        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }
     

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        // Update the task with validated data
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'completion_status' => $request->completion_status,
        ]);
    
        // Redirect to the task index page with a success message
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
    
        // Redirect to the task index page with a success message
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
