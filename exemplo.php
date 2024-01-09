<?php
require_once "vendor/autoload.php";

use \Vinicinho\DigitalCep\Search;

$cepSearch = new Search ();

$address = $cepSearch->getAddressFromZipcode("54727220");
print_r($address);
