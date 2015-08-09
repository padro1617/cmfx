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
			<li><a href="<?php echo U('ad/index');?>">所有广告</a></li>
			<li><a href="<?php echo U('ad/add');?>">添加广告</a></li>
		</ul>
		<div class="common-form">
			<form method="post" class="form-horizontal J_ajaxForm" action="<?php echo U('ad/edit_post');?>">
				<fieldset>
					<div class="control-group">
						<label class="control-label">广告名称:</label>
						<div class="controls">
							<input type="text" class="input" name="ad_name" value="<?php echo ($ad_name); ?>"><span class="must_red">*</span>
							<input type="hidden" class="input" name="ad_id" value="<?php echo ($ad_id); ?>">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">广告代码:</label>
						<div class="controls">
							<textarea name="ad_content" rows="5" cols="57"><?php echo ($ad_content); ?></textarea>
						</div>
					</div>
				</fieldset>
				<div class="form-actions">
					<button type="submit" class="btn btn-primary btn_submit J_ajax_submit_btn">更新</button>
					<a class="btn" href="/cmfx/index.php/Admin/Ad">返回</a>
				</div>
			</form>
		</div>
	</div>
	<script src="/cmfx/statics/js/common.js"></script>
</body>
</html>