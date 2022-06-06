# TimeZoneDB API

## System requirements
* **PHP >= 5.5**


**Composer:**

```sh
composer install
```

## Documentation

- Doc <https://github.com/namnv609/timezonedb-php-api>


## Implemention

```PHP
require_once __DIR__ . '/vendor/autoload.php';

use NNV\TimeZoneDB;

$tzDB = new TimeZoneDB(<TimeZoneDB API Key>); // get API KEY From here https://timezonedb.com/

$convertTimeZoneParams = [
    "from"  => "America/Los_Angeles",
    "to"    => "Australia/Sydney",
    "time"  => "06/01/2016 03:00PM",
    // Other params
];
$tzDB->convertTimeZone($convertTimeZoneParams);
```