<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

use Khodakhah\InertiaForm\Form\Input;

class Checkbox extends Input
{
    protected string $type = 'checkbox';

    public function toInertia(): array
    {
        return array_merge(parent::toInertia(), [
            'default' => (bool) $this->default,
        ]);
    }
}