@extends('frontend.layout.main')

@section('main-section')
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================== Login Section ================== -->
    <section class="py-5">
        <div class="container">

            <div class="row justify-content-center align-items-center m-auto">
                <div class="col-12">
                    <div class="bg-mode shadow rounded-3 overflow-hidden">
                        <div class="row g-0">
                            <!-- Vector Image -->
                            <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
                                <div class="p-3 p-lg-5">
                                    <img src="assets/img/login.svg" class="img-fluid" alt="">
                                </div>
                                <!-- Divider -->
                                <div class="vr opacity-1 d-none d-lg-block"></div>
                            </div>

                            <!-- Information -->
                            <div class="col-lg-6 order-1">
                                <div class="p-4 p-sm-7">
                                    <!-- Logo -->
                                    <a href="index.html">
                                        <img class="img-fluid mb-4" src="assets/img/logo-icon.png" width="70" alt="logo">
                                    </a>
                                    <!-- Title -->
                                    <h1 class="mb-2 fs-2">Create New Account</h1>
                                    <p class="mb-0">Already a Member?<a href="login.html" class="fw-medium text-primary"> Signin</a></p>

                                    <!-- Form START -->
                                    <form class="mt-4 text-start" action="{{ route('registrationForm.post') }}" method="post">
                                        @csrf
                                        <div class="form py-4">
                                            <div class="form-group">
                                                <label class="form-label">Enter Name</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Enter email ID</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                            <div class="form-group">
                                                <label class="form-label">Enter Password</label>
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                                    <span class="fa-solid fa-eye toggle-password position-absolute top-50 end-0 translate-middle-y me-3"></span>
                                                </div>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                            <div class="form-group">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="*********" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" id="submit" class="btn btn-primary full-width font--bold btn-lg">Create An Account</button>
                                            </div>

                                            <div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
                                                <div class="modal-flex-first">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="savepassword" value="option1">
                                                        <label class="form-check-label" for="savepassword">Keep me signed in</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Divider -->
                                        <div class="prixer px-3">
                                            <div class="devider-wraps position-relative">
                                                <div class="devider-text text-muted-2 text-md">Sign-Up with Socials</div>
                                            </div>
                                        </div>

                                        <!-- Social login buttons -->
                                        <div class="social-login py-4 px-md-2">
                                            <ul class="row align-items-center justify-content-center g-3 p-0 m-0">
                                                <li class="col">
                                                    <a href="#" class="square--60 border br-dashed rounded-2 mx-auto">
                                                        <i class="fa-brands fa-facebook color--facebook fs-2"></i>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="square--60 border br-dashed rounded-2 mx-auto">
                                                        <i class="fa-brands fa-whatsapp color--whatsapp fs-2"></i>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="square--60 border br-dashed rounded-2 mx-auto">
                                                        <i class="fa-brands fa-linkedin color--linkedin fs-2"></i>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="square--60 border br-dashed rounded-2 mx-auto">
                                                        <i class="fa-brands fa-dribbble color--dribbble fs-2"></i>
                                                    </a>
                                                </li>
                                                <li class="col">
                                                    <a href="#" class="square--60 border br-dashed rounded-2 mx-auto">
                                                        <i class="fa-brands fa-twitter color--twitter fs-2"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Copyright -->
                                        <div class="text-primary-hover mt-3 text-center">
                                            Copyrights ©2023 GeoTrip.com. Built by <a href="https://www.themezhub.com/">Themezhub</a>.
                                        </div>
                                    </form>
                                    <!-- Form END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================== Login Section End ================== -->

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
@endsection

<script>
    $('#registrationForm').submit(function(e) {
        e.preventDefault();
    })
</script>