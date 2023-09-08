<?php

use Khodakhah\InertiaForm\Exceptions\InvalidSetupException;
use Khodakhah\InertiaForm\InertiaForm;

use function PHPUnit\Framework\assertSame;

it('creates inputs', function (array $input) {
    $form = new InertiaForm();
    if ($input['type'] === 'checkbox') {
        $form->checkbox($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'date') {
        $form->date($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'datepicker') {
        $form->datepicker($input['key'])
            ->setDefault($input['default'])
            ->setFormat($input['format'])
            ->setMinDate($input['minDate'])
            ->setMaxDate($input['maxDate'])
            ->setDisabledDates($input['disabledDates'])
            ->setAllowedDates($input['allowedDates'])
            ->setDisabledWeekDays($input['disabledWeekDays'])
            ->setPlaceholder($input['placeholder'])
            ->setRequired();
    } elseif ($input['type'] === 'datetime-local') {
        $form->datetimeLocal($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'email') {
        $form->email($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'month') {
        $form->month($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'number') {
        $form->number($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'password') {
        $form->password($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'radio') {
        $_input = $form->radio($input['key'])
            ->setDefault($input['default']);
        foreach ($input['options'] as $option) {
            $_input->addOption($option['value'], $option['label']);
        }
    } elseif ($input['type'] === 'search') {
        $form->search($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'select') {
        $_input = $form->select($input['key'])
            ->setDefault($input['default']);
        foreach ($input['options'] as $option) {
            $_input->addOption($option['value'], $option['label']);
        }
    } elseif ($input['type'] === 'tel') {
        $form->tel($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'text') {
        $form->text($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'textarea') {
        $form->textarea($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'time') {
        $form->time($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'url') {
        $form->url($input['key'])
            ->setDefault($input['default']);
    } elseif ($input['type'] === 'week') {
        $form->week($input['key'])
            ->setDefault($input['default']);
    }
    assertSame([$input['key'] => $input], $form->toInertia());
})->with([
    'checkbox' => [
        [
            'type' => 'checkbox',
            'key' => 'checkbox',
            'label' => 'Checkbox',
            'default' => true,
            'help' => '',
            'required' => false,
        ],
    ],
    'date' => [
        [
            'type' => 'date',
            'key' => 'date',
            'label' => 'Date',
            'default' => '2021-01-01',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
    ],
    'datepicker' => [
        [
            'type' => 'datepicker',
            'key' => 'datepicker',
            'label' => 'Datepicker',
            'default' => '2021-01-01',
            'help' => '',
            'required' => true,
            'placeholder' => '',
            'format' => 'dd.mm.yyyy',
            'minDate' => '2021-01-01',
            'maxDate' => '2023-01-01',
            'disabledDates' => [
                '2021-01-02',
            ],
            'allowedDates' => [],
            'disabledWeekDays' => [
                1,
            ],
        ],
    ],
    'datetime-local' => [
        [
            'type' => 'datetime-local',
            'key' => 'datetimelocal',
            'label' => 'Datetimelocal',
            'default' => '2021-01-01T00:00',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
    ],
    'email' => [
        [
            'type' => 'email',
            'key' => 'email',
            'label' => 'Email',
            'default' => 'john.doe@example.com',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
    ],
    'month' => [
        [
            'type' => 'month',
            'key' => 'month',
            'label' => 'Month',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
    ],
    'number' => [
        [
            'type' => 'number',
            'key' => 'number',
            'label' => 'Number',
            'default' => 1,
            'help' => '',
            'required' => false,
            'placeholder' => '',
            'max' => null,
            'min' => null,
            'digits' => 0,
        ],
    ],
    'password' => [
        [
            'type' => 'password',
            'key' => 'password',
            'label' => 'Password',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
    ],
    'radio' => [
        [
            'type' => 'radio',
            'key' => 'radio',
            'label' => 'Radio',
            'default' => 'radio',
            'help' => '',
            'required' => false,
            'options' => [
                [
                    'value' => 1,
                    'label' => 'option 1',
                ],
                [
                    'value' => 2,
                    'label' => 'option 2',
                ],
            ],
        ],
    ],
    'search' => [
        [
            'type' => 'search',
            'key' => 'search',
            'label' => 'Search',
            'default' => '',
            'help' => '',
            'required' => false,
            'placeholder' => '',
        ],
    ],
    'select' => [
        [
            'type' => 'select',
            'key' => 'select',
            'label' => 'Select',
            'default' => 1,
            'help' => '',
            'required' => false,
            'placeholder' => '',
            'options' => [
                [
                    'value' => 1,
                    'label' => 'option 1',
                ],
                [
                    'value' => 2,
                    'label' => 'option 2',
                ],
            ],
        ],
    ],
]);

it('returns correct validations', function () {
    $form = new InertiaForm();
    $form->text('name')
        ->setLabel('Name')
        ->setDefault('John Doe')
        ->setRequired()
        ->setPlaceholder('Enter your name');
    $form->email('email')
        ->setLabel('Email')
        ->setRequired()
        ->setDefault('Enter your email address');
    $form->number('phone')
        ->setLabel('Phone')
        ->setPlaceholder('Enter your phone number');
    $form->datepicker('date')
        ->setRequired()
        ->setLabel('Date')
        ->setPlaceholder('Enter your date of birth');

    assertSame([
        'name' => [
            'required',
        ],
        'email' => [
            'email',
            'required',
        ],
        'phone' => [
            'numeric',
        ],
        'date' => [
            'date',
            'required',
        ],
    ], $form->toValidation());
});

it('returns correct inputs with using setOptions', function (array $input) {
    $form = new InertiaForm();
    if ($input['type'] == 'select') {
        $form->select($input['key'])
            ->setDefault($input['default'])
            ->setOptions($input['options']);
    } elseif ($input['type'] == 'radio') {
        $form->radio($input['key'])
            ->setDefault($input['default'])
            ->setOptions($input['options']);
    }

    assertSame([$input['key'] => $input], $form->toInertia());
})->with([
    'radio' => [
        [
            'type' => 'radio',
            'key' => 'radio',
            'label' => 'Radio',
            'default' => 'radio',
            'help' => '',
            'required' => false,
            'options' => [
                [
                    'value' => 1,
                    'label' => 'option 1',
                ],
                [
                    'value' => 2,
                    'label' => 'option 2',
                ],
            ],
        ],
    ],
    'select' => [
        [
            'type' => 'select',
            'key' => 'select',
            'label' => 'Select',
            'default' => 1,
            'help' => '',
            'required' => false,
            'placeholder' => '',
            'options' => [
                [
                    'value' => 1,
                    'label' => 'option 1',
                ],
                [
                    'value' => 2,
                    'label' => 'option 2',
                ],
            ],
        ],
    ],
]);

it('fails with passing invalid array to setOptions', function (array $options, string $exceptionMessage) {
    $this->expectException(InvalidSetupException::class);
    $this->expectExceptionMessage($exceptionMessage);

    $form = new InertiaForm();
    $form->select('select')
        ->setDefault(1)
        ->setOptions($options);
})->with([
    'failed label in one item' => [
        [
            [
                'value' => 1,
                'label' => 'option 1',
            ],
            [
                'value' => 2,
            ],
        ],
        'Options must have column `label` in all items',
    ],
    'failed value in one item' => [
        [
            [
                'value' => 1,
                'label' => 'option 1',
            ],
            [
                'label' => 'option 2',
            ],
        ],
        'Options must have column `value` in all items',
    ],
    'failed value and label in one item' => [
        [
            [
                'value' => 1,
                'label' => 'option 1',
            ],
            [
                'something else' => 'option 2',
            ],
        ],
        'Options must have column `value` in all items',
    ],
    'failed the columns value and label in all items' => [
        [
            [
                'something else 1' => 'option 1',
            ],
            [
                'something else 2' => 'option 2',
            ],
        ],
        'Options must have column `value` in all items',
    ],
    'array of integers' => [
        [
            1,
            2,
        ],
        'Options must have column `value` in all items',
    ],
]);
