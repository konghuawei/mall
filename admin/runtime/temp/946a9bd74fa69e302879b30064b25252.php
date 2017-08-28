<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\wamp\www\tp5\jzshop.git\trunk\admin\index\view\goods\product_add.html";i:1463811937;}*/ ?>
<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/admin/lib/html5.js"></script>
<script type="text/javascript" src="/static/admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/PIE_IE678.js"></script>
<![endif]-->


<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<!-- <link href="/static/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" /> -->


<!-- 图片上传 -->

	<!-- <link rel="stylesheet" type="text/css" href="/static/admin/fileinput/css/default.css"> -->
    <link href="/static/admin/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />	
<!-- 图片上传 -->
</head>
<body>


<div class="page-container">
	<form action="<?php echo U('Goods/product_add_goods'); ?>" method="post" class="form form-horizontal" id="form-article-add">
		<div class="form-group">
			<label  for="inputEmail3" class="col-sm-2 control-label"><span class="c-red">*</span>商品标题：</label>
			<div class="col-xs-8 col-sm-9">
				<input type="text" class="form-control" value="" placeholder="" id="" name="goodsname">
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-xs-8 col-sm-9"> <span class="select-box">
				<select class="form-control" size="1" name="tid">
		            <option value="0" selected>顶级分类</option>
		            <?php foreach($data  as $vo): ?>
		            <option value="<?php echo $vo['id']; ?>,<?php echo $vo['pid']; ?>" ><?php echo $vo['level']; ?>级分类&nbsp;<?php echo $vo['name']; ?></option>
	
		            
		            <?php endforeach; ?>
		    
		           
		          </select>
				</span> </div>
		</div>

		
		<div class="form-group">
			<label class="col-sm-2 control-label">商品属性：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			
					<label for="checkbox-inline">1、推荐
					<input type="radio" id="checkbox-1" name="attributes" value="1" checked>
					</label>
				
			
					<label for="checkbox-inline">2、新上
					<input type="radio" id="checkbox-1" name="attributes" value="2">
					</label>
			
			
					<label for="checkbox-1">3、热卖</label>
					<input type="radio" id="checkbox-1" name="attributes" value="3">
					
		
				
					<label for="checkbox-1">4、促销</label>
					<input type="radio" id="checkbox-1" name="attributes" value="4">
					
			
				
					<label for="checkbox-1">5、包邮</label>
					<input type="radio" id="checkbox-1" name="attributes" value="5">
					
			
			
					<label for="checkbox-1">6、限时卖</label>
					<input type="radio" id="checkbox-1" name="attributes" value="6">
			
			
					<label for="checkbox-1">7、不参与会员折扣</label>
					<input type="radio" id="checkbox-1" name="attributes" value="7">
					
			
				
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">商品单位：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="unit" id="" placeholder="输入单位" value="" class="form-control" style=" width:25%">	如/个/件
			
				</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">商品编号：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="number" id="" placeholder="输入数字" value="" class="form-control" style=" width:25%">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">条形码：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="barcode" id="" placeholder="输入数字" value="" class="form-control" style=" width:25%">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">商品展示价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="curprice" id="" placeholder="输入数字" value="" class="form-control" style=" width:25%">
				元</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">市场价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="oriprice" id="" placeholder="输入数字" value="" class="form-control" style=" width:25%">
				元</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">成本价格：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="cosprice" id="" placeholder="输入数字" value="" class="form-control" style=" width:25%">
				元</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">库存量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="inventory" id="" placeholder="输入数字" value="" class="form-control" style=" width:25%">
				件</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">限制购买量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="restrict" id="datemin" placeholder="输入数字" class="form-control Wdate" style=" width:25%">
			件</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">已经购买量：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="already" id="datemax" placeholder="输入数字"  class="form-control Wdate" style=" width:25%">
			件</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">运费：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" name="freight" id="" value=""  placeholder="输入数字" class="form-control" style=" width:25%">
			元</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">是否上架：</label>
			
					<label for="checkbox-1" >上架</label>
					<input type="radio" id="checkbox-1" name="status" value="0" checked>
					
				
				
					<label for="checkbox-1">下架</label>
					<input type="radio" id="checkbox-1" name="status" value="1">
					
			
			
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">排序值：</label>
			<div class="formControls col-xs-2 col-sm-2">
				<input type="text" class="form-control" value="0" placeholder="" id="" name="reorder">
				<label for="checkbox-1">排序数字越低，排序越高</label>

			</div>
		</div>
	
		<div class="form-group">
			<label class="col-sm-2 control-label">上传图片：</label>
			<div id="formimageshow" class="formControls col-xs-2 col-sm-2" >
				<button  id="buttonShow" type="button" class="btn btn-success"  onclick="upliadfileshow();return false;" >上传轮播图片</button><br />
				<br />
		
				
				
			
				<label for="checkbox-1">最多支持4张轮播图</label>

			</div>
				
			

		</div>
