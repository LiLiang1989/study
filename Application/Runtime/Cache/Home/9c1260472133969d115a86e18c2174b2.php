<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>猫的周末</title>
<link href="/Public/css/style.css" rel="stylesheet">

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
			<div class="col-sm-9 blog-main">
				<div class="blog-post">
					<h2 class="blog-post-title"><?php echo ($detail["title"]); ?></h2>
					<div class="blog-post-meta">
						<span class="fr"><?php echo ($detail["create_time"]); ?></span> 作者：<a href="#"><?php echo ($detail["usr_name"]); ?></a>&nbsp;&nbsp;&nbsp;<span>阅读（12）</span><span>赞（12）</span>
					</div>
					<div class="bdsharebuttonbox">
						<a class="bds_more" href="#" data-cmd="more"></a><a
							class="bds_qzone" href="#" data-cmd="qzone"></a><a
							class="bds_tsina" href="#" data-cmd="tsina"></a><a
							class="bds_tqq" href="#" data-cmd="tqq"></a><a class="bds_renren"
							href="#" data-cmd="renren"></a><a class="bds_weixin" href="#"
							data-cmd="weixin"></a>
					</div>
					<script>
						window._bd_share_config = {
							"common" : {
								"bdSnsKey" : {},
								"bdText" : "",
								"bdMini" : "2",
								"bdPic" : "",
								"bdStyle" : "0",
								"bdSize" : "16"
							},
							"share" : {},
							"image" : {
								"viewList" : [ "qzone", "tsina", "tqq",
										"renren", "weixin" ],
								"viewText" : "分享到：",
								"viewSize" : "16"
							},
							"selectShare" : {
								"bdContainerClass" : null,
								"bdSelectMiniList" : [ "qzone", "tsina", "tqq",
										"renren", "weixin" ]
							}
						};
						with (document)
							0[(getElementsByTagName('head')[0] || body)
									.appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='
									+ ~(-new Date() / 36e5)];
					</script>
					<div class="detail-content"><?php echo ($detail["content"]); ?></div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">评论列表</h3>
					</div>
					<div class="panel-body">
						<div class="comment-list" id="comment-list">
							<form class="comment-box" id="commentForm" name="commentForm"
								method="post" role="form">
								<div class="form-group">
									<input class="form-control" name="commentContent"
										id="commentContent" placeholder="发表评论">
								</div>
								<div class="form-group">
									<input type="hidden" name="articleId" value="<?php echo ($detail["id"]); ?>">
									<a class="btn btn-primary" type="button" id="pl">发表评论</a>
								</div>
							</form>
							<?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="comment-box cf">
								<div class="comment-info">
									<a href=""><?php echo ($vo["nick_name"]); ?></a><span><?php echo ($vo["create_time"]); ?></span>
								</div>
								<?php if($vo['father_comment'] != null): ?><div class="reply-box alert alert-warning">
									<div class="comment-info">
										<a href=""><?php echo ($vo['father_comment']['nick_name']); ?></a><span><?php echo ($vo['father_comment']['create_time']); ?></span>
									</div>
									<div class="comment-content"><?php echo ($vo['father_comment']['content']); ?></div>
								</div><?php endif; ?>
								<div class="comment-content">
									<p><?php echo ($vo["content"]); ?></p>
								</div>
								<div class="comment-reply">
									<a onclick="response(this,'<?php echo ($vo["id"]); ?>');" class="reply-link">回复</a>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							<div id="response" style="display: none;">
								<form class="reponse-box" id="responseForm" name="responseForm"
								method="post" role="form">
								<div class="form-group">
								<input type="hidden" name="repleyCommentId" id="repleyCommentId">
									<input class="form-control" name="responseContent"
										id="responseContent" placeholder="回复内容">
								</div>
								<div class="form-group">
									<a class="btn btn-primary" type="button" id="submitReply">提交回复</a>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.blog-main -->
			<!--  -->
<div class="col-sm-3 blog-sidebar">
	<!-- <div class="sidebar-module sidebar-module-inset">
		<h4>猫的周末</h4>
		<p>
			<img src="/Public/images/ad02.jpg"
				style="width: 100px; height: 100px; border: 1px solid #f0f0f0;">
		</p>
		<p>猫的周末</p>
	</div> -->
	<div class="sidebar-module border-all">
		<h4>猫的周末</h4>
		<ol class="list-unstyled">
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
		</ol>
	</div>
	<div class="sidebar-module border-all">
		<h4>猫的周末</h4>
		<ol class="list-unstyled">
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
			<li><a href="#">猫的周末</a></li>
		</ol>
	</div>
</div>
<!-- /.blog-sidebar -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
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
			$('#pl').unbind('click');
			$('#pl').click(function() {
								var content = $('#commentContent').val().trim();
								if (content == '') {
									alert('评论填写不能为空');
									return;
								}
								$('#pl').val('正在提交').attr("disabled","disabled");
								$.ajax({
											type : "post",
											url : "/Home/Comment/addComment",
											dataType : 'json',
											data : $("#commentForm")
													.serialize(),
											success : function(data) {
												if (data == '添加评论成功') {
													alert(data);
													$('#commentContent').val('');
													window.location.reload();
												} else if (data == '请先登录') {
													alert(data);
													window.location.href = "/member/login.html?backurl="+ window.location.href;
												} else {
													alert(data);
												}
												$('#pl').val('发表评论').attr("disabled", false);
											},
											error : function(XMLHttpRequest,
													textStatus, errorThrown) {
												alert('操作超时，请重新提交');
												$('#pl').val('发表评论').attr("disabled", false);
											}
										});
							})
							
			$('#submitReply').unbind('click');
			$('#submitReply').click(function() {
								var content = $('#responseContent').val().trim();
								if (content == '') {
									alert('回复内容不能为空');
									return;
								}
								$('#submitReply').val('正在提交').attr("disabled","disabled");
								$.ajax({
											type : "post",
											url : "/Home/Comment/addCommentReply",
											dataType : 'json',
											data : $("#responseForm").serialize(),
											success : function(data) {
												if (data == '回复成功') {
													alert(data);
													$('#responseContent').val('');
													window.location.reload();
												} else if (data == '请先登录') {
													alert(data);
													window.location.href = "/member/login.html?backurl="+ window.location.href;
												} else {
													alert(data);
												}
												$('#submitReply').val('提交回复').attr("disabled", false);
											},
											error : function(XMLHttpRequest,
													textStatus, errorThrown) {
												alert('操作超时，请重新提交');
												$('#submitReply').val('提交回复').attr("disabled", false);
											}
										});
							})
		})

		function response(obj,id) {
			var oComment = obj.parentNode;//这里是关键。找到当前留言对象。
			oComment.appendChild(document.getElementById("response"));
			document.getElementById("response").style.display = "block";
			document.getElementById("repleyCommentId").value = id;
		}
	</script>
</body>
</html>