@extends('frontend.layout.main')

@section('main-section')
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
                            <div class="p-3 p-sm-4 p-md-5">
                                <!-- Logo -->
                                <a href="index.html">
                                    <img class="img-fluid mb-4" src="assets/img/logo-icon.png" width="70" alt="logo">
                                </a>
                                <!-- Title -->
                                <h1 class="mb-2 fs-2">Welcome Back Adam!</h1>
                                <p class="mb-0">Are you new here?<a href="register.html" class="fw-medium text-primary"> Create an
                                        account</a></p>

                                <!-- Form START -->
                                <form class="mt-4 text-start">
                                    <div class="form py-4">
                                        <div class="form-floating mb-4">
                                            <input type="email" class="form-control" placeholder="name@example.com" required="">
                                            <label>User Name</label>
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="password" class="form-control" id="password-field" name="password" placeholder="Password"  required="">
                                            <label>Password</label>
                                            <span
                                                class="toggle-password position-absolute top-50 end-0 translate-middle-y me-3 fa-regular fa-eye"></span>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
                                        </div>

                                        <div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
                                            <div class="modal-flex-first">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="savepassword" value="option1">
                                                    <label class="form-check-label" for="savepassword">Save Password</label>
                                                </div>
                                            </div>
                                            <div class="modal-flex-last">
                                                <a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget Password?</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Divider -->
                                    <div class="prixer px-3">
                                        <div class="devider-wraps position-relative">
                                            <div class="devider-text text-muted-2 text-md">Sign In with Socials</div>
                                        </div>
                                    </div>

                                    <!-- Google and facebook button -->
                                    <div class="social-login py-4 px-md-2">
                                        <ul class="row align-items-center justify-content-center g-3 p-0 m-0">
                                            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i
                                                        class="fa-brands fa-facebook color--facebook fs-2"></i></a></li>
                                            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i
                                                        class="fa-brands fa-whatsapp color--whatsapp fs-2"></i></a></li>
                                            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i
                                                        class="fa-brands fa-linkedin color--linkedin fs-2"></i></a></li>
                                            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i
                                                        class="fa-brands fa-dribbble color--dribbble fs-2"></i></a></li>
                                            <li class="col"><a href="#" class="square--60 border br-dashed rounded-2 mx-auto"><i
                                                        class="fa-brands fa-twitter color--twitter fs-2"></i></a></li>
                                        </ul>
                                    </div>

                                    <!-- Copyright -->
                                    <div class="text-primary-hover mt-3 text-center"> Copyrights ©2023 GeoTrip.com. Build by <a
                                            href="https://www.themezhub.com/">Themezhub</a>. </div>
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
@endsection