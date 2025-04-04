<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public $message;
    public $taskId;
    public function __construct($message, $taskId = null)
    {
        //
        $this->message = $message;
        $this->taskId = $taskId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render() 
    {
        return view('components.alert');
    }
}
