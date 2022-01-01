{{--<x-guest-layouts>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layouts>--}}


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>login </title>


    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/Dashboard/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/Dashboard/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/Dashboard/global_assets/js/main/jquery.min.js"></script>
    <script src="/Dashboard/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="/Dashboard/global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/Dashboard/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="/Dashboard/assets/js/app.js"></script>
    <script src="/Dashboard/global_assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>



<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login card -->
            <form  class="login-form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-people icon-2x text-warning-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Login to your account</h5>
                        <span class="d-block text-muted">Your credentials</span>
                        <x-auth-session-status class="alert alert-warning alert-styled-left alert-dismissible" :status="session('status')"></x-auth-session-status>
                        <x-auth-validation-errors class="alert alert-warning alert-styled-left alert-dismissible" :errors="$errors"></x-auth-validation-errors>
                    </div>
                    <form  class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="text" name="phone" class="form-control" placeholder="Mobil number">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group d-flex align-items-center">
                        <div class="form-check mb-0">
                            <label class="form-check-label">
                                <input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
                                Remember
                            </label>
                        </div>

                        <a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-left2 ml-2"></i></button>
                    </div>



                    <div class="form-group text-center text-muted content-divider">
                        <span class="px-2">Don't have an account?</span>
                    </div>

                    <div class="form-group">

                        <a href="{{ route('register') }}" class="btn btn-dark btn-block">Sign up</a>
                    </div>
                    </form>
                    <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
                </div>

            <!-- /login card -->


        <!-- /content area -->




    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
</body>
</html>
