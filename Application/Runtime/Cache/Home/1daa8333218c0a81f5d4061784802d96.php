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
		<div class="alert alert-warning" id="alert">
			<button class="close" type="button" data-dismiss="alert">×</button>
			<h5>提示!</h5>
			只有审核通过的文章才能被他人看到。
		</div>
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
			<div class="col-sm-9 border-all">
				<table class="table">
					<caption>文章列表</caption>
					<thead>
						<tr>
							<th>标题</th>
							<th>发布时间</th>
							<th>状态</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($articleList)): $i = 0; $__LIST__ = $articleList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="success">
							<td><a href="<?php echo U('index/page/id/'.$vo['id']);?>" title="<?php echo ($vo["title"]); ?>"><?php echo ($vo["title"]); ?></a></td>
							<td><?php echo ($vo["create_time"]); ?></td>
							<td><?php echo ($vo["status"]); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						
					</tbody>
				</table>

				
				<ul class="pagination">
					<li><a href="#">上一页</a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">下一页</a></li>
				</ul>
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

</body>
</html>