<!-- 图片上传 -->
	<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
    <script src="/static/admin/fileinput/js/fileinput.js" type="text/javascript"></script>
    <script src="/static/admin/fileinput/js/fileinput_locale_zh.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
<!-- 图片上传 -->

<div class="form-group">
			<label class="col-sm-2 control-label">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<input  class="btn btn-primary radius " type="submit" value="添加商品">
			
			</div>
		</div>
	
</div>


<!-- 图片上传 -->
<div id="modal-webuploader" class="modal fade in" tabindex="-1" role="dialog" aria-hidden="false" style="display: none;">


	<div class="modal-dialog" style="width:660px;">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button"  id="close" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<ul class="nav nav-pills" role="tablist">
						<li id="li_upload" class="active" role="presentation"><a href="#upload" aria-controls="upload" role="tab" data-toggle="tab" onclick="$('#select').hide();" >上传图片</a></li>
						<!-- <li id="li_network" class="" role="presentation"><a href="#network" aria-controls="network" role="tab" data-toggle="tab" onclick="$('#select').hide();">提取网络图片</a></li> -->
					
					</ul>
				
		<div class="modal-body tab-content">
		<div role="tabpanel" class="tab-pane network" id="network">

		


	</div>

	<div role="tabpanel" class="tab-pane upload active" id="upload">
		<div id="uploader" class="uploader">
			 <form enctype="multipart/form-data">
	                <input id="file-0" class="file" type="file" multiple data-min-file-count="1">
	                <br>
	               
	            </form>
		</div>

	</div>

</div>
	

<!-- 图片上传 -->
</form>
<!--_footer 作为公共模版分离出去-->

<script type="text/javascript" src="/static/admin/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/static/admin/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui/js/comment.js"></script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/static/admin/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/static/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>



<script type="text/javascript">
// 图片上传
function upliadfileshow(){
	$("#modal-webuploader").fadeIn();
	$("#modal-webuploader").fadeIn('slow');
	
}

$("#close").click(function(){
	$("#modal-webuploader").fadeIn();
	$("#modal-webuploader").fadeOut('slow');
})


function deleteImage(id){
	$.ajax({
	   url:'<?php echo U("Goods/product_del_images"); ?>',
	   type:'get',
	   data:{id:id},
	   dataType:'json',
	   success:function(data){
	    	if(data==1){
	    		$('#imageDelete'+id).remove();
	    		var imagepath=$('input[class=imagepath]');
	      		if(imagepath.length<4){

	      			$('#buttonShow').removeAttr("disabled");
	      		}else{

	      		}
	    	}else{
	    	   alert('删除失败');
	    	}
	    }
	 
	})
		
}

//图片上传
initFileInput("file-0", "<?php echo U('product_add_images'); ?>");


//初始化fileinput控件（第一次初始化）
function initFileInput(ctrlName, uploadUrl) {    
    var control = $('#' + ctrlName); 
    control.fileinput({
        language: 'zh', //设置语言
        uploadUrl: uploadUrl, //上传的地址
        allowedFileExtensions : ['jpg', 'png','gif','jpeg'],//接收的文件后缀
        showUpload: true, //是否显示上传按钮
        showCaption: true,//是否显示标题
        showPreview:true,//是否显示文件的预览图。默认值true。
        showRemove:true,//是否显示删除/清空按钮。默认值true。
        browseClass: "btn btn-primary", //按钮样式             
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>", 
        maxFileCount: 4,//表示允许同时上传的最大文件个数
        dropZoneEnabled:true,//是否显示拖拽区域
     
        initialPreviewConfig: 	{
	        caption: ctrlName, 
	        width: '120px', 
	        url: uploadUrl, 
	        key: 101, 
	        success: function() { 

	         
	        }
	    }
	
       
    });



}
  $("#file-0").on("fileuploaded", function (event, data, previewId, index) {
  		


		var div=$('<div class="input-group " id="imageDelete'+data.response['id']+'" style="margin-top:.5em;margin-right:2em; float:left;"><input type="hidden" name="imagepath[]" class="imagepath" value="'+data.response['id']+'"/><img src="'+data.response['imagepath']+'"; class="img-responsive img-thumbnail" width="150"><a class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="deleteImage('+data.response['id']+')">×</a></div>');
		$('#formimageshow').after(div);
      	var imagepath=$('input[class=imagepath]');
      		if(imagepath.length>=4){

      			$('#buttonShow').attr("disabled","disabled");//禁用上传按钮
      			$("#modal-webuploader").fadeIn();//关闭上传
				$("#modal-webuploader").fadeOut('slow');
      		}else{

      		}
   			
   			 

 });

// 初始化富文本
$(function(){
	var ue = UE.getEditor('editor');
});
</script>
</body>
</html>