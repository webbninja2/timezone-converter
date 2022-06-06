<?php

require_once __DIR__ . '/vendor/autoload.php';

use NNV\TimeZoneDB;

$tzDB   =   new TimeZoneDB("YYSHXMPTNCLI");

$convertTimeZoneParams = [
    "from"  =>  "America/Los_Angeles",
    "to"    =>  "Australia/Sydney",
    "time"  =>  "06/01/2022 06:00PM",
    // Other params
];
echo "<pre>";
print_r($tzDB->convertTimeZone($convertTimeZoneParams));
