<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordion extends Component
{
    /**
     * Create a new component instance.
     */
    
    public int $id;
    public string $title;
    public function __construct(int $id, $title = 'Accordion item')
    { 
        $this->id = $id;
        $this->title = $title;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.accordion');
    }
}
