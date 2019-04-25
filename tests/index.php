#!/usr/bin/php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Person;

# Value
$form_sel = 'json'; // json , yaml , xml , php

# Assignment
$array = new Person("$form_sel");
$array->setName('john');
$array->setEmail('bornJ@mail.com');

# Conclusion
print_r($array);
$array->funcSerialize($array);
