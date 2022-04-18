<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class MinusSmSolid extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
</svg>
blade;
    }
}
