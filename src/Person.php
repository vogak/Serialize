<?php

namespace Vendor;
use Vendor\lib\SerializeForm;
use Vendor\lib\json;
use Vendor\lib\yaml;
use Vendor\lib\xml;



class Person
{
    public $name;
    public $email;
    public $form_sel;

    public function __construct($form_sel)
    {
        $this->form_sel = $form_sel;
    }

    public function setName($name)
    {
        //TODO:: check for fails
        $this->name = $name;
    }

    public function setEmail($email)
    {
        //TODO:: check for fails
        $this->email = $email;
    }

    public function getSerialize ($data)
    {
        return $data->getSerialize($this);
    }
}


