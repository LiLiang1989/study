<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CH">
<head>
<meta charset="utf-8">
<title>猫的周末--修改密码</title>

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
				<form class="form-horizontal mb" id="form1" name="form1"
					method="post">
					<h4 class="form-signin-heading mt">密码修改</h4>
					<div class="form-group">
						<label class="col-sm-2 control-label">原始密码</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" name="oldPassword"
								id="oldPassword" placeholder="原始密码">
						</div>
						<div class="col-sm-5">
							<span id="old-msg">（必填，密码为6-16位字符）</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">修改密码</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" name="newPassword"
								id="newPassword" placeholder="修改密码">
						</div>
						<div class="col-sm-5">
							<span id="new-msg">（必填，密码为6-16位字符）</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">确认密码</label>
						<div class="col-sm-5">
							<input type="password" class="form-control" name="newPassword2"
								id="newPassword2" placeholder="确认密码">
						</div>
						<div class="col-sm-5">
							<span id="new-msg2">（必填，与修改密码一致）</span>
						</div>
					</div>
					<div class="form-group">
						<span id="err-msg"></span>
					</div>
					<input class="btn btn-primary btn-width-100" type="button"
						id="submitPsw" value="提交">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
						class="btn btn-warning btn-width-100" type="reset" value="取消">
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
			$('#submitPsw').unbind('click');
			$('#submitPsw').click(
					function() {
						var flag1 = false;
						var flag2 = false;
						var flag3 = false;
						var oldPsw = $('#oldPassword').val();
						var newPsw = $('#newPassword').val();
						var newPsw2 = $('#newPassword2').val();
						if (oldPsw == '') {
							$('#old-msg').css('color', '#FF0000').html(
									'原始密码不能为空');
						} else {
							if (!/^\w{6,16}$/.test(oldPsw)) {
								$('#old-msg').css('color', '#FF0000').html(
										'格式不对，密码必须为6-16位字符');
							} else {
								$('#old-msg').html('');
								flag1 = true;
							}
						}

						if (newPsw == '') {
							$('#new-msg').css('color', '#FF0000').html(
									'修改密码不能为空');
						} else {
							if (!/^\w{6,16}$/.test(newPsw)) {
								$('#new-msg').css('color', '#FF0000').html(
										'格式不对，修改密码必须为6-16位字符');
							} else {
								$('#new-msg').html('');
								flag2 = true;
							}
						}
						if (newPsw2 == '') {
							$('#new-msg2').css('color', '#FF0000').html(
									'确认密码不能为空');
						} else {
							if (newPsw != newPsw2) {
								$('#new-msg2').css('color', '#FF0000').html(
										'确认密码与修改密码不一致');
							} else {
								$('#new-msg2').html('');
								flag3 = true;
							}
						}

						if (flag1 && flag2 && flag3) {
							$('#old-msg').html('');
							$('#new-msg').html('');
							$('#new-msg2').html('');
							if (confirm('您确定要修改密码么？')) {
								$('#err-msg').html('正在进行密码修改，请稍后.....');
								$.ajax({
									type : "post",
									url : "/Home/User/modifyPSW",
									dataType : 'json',
									data : $("#form1").serialize(),
									timeout : 3000,
									success : function(data) {
										$('#oldPassword').val('');
										$('#newPassword').val('');
										$('#newPassword2').val('');
										$('#err-msg').css('color', '#FF0000')
												.html(data);
										setTimeout(function() {
											$('#err-msg').html('');
										}, 3000);
									},
									error : function(XMLHttpRequest,
											textStatus, errorThrown) {
										fleshVerify();
										$('#err-msg').html('操作超时，请重新提交');
									}
								});
							}
						}
					})
		})
	</script>
</body>
</html>