[![Latest Stable Version](https://poser.pugx.org/hepplerdotnet/flash-toastr/v/stable)](https://packagist.org/packages/hepplerdotnet/flashtoastr)
[![License](https://poser.pugx.org/hepplerdotnet/flash-toastr/license)](https://packagist.org/packages/hepplerdotnet/flash-toastr)
[![Total Downloads](https://poser.pugx.org/hepplerdotnet/flash-toastr/downloads)](https://packagist.org/packages/hepplerdotnet/flash-toastr)

# Flash Toastr 
Flash Laravel Session Messages to Toastr.js

## Installation

First, pull in the package through Composer.

Run `composer require HepplerDotNet/flash-toastr`

### Only needed for Laravel < 5.6
And then include the service provider within `config/app.php`.

```php
'providers' => [
    HepplerDotNet\FlashToastr\FlashServiceProvider::class,
];
```

And, for convenience, add a facade alias to this same file at the bottom:

```php
'aliases' => [
    'Flash' => HepplerDotNet\FlashToastr\Flash::class,
];
```

## Usage

Within your controllers, before you perform a redirect...

```php
public function store()
{
    Flash::success('Welcome Aboard!','FlashToastr was successfully installed');

    return Redirect::home();
}
```

You may also do:

- `Flash::info('Title','Message')`
- `Flash::success('Title','Message')`
- `Flash::error('Title','Message')`
- `Flash::warning('Title','Message')`
- `Flash::notify('Title', 'Message','Level')`

This will set a few keys in the session:

- 'flash_notification.title' - The message title you're flashing
- 'flash_notification.message' - The message you're flashing
- 'flash_notification.level' - A string that represents the type of notification (good for applying CSS/Bootstrap class names)

Alternatively you may reference the `flash()` helper function, instead of the facade. Here's an example:

```php
/**
 * Destroy the user's session (logout).
 *
 * @return Response
 */
public function destroy()
{
    Auth::logout();

    flash()->success('Logout successfull','You have been logged out.');

    return home();
}
```

You can even chain them to flash multiple messages at once.

```php
/**
 * Destroy the user's session (logout).
 *
 * @return Response
 */
public function destroy()
{
    Auth::logout();

    flash()->success('Logout successfull','You have been logged out.')
    ->warning('Close Browser','You should close this Browser window now');

    return home();
}
```

With this messages flashed to the session, you may now display it in your view(s). 

```html
@include('flash-toastr::message')
```

This will include the message.blade.php in to your view.

If you need to modify the flash message partials, you can run:

```bash
php artisan vendor:publish --tag=flash-views
```

The message view will now be located in the `resources/views/vendor/flash-toastr/` directory.

### JavaScript Options for toastr.js
You can pass an array of options, which will be used to setup toastr.js

```php
{{ Config::set('flash-toastr.options', ['progressBar' => false,'positionClass' => 'toast-top-left']) }}
```

You can also publish the config file:

```bash
php artisan vendor:publish --tag=flash-config
```
To publish both, config and views you can run:

```bash
php artisan vendor:publish --tag=flash
```

See [Toastr Documentation](http://codeseven.github.io/toastr/demo.html) for all available options
