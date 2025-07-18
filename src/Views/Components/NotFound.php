<?php

namespace NanoDepo\Apex\Views\Components;

use NanoDepo\Apex\Iconable;

class NotFound extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path stroke-linecap="round" stroke-linejoin="round" d="" />
blade;
    }

    public function solid(): string
    {
        return <<<'blade'
<path d="" />
blade;
    }

    public function mini(): string
    {
        return <<<'blade'
<path d="" />
blade;
    }

    public function micro(): string
    {
        return <<<'blade'
<path d="" />
blade;
    }
}
