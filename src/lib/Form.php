<?php


namespace App\lib;
use App\lib\josn;
use App\lib\yaml;
use App\lib\xml;


interface Form
{
    public function Serialize($array);
}