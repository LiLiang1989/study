<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CH">
<head>
<meta charset="utf-8">
<title>猫的周末--注册</title>

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
<body>
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


	<div class="container">
		<div class="row">
			<form class="form-horizontal border-all mb" id="form1" name="form1"
				method="post">
				<span class="fr mt pdr">已有账号？<a class="a-link" href="login.html">去登陆</a></span>
				<h4 class="tmiddle mt">欢迎注册猫的周末</h4>
				<div class="tmiddle">
					<span id="err_msg" class="error-msg"></span>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">用户名</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" name="yhm" id="yhm"
							placeholder="用户名">
					</div>
					<div class="col-sm-4">
						<span id="usr_msg" class="error-msg">（必填，用户名为6-16位字符））</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">密码</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="mm" name="mm"
							placeholder="密码">
					</div>
					<div class="col-sm-4">
						<span id="ps_msg" class="error-msg">（必填，用户名为6-16位字符））</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">确认密码</label>
					<div class="col-sm-4">
						<input type="password" class="form-control" name="oldPassword"
							id="rmm" name="rmm" placeholder="确认密码">
					</div>
					<div class="col-sm-4">
						<span id="rps_msg" class="error-msg">（必填，用户名为6-16位字符））</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">昵称</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nc" name="nc"
							placeholder="昵称">
					</div>
					<div class="col-sm-4">
						<span id="nc_msg" class="error-msg">（必填）</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">个人介绍</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="grjs" name="grjs"
							placeholder="个人介绍">
					</div>
					<div class="col-sm-4">
						<span id="grjs_msg" class="error-msg">（必填，用一句话介绍自己）</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">验证码</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="yzm" name="yzm"
							placeholder="验证码">
					</div>
					<div class="col-sm-4">
						<span id="yzm_msg" class="error-msg">（必填）</span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-8">
						<img id="verifyImg" src='/home/index/verify'
							onclick="fleshVerify()" title="点击刷新验证码" /><a href="#"
							onclick="fleshVerify()">看不清，点击换一个</a>
						<p>
							注册前请认真阅读本网站的《<a class="a-link" href="#">服务条款</a>》！
						</p>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label"></label>
					<div class="col-sm-6">
						<input class="btn btn-primary btn-width-100" type="button"
							id="reg" value="注册">
					</div>
				</div>

			</form>
		</div>
	</div>

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

</body>
</html>