/**
 * 依赖于jquery
 */
$(function() {
	/**
	 * 遮罩登陆层
	 */
	$('#theme-login').click(function() {
		$('.theme-popover').style.display="";
	})
	$('.theme-poptit .close').click(function() {
		$('.theme-popover').style.display="none";
	})
	/**
	 * 登陆相关
	 */
	$("#divLogin").click(function() {
		var userName = $("#usr").val().trim();
		var password = $("#psw").val().trim();

		if (userName == "") {
			$("#loginMsg").html("用户名不能为空");
		}
		if (password == "") {
			$("#loginMsg").html("密码不能为空");
		}
		if (password != "" && userName != "") {
			$('#loginMsg').html('正在进行登陆验证，请稍后.....');
			$.ajax({
				type : "post",
				url : '/Home/Index/login',
				dataType : "json",
				data : $("#LoginForm").serialize(),
				timeout : 5000,
				success : function(data) {
					if (data == '登陆成功') {
						$("#loginMsg").html('登陆成功');
						setTimeout(function() {
							window.location.reload();
						}, 2000);
					} else {
						$("#loginMsg").html(data);
						return;
					}
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					$("#loginMsg").html("登陆超时，请重新登陆");
					return;
				}
			});

		} else {
			$("#loginMsg").html("用户名或密码不能为空");
			return;
		}

	})
	/**
	 * 登陆相关
	 */
	$("#login").click(function() {
		var userName = $("#usr").val().trim();
		var password = $("#psw").val().trim();

		if (userName == "") {
			$("#err_msg").html("用户名不能为空");
		}
		if (password == "") {
			$("#err_msg").html("密码不能为空");
		}
		if (password != "" && userName != "") {
			$('#err_msg').html('正在进行登陆验证，请稍后.....');
			$.ajax({
				type : "post",
				url : '/home/index/login',
				dataType : "json",
				data : $("#form1").serialize(),
				timeout : 5000,
				success : function(data) {
					if (data == '登陆成功') {
						$("#err_msg").html('登陆成功，正在跳转，请稍等...');
						setTimeout(function() {
							window.location.href = "/index.html";
						}, 2000);
					} else {
						$("#err_msg").html(data);
						return;
					}
				},
				error : function(XMLHttpRequest, textStatus, errorThrown) {
					$("#err_msg").html("登陆超时，请重新登陆");
					return;
				}
			});

		} else {
			$("#err_msg").html("用户名或密码不能为空");
			return;
		}

	})

	/**
	 * 注册相关
	 */
	$("#yhm").on('input', function(e) {
		var userName = $("#yhm").val().trim();
		if (userName == "") {
			$(this).css("background-color", "#FFFFCC");
			$("#usr_msg").html("用户名不能为空！");
		} else {
			$(this).removeClass("");
			if (!/^\w{6,16}$/.test(userName)) {
				$("#usr_msg").html("格式不对，用户名必须为6-16位字符");
			} else {
				$("#usr_msg").html("");
			}
		}
	});
	$("#mm").on('input', function(e) {
		var password = $("#mm").val().trim();
		if (password == "") {
			$(this).css("background-color", "#FFFFCC");
			$("#ps_msg").html("密码不能为空！");
		} else {
			if (!/^\w{6,16}$/.test(password)) {
				$("#ps_msg").html("格式不对，密码必须为6-16位字符");
			} else {
				$("#ps_msg").html("");
			}
		}
	});
	$("#rmm").on('input', function(e) {
		var repassword = $("#rmm").val().trim();
		var password = $("#mm").val().trim();
		if (repassword == "") {
			$(this).css("background-color", "#FFFFCC");
			$("#rps_msg").html("确认密码不能为空！");
		} else {
			if (password != repassword) {
				$("#rps_msg").html("两次密码不一致！");
			} else {
				$("#rps_msg").html("");
			}
		}
	});
	$("#nc").on('input', function(e) {
		var nc = $("#nc").val().trim();
		if (nc == "") {
			$(this).css("background-color", "#FFFFCC");
			$("#nc_msg").html("昵称不能为空！");
		} else {
			$("#nc_msg").html("");
		}
	});
	$("#grjs").on('input', function(e) {
		var grjs = $("#grjs").val().trim();
		if (grjs == "") {
			$(this).css("background-color", "#FFFFCC");
			$("#grjs_msg").html("个人介绍不能为空！");
		} else {
			$("#grjs_msg").html("");
		}
	});
	$("#yzm").on('input', function(e) {
		var yzm = $("#yzm").val().trim();
		if (yzm == "") {
			$(this).css("background-color", "#FFFFCC");
			$("#yzm_msg").html("验证码不能为空！");
		} else {
			$("#yzm_msg").html("");
		}
	});

	$("#reg").click(
			function() {
				var userName = $("#yhm").val().trim();
				var password = $("#mm").val().trim();
				var repassword = $("#rmm").val().trim();
				var nickName = $("#nc").val().trim();
				var grjs = $("#grjs").val().trim();
				var yzm = $("#yzm").val().trim();
				if (userName == "") {
					$("#usr_msg").html("用户名不能为空！");
				} else {
					if (!/^\w{6,16}$/.test(userName)) {
						$("#usr_msg").html("格式不对，用户名必须为6-16位字符");
					} else {
						$("#usr_msg").html("");
					}
				}
				if (password == "") {
					$("#ps_msg").html("密码不能为空！");
				} else {
					if (!/^\w{6,16}$/.test(password)) {
						$("#ps_msg").html("格式不对，密码必须为6-16位字符");
					} else {
						$("#ps_msg").html("");
					}
				}
				if (repassword == "") {
					$("#rps_msg").html("确认密码不能为空！");
				} else {
					if (password != repassword) {
						$("#rps_msg").html("两次密码不一致！");
					} else {
						$("#rps_msg").html("");
					}
				}
				if (nickName == "") {
					$("#nc_msg").html("昵称不能为空！");
				}
				if (grjs == "") {
					$("#grjs_msg").html("个人介绍不能为空！");
				}
				if (yzm == "") {
					$("#yzm_msg").html("验证码不能为空！");
				}
				if (userName != "" && password != "" && repassword != ""
						&& nickName != "" && grjs != "" && yzm != "") {
					if (confirm('您正在注册该网站，表明您已同意该网站的服务条款，请确定是否继续？')) {
						$('#err_msg').html('正在进行注册验证，请稍后.....');
						$.ajax({
							type : "post",
							url : '/home/index/register',
							dataType : "json",
							data : $("#form1").serialize(),
							timeout : 3000,
							success : function(data) {
								if (data == '注册成功') {
									$("#err_msg").html('您已注册成功，正在跳转，请稍等...！');
									setTimeout(function() {
										window.location.href = "/index.html";
									}, 2000);
								} else {
									$("#err_msg").html(data);
									fleshVerify();
									return false;
								}

							},
							error : function(XMLHttpRequest, textStatus,
									errorThrown) {
								fleshVerify();
								$("#err_msg").html("提交注册信息超时，请重新提交注册信息");
							}
						});
					}
				} else {
					return;
				}

			})
})

function checkRegMobile(regMobile){
  var str = regMobile;	
  var Expression = /^13(\d{9})$|^18(\d{9})$|^15(\d{9})$/;
  var objExp = new RegExp(Expression);
  if(objExp.test(str)==true){
	  return true;
  }else{
	  return false;
  }
}

function checkRegEmail(regEmail){
	  var str = regEmail;	
	  var Expression = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
	  var objExp = new RegExp(Expression);
	  if(objExp.test(str)==true){
		  return true;
	  }else{
		  return false;
	  }
	}


function fleshVerify() {
	var time = new Date().getTime();
	document.getElementById('verifyImg').src = '/home/index/verify/' + time;
}