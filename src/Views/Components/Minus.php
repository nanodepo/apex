<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class Minus extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
blade;
    }

    public function solid(): string
    {
        return <<<'blade'
<path fill-rule="evenodd" d="M4.25 12a.75.75 0 0 1 .75-.75h14a.75.75 0 0 1 0 1.5H5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
blade;
    }

    public function mini(): string
    {
        return <<<'blade'
<path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
blade;
    }

    public function micro(): string
    {
        return <<<'blade'
<path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
blade;
    }
}
