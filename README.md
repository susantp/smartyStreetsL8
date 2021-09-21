# smartystreets-laravel

Laravel (PHP) SDK for using SmartyStreets geocoding.

Only attempting Address Verify at this time; willing to accept pull requests that fill in the other functionalities
too (Zipcode Verify, Autocomplete, and Address Extraction).

Example Usage
--------------

```php
$response = SmartyStreets::addressQuickVerify(array(
    'street'=>'P.O. Box 1017',
    'city'=>'Havertown',
    'state'=>'PA',
));
```

Methods are available (addressAddToRequest && addressGetCandidates) to check multiple addresses with one POST, but
addressQuickVerify only handles one address at a time.

Further API details, including request and response fields, available at
SmartyStreets: https://smartystreets.com/docs/address


How to Install
---------------

```bash
composer require techbizz/smartystreetslaravel
```

publish the config file:

```bash
php artisan vendor:publish --provider="TechBizz\SmartyStreets\SmartyStreetsServiceProvider" --tag="smartyStreets"
```

Configure your API credentials in the config file.

    ```shell
	"authId" => env("SMARTY_STREET_AUTH_ID"),
    "token" => env("SMARTY_STREET_AUTH_TOKEN"),
    "devUrl" => env("SMARTY_STREET_DEV_URL"),
    "prodUrl" => env("SMARTY_STREET_PRODUCTION_URL")
    ```

Alternately, replace the values there with env() calls, and put the credentials in your .env file
