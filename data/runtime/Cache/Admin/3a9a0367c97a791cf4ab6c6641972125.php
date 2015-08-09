<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/cmfx/statics/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/cmfx/statics/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/cmfx/statics/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/cmfx/statics/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
		form .input-order{margin-bottom: 0px;padding:3px;width:40px;}
		.table-actions{margin-top: 5px; margin-bottom: 5px;padding:0px;}
		.table-list{margin-bottom: 0px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/cmfx/statics/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/cmfx/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/cmfx/statics/js/jquery.js"></script>
    <script src="/cmfx/statics/js/wind.js"></script>
    <script src="/cmfx/statics/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
</head>
<body>
<div class="wrap">
  <div id="error_tips">
    <h2>应用<?php echo ($app); ?>菜单导入成功！</h2>
    <div class="error_cont">
      <ul>
      	<?php if(!empty($newmenus)): if(is_array($newmenus)): foreach($newmenus as $key=>$vo): ?><li><?php echo ($vo); ?></li><?php endforeach; endif; ?>
      	<?php else: ?>
      		<li>应用<?php echo ($app); ?>没有新菜单导入！</li><?php endif; ?>
      </ul>
      	<?php if(!empty($nextapp)): ?><script>
	      		setTimeout(function(){
	      			location.href ="<?php echo u('admin/menu/spmy_getactions',array('app'=>$nextapp));?>";
	      		},1000);
	      	</script>
	      	<div class="error_return">
	      		<a href="<?php echo u('admin/menu/spmy_getactions',array('app'=>$nextapp));?>" class="btn btn-primary">下一个应用</a>
	      		<a href="<?php echo u('admin/menu/lists');?>" class="btn" style="margin-left:10px;">返回</a>
	      	</div>
      	<?php else: ?>
      		<div>全部导入成功！</div>
      		<div class="error_return"><a href="<?php echo u('menu/lists');?>" class="btn">返回</a></div><?php endif; ?>
    </div>
  </div>
</div>
<script src="/cmfx/statics/js/common.js"></script>
</body>
</html>