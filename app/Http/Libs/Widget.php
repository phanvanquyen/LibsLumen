<?php
namespace App\Http\Libs;


abstract class Widget
{ 
    protected  $name = "";
    public function __construct(){
        $this->setName();
        $this->setParams();
    }
    private function setParams(){
        
    }
    private function setName(){
        $referenceClass = explode('\\', get_class($this));
        $this->name = end($referenceClass);
    }
    public function run(){
        return [
          'Name'=>$this->name,
          'Data'=>$this->render()  
        ];
    }
    abstract  function  render();
}
