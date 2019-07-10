<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Http\Libs\App;

class BaseController extends Controller
{
    private $layout,$message=[],$widgets=[];
    const vGrid = "Views",vBool ='Bool',ERROR=0,SUCCESS=1;
    public function __construct(){
        $this->layout = (Object)[]; 
        $this->renderWidget();
    }
    private function setLayoutView($data = []){
        $this->layout->Widgets = $this->widgets;
        $this->layout->Views = $data;
        $this->layout->Messages =  $this->message;
    }
    private function setLayoutBool(bool $flash = false){
        $this->layout->Widgets = $this->widgets;
        $this->layout->Code = $flash;
        $this->layout->Messages = $this->message;
    }
    public function json($data,$type){
        switch ($type){
            case self::vGrid:
                $this->setLayoutView($data);
                break;
            case self::vBool:
                $this->setLayoutBool($data);
                break;
        }
        return response()->json($this->layout);
    }
    private  function renderWidget(){
        $widgets =  App::initWidgets();
        if(!empty($widgets)){
            foreach($widgets as $v){
                $this->widgets[] = unserialize($v)->run();
            }
        }
    }
    protected function addMessage($type,string $content,$code = ''){
        $this->message[] = [
            'Type'=>$type,
            'Mes'=>$content,
            'Code'=>$code
        ];
    }
}
