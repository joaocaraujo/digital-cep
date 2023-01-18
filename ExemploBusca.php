<?php

require_once "vendor/autoload.php";

use Joaocaraujo\DigitalCep\Search;

$buscar = new Search;

$result = $buscar->getAddressFromZipcode('33200614');

print_r($result);