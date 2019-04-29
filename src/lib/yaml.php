<?php


namespace App\lib;


class yaml implements form
{
    public function Serialize($array)
    {
        return \yaml_parse($array);
    }

}