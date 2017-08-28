<?php
namespace app\index\controller;

use \think\Controller;
use \think\Cache;
class Index      extends Controller
{
    public function index(){
        header("Content-type:text/html;charset=utf-8");
    	
        $type=$this->types();

        $this->assign('type',$type);
   
        return $this->fetch();
    }


    public function types(){
        $options = [
            'type'  =>  'Redis', // 缓存类型为File
            'expire'=>  7200, // 缓存有效期为永久有效
            'prefix'=>  '',//缓存的前缀
          
        ];
        $redis=Cache::connect($options);
      
        if(!$redis->get('types')){
             $m=M('goods_type');
            $type=$m->where("pid=0")->select();//获取一级分类
            $type2=array();
            $type3=array();

            foreach($type as $key=>$value){
                $type[$key]['child']=array();//二级分类的名字
                $type2=$m->where("pid=".$value['id'])->select();//获取二级分类

                foreach($type2 as $k=>$v){
                    
                  

                    array_push($type[$key]['child'],$v);//合并一级与二级分类
                    $type[$key]['child'][$k]['child2']=array();////三级分类的名字
                   
                        $type3=$m->where("pid=".$v['id'])->select();//获取三级分类
                        foreach($type3 as $v2){


                              array_push($type[$key]['child'][$k]['child2'],$v2);//合并一级二级三级分类
                        }
                      
                   
                }

            }
            $redis->set('types',$type);
            return $type;
        }else{
            return $redis->get('types');
        }

       
       
    }

    public function lists(){
        header("Content-type:text/html;charset=utf-8");
        $m=M('goods');
        $i=M('goods_files');
        $data=$m->where("tid=".$_GET['id'].' or tpid='.$_GET['id'])->select();
        $array=array();

        foreach($data as $k=>$v){
            $v['image']=array();//图片的名字
            $imageId=explode(',',$v['imagepath']);
           
            foreach($imageId as $vid){
                $img=$i->field('filepath')->where('id='.$vid)->find();
                 array_push($v['image'],$img);
            }
            array_push($array,$v);
        }
        
   
        $this->assign('data',$array);
        return $this->fetch();
    }

    public function details(){
    	return $this->fetch();
    }
}
