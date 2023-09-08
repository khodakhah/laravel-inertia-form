<?php

namespace Khodakhah\InertiaForm\Form;

interface InputInterface
{
    /**
     * @return array<string, mixed>
     */
    public function toInertia(): array;

    public function getKey(): string;

    /**
     * @return array<string, array<string>>
     */
    public function toValidation(): array;
}
