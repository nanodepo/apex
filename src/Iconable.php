<?php

namespace NanoDepo\Heroicons;

use Illuminate\View\Component;

abstract class Iconable extends Component
{
    public string $type;

    public function __construct(string $type = 'outline')
    {
        $this->type = str($type)->trim()->lower()->value();
    }

    abstract public function outline(): string;

    abstract public function solid(): string;

    abstract public function mini(): string;

    abstract public function micro(): string;

    public function render(): string
    {
        $type = match ($this->type) {
            'outline', 'solid', 'mini', 'micro' => $this->type,
            default => 'outline'
        };

        return $this->{$type}();
    }
}
