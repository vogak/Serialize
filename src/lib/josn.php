<?php


namespace App\lib;


class josn implements form
{
    public function Serialize($array)
    {
        return \json_encode($array);
    }

}