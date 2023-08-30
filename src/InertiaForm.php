<?php

namespace Khodakhah\InertiaForm;

use Khodakhah\InertiaForm\Form\InputInterface;
use Khodakhah\InertiaForm\Form\Inputs\Checkbox;
use Khodakhah\InertiaForm\Form\Inputs\Date;
use Khodakhah\InertiaForm\Form\Inputs\Datepicker;
use Khodakhah\InertiaForm\Form\Inputs\DatetimeLocal;
use Khodakhah\InertiaForm\Form\Inputs\Email;
use Khodakhah\InertiaForm\Form\Inputs\Month;
use Khodakhah\InertiaForm\Form\Inputs\Number;
use Khodakhah\InertiaForm\Form\Inputs\Password;
use Khodakhah\InertiaForm\Form\Inputs\Radio;
use Khodakhah\InertiaForm\Form\Inputs\Search;
use Khodakhah\InertiaForm\Form\Inputs\Select;
use Khodakhah\InertiaForm\Form\Inputs\Tel;
use Khodakhah\InertiaForm\Form\Inputs\Text;
use Khodakhah\InertiaForm\Form\Inputs\Textarea;
use Khodakhah\InertiaForm\Form\Inputs\Time;
use Khodakhah\InertiaForm\Form\Inputs\Url;
use Khodakhah\InertiaForm\Form\Inputs\Week;

/**
 * @method Checkbox checkbox(string $name, string|array $rules = [])
 * @method Date date(string $name, string|array $rules = [])
 * @method Datepicker datepicker(string $name, string|array $rules = [])
 * @method DatetimeLocal datetimeLocal(string $name, string|array $rules = [])
 * @method Email email(string $name, string|array $rules = [])
 * @method Month month(string $name, string|array $rules = [])
 * @method Number number(string $name, string|array $rules = [])
 * @method Password password(string $name, string|array $rules = [])
 * @method Radio radio(string $name, string|array $rules = [])
 * @method Search search(string $name, string|array $rules = [])
 * @method Select select(string $name, string|array $rules = [])
 * @method Tel tel(string $name, string|array $rules = [])
 * @method Text text(string $name, string|array $rules = [])
 * @method Textarea textarea(string $name, string|array $rules = [])
 * @method Time time(string $name, string|array $rules = [])
 * @method Url url(string $name, string|array $rules = [])
 * @method Week week(string $name, string|array $rules = [])
 */
class InertiaForm
{
    /**
     * @var array<InputInterface>
     */
    private array $inputs = [];

    private function pushInput(InputInterface $input): InputInterface
    {
        $this->inputs[] = $input;

        return $input;
    }

    /**
     * @param  array<int|string|array<int|string>>  $arguments
     */
    public function __call(string $name, array $arguments): InputInterface
    {
        $className = __NAMESPACE__.'\\Form\\Inputs\\'.ucfirst($name);

        /** @var InputInterface $class */
        $class = new $className(...$arguments);

        return $this->pushInput($class);
    }

    /**
     * @return array<string, mixed>
     */
    public function toInertia(): array
    {
        return collect($this->inputs)
            ->map(fn (InputInterface $input) => $input->toInertia())
            ->toArray();
    }

    /**
     * @return array<string, array<string>>
     */
    public function toValidation(): array
    {
        return collect($this->inputs)
            ->mapWithKeys(fn (InputInterface $input) => $input->toValidation())
            ->toArray();
    }
}
