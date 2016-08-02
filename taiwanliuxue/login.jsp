<%@page contentType="text/html"%>
<%@page pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
		<title>登录——台湾留学信息网</title>
		<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			function duihua() {
				String result = (String) request.getAttribute("result");
				System.out.println(result);
				if (result.equals("true")) {
					System.out.printf("yes");
					alert("登录成功！");
				} else {
					alert("登录失败！");
				}
			}
		</script>
	</head>

	<body style="background-image: url(img/background_login.jpg); background-position:center 265px; background-repeat:no-repeat">

		<h1 class="text-center">台湾留学信息网，为陆生提供更好的服务</h1>
		<form class="form-horizontal" role="form" action="login" method="post">
			<div class="form-group">
				<label for="username" class="col-sm-4 control-label"><span class="glyphicon glyphicon-user"></span> 用户名</label>
				<div class="col-sm-4">
					<input type="text" class="form-control" id="username" name="Username" placeholder="请输入用户名或者邮箱">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="col-sm-4 control-label"><span class="glyphicon glyphicon-lock"></span> 密码</label>
				<div class="col-sm-4">
					<input type="password" class="form-control" id="inputPassword" name="Password" placeholder="请输入密码">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-4">
					<div class="checkbox">
						<label>
							<input type="checkbox"> 请记住我
						</label>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-sm-offset-5 col-sm-1">
						<button type="submit" class="btn btn-primary btn-lg">登录</button>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-default btn-lg" onclick="javascript:window.open('register.jsp')">注册</button>
					</div>
				</div>
			</div>
		</form>

	</body>

</html>