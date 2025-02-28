<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Request;

class Navbar extends Component
{
    public $href;
    public $activeClass;
    public $defaultClass;

    public function __construct(string $href = "#")
    {
        $this->href = $href;
        $this->activeClass = "bg-gray-900 text-white";
        $this->defaultClass = "text-gray-300 hover:bg-gray-700 hover:text-white";
    }

    public function isActive()
    {
        return Request::is(trim($this->href, '/')) ? $this->activeClass : $this->defaultClass;
    }

    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
