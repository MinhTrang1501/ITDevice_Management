<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Minh Trang">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    @include('layouts.style')
    @stack('style')

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                @if (session('success'))
                <div class="text-center" role="alert">
                    <h4 class="alert alert-success">{{ session('success') }}</h4>
                </div>
                @endif
                {{-- @if (session('error'))
                <div class="text-center" role="alert">
                    <h4 class="alert alert-danger">{{ session('error') }}</h4>
                </div>
                @endif --}}
                @if (session('alert'))
                <div class="text-center" role="alert">
                    <h4 class="alert alert-danger">{{ session('alert') }}</h4>
                </div>
                @endif
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="/image/icon/logomain.png" style="max-height: 66px" alt="Logo" />
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full @error('email') is-invalid @enderror"
                                        type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                                        required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full  @error('password') is-invalid @enderror"
                                        type="password" name="password" placeholder="Password" required
                                        autocomplete="password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" {{ old('remember')
                                            ? 'checked' : '' }}><label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </label>
                                    <label>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('forget.password.get') }}">

                                            <small>{{ __('Forgot Your Password?') }}</small>
                                        </a>
                                        @endif
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">log in</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.script')
    @stack('script')>

</body>

</html>
<!-- end document-->
