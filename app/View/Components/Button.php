<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public mixed $rounded;
    public function __construct($rounded = false)
    {
        $this->rounded = $rounded ? 'rounded-full' : '';
    }

    public function render(): View
    {
        return view('components.button');
    }
}
