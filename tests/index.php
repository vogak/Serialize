#!/usr/bin/php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Vendor\Person;
use Vendor\lib\json;
use Vendor\lib\yaml;

# Value
$form_sel = new json; // json , yaml , xml , php

# Assignment
$array = new Person($form_sel);
$array->setName('john');
$array->setEmail('bornJ@mail.com');

# Conclusion
print_r($array);
print_r( ($form_sel->getSerialize($array)) . PHP_EOL);

