<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

class Password extends Text
{
    protected string $type = 'password';

    protected array $fixRules = [
        'min:6',
        'max:18',
    ];
}
