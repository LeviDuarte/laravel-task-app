@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto p-4">
<h1 class="text-2xl font-bold mb-4 underline text-[#ffffff]">Create New Task</h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div class="mb-1">
        <label for="task_name" class="block mb-1 text-[#ffffff]">Task Name</label>
        <input type="text" name="task_name" id="task_name" required
        class="w-full border rounded px-3 py-2 placeholder-red-300" placeholder="e.g. Taking a shower, Walking the dog">

    </div>
    <div class="mb-1">
        <label for="task_location" class="block mb-1 text-[#ffffff]">Location (Optional)</label>
        <input type="text" name="task_location" id="task_location"
        class="w-full border rounded px-3 py-2 placeholder-red-300" placeholder="e.g. Home, Work, Gym">

    </div>
    <div class="mb-1">
        <label for="time_complexity" class="block mb-1 text-[#ffffff]">Time Estimate</label>
        <select name="time_complexity" id="time_complexity" required
        class="w-full border rounded px-3 py-2">
        <option value="0">N/A</option>
        <option value="1">~10 minutes</option>
        <option value="2">~30 minutes</option>
        <option value="3">~1 hour</option>
        <option value="4">~4 hours</option>
        <option value="5">~1 day</option>
        </select>
    </div>
    <div class="mb-1">
        <label for="material_required" class="block mb-1 text-[#ffffff]">Materials Required (Optional)</label>
        <input type="text" name="material_required" id="material_required"
        class="w-full border rounded px-3 py-2 placeholder-red-300"
        placeholder="e.g. Trash Bags, Broom">

    </div>
    <div class="mb-1">
        <label for="deadline" class="block mb-1 text-[#ffffff]">Deadline (Optional)</label>
        <input type="datetime-local" name="deadline" id="deadline"
        class="w-full border rounded px-3 py-2">

    </div>
    <div class="mb-1">
        <label for="priority" class="block mb-1 text-[#ffffff]">Level of Priority (Optional)</label>
        <select name="priority" id="priority" class="w-full border rounded px-3 py-2">
        <option value="">N/A</option>
        <option value="1">Low</option>
        <option value="2">Medium</option>
        <option value="3">High</option>
        </select>
    </div>
    <div class="mb-1">
    <label for="category" class="block mb-1 text-[#ffffff]">Category (Optional)</label>
    <input type="text" name="category" id="category"
    class="w-full border rounded px-3 py-2 placeholder-red-300"
    placeholder="e.g., Chores, Work, Health">

    </div>
    <div class="flex gap-4">

    <button type="submit"
    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:animate-bounce">
    Create Task
    </button>



    <a href="{{ url('/') }}"
    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 hover:animate-bounce">
    Cancel
    </a>
    </div>
</form>
</div>
@endsection