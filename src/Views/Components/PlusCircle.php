<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class PlusCircle extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
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
