<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class ChevronLeft extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
blade;
    }

    public function solid(): string
    {
        return <<<'blade'

blade;
    }

    public function mini(): string
    {
        return <<<'blade'

blade;
    }

    public function micro(): string
    {
        return <<<'blade'

blade;
    }
}
