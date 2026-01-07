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
    public string $type;

    public ?string $message;

    public bool $dismissable;

    public bool $autoDismissable;

    public int $autoDismissDelay;

    public function __construct($type = 'info', $message = null, $dismissable = false, $autoDismissable = false, $autoDismissDelay = 3000)
    {
        $this->type = $type;
        $this->message = $message;
        $this->dismissable = $dismissable;
        $this->autoDismissable = $autoDismissable;
        $this->autoDismissDelay = $autoDismissDelay;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
