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
<body class="J_scroll_fixed">
	<div class="wrap jj">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('link/index');?>">友情链接</a></li>
			<li class="active"><a href="<?php echo U('link/add');?>">添加链接</a></li>
		</ul>
		<div class="common-form">
			<form method="post" class="form-horizontal J_ajaxForm" action="<?php echo U('link/add_post');?>">
				<fieldset>
					<div class="control-group">
						<label class="control-label">链接名称:</label>
						<div class="controls">
							<input type="text" class="input" name="link_name" value="">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">链接地址:</label>
						<div class="controls">
							<input type="text" class="input" name="link_url" value="">
							<span class="must_red">*</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">链接图标:</label>
						<div class="controls">
							<input type="text" class="input" name="link_image" value="">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">打开方式:</label>
						<div class="controls">
							<select name="link_target" class="normal_select">
								<?php if(is_array($targets)): foreach($targets as $key=>$vo): ?><option value="<?php echo ($key); ?>"><?php echo ($vo); ?></option><?php endforeach; endif; ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">描述:</label>
						<div class="controls">
							<textarea name="link_description" rows="5" cols="57"></textarea>
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">添加</button>
					<a class="btn" href="/cmfx/index.php/Admin/Link">返回</a>
				</div>
			</form>
		</div>
	</div>
	<script src="/cmfx/statics/js/common.js"></script>
</body>
</html>