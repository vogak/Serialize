<?php


namespace Vendor\lib;

use Vendor\lib\SerializeForm;

final class yaml implements SerializeForm
{
    public function getSerialize($data)
    {
        //TODO:: cache fails
        return \yaml_parse($data);
    }

}