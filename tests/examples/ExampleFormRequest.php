<?php

namespace Khodakhah\InertiaForm\Tests\examples;

use Khodakhah\InertiaForm\InertiaForm;
use Khodakhah\InertiaForm\InertiaFormRequest;

class ExampleFormRequest extends InertiaFormRequest
{
    protected static function formInputs(InertiaForm $form): InertiaForm
    {
        $form->text('name')->setRequired();
        $form->text('email')->setRequired();
        $form->select('select')->addOption('option1', 'Option 1')->addOption('option2', 'Option 2')->setRequired();
        $form->checkbox('checkbox');
        $form->radio('radio')->addOption('option1', 'Option 1')->addOption('option2', 'Option 2')->setRequired();
        $form->textarea('textarea');
        $form->date('date');
        $form->time('time');
        $form->datetimeLocal('datetimeLocal');
        $form->datepicker('datepicker');
        $form->month('month');
        $form->number('number');
        $form->password('password');
        $form->search('search');
        $form->tel('tel');
        $form->url('url');
        $form->week('week');

        return $form;
    }
}
