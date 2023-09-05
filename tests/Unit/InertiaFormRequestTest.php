<?php

use Khodakhah\InertiaForm\Tests\examples\ExampleFormRequest;

use function PHPUnit\Framework\assertSame;

it('returns the correct inertia array', function () {
    $request = new ExampleFormRequest();
    assertSame([
        [
            'type' => 'text',
            'key' => 'name',
            'label' => 'Name',
            'default' => '',
            'help' => '',
            'required' => true,
            'placeholder' => '',
        ],
        [
            'type' => 'text',
            'key' => 'email',
            'label' => 'Email',
            'default' => '',
            'help' => '',
            'required' => true,
            'placeholder' => '',
        ],
        [
            'type' => 'select',
            'key' => 'select',
            'label' => 'Select',
            'default' => null,
            'help' => '',
            'required' => true,
            'placeholder' => '',
            'options' => [
                [
                    'value' => 'option1',
                    'label' => 'Option 1',
                ],
                [
                    'value' => 'option2',
                    'label' => 'Option 2',
                ],
            ],
        ],
        [
            'type' => 'checkbox',
            'key' => 'checkbox',
            'label' => 'Checkbox',
            'default' => false,
            'help' => '',
            'required' => false,
        ],
        [
            'type' => 'radio',
            'key' => 'radio',
            'label' => 'Radio',
            'default' => null,
            'help' => '',
            'required' => true,
            'options' => [
                [
                    'value' => 'option1',
                    'label' => 'Option 1',
                ],
                [
                    'value' => 'option2',
                    'label' => 'Option 2',
                ],
            ],
        ],
        [
            'type' => 'textarea',
            'key' => 'textarea',
            'label' => 'Textarea',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'date',
            'key' => 'date',
            'label' => 'Date',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'time',
            'key' => 'time',
            'label' => 'Time',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'datetime-local',
            'key' => 'datetimeLocal',
            'label' => 'DatetimeLocal',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'datepicker',
            'key' => 'datepicker',
            'label' => 'Datepicker',
            'default' => null,
            'help' => '',
            'required' => false,
            'placeholder' => '',
            'format' => 'yyyy-mm-dd',
            'minDate' => null,
            'maxDate' => null,
            'disabledDates' => [],
            'allowedDates' => [],
            'disabledWeekDays' => [],
        ],
        [
            'type' => 'month',
            'key' => 'month',
            'label' => 'Month',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'number',
            'key' => 'number',
            'label' => 'Number',
            'default' => 0,
            'help' => '',
            'required' => false,
            'placeholder' => '',
            'max' => null,
            'min' => null,
            'digits' => 0,
        ],
        [
            'type' => 'password',
            'key' => 'password',
            'label' => 'Password',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'search',
            'key' => 'search',
            'label' => 'Search',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'tel',
            'key' => 'tel',
            'label' => 'Tel',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'url',
            'key' => 'url',
            'label' => 'Url',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
        [
            'type' => 'week',
            'key' => 'week',
            'label' => 'Week',
            'default' => null,
            'help' => '',
            'required' => false,
        ],
    ], $request->toInertia());
});
