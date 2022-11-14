{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-input-label for="name" :value="__('Name')" />--}}

{{--                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}

{{--                <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-input-label for="email" :value="__('Email')" />--}}

{{--                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}

{{--                <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-input-label for="password" :value="__('Password')" />--}}

{{--                <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}

{{--                <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}

{{--                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-primary-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-primary-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}


    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{'backend'}}/assets/images/favicon-32x32.png" type="image/png"/>
    <!--plugins-->
    <link href="{{'backend'}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="{{'backend'}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"/>
    <link href="{{'backend'}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{'backend'}}/assets/css/pace.min.css" rel="stylesheet"/>
    <script src="{{'backend'}}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{'backend'}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{'backend'}}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{'backend'}}/assets/css/app.css" rel="stylesheet">
    <link href="{{'backend'}}/assets/css/icons.css" rel="stylesheet">
    <title>Login</title>
</head>

<body class="bg-login">
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">

                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Quickonshop</h3>
                                    <p>Already have an account? <a href="{{route('login')}}">Sign in here</a></p>
                                </div>
                                <div class="d-grid">
                                    <a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span
                                            class="d-flex justify-content-center align-items-center">
                          <img class="me-2" src="{{'backend'}}/assets/images/icons/search.svg" width="16"
                               alt="Image Description">
                          <span>Sign Up with Google</span>
											</span>
                                    </a> <a href="javascript:;" class="btn btn-success btn-facebook"><i
                                            class="bx bxl-facebook"></i>Sign Up with Facebook</a>
                                </div>
                                <div class="login-separater text-center mb-4"><span>OR SIGN UP WITH EMAIL</span>
                                    <hr/>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="col-12">
                                            <label for="name" class="form-label"> Name</label>
                                            <input name="name" type="text" value="{{old('name')}}" class="form-control"
                                                   id="name" placeholder="name">
                                        </div>

                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input name="email" type="email" value="{{old('email')}}"
                                                   class="form-control" id="inputEmailAddress"
                                                   placeholder="Email Address">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input name="password" type="password" class="form-control border-end-0"
                                                       id="inputChoosePassword" value="12345678"
                                                       placeholder="Enter Password"> <a href="javascript:;"
                                                                                        class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="password_confirmation" class="form-label">Enter Confirmation
                                                Password </label>
                                            <div class="input-group" id="show_hide_password">
                                                <input name="password_confirmation" type="password"
                                                       class="form-control border-end-0" id="password_confirmation"
                                                       value="12345678" placeholder="Enter Password"> <a
                                                    href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="bx bxs-lock-open"></i>Sign Up
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!-- Bootstrap JS -->
<script src="{{'backend'}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{'backend'}}/assets/js/jquery.min.js"></script>
<script src="{{'backend'}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{'backend'}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{'backend'}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<!--app JS-->
<script src="{{'backend'}}/assets/js/app.js"></script>
</body>

</html>
