@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto p-4 rounded bg-blue-200">
<h1 class="text-2xl font-bold mb-4">Create Awesome Task</h1>
<form action="" method="POST">
@csrf
{{-- Task Name --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for Task Name (e.g., <label for="task_name">Task Name</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> with name="task_name" and id="task_name".
- Consider making it required.
- Add a placeholder like "e.g., Take out trash". -->
<label for="task_name">Task Name</label>
<input type="text" name='task_name' id='task_name' required placeholder='TAKING OUT THE TRASH'>

</div>
{{-- Task Location --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Location" (e.g., <label for="task_location">Location</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> with name="task_location" and id="task_location".
- Indicate optional or required status.
- Add a placeholder like "Kitchen, Garage," etc.
-->
<label for="task_location" class="m-3 shadow">Location</label>
<input type="text" name="task_location" id="task_location" required placeholder="Kitchen, Garbage" class="m-3 shadow">
</div>
{{-- Time Estimate (or Time Complexity) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Time Estimate" (e.g., <label for="time_complexity">Time Estimate</label>)
- The label's 'for' should match the select's 'id'.
- Create a <select> element with name="time_complexity" and id="time_complexity".
- Add <option> items for 1-5, labeled as "10 min", "30 min", "1 hour", etc.
-->

<label for="time_complexity">Time Estimate</label>
<select name="time_complexity" id="time_complexity">
    <option value="10 min">10 min</option>
    <option value="30 min">30 min</option>
    <option value="1 hour">1 hour</option>
    <option value="12 hours">12 hours</option>
    <option value="1 day">1 day</option>
</select>>

</div>
{{-- Materials Required (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Materials Required" (e.g., <label for="materials_required">Materials Requ
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> for name="materials_required".
2/19/25, 12:49 PM project-day2-instructions

file:///C:/Users/ryan.morales/AppData/Local/Temp/crossnote2025119-148344-1k88sz5.8bivf.html 11/12

- Add a placeholder like "e.g., Trash Bags, Broom".
-->
</div>
{{-- Deadline (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Deadline" (<label for="deadline">Deadline</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="datetime-local"> for name="deadline".
-->
</div>
{{-- Priority (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Priority" (<label for="priority">Priority</label>)
- The label's 'for' should match the select's 'id'.
- Create a <select> for name="priority".
- Provide <option> items like "Low (1)", "Medium (2)", "High (3)".
-->
</div>
{{-- Category (Optional) --}}
<div class="mb-4">
<!-- GUIDANCE:
- Add a label for "Category" (e.g., <label for="category">Category</label>)
- The label's 'for' should match the input's 'id'.
- Create an <input type="text"> for name="category".
- Add a placeholder like "e.g., chores, work, health".
-->
</div>
{{-- Submit and Cancel Buttons --}}
<div class="flex gap-4">
<!-- GUIDANCE:
- Add a button for "Submit" or "Create Task" (type="submit").
- Add a link or button for "Cancel" that routes back to the homepage or tasks list.
-->
<button type="submit">Create Task</button>
<button type="submit">Cancel</button> </div>
</form>
</div>
@endsection