<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Register Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('login_style/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login_style/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('login_style/images/bg-01.jpg')}}');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="{{ route('admin.register.store') }}">
                    {{ csrf_field() }}

					<span class="login100-form-title p-b-49">
						Admin Register Form
					</span>

					<div class="wrap-input100 validate-input m-b-23{{ $errors->has('name') ? ' has-error' : '' }}" data-validate = "Username is reauired">
						<span class="label-input100">Name</span>
						<input class="input100" type="text"  name="name" value="{{ old('name') }}" required autofocus>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-23{{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Username is reauired">
						<span class="label-input100">E-Mail Address</span>
						<input class="input100" type="email" name="email" value="{{ old('email') }}" required autofocus>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

                    <div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-23{{ $errors->has('name') ? ' has-error' : '' }}" data-validate = "Username is reauired">
						<span class="label-input100">Comfirm Password</span>
						<input class="input100" type="password" name="password_confirmation" required>
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					
					<div class="text-right p-t-8 p-b-31">
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								S'enregistrer
							</button>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('login_style/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_style/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_style/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login_style/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_style/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_style/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login_style/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_style/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login_style/js/main.js')}}"></script>

</body>
</html>
