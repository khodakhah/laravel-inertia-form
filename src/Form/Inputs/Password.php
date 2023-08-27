<?php

namespace Khodakhah\InertiaForm\Form\Inputs;
use Khodakhah\InertiaForm\Form\Inputs\Text;

class Password extends Text
{
    protected string $type = 'password';
    protected array $fixRules = [
        'min:6',
        'max:18',
    ];
}