<?php
namespace App\Http\Controllers;

use App\Http\Models\PostModel;
use Illuminate\Http\Request;
use App\Http\Libs\Views;

class PostController extends BaseController
{
    private $_dbModel,$_result=[];
    public function __construct(PostModel $postModel){
        parent::__construct();
        $this->_dbModel = $postModel;
    }
    /**
     * @bodyParam page integer.
     * @response {
     *  "Widgets": 4,
     *  "name": "Jessica Jones",
     *  "roles": ["admin"]
     * }
     */
    public function posts(){
        $result = $this->_dbModel->get();
        $this->_result[] =  Views::_fm('ListPost', $result);
        return $this->json($result,self::vGrid);
    }
    public function post(int $postId){
        $result = $this->_dbModel->where('Id',$postId)->get();
        return $this->json($result,self::vGrid);
    }
    public function save(Request $request){
        $post = new PostModel();
        $post->bind($request->all());
        return $this->json($post->save(),self::vBool);
    }
}
