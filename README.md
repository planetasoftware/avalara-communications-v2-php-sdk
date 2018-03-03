avalara-communications-v2-php-sdk
=================================

This SDK is a way to simplify the usage of Avalara Communications REST API V2 for your web application.

About Avalara
-------------

Avalara provides a telecommunications taxes solution that simplifies calculations and returns.
Although we are not affiliated to Avalara, we use their product; this SDK is created in an effort to facilitate our communication with their API and share it with the community.
For more info go to [Avalara Communications API reference page](https://communicationsua.avalara.net/API/AFCSaaSProTax)

Instalation
-----------

The avalara-communications-v2-php-sdk is available at GitHub. 
It requires [PHP Guzzle](http://docs.guzzlephp.org/en/latest/) and PHP 5.6 or later.

You will need to use [Composer](https://getcomposer.org/) to install
dependencies. Assuming you already have Composer:

### Via Composer command

```bash
$ composer require planetasoftware/avalara-communications-v2-php-sdk
```

### Via Composer update/install

To use the AvaTax PHP SDK from Composer:
* Add a `composer.json` file to your project and link to AvaTax:

```json
{
    "require": {
        "planetasoftware/avalara-communications-v2-php-sdk": "*"
    }
}
```

Run `composer install` or `composer update` to download the latest version and dependencies.

### Via Git (clone)

First, clone the repository:

```bash
# git clone https://github.com/planetasoftware/avalara-communications-v2-php-sdk.git # optionally, specify the directory in which to clone
$ cd path/to/install
```

Then, you can run the composer command to install:

```bash
$ composer install
```

Usage
-----

### Architecture

The SDK has a very simple architecture:

      HTTP Client       to communicate with Avalara servers
      Models            Data Objects, to hold and transport data
      Request Builders  Object to easily create a request

### Using the SDK

Below you can find an example for the Geo-code endpoint ( \geo\Geocode )

```
<?php

// Include Composer autoload
require_once ('vendor/autoload.php');

// Create a client
$client = new \PlanetaSoftware\Avalara\Communications\Client();
$client->setBasicAuthentication('{your_username}', '{your_password}');

// Prepare the request
$req = new \PlanetaSoftware\Avalara\Communications\Model\Geo\GeocodeRequest();
$req->ref = 'test-ref';
$req->addr = "8400 NW 36th St";
$req->city = "Miami";
$req->st = "FL";
$req->zip = "33166";
$req->cass = true;

// Create and prepare the request using the "request builder"
$builder = new \PlanetaSoftware\Avalara\Communications\RequestBuilder\Geo\Geocode($client);
$builder->addGeocodeRequest($req);

try{
    // Create the request and get back Avlara response
    $response = $builder->create();
}catch(\Exception $ex){
    echo $ex->getMessage();
}

// Print response
var_dump($response);

```


