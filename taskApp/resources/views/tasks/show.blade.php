@extends('layouts.app')
@section('content')

<div class="bg-white p-4">

<h1 class="underline font-bold">Task Details</h1>
<div>
    <strong>Task Name:</strong> {{ $task->task_name }}
</div>
<div>
    <strong>Location:</strong> {{ $task->task_location }}
</div>
<div>
    <strong>Time Complexity:</strong> {{ $task->time_complexity }}
</div>
<div>
    <strong>Material Required:</strong> {{ $task->material_required }}
</div>
<div>
    <strong>Deadline:</strong> {{ $task->deadline }}
</div>
<div>
    <strong>Priority:</strong> {{ $task->priority }}
</div>
<div>
    <strong>Category:</strong> {{ $task->category }}
</div>
<div style="margin-top:20px;">
<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary border border-black bg-blue-500 hover:bg-blue-600 p-2">Edit Task</a>
<a href="{{ route('tasks.index') }}" class="btn btn-secondary border border-black bg-red-500 p-2 hover:bg-red-600">Back to List</a>
</div>

</div>
@endsection