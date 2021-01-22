<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/logicswave/jiva/source/light/auth-reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 13:11:15 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ config('app.name', 'Coach-Admin') }}</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico') }}" />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Reset Password</h4>
                            </div>
                            <div class="card-body">
                                <p class="text-muted">Enter Your New Password</p>
                                @include('partials.user.messages')
                                <form method="POST" action="/auth-password-reset/{{ $user->id }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="password">Old Password</label>
                                        <input id="password" type="password" class="form-control" name="Oldpassword"
                                            tabindex="1" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">New Password</label>
                                        <input id="password" type="password" class="form-control pwstrength :class="
                                            { 'is-invalid' : form.errors.has('password') }" data-indicator="pwindicator"
                                            name="password" tabindex="2" required>
                                        <has-error :form="form" field="password"></has-error>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-confirm">Confirm New Password</label>
                                        <input id="password-confirm" type="password" class="form-control :class="
                                            { 'is-invalid' : form.errors.has('cpassword') }" name="cpassword"
                                            tabindex="2" required>
                                        <has-error :form="form" field="cpassword"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Reset Password
                                        </button>
                                        <button class="btn btn-danger btn-lg btn-block" type="reset"
                                            onclick="history.back();">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>


<!-- Mirrored from www.radixtouch.in/templates/logicswave/jiva/source/light/auth-reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 13:11:15 GMT -->

</html>
