<?php


namespace Vendor\lib;

use Vendor\lib\SerializeForm;

final class xml implements SerializeForm
{
    public function getSerialize($data)
    {
        //TODO:: cache fails
        return \xml_parse($data);
    }

}