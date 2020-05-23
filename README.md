# Bootstrap Toasts

This is a simple Bootstrap Toast Package for Laravel.

## Installation

You can optionally publish the blade templates of this package:
```bash
php artisan vendor:publish --provider="FelixL7\Toast\ToastServiceProvider"
```

## Setup

Just ```@include('bootstrap-toast::toaster')``` into your layout template and make sure to include jQuery and Bootstrap.
```html
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
```
This package also uses FontAwesome, but you're free to remove it or add your favourite icon package. Just publish the views of this package and replace the icons from the toast type templates.
```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
```
## Usage

It's really simple to create Toasts. Just

```php
use FelixL7\Toast\Models\Toast;
...
Toast::default('Toast Title', 'Your Message');
Toast::success('Toast Title', 'Your Message');
Toast::info('Toast Title', 'Your Message');
Toast::warning('Toast Title', 'Your Message');
Toast::error('Toast Title', 'Your Message');
```
wherever you want. Or if you return a redirect in your controller:
```php
return redirect()->with('toasts', [Toast::success('Toast Title', 'Your Message')]);
```

## Custom Toasts

If you want to create some custom toasts, you just have to publish the views of this package. There you have a toasts folder. Here you can create your own toast types. You can call them by
```php
Toast::custom('Toast Title', 'Your Message', 'your-type');
```
'your-type' must be identical with your custom toast template name.