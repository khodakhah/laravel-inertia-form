<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

class Url extends Text
{
    protected string $type = 'url';

    protected array $fixRules = [
        'url',
    ];
}
