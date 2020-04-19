<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 mx-auto my-5">

        @include('layouts.error-and-messages')
        
        <div class="card card-signin ">
          <div class="card-body">
            <h5 class="card-title text-center">Ujikom - SPP</h5>
            <form class="form-signin" method="POST" action="{{ route('siswa.login') }}">
              {{ csrf_field() }}
              <div class="form-label-group">
                <input type="number" name="nisn" id="nisn" class="form-control rounded-pill" placeholder="NISN" value="{{ old('nisn') }}" required autofocus>
                <div class="invalid-feedback">
                  
                </div>
              </div>
              
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control rounded-pill" placeholder="Password" required>
                <div class="invalid-feedback">
  
                </div>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
              </div>
              
              <button class="btn btn-lg btn-primary btn-block text-uppercase rounded-pill" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="{{ asset('js/app.js')}}"></script>
</html>