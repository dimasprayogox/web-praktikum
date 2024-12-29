<!doctype html>
<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
  data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login - Sneat</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <div class="card px-sm-6 px-0">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <!-- Logo SVG -->
                  <svg width="25" viewBox="0 0 25 42" xmlns="http://www.w3.org/2000/svg">
                    <g fill="#696cff">
                      <path d="M13.79,0.36 L3.4,7.44 C0.57,9.69 -0.38,12.48 0.56,15.8 C0.69,16.23 1.1,17.79 3.12,19.23 C3.81,19.72 5.32,20.38 7.65,21.22 L7.6,21.25 L2.63,24.55 C0.45,26.3 0.09,28.51 1.56,31.17 C2.84,32.82 5.21,33.26 7.09,32.54 C8.35,32.06 11.46,30.0 16.42,26.37 C18.03,24.5 18.7,22.45 18.41,20.24 C17.96,17.53 16.18,15.58 13.05,14.37 L10.92,13.47 L18.62,7.98 L13.79,0.36 Z"></path>
                    </g>
                  </svg>
                </span>
                <span class="app-brand-text demo text-heading fw-bold">Sneat</span>
              </a>
            </div>
            <!-- /Logo -->

            <h4 class="mb-1">Welcome Back! 👋</h4>
            <p class="mb-4">Please sign in to your account</p>

            <form method="POST" action="{{ route('login') }}" id="formAuthentication">
              @csrf

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus />
                @error('email')
                <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
              </div>

              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required />
                @error('password')
                <span class="text-danger mt-2">{{ $message }}</span>
                @enderror
              </div>

              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Remember Me</label>
              </div>

              <div class="d-flex justify-content-between">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-sm">Forgot your password?</a>
                @endif
              </div>

              <div class="mt-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Log In</button>
              </div>
            </form>

            <p class="text-center mt-4">
              <span>New to Sneat?</span>
              <a href="{{ route('register') }}">Create an account</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Core JS -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
