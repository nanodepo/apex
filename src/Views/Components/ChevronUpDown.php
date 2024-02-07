<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class ChevronUpDown extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
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
