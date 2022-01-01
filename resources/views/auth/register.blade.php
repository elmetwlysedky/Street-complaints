{{--<x-guest-layouts>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
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
    <title>Register</title>

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

            <!-- Registration form -->

                <form class="flex-fill" method="POST" action="{{ route('register') }}">
                    @csrf
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
                                    <h5 class="mb-0">Create account</h5>
                                    <span class="d-block text-muted">All fields are required</span>
                                </div>
                                <x-auth-validation-errors class="alert alert-warning alert-styled-left alert-dismissible" :errors="$errors"></x-auth-validation-errors>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="text" name="name" class="form-control" placeholder="User name">
                                            <div class="form-control-feedback">
                                                <i class="icon-user-plus text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                           <select  class="form-control"name="city_id">
                                               @foreach($cities as $city)
                                                   <option value="{{$city->id}}">{{$city->name}}</option>
                                               @endforeach
                                           </select>

                                            <div class="form-control-feedback">
                                                <i class="icon-city icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="email" name="email" class="form-control" placeholder="Your email">
                                            <div class="form-control-feedback">
                                                <i class="icon-mention text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="text" name="phone" class="form-control" placeholder="Mobile phone">
                                            <div class="form-control-feedback">
                                                <i class="icon-mobile icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="password" name="password" class="form-control" placeholder="Create password">
                                            <div class="form-control-feedback">
                                                <i class="icon-user-lock text-muted"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-group-feedback form-group-feedback-right">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password">
                                            <div class="form-control-feedback">
                                                <i class="icon-user-lock text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /registration form -->

        </div>
        <!-- /content area -->




    </div>
    <!-- /main content -->

</div>
<!-- /page content -->
</body>
</html>
