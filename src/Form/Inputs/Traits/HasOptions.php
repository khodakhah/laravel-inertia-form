<?php

namespace Khodakhah\InertiaForm\Form\Inputs\Traits;

use Khodakhah\InertiaForm\Exceptions\InvalidSetupException;

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

    /**
     * @param  array<array{value: int|string, label: string}>  $options
     *
     * @throws InvalidSetupException
     */
    public function setOptions(array $options): static
    {
        if (count(array_column($options, 'value')) !== count($options)) {
            throw new InvalidSetupException('Options must have column `value` in all items');
        }

        if (count(array_column($options, 'label')) !== count($options)) {
            throw new InvalidSetupException('Options must have column `label` in all items');
        }

        $this->options = $options;

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
