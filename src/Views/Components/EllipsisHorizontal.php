<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class EllipsisHorizontal extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
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
