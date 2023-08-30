<?php

namespace Khodakhah\InertiaForm;

use Illuminate\Foundation\Http\FormRequest;

abstract class InertiaFormRequest extends FormRequest
{
    abstract protected function formInputs(InertiaForm $form): InertiaForm;

    /**
     * @return array<string, mixed>
     */
    public function toInertia(): array
    {
        $form = $this->formInputs(new InertiaForm);

        return $form->toInertia();
    }

    /**
     * @return array<string, array<string>>
     */
    public function rules(): array
    {
        $form = $this->formInputs(new InertiaForm);

        return $form->toValidation();
    }
}
