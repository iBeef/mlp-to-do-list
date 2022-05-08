<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Tasks to mimic design spec
     *
     * @var array
     */
    protected $tasks = [
        [
            'description' => 'Built based on client specification',
            'completed' => 0
        ],
        [
            'description' => 'Cross browser checks to ensure consistency of design (IE, Edge, FF, Chrome)',
            'completed' => 1
        ],
        [
            'description' => 'Site is navigable with Javascript disabled',
            'completed' => 0
        ],
        [
            'description' => 'Favicon updated & included in site root',
            'completed' => 1
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->tasks as $task) {
            Task::create($task);
        }
    }
}
