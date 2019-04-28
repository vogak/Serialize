<?php

namespace App;

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

    public function getSerialize ($single)
    {
        $form_sel = $this->form_sel;
        switch ( $form_sel )
        {
            case 'json':
                return \print_r(json_encode($single) . \PHP_EOL);
                break;

            case 'yaml':
                return \print_r(yaml_parse($single) . \PHP_EOL);
                break;

            case 'xml':
                return \print_r(xml_parse($single) . \PHP_EOL);
                break;

            case 'php':
                return \print_r(serialize($single) . \PHP_EOL);
                break;
        }
    }
}

?>
