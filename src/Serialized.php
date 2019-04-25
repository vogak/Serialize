<?php

require_once __DIR__ . '/../src/SerializeLib.php';


class Person
{
    public $name;
    public $email;
    public $form_sel;

    public function __construct($form_sel)
    {
        $this->form_sel = $form_sel;
        return $form_sel;
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

    /**
     * @param $single
     * @return false|string
     */
    function funcSerialize ($single)
    {
        $form_sel = $this->form_sel;
        switch ( $form_sel )
        {
            case 'json':
                echo (json_encode($single) . PHP_EOL);
                break;

            case 'yaml':
                echo (yaml_parse($single) . PHP_EOL);
                break;

            case 'xml':
                echo (xml_parse($single) . PHP_EOL);
                break;

            case 'php':
                echo (serialize($single) . PHP_EOL);
                break;
        }
    }
}

?>
