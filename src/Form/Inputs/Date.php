<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

class Date extends Text
{
    protected string $type = 'date';
    protected array $fixRules = [
        'date',
    ];
}