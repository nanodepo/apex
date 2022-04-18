<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class ArrowNarrowUp extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8 7l4-4m0 0l4 4m-4-4v18" />
</svg>
blade;
    }
}
