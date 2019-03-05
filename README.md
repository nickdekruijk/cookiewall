# Cookiewall
According to EU laws visitors should opt-in for all tracking cookies/pixels/code. This package adds a simple 'Accept Cookies' popup to your Laravel Application.

## Installation
To install package use
`composer require nickdekruijk/cookiewall`

Publish the config file in case you want to customize it
```bash
php artisan vendor:publish --provider=NickDeKruijk\\Cookiewall\\CookiewallServiceProvider
```

For Laravel version lower then 5.5 add the Service Provider to the `'providers'` array in `config/app.php`
```php
NickDeKruijk\Cookiewall\CookiewallServiceProvider::class,
```

## Frontend
Add this to every view/page where you want to show the popup
```php
@include('cookiewall::show')
```
And wrap any code that places tracking cookies/pixels/code with the `cookiewallAccept()` helper, for example like this:
```php
@if (cookiewallAccept())
// Your tracking code here
@endif
```
And style the popup as you like, for example:
```css
.cookiewall-container {position:fixed;bottom:0;left:0;right:0;background-color:red;text-align:center;padding:50px;z-index:9999;color:#fff}
.cookiewall-button {display:inline-block;padding:10px 20px;border:2px solid #fff;border-radius:5px;text-decoration:none;color:inherit;margin:10px}
.cookiewall-button:hover {background-color:rgba(255,255,255,0.5)}
.cookiewall-button-accept {background-color:#fff;color:red}
.cookiewall-button-accept:hover {background-color:rgba(255,255,255,0.8)}
```
