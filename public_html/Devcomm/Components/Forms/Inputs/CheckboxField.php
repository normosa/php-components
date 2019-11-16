<?php
namespace Devcomm\Components\Forms\Inputs;

use Devcomm\Components\Forms\FormMethods;

class CheckboxField extends Input {
    
    public function doSubmit(string $method):bool{
        $value = filter_input(($method == FormMethods::$POST)? INPUT_POST: INPUT_GET, $this->name, FILTER_SANITIZE_STRING);
        if(isset($value)){
            $this->value = true;
        }
        else {
            $this->value = false;
        }
        return true;
    }
}