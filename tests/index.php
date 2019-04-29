#!/usr/bin/php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Person;

# Value
$form_sel = 'json'; // json , yaml , xml , php

# Assignment
$array = new Person($form_sel);
//$json = new Person(new json);
$array->setName('john');
$array->setEmail('bornJ@mail.com');

# Conclusion
print_r($array);
//$json =new Person(new json);
print_r( $array->getSerialize($array) . PHP_EOL);

