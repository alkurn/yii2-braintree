Yii 2 Braintree Integration
===========================
braintree for yii 2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist alkurn/yii2-braintree "dev-master"
```

or add

```
"alkurn/yii2-braintree": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you should configure it in the application configuration like the following,

```php
'components' => [
    'braintree' => [
        'class' => 'alkurn\braintree\Braintree',
        'environment' => 'sandbox',
        'merchantId' => 'your_merchant_id',
        'publicKey' => 'your_public_key',
        'privateKey' => 'your_private_key',
    ]
]
```

** Creating a customer

```php 
Yii::$app->braintree->gateway->customer()->create(['firstName' => 'first_name',
             'lastName' => 'last_name',
             'paymentMethodNonce' => 'Nonce']);
              
```

 
