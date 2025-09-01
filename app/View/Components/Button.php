<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
   public $color;
   public $size;
   public $hover;
    public function __construct($color="bg-pink-500", $hover="bg-pink-600",$size="base")
    {
        $this->color=$color;
        $this->size=$size;
        $this->hover=$hover;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
