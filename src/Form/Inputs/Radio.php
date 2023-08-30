<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

use Khodakhah\InertiaForm\Form\Input;

class Radio extends Input
{
    use Traits\HasOptions;

    protected string $type = 'radio';
}
