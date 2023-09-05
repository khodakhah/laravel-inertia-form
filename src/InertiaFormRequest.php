<?php

namespace Khodakhah\InertiaForm;

use Illuminate\Foundation\Http\FormRequest;

abstract class InertiaFormRequest extends FormRequest
{
    protected static function formInputs(InertiaForm $form): InertiaForm
    {
        return $form;
    }

    /**
     * @return array<string, mixed>
     */
    public static function toInertia(): array
    {
        return self::formInputs(new InertiaForm)->toInertia();
    }

    /**
     * @return array<string, array<string>>
     */
    public function rules(): array
    {
        return self::formInputs(new InertiaForm)->toValidation();
    }
}
