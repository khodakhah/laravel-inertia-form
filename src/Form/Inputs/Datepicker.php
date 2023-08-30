<?php

namespace Khodakhah\InertiaForm\Form\Inputs;

class Datepicker extends Text
{
    protected string $type = 'datepicker';

    protected string $format = 'yyyy-mm-dd';

    protected ?string $minDate = null;

    protected ?string $maxDate = null;

    protected array $disabledDates = [];

    protected array $allowedDates = [];

    protected array $disabledWeekDays = [];

    protected array $fixRules = [
        'date',
    ];

    public function toInertia(): array
    {
        return array_merge(parent::toInertia(), [
            'default' => $this->default,
            'format' => $this->format,
            'minDate' => $this->minDate,
            'maxDate' => $this->maxDate,
            'disabledDates' => $this->disabledDates,
            'allowedDates' => $this->allowedDates,
            'disabledWeekDays' => $this->disabledWeekDays,
        ]);
    }

    public function setFormat(string $format): Datepicker
    {
        $this->format = $format;

        return $this;
    }

    public function setMinDate(?string $minDate): Datepicker
    {
        $this->minDate = $minDate;

        return $this;
    }

    public function setMaxDate(?string $maxDate): Datepicker
    {
        $this->maxDate = $maxDate;

        return $this;
    }

    public function setDisabledDates(array $disabledDates): Datepicker
    {
        $this->disabledDates = $disabledDates;

        return $this;
    }

    public function setAllowedDates(array $allowedDates): Datepicker
    {
        $this->allowedDates = $allowedDates;

        return $this;
    }

    public function setDisabledWeekDays(array $disabledWeekDays): Datepicker
    {
        $this->disabledWeekDays = $disabledWeekDays;

        return $this;
    }
}
