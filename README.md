# Add categories to you Laravel models

The code uses polymorphic relations, which allows for simple but robust
implementation of categories on any model you might have in your application.

## Installation

```
$ composer require oleaass/laravel-categories
```

## Usage

### Prepare your model

```php
use OleAass\Categories\HasCategories;

class Product extends Model
{
	use Categorizable;
}
```

## Support Me

I spend my free time making packages. So if you want to support me and my work,
I would really appreciate if you bough me a coffee.

<a href="https://www.buymeacoffee.com/oleaass" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>
