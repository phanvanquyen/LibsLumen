<?php 
namespace  App\Http\Widgets;

use App\Http\Libs\Widget;

class ListBranch extends Widget {
    private  $result = [];
    public function render(){
        return $this->result;
    }
}
?>