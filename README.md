# [laravel-inertia-form](https://github.com/khodakhah/laravel-inertia-form)
A simple package to handle forms in Laravel with InertiaJS.

This is the backend pair of [InertiaForm](https://github.com/khodakhah/inertia-form) package.

## Requirements
- PHP ^8.1 || ^8.2

## Installation
```bash
composer require khodakhah/larave-inertia-form
```

## Usage
### 1. Create your form request class by extending `InertiaFormRequest`
1. Create a RequestForm class and extend it from InertiaFormRequest
2. Create a static method named formInputs and return an instance of InertiaForm
`UserFormRequest.php`
```php
use Khodakhah\InertiaForm\InertiaFormRequest;

class UserFormRequest extends InertiaFormRequest
{
    public static function formInputs(\Khodakhah\InertiaForm\InertiaForm $form) : \Khodakhah\InertiaForm\InertiaForm{
        $form->text('name', 'required');
        $form->text('email', 'required|email');
        $form->text('password', 'required|min:8');
        return $form;
    }
}
```
3. Use `toInertia()` method to convert the form to an array and send it to the frontend. And use `validated()` method to convert the form errors to an array and send it to the frontend.
```php
class UserController extends Controller
{
    use Khodakhah\InertiaForm\InertiaFormRequest;

    public function create()
    {
        return Inertia::render('User/Create', [
            'form' => UserFormRequest::toInertia()
        ]);
    }

    public function store(UserFormRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('users.index');
    }
}
```
### 2. Create your form object simply by using `InertiaForm`
You can simply create a form by using `InertiaForm` class, and assign it into a variable, or return it from a method.
```php
class UserController extends Controller
{
    use Khodakhah\InertiaForm\InertiaForm;
    use Illuminate\Http\Request;

    private function userForm(): InertiaForm
    {
        $form = new InertiaForm();
        $form->text('name', 'required');
        $form->text('email', 'required|email');
        $form->text('password', 'required|min:8');
        return $form;
    }

    public function create()
    {
        return Inertia::render('User/Create', [
            'form' => $this->userForm()->toInertia()
        ]);
    }

    public function store(Request $request)
    {
        User::create(
            $request->validate(
                $this->userForm()->toValidation()
            )
        );
        return redirect()->route('users.index');
    }
}
```

## Issues
If you have any issues, please create an issue in the [issues section](https://github.com/khodakhah/laravel-inertia-form/issues).

## Contributing
If you have any ideas or suggestions, please create a pull request in the [pull requests section](https://github.com/khodakhah/laravel-inertia-form/pulls).
I'll be happy to review and merge them.
### Local development
1. Clone the repository
2. Run `composer install`
3. Run `composer test` to run the tests
4. Run `composer pint` to run the linter (syntax check)
5. Run `composer fix` to fix the linter errors
6. Run `composer analyse` to run phpstan analyse

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.



