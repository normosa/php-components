<?php
namespace Devcomm\Components\Forms\Inputs;

abstract class Input {
    
    protected $name;
    
    protected $value;
    
    public function __construct(string $name, $value = null) {
        $this->name = $name;
        $this->value = $value;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function setName(string $name){
        $this->name = $name;
    }
    
    public function getValue(){
        return $this->value;
    }
    
    public function setValue($value){
        $this->value = $value;
    }
    
    public abstract function doSubmit(string $method): bool;
}
