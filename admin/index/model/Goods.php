<?php	
namespace app\admin\model;

class Goods extends \think\Model
{

	protected $_validate = array(     array('goodsname','require','验证码必须！'), //默认情况下用正则进行验证

	     );


	}

?>