<?php

namespace Khodakhah\InertiaForm\Form\Inputs\Traits;

trait HasOptions
{
    /**
     * @var array <array{value: int|string, label: string}>
     */
    protected array $options = [];

    public function addOption(int|string $value, string $label): static
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
