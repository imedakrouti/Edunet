{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
  --}}
  <!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 10 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>SignUp | Naja7ni</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	{{--  	<link rel="canonical" href="https://keenthemes.com/metronic" />  --}}
		<!--begin::Fonts-->
        <html direction="rtl" dir="rtl" style="direction: rtl" >
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="{{asset('admin/assets/css/pages/login/classic/login-5.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{asset('admin/assets/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="{{asset('admin/assets/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/assets/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="{{asset('admin/assets/media/svg/avatars/student.svg')}}" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid bgi-no-repeat bgi-size-cover " style="background-color: #324586;background-image: url({{asset('admin/assets/media/bg/motif-bg.png')}});">
					<div class="login-form  text-white p-7 position-relative overflow-hidden">
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="{{asset('admin/assets/media/logos/edukinib.png')}}" class="max-h-75px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20 text-center text-warning">
								<h3 class="font-weight-normal text-light">@lang('site.login')</h3>
								<p class="text-muted font-weight-bold font-size-h4">@lang('site.login_detail')</p>
							</div>
							<form class="form" id="kt_login_signin_form" action="{{route('login')}} "method="post">
                                @csrf
								<div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('first_name') is-invalid @enderror form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="email" placeholder="@lang('site.first_name')" name="first_name" autocomplete="off" value="{{old('first_name')}}"/>
                                    </div>
                                    @error('first_name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
								<div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                        <input class="form-control @error('last_name') is-invalid @enderror form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="email" placeholder="@lang('site.last_name')" name="last_name" autocomplete="off" value="{{old('last_name')}}"/>
                                    </div>
                                    @error('last_name')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								</div>
                                <div class="form-group">
                                    <div class="col-9 col-form-label">
                                        <div class="radio-inline">
                                            <label class="radio radio-outline radio-outline-2x radio-primary font-size-h6 font-weight-bolder text-light">
                                                <input type="radio" name="gender" @error('gender') is-invalid @enderror checked="checked" value="male" {{ (old('gender') == 'male') ? 'checked' : '' }}/>
                                                <span></span>
                                                @lang('site.male')
                                            </label>
                                            <label class="radio radio-outline radio-outline-2x radio-primary font-size-h6 font-weight-bolder text-light">
                                                <input type="radio" name="gender" @error('gender') is-invalid @enderror value="female" {{ (old('gender') == 'female') ? 'checked' : '' }}/>
                                                <span></span>
                                                @lang('site.female')
                                            </label>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                        <input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="email" placeholder="@lang('site.phone')" name="last_name" autocomplete="off"  placeholder="@lang('site.phone')" value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group  text-center">
                                    <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                                        <div class="image-input-wrapper" style="background-image: url({{URL::asset('admin/assets/media/users/100_3.jpg')}})"></div>
                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="profile_avatar_remove">
                                        </label>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group  ">
                                    <div class="form-group ">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror form-control form-control-solid h-auto py-4 px-6  font-size-h6" placeholder="@lang('site.address')" value="{{ old('address') }}">
                                        </div>
                                    @error('address')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group  ">
                                    <div class="form-group ">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror form-control form-control-solid h-auto py-4 px-6  font-size-h6" placeholder="@lang('site.email')" value="{{ old('email') }}">
                                        </div>
                                    @error('email')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror  form-control form-control-solid h-auto py-4 px-6  font-size-h6" placeholder="@lang('site.password')" value="">
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                        </div>
                                        <input type="password" name="password_confirmation"class="form-control @error('password_confirmation') is-invalid @enderror form-control form-control-solid h-auto py-4 px-6  font-size-h6" placeholder="@lang('site.password_confirmation')" value="">
                                    </div>
                                    @error('password_confirmation')
                                    <span class="invalid-feedback d-block" role="alert">

                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group text-center mt-10">
									<button id="" class="btn btn-pill btn-primary font-size-h4 px-15 py-3">@lang('site.SignUp')</button>
								</div>
								</div>
							</form>

						</div>
						<!--end::Login Sign in form-->
						<!--begin::Login Sign up form-->
						{{-- <div class="login-signup">
							<div class="mb-20">
								<h3 class="opacity-40 font-weight-normal">Sign Up</h3>
								<p class="opacity-40">Enter your details to create your account</p>
							</div>
							<form class="form text-center" id="kt_login_signup_form">
								<div class="form-group">
									<input class="form-control form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="text" placeholder="Fullname" name="fullname" />
								</div>
								<div class="form-group">
									<input class="form-control form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="password" placeholder="Password" name="password" />
								</div>
								<div class="form-group">
									<input class="form-control form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="password" placeholder="Confirm Password" name="cpassword" />
								</div>
								<div class="form-group text-left px-8">
									<div class="checkbox-inline">
										<label class="checkbox checkbox-outline checkbox-white opacity-60 text-white m-0">
										<input type="checkbox" name="agree" />
										<span></span>I Agree the
										<a href="#" class="text-white font-weight-bold ml-1">terms and conditions</a>.</label>
									</div>
									<div class="form-text text-muted text-center"></div>
								</div>
								<div class="form-group">
									<button id="" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Sign Up</button>
									<button id="" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</button>
								</div>
							</form>
						</div> --}}
						<!--end::Login Sign up form-->
						<!--begin::Login forgot password form-->
						<div class="login-forgot">
							<div class="mb-20">
								<h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
								<p class="opacity-40">Enter your email to reset your password</p>
							</div>
							<form class="form" id="">
								<div class="form-group mb-10">
									<input class="form-control form-control form-control-solid h-auto py-4 px-6  font-size-h6" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<button id="" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Request</button>
									<button id="" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</button>
								</div>
							</form>
						</div>
						<!--end::Login forgot password form-->
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
		<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
        <script src="{{asset('admin/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<!--end::Page Scripts-->

		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
{{-- 		<script src="{{asset('admin/assets/js/pages/custom/login/login-general.js')}}"></script>
 --}}		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html>
