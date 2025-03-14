@extends('layouts.app')
@section('content')

<div class="bg-white p-4 rounded">

<h1 class="underline">Edit Task</h1>
<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT') {{-- Important for updating (PUT/PATCH) --}}
    <div>
        <label for="task_name">Task Name:</label>
        <input type="text" name="task_name" id="task_name" class="border mb-2"
        value="{{ old('task_name', $task->task_name) }}">
        @error('task_name')
    <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>

    <div>
        <label for="task_location">Location:</label>
        <input type="text" name="task_location" id="task_location" class="border mb-2"
        value="{{ old('task_location', $task->task_location) }}">
        @error('task_location')
        <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
        <label for="time_complexity">Time Complexity:</label>
        <input type="number" name="time_complexity" id="time_complexity" class="border mb-2"
        value="{{ old('time_complexity', $task->time_complexity) }}" min="1" max="5">
        @error('time_complexity')
    <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
        <label for="material_required">Material Required:</label>
        <input type="text" name="material_required" id="material_required" class="border mb-2"
        value="{{ old('material_required', $task->material_required) }}">
        @error('material_required')
    <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
        <label for="deadline">Deadline:</label>
        <input type="date" name="deadline" id="deadline" class="border mb-2"
        value="{{ old('deadline', $task->deadline) }}">
        @error('deadline')
    <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
        <label for="priority">Priority:</label>
        <input type="number" name="priority" id="priority" class="border mb-2"
        value="{{ old('priority', $task->priority) }}" min="1" max="3">
        @error('priority')
    <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
    <div>
        <label for="category">Category:</label>
        <input type="text" name="category" id="category" class="border mb-2"
        value="{{ old('category', $task->category) }}">
        @error('category')
    <div style="color: red;">{{ $message }}</div>
    @enderror
    </div>
        <button type="submit" class="p-1 text-white bg-green-500 hover:bg-green-600 rounded">Update Task</button>
</form>
    <br>
<form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-1 bg-red-500 hover:bg-red-600 rounded">
    Delete Task
    </button>
</form>

</div>
@endsection()