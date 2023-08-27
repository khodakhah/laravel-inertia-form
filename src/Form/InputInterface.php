<?php

namespace Khodakhah\InertiaForm\Form;

interface InputInterface
{
    public function toInertia(): array;
    public function toValidation(): array;
}