<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CH">
<head>
<meta charset="utf-8">
<title>猫的周末--资料完善</title>

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
				<form class="form-horizontal" name="headPhotoForm" id="headPhotoForm" method="post" enctype="multipart/form-data">
					<h4 class="form-profile-heading mt">上传头像</h4>
					<div class="form-group">
						<div class="col-sm-6">
							<img width="120px" height="120px" src="/Public/images/ad02.jpg" alt="缩略图">
							<div class="caption">
								<p>*请选择1M以下的图片上传</p>
								<p>
									<a href="#" class="btn btn-primary" role="button" id="hp">上传头像</a>
								</p>
							</div>
						</div>
					</div>
					</form>
					<h4 class="form-profile-heading mt">基本资料</h4>
					<form class="form-horizontal mb" name="basicProfileForm" id="basicProfileForm" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">真实姓名</label>
						<div class="col-sm-6">
							<input type="text" name="trueName" class="form-control" placeholder="真实姓名" value="<?php echo ($userData["real_name"]); ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">性别</label>
						<div class="col-sm-6">
						    <?php if($userData['sex']==0): ?><input type="radio" name="sex" value="0" checked>男 <input type="radio" name="sex" value="1">女<?php else: ?>
							<input type="radio" name="sex" value="0">男 <input type="radio" name="sex" value="1" checked>女<?php endif; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">手机号码</label>
						<div class="col-sm-6">
							<input type="text" name="mobile" id="mobile" class="form-control" placeholder="手机号码" value="<?php echo ($userData["phone"]); ?>">
						</div>
						<div class="col-sm-6">
						    <span style="color:#f00" id="mobileError"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">电子邮箱</label>
						<div class="col-sm-6">
							<input type="text" name="email" id="email" class="form-control" placeholder="电子邮箱" value="<?php echo ($userData["email"]); ?>">
						</div>
						<div class="col-sm-6">
							<span style="color:#f00" id="emailError"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">个人简介</label>
						<div class="col-sm-6">
							<input type="text" name="intro" class="form-control" placeholder="个人简介" value="<?php echo ($userData["intr"]); ?>">
						</div>
					</div>
					<input class="btn btn-primary" type="button" id="bf" value="提交"/>
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

	<script src="/Public/layer/layer.js"></script>
	<script type="text/javascript">
	$(function(){
		$("#hp").click(function(){
			layer.open({
				type : 2,
				title : '头像上传',
				maxmin : true,
				shadeClose : false, //点击遮罩关闭层
				area : [ '800px', '600px' ],
				content : '/upload_crop.php'
			});	
		});	
		
		$('#bf').click(function(){
			var mobile = $('#mobile').val().trim();
			var email = $('#email').val().trim();
			if(mobile!=''){
				if(checkRegMobile(mobile)==false){
				   $('#mobileError').html('手机格式不正确');
				   return false;
				   }
			}
			if(email!=''){
				if(checkRegEmail(email)==false){
					$('#emailError').html('邮箱格式不正确');
			       return false;
			       }
			}
			$('#mobileError').html('');
			$('#emailError').html('');
			$('#bf').val("正在提交...").attr("disabled","disabled");
			$.ajax({
				type : "post",
				url : '/User/profile',
				dataType : "json",
				data : $("#basicProfileForm").serialize(),
				timeout : 5000,
				success : function(data) {
					if (data == '提交成功') {
						layer.msg(data);
						$('#bf').val("提交").attr("disabled",false)
					} else {
						layer.msg(data);
						return;
					}
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					$('#bf').val("提交").attr("disabled",false)
					layer.msg("系统未响应，请重新提交");
					return;
				}
			});
			
		})
	})
	</script>
</body>
</html>