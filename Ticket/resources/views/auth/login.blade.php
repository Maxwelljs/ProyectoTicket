<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')|{{env('APP_NAME')}}</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Font Awesome -->
        {{--  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> --}}
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        {{-- <link rel="stylesheet" href="../../dist/css/adminlte.min.css"> --}}
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      </head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="{{route ('login')}}"><b>{{env('APP_NAME')}}</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingresar al sistema</p>

    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('user_name') is-invalid @enderror" placeholder="Usuario" name="user_name" value="{{ old('user_name') }}" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="contraseña" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
                {{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}}>
                <label class="form-check-label" for="remember">
                    {{ __('Recordar sesión')}}
                </label>--}}

              <input type="checkbox" id="remember">
              <label for="remember">
                Recordar sesíon
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
    </form>
      <p class="mb-1">
        <a href="#">Recuperar contraseña</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script src="{{asset('js/vendor.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>

</body>
</html>
