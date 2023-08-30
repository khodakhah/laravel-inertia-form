<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

class Number extends Text
{
    protected string $type = 'number';

    protected ?int $max = null;

    protected ?int $min = null;

    protected int $digits = 0;

    protected array $fixRules = [
        'numeric',
    ];

    public function toInertia(): array
    {
        return array_merge(parent::toInertia(), [
            'default' => (int) $this->default,
            'max' => $this->max,
            'min' => $this->min,
            'digits' => $this->digits,
        ]);
    }

    protected function getRules(): array
    {
        if ($this->digits) {
            $this->fixRules[] = "digits:$this->digits";
        }
        if ($this->max) {
            $this->fixRules[] = "max:$this->max";
        }
        if ($this->min) {
            $this->fixRules[] = "min:$this->min";
        }

        return parent::getRules();
    }

    public function setMax(?int $max): Number
    {
        $this->max = $max;

        return $this;
    }

    public function setMin(?int $min): Number
    {
        $this->min = $min;

        return $this;
    }

    public function setDigits(int $digits): Number
    {
        $this->digits = $digits;

        return $this;
    }
}
