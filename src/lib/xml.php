<?php


namespace App\lib;


class xml implements form
{
    public function Serialize($array)
    {
        return \xml_parse($array);
    }

}