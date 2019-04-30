<?php


namespace Vendor\lib;

use Vendor\lib\SerializeForm;


final class json implements SerializeForm
{
    public function getSerialize($data)
    {
        //TODO:: cache fails
        return \json_encode($data);
    }

}