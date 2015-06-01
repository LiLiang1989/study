<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CH">
<head>
<meta charset="utf-8">
<title>猫的周末</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="/Public/favicon.ico">
<!-- Bootstrap core CSS -->
<link href="/Public/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="/Public/css/blog.css" rel="stylesheet">
<link href="/Public/css/style.css" rel="stylesheet">
<style type="text/css">
.error-msg {
	color: #e00;
	font-size: 14px;
	font-weight: bold;
	background-color: #fcf8e3;
	border: 1px solid #999;
	border-radius: 6px;
	padding: 5px 20px;
}

.success-msg {
	font-size: 14px;
	font-weight: bold;
	background-color: #fcf8e3;
	border: 1px solid #999;
	border-radius: 6px;
	padding: 5px 20px;
}
</style>
<script type="text/javascript" charset="utf-8"
	src="/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8"
	src="/Public/ueditor/ueditor.all.min.js">
</script>
</head>

<body role="document">

	<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#navbar" aria-expanded="false"
				aria-controls="navbar">
				<span class="sr-only">猫的周末</span> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">猫的周末</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo U('/index/');?>">首页</a></li>
				<!--<li><a href="<?php echo U('/index/page');?>">专栏</a></li>
			 <li><a href="#contact">活动</a></li> -->
			</ul>
			<!--向右对齐-->
      <ul class="nav navbar-nav navbar-right">
           <?php if($_SESSION['cur_user']!=null): ?><li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-expanded="false">欢迎您，<?php echo ($_SESSION['cur_user']); ?>
						<span class="caret"></span>
				</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo U('/column/publish');?>">发布文章</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">账号管理</li>
						<li><a href="<?php echo U('/user/modifyPSW');?>">修改密码</a></li>
						<li><a href="<?php echo U('/index/logout');?>">退出</a></li>
					</ul></li>	
				<?php else: ?>
				<li><a href="<?php echo U('/member/login');?>">登陆</a></li>
				<li><a href="<?php echo U('/member/register');?>">注册</a></li><?php endif; ?>
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-expanded="false">消息
				</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">我的私信</a></li>
						<li><a href="#">我的评论</a></li>
						<li><a href="#">系统通知</a></li>
					</ul></li>
            </ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</nav>



	<div class="container theme-showcase" role="main">
		<div class="row mt">
			<div class="col-sm-3">
				<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">文章发布</h3>
	</div>
	<div class="panel-body">
		<ul class="left-menu">
			<li><a href="<?php echo U('column/lists');?>">文章列表</a></li>
			<li><a href="<?php echo U('column/publish');?>">文章发布</a></li>
		</ul>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">资料管理</h3>
	</div>
	<div class="panel-body">
		<ul class="left-menu">
			<li><a href="<?php echo U('user/modifyPSW');?>">修改密码</a></li>
			<li><a href="<?php echo U('user/profile');?>">资料完善</a></li>
		</ul>
	</div>
</div>
			</div>
			<div class="col-sm-9 border-all mb">
				<form class="form-horizontal mb mt" id="form1" name="form1"
					action="/column/publish.html" method="post" action="Home/Column/publish">
					<h4 class="form-signin-heading">文章发布</h4>
					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-6" id="err-msg"></div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">文章标题</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="title" id="title"
								placeholder="标题">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">文章摘要</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="summary"
								id="summary" placeholder="概述">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">文章类型</label>
						<div class="col-sm-9">
							<select name="source" id="source" class="form-control">
								<option value="">请选择</option>
								<option value="原创">心理</option>
								<option value="转载">哲学</option>
								<option value="文学">文学</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">文章来源</label>
						<div class="col-sm-9">
							<select name="" id="type" class="form-control">
								<option value="">请选择</option>
								<option value="原创">原创</option>
								<option value="转载">转载</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">原文链接</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="link" id="link"
								placeholder="原文链接">
						</div>
					</div>
					<div class="mt mb">
						<textarea rows="80" cols="60" name="content" id="content"></textarea>
						<script type="text/javascript">
							var editor = new UE.ui.Editor();
							editor.render("content");
						</script>

					</div>

					<button class="btn btn-primary btn-width-100" type="button"
						id="sub">提交</button>
				</form>

			</div>
		</div>

	</div>
	<!-- /container -->
	<footer class="blog-footer">
	<p class="link">
		<a href="#">网站简介</a><span>|</span> <a href="#" target="_blank">商务合作</a><span>|</span>
		<a href="#" target="_blank">免责声明</a><span>|</span> <a href="#"
			target="_blank">网站导航</a><span>|</span> <a href="#" target="_blank">意见反馈</a><span>|</span>
		<a href="#">帮助中心</a><span>|</span><a href="/process">开发进度</a>
	</p>
	<div class="copyright">
		<p>猫的周末&copy;2015</p>
	</div>
</footer>
<script src="/Public/js/jquery.js"></script>
<script src="/Public/dist/js/bootstrap.min.js"></script>
<script src="/Public/assets/js/docs.min.js"></script>
<script src="/Public/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="/Public/js/function.js"></script>


	<script type="text/javascript">
		$(function() {
			$('#sub').unbind('click');
			$('#sub').click(
					function() {
						var flag1 = false;
						var flag2 = false;
						var title = $('#title').val().trim();
						var content = UE.getEditor('content').getPlainTxt().trim();
						if (title == '') {
							$('#err-msg').addClass('error-msg').html('标题不能为空');
							setTimeout(
									function() {
										$('#err-msg').removeClass('error-msg')
												.html('');
									}, 3000);
							return;
						} else {
							flag1 = true;
						}
						if (content == '') {
							$('#err-msg').addClass('error-msg')
									.html('文章内容不能为空');
							setTimeout(
									function() {
										$('#err-msg').removeClass('error-msg')
												.html('');
									}, 3000);
							return;
						} else {
							flag2 = true;
						}

						if (flag1 && flag2) {
							if (confirm('您确定要提交文章么？')) {
								$('#err-msg').addClass('error-msg').html(
										'正在提交表单......');
								$('#form1').submit();
							}
						}
					})
		})
	</script>
</body>
</html>