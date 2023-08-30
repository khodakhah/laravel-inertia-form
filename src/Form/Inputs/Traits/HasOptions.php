<?php

namespace Khodakhah\InertiaForm\Form\Inputs\Traits;

trait HasOptions
{
    protected array $options = [];

    public function addOption($value, $label): static
    {
        $this->options[] = [
            'value' => $value,
            'label' => $label,
        ];

        return $this;
    }

    protected function getRules(): array
    {
        return array_merge(parent::getRules(), [
            'in:'.implode(',', array_map(function ($option) {
                return $option['value'];
            }, $this->options)),
        ]);
    }

    public function toInertia(): array
    {
        return array_merge(parent::toInertia(), [
            'default' => $this->default,
            'options' => $this->options,
        ]);
    }
}
