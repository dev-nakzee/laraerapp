<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:44 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{ str_replace('_',' ',env('APP_NAME'))}}</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- v4.0.0-alpha.6 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('assets/light/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/light/css/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/light/css/et-line-font/et-line-font.css') }}">
<link rel="stylesheet" href="{{ asset('assets/light/css/themify-icons/themify-icons.css') }}">

<!-- jQuery 3 --> 
<script src="{{ asset('assets/light/js/jquery.min.js') }}"></script> 

<!-- v4.0.0-alpha.6 --> 
<script src="{{ asset('assets/light/bootstrap/js/bootstrap.min.js') }}"></script> 

<!-- template --> 
<script src="{{ asset('assets/light/js/niche.html') }}"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body" style="border: 2px solid #000; box-shadow: 2px 5px 7px #999;">
    <h3 class="login-box-msg">{{ __('Login') }}</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="row mb-3">
            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

            <div class="col-md-6">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col --> 
      </div>
    </form>

  </div>
  <!-- /.login-box-body --> 
</div>
<!-- /.login-box --> 
</body>

<!-- Mirrored from uxliner.com/adminkit/demo/main/ltr/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 17:41:45 GMT -->
</html>