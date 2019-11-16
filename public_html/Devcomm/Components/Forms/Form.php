<?php
namespace Devcomm\Components\Forms;

use Devcomm\Components\Exceptions\InputNotFoundException;
use Devcomm\Components\Forms\Inputs\Input;

class Form {
    
    private $inputs;
    
    public function __construct() {
        $this->inputs = array();
    }
    
    public function addInput(Input $input){
        $this->inputs[$input->getName()] = $input;
        return $this;
    }
    
    public function getInput(string $name){
        if(isset($this->inputs[$name])){
            return $this->inputs[$name];
        }
        throw new InputNotFoundException();
    }
    
    public function doPost(){
        return $this->doSubmit(FormMethods::$POST);
    }
    
    public function getValue(string $name){
        if(isset($this->inputs[$name])){
            return $this->inputs[$name]->getValue();
        }
        throw new InputNotFoundException();
    }
    
    public function getValues(){
        $values = array();
        foreach($this->inputs as $input){
            $values[$input->getName()] = $input->getValue();
        }
        return $values;
    }
    
    private function doSubmit(string $method){
        $isSubmitted = true;
        foreach($this->inputs as $input){
            if(!$input->doSubmit($method)){
                $isSubmitted = false;
            }
        }
        return $isSubmitted;
    }
    
    public function doGet(){
        return $this->doSubmit(FormMethods::$GET);
    }
}
