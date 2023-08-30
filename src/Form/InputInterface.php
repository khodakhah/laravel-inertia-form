<?php

namespace Khodakhah\InertiaForm\Form;

interface InputInterface
{
    /**
     * @return array<string, mixed>
     */
    public function toInertia(): array;

    /**
     * @return array<string, array<string>>
     */
    public function toValidation(): array;
}
