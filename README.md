# Farapayamak PHP

### Introduction
Here we've provided a complete 3rd-party library (SDK) for PHP developers that covers both **SOAP** and **REST** webservices. Before using, make sure you have provided a valid account in Farapayamak corporation.

### معرفی
مجموعۀ کامل از متدهای اتصال به وب سرویس **REST** و **SOAP** برای توسعه دهندگان PHP فراهم شده. قبل از استفاده از این کتابخانه، نیاز به خرید پنل فراپیامک دارید
### Installation
You can run the following composer command to have it:

```
composer require farapayamak/php:1.0.0
```

### Usage
This is the simple usage for both REST and SOAP APIs:
```php

$restClient = new Rest_Client('username', 'password');
print_r($restClient->SendSMS('09123456789', '5000xxx', 'test sms', false));

$soapClient = new Soap_Client('username', 'password');
print_r($soapClient->SendSimpleSMS2('09123456789', '5000xxx', 'test sms', false));

```
Further demonstrations can be found inside the _rest-sample.php_ and _soap-sample.php_ files.


