<?php
namespace app\controller\front;
use \ko\Controller;

/**
 * 登录用户的数据输出，无缓存
 * @package    controllers
 * @version    $Id: user.php 97 2017-04-05 02:00:08Z yuchangchun $
 */
class Index extends Controller
{
    /**
     * index
     */
    public function index(){
//         die("hello new ko");
        $this->response->body('hello, world!');
    }

}
