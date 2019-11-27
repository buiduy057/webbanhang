<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Đăng kí thành viên</title>

<base href="{{asset('')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="user/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="user/css/dangki.css" rel='stylesheet' type='text/css' media="all"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- /css -->
</head>
<body>

<h1 class="w3ls">Đăng kí thành viên</h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">Dang ki</h2>
		<p class="agileits2">Đăng kí thành viên</p>
	</div>
	<div class="content-agile2">
		<form action="dangki" method="POST">
			@csrf
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="name" placeholder="Tên tài khoản" required=""  >
			</div>

			<div class="form-control w3layouts">	
				<input type="email" id="email" name="email" placeholder="Đăng nhập email" title="email" required="" >
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="" >
			</div>	

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="passwordAgain" placeholder="Đăng nhập lại password" id="password2" required="" >
			</div>			
			
			<input type="submit" class="register" value="Đăng kí">
		</form>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
		<ul class="social-agileinfo wthree2">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<p class="copyright w3l">© 2019 <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>
</html>