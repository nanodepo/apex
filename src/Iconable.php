<?php

namespace NanoDepo\Heroicons;

use Closure;
use Illuminate\View\Component;

abstract class Iconable extends Component
{
    private string $type;
    private array $attr = [];

    public function __construct(string $type = 'outline')
    {
        $this->init(match ($type) {
            'outline', 'solid', 'mini', 'micro' => $type,
            default => 'outline'
        });
    }

    private function init($type): void
    {
        $this->type = $type;

        if ($type == 'outline') {
            $this->attr = [
                'viewBox' => '0 0 24 24',
                'fill' => 'none',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'class' => 'w-6 h-6',
            ];
        } else {
            $this->attr['fill'] = 'currentColor';
        }

        if ($type == 'solid') {
            $this->attr['viewBox'] = '0 0 24 24';
            $this->attr['class'] = 'w-6 h-6';
        } elseif ($type == 'mini') {
            $this->attr['viewBox'] = '0 0 20 20';
            $this->attr['class'] = 'w-5 h-5';
        } elseif ($type == 'micro') {
            $this->attr['viewBox'] = '0 0 16 16';
            $this->attr['class'] = 'w-4 h-4';
        }
    }


    abstract public function outline(): string;

    abstract public function solid(): string;

    abstract public function mini(): string;

    abstract public function micro(): string;

    public function render(): Closure
    {
        return function (array $data) {
            return <<<blade
                <svg xmlns="http://www.w3.org/2000/svg" {$data['attributes']->merge([
                    ...$this->attr,
                    'class' => $data['attributes']->has('class')
                        ? $data['attributes']->get('class')
                        : $this->attr['class'],
                ])}>
                    {$this->{$this->type}()}
                </svg>
            blade;
        };
    }
}
