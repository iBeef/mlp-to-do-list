<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * The current year
     * 
     * @param string 
     */
    public $year;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.footer');
    }
}
