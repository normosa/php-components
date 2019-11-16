<?php
namespace Devcomm\Components\Forms;

use Devcomm\Components\Forms\Inputs\CheckboxField;
use Devcomm\Components\Forms\Inputs\TextField;

class FormBuilder {
    
    private $form;
    
    public function __construct() {
        $this->form = new Form();
    }
    
    public function withTextField(string $name, $value = null): FormBuilder{
        $this->form->addInput(new TextField($name, $value));
        return $this;
    }
    
    public function withChecboxField(string $name, $value = null): FormBuilder{
        $this->form->addInput(new CheckboxField($name, $value));
        return $this;
    }
    
    public function build(): Form {
        return $this->form;
    }
}

