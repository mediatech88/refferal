<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin-template/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-template/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin-template/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin-template/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        @if (Session::has('success'))
                            <div class="alert btn-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert btn-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('admin-template/images/logo.svg') }}" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form action="{{ route('registered') }}" method="POST" class="pt-3">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="name"
                                        placeholder="Username" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email"
                                        placeholder="Email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="refferal_code"
                                        placeholder="Refferal Code ( Optional )" name="refferal_code"
                                        value="{{ old('refferal_code') }}">
                                    @error('refferal_code')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password"
                                        placeholder="password" name="password">
                                    @error('password')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password2"
                                        placeholder="Confirm Password" name="password_confirmation">
                                </div>
                                <div class="mt-3">

                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                        UP</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="login.html" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin-template/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin-template/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin-template/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin-template/js/template.js') }}"></script>
    <script src="{{ asset('admin-template/js/settings.js') }}"></script>
    <script src="{{ asset('admin-template/js/todolist.js') }}"></script>
    <!-- endinject -->
</body>

</html>
