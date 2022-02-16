# BULKSMS.COM API PACKAGE WRAPPER

[![Latest Version on Packagist](https://img.shields.io/packagist/v/epmnzava/bulksms.svg?style=flat-square)](https://packagist.org/packages/epmnzava/bulksms)
[![Quality Score](https://img.shields.io/scrutinizer/g/dbrax/bulksms.svg?style=flat-square)](https://scrutinizer-ci.com/g/epmnzava/bulksms)
[![Total Downloads](https://img.shields.io/packagist/dt/epmnzava/bulksms.svg?style=flat-square)](https://packagist.org/packages/epmnzava/bulksms)

A package api wrapper for bulksms.com mainly developed to be used and resued by php and laravel developers

# Installation

- Laravel Version: ˆ7.2 ==> ^9.0
- PHP Version: ^7.1|^7.2|^7.3|^7.4|^8.0


You can install the package via composer:

```bash
composer require epmnzava/bulksms
```



# Update your config (for Laravel 5.4 and below)
Add the service provider to the providers array in config/app.php:
```
Epmnzava\Bulksms\BulksmsServiceProvider::class,
```
Add the facade to the aliases array in config/app.php:
```
'BulkSms'=>Epmnzava\Bulksms\BulksmsFacade::class,
```

# Publish the package configuration (for Laravel 5.4 and below)
Publish the configuration file and migrations by running the provided console command:
```
php artisan vendor:publish --provider="Epmnzava\Bulksms\BulksmsServiceProvider"
```
### Environmental Variables

BULKSMS_SENDERID `Provide your desired sender id `


BULKSMS_SECRET `Provide your bulksms token secret`

BULKSMS_ID  `Provide your bulksms token id`



# Usage

## Send a simple text 
``` php
<?php
use Epmnzava\Bulksms\Bulksms;

class SendSmsController{

public function send_sms(){

$sms=new Bulksms;

$response=$sms->sendMessage("+255679079774","Just testing please receive blessings");

//Your response will look like this

/**{
server_response: "[ { "id" : "953262833859043328", "type" : "SENT", "from" : "PamojaWeCan", "to" : "255679079774", "body" : "hellow man", "encoding" : "TEXT", "protocolId" : 0, "messageClass" : 0, "submission" : { "id" : "2-00000000001865236111", "date" : "2021-03-15T12:06:10Z" }, "status" : { "id" : "ACCEPTED.null", "type" : "ACCEPTED", "subtype" : null }, "relatedSentMessageId" : null, "userSuppliedId" : null, "numberOfParts" : null, "creditCost" : null } ]",
http_status: 201,
error: ""
} 

**/

}

}

```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email epmzava@gmail.com instead of using the issue tracker.

## Credits

- [Emmanuel Paul Mnzava](https://github.com/dbrax)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

