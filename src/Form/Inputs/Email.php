<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

class Email extends Text
{
    protected string $type = 'email';

    protected array $fixRules = [
        'email',
    ];
}