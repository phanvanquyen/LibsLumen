<?php
namespace App\Http\Controllers;


class HomeController extends BaseController
{
    
    /**
     * @queryParam user_id required The id of the user. Example: me
     * @bodyParam title string required The title of the post.
     * @bodyParam body string required The content of the post.
     * @bodyParam type string The type of post to create. Defaults to 'textophonious'.
     * @bodyParam author_id int the ID of the author. Example: 2
     * @bodyParam thumbnail image This is required if the post type is 'imagelicious'.
     * @response {
     *  "id": 4,
     *  "name": "Jessica Jones",
     *  "roles": ["admin"]
     * }
     */
    public function index(){
        $this->addMessage(self::SUCCESS,"Đăng ký thành công",'AT001');
        return $this->json(true,self::vBool);
    }
}
