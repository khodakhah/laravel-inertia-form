<?php

namespace Khodakhah\InertiaForm\Form;

class Input implements InputInterface
{
    protected string $type = '';

    protected string $label = '';

    protected mixed $default = null;

    protected bool $required = false;

    protected string $help = '';

    protected array $fixRules = [];

    public function __construct(
        protected string $name,
        protected array|string $rules = [],
    ) {
        $transKey = "validation.attributes.$name";
        $this->label = trans($transKey) !== "validation.attributes.$name" ? trans($transKey) : ucfirst($name);
    }

    public function toInertia(): array
    {
        return [
            'type' => $this->type,
            'key' => $this->name,
            'label' => $this->label,
            'default' => $this->default,
            'help' => $this->help,
            'required' => $this->required,
        ];
    }

    public function toValidation(): array
    {
        return [
            $this->name => $this->getRules(),
        ];
    }

    protected function getRules(): array
    {
        $rules = is_string($this->rules) ? explode('|', $this->rules) : $this->rules;
        if ($this->required && ! in_array('required', $rules)) {
            $rules[] = 'required';
        }

        return array_merge($this->fixRules, $rules);
    }

    public function setLabel(string $label): Input
    {
        $this->label = $label;

        return $this;
    }

    public function setDefault(mixed $default): Input
    {
        $this->default = $default;

        return $this;
    }

    public function setRequired(bool $required = true): Input
    {
        $this->required = $required;

        return $this;
    }

    public function setHelp(string $help): Input
    {
        $this->help = $help;

        return $this;
    }
}
