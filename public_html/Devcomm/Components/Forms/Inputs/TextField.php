<?php
namespace Devcomm\Components\Forms\Inputs;

use Devcomm\Components\Forms\FormMethods;

class TextField extends Input {
    
    public function doSubmit(string $method):bool{
        $value = filter_input(($method == FormMethods::$POST)? INPUT_POST: INPUT_GET, $this->name, FILTER_SANITIZE_STRING);
        if(isset($value)){
            $this->value = $value;
            return true;
        }
        return false;
    }
}