<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class Circle extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<circle cx="12" cy="12" r="11" />
blade;
    }

    public function solid(): string
    {
        return <<<'blade'
<circle cx="12" cy="12" r="11" />
blade;
    }

    public function mini(): string
    {
        return <<<'blade'
<circle cx="10" cy="10" r="9" />
blade;
    }

    public function micro(): string
    {
        return <<<'blade'
<circle cx="8" cy="8" r="7" />
blade;
    }
}
