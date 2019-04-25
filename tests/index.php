#!/usr/bin/php
<?php

require_once __DIR__ . '/../src/Serialized.php';

# Value
$form_sel = 'json'; // json , yaml , xml , php

# Assignment
$array = new Person("$form_sel");
$array->setName('john');
$array->setEmail('bornJ@mail.com');

# Conclusion
print_r($array);
$array->funcSerialize($array);

?>