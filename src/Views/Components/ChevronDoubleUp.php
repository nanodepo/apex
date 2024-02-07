<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class ChevronDoubleUp extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 18.75 7.5-7.5 7.5 7.5" />
<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 7.5-7.5 7.5 7.5" />
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
