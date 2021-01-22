<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.radixtouch.in/templates/logicswave/jiva/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 12:51:54 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Cardro Software</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('assets/img/favicon.ico') }}' />
</head>

<body style="background: grey">
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate="" action="/auth-register"
                                    method="POST">
                                    @csrf
                                    @include('partials.user.messages')
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input id="firstname" type="text" class="form-control :class=" { 'is-invalid' :
                                            form.errors.has('firstname') }" name="firstname" tabindex="1" required
                                            autofocus>
                                        <has-error :form="form" field="firstname"></has-error>
                                        <div class="invalid-feedback">
                                            Please fill in your first name
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input id="lastname" type="text" class="form-control :class=" { 'is-invalid' :
                                            form.errors.has('lastname') }" name="lastname" tabindex="1" required
                                            autofocus>
                                        <has-error :form="form" field="lastname"></has-error>
                                        <div class="invalid-feedback">
                                            Please fill in your last name
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control :class=" { 'is-invalid' :
                                            form.errors.has('email') }" name="email" tabindex="1" required autofocus>
                                        <has-error :form="form" field="email"></has-error>
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control :class=" { 'is-invalid'
                                            : form.errors.has('password') }" name="password" tabindex="2" required>
                                        <has-error :form="form" field="password"></has-error>
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="cpassword" class="control-label">Confirm Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control :class=" { 'is-invalid'
                                            : form.errors.has('cpassword') }" name="cpassword" tabindex="2" required>
                                        <has-error :form="form" field="cpassword"></has-error>
                                        <div class="invalid-feedback">
                                            please confirm your password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Register
                                        </button>
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


<!-- Mirrored from www.radixtouch.in/templates/logicswave/jiva/source/light/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jun 2020 12:51:54 GMT -->

</html>
