@extends('layouts.app')

@section('content')

<!-- Content for displaying tasks goes here-->

 <h1 class="text-2xl font-bold mb-4">All Tasks</h1>

<ul>
@forelse($tasks as $task)
<li class="mb-2">
{{ $task->task_name }}
</li>
@empty
<li class="text-white-500">No tasks yet.</li>
@endforelse
</ul>

<div class="mt-4 m-auto flex items-center justify-center h-screen">
<a href="{{ route('tasks.create') }}"
class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
Create a New Task
</a>
</div>




@endsection()