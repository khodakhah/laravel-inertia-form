<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

use Khodakhah\InertiaForm\Form\Input;

class Text extends Input
{
    protected string $type = 'text';
    protected string $placeholder = '';

    public function toInertia(): array
    {
        return array_merge(parent::toInertia(), [
            'placeholder' => $this->placeholder,
            'default' => (string) $this->default,
        ]);
    }

    public function setPlaceholder(string $placeholder): Input
    {
        $this->placeholder = $placeholder;
        return $this;
    }
}