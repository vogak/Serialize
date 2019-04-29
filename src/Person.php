<?php

namespace App;
use App\lib\Form;
use App\lib\json;
use App\lib\yaml;
use App\lib\xml;



class Person
{
    public $name;
    public $email;
    private $form_sel;

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

    public function getSerialize ($array)
    {
        return $this->form_sel->getSerialize($array);
    }
}


