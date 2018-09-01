<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Neat Admin Template</title>
<meta name="description" content="">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap-responsive.css">
<link rel="stylesheet" href="/admin/bootstrap/css/bootstrap-responsive.min.css">

<link rel="stylesheet" href="/admin/css/bootstrap.css">
<link rel="stylesheet" href="/admin/css/jquery.fancybox.css">
<link rel="stylesheet" href="/admin/css/login.css">
</head>
<body class='login_body'>
	<div class="wrap">
		<h2>后台登录页面</h2>
		<h4>欢迎来到后台登录页面</h4>
		<form action="/login"  autocomplete="off" method="post" class="validate">
   			@if(count($errors)>0)
   			<div class="alert alert-danger">
          <div class="mws-form-message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        </div>
            @endif
		<div class="login">
			<div class="email">
				<label for="user">用户名</label><div class="email-inpu"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" id="username" name="username"  value={{old('username')}}></div><span>{{session('errorr')}}</span></div></div>
			</div>
			<div class="pw">
				<label for="pw">密码</label><div class="pw-inpu"><div class="control-group"><div class="input-prepend"><span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="password" ></div><span>{{session('error')}}</span></div></div>
			</div>
			
		</div>
		<div class="submit">
			{{csrf_field()}}
			<button class="btn btn-red5">Login</button>
		</div>
	
		</form>
	
	</div>
<script src="/admin/js/jquery.js"></script>
<script src="/admin/js/jquery.validate.min.js"></script>
<script src="/admin/js/jquery.metadata.js"></script>
<script src="/admin/js/error.js"></script>
<script src="/admin/bootstrap/js/bootstrap.js"></script>
<script src="/admin/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>