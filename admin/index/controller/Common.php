<?php
namespace app\index\controller;

use think\Controller;
use \org\Auth;
class Common     extends Controller
{
   
   
    
    //当任何函数加载时候  会调用此函数
    // public function _initialize(){//默认的方法  会自动执行 特征有点像构造方法
    //  $uid = session('user')['id'];
    //     if(empty($uid)){
    //          echo '<script>alert("没有登陆");location.href="'.U('index/login/index').'"</script>';
    //     }


    //     $AUTH = new \org\Auth();
    //    // MODULE_NAME(index).'/'.CONTROLLER_NAME(index).'/'.ACTION_NAME(index)==index/index/index

    //  if(!$AUTH->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, session('user')['id'])){

    //       echo '<script>location.href="'.U('index/login/check_error').'"</script>';
    //  }


    //  }
    
}
