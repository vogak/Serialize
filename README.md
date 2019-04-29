Project Serialize
==================

This is a project for serialize data in json, yaml and xml format.

Usage
------

You can set your data in $name and $email. Then you must chose your format of serialize in $formate_sel 
like: 'json', 'yaml', 'xml'.
And you get serialized data that you wanted.

Usage example
-------------

write of every one format

```php
$form_sel = 'json'; // json , yaml , xml , php
```
and name with email 
```php
$array->setName('john');
$array->setEmail('bornJ@mail.com');
```
Then you get this one
```bash
App\Person Object
(
    [name] => john
    [email] => bornJ@mail.com
    [form_sel:App\Person:private] => json
)
{"name":"john","email":"bornJ@mail.com"}
```
