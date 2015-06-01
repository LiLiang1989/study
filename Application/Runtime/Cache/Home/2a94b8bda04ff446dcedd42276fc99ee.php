<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
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


	<div class="container theme-showcase" role="main">
		<!-- <div id="carousel-example-generic" class="carousel slide"
			data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0"
					class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img data-src="holder.js/1140x100/auto/#777:#555/text:First slide"
						alt="First slide">
				</div>
				<div class="item">
					<img data-src="holder.js/1140x100/auto/#666:#444/text:Second slide"
						alt="Second slide">
				</div>
				<div class="item">
					<img data-src="holder.js/1140x100/auto/#555:#333/text:Third slide"
						alt="Third slide">
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-example-generic"
				role="button" data-slide="prev"> <span
				class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">上一张</span>
			</a> <a class="right carousel-control" href="#carousel-example-generic"
				role="button" data-slide="next"> <span
				class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">下一张</span>
			</a>
		</div>  -->
		<div class="row mt">
			<div class="col-sm-9">
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="author-info">
							<div class="info-img">
								<img alt="头像" src="/Public/images/ad02.jpg" />
							</div>
							<div class="info-detail">
								<div class="nick-name">
									<a href="<?php echo U('index/page');?>" title="扯法律几个蛋">扯法律几个蛋</a>
								</div>
								<div class="desc">见习律师孙果冻</div>
								<div class="related-info">
									文章<span><a href="<?php echo U('index/page');?>">[200]</a></span>
								</div>
							</div>
						</div>
						<div class="art-list">
							<ul>
								<li><a href="<?php echo U('index/page');?>">连硕科技成立机器人职教中心，欲填补机器人职教缺口</a></li>
								<li><a href="<?php echo U('index/page');?>">连硕科技成立机器人职教中心，欲填补机器人职教缺口</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel panel-default">
						<div class="author-info">
							<div class="info-img">
								<img alt="头像" src="/Public/images/ad02.jpg" />
							</div>
							<div class="info-detail">
								<div class="nick-name">
									<a href="<?php echo U('index/page');?>" title="扯法律几个蛋">扯法律几个蛋</a>
								</div>
								<div class="desc">见习律师孙果冻</div>
								<div class="related-info">
									文章<span><a href="<?php echo U('index/page');?>">[200]</a></span>
								</div>
							</div>
						</div>
						<div class="art-list">
							<ul>
								<li><a href="<?php echo U('index/page');?>">连硕科技成立机器人职教中心，欲填补机器人职教缺口</a></li>
								<li><a href="<?php echo U('index/page');?>">连硕科技成立机器人职教中心，欲填补机器人职教缺口</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col-sm-4 -->
			<div class="col-sm-3">
				<div class="list-group">
					<a href="<?php echo U('index/page');?>" class="list-group-item active">最新最热 </a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a>
				</div>
				<div class="list-group">
					<a href="<?php echo U('index/page');?>" class="list-group-item active">经典美文 </a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a>
				</div>
				<div class="list-group">
					<a href="<?php echo U('index/page');?>" class="list-group-item active">专栏作家 </a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a> <a href="<?php echo U('index/page');?>"
						class="list-group-item">水调歌头</a>
				</div>
			</div>
			<!-- /.col-sm-4 -->
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

</body>
</html>