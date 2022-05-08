<?php

namespace App\View\Components\Tasks;

use Illuminate\View\Component;

class TaskTableItem extends Component
{
    /**
     * The task id
     *
     * @var int
     */
    public $id; 

    /**
     * The task index
     *
     * @var string
     */
    public $index; 

    /**
     * The task description
     *
     * @var string
     */
    public $description; 

    /**
     * The completed status of the task
     *
     * @var bool
     */
    public $completed;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $index, $description, $completed)
    {
        $this->id = $id;
        $this->index = $index;
        $this->description = $description;
        $this->completed = $completed;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tasks.task-table-item');
    }
}
