<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'task_name' => 'Take Out Trash',
            'task_location' => 'Kitchen',
            'time_complexity' => 1,
            // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Trash bags',
            'deadline' => '2025-02-21 20:00:00',
            'priority' => 2,
            // (1 => low, 2 => medium, 3 => high)
            'category' => 'chores',
        ]);
        Task::create([
            'task_name' => 'Buy Groceries',
            'task_location' => 'Store',
            'time_complexity' => 3,
            // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Money',
            'deadline' => '2025-02-20 10:00:00',
            'priority' => 3,
            // (1 => low, 2 => medium, 3 => high)
            'category' => 'food',
        ]);
        Task::create([
            'task_name' => 'Wash Dishes',
            'task_location' => 'Kitchen',
            'time_complexity' => 1,
            // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'sponge',
            'deadline' => '2025-02-22 16:00:00',
            'priority' => 1,
            // (1 => low, 2 => medium, 3 => high)
            'category' => 'chores',
        ]);
        Task::create([
            'task_name' => 'Homework',
            'task_location' => 'Bedroom',
            'time_complexity' => 2,
            // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Laptop',
            'deadline' => '2025-02-21 23:59:59',
            'priority' => 1,
            // (1 => low, 2 => medium, 3 => high)
            'category' => 'schoolwork',
        ]);
        Task::create([
            'task_name' => 'Work Out',
            'task_location' => 'Gym',
            'time_complexity' => 3,
            // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Weights',
            'deadline' => '2025-02-20 16:00:00',
            'priority' => 3,
            // (1 => low, 2 => medium, 3 => high)
            'category' => 'self care',
        ]);
    }
}
