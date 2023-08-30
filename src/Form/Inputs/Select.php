<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

class Select extends Text
{
    use Traits\HasOptions;

    protected string $type = 'select';
}
