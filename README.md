# Scriptholder
Place script anywhere accross apps

## Why?
I don't want to manually place adsense code, stat script manually in all of my apps. This package help me automate that.

## Installation
```bash
composer require buchin/scriptholder
```

## Usage
Example usage for laravel blade template, injecting statcounter script
Script placed in vendor/buchin/scriptholder/scripts/script_name.html
```php
@php
use Buchin\Scriptholder\Scriptholder;
@endphp

<html>
	<head>
		
	</head>
	<body>
		
		{{ Scriptholder::place('statcounter') }}
	</body>
</html>
```
