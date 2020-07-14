<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Utako | Admin Login Page</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>
		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="{{asset('backend/css/login-v4.default.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{asset('backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles -->

		{{-- web icon --}}
		<link rel="shortcut icon" href="{{asset('backend/images/icon.png')}}" />
		
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(../backend/images/background.jpg);">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<img src="{{asset('backend/images/logo.png')}}">
							</div>
							<div class="kt-login__signin">
								
								{{-- Errors --}}
								@if (count($errors) > 0)
									<div class="alert alert-danger">
										@foreach ($errors->all() as $err)
											{{$err}}<br>
										@endforeach
									</div>
								@endif
								
								<form class="kt-form" method="POST" action="register">
									@csrf
									{{-- Thong Bao Dang Nhap Loi --}}
									@if (isset($error))
										<div class="text-danger">Tài khoản hoặc mật khẩu sai</div>
									@endif

                                    <div class="input-group">
										<input class="form-control" type="text" placeholder="Tên tài khoản" name="username" autocomplete="off">
									</div>
									<div class="input-group">
										<input class="form-control" type="email" placeholder="Email" name="email" autocomplete="off">
									</div>
									<div class="input-group">
										<input class="form-control" type="password" placeholder="Mật khẩu" name="password">
									</div>
									<div class="input-group">
										<input class="form-control" type="password" placeholder="Nhập lại mật khẩu" name="passwordAgain">
									</div>
									<div class="kt-login__actions">
										<button type="submit" id="kt_login_signin_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Đăng ký</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

	</body>

	<!-- end::Body -->

</html